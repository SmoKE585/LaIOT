<?php

namespace App\Livewire\Backend\Modules\Logic;

use App\Actions\SaveCode;
use App\Actions\StoreProperty;
use App\Models\Logic\SystemClass;
use App\Traits\ValidationAttributes;
use Livewire\Attributes\Validate;
use Livewire\Component;

class PropertyManage extends Component
{
    use ValidationAttributes;

    public SystemClass $class;

    #[Validate]
    public array $data = [
        'id' => null,
        'system_class_id' => null,
        'system_object_id' => null,
        'title' => '',
        'value' => '',
    ];
    #[Validate]
    public array $props = [
        'system_property_id' => null,
        'keep_history' => 0,
        'validation' => null,
    ];

    public function rules()
    {
        return [
            'data.id' => 'nullable|integer',
            'data.title' => 'required|string|max:250|min:2',
            'data.value' => 'nullable|string|max:250',
            'data.system_object_id' => 'nullable|exists:system_objects,id',
            'data.system_class_id' => 'required|exists:system_classes,id',

            'props.system_property_id' => 'nullable|exists:system_properties,id',
            'props.keep_history' => 'nullable|integer',
            'props.validation' => 'nullable|string',
        ];
    }

    public function mount()
    {
        $this->data['system_class_id'] = $this->class->id;
    }

    public function save()
    {
        $validate = $this->validate();

        try {
            $prop = storeProperty($validate['data'], $validate['props']);

            $this->dispatch('reloadProperties')->to('modules.logic.property-item');
        } catch (\Throwable $exception) {
            return $this->addError('data.title', 'Произошла ошибка в операции записи!');
        }
    }

    public function render()
    {
        return view('livewire.backend.modules.logic.property-manage');
    }
}
