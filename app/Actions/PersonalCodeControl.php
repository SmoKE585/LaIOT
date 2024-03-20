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
                throw new PersonalCodeFindBadFunctionsException('Попытка выполнения кода с запрещенными функциями. ID: '.$this->model->id);
            }

            //Меняем каталог на "песочницу"
            $base_dir = config('laiot.base_dir');
            $code = "chdir('".$base_dir."/app/Sandbox/');\n".$code;

            if(empty($code)) throw new PersonalCodeEmptyCodeException('Запрос выполнения пустого кода. ID: '.$this->model->id);

            $params[\request()->method()] = \request()->all();
            $params['HEADERS'] = \request()->header();

            return eval($code);
        } catch (PersonalCodeFindBadFunctionsException $exception) {
            debmes($exception->getMessage(), 'error', $this->model_name);

            if(array_search('text/html', request()->getAcceptableContentTypes()) !== false || array_search('*/*', request()->getAcceptableContentTypes()) !== false) {
                return view('errors.personal-code-error', [
                    'exception' => $exception,
                    'model' => $this->model,
                ]);
            } else {
                return json_encode(['error' => true, 'msg' => 'Ошибка при выполнении кода!'], JSON_UNESCAPED_UNICODE);
            }
        } catch (PersonalCodeEmptyCodeException $exception) {
            debmes($exception->getMessage(), 'warning', $this->model_name);
        } catch (\Throwable $exception) {
            debmes($exception->getMessage(), 'error', $this->model_name);

            if(array_search('text/html', request()->getAcceptableContentTypes()) !== false || array_search('*/*', request()->getAcceptableContentTypes()) !== false) {
                return view('errors.personal-code-error', [
                    'exception' => $exception,
                    'model' => $this->model,
                ]);
            } else {
                return json_encode(['error' => true, 'msg' => 'Ошибка при выполнении кода!'], JSON_UNESCAPED_UNICODE);
            }
        }
    }

    public function delete()
    {
        if(config('laiot.place_to_save_code') == 'files') {
            if(File::exists(storage_path('codes/'.$this->model_name.'/'.$this->model->id.'.laiot'))) {
                File::delete(storage_path('codes/'.$this->model_name.'/'.$this->model->id.'.laiot'));
            }
        }
    }
}
