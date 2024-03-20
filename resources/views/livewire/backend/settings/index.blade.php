<main class="ckut6">
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">
        <div class="ce97l">
            <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                Настройки системы
            </h1>
        </div>

        <div class="bg-white dark:bg-slate-800 rounded-sm cetne ce97l" x-data="{section: 'general'}">
            <div class="flex cygwm cfrx6 chmlm">
                <div
                    class="flex border-slate-200 dark:border-slate-700 cmgrv c7bxu cpcdz cf18b cz385 cqjax cmaja c108j ccg4t cz4zt cjm6w c3ntd">
                    <div>
                        <ul class="flex cmaja c108j crc9s czt1n">
                            <li class="cid50 crc9s c6orf">
                                <div :class="section == 'general' ? 'ckcyd' : ''" @click="section = 'general'" class="flex items-center rounded c0ewf c626f csq8i cfnh0">
                                    <i :class="section == 'general' ? 'text-indigo-400' : 'czgoy'" class="mr-2 c3wll c7n6y cgmrc cm474 las la-toolbox text-lg"></i>
                                    <span :class="section == 'general' ? 'text-indigo-400' : 'c6w4h'" class="text-sm cnzyq cw92y">
                                        Общие настройки
                                    </span>
                                </div>
                            </li>
                            <li class="cid50 crc9s c6orf">
                                <div :class="section == 'security' ? 'ckcyd' : ''" @click="section = 'security'" class="flex items-center rounded c626f csq8i cfnh0">
                                    <i :class="section == 'security' ? 'text-indigo-400' : 'czgoy'" class="mr-2 c3wll c7n6y cgmrc cm474 las la-shield-alt text-lg"></i>
                                    <span :class="section == 'security' ? 'text-indigo-400' : 'c6w4h'" class="text-sm cn6r0 ch1ih cw92y">Безопасность</span>
                                </div>
                            </li>
                            <li class="cid50 crc9s c6orf">
                                <div :class="section == 'db' ? 'ckcyd' : ''" @click="section = 'db'" class="flex items-center rounded c626f csq8i cfnh0">
                                    <i :class="section == 'db' ? 'text-indigo-400' : 'czgoy'" class="mr-2 c3wll c7n6y cgmrc cm474 las la-database text-lg"></i>
                                    <span :class="section == 'db' ? 'text-indigo-400' : 'c6w4h'" class="text-sm cn6r0 ch1ih cw92y">База данных</span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="ckut6">
                    <div class="c3goj caod7">
                        @dump($settings)

                        <section x-show="section == 'general'" x-transition>
                            <ul>
                                <li class="flex items-center border-slate-200 dark:border-slate-700 cmgwo cz4zt c8o14">
                                    <div>
                                        <div class="text-slate-800 dark:text-slate-100 cqosy">
                                            Хранить код в
                                        </div>
                                        <div class="text-sm">
                                            Предпочтительно место для хранения кода методов и скриптов.
                                        </div>
                                    </div>
                                    <!-- Right -->
                                    <div class="flex items-center cbfx9">
                                        <select class="cy9mt" wire:model.live="settings.place_to_save_code">
                                            <option value="1">В файлах</option>
                                            <option value="0">В базе данных</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </section>
                        <section x-show="section == 'security'" x-transition>
                            <ul>
                                <li class="flex items-center border-slate-200 dark:border-slate-700 cmgwo cz4zt c8o14">
                                    <div>
                                        <div class="text-slate-800 dark:text-slate-100 cqosy">
                                            Ограничитель числа запросов к скриптам
                                        </div>
                                        <div class="text-sm">
                                            Ограничить частоту вызовов скриптов открытых в интернет. Разрешить 60 вызовов в миниму.
                                        </div>
                                    </div>
                                    <div class="flex items-center cbfx9">
                                        <select wire:model.live="settings.script_rate_limit" class="cy9mt">
                                            <option value="60">60 в минуту</option>
                                            <option value="120">120 в минуту</option>
                                            <option value="300">300 в минуту</option>
                                            <option value="1000">1000 в минуту</option>
                                            <option value="9999">Без ограничения</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="flex items-center border-slate-200 dark:border-slate-700 cmgwo cz4zt c8o14">
                                    <div>
                                        <div class="text-slate-800 dark:text-slate-100 cqosy">
                                            Отключить авторизацию в ПУ по паролю
                                        </div>
                                        <div class="text-sm">
                                            Отключает возможность авторизоваться в панели управления по email/паролю.
                                            Войти в ПУ становится возможно только по ключу.
                                        </div>
                                    </div>
                                    <div class="flex items-center cbfx9">
                                        <select wire:model.live="settings.disable_login_by_pass" class="cy9mt">
                                            <option value="0">Нет</option>
                                            <option value="1">Да</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="flex items-center border-slate-200 dark:border-slate-700 cmgwo cz4zt c8o14">
                                    <div>
                                        <div class="text-slate-800 dark:text-slate-100 cqosy">
                                            Путь для авторизации в ПУ
                                        </div>
                                        <div class="text-sm">
                                            Путь к странице с формой входа, сейчас: {!! config('app.url').'/backend/<b>'.$settings['default_login_path'].'</b>' !!}
                                        </div>
                                    </div>
                                    <div class="flex items-center cbfx9">
                                        <input wire:model.live.debounce.500ms="settings.default_login_path" class="c03gb c3ff8" type="text">
                                    </div>
                                </li>
                            </ul>
                        </section>
                    </div>

                </div>

            </div>
        </div>

    </div>
</main>
