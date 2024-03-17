<?php

namespace App\Livewire\Modules\Logic;

use App\Models\Logic\SystemClass;
use App\Models\Logic\SystemProperties;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class PropertyItem extends Component
{
    public SystemClass $class;
    public ?int $object_id;

    public function mount($class, $object_id = null)
    {
        $this->class = $class;
        $this->object_id = $object_id;
    }

    #[On('reloadProperties')]
    #[Computed]
    public function properties()
    {
        return $this->class->properties;
    }

    public function deleteProp(SystemProperties $properties)
    {
        \DB::transaction(function () use ($properties) {
            $properties->setting()->delete();
            $properties->delete();
        });
    }

    public function render()
    {
        return view('livewire.modules.logic.property-item');
    }
}
