<?php

namespace App\Livewire\Backend\Logic;

use App\Models\Logic\SystemClass;
use Livewire\Component;

class ClassesView extends Component
{
    public SystemClass $class;

    public function mount(SystemClass $class)
    {
        $this->class = $class;
    }

    public function render()
    {
        return view('livewire.backend.logic.classes-view');
    }
}
