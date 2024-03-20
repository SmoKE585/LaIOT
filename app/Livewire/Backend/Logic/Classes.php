<?php

namespace App\Livewire\Backend\Logic;

use App\Models\Logic\SystemClass;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Classes extends Component
{
    public int $items_count = 0;

    public function mount()
    {

    }

    #[Computed]
    public function items()
    {
        return SystemClass::orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.backend.logic.classes');
    }
}
