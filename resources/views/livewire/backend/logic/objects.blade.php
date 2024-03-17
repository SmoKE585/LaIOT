<main class="ckut6">

    <!-- Content -->
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">

        <!-- Page header -->
        <div class="cyqq9 cxbdy clk9r cxlzs c958j">

            <!-- Left: Title -->
            <div class="clxmc c958j">
                <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                    {{ count($this->items) }} объектов добавлено
                </h1>
            </div>

            <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">
                <div class="hidden cb161">
                    <form class="c4ijw">
                        <label for="action-search" class="cbl3h">Поиск</label>
                        <input id="action-search" class="bg-white dark:bg-slate-800 c03gb ctmd2" type="search" placeholder="Поиск скриптов…">
                        <button class="cozyg csmh2 c1u8w c2djl" type="submit" aria-label="Search">
                            <svg class="ml-3 mr-2 c1bvt cc44c ciz4v czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                            </svg>
                        </button>
                    </form>
                </div>

                <a href="{{ route('backend.logic.objects.manage') }}" class="btn cfeqx cf1ce ceqwg">
                    Новый объект
                </a>

            </div>
        </div>

        <div class="cg5st">
            <span>Сортировать по </span>
            <div class="inline-flex c4ijw" x-data="{ open: false }">
                <button class="inline-flex justify-center items-center c2djl" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                    <div class="flex items-center c32al">
                        <span class="text-indigo-500 cw6ke c8xe2 cw92y c32al">дате изменения</span>
                        <svg class="w-3 h-3 text-indigo-400 c3wll c7n6y csib2" viewBox="0 0 12 12">
                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                        </svg>
                    </div>
                </button>
                <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded creyy ct1ew cetne csmh2 c8gb2 c28cu c8407 c76e0 cox8h c5xk8" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 c3pue" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" style="display: none;">
                    <ul>
                        <li>
                            <a class="text-sm flex items-center cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                дате последнего вызова
                            </a>
                        </li>
                        <li>
                            <a class="text-sm flex items-center cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
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
                    <button class="inline-flex items-center justify-center text-sm rounded-full border cyj9a cf1ce crp72 cw92y cgpmj ceqwg cyyn9 cl0q9 cjm6w cynm4">Показывать все</button>
                </li>
                <li class="m-1">
                    <button class="inline-flex items-center justify-center text-sm rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 cjm6w cynm4">
                        Открытые в интернет
                    </button>
                </li>
                <li class="m-1">
                    <button class="inline-flex items-center justify-center text-sm rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 cjm6w cynm4">
                        Черновики
                    </button>
                </li>
                <li class="m-1">
                    <button class="inline-flex items-center justify-center text-sm rounded-full border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-400 c46uo cm7vt crp72 cw92y cgpmj cyyn9 cl0q9 cjm6w cynm4">
                        Без вызовов
                    </button>
                </li>
            </ul>
        </div>

        <div class="bg-white c3jt4">
            <div>
                <div class="cjrun">
                    <table class="ch1ih c07b2 c3ff8">
                        <thead class="text-slate-500 border-slate-200 dark:border-slate-700 cqosy cw3n3 cz4zt c87xd c0qeg">
                        <tr>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">ID</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Название</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Класс</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Свойств</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Изменен</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">

                            </th>
                        </tr>
                        </thead>
                        <tbody class="text-sm border-slate-200 dark:border-slate-700 ci5zp ccc5r cxw08 cz4zt">
                        @forelse($this->items as $item)
                            <tr>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    {{ $item->id }}
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    <div>{{ $item->title }}</div>
                                    <div class="text-gray-400 text-xs">{{ \Illuminate\Support\Str::slug($item->title) }}</div>
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    <a href="{{ route('backend.logic.classes.manage', $item->class->id) }}">
                                        #{{$item->class->id}} {{ $item->class?->title ?? '' }}
                                    </a>
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">

                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    {{ $item->updated_at->format('d.m.Y H:i') }}
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14 text-right">
                                    <x-forms.button href="{{route('backend.logic.objects.manage', $item->id)}}" />
                                </td>
                            </tr>
                        @empty

                        @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </div>
</main>
