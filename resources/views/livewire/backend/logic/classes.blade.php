<main class="ckut6">
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">
        <div class="cyqq9 cxbdy clk9r cxlzs c958j">
            <div class="clxmc c958j">
                <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                    В системе {{ declension($this->items_count, 'группа') }}
                </h1>
            </div>

            <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">
                <div class="hidden cb161">
                    <form class="c4ijw">
                        <label for="action-search" class="cbl3h">Поиск</label>
                        <input id="action-search" class="bg-white dark:bg-slate-800 c03gb ctmd2" type="search"
                               placeholder="Поиск скриптов…">
                        <button class="cozyg csmh2 c1u8w c2djl" type="submit" aria-label="Search">
                            <svg class="ml-3 mr-2 c1bvt cc44c ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                <path
                                    d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                <a href="{{ route('backend.logic.classes.manage') }}" class="btn cfeqx cf1ce ceqwg">
                    Новая группа
                </a>

            </div>
        </div>

        <div class="cg5st">
            <span>Сортировать по </span>
            <div class="inline-flex c4ijw" x-data="{ open: false }">
                <button class="inline-flex justify-center items-center c2djl" aria-haspopup="true"
                        @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                    <div class="flex items-center c32al">
                        <span class="text-indigo-500 cw6ke c8xe2 cw92y c32al">дате изменения</span>
                        <svg class="w-3 h-3 text-indigo-400 c3wll c7n6y csib2" viewBox="0 0 12 12">
                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                        </svg>
                    </div>
                </button>
                <div
                    class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 c28cu c8407 c76e0 cox8h c5xk8"
                    @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
                    x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue"
                    x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq"
                    x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" style="display: none;">
                    <ul>
                        <li>
                            <a class="text-sm flex items-center cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0"
                               @click="open = false" @focus="open = true" @focusout="open = false">
                                дате последнего вызова
                            </a>
                        </li>
                        <li>
                            <a class="text-sm flex items-center cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0"
                               @click="open = false" @focus="open = true" @focusout="open = false">
                                названию
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="cg5st">
            <ul class="flex flex-wrap -m-1">
                <li class="m-1">
                    <button
                        class="inline-flex items-center justify-center text-sm rounded-full border cyj9a cf1ce crp72 cw92y cgpmj ceqwg cyyn9 cl0q9 cjm6w cynm4">
                        Показывать все
                    </button>
                </li>
                <li class="m-1">
                    <button
                        class="inline-flex items-center justify-center text-sm rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 cjm6w cynm4">
                        Открытые в интернет
                    </button>
                </li>
                <li class="m-1">
                    <button
                        class="inline-flex items-center justify-center text-sm rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 cjm6w cynm4">
                        Черновики
                    </button>
                </li>
                <li class="m-1">
                    <button
                        class="inline-flex items-center justify-center text-sm rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 cjm6w cynm4">
                        Без вызовов
                    </button>
                </li>
            </ul>
        </div>

        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                @forelse($this->items as $item)
                    <div class="bg-white rounded-lg p-3 mb-3" x-data="{ class_{{ $item->id }}: 'class' }">
                        <div class="flex justify-between items-start">
                            <div>
                                <div class="flex gap-2 items-center mb-2">
                                    <i class="las la-chevron-circle-right la-2x"></i>
                                    <div class="flex flex-col">
                                        <a href="{{ route('backend.logic.classes.view', $item->id) }}" class="text-lg leading-none">{{ $item->title }}</a>
                                        <div class="text-xs text-gray-400">
                                            {{ $item->description }}
                                        </div>
                                    </div>
                                </div>

                                <div class="inline-flex rounded-full cq2p6 cdbjv c6rpu cwvsn cob4g cw92y csq8i c0qeg cynm4">Product</div>
                            </div>

                            <div class="bg-slate-800 w-16 rounded-md" style="width: fit-content;">
                                <ul class="flex gap-1 items-center p-2">
                                    <li x-data="{show_hint: false}" @mouseover="show_hint = true"
                                        @mouseleave="show_hint = false">
                                        <button class="text-gray-400 hover:text-white block w-full flex gap-1 items-center">
                                    <span class="block w-8 mx-auto">
                                        <i class="las la-object-group text-white text-lg"></i>
                                    </span>
                                            <div class="text-xs" x-show="show_hint" x-transition>Объекты</div>
                                        </button>
                                    </li>
                                    <li x-data="{show_hint: false}" @mouseover="show_hint = true"
                                        @mouseleave="show_hint = false">
                                        <button class="text-gray-400 hover:text-white block w-full flex gap-1 items-center">
                                    <span class="block w-8 mx-auto">
                                        <i class="las la-code text-white text-lg"></i>
                                    </span>
                                            <div class="text-xs" x-show="show_hint" x-transition>Методы</div>
                                        </button>
                                    </li>
                                    <li x-data="{show_hint: false}" @mouseover="show_hint = true"
                                        @mouseleave="show_hint = false">
                                        <button class="text-gray-400 hover:text-white block w-full flex gap-1 items-center">
                                    <span class="block w-8 mx-auto">
                                        <i class="las la-cube text-white text-lg"></i>
                                    </span>
                                            <div class="text-xs" x-show="show_hint" x-transition>Свойства</div>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
        </div>

    </div>
</main>
