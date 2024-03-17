<?php

namespace App\Livewire\Backend\Users;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public function rules()
    {
        return [
            'filter.sort' => Rule::in(['updated_at','created_at', 'title']),
            'filter.show' => Rule::in(['all','allow_internet', 'active']),
            'search' => 'nullable|string'
        ];
    }

    #[Url]
    public string $search = '';

    #[Url]
    public array $filter = [
        'sort' => 'updated_at',
        'show' => 'all',
    ];

    public array $filterProps = [
        'updated_at' => 'дате изменения',
        'created_at' => 'дате создания',
        'title' => 'названию',
    ];

    #[Computed]
    public function items()
    {
        return User::paginate(10);
    }

    public function render()
    {
        return view('livewire.backend.users.users');
    }
}
