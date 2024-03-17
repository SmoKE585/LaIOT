<div>
    <div class="flex items-start md:items-center cmgwo justify-between mb-3 flex-col md:flex-row">
        <div class="mb-2 md:mb-0">
            <label class="block text-sm cw92y ci4cg" for="tooltip">
                PHP код
            </label>
            <div class="text-xs text-gray-400">
                Пиши внимательно, не забывай про открывающиеся теги.
            </div>
        </div>

        <div class="flex justify-end gap-1">
            <button
                type="button"
                wire:click="$dispatch('openModal', { component: 'backend.modal.logic.script-run-modal' })"
                class="btn-xs font-normal text-xs dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt text-blue-400">
                Выполнить код
            </button>

            <button type="button" wire:click="validationCode(encodeURI(ActiveEditor.state.doc.toString()))"
                    class="btn-xs font-normal text-xs dark:bg-slate-800 border-slate-200 dark:border-slate-700 c46uo cm7vt clfqm">
                Проверить валидность (CTRL+H)
            </button>
        </div>
    </div>

    @if($validationSuccess === true)
        <div x-show="open" x-transition x-data="{ open: true }" role="alert" class="mb-2">
            <div class="rounded-sm text-sm border c82du cq2p6 chgsl cnx8j c6rpu cwvsn c9r0z cfnh0">
                <div class="flex cmgwo cxbmt c3ff8">
                    <div class="flex">
                        <svg class="c3wll c9r0f cnn59 c7n6y czt1n cgmrc cm474" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                        </svg>
                        <div>
                            <b>Успешно!</b> Отлично, в коде не найдены ошибки - можешь продолжать :)
                        </div>
                    </div>
                    <button type="button" class="ml-3 csvyn c9r0f csask"
                            @click="open = false, $wire.set('validationSuccess', null)">
                        <div class="cbl3h">Close</div>
                        <svg class="c3wll cgmrc cm474">
                            <path
                                d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @elseif($validationSuccess === false)
        <div x-show="open" x-transition x-data="{ open: true }" role="alert" class="mb-2">
            <div class="rounded-sm text-sm border c82du cc380 cna26 cd7z7 ce30q cgaep c9r0z cfnh0">
                <div class="flex cmgwo cxbmt c3ff8">
                    <div class="flex">
                        <svg class="c3wll c9r0f cnn59 c7n6y czt1n cgmrc cm474" viewBox="0 0 16 16">
                            <path
                                d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                        </svg>
                        <div>
                            Ошибка <b>{{ $validationException['error'] }}</b> в строке
                            <b>{{ $validationException['line'] }}</b>
                        </div>
                    </div>
                    <button class="ml-3 csvyn c9r0f csask" @click="open = false, $wire.set('validationSuccess', null)">
                        <div class="cbl3h">Close</div>
                        <svg class="c3wll cgmrc cm474">
                            <path
                                d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @endif


    <div
        wire:ignore
        x-data="{'saved': false}"
        class="z-10"
        x-init="
                document.addEventListener('keydown', function(event) {
                  if (event.ctrlKey && (event.key === 'h' || event.key === 'р')) {
                    $wire.validationCode(encodeURI(ActiveEditor.state.doc.toString()))
                    event.preventDefault();
                  }
                });
                ActiveEditor = window.CodeMirror($root, '{{base64_encode($code)}}')
            ">
        <textarea class="hidden" x-on:change.debounce.350ms="$wire.set('code', $el.value);saved=true;"
                  id="codeMirrorCode" wrap="hard"></textarea>

        <div class="relative" x-show="saved" x-transition.duration.100ms
             x-effect="if (saved) setTimeout(function() {saved = false}, 2000)">
            <div
                class="absolute z-10 top-0 opacity-80 left-0 bg-green-700 text-white text-center w-full text-xs rounded-b-sm">
                Изменения кода получены, но пока не сохранены!
            </div>
        </div>
    </div>
</div>
