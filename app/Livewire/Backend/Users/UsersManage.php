<?php

namespace App\Livewire\Backend\Users;

use App\Models\User;
use App\Traits\ValidationAttributes;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsersManage extends Component
{
    use ValidationAttributes, WithFileUploads;

    #[Validate]
    public array $data = [
        'id' => null,
        'login' => '',
        'email' => '',
        'realname' => '',
        'password' => '',
        'allow_web' => true,
        'allow_admin' => false,
    ];

    #[Validate('nullable|image|max:1024')] // 1MB Max
    public $photo = null;

    public function rules()
    {
        return [
            'data.id' => 'nullable|exists:users,id',
            'data.login' => 'required|alpha_num:ascii|min:3|max:250',
            'data.email' => 'required|email:rfc,dns',
            'data.realname' => 'required|string|max:250|min:3',
            'data.password' => [
                Rule::requiredIf(function() {
                    return empty($this->data['id']);
                }),
                'string',
                'max:20',
                'min:8',
                'confirmed',
            ],
            'data.allow_web' => 'required|boolean',
            'data.allow_admin' => 'required|boolean',
        ];
    }

    public User $model;

    public function mount($id = null)
    {
        if(!is_null($id)) {
            $this->model = User::findOrFail($id);
            $this->data = $this->model->toArray();
        } else {
            $pass = fake()->password(8, 10);
            $this->data['password'] = $pass;
            $this->data['password_confirmation'] = $pass;
        }
    }

    public function save()
    {
        $validate = $this->validate();

        $user = User::updateOrCreate([
            'id' => $validate['data']['id']
        ], $validate['data']);

        if($validate['photo'] && $user) {
            if(File::exists(storage_path('app/public/users/photos/'.$user->id))) {
                File::cleanDirectory(storage_path('app/public/users/photos/'.$user->id));
            }

            $this->photo->storeAs(path: 'public/users/photos/'.$user->id, name: 'avatar.'.$this->photo->extension());
        }

        $this->redirect(route('backend.users'));
    }

    public function delete()
    {
        $this->model->delete();
        $this->redirect(route('backend.users'));
    }

    public function render()
    {
        return view('livewire.backend.users.users-manage');
    }
}
