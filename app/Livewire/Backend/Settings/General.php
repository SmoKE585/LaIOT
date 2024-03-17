<?php

namespace App\Livewire\Backend\Settings;

use App\Models\Settings\Setting;
use Livewire\Attributes\Validate;
use Livewire\Component;

class General extends Component
{
    #[Validate([
        'settings.id' => 'required',
        'settings.use_db_for_code' => 'required|boolean',
        'settings.script_rate_limit' => 'required|int|min:60|max:9999',
    ])]
    public array $settings;

    public function mount()
    {
        $this->settings = config_app_all();
    }

    public function updatedSettings($value, $key)
    {
        $this->validate();

        Setting::where('id', $this->settings['id'])->update([
            $key => $value
        ]);
    }

    public function render()
    {
        //dd(config_app('script_rate_limit'));

        return view('livewire.backend.settings.general');
    }
}
