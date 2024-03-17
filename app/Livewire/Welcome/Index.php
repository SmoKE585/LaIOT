<?php

namespace App\Livewire\Welcome;

use App\Models\User;
use App\Traits\ValidationAttributes;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Index extends Component
{
    use ValidationAttributes;

    #[Url]
    public int $step = 1;

    public array $data = [
        'login' => 'LaIOTAdmin',
        'email' => '',
        'realname' => 'Новый пользователь',
        'password' => '',
        'allow_web' => true,
        'allow_admin' => true,
    ];

    public array $dbdata = [
        'db_connection' => 'mysql',
        'db_host' => '127.0.0.1',
        'db_port' => '3306',
        'db_database' => 'LaIOT_System',
        'db_username' => 'laiotuser',
        'db_password' => '',
    ];

    public array $basicSettings = [
        'timezone' => '',
        'place_to_save_code' => 'files',
        'base_dir' => '',
        'path_to_php' => '',
        'is_windows' => false,
    ];

    public function mount()
    {
        $this->basicSettings['base_dir'] = str_replace('\app\Livewire\Welcome', '', __DIR__);
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $this->basicSettings['is_windows'] = true;
        }
        if($this->basicSettings['is_windows']) {
            $this->basicSettings['path_to_php'] = shell_exec('where php.exe');
        }

//        if ($this->step == 1 && User::exists()) {
//            $this->redirect(route('install', ['step' => 2]));
//        } elseif($this->step != 1 && !User::exists()) {
//            $this->redirect(route('install', ['step' => 1]));
//        }
    }

    public function step2()
    {
        $validation = $this->validate([
            'dbdata.db_connection' => Rule::in(['mysql', 'sqlite', 'pgsql']),
            'dbdata.db_host' => [
                Rule::requiredIf(function () {
                    return $this->dbdata['db_connection'] != 'sqlite';
                }),
                'ipv4'
            ],
            'dbdata.db_port' => [
                Rule::requiredIf(function () {
                    return $this->dbdata['db_connection'] != 'sqlite';
                }),
                'integer',
                'min:1000',
                'max:99999',
            ],
            'dbdata.db_database' => [
                Rule::requiredIf(function () {
                    return $this->dbdata['db_connection'] != 'sqlite';
                }),
                'string',
            ],
            'dbdata.db_username' => [
                Rule::requiredIf(function () {
                    return $this->dbdata['db_connection'] != 'sqlite';
                }),
                'string',
            ],
            'dbdata.db_password' => [
                Rule::requiredIf(function () {
                    return $this->dbdata['db_connection'] != 'sqlite';
                }),
                'string',
            ],
        ]);

        try {
            foreach ($validation['dbdata'] as $key => $value) {
                if($key == 'db_connection' && $value == 'sqlite') {
                    put_to_env($key, $value);
                    break;
                }
                put_to_env($key, $value);
            }
        } catch (\Throwable $exception) {
            $this->addError('dbdata.db_connection', $exception->getMessage());
        }

        try {
            \Artisan::call('migrate', array('--force' => true));
        } catch (QueryException $exception) {
            \Artisan::call('migrate:fresh', array('--force' => true));
        } catch (\Throwable $exception) {
            $this->addError('dbdata.db_connection', 'Не удалось выполнить миграции! Ошибка: '.$exception->getMessage());
        }

        $this->step++;
    }

    public function step3()
    {
        $validation = $this->validate([
            'data.login' => 'required|alpha_num:ascii|min:3|max:250',
            'data.email' => 'required|email:rfc,dns',
            'data.realname' => 'required|string|max:250|min:3',
            'data.password' => [
                Rule::requiredIf(function () {
                    return empty($this->data['id']);
                }),
                'string',
                'max:20',
                'min:8',
                'confirmed',
            ],
            'data.allow_web' => 'required|boolean',
            'data.allow_admin' => 'required|boolean',
        ]);

        $user = User::updateOrcreate([
            'email' => $validation['data']['email']
        ], $validation['data']);

        auth()->login($user);

        $this->step++;
    }

    public function render()
    {
        return view('livewire.welcome.index');
    }
}
