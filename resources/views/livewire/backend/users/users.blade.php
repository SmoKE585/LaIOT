<main class="ckut6">

    <!-- Content -->
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">

        <!-- Page header -->
        <div class="cyqq9 cxbdy clk9r cxlzs c958j">

            <!-- Left: Title -->
            <div class="clxmc c958j">
                <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                    {{ declension(count($this->items), 'пользователь') }} {{ \Drandin\DeclensionNouns\Facades\DeclensionNoun::makeOnlyWord(count($this->items), 'найден')}}
                </h1>
            </div>

            <div class="cnt8v cexh7 cuh4n cy6ju ck4mf c5va1">
                <div class="hidden cb161">
                    <form class="c4ijw">
                        <label for="action-search" class="cbl3h">Поиск</label>
                        <input wire:model.live.debounce.500ms="search" class="bg-white dark:bg-slate-800 c03gb ctmd2"
                               type="search" placeholder="Поиск скриптов…">
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

                <a href="{{ route('backend.users.manage') }}" class="btn cfeqx cf1ce ceqwg">
                    Новый пользователь
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
                            <a class="text-sm flex items-center cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4"
                               href="javascript://"
                               @click="open = false; current = 'created_at'; $wire.set('filter.sort', 'created_at')"
                               @focus="open = true" @focusout="open = false">
                                дате создания
                            </a>
                        </li>
                        <li x-show="current != 'updated_at'">
                            <a class="text-sm flex items-center cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4"
                               href="javascript://"
                               @click="open = false; current = 'updated_at'; $wire.set('filter.sort', 'updated_at')"
                               @focus="open = true" @focusout="open = false">
                                дате изменения
                            </a>
                        </li>
                        <li x-show="current != 'title'">
                            <a class="text-sm flex items-center cn6r0 cnz6z ch1ih c6w4h cw92y cjm6w cynm4"
                               href="javascript://"
                               @click="open = false; current = 'title'; $wire.set('filter.sort', 'title')"
                               @focus="open = true" @focusout="open = false">
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

        <div class="c3jt4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                @forelse($this->items as $user)
                    <div
                        class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 w-full">
                        <div class="flex chmlm crszu">
                            <div class="ckut6 ctk06">
                                <div>
                                    <div class="flex justify-center c7j98">
                                        <div class="inline-flex cxbmt c4ijw">
                                            <img class="rounded-full w-[100px]" src="{{$user->avatar()}}">
                                        </div>
                                    </div>
                                    <div class="cob4g my-3">
                                        <h2 class="justify-center cqosy ctbo0 cvvcr">
                                            {{ $user->realname }}
                                        </h2>
                                    </div>
                                    <div class="flex justify-evenly items-center text-xs mb-3">
                                        <div>
                                            <span class="text-gray-400">
                                                <i class="las la-signature"></i> Логин:
                                            </span>
                                            <span>{{ $user->login }}</span>
                                        </div>
                                        <div>
                                            <span class="text-gray-400">
                                                <i class="las la-at"></i> E-MAIL:
                                            </span>
                                            <span>{{ $user->email }}</span>
                                        </div>
                                    </div>
                                    <div class="flex justify-evenly">
                                        @if($user->allow_web)
                                            <div class="c92xk">
                                                <div
                                                    class="inline-flex rounded-full cxdv7 ctksn ckrqz ccfka cob4g cw92y csq8i c0qeg cynm4">
                                                    Доступ к WEB
                                                </div>
                                            </div>
                                        @endif
                                        @if($user->allow_admin)
                                            <div class="c92xk">
                                                <div
                                                    class="inline-flex items-center rounded-full ch1ih cqc99 c1xtk cob4g cw92y cxcbl c0qeg ciamg">
                                                    <svg class="w-3 h-3 mr-1 cz5ai c3wll c7n6y" viewBox="0 0 12 12">
                                                        <path
                                                            d="M11.953 4.29a.5.5 0 00-.454-.292H6.14L6.984.62A.5.5 0 006.12.173l-6 7a.5.5 0 00.379.825h5.359l-.844 3.38a.5.5 0 00.864.445l6-7a.5.5 0 00.075-.534z"></path>
                                                    </svg>
                                                    <span>Доступ к ПУ</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('backend.users.manage', $user->id) }}"
                               class="border-slate-200 dark:border-slate-700 c87xd">
                                <label
                                    class="block cursor-pointer text-sm text-indigo-500 cuv1l cdi3j cob4g cw92y cjm6w ctysv">
                                    <div class="flex items-center justify-center gap-1">
                                        <i class="las la-edit text-xl"></i>
                                        <div>
                                            Изменить пользователя
                                        </div>
                                    </div>
                                </label>
                            </a>
                        </div>
                    </div>

                @empty

                @endforelse
            </div>
        </div>

        <div class="crhct">
            {{ $this->items->links() }}
        </div>

    </div>
</main>
