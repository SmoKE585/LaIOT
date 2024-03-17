<?php

namespace App\Livewire\Modules\MQTT;

use App\Models\Modules\MQTTValue;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    #[Url]
    public string $path = '';

    public function mount()
    {

    }

    #[Computed]
    public function topics()
    {
        $paths = explode('/', $this->path);


        $model = new MQTTValue();

        if($this->path != '') {
            foreach ($paths as $key => $path) {
                $model = $model->where('path->sub_'.$key, $path)->orWhere('path->sub_'.($key+1), $path);
            }

//            ->orWhere(function ($query) use ($key, $path) {
//                return $query->where('path->sub_'.($key+1), $path)->whereNull('path->sub_'.($key+2));
//            })
        } else {
            $model = $model->orWhere(function ($query) {
                return $query->where('path->sub_0', 'like', '%')->whereNull('path->sub_1');
            })->orWhere(function ($query) {
                return $query->where('path->sub_1', '')->whereNull('path->sub_2');
            });
        }
        //dd($model->toSql());

        return $model->get();
    }

    public function render()
    {
        return view('livewire.modules.m-q-t-t.index');
    }
}
