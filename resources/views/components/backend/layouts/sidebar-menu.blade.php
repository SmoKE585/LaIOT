<div class="ckgm0">
    <div class="bg-slate-900 co20q c5o35 ch8aq cbf2h caqfm c1u8w citi2 cp9kb opacity-0 pointer-events-none" :class="sidebarOpen ? 'cqsra' : 'opacity-0 pointer-events-none'" aria-hidden="true"></div>

    <div id="sidebar" class="flex 2xl:!w-64 ck6nx cyd4x c55qz cn5ln cd67z cq8pc c9ivf cz385 c3z79 csj4z ch8aq cufur cgpmj c6fr0 csmh2 c7n6y chmlm c6uf0 c76e0 cvqv9 cp9kb ck3vy c5mbg -translate-x-64" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false">
        <div class="flex cibhb ckgh8 chxpf items-center justify-between w-full">
            <button class="text-slate-500 cdmpi caqfm" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen" aria-expanded="false">
                <span class="cbl3h">Close sidebar</span>
                <svg class="c3wll ceob2 chcsl" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                </svg>
            </button>

            <a class="w-1/2" href="{{ route('backend.dashboard') }}">
                <img src="/backend/images/logo_default_white.svg">
            </a>
        </div>

        <div class="c6kpa">
            <div>
                <h3 class="text-slate-500 cqosy cw3n3 c0qeg c70tm">
                    <span class="hidden 2xl:hidden cy96c c9pf1 cob4g co267 chcsl" aria-hidden="true">•••</span>
                    <span class="2xl:block cofpc cpbr8 caqfm">Pages</span>
                </h3>
                <ul class="cabqp">
                    <li class="rounded-sm bg-slate-900 cyf82 cp8im cjm6w cfnh0">
                        <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="{{ route('backend.dashboard') }}">
                            <div class="flex items-center">
                                <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                                    <path class="czgoy c3wll" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                                    <path class="c6w4h c3wll" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                                    <path class="czgoy c3wll" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path>
                                </svg>
                                <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Панель управления</span>
                            </div>
                        </a>
                    </li>

                    <li class="rounded-sm cyf82 cp8im cjm6w cfnh0" x-data="{ open: false }">
                        <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                            <div class="flex items-center cmgwo">
                                <div class="flex items-center">
                                    <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                                        <path class="czgoy c3wll" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                        <path class="ccazs c3wll" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                        <path class="c6w4h c3wll" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                    </svg>
                                    <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                        Логика
                                    </span>
                                </div>
                                <div class="flex 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq c7n6y c9o7o">
                                    <svg class="w-3 h-3 czgoy c3wll c7n6y csib2 ce8ww" :class="open ? 'cb4kj' : 'ce8ww'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="2xl:block cofpc cpbr8 caqfm">
                            <ul class="hidden c5xk8 ctmd2" :class="open ? 'cylx5' : 'hidden'">
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="{{ route('backend.logic.classes') }}">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                            Группы устройств
                                        </span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="{{ route('backend.logic.objects') }}">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                            Устройства
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="rounded-sm cyf82 cp8im cjm6w cfnh0" x-data="{ open: false }">
                        <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                            <div class="flex items-center cmgwo">
                                <div class="flex items-center">
                                    <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                                        <path class="c6w4h c3wll" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                                        <path class="czgoy c3wll" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                    </svg>
                                    <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                        Пользователи
                                    </span>
                                </div>
                                <div class="flex 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq c7n6y c9o7o">
                                    <svg class="w-3 h-3 czgoy c3wll c7n6y csib2 ce8ww" :class="open ? 'cb4kj' : 'ce8ww'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="2xl:block cofpc cpbr8 caqfm">
                            <ul class="hidden c5xk8 ctmd2" :class="open ? 'cylx5' : 'hidden'">
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="{{ route('backend.users') }}">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                            Список пользователей
                                        </span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="{{ route('backend.users.manage') }}">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                            Добавить пользователя
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="rounded-sm cyf82 cp8im cjm6w cfnh0" x-data="{ open: false }">
                        <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                            <div class="flex items-center cmgwo">
                                <div class="flex items-center">
                                    <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                                        <path class="czgoy c3wll" d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z"></path>
                                        <path class="ccazs c3wll" d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z"></path>
                                        <path class="c6w4h c3wll" d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z"></path>
                                    </svg>
                                    <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                        Логи
                                    </span>
                                </div>
                                <!-- Icon -->
                                <div class="flex 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq c7n6y c9o7o">
                                    <svg class="w-3 h-3 czgoy c3wll c7n6y csib2 ce8ww" :class="open ? 'cb4kj' : 'ce8ww'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="2xl:block cofpc cpbr8 caqfm">
                            <ul class="hidden c5xk8 ctmd2" :class="open ? 'cylx5' : 'hidden'">
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="credit-cards.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Cards</span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="transactions.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Transactions</span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="transaction-details.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Transaction Details</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="rounded-sm cyf82 cp8im cjm6w cfnh0" x-data="{ open: false }">
                        <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                            <div class="flex items-center cmgwo">
                                <div class="flex items-center">
                                    <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                                        <path class="c6w4h c3wll" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                        <path class="c6w4h c3wll" d="M1 1h22v23H1z"></path>
                                        <path class="czgoy c3wll" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path>
                                    </svg>
                                    <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                        Скрипты
                                    </span>
                                </div>
                                <!-- Icon -->
                                <div class="flex 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq c7n6y c9o7o">
                                    <svg class="w-3 h-3 czgoy c3wll c7n6y csib2 ce8ww" :class="open ? 'cb4kj' : 'ce8ww'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="2xl:block cofpc cpbr8 caqfm">
                            <ul class="hidden c5xk8 ctmd2" :class="open ? 'cylx5' : 'hidden'">
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="{{ route('backend.logic.scripts') }}">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                            Список скриптов
                                        </span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="tasks-list.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                            Логи скриптов
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="rounded-sm cyf82 cp8im cjm6w cfnh0">
                        <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="{{ route('backend.MQTT.index') }}">
                            <div class="flex items-center">
                                <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                                    <path class="c6w4h c3wll" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z"></path>
                                    <path class="czgoy c3wll" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z"></path>
                                </svg>
                                <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">MQTT</span>
                            </div>
                        </a>
                    </li>

                    <li class="rounded-sm cyf82 cp8im cjm6w cfnh0" x-data="{ open: false }">
                        <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                            <div class="flex items-center cmgwo">
                                <div class="flex items-center">
                                    <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                                        <path class="c6w4h c3wll" d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z"></path>
                                        <path class="czgoy c3wll" d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z"></path>
                                    </svg>
                                    <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Сервисы</span>
                                </div>
                                <div class="flex 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq c7n6y c9o7o">
                                    <svg class="w-3 h-3 czgoy c3wll c7n6y csib2 ce8ww" :class="open ? 'cb4kj' : 'ce8ww'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="2xl:block cofpc cpbr8 caqfm">
                            <ul class="hidden c5xk8 ctmd2" :class="open ? 'cylx5' : 'hidden'">
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="changelog.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Парсинг</span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="roadmap.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">PING</span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="faqs.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">FAQs</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="rounded-sm cyf82 cp8im cjm6w cfnh0" x-data="{ open: false }">
                        <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="#0" @click.prevent="open = !open; sidebarExpanded = true">
                            <div class="flex items-center cmgwo">
                                <div class="flex items-center">
                                    <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                                        <path class="c6w4h c3wll" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
                                        <path class="czgoy c3wll" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
                                        <path class="c6w4h c3wll" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
                                        <path class="czgoy c3wll" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
                                    </svg>
                                    <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Настройки</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq c7n6y c9o7o">
                                    <svg class="w-3 h-3 czgoy c3wll c7n6y csib2 ce8ww" :class="open ? 'cb4kj' : 'ce8ww'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="2xl:block cofpc cpbr8 caqfm">
                            <ul class="hidden c5xk8 ctmd2" :class="open ? 'cylx5' : 'hidden'">
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="{{ route('backend.settings.general') }}">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                            Общие настройки
                                        </span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="notifications.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">My Notifications</span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="connected-apps.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Connected Apps</span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="plans.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Plans</span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="billing.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Billing &amp; Invoices</span>
                                    </a>
                                </li>
                                <li class="cyf82 ci4cg">
                                    <a class="block critd czgoy crp72 c5mjj c32al" href="feedback.html">
                                        <span class="text-sm 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">Give Feedback</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>


            <div>
                <h3 class="text-slate-500 cqosy cw3n3 c0qeg c70tm">
                    <span class="hidden 2xl:hidden cy96c c9pf1 cob4g co267 chcsl" aria-hidden="true">•••</span>
                    <span class="2xl:block cofpc cpbr8 caqfm">
                        Прочее
                    </span>
                </h3>
                <ul class="cabqp">
                    <li class="rounded-sm cyf82 cp8im cjm6w cfnh0">
                        <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="inbox.html">
                            <div class="flex items-center">
                                <svg class="c7n6y ceob2 chcsl" viewBox="0 0 24 24">
                                    <path class="c6w4h c3wll" d="M8.07 16H10V8H8.07a8 8 0 110 8z"></path>
                                    <path class="czgoy c3wll" d="M15 12L8 6v5H0v2h8v5z"></path>
                                </svg>
                                <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                    В WEB интерфейс
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="rounded-sm cyf82 cp8im cjm6w cfnh0">
                        <a class="block c1hrc cmo81 crp72 c5mjj c32al" href="inbox.html">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="c7n6y ceob2 chcsl" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                                </svg>
                                <span class="text-sm ml-3 2xl:opacity-100 cjbqm cd0k1 cbunn ch8aq cw92y">
                                    Группа в Telegram
                                </span>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <!-- Expand / collapse button -->
        <div class="hidden 2xl:hidden justify-end cs8uq c9pf1 c1481 czx8a">
            <div class="cjm6w cfnh0">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="cbl3h">Expand / collapse sidebar</span>
                    <svg class="cazit c3wll ceob2 chcsl" viewBox="0 0 24 24">
                        <path class="czgoy" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                        <path class="c6w4h" d="M3 23H1V1h2z"></path>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>
