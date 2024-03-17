<?php

namespace App\Livewire\Backend\Logic;

use App\Actions\PersonalCodeControl;
use App\Actions\SaveCode;
use App\Models\Logic\Script;
use App\Rules\Cron;
use App\Traits\ValidationAttributes;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ScriptsManage extends Component
{
    use ValidationAttributes;

    #[Validate]
    public array $data = [
        'id' => null,
        'title' => '',
        'description' => '',
        'allow_external' => false,
        'active' => false,
        'cron' => '',
    ];
    #[Validate]
    public string $code = '';

    public function rules()
    {
        return [
            'code' => 'required|string|max:4294967000',
            'data.id' => 'nullable|integer',
            'data.title' => 'required|string|max:250|min:3',
            'data.description' => 'nullable|string|max:250|min:3',
            'data.allow_external' => 'required|boolean',
            'data.active' => 'required|boolean',
            'data.cron' => ['nullable', new Cron],
        ];
    }

    public function mount($id = null)
    {
        if(!is_null($id)) {
            $model = Script::findOrFail($id);
            $this->data = $model->toArray();
            $this->code = (new PersonalCodeControl())->setModel($model)->get();
        }
    }

    public function save()
    {
        $validate = $this->validate();

        $model = Script::updateOrCreate([
            'id' => $validate['data']['id'],
        ], [
            'title' => $validate['data']['title'],
            'description' => $validate['data']['description'],
            'allow_external' => $validate['data']['allow_external'],
            'active' => $validate['data']['active'],
            'cron' => $validate['data']['cron']
        ]);

        (new PersonalCodeControl())->setModel($model)->put($validate['code']);

        $this->redirect(route('backend.logic.scripts'));
    }

    public function render()
    {
        return view('livewire.backend.logic.scripts-manage');
    }
}
