<main class="ckut6">
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">
        <div class="ce97l">
            <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                @if($data['id'])
                    Изменить пользователя
                @else
                    Создаем нового пользователя
                @endif
            </h1>
            <div class="text-gray-400 text-sm">
                <i>Пользователи</i> - это аккаунты в системе. У каждого пользователя может быть свой набор прав.
            </div>
        </div>

        <div class="border-slate-200 dark:border-slate-700 c87xd">
            <form wire:submit="save" class="c6kpa crhct" x-data="{realname : '{{$data['realname']}}', login: '{{$data['login']}}', email: '{{$data['email']}}'}">
                <div>
                    <h2 class="text-slate-800 dark:text-slate-100 font-bold cjefr crkc7">
                        Основная информация
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-6 gap-4">
                        <div class="c9lun cju5y c5va1 md:col-span-4">
                            <div>
                                <div class="flex items-center cmgwo">
                                    <label class="block text-sm cw92y ci4cg" for="data.login">
                                        Логин
                                    </label>
                                    <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true"
                                         @mouseleave="open = false">
                                        <button class="block" aria-haspopup="true" :aria-expanded="open"
                                                @focus="open = true" @focusout="open = false" @click.prevent=""
                                                aria-expanded="false">
                                            <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                            </svg>
                                        </button>
                                        <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                            <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open"
                                                 x-transition:enter="c5mjj coq4n ch8aq ccio3"
                                                 x-transition:enter-start="opacity-0 cf3f3"
                                                 x-transition:enter-end="cqsra cfwq4"
                                                 x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra"
                                                 x-transition:leave-end="opacity-0" style="display: none;">
                                                <div class="text-sm">
                                                    Логин на латинице, используется в логах.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input autofocus x-model="login" id="data.login" wire:model="data.login" class="c03gb c3ff8" type="text"
                                       placeholder="Логин">
                                @error('data.login')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm cw92y ci4cg" for="data.email">
                                    E-MAIL
                                </label>
                                <input id="data.email" x-model="email" wire:model="data.email" class="c03gb c3ff8" type="email"
                                       placeholder="ivanov@gmail.com">
                                @error('data.email')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm cw92y ci4cg" for="data.realname">
                                    ФИО
                                </label>
                                <input id="data.realname" x-model="realname" wire:model="data.realname" class="c03gb c3ff8" type="text"
                                       placeholder="Иванов Иван Иванович">
                                @error('data.realname')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <div class="flex items-center cmgwo">
                                    <label class="block text-sm cw92y ci4cg" for="data.password">
                                        Пароль
                                    </label>
                                    <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true"
                                         @mouseleave="open = false">
                                        <button class="block" aria-haspopup="true" :aria-expanded="open"
                                                @focus="open = true" @focusout="open = false" @click.prevent=""
                                                aria-expanded="false">
                                            <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                            </svg>
                                        </button>
                                        <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                            <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open"
                                                 x-transition:enter="c5mjj coq4n ch8aq ccio3"
                                                 x-transition:enter-start="opacity-0 cf3f3"
                                                 x-transition:enter-end="cqsra cfwq4"
                                                 x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra"
                                                 x-transition:leave-end="opacity-0" style="display: none;">
                                                <div class="text-sm">
                                                    Минимум 8 символов, чем сложнее - тем лучше :)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input id="data.password" wire:model="data.password" class="c03gb c3ff8" type="text"
                                       placeholder="*********">
                                @error('data.password')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm cw92y ci4cg" for="data.password_confirmation">
                                    Подтверждение пароля
                                </label>
                                <input id="data.password_confirmation" wire:model="data.password_confirmation"
                                       class="c03gb c3ff8" type="text" placeholder="*********">
                                @error('data.password_confirmation')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>

                            <div></div>

                            <div>
                                <div class="flex justify-between items-center">
                                    <label class="block text-sm cw92y ci4cg" for="data.allow_admin">
                                        Имеет доступ к ПУ?
                                    </label>
                                    <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true"
                                         @mouseleave="open = false">
                                        <button class="block" aria-haspopup="true" :aria-expanded="open"
                                                @focus="open = true" @focusout="open = false" @click.prevent=""
                                                aria-expanded="false">
                                            <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                            </svg>
                                        </button>
                                        <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                            <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open"
                                                 x-transition:enter="c5mjj coq4n ch8aq ccio3"
                                                 x-transition:enter-start="opacity-0 cf3f3"
                                                 x-transition:enter-end="cqsra cfwq4"
                                                 x-transition:leave="c5mjj coq4n ch8aq"
                                                 x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0"
                                                 style="display: none;">
                                                <div class="text-sm">
                                                    Пользователь сможет входить в ПУ и менять настройки.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center" x-data="{ checked: {{ $data['allow_admin'] ? 'true' : 'false' }} }">
                                    <div class="c987k">
                                        <input wire:model="data.allow_admin" id="data.allow_admin" type="checkbox"
                                               class="cbl3h" x-model="checked">
                                        <label class="ce4zx c717g" for="data.allow_admin">
                                            <span class="bg-white cl0q9" aria-hidden="true"></span>
                                            <span class="cbl3h">Switch label</span>
                                        </label>
                                    </div>
                                    <div class="text-sm ciz4v czgoy clmtf c9o7o" x-text="checked ? 'Да' : 'Нет'"></div>
                                </div>
                                @error('data.allow_admin')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <div class="flex justify-between items-center">
                                    <label class="block text-sm cw92y ci4cg" for="data.allow_web">
                                        Имеет доступ к WEB?
                                    </label>
                                    <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true"
                                         @mouseleave="open = false">
                                        <button class="block" aria-haspopup="true" :aria-expanded="open"
                                                @focus="open = true" @focusout="open = false" @click.prevent=""
                                                aria-expanded="false">
                                            <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                            </svg>
                                        </button>
                                        <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                            <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open"
                                                 x-transition:enter="c5mjj coq4n ch8aq ccio3"
                                                 x-transition:enter-start="opacity-0 cf3f3"
                                                 x-transition:enter-end="cqsra cfwq4"
                                                 x-transition:leave="c5mjj coq4n ch8aq"
                                                 x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0"
                                                 style="display: none;">
                                                <div class="text-sm">
                                                    Пользователь сможет входить в WEB интерфейс и управлять
                                                    устройствами.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center" x-data="{ checked: {{ $data['allow_web'] ? 'true' : 'false' }} }">
                                    <div class="c987k">
                                        <input wire:model="data.allow_web" id="data.allow_web" type="checkbox"
                                               class="cbl3h" x-model="checked">
                                        <label class="ce4zx c717g" for="data.allow_web">
                                            <span class="bg-white cl0q9" aria-hidden="true"></span>
                                            <span class="cbl3h">Switch label</span>
                                        </label>
                                    </div>
                                    <div class="text-sm ciz4v czgoy clmtf c9o7o" x-text="checked ? 'Да' : 'Нет'"></div>
                                </div>
                                @error('data.allow_web')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>

                        <div
                            class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 md:col-span-2 w-full">
                            <div class="flex chmlm crszu">
                                <div class="ckut6 ctk06">
                                    <div>
                                        <div class="flex justify-center c7j98">
                                            <div class="inline-flex cxbmt c4ijw">
                                                <img class="rounded-full w-[100px]" src="@if ($photo) {{ $photo->temporaryUrl() }} @else {{ $model?->avatar() ?? '/backend/images/no-profile-picture-icon.svg' }} @endif">
                                            </div>
                                        </div>
                                        @error('photo')
                                        <div class="text-red-500 text-xs">{{ $message }}</div>
                                        @enderror
                                        <div class="cob4g my-3" x-show="realname != ''">
                                            <h2 class="justify-center cqosy ctbo0 cvvcr" x-text="realname">
                                                Новый пользователь
                                            </h2>
                                        </div>
                                        <div class="flex justify-evenly items-center text-xs">
                                            <div x-show="login != ''">
                                                <span class="text-gray-400">
                                                    <i class="las la-signature"></i> Логин:
                                                </span>
                                                <span x-text="login"></span>
                                            </div>
                                            <div x-show="email != ''">
                                                <span class="text-gray-400">
                                                    <i class="las la-at"></i> E-MAIL:
                                                </span>
                                                <span x-text="email"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-slate-200 dark:border-slate-700 c87xd">
                                    <label class="block cursor-pointer text-sm text-indigo-500 cuv1l cdi3j cob4g cw92y cjm6w ctysv">
                                        <div class="flex items-center justify-center gap-1">
                                            <i class="las la-file-upload text-xl"></i>
                                            <div>
                                                Загрузить фото
                                            </div>
                                        </div>
                                        <input type="file" class="hidden" wire:model="photo">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center flex gap-1 justify-center">
                    <a href="{{ route('backend.users') }}"
                       class="btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt ch1ih c6w4h">
                        Назад
                    </a>

                    <button type="submit" class="btn chows ck3g6 ceqwg">
                        @if($data['id'])
                            Изменить пользователя
                        @else
                            Создать пользователя
                        @endif
                    </button>

                    @if($data['id'])
                        <div x-data="{confirm: false}">
                            <button x-show="!confirm" type="button" class="btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt c6tg6" @click="confirm = true">
                                Удалить пользователя
                            </button>

                            <button x-show="confirm" wire:click="delete()" type="button" class="btn cro9h c0vjv ceqwg" @click="confirm = true">
                                Да, я уверен - удалить!
                            </button>
                        </div>
                    @endif
                </div>
            </form>

        </div>

    </div>
</main>
