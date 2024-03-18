<?php

namespace App\Livewire\Install;

use App\Actions\FirstInstallAction;
use App\Models\User;
use App\Traits\ValidationAttributes;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.empty')]
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

        try {
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                $this->basicSettings['is_windows'] = true;

                if($this->basicSettings['is_windows']) {
                    $this->basicSettings['path_to_php'] = shell_exec('where php.exe');
                }
            }
        } catch (\Throwable $exception) {

        }
    }

    public function step2()
    {
        $validation = $this->validate([
            'dbdata.db_connection' => [
                'required',
                Rule::in(['mysql', 'sqlite', 'pgsql'])
            ],
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

        try {
            (new FirstInstallAction())->run();
        } catch (\Throwable $exception) {
            $this->addError('dbdata.db_connection', 'Не удалось установить базовые классы! Ошибка: '.$exception->getMessage());
        }

        $this->step++;
    }

    public function step3()
    {
        $validation = $this->validate([
            'basicSettings.timezone' => [
                'required',
                Rule::in(timezone_identifiers_list())
            ],
            'basicSettings.place_to_save_code' => Rule::in(['files', 'database']),
            'basicSettings.base_dir' => 'required|string',
            'basicSettings.path_to_php' => [
                Rule::requiredIf(function () {
                    return $this->basicSettings['is_windows'];
                }),
                'string'
            ],
            'basicSettings.is_windows' => [
                'required',
                'boolean',
            ],
        ]);

        try {
            foreach ($validation['basicSettings'] as $key => $value) {
                put_to_env($key, $value);
            }
        } catch (\Throwable $exception) {
            $this->addError('basicSettings.place_to_save_code', $exception->getMessage());
        }

        $this->step++;
    }

    public function step4()
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

        if($user) {
            put_to_env('INSTALL_DATETIME', '"'.now()->toDateTimeString().'"');

            auth()->login($user);

            $iteration = 0;
            while (true) {
                $iteration++;

                Artisan::call('optimize');

                if(\Route::has('backend.dashboard')) {
                    $this->redirect(route('backend.dashboard'));
                }

                sleep(2);

                if($iteration > 3) break;
            }
        }
    }

    public function render()
    {
        return view('livewire.install.index');
    }
}
