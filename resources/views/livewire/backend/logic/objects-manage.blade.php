<main class="ckut6">
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">
        <div class="ce97l">
            <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                @if($data['id'])
                    Изменить объект класса
                @else
                    Создаем новый объект класса
                @endif
            </h1>
            <div class="text-gray-400 text-sm">
                <i>Объекты</i> - это виртуальное устройство в системе. Объект связан с классом и свойствами, в которых хранятся данные.

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
                                                    Любое название. Используется для поиска и отображения в логах.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input autofocus wire:model="data.title" class="c03gb c3ff8" type="text"
                                       placeholder="Датчики температуры">
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
                                    Связан с классом
                                </label>
                                <select @disabled(count($this->availableClasses) == 0) wire:model.live="data.system_class_id"
                                        class="cy9mt w-full">
                                    @forelse($this->availableClasses as $key => $class)
                                        @if($loop->first)
                                            <option value="" selected>Выберите класс</option>
                                        @endif

                                        <option value="{{$key}}">{{$class}}</option>
                                    @empty
                                        <option value="0">Сначала нужно добавить класс</option>
                                    @endforelse
                                </select>
                                @error('data.system_class_id')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>

                <div class="text-center">
                    @if($data['id'])
                        <button type="submit" class="btn cfeqx !bg-green-700 ceqwg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" class="fill-white">
                                <script xmlns=""/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M21.1213 2.70705C19.9497 1.53548 18.0503 1.53547 16.8787 2.70705L15.1989 4.38685L7.29289 12.2928C7.16473 12.421 7.07382 12.5816 7.02986 12.7574L6.02986 16.7574C5.94466 17.0982 6.04451 17.4587 6.29289 17.707C6.54127 17.9554 6.90176 18.0553 7.24254 17.9701L11.2425 16.9701C11.4184 16.9261 11.5789 16.8352 11.7071 16.707L19.5556 8.85857L21.2929 7.12126C22.4645 5.94969 22.4645 4.05019 21.2929 2.87862L21.1213 2.70705ZM18.2929 4.12126C18.6834 3.73074 19.3166 3.73074 19.7071 4.12126L19.8787 4.29283C20.2692 4.68336 20.2692 5.31653 19.8787 5.70705L18.8622 6.72357L17.3068 5.10738L18.2929 4.12126ZM15.8923 6.52185L17.4477 8.13804L10.4888 15.097L8.37437 15.6256L8.90296 13.5112L15.8923 6.52185ZM4 7.99994C4 7.44766 4.44772 6.99994 5 6.99994H10C10.5523 6.99994 11 6.55223 11 5.99994C11 5.44766 10.5523 4.99994 10 4.99994H5C3.34315 4.99994 2 6.34309 2 7.99994V18.9999C2 20.6568 3.34315 21.9999 5 21.9999H16C17.6569 21.9999 19 20.6568 19 18.9999V13.9999C19 13.4477 18.5523 12.9999 18 12.9999C17.4477 12.9999 17 13.4477 17 13.9999V18.9999C17 19.5522 16.5523 19.9999 16 19.9999H5C4.44772 19.9999 4 19.5522 4 18.9999V7.99994Z"
                                />
                            </svg>
                            <span class="c9o7o">Изменить объект</span>
                        </button>
                    @else
                        <button type="submit" class="btn cfeqx !bg-green-700 ceqwg">
                            <svg class="c3wll c8si1 c7n6y cgmrc cm474" viewBox="0 0 16 16">
                                <path
                                    d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                            </svg>
                            <span class="c9o7o">Создать объект</span>
                        </button>
                    @endif
                </div>
            </form>

        </div>

    </div>
</main>
