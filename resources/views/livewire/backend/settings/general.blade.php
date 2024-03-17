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
                                    <svg :class="section == 'general' ? 'text-indigo-400' : 'czgoy'" class=" mr-2 c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                        <path
                                            d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"></path>
                                    </svg>
                                    <span :class="section == 'general' ? 'text-indigo-400' : 'c6w4h'" class="text-sm cnzyq cw92y">
                                        Общие настройки
                                    </span>
                                </div>
                            </li>
                            <li class="cid50 crc9s c6orf">
                                <div :class="section == 'security' ? 'ckcyd' : ''" @click="section = 'security'" class="flex items-center rounded c626f csq8i cfnh0">
                                    <svg :class="section == 'security' ? 'text-indigo-400' : 'czgoy'" class="mr-2 ciz4v c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                        <path
                                            d="M14.3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-8 8c-.2.2-.4.3-.7.3-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l8-8zM15 7c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8c.6 0 1 .4 1 1s-.4 1-1 1C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6c0-.6.4-1 1-1z"></path>
                                    </svg>
                                    <span :class="section == 'security' ? 'text-indigo-400' : 'c6w4h'" class="text-sm cn6r0 ch1ih cw92y">Безопасность</span>
                                </div>
                            </li>
                            <li class="cid50 crc9s c6orf">
                                <a class="flex items-center rounded c626f csq8i cfnh0" href="connected-apps.html">
                                    <svg class="mr-2 ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                        <path
                                            d="M3.414 2L9 7.586V16H7V8.414l-5-5V6H0V1a1 1 0 011-1h5v2H3.414zM15 0a1 1 0 011 1v5h-2V3.414l-3.172 3.172-1.414-1.414L12.586 2H10V0h5z"></path>
                                    </svg>
                                    <span class="text-sm cn6r0 cwxny ch1ih c6w4h cw92y">Connected Apps</span>
                                </a>
                            </li>
                            <li class="cid50 crc9s c6orf">
                                <a class="flex items-center rounded c626f csq8i cfnh0" href="plans.html">
                                    <svg class="mr-2 ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                        <path
                                            d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                    </svg>
                                    <span class="text-sm cn6r0 cwxny ch1ih c6w4h cw92y">Plans</span>
                                </a>
                            </li>
                            <li class="cid50 crc9s c6orf">
                                <a class="flex items-center rounded c626f csq8i cfnh0" href="billing.html">
                                    <svg class="mr-2 ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                        <path
                                            d="M15 4c.6 0 1 .4 1 1v10c0 .6-.4 1-1 1H3c-1.7 0-3-1.3-3-3V3c0-1.7 1.3-3 3-3h7c.6 0 1 .4 1 1v3h4zM2 3v1h7V2H3c-.6 0-1 .4-1 1zm12 11V6H2v7c0 .6.4 1 1 1h11zm-3-5h2v2h-2V9z"></path>
                                    </svg>
                                    <span class="text-sm cn6r0 cwxny ch1ih c6w4h cw92y">Billing &amp; Invoices</span>
                                </a>
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
                                        <select class="cy9mt" wire:model.live="settings.use_db_for_code">
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

                    <!-- Panel footer -->
                    <footer>
                        <div class="flex border-slate-200 dark:border-slate-700 chmlm c87xd cdsqp c7s20">
                            <div class="flex c93ao">
                                <button
                                    class="btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt ch1ih c6w4h">
                                    Cancel
                                </button>
                                <button class="btn ml-3 cfeqx cf1ce ceqwg">Save Changes</button>
                            </div>
                        </div>
                    </footer>

                </div>

            </div>
        </div>

    </div>
</main>
