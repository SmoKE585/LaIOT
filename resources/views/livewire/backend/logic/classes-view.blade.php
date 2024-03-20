<main class="ckut6">
    <div class="cewy4 clpyc cygiq cj3hv cofxq c3ff8 c9r0z c0ycj">
        <div class="cd2pr">
            <div class="ctin8 cy6kd">
                <div class="ccs95 cp6dx c3ff8 ce97l">
                    <div class="c1w44 c0u2w cby1z cz385 cda5l c97qj">
                        <div class="ch5dq">
                            <div class="flex items-center cmgwo c108j">
                                <header class="crkc7">
                                    <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                                        {{ $class->title }}
                                    </h1>
                                </header>

                                <div class="c5x9n crkc7">
                                    <button class="btn cfeqx cf1ce ceqwg cz3s1">Создать</button>
                                </div>

                            </div>

                            <div class="flex cmgrv c7bxu cf18b cz385 cmaja c108j chz8s c9r0z">
                                <div>
                                    <div class="ciz4v czgoy cqosy cw3n3 c0qeg cvavu">Объекты класса</div>
                                    <ul class="flex cmaja c108j crc9s czt1n">
                                        @forelse($class->objects as $obj)
                                        <li class="cid50 crc9s c6orf">
                                            <a class="flex items-center rounded c626f csq8i cfnh0" href="{{ route('backend.logic.objects.view', $obj->id) }}">
                                                <span class="text-sm ch1ih c6w4h cw92y">
                                                    {{ $obj->title }}
                                                </span>
                                            </a>
                                        </li>
                                        @empty

                                        @endforelse
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="2xl:mx-8 clt4z cnyty c0kv5 cy6kd">
                    <div class="ch5dq">
                        <div class="c958j">
                            <div class="flex flex-wrap czfjh c3ff8">
                                <button
                                    class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-indigo-500 cwcgw c8jzs ca5e0 ckut6">
                                    Свойства
                                </button>
                                <button
                                    class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 c63y4 ch1ih cjbtp cwcgw c8jzs c6w4h ca5e0 ckut6">
                                    Методы
                                </button>
                                <button
                                    class="btn bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 c63y4 ch1ih cjbtp cwcgw c8jzs c6w4h ca5e0 ckut6">
                                    Где используется?
                                </button>
                            </div>
                        </div>

                        <div class="cbfhc">
                            <livewire:backend.modules.logic.property-manage :$class />
                        </div>

                        <div class="cbfhc">
                            <livewire:backend.modules.logic.property-item :$class />
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right content -->
            <div class="hidden cyz0i czlvn c3ff8">
                <div class="csw5y cyvom cyd4x cz385 cy50a c3v2o">
                    <div class="ch5dq">

                        <!-- Button -->
                        <div class="crkc7">
                            <button class="btn cfeqx cf1ce ceqwg c3ff8">Create Post</button>
                        </div>

                        <!-- Blocks -->
                        <div class="cxebx">

                            <!-- Block 1 -->
                            <div class="rounded border border-slate-200 dark:border-slate-700 c4q8v cn1je c5mbg">
                                <div class="ciz4v czgoy cqosy cw3n3 c0qeg c958j">Forum Meetups</div>
                                <ul>
                                    <!-- Event 1 -->
                                    <li class="cngxh c4ijw c78q1">
                                        <div class="czg7p">
                                            <div class="text-indigo-600 cw92y cw3n3 cp8im c0qeg">Mon 27 Dec</div>
                                            <div class="text-sm c7j98">
                                                <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y"
                                                   href="#0">Silicon Valley Bootstrapper Breakfast Online for 2021</a>
                                            </div>
                                            <!-- Avatars -->
                                            <div class="flex items-center cwkb0">
                                                <div class="flex c2707 cqcol">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-02.jpg" width="28" height="28"
                                                         alt="User 02">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-03.jpg" width="28" height="28"
                                                         alt="User 03">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-04.jpg" width="28" height="28"
                                                         alt="User 04">
                                                </div>
                                                <div class="ciz4v czgoy cw92y c0qeg clmtf">+22</div>
                                            </div>
                                        </div>
                                        <!-- Timeline element -->
                                        <div aria-hidden="true">
                                            <div class="ce4zx cr58u c2pzf cuvbd csmh2 crzsu ccwbb c7tw1"></div>
                                            <div
                                                class="w-3 h-3 rounded-full cmvk2 ce4zx c168u c717g csmh2 crzsu cqcol cbe4h c76e0"></div>
                                        </div>
                                    </li>
                                    <!-- Event 2 -->
                                    <li class="cngxh c4ijw c78q1">
                                        <div class="czg7p">
                                            <div class="text-indigo-600 cw92y cw3n3 cp8im c0qeg">Mon 27 Dec</div>
                                            <div class="text-sm c7j98">
                                                <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y"
                                                   href="#0">New York &amp; New Jersey Virtual Retreat</a>
                                            </div>
                                            <!-- Avatars -->
                                            <div class="flex items-center cwkb0">
                                                <div class="flex c2707 cqcol">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-01.jpg" width="28" height="28"
                                                         alt="User 01">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-04.jpg" width="28" height="28"
                                                         alt="User 04">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-05.jpg" width="28" height="28"
                                                         alt="User 05">
                                                </div>
                                                <div class="ciz4v czgoy cw92y c0qeg clmtf">+132</div>
                                            </div>
                                        </div>
                                        <!-- Timeline element -->
                                        <div aria-hidden="true">
                                            <div class="ce4zx cr58u c2pzf cuvbd csmh2 crzsu ccwbb c7tw1"></div>
                                            <div
                                                class="w-3 h-3 rounded-full cmvk2 ce4zx c168u c717g csmh2 crzsu cqcol cbe4h c76e0"></div>
                                        </div>
                                    </li>
                                    <!-- Event 3 -->
                                    <li class="cngxh c4ijw c78q1">
                                        <div class="czg7p">
                                            <div class="text-indigo-600 cw92y cw3n3 cp8im c0qeg">Mon 29 Dec</div>
                                            <div class="text-sm c7j98">
                                                <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y"
                                                   href="#0">The World of AI and Machine Learning - Open Chat</a>
                                            </div>
                                            <!-- Avatars -->
                                            <div class="flex items-center cwkb0">
                                                <div class="flex c2707 cqcol">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-06.jpg" width="28" height="28"
                                                         alt="User 06">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-03.jpg" width="28" height="28"
                                                         alt="User 03">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-01.jpg" width="28" height="28"
                                                         alt="User 01">
                                                </div>
                                                <div class="ciz4v czgoy cw92y c0qeg clmtf">+12</div>
                                            </div>
                                        </div>
                                        <!-- Timeline element -->
                                        <div aria-hidden="true">
                                            <div class="ce4zx cr58u c2pzf cuvbd csmh2 crzsu ccwbb c7tw1"></div>
                                            <div
                                                class="w-3 h-3 rounded-full cmvk2 ce4zx c168u c717g csmh2 crzsu cqcol cbe4h c76e0"></div>
                                        </div>
                                    </li>
                                    <!-- Event 4 -->
                                    <li class="cngxh c4ijw c78q1">
                                        <div class="czg7p">
                                            <div class="text-indigo-600 cw92y cw3n3 cp8im c0qeg">Mon 29 Dec</div>
                                            <div class="text-sm c7j98">
                                                <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y"
                                                   href="#0">NYC Code &amp; Coffee 2.0 @ Freehold Brooklyn</a>
                                            </div>
                                            <!-- Avatars -->
                                            <div class="flex items-center cwkb0">
                                                <div class="flex c2707 cqcol">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-03.jpg" width="28" height="28"
                                                         alt="User 03">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-05.jpg" width="28" height="28"
                                                         alt="User 05">
                                                    <img class="rounded-full cwoo7 c5khs cae64 cbe4h"
                                                         src="./images/avatar-04.jpg" width="28" height="28"
                                                         alt="User 04">
                                                </div>
                                                <div class="ciz4v czgoy cw92y c0qeg clmtf">+17</div>
                                            </div>
                                        </div>
                                        <!-- Timeline element -->
                                        <div aria-hidden="true">
                                            <div class="ce4zx cr58u c2pzf cuvbd csmh2 crzsu ccwbb c7tw1"></div>
                                            <div
                                                class="w-3 h-3 rounded-full cmvk2 ce4zx c168u c717g csmh2 crzsu cqcol cbe4h c76e0"></div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="cuf7q">
                                    <button
                                        class="bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-indigo-500 c46uo cm7vt cljmx cjusy c3ff8">
                                        View All
                                    </button>
                                </div>
                            </div>

                            <!-- Block 2 -->
                            <div class="rounded border border-slate-200 dark:border-slate-700 c4q8v cn1je c5mbg">
                                <div class="ciz4v czgoy cqosy cw3n3 c0qeg c958j">Popular Stories</div>
                                <ul class="cd0mw">
                                    <li>
                                        <div class="text-sm ci4cg">
                                            <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">I
                                                built and sold 2 small SaaS products and quit my job in the last two
                                                years — AMA</a>
                                        </div>
                                        <div class="text-slate-500 c0qeg"><a class="text-indigo-500 cuv1l cdi3j cw92y"
                                                                             href="#0">markusj</a> · 2d · 312 comments
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-sm ci4cg">
                                            <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Besides
                                                Product Hunt, where else should I promote my new project? 🤔</a>
                                        </div>
                                        <div class="text-slate-500 c0qeg"><a class="text-indigo-500 cuv1l cdi3j cw92y"
                                                                             href="#0">katemerlu</a> · 2h · 7 comments
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-sm ci4cg">
                                            <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Which
                                                are the main channels you use to drive traffic to your website? 📈</a>
                                        </div>
                                        <div class="text-slate-500 c0qeg"><a class="text-indigo-500 cuv1l cdi3j cw92y"
                                                                             href="#0">sophiestar</a> · 3d · 66 comments
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-sm ci4cg">
                                            <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">Failed
                                                for the past 12 years as a tech entrepreneur. My key takeaways.</a>
                                        </div>
                                        <div class="text-slate-500 c0qeg"><a class="text-indigo-500 cuv1l cdi3j cw92y"
                                                                             href="#0">ekuplu89</a> · 4h · 14 comments
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-sm ci4cg">
                                            <a class="text-slate-800 dark:text-slate-100 c8lgs ciqv7 cw92y" href="#0">How
                                                to build a following on Twitter as a founder - A guide to growing your
                                                audience 🚀</a>
                                        </div>
                                        <div class="text-slate-500 c0qeg"><a class="text-indigo-500 cuv1l cdi3j cw92y"
                                                                             href="#0">molliehacks</a> · 3d · 32
                                            comments
                                        </div>
                                    </li>
                                </ul>
                                <div class="cuf7q">
                                    <button
                                        class="bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 text-indigo-500 c46uo cm7vt cljmx cjusy c3ff8">
                                        View All
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>
