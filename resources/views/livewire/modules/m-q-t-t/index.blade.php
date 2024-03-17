<main class="ckut6">
    <div class="flex c4ijw crszu">
        <div id="messages-sidebar" class="cwis9 cqyxl ccotl ch8aq c7yiv cgpmj cjhoi cvr2z csmh2 csp9v cd720 c3ff8 cvqv9 c0q7k translate-x-0" :class="msgSidebarOpen ? 'translate-x-0' : '-cmclx'">
            <div class="bg-white border-slate-200 dark:border-slate-700 chhm2 c3jt4 c8gbp cqd18 cz385 c7n6y cpqux c1wk3 c6q8l cfe53 coxu0">
                <div>
                    <div class="cfe53 cvqv9 cox8h">
                        <div class="flex items-center bg-white border-slate-200 dark:border-slate-700 c3jt4 cz4zt ciqso cx95x">
                            <div class="flex items-center cmgwo c3ff8">
                                <!-- Channel menu -->
                                <div class="c4ijw" x-data="{ open: false }">
                                    <button class="flex items-center c32al ckut6" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                                        <div class="c32al">
                                            <span class="text-slate-800 dark:text-slate-100 cqosy">Сервер №1</span>
                                        </div>
                                        <svg class="w-3 h-3 czgoy c3wll c7n6y csib2" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </button>
                                    <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 ccg4t c8407 c76e0 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" style="display: none;">
                                        <ul>
                                            <li>
                                                <a class="text-sm block cn6r0 cnz6z ch1ih c6w4h cw92y c8407 cjm6w" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                    <div class="flex items-center cmgwo">
                                                        <div class="flex items-center c32al ckut6">
                                                            <div class="c32al">Сервер №1</div>
                                                        </div>
                                                        <svg class="w-3 h-3 text-indigo-500 c3wll c7n6y csib2" viewBox="0 0 12 12">
                                                            <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-sm block cn6r0 cnz6z ch1ih c6w4h cw92y c8407 cjm6w" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                    <div class="flex items-center cmgwo">
                                                        <div class="flex items-center c32al ckut6">
                                                            <div class="c32al">Сервер №2</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="text-sm block cn6r0 cnz6z ch1ih c6w4h cw92y c8407 cjm6w" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                    <div class="flex items-center cmgwo">
                                                        <div class="flex items-center c32al ckut6">
                                                            <div class="c32al">Сервер №3</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="rounded bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 c46uo cm7vt cl0q9 c7n6y c2qsw c9o7o">
                                    <svg class="text-slate-500 c3wll cgmrc cm474" viewBox="0 0 16 16">
                                        <path d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="cx95x ctysv">
                        <form class="c4ijw">
                            <label for="msg-search" class="cbl3h">
                                Поиск топиков
                            </label>
                            <input id="msg-search" class="bg-white dark:bg-slate-800 c03gb c3ff8 ctmd2" type="search" placeholder="Поиск топиков…">
                            <button class="cozyg csmh2 c1u8w c2djl" type="submit" aria-label="Search">
                                <svg class="ml-3 mr-2 c1bvt cc44c ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                    <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                </svg>
                            </button>
                        </form>

                        <div class="cuf7q">
                            <div class="ciz4v czgoy cqosy cw3n3 c0qeg cvavu">Структура</div>
                            <ul class="crkc7">
                                <li class="cqr2k">
                                    <button @click="$wire.set('path', '')" class="flex items-center rounded cmgwo c3ff8 cnk1n">
                                        <div class="flex items-center gap-2 c32al">
                                            <img class="w-4" src="/backend/images/icons/nucleo/outline/chevron-left.svg">
                                            <div class="c32al">
                                                <span class="text-sm text-slate-800 dark:text-slate-100 cw92y">
                                                    В корень
                                                </span>
                                            </div>
                                        </div>
                                    </button>
                                </li>

                                @forelse($this->topics as $topic)
                                    <li class="cqr2k">
                                        <button @click="$wire.set('path', '{{$topic->topic}}')" class="flex items-center rounded @if($topic->topic == $path) c6ww5 @endif cmgwo c3ff8 cnk1n">
                                            <div class="flex items-center c32al">
                                                <div class="c32al">
                                                    <span class="text-sm text-slate-800 dark:text-slate-100 cw92y">
                                                        {{ $topic->topic }}
                                                    </span>
                                                </div>
                                            </div>
                                        </button>
                                    </li>
                                @empty

                                @endforelse
                            </ul>
                        </div>

                        <div class="cuf7q">
                            <div class="ciz4v czgoy cqosy cw3n3 c0qeg cvavu">Избранное</div>
                            <ul class="crkc7">
                                <li class="cqr2k">
                                    <button class="flex items-center rounded cmgwo c3ff8 cnk1n" @click="msgSidebarOpen = false; $refs.contentarea.scrollTop = 99999999;">
                                        <div class="flex items-center">
                                            <div class="c32al">
                                                <span class="text-sm text-slate-800 dark:text-slate-100 cw92y">#New Leads</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center c9o7o">
                                            <div class="w-2 h-2 rounded-full cl5v8"></div>
                                        </div>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex cwis9 cqyxl cbr9x cgpmj chmlm ckut6 translate-x-1/3" :class="msgSidebarOpen ? 'translate-x-1/3' : 'translate-x-0'">
            <div class="cfe53 coxu0">
                <div class="flex items-center border-slate-200 dark:border-slate-700 cpqs3 cmgwo cn1je cz4zt clpyc cr0xt ciqso c9r0z">
                    <!-- People -->
                    <div class="flex items-center">
                        <!-- Close button -->
                        <button class="mr-4 cljes czgoy csu7j" @click.stop="msgSidebarOpen = !msgSidebarOpen" aria-controls="messages-sidebar" :aria-expanded="msgSidebarOpen" aria-expanded="true">
                            <span class="cbl3h">Close sidebar</span>
                            <svg class="c3wll ceob2 chcsl" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                            </svg>
                        </button>
                        <!-- People list -->
                        <div class="flex c2707 c6tal">
                            <a class="block" href="#0">
                                <img class="rounded-full cwoo7 c5khs cae64 cbe4h" src="./images/user-32-01.jpg" width="32" height="32" alt="User 01">
                            </a>
                            <a class="block" href="#0">
                                <img class="rounded-full cwoo7 c5khs cae64 cbe4h" src="./images/user-32-07.jpg" width="32" height="32" alt="User 04">
                            </a>
                        </div>
                    </div>
                    <!-- Buttons on the right side -->
                    <div class="flex">
                        <button class="rounded bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 c46uo cm7vt cl0q9 c7n6y c2qsw c9o7o">
                            <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                            </svg>
                        </button>
                        <button class="rounded bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 c46uo cm7vt cl0q9 c7n6y c2qsw c9o7o">
                            <svg class="text-indigo-500 c3wll cgmrc cm474" viewBox="0 0 16 16">
                                <path d="M14.3 2.3L5 11.6 1.7 8.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4 4c.2.2.4.3.7.3.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Body -->
            <div class="clpyc cr0xt ckut6 c9r0z c3ntd">
                <!-- Chat msg -->
                <div class="flex cxbmt cyf82 c958j">
                    <img class="rounded-full mr-4" src="./images/user-40-11.jpg" width="40" height="40" alt="User 01">
                    <div>
                        <div class="text-sm bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 border border-slate-200 dark:border-slate-700 shadow-md c7pgn cauui ci4cg cmue4">
                            Can anyone help? I have a question about Acme Professional
                        </div>
                        <div class="flex items-center cmgwo">
                            <div class="text-slate-500 cw92y c0qeg">2:40 PM</div>
                        </div>
                    </div>
                </div>
                <!-- Chat msg -->
                <div class="flex cxbmt cyf82 c958j">
                    <img class="rounded-full mr-4" src="./images/user-40-12.jpg" width="40" height="40" alt="User 02">
                    <div>
                        <div class="text-sm border shadow-md cyj9a c7pgn cf1ce cauui ceqwg ci4cg cmue4">
                            Hey Dominik Lamakani 👋<br>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 🙌
                        </div>
                        <div class="flex items-center cmgwo">
                            <div class="text-slate-500 cw92y c0qeg">2:40 PM</div>
                            <svg class="h-3 clfqm c3wll c7n6y cv3gb" viewBox="0 0 20 12">
                                <path d="M10.402 6.988l1.586 1.586L18.28 2.28a1 1 0 011.414 1.414l-7 7a1 1 0 01-1.414 0L8.988 8.402l-2.293 2.293a1 1 0 01-1.414 0l-3-3A1 1 0 013.695 6.28l2.293 2.293L12.28 2.28a1 1 0 011.414 1.414l-3.293 3.293z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Chat msg -->
                <div class="flex cxbmt cyf82 c958j">
                    <img class="rounded-full mr-4" src="./images/user-40-11.jpg" width="40" height="40" alt="User 01">
                    <div>
                        <div class="flex items-center">
                            <img class="shadow-md cauui ci4cg" src="./images/chat-image.jpg" width="240" height="180" alt="Chat image">
                            <button class="rounded-full border border-slate-200 dark:border-slate-700 c3g7o chstu crp72 c5mjj c2qsw cbfx9">
                                <span class="cbl3h">Download</span>
                                <svg class="ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                    <path d="M15 15H1a1 1 0 01-1-1V2a1 1 0 011-1h4v2H2v10h12V3h-3V1h4a1 1 0 011 1v12a1 1 0 01-1 1zM9 7h3l-4 4-4-4h3V1h2v6z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center cmgwo">
                            <div class="text-slate-500 cw92y c0qeg">2:48 PM</div>
                        </div>
                    </div>
                </div>
                <!-- Chat msg -->
                <div class="flex cxbmt cyf82 c958j">
                    <img class="rounded-full mr-4" src="./images/user-40-11.jpg" width="40" height="40" alt="User 01">
                    <div>
                        <div class="text-sm bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 border border-slate-200 dark:border-slate-700 shadow-md c7pgn cauui ci4cg cmue4">
                            What do you think? Duis aute irure dolor in reprehenderit 🔥
                        </div>
                        <div class="flex items-center cmgwo">
                            <div class="text-slate-500 cw92y c0qeg">2:48 PM</div>
                        </div>
                    </div>
                </div>
                <!-- Chat msg -->
                <div class="flex cxbmt cyf82 c958j">
                    <img class="rounded-full mr-4" src="./images/user-40-12.jpg" width="40" height="40" alt="User 02">
                    <div>
                        <div class="text-sm border shadow-md cyj9a c7pgn cf1ce cauui ceqwg ci4cg cmue4">
                            Sed euismod nisi porta lorem mollis. Tellus elementum sagittis vitae et leo duis. Viverra justo nec ultrices dui.<br>
                            Sed lectus vestibulum mattis ullamcorper velit sed. Ut sem nulla pharetra diam sit amet 🎁
                        </div>
                        <div class="flex items-center cmgwo">
                            <div class="text-slate-500 cw92y c0qeg">2:55 PM</div>
                            <svg class="w-3 h-3 czgoy c3wll c7n6y" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Date separator -->
                <div class="flex justify-center">
                    <div class="inline-flex items-center justify-center bg-white border border-slate-200 rounded-full c6w4h cw92y csq8i c0qeg cjfun cynm4">
                        Tuesday, 20 January
                    </div>
                </div>
                <!-- Chat msg -->
                <div class="flex cxbmt cyf82 c958j">
                    <img class="rounded-full mr-4" src="./images/user-40-12.jpg" width="40" height="40" alt="User 02">
                    <div>
                        <div class="text-sm border shadow-md cyj9a c7pgn cf1ce cauui ceqwg ci4cg cmue4">
                            Can you join <a class="cw92y" href="#0">@dominik</a>? <a class="cn69j" href="#0">https://meet.google.com/haz-r3gt-idj</a>
                        </div>
                        <div class="flex items-center cmgwo">
                            <div class="text-slate-500 cw92y c0qeg">10:15 AM</div>
                            <svg class="w-3 h-3 czgoy c3wll c7n6y" viewBox="0 0 12 12">
                                <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Chat msg -->
                <div class="flex cxbmt cyf82 c958j">
                    <img class="rounded-full mr-4" src="./images/user-40-11.jpg" width="40" height="40" alt="User 01">
                    <div>
                        <div class="text-sm bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 border border-slate-200 dark:border-slate-700 shadow-md c7pgn cauui ci4cg cmue4">
                            <svg class="ciz4v czgoy c3wll" viewBox="0 0 15 3" width="15" height="3">
                                <circle cx="1.5" cy="1.5" r="1.5">
                                    <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.1"></animate>
                                </circle>
                                <circle cx="7.5" cy="1.5" r="1.5">
                                    <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.2"></animate>
                                </circle>
                                <circle cx="13.5" cy="1.5" r="1.5">
                                    <animate attributeName="opacity" dur="1s" values="0;1;0" repeatCount="indefinite" begin="0.3"></animate>
                                </circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="csp9v cfe53">
                <div class="flex items-center bg-white border-slate-200 dark:border-slate-700 c3jt4 cmgwo c87xd clpyc cr0xt ciqso c9r0z">
                    <!-- Plus button -->
                    <button class="coyl7 cljes ciz4v czgoy c7n6y czt1n">
                        <span class="cbl3h">Add</span>
                        <svg class="c3wll ceob2 chcsl" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12C23.98 5.38 18.62.02 12 0zm6 13h-5v5h-2v-5H6v-2h5V6h2v5h5v2z"></path>
                        </svg>
                    </button>
                    <!-- Message input -->
                    <form class="flex ckut6">
                        <div class="czt1n ckut6">
                            <label for="message-input" class="cbl3h">Type a message</label>
                            <input id="message-input" class="dark:bg-slate-800 cmtl7 c82du c7jg3 cyj9a crafj c6vqo c03gb c3ff8" type="text" placeholder="Aa">
                        </div>
                        <button type="submit" class="btn cfeqx c626f cf1ce ceqwg">Send -&gt;</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</main>
