<?php

namespace App\Livewire\Backend\Logic;

use App\Models\Logic\SystemClass;
use App\Traits\ValidationAttributes;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ClassesManage extends Component
{
    use ValidationAttributes;

    #[Validate]
    public array $data = [
        'id' => null,
        'parent_id' => 0,
        'title' => '',
        'description' => '',
    ];

    public function rules()
    {
        return [
            'data.id' => 'nullable|exists:system_classes,id',
            'data.parent_id' => 'required|int|min:0',
            'data.title' => 'required|string|max:250|min:3|unique:system_classes,title',
            'data.description' => 'nullable|string|max:250|min:3',
        ];
    }

    public function mount($id = null)
    {
        if(!is_null($id)) {
            $this->data = SystemClass::findOrFail($id)->toArray();
        }
    }

    #[Computed]
    public function availableClasses()
    {
        return SystemClass::where('parent_id', 0)->orderBy('updated_at', 'DESC')->pluck('title', 'id');
    }

    public function save()
    {
        $validate = $this->validate();

        SystemClass::updateOrCreate([
            'id' => $validate['data']['id']
        ], $validate['data']);

        \Cache::flush();

        $this->redirect(route('backend.logic.classes'));
    }

    public function render()
    {
        return view('livewire.backend.logic.classes-manage');
    }
}
