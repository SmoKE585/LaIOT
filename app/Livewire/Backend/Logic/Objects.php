<?php

namespace App\Livewire\Backend\Logic;

use App\Models\Logic\SystemObject;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Objects extends Component
{
    public int $related_class = 0;

    public function mount()
    {
        $this->related_class = (int) request()->get('related_class');
    }

    #[Computed(persist: false)]
    public function items()
    {
        return SystemObject::where(function ($query) {
            return $this->related_class > 0 ? $query->where('system_class_id', $this->related_class) : $query;
        })->get();
    }

    public function render()
    {
        return view('livewire.backend.logic.objects');
    }
}
