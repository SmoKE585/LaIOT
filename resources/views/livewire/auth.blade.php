<main class="bg-white c3jt4">

    <div class="flex c4ijw">

        <!-- Content -->
        <div class="c52db c3ff8 border-r-2" style="box-shadow: 20px 0px 20px 0px #c1c1c1;">
            <div class="flex cbz56 cfwm1 chmlm crszu">

                <!-- Header -->
                <div class="cy6kd">
                    <div class="flex items-center cmgwo clpyc cj3hv ciqso c9r0z">

                    </div>
                </div>

                <div class="ciiqv cofxq c3ff8 c9r0z c0ycj">
                    <img src="/backend/images/logo_default.svg" class="w-[150px] mb-4">

                    <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold crkc7">Привет! ✨</h1>

                    <form wire:submit="save">
                        <div class="cxebx">
                            <div>
                                <label class="block text-sm cw92y ci4cg" for="email">Email</label>
                                <input wire:model="data.email" class="c03gb c3ff8" type="email">
                                @error('data.email')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-sm cw92y ci4cg" for="password">Пароль</label>
                                <input wire:model="data.password" class="c03gb c3ff8" type="password" autocomplete="on">
                                @error('data.password')
                                <div class="text-red-500 text-xs">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn ml-3 cfeqx cf1ce ceqwg">
                                Войти
                            </button>
                        </div>
                    </form>

                    <div class="border-slate-200 dark:border-slate-700 c87xd cro1p cc5dk">
                        <div class="text-sm text-gray-400">
                            <b>LaIOT</b> - это OpenSource платформа для создания умных домов. Хочешь протестировать -
                            <a href="https://github.com/SmoKE585/LaIOT/" target="_blank">
                                <u>скачай бесплатно!</u>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="hidden c52db c108j csmh2 csp9v cke32 cvqv9" aria-hidden="true">
            <img class="crszu c3ff8 w-full" src="/backend/images/back-login-illustr.svg">
        </div>

    </div>

</main>
