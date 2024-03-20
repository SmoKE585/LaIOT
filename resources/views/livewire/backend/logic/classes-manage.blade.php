<main class="ckut6">
    <div class="cewy4 clpyc cj3hv cofxq c3ff8 c9r0z c0ycj">
        <div class="ce97l">
            <h1 class="text-slate-800 dark:text-slate-100 font-bold cy709 cjefr">
                @if($data['id'])
                    Изменить группу
                @else
                    Создаем новую группу
                @endif
            </h1>
            <div class="text-gray-400 text-sm">
                <i>Группа устройств</i> - это разделы логики. Они группируют устройства. У каждой группы может быть
                несколько одинаковых по логике устройств и свойств. Например, группа "Датчики", у них у все есть свойство "Заряд батарейки".
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



                    </div>
                </div>

                <div class="text-center flex gap-1 justify-center">
                    <a href="{{ route('backend.logic.classes') }}" class="btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt ch1ih c6w4h">
                        Назад
                    </a>

                    <button type="submit" class="btn chows ck3g6 ceqwg">
                        @if($data['id'])
                            Изменить группу
                        @else
                            Создать группу
                        @endif
                    </button>

                    @if($data['id'])
                        <div x-data="{confirm: false}">
                            <button x-show="!confirm" type="button" class="btn dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt c6tg6" @click="confirm = true">
                                Удалить группу
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
