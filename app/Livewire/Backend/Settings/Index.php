<?php

namespace App\Livewire\Backend\Settings;

use App\Models\Settings\Setting;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Index extends Component
{
    #[Validate]
    public array $settings;

    public function rules()
    {
        return [
            'settings.path_to_php' => 'required|string|min:3',
            'settings.place_to_save_code' => [
                'required',
                Rule::in(['files', 'database'])
            ],
            'settings.base_dir' => 'required|string|min:3',
            'settings.script_rate_limit' => 'required|int|min:60|max:9999',
            'settings.disable_login_by_pass' => 'required|boolean',
            'settings.default_login_path' => 'required|string|min:3',
        ];
    }

    public function mount()
    {
        $this->settings = config('laiot');
        $dbConfig = config('database');

        $this->settings = array_merge($this->settings, [
            'db_connection' => $dbConfig['default'],
            'db_host' => $dbConfig['connections'][$dbConfig['default']]['host'] ?? '',
            'db_port' => $dbConfig['connections'][$dbConfig['default']]['port'] ?? '',
            'db_database' => $dbConfig['connections'][$dbConfig['default']]['database'] ?? '',
            'db_username' => $dbConfig['connections'][$dbConfig['default']]['username'] ?? '',
            'db_password' => $dbConfig['connections'][$dbConfig['default']]['password'] ?? '',
        ]);
    }

    public function updatedSettings($value, $key)
    {
        $this->validateOnly('settings.'.$key);

        put_to_env($key, $value);
    }

    public function render()
    {
        //dd(config_app('script_rate_limit'));

        return view('livewire.backend.settings.index');
    }
}
