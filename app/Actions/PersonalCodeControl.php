<?php

namespace App\Actions;

use App\Exceptions\Logic\PersonalCodeEmptyCodeException;
use App\Exceptions\Logic\PersonalCodeErrorInCodeCodeException;
use App\Exceptions\Logic\PersonalCodeFindBadFunctionsException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

/**
 * Получаем код
 */

final class PersonalCodeControl
{
    protected Model $model;
    protected string $model_name;


    public function setModel(Model $model)
    {
        $this->model = $model;
        $this->model_name = str_replace('App\\Models\\', '', get_class($model));

        return $this;
    }

    public function put(string $code)
    {
        if(config('laiot.place_to_save_code') == 'files') {
            if(!File::exists(storage_path('codes/'.$this->model_name))) {
                File::makeDirectory(storage_path('codes/'.$this->model_name), 0666, true, true);
            }

            File::put(storage_path('codes/'.$this->model_name.'/'.$this->model->id.'.laiot'), $code);
        }
    }

    public function get()
    {
        if(config('laiot.place_to_save_code') == 'files') {
            return File::get(storage_path('codes/'.$this->model_name.'/'.$this->model->id.'.laiot'));
        }
    }

    public function run()
    {
        //Проверяем код и готовим к выполнению
        try {
            $code = $this->get();

            preg_match_all('/(scandir|eval|chdir|chmod|chown|chgrp|getenv|get_current_user|proc_get_status|get_cfg_var|getmypid|getmyuid|include|include_once|require|require_once)\((.*?)\)/', $code, $findBadFunction);

            $findBadFunction = array_filter($findBadFunction);

            if(!empty($findBadFunction)) {
                throw new PersonalCodeFindBadFunctionsException('Попытка выполнения кода с запрещеными функцмями. ID: '.$this->model->id, $this->model_name);
            }

            //Меняем каталог на "песочницу"
            $params[\request()->method()] = \request()->all();
            $params['HEADERS'] = \request()->header();

            $base_dir = config('laiot.base_dir');
            $code = "chdir('".$base_dir."/app/Sandbox/');\n".$code;
        } catch (PersonalCodeFindBadFunctionsException $exception) {
            $code = null;
        } catch (\Throwable $exception) {
            $code = null;
        }

        try {
            if(empty($code)) throw new PersonalCodeEmptyCodeException('Запрос выполнения пустого кода. ID: '.$this->model->id, $this->model_name);

            $params[\request()->method()] = \request()->all();
            $params['HEADERS'] = \request()->header();


            eval($code);
        } catch (PersonalCodeEmptyCodeException $exception) {

        } catch (\Throwable $exception) {
            new PersonalCodeErrorInCodeCodeException('Ошибка при выполнении кода: '.$exception->getMessage().', в строке: '.($exception->getLine()-3).'. ID: '.$this->model->id, $this->model_name);
        }
    }
}
