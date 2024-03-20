<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'LaIOT - Панель управления')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="/backend/images/logo-mini.svg">

    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
            document.querySelector('html').style.colorScheme = 'light';
        } else {
            document.querySelector('html').classList.add('dark');
            document.querySelector('html').style.colorScheme = 'dark';
        }

        function noticesHandler() {
            return {
                notices: [],
                visible: [],
                add(notice) {
                    notice.id = Date.now()
                    this.notices.push(notice)
                    this.fire(notice.id)
                },
                fire(id) {
                    this.visible.push(this.notices.find(notice => notice.id == id))
                    const timeShown = 5000 * this.visible.length
                    setTimeout(() => {
                        this.remove(id)
                    }, timeShown)
                },
                remove(id) {
                    const notice = this.visible.find(notice => notice.id == id)
                    const index = this.visible.indexOf(notice)
                    this.visible.splice(index, 1)
                },
            }
        }
    </script>

    <div
        x-data="noticesHandler()"
        class="mt-2 fixed z-60 inset-0 flex flex-col-reverse items-end justify-end h-screen w-screen"
        @notice.window="add($event.detail)"
        style="pointer-events:none">
        <template x-for="notice of notices" :key="notice.id">
            <div
                x-show="visible.includes(notice)"
                x-transition:enter="transition ease-in duration-200"
                x-transition:enter-start="transform opacity-0 translate-y-2"
                x-transition:enter-end="transform opacity-100"
                x-transition:leave="transition ease-out duration-500"
                x-transition:leave-start="transform translate-x-0 opacity-100"
                x-transition:leave-end="transform translate-x-full opacity-0"
                @click="remove(notice.id)"
                class="rounded mb-2 mr-2 px-5 py-3 flex items-center justify-center text-white shadow-lg cursor-pointer"
                :class="{
                        'bg-green-500': notice.type === 'success',
                        'bg-blue-500': notice.type === 'info',
                        'bg-orange-500': notice.type === 'warning',
                        'bg-red-500': notice.type === 'error',
                     }"
                style="pointer-events:all"
                x-text="notice.text">
            </div>
        </template>
    </div>
</head>

<body class="dark:text-slate-400 c3jt4 c6w4h c6vqo c0ndv csf1w sidebar-expanded"
      :class="{ 'sidebar-expanded': sidebarExpanded }"
      x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
      x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

<div>
    <div class="flex ct1ew c3z79">
        <x-backend.layouts.sidebar-menu/>

        <div class="flex c8gbp cqd18 c4ijw chmlm cy6kd">
            <x-backend.layouts.header />

            {{ $slot }}
        </div>
    </div>
</div>

<script src="{{ asset('backend/js/main.js') }}"></script>

</body>
</html>
