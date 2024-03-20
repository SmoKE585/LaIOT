<main class="ckut6">
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">
        <div class="ce97l">
            <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                @if($data['id'])
                    Изменить скрипт
                @else
                    Создаем новый скрипт
                @endif
            </h1>
            <div class="text-gray-400 text-sm">
                <i>Скрипты</i> - это какой либо простой код предназначен для выполнения простых задач. Например, парсинг информации,
                отправка команд на другой сервер, получение команд от другого сервера и т.д.
            </div>
        </div>

        <div class="border-slate-200 dark:border-slate-700 c87xd">
            <form wire:submit="save" class="c6kpa crhct">
                <div>
                    <h2 class="text-slate-800 dark:text-slate-100 font-bold cjefr crkc7">
                        Основная информация
                    </h2>
                    <div class="c9lun cju5y c5va1">
                        <div>
                            <div>
                                <div class="flex items-center cmgwo">
                                    <label class="block text-sm cw92y ci4cg" for="tooltip">
                                        Название
                                    </label>
                                    <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                        <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="" aria-expanded="false">
                                            <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                                <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                            </svg>
                                        </button>
                                        <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                            <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 cf3f3" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" style="display: none;">
                                                <div class="text-sm">
                                                    Любое название. Используется для поиска и отображения в логах.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input wire:model="data.title" class="c03gb c3ff8" type="text" placeholder="Получение погоды">
                                @error('data.title')
                                    <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>
                                <label class="block text-sm cw92y ci4cg" for="mandatory">
                                    Описание
                                </label>
                                <input wire:model="data.description" class="c03gb c3ff8" type="text">
                                @error('data.description')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>
                                <label class="block text-sm cw92y ci4cg" for="mandatory">
                                    Вызывать по CRON
                                </label>
                                <input @disabled(str_contains(php_uname(), 'Windows')) @if(str_contains(php_uname(), 'Windows')) placeholder="Недоступно в Windows" @endif wire:model="data.cron" class="c03gb c3ff8" type="text">
                                @error('data.cron')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center">
                                <label class="block text-sm cw92y ci4cg" for="mandatory">
                                    Доступен из интернета?
                                </label>
                                <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="" aria-expanded="false">
                                        <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                    </button>
                                    <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                        <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 cf3f3" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" style="display: none;">
                                            <div class="text-sm">
                                                Внимание! Опасное действие. Для защиты от атак, по умолчанию установлен лимит запросов: 60 запросов в минуту. Вы можете изменить значение в настройках системы.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center" x-data="{ checked: {{ $data['allow_external'] ? 'true' : 'false' }} }">
                                <div class="c987k">
                                    <input wire:model="data.allow_external" type="checkbox" id="data.allow_external" class="cbl3h" x-model="checked">
                                    <label class="ce4zx c717g" for="data.allow_external">
                                        <span class="bg-white cl0q9" aria-hidden="true"></span>
                                        <span class="cbl3h">Switch label</span>
                                    </label>
                                </div>
                                <div class="text-sm ciz4v czgoy clmtf c9o7o" x-text="checked ? 'Да, скрипт доступен из интернета' : 'Нет, только внутри системы'"></div>
                            </div>
                            @error('data.allow_external')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <div class="flex justify-between items-center">
                                <label class="block text-sm cw92y ci4cg" for="mandatory">
                                    Опубликован?
                                </label>
                                <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                    <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="" aria-expanded="false">
                                        <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                        </svg>
                                    </button>
                                    <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                        <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open" x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 cf3f3" x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0" style="display: none;">
                                            <div class="text-sm">
                                                Можно создать скрипт и сохранять его как черновик.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center" x-data="{ checked: {{ $data['active'] ? 'true' : 'false' }} }">
                                <div class="c987k">
                                    <input wire:model="data.active" type="checkbox" id="data.active" class="cbl3h" x-model="checked">
                                    <label class="ce4zx c717g" for="data.active">
                                        <span class="bg-white cl0q9" aria-hidden="true"></span>
                                        <span class="cbl3h">Switch label</span>
                                    </label>
                                </div>
                                <div class="text-sm ciz4v czgoy clmtf c9o7o" x-text="checked ? 'Да, включить' : 'Нет, оставить как черновик'"></div>
                            </div>
                            @error('data.active')
                            <div class="text-red-500 text-xs">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-slate-800 dark:text-slate-100 font-bold cjefr crkc7">
                        Содержимое
                    </h2>

                    <div class="mb-3 rounded-sm text-sm bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 dark:text-slate-400 c6w4h c3ff8 c9r0z cfnh0">
                        <div class="flex cmgwo cxbmt c3ff8">
                            <div class="flex">
                                <svg class="text-indigo-500 c3wll c9r0f c7n6y czt1n cgmrc cm474" viewBox="0 0 16 16">
                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm1 12H7V7h2v5zM8 6c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z"></path>
                                </svg>
                                <div>
                                    <div class="text-slate-800 dark:text-slate-100 cw92y ci4cg">
                                        В скриптах доступна переменная <code class="text-red-400">$params</code>, содержащая в себе массив с информацией.
                                    </div>
                                    <div>
                                        <div>
                                            <code class="text-red-400">$params['%METHOD%']</code> - входящие данные из POST, GET, PUT, PATCH запроса
                                        </div>
                                        <div>
                                            <code class="text-red-400">$params['HEADERS']</code> - заголовки входящего запроса
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <livewire:backend.modules.code-editor wire:model="code"/>
                    @error('code')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-center flex gap-1 justify-center">
                    <a href="{{ route('backend.logic.scripts') }}" class="btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt ch1ih c6w4h">
                        Назад
                    </a>

                    <button type="submit" class="btn chows ck3g6 ceqwg">
                        @if($data['id'])
                            Изменить скрипт
                        @else
                            Создать скрипт
                        @endif
                    </button>

                    @if($data['id'])
                        <div x-data="{confirm: false}">
                            <button x-show="!confirm" type="button" class="btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt c6tg6" @click="confirm = true">
                                Удалить скрипт
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
