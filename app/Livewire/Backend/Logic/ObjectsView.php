<?php

namespace App\Livewire\Backend\Logic;

use App\Models\Logic\SystemObject;
use Livewire\Component;

class ObjectsView extends Component
{
    public SystemObject $object;

    public function mount(SystemObject $object)
    {
        $this->object = $object;
    }

    public function render()
    {
        return view('livewire.backend.logic.objects-view');
    }
}
