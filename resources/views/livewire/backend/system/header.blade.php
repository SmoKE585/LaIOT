<header wire:poll.15s.visible class="bg-white border-slate-200 dark:border-slate-700 ct3u3 cz4zt cfe53 cvqv9 ciegr">
    <div class="clpyc cj3hv c9r0z">
        <div class="flex items-center cmgwo c2643 ciqso">
            <div class="flex">
                <button class="text-slate-500 cxc4n caqfm" @click.stop="sidebarOpen = !sidebarOpen"
                        aria-controls="sidebar" :aria-expanded="sidebarOpen" aria-expanded="false">
                    <span class="cbl3h">Open sidebar</span>
                    <svg class="c3wll ceob2 chcsl" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="5" width="16" height="2"></rect>
                        <rect x="4" y="11" width="16" height="2"></rect>
                        <rect x="4" y="17" width="16" height="2"></rect>
                    </svg>
                </button>
            </div>

            <div class="flex items-center cb7d8">
                <div x-data="{ searchOpen: false }">
                    <button
                        class="flex items-center justify-center rounded-full cu2ps cefxi ce4zx c6vqo chmgx c6dxj"
                        :class="{ 'cr58u': searchOpen }"
                        @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});"
                        aria-controls="search-modal">
                        <span class="cbl3h">Search</span>
                        <svg class="cgmrc cm474" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path class="text-slate-500 dark:text-slate-400 c3wll"
                                  d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                            <path class="ciz4v czgoy c3wll"
                                  d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                        </svg>
                    </button>
                    <!-- Modal backdrop -->
                    <div class="bg-slate-900 co20q c5o35 c1u8w citi2 cqfmf" x-show="searchOpen"
                         x-transition:enter="c5mjj coq4n ch8aq" x-transition:enter-start="opacity-0"
                         x-transition:enter-end="cqsra" x-transition:leave="c5mjj coq4n c4al0"
                         x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0"
                         aria-hidden="true" style="display: none;"></div>
                    <!-- Modal dialog -->
                    <div id="search-modal"
                         class="flex justify-center ct1ew cxbmt clpyc c1u8w crtfr citi2 cqfmf c958j c9r0z"
                         role="dialog" aria-modal="true" x-show="searchOpen"
                         x-transition:enter="c5mjj cgpmj ch8aq" x-transition:enter-start="opacity-0 c8f6f"
                         x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj cgpmj ch8aq"
                         x-transition:leave-start="cqsra cfwq4" x-transition:leave-end="opacity-0 c8f6f"
                         style="display: none;">
                        <div
                            class="bg-white dark:bg-slate-800 border dark:border-slate-700 rounded cyj9a cn60w craqh cyd0r cetne c3ff8"
                            @click.outside="searchOpen = false" @keydown.escape.window="searchOpen = false">
                            <!-- Search form -->
                            <form class="border-slate-200 dark:border-slate-700 cz4zt">
                                <div class="c4ijw">
                                    <label for="modal-search" class="cbl3h">Search</label>
                                    <input id="modal-search"
                                           class="bg-white dark:bg-slate-800 c1u3h cfyow cjdhy ch1ih cnltt cylvv c3ff8 cu8x5 c8o14 ce5nx"
                                           type="search" placeholder="Search Anything…" x-ref="searchInput">
                                    <button class="cozyg csmh2 c1u8w c2djl" type="submit"
                                            aria-label="Search">
                                        <svg
                                            class="mr-2 c1bvt cc44c ciz4v czgoy c3wll c7n6y cbfx9 cgmrc cm474"
                                            viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                            <path
                                                d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                            <div class="ciamg ctysv">
                                <!-- Recent searches -->
                                <div class="cyf82 cvavu">
                                    <div class="ciz4v czgoy cqosy cw3n3 c0qeg c7j98 ciamg">Recent searches
                                    </div>
                                    <ul class="text-sm">
                                        <li>
                                            <a class="flex items-center text-slate-800 dark:text-slate-100 rounded cx1ew c1hrc c2djl cnk1n"
                                               href="#0" @click="searchOpen = false"
                                               @focus="searchOpen = true" @focusout="searchOpen = false">
                                                <svg
                                                    class="clw26 csxt0 ciz4v czgoy c3wll c7n6y czt1n cgmrc cm474"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                </svg>
                                                <span>Form Builder - 23 hours on-demand video</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex items-center text-slate-800 dark:text-slate-100 rounded cx1ew c1hrc c2djl cnk1n"
                                               href="#0" @click="searchOpen = false"
                                               @focus="searchOpen = true" @focusout="searchOpen = false">
                                                <svg
                                                    class="clw26 csxt0 ciz4v czgoy c3wll c7n6y czt1n cgmrc cm474"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                </svg>
                                                <span>Access Mosaic on mobile and TV</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex items-center text-slate-800 dark:text-slate-100 rounded cx1ew c1hrc c2djl cnk1n"
                                               href="#0" @click="searchOpen = false"
                                               @focus="searchOpen = true" @focusout="searchOpen = false">
                                                <svg
                                                    class="clw26 csxt0 ciz4v czgoy c3wll c7n6y czt1n cgmrc cm474"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                </svg>
                                                <span>Product Update - Q4 2021</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex items-center text-slate-800 dark:text-slate-100 rounded cx1ew c1hrc c2djl cnk1n"
                                               href="#0" @click="searchOpen = false"
                                               @focus="searchOpen = true" @focusout="searchOpen = false">
                                                <svg
                                                    class="clw26 csxt0 ciz4v czgoy c3wll c7n6y czt1n cgmrc cm474"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                </svg>
                                                <span>Master Digital Marketing Strategy course</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex items-center text-slate-800 dark:text-slate-100 rounded cx1ew c1hrc c2djl cnk1n"
                                               href="#0" @click="searchOpen = false"
                                               @focus="searchOpen = true" @focusout="searchOpen = false">
                                                <svg
                                                    class="clw26 csxt0 ciz4v czgoy c3wll c7n6y czt1n cgmrc cm474"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                </svg>
                                                <span>Dedicated forms for products</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex items-center text-slate-800 dark:text-slate-100 rounded cx1ew c1hrc c2djl cnk1n"
                                               href="#0" @click="searchOpen = false"
                                               @focus="searchOpen = true" @focusout="searchOpen = false">
                                                <svg
                                                    class="clw26 csxt0 ciz4v czgoy c3wll c7n6y czt1n cgmrc cm474"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                </svg>
                                                <span>Product Update - Q4 2021</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Recent pages -->
                                <div class="cyf82 cvavu">
                                    <div class="ciz4v czgoy cqosy cw3n3 c0qeg c7j98 ciamg">Recent pages
                                    </div>
                                    <ul class="text-sm">
                                        <li>
                                            <a class="flex items-center text-slate-800 dark:text-slate-100 rounded cx1ew c1hrc c2djl cnk1n"
                                               href="#0" @click="searchOpen = false"
                                               @focus="searchOpen = true" @focusout="searchOpen = false">
                                                <svg
                                                    class="clw26 csxt0 ciz4v czgoy c3wll c7n6y czt1n cgmrc cm474"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                </svg>
                                                <span><span class="cw92y">Messages</span> - <span
                                                        class="dark:text-slate-400 csxt0 c6w4h">Conversation / … / Mike Mills</span></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="flex items-center text-slate-800 dark:text-slate-100 rounded cx1ew c1hrc c2djl cnk1n"
                                               href="#0" @click="searchOpen = false"
                                               @focus="searchOpen = true" @focusout="searchOpen = false">
                                                <svg
                                                    class="clw26 csxt0 ciz4v czgoy c3wll c7n6y czt1n cgmrc cm474"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                </svg>
                                                <span><span class="cw92y">Messages</span> - <span
                                                        class="dark:text-slate-400 csxt0 c6w4h">Conversation / … / Eva Patrick</span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="inline-flex c4ijw" x-data="{ open: false }">
                    <button
                        class="flex items-center justify-center rounded-full cu2ps cefxi ce4zx c6vqo chmgx c6dxj"
                        :class="{ 'cr58u': open }" aria-haspopup="true" @click.prevent="open = !open"
                        :aria-expanded="open" aria-expanded="false">
                        <span class="cbl3h">Notifications</span>
                        <svg class="cgmrc cm474" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path class="text-slate-500 dark:text-slate-400 c3wll"
                                  d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"></path>
                            <path class="ciz4v czgoy c3wll"
                                  d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"></path>
                        </svg>
                        <div
                            class="rounded-full ckkh5 c5khs c0vjv csmh2 cbe4h cke32 c75xa c5m9y cvqv9"></div>
                    </button>
                    <div
                        class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 ckj5k c9mkh cke32 c8407 chswz cox8h c5xk8"
                        @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                        x-transition:enter="c5mjj coq4n ch8aq ccio3"
                        x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4"
                        x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra"
                        x-transition:leave-end="opacity-0" style="display: none;">
                        <div class="ciz4v czgoy cqosy cw3n3 cbzcj c0qeg c9r0z c622v">Notifications</div>
                        <ul>
                            <li class="border-slate-200 dark:border-slate-700 cb9m2 cz4zt">
                                <a class="block c63y4 cjbtp c9r0z cfnh0" href="#0" @click="open = false"
                                   @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm c7j98">📣 <span
                                                        class="text-slate-800 dark:text-slate-100 cw92y">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                    <span class="block ciz4v czgoy cw92y c0qeg">Feb 12, 2021</span>
                                </a>
                            </li>
                            <li class="border-slate-200 dark:border-slate-700 cb9m2 cz4zt">
                                <a class="block c63y4 cjbtp c9r0z cfnh0" href="#0" @click="open = false"
                                   @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm c7j98">📣 <span
                                                        class="text-slate-800 dark:text-slate-100 cw92y">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                    <span class="block ciz4v czgoy cw92y c0qeg">Feb 9, 2021</span>
                                </a>
                            </li>
                            <li class="border-slate-200 dark:border-slate-700 cb9m2 cz4zt">
                                <a class="block c63y4 cjbtp c9r0z cfnh0" href="#0" @click="open = false"
                                   @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm c7j98">🚀<span
                                                        class="text-slate-800 dark:text-slate-100 cw92y">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                    <span class="block ciz4v czgoy cw92y c0qeg">Jan 24, 2020</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <input type="checkbox" name="light-switch" id="light-switch" class="light-switch cbl3h">
                    <label
                        class="flex items-center justify-center rounded-full cu2ps cefxi ce4zx cl9dd c6vqo chmgx c6dxj"
                        for="light-switch">
                        <svg class="canqr cgmrc cm474" viewBox="0 0 16 16"
                             xmlns="http://www.w3.org/2000/svg">
                            <path class="czgoy c3wll"
                                  d="M7 0h2v2H7V0Zm5.88 1.637 1.414 1.415-1.415 1.413-1.414-1.414 1.415-1.414ZM14 7h2v2h-2V7Zm-1.05 7.433-1.415-1.414 1.414-1.414 1.415 1.413-1.414 1.415ZM7 14h2v2H7v-2Zm-4.02.363L1.566 12.95l1.415-1.414 1.414 1.415-1.415 1.413ZM0 7h2v2H0V7Zm3.05-5.293L4.465 3.12 3.05 4.535 1.636 3.121 3.05 1.707Z"></path>
                            <path class="text-slate-500 c3wll"
                                  d="M8 4C5.8 4 4 5.8 4 8s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4Z"></path>
                        </svg>
                        <svg class="hidden ccsmw cgmrc cm474" viewBox="0 0 16 16"
                             xmlns="http://www.w3.org/2000/svg">
                            <path class="czgoy c3wll"
                                  d="M6.2 2C3.2 2.8 1 5.6 1 8.9 1 12.8 4.2 16 8.1 16c3.3 0 6-2.2 6.9-5.2C9.7 12.2 4.8 7.3 6.2 2Z"></path>
                            <path class="text-slate-500 c3wll"
                                  d="M12.5 6a.625.625 0 0 1-.625-.625 1.252 1.252 0 0 0-1.25-1.25.625.625 0 1 1 0-1.25 1.252 1.252 0 0 0 1.25-1.25.625.625 0 1 1 1.25 0c.001.69.56 1.249 1.25 1.25a.625.625 0 1 1 0 1.25c-.69.001-1.249.56-1.25 1.25A.625.625 0 0 1 12.5 6Z"></path>
                        </svg>
                        <span class="cbl3h">Switch to light / dark version</span>
                    </label>
                </div>

                <hr class="ce4zx cr58u cmt80 c63v7 ceob2">

                <div class="inline-flex c4ijw" x-data="{ open: false }">
                    <button class="inline-flex justify-center items-center c2djl" aria-haspopup="true"
                            @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                        <img class="rounded-full chmgx c6dxj" src="{{ auth()->user()->avatar() }}" width="32" height="32" alt="User">
                        <div class="flex items-center c32al">
                            <span class="text-sm cyefr c0vsa ch1ih cw92y c32al c9o7o">
                                {{ auth()->user()->realname }}
                            </span>
                            <svg class="w-3 h-3 czgoy c3wll c7n6y csib2" viewBox="0 0 12 12">
                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                            </svg>
                        </div>
                    </button>
                    <div
                        class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 c28cu cke32 c8407 cox8h c5xk8"
                        @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                        x-transition:enter="c5mjj coq4n ch8aq ccio3"
                        x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4"
                        x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra"
                        x-transition:leave-end="opacity-0" style="display: none;">
                        <div class="border-slate-200 dark:border-slate-700 cz4zt cf6al ci4cg cjm6w c622v">
                            <div class="text-slate-800 dark:text-slate-100 cw92y">
                                {{ auth()->user()->login }}
                            </div>
                            <div class="text-slate-500 dark:text-slate-400 c0qeg clmtf">
                                {{ auth()->user()->email }}
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a class="text-sm text-indigo-500 flex items-center cuv1l cdi3j cw92y cjm6w cynm4"
                                   href="{{ route('login') }}" @click="open = false" @focus="open = true"
                                   @focusout="open = false">
                                    Выйти
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</header>
