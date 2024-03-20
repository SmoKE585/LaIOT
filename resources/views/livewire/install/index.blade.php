@section('title', 'LaIOT - Установка системы управления умным домом')

<main class="bg-white c3jt4 install_bg">
    <div class="flex c4ijw">
        <div class="c3ff8">
            <div class="cbz56 flex flex-col justify-center items-center">
                <img class="w-3/5 md:w-2/5 lg:w-1/5" src="/backend/images/logo_default.svg">
                <div class="chc0j c9r0z caadu w-full">
                    <div class="ca831 cofxq c3ff8">
                        <div class="c4ijw">
                            <div class="ce4zx cr58u csmh2 cpjwj c76e0 cmx8h cr1ma c3ff8" aria-hidden="true"></div>
                            <ul class="flex cmgwo c4ijw c3ff8" x-data="{step: $wire.entangle('step') } ">
                                <li>
                                    <div
                                        :class="step == 1 ? 'ceqwg cf1ce' : 'text-slate-500 dark:text-slate-400 ce4zx c6vqo'"
                                        class="flex items-center justify-center rounded-full cqosy c0qeg ceob2 chcsl">1
                                    </div>
                                </li>
                                <li>
                                    <div
                                        :class="step == 2 ? 'ceqwg cf1ce' : 'text-slate-500 dark:text-slate-400 ce4zx c6vqo'"
                                        class="flex items-center justify-center rounded-full cqosy c0qeg ceob2 chcsl">2
                                    </div>
                                </li>
                                <li>
                                    <div
                                        :class="step == 3 ? 'ceqwg cf1ce' : 'text-slate-500 dark:text-slate-400 ce4zx c6vqo'"
                                        class="flex items-center justify-center rounded-full cqosy c0qeg ceob2 chcsl">3
                                    </div>
                                </li>
                                <li>
                                    <div
                                        :class="step == 4 ? 'ceqwg cf1ce' : 'text-slate-500 dark:text-slate-400 ce4zx c6vqo'"
                                        class="flex items-center justify-center rounded-full cqosy c0qeg ceob2 chcsl">4
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex cmca2 c7ie4 c3hpn cwjye chmlm cofxq w-full p-4 bg-white rounded-lg">
                    @script
                    <script>
                        $wire.on('needRefreshStep', (step) => {
                            eval('$wire.step'+step.step+'()');
                        });
                    </script>
                    @endscript

                    @if($step == 1)
                        <div class="cofxq w-full">
                            <div class="mb-10 text-center border-b-2 border-gray-50 p-4">
                                <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold crkc7">
                                    Привет! Давай знакомиться!
                                </h1>
                                <p>
                                    Меня зовут <b>LaIOT</b> и я буду управлять твоим умным домом.
                                    Дла начала, давай выполним базовую настройку программы.
                                    Сейчас мы настроим только обязательные данные, полный список настроек ты сможешь
                                    посмотреть в разделе "Настройки".
                                </p>
                            </div>

                            <div class="flex items-center cmgwo c84bv ce97l">
                                <div>
                                    <div class="text-slate-800 dark:text-slate-100 text-sm cw92y ci4cg">
                                        Согласен с отказом от ответственности
                                    </div>
                                    <div class="c0qeg">
                                        Автор ПО не несет ответственности за любой причинённый ущерб возникший по
                                        причине неправильной работы ПО. Всю ответственность несете только вы :)
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="c987k">
                                        <input @change="$wire.set('step', 2)" type="checkbox" id="switch" class="cbl3h">
                                        <label class="ce4zx c717g" for="switch">
                                            <span class="bg-white cl0q9" aria-hidden="true"></span>
                                            <span class="cbl3h">Switch label</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($step == 2)
                        <div class="cofxq w-full">
                            <div class="mb-10 text-center border-b-2 border-gray-50 p-4">
                                <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold crkc7">
                                    Настройка БД
                                </h1>
                                <p>
                                    Сейчас нужно указать данные для подключения к БД и запустить миграции (наполнение
                                    БД).
                                    После полной настройки системы ты сможешь зашифровать файл конфигурации, чтобы никто
                                    не смог прочитать его
                                    содержимое, кроме этой копии системы и конечно - тебя, если ты не забудешь пароль
                                    для расшифровки.
                                </p>
                            </div>

                            <div @if(!$needRefreshStep) wire:loading.block wire:target="step2" @endif class="!w-full">
                                <x-loading text="Сохраняем данные и пробуем запустить миграции..."/>
                            </div>

                            @if(!$needRefreshStep)
                                <form wire:submit="step2" wire:loading.remove x-data="{typeSQL: 'mysql'}">
                                    <div class="mb-4">
                                        <label class="block text-sm cw92y ci4cg" for="dbdata.db_connection">Тип
                                            БД</label>

                                        <select x-model="typeSQL" wire:model="dbdata.db_connection"
                                                id="dbdata.db_connection" class="cy9mt w-full">
                                            <option value="mysql">MySQL/MariaDB</option>
                                            <option value="pgsql">PostgreSQL</option>
                                            <option value="sqlite">SQLite</option>
                                        </select>

                                        @error('dbdata.db_connection')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div x-show="typeSQL != 'sqlite'">
                                        <div class="grid grid-cols-2 gap-2">
                                            <div class="mb-4">
                                                <label class="block text-sm cw92y ci4cg" for="dbdata.db_host">IP базы
                                                    данных/сокет</label>
                                                <input id="dbdata.db_host" wire:model="dbdata.db_host"
                                                       class="c03gb c3ff8 w-full"
                                                       type="text" placeholder="Чаще всего - 127.0.0.1">
                                                @error('dbdata.db_host')
                                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label class="block text-sm cw92y ci4cg" for="dbdata.db_port">Порт базы
                                                    данных</label>
                                                <input id="dbdata.db_port" wire:model="dbdata.db_port"
                                                       class="c03gb c3ff8 w-full"
                                                       type="text" placeholder="Чаще всего - 3306">
                                                @error('dbdata.db_port')
                                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <label class="block text-sm cw92y ci4cg" for="dbdata.db_database">Название
                                                базы
                                                данных</label>
                                            <input id="dbdata.db_database" wire:model="dbdata.db_database"
                                                   class="c03gb c3ff8 w-full"
                                                   type="text" placeholder="По умолчанию - LaIOT_System">
                                            @error('dbdata.db_database')
                                            <div class="text-red-500 text-xs">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="grid grid-cols-2 gap-2">
                                            <div class="mb-4">
                                                <label class="block text-sm cw92y ci4cg" for="dbdata.db_username">Имя
                                                    пользователя</label>
                                                <input id="dbdata.db_username" wire:model="dbdata.db_username"
                                                       class="c03gb c3ff8 w-full"
                                                       type="text" placeholder="Имя пользователя для подключения к БД">
                                                @error('dbdata.db_username')
                                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label class="block text-sm cw92y ci4cg" for="dbdata.db_password">Пароль
                                                    к
                                                    БД</label>
                                                <input id="dbdata.db_password" wire:model="dbdata.db_password"
                                                       class="c03gb c3ff8 w-full"
                                                       type="text" placeholder="Пароль, лучше больше 10 символов :)">
                                                @error('dbdata.db_password')
                                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-center cmgwo">
                                        <button type="submit" class="btn cfeqx cf1ce ceqwg c1fq8">Дальше -&gt;</button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    @endif

                    @if($step == 3)
                        <div class="cofxq w-full">
                            <div class="mb-10 text-center border-b-2 border-gray-50 p-4">
                                <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold crkc7">
                                    Базовые настройки
                                </h1>
                                <p>
                                    Осталось совсем немного, теперь нужно настроить базовые вещи в системе. Без них мы
                                    не сможем продолжить.
                                </p>
                            </div>
                            <form wire:submit="step3">
                                <div class="mb-4">
                                    <label class="block text-sm cw92y ci4cg" for="basicSettings.place_to_save_code">Где
                                        будем хранить твой код?</label>
                                    <select id="basicSettings.place_to_save_code"
                                            wire:model="basicSettings.place_to_save_code" class="cy9mt c3ff8">
                                        <option value="files">В файлах</option>
                                        <option value="database">В базе данных</option>
                                    </select>
                                    @error('basicSettings.place_to_save_code')
                                    <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block text-sm cw92y ci4cg" for="basicSettings.timezone">Временная зона
                                        системы</label>
                                    <select id="basicSettings.timezone" wire:model="basicSettings.timezone"
                                            class="cy9mt c3ff8">
                                        @foreach(timezone_identifiers_list() as $timezone)
                                            <option>{{$timezone}}</option>
                                        @endforeach
                                    </select>
                                    @error('basicSettings.timezone')
                                    <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block text-sm cw92y ci4cg" for="basicSettings.base_dir">
                                        Папка, куда установлена система
                                    </label>
                                    <input id="basicSettings.base_dir" wire:model="basicSettings.base_dir"
                                           class="c03gb c3ff8 w-full"
                                           type="text" placeholder="">
                                    @error('basicSettings.base_dir')
                                    <div class="text-red-500 text-xs">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if($basicSettings['is_windows'])
                                    <div class="mb-4">
                                        <label class="block text-sm cw92y ci4cg" for="basicSettings.path_to_php">
                                            Путь до PHP.exe
                                        </label>
                                        <input id="basicSettings.path_to_php" wire:model="basicSettings.path_to_php"
                                               class="c03gb c3ff8 w-full"
                                               type="text" placeholder="">
                                        @error('basicSettings.path_to_php')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </div>
                                @endif


                                <div class="flex items-center cmgwo">
                                    <button type="submit" class="btn cfeqx cf1ce ceqwg c1fq8">Дальше -&gt;</button>
                                </div>
                            </form>
                        </div>
                    @endif

                    @if($step == 4)
                        <div class="cofxq w-full">
                            <div class="mb-10 text-center border-b-2 border-gray-50 p-4">
                                <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold crkc7">
                                    Создание пользователя
                                </h1>
                                <p>
                                    Почти все готово! Теперь создадим учетную запись для администратора системы. Эти
                                    данные потребуются
                                    для входа в панель управления и WEB интерфейс. В разделе "Пользователи" ты
                                    сможешь
                                    создать дополнительные
                                    аккаунты.
                                </p>
                            </div>

                            <div @if(!$needRefreshStep) wire:loading.block wire:target="step4" @endif class="!w-full">
                                <x-loading text="Создаем пользователя и авторизуемся в системе..."/>
                            </div>

                            @if(!$needRefreshStep)
                                <form wire:submit="step4">
                                    <div class="mb-4">
                                        <label class="block text-sm cw92y ci4cg" for="data.email">E-MAIL</label>
                                        <input id="data.email" wire:model="data.email" class="c03gb c3ff8 w-full"
                                               type="email" placeholder="Используется для входа в систему">
                                        @error('data.email')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm cw92y ci4cg" for="data.password">Пароль</label>
                                        <input id="data.password" wire:model="data.password" class="c03gb c3ff8 w-full"
                                               type="password" placeholder="Минимум 8 символов">
                                        @error('data.password')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-sm cw92y ci4cg" for="data.password_confirmation">Повтори
                                            пароль</label>
                                        <input id="data.password_confirmation" wire:model="data.password_confirmation"
                                               class="c03gb c3ff8 w-full" type="password"
                                               placeholder="Чтобы не было ошибок">
                                    </div>

                                    <div class="flex items-center cmgwo">
                                        <button type="submit" class="btn cfeqx cf1ce ceqwg c1fq8">Дальше -&gt;</button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    @endif

                    {{--                    @elseif($step == 2)--}}
                    {{--                        <div class="ca831 cofxq">--}}
                    {{--                            <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold crkc7">--}}
                    {{--                                Отлично, теперь основные настройки--}}
                    {{--                            </h1>--}}
                    {{--                            <p class="mb-4">--}}
                    {{--                                Все настройки системы находятся в разделе "Настройки", сейчас мы настроим лишь необходимые для работы.--}}
                    {{--                            </p>--}}

                    {{--                            <form wire:submit="step2">--}}
                    {{--                                <div class="flex items-center cmgwo c84bv ce97l">--}}
                    {{--                                    <div>--}}
                    {{--                                        <div class="text-slate-800 dark:text-slate-100 text-sm cw92y ci4cg">--}}
                    {{--                                            Где будем храть твой код?--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="c0qeg">--}}
                    {{--                                            Местоположение для хранения кода. Если хранить в файлах - это чувствительно к скорости диска,--}}
                    {{--                                            если в БД - скоростью работы БД.--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="flex items-center">--}}
                    {{--                                        <div class="c987k">--}}
                    {{--                                            <select class="cy9mt" wire:model.live="settings.use_db_for_code">--}}
                    {{--                                                <option value="1">На диске</option>--}}
                    {{--                                                <option value="0">В базе данных</option>--}}
                    {{--                                            </select>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}

                    {{--                                <div class="flex items-center cmgwo c84bv ce97l">--}}
                    {{--                                    <div>--}}
                    {{--                                        <div class="text-slate-800 dark:text-slate-100 text-sm cw92y ci4cg">--}}
                    {{--                                            Часовая зона--}}
                    {{--                                        </div>--}}
                    {{--                                        <div class="c0qeg">--}}
                    {{--                                            Будет использована во всей системе, требуется для корректного формирования времени--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="flex items-center">--}}
                    {{--                                        <div class="c987k">--}}
                    {{--                                            <select class="cy9mt" wire:model.live="settings.use_db_for_code">--}}
                    {{--                                                @foreach(DateTimeZone::listIdentifiers() as $zone)--}}
                    {{--                                                    <option>{{ $zone }}</option>--}}
                    {{--                                                @endforeach--}}
                    {{--                                            </select>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </form>--}}
                    {{--                        </div>--}}
                    {{--                    @endif--}}
                </div>

            </div>
        </div>
    </div>

</main>
