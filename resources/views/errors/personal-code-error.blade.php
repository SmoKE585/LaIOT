@extends('components.layouts.empty')

@section('content')
    <main class="ckut6">
        <div class="cofxq c3ff8 cewy4 c9r0z c0ycj clpyc cj3hv">

            <div class="chc4a cwt2u cyd0r">

                <div class="c9r0z cob4g">
                    <div class="inline-flex ce97l">
                        <img class="" src="/backend/images/icons/bugs.svg" width="176" height="176" alt="404 illustration">
                        </div>
                    <h2 class="text-4xl mb-4 font-bold">
                        Ошибка в скрипте!
                    </h2>
                    <p class="mb-3">
                        В скрипте обнаружена ошибка. Выполнение невозможно.
                    </p>

                    @if(auth()->check() && auth()->user()->allow_admin)
                        <div class="mb-3 p-2 bg-white rounded-lg text-left">
                            <div class="text-lg mb-2">
                                Отладочную информацию видят только администраторы:
                            </div>
                            <div>
                                <b>Ошибка:</b> {{ $exception->getMessage() }}
                            </div>
                            <div>
                                <b>Строка:</b> {{ $exception->getLine() }}
                            </div>
                            <div>
                                <b>Файл:</b> {{ get_class($model) . ' - ' .$model->title }} | ID: {{ $model->id }}
                            </div>
                        </div>
                    @endif
                </div>

            </div>

        </div>
    </main>
@endsection
