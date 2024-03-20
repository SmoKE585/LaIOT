<main class="ckut6">
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">
        <div class="cyqq9 cxbdy clk9r cxlzs c958j">
            <div class="clxmc c958j">
                <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                    {{ declension(count($this->items), 'скрипт') }} найдено
                </h1>
            </div>

            <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">
                <div class="hidden cb161">
                    <form class="c4ijw">
                        <label for="action-search" class="cbl3h">Поиск</label>
                        <input wire:model.live.debounce.500ms="search" class="bg-white dark:bg-slate-800 c03gb ctmd2" type="search" placeholder="Поиск скриптов…">
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

                <a href="{{ route('backend.logic.scripts.manage') }}" class="btn cfeqx cf1ce ceqwg">
                    Новый скрипт
                </a>

            </div>
        </div>

        <div class="cg5st">
            <span>Сортировать по </span>
            <div class="inline-flex c4ijw" x-data="{ open: false, current: '{{ $filter['sort'] }}' }">
                <button class="inline-flex justify-center items-center c2djl" aria-haspopup="true"
                        @click.prevent="open = !open" :aria-expanded="open" aria-expanded="false">
                    <div class="flex items-center c32al">
                        <span class="text-indigo-500 cw6ke c8xe2 cw92y c32al">
                            {{ $filterProps[$filter['sort']] }}
                        </span>
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
                        <li x-show="current != 'created_at'">
                            <a class="text-sm flex items-center cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="javascript://"
                               @click="open = false; current = 'created_at'; $wire.set('filter.sort', 'created_at')" @focus="open = true" @focusout="open = false">
                                дате создания
                            </a>
                        </li>
                        <li x-show="current != 'updated_at'">
                            <a class="text-sm flex items-center cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="javascript://"
                               @click="open = false; current = 'updated_at'; $wire.set('filter.sort', 'updated_at')" @focus="open = true" @focusout="open = false">
                                дате изменения
                            </a>
                        </li>
                        <li x-show="current != 'title'">
                            <a class="text-sm flex items-center cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4" href="javascript://"
                               @click="open = false; current = 'title'; $wire.set('filter.sort', 'title')" @focus="open = true" @focusout="open = false">
                                названию
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="cg5st">
            <ul class="flex flex-wrap -m-1" x-data="">
                <li class="m-1">
                    <button
                        @click="$wire.set('filter.show', 'all')"
                        :class="$wire.filter.show == 'all' ? 'cf1ce text-white border-slate-200' : 'border-slate-300 bg-white dark:bg-slate-800 dark:text-slate-400 text-slate-500'"
                        class="inline-flex items-center justify-center text-sm rounded-full border px-3 py-1">
                        Показывать все
                    </button>
                </li>
                <li class="m-1">
                    <button
                        @click="$wire.set('filter.show', 'allow_internet')"
                        :class="$wire.filter.show == 'allow_internet' ? 'cf1ce text-white border-slate-200' : 'border-slate-300 bg-white dark:bg-slate-800 dark:text-slate-400 text-slate-500'"
                        class="inline-flex items-center justify-center text-sm rounded-full border px-3 py-1">
                        Открытые в интернет
                    </button>
                </li>
                <li class="m-1">
                    <button
                        @click="$wire.set('filter.show', 'active')"
                        :class="$wire.filter.show == 'active' ? 'cf1ce text-white border-slate-200' : 'border-slate-300 bg-white dark:bg-slate-800 dark:text-slate-400 text-slate-500'"
                        class="inline-flex items-center justify-center text-sm rounded-full border px-3 py-1">
                        Черновики
                    </button>
                </li>
            </ul>
        </div>

        <div class="bg-white c3jt4 rounded-lg">
            <div class="cjrun">
                @if($this->items->isNotEmpty())
                    <table class="ch1ih c07b2 c3ff8">
                        <thead
                            class="text-slate-500 cqosy cw3n3 cz4zt c0qeg">
                        <tr>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">ID</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Название</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Описание</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Доступ из инт.</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Статус</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Изменен</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">
                                <div class="cqosy cojuf">Последний вызов</div>
                            </th>
                            <th class="c626f ccr3m cwqwq ciamg c8o14">

                            </th>
                        </tr>
                        </thead>
                        <tbody class="text-sm ci5zp ccc5r cxw08 cz4zt">
                        @forelse($this->items as $item)
                            <tr>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    {{ $item->id }}
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    <div>{{ $item->title }}</div>
                                    <code class="text-xs text-gray-400 cursor-pointer"
                                          @click="$clipboard('runScript(\'{{ \Illuminate\Support\Str::slug($item->title) }}\');'); $dispatch('notice', {type: 'success', text: 'Код скопирован в буфер обмена!'})">
                                        runScript('{{ \Illuminate\Support\Str::slug($item->title) }}');
                                    </code>
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14 text-xs">
                                    {{ $item->description }}
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    <div class="cojuf">
                                        @if($item->allow_external)
                                            <div
                                                class="inline-flex dark:bg-red-800 text-red-500 dark:text-red-400 rounded-full bg-red-100 cob4g cw92y csq8i c0qeg cynm4">
                                                Да, открыт
                                            </div>
                                        @else
                                            <div
                                                class="inline-flex dark:bg-slate-800 text-green-500 dark:text-green-400 rounded-full c6vqo cob4g cw92y csq8i c0qeg cynm4">
                                                Запрещено
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    <div class="cojuf">
                                        @if($item->active)
                                            <div
                                                class="inline-flex dark:bg-green-800 text-green-500 dark:text-green-400 rounded-full bg-green-100 cob4g cw92y csq8i c0qeg cynm4">
                                                В работе
                                            </div>
                                        @else
                                            <div
                                                class="inline-flex dark:bg-slate-800 text-slate-500 dark:text-slate-400 rounded-full c6vqo cob4g cw92y csq8i c0qeg cynm4">
                                                Черновик
                                            </div>
                                        @endif
                                    </div>
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    {{ $item->updated_at->format('d.m.Y H:i') }}
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    {{ $item->updated_at->format('d.m.Y H:i') }}
                                </td>
                                <td class="c626f ccr3m cwqwq ciamg c8o14">
                                    <a href="{{ route('api.script', Crypt::encryptString($item->id)) }}" target="_blank"
                                       class="btn !px-1 !py-1 dark:bg-slate-300 border-slate-200 dark:border-slate-700 c46uo cm7vt">
                                        <img src="/backend/images/icons/nucleo/outline/bolt.svg">
                                    </a>
                                    <button title="Получить ссылку на скрипт"
                                            @click="window.prompt('Ссылка для вызова скрипта из интернета', '{{ route('api.script', Crypt::encryptString($item->id)) }}');"
                                            class="btn !px-1 !py-1 dark:bg-slate-300 border-slate-200 dark:border-slate-700 c46uo cm7vt">
                                        <img src="/backend/images/icons/nucleo/outline/at-sign.svg">
                                    </button>
                                    <a href="{{ route('backend.logic.scripts.manage', $item->id) }}"
                                       class="btn !px-1 !py-1 dark:bg-slate-300 border-slate-200 dark:border-slate-700 c46uo cm7vt">
                                        <img src="/backend/images/icons/nucleo/outline/pen-writing-6.svg">
                                    </a>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                        </tbody>
                    </table>
                @else
                    <div class="">
                        <div class="p-5">
                            <div class="cob4g c9r0z">
                                <div class="inline-flex items-center justify-center rounded-full c70hj cko1f c5t2s cc3qz c3cxh c958j ciqso cixej">
                                    <svg class="c3wll ceob2 cv3gb" viewBox="0 0 20 24">
                                        <path class="text-slate-500 cdfsn" d="M10 10.562l9-5-8.514-4.73a1 1 0 00-.972 0L1 5.562l9 5z"></path>
                                        <path class="dark:text-slate-400 cweq2" d="M9 12.294l-9-5v10.412a1 1 0 00.514.874L9 23.294v-11z"></path>
                                        <path class="ciz4v czgoy" d="M11 12.294v11l8.486-4.714a1 1 0 00.514-.874V7.295l-9 4.999z"></path>
                                    </svg>
                                </div>
                                <h2 class="text-slate-800 dark:text-slate-100 font-bold cjefr c7j98">
                                    Пока ничего нет.
                                </h2>
                                <div class="crkc7">
                                    Тут пока ничего нет - самое время добавить новый скрипт!
                                </div>
                                <a href="{{ route('backend.logic.scripts.manage') }}" class="btn cfeqx cf1ce ceqwg">
                                    Новый скрипт
                                </a>
                            </div>

                        </div>
                    </div>
                @endif

            </div>
        </div>

        <div class="crhct">
            {{ $this->items->links() }}
        </div>

    </div>
</main>
