<div class="mb-3">
    <form
        wire:submit="save"
        class="bg-white dark:bg-slate-800 shadow-md rounded border border-slate-200 dark:border-slate-700 ctk06">
        <div class="grid-cols-1 md:grid-cols-2 cju5y c5va1" x-data="{'keep_history': false, 'validation': false}">
            <div class="ckut6">
                <div>
                    <div class="flex items-center cmgwo">
                        <label class="block text-sm cw92y ci4cg" for="tooltip">
                            Название свойства
                        </label>
                        <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true"
                             @mouseleave="open = false">
                            <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true"
                                    @focusout="open = false" @click.prevent="" aria-expanded="false">
                                <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                </svg>
                            </button>
                            <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open"
                                     x-transition:enter="c5mjj coq4n ch8aq ccio3"
                                     x-transition:enter-start="opacity-0 cf3f3" x-transition:enter-end="cqsra cfwq4"
                                     x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra"
                                     x-transition:leave-end="opacity-0" style="display: none;">
                                    <div class="text-sm">
                                        Любое название для свойства на любом языке. Обратиться к свойству можно по SLUG
                                        или ID
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input wire:model="data.title" class="c03gb c3ff8" placeholder="Название свойства" type="text">
                    @error('data.title')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="c7n6y">
                <div class="flex items-center cmgwo">
                    <label class="block text-sm cw92y ci4cg" for="tooltip">
                        Значение свойства
                    </label>
                    <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true"
                         @mouseleave="open = false">
                        <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true"
                                @focusout="open = false" @click.prevent="" aria-expanded="false">
                            <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                            </svg>
                        </button>
                        <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                            <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open"
                                 x-transition:enter="c5mjj coq4n ch8aq ccio3" x-transition:enter-start="opacity-0 cf3f3"
                                 x-transition:enter-end="cqsra cfwq4" x-transition:leave="c5mjj coq4n ch8aq"
                                 x-transition:leave-start="cqsra" x-transition:leave-end="opacity-0"
                                 style="display: none;">
                                <div class="text-sm">
                                    Можно сразу указать значение, которое будет значением по умолчанию
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c4ijw">
                    <input wire:model="data.value" class="c03gb c3ff8 ctmd2" type="text">
                    <div class="flex items-center pointer-events-none cozyg csmh2 c1u8w">
                        <svg class="ml-3 mr-2 czgoy c3wll c7n6y cgmrc cm474" viewBox="0 0 16 16">
                            <path
                                d="M11.7.3c-.4-.4-1-.4-1.4 0l-10 10c-.2.2-.3.4-.3.7v4c0 .6.4 1 1 1h4c.3 0 .5-.1.7-.3l10-10c.4-.4.4-1 0-1.4l-4-4zM4.6 14H2v-2.6l6-6L10.6 8l-6 6zM12 6.6L9.4 4 11 2.4 13.6 5 12 6.6z"></path>
                        </svg>
                    </div>
                </div>
                @error('data.value')
                <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <div class="w-full mb-3">
                    <label class="block text-sm cw92y ci4cg" for="tooltip">
                        Хранить историю?
                    </label>
                    <div class="flex items-center">
                        <div class="c987k">
                            <input type="checkbox" id="switch-2" class="cbl3h" x-model="keep_history">
                            <label class="ce4zx c717g" for="switch-2">
                                <span class="bg-white cl0q9" aria-hidden="true"></span>
                                <span class="cbl3h">Switch label</span>
                            </label>
                        </div>
                        <div class="text-sm ciz4v czgoy clmtf c9o7o"
                             x-text="keep_history ? 'Да, хранить' : 'Нет'"></div>
                    </div>
                </div>

                <div class="ckut6" x-show="keep_history" x-transition>
                    <div>
                        <div class="flex items-center cmgwo">
                            <label class="block text-sm cw92y ci4cg" for="tooltip">
                                Время хранения истории
                            </label>
                            <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true"
                                 @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true"
                                        @focusout="open = false" @click.prevent="" aria-expanded="false">
                                    <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                    <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open"
                                         x-transition:enter="c5mjj coq4n ch8aq ccio3"
                                         x-transition:enter-start="opacity-0 cf3f3" x-transition:enter-end="cqsra cfwq4"
                                         x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra"
                                         x-transition:leave-end="opacity-0" style="display: none;">
                                        <div class="text-sm">
                                            Указывается в минутах. Очистка старых данных происходит при поступлении
                                            нового значения.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input wire:model="props.keep_history" class="c03gb c3ff8" placeholder="60" type="number">
                        @error('props.keep_history')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div>
                <div class="w-full mb-3">
                    <label class="block text-sm cw92y ci4cg" for="tooltip">
                        Валидировать значение?
                    </label>
                    <div class="flex items-center">
                        <div class="c987k">
                            <input type="checkbox" id="validation" class="cbl3h" x-model="validation">
                            <label class="ce4zx c717g" for="validation">
                                <span class="bg-white cl0q9" aria-hidden="true"></span>
                                <span class="cbl3h">Switch label</span>
                            </label>
                        </div>
                        <div class="text-sm ciz4v czgoy clmtf c9o7o"
                             x-text="validation ? 'Да, проверять' : 'Нет'"></div>
                    </div>
                </div>

                <div class="ckut6" x-show="validation" x-transition>
                    <div>
                        <div class="flex items-center cmgwo">
                            <label class="block text-sm cw92y ci4cg" for="tooltip">
                                Регулярное выражение
                            </label>
                            <div class="c4ijw c9o7o" x-data="{ open: false }" @mouseenter="open = true"
                                 @mouseleave="open = false">
                                <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true"
                                        @focusout="open = false" @click.prevent="" aria-expanded="false">
                                    <svg class="ciz4v czgoy c3wll cgmrc cm474" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="c50r7 c1gyb cnzfa csmh2 cox8h">
                                    <div class="rounded ct1ew cmo81 csj4z ccg4t c7j98 ciamg cynm4" x-show="open"
                                         x-transition:enter="c5mjj coq4n ch8aq ccio3"
                                         x-transition:enter-start="opacity-0 cf3f3" x-transition:enter-end="cqsra cfwq4"
                                         x-transition:leave="c5mjj coq4n ch8aq" x-transition:leave-start="cqsra"
                                         x-transition:leave-end="opacity-0" style="display: none;">
                                        <div class="text-sm">
                                            Регулярное выражение, где %DIRTY% входящее значение
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input wire:model="props.validation" class="c03gb c3ff8" placeholder="60" type="text">
                        @error('props.validation')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            @if($data['id'])
                <button type="submit" class="btn cfeqx !bg-green-700 ceqwg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="fill-white">
                        <script xmlns=""/>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M21.1213 2.70705C19.9497 1.53548 18.0503 1.53547 16.8787 2.70705L15.1989 4.38685L7.29289 12.2928C7.16473 12.421 7.07382 12.5816 7.02986 12.7574L6.02986 16.7574C5.94466 17.0982 6.04451 17.4587 6.29289 17.707C6.54127 17.9554 6.90176 18.0553 7.24254 17.9701L11.2425 16.9701C11.4184 16.9261 11.5789 16.8352 11.7071 16.707L19.5556 8.85857L21.2929 7.12126C22.4645 5.94969 22.4645 4.05019 21.2929 2.87862L21.1213 2.70705ZM18.2929 4.12126C18.6834 3.73074 19.3166 3.73074 19.7071 4.12126L19.8787 4.29283C20.2692 4.68336 20.2692 5.31653 19.8787 5.70705L18.8622 6.72357L17.3068 5.10738L18.2929 4.12126ZM15.8923 6.52185L17.4477 8.13804L10.4888 15.097L8.37437 15.6256L8.90296 13.5112L15.8923 6.52185ZM4 7.99994C4 7.44766 4.44772 6.99994 5 6.99994H10C10.5523 6.99994 11 6.55223 11 5.99994C11 5.44766 10.5523 4.99994 10 4.99994H5C3.34315 4.99994 2 6.34309 2 7.99994V18.9999C2 20.6568 3.34315 21.9999 5 21.9999H16C17.6569 21.9999 19 20.6568 19 18.9999V13.9999C19 13.4477 18.5523 12.9999 18 12.9999C17.4477 12.9999 17 13.4477 17 13.9999V18.9999C17 19.5522 16.5523 19.9999 16 19.9999H5C4.44772 19.9999 4 19.5522 4 18.9999V7.99994Z"
                        />
                    </svg>
                    <span class="c9o7o">Изменить свойство</span>
                </button>
            @else
                <button type="submit" class="btn cfeqx !bg-green-700 ceqwg">
                    <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                    </svg>
                    <span class="c9o7o">Создать свойство</span>
                </button>
            @endif
        </div>
    </form>
</div>
