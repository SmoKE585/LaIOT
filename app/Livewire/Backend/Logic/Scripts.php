<?php

namespace App\Livewire\Backend\Logic;

use App\Models\Logic\SystemScript;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Scripts extends Component
{
    use  WithPagination;

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

    public function updatedFilter($value, $key)
    {
        $this->validateOnly($key);
    }

    #[Computed]
    public function items()
    {
        $model = new SystemScript();

        if($this->filter['show'] == 'allow_internet') {
            $model = $model->where('allow_external', '1');
        } elseif($this->filter['show'] == 'active') {
            $model = $model->where('active', '0');
        }

        if(!empty($this->search)) {
            $model = $model->where(function ($query) {
                return $query->where('title', 'like', '%'.$this->search.'%')->orwhere('description', 'like', '%'.$this->search.'%');
            });
        }

        return $model->orderBy($this->filter['sort'], 'DESC')->paginate(10);
    }

    public function render()
    {
        return view('livewire.backend.logic.scripts');
    }
}
