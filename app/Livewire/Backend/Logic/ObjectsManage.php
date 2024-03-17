<?php

namespace App\Livewire\Backend\Logic;

use App\Models\Logic\SystemClass;
use App\Models\Logic\SystemObject;
use App\Traits\ValidationAttributes;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ObjectsManage extends Component
{
    use ValidationAttributes;

    #[Validate]
    public array $data = [
        'id' => null,
        'system_class_id' => null,
        'title' => '',
        'description' => '',
    ];

    public function rules()
    {
        return [
            'data.id' => 'nullable|exists:system_objects,id',
            'data.system_class_id' => 'required|int|min:1|exists:system_classes,id',
            'data.title' => 'required|string|max:250|min:3',
            'data.description' => 'nullable|string|max:250|min:3',
        ];
    }

    public function mount($id = null)
    {
        if(!is_null($id)) {
            $this->data = SystemObject::findOrFail($id)->toArray();
        }
    }

    #[Computed]
    public function availableClasses()
    {
        return SystemClass::orderBy('updated_at', 'DESC')->pluck('title', 'id');
    }

    public function save()
    {
        $validate = $this->validate();

        SystemObject::updateOrCreate([
            'id' => $validate['data']['id']
        ], $validate['data']);

        $this->redirect(route('backend.logic.objects'));
    }
    public function render()
    {
        return view('livewire.backend.logic.objects-manage');
    }
}
