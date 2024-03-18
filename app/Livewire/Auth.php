<?php

namespace App\Livewire;

use App\Traits\ValidationAttributes;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.empty')]
class Auth extends Component
{
    use ValidationAttributes;

    #[Validate]
    public array $data = [
        'email' => '',
        'password' => '',
    ];

    #[Url]
    public string $to = '';

    public function mount()
    {
        if(auth()->check()) {
            auth()->logout();
            session()->regenerate();
        }
    }

    public function rules()
    {
        return [
            'data.email' => 'required|email:rfc,dns',
            'data.password' => 'required|min:8|max:250',
        ];
    }

    public function save()
    {
        $validate = $this->validate();

        if(auth()->attempt($validate['data'])) {
            $this->redirect(!empty($this->to) ? $this->to : route('backend.dashboard'));
        } else {
            $this->addError('data.email', 'Неверный логин или пароль!');
        }
    }

    public function render()
    {
        return view('livewire.auth');
    }
}
