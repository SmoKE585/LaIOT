<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'LaIOT - Панель управления')</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="/backend/images/logo-mini.svg">

    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
</head>

<body class="dark:text-slate-400 c3jt4 c6w4h c6vqo c0ndv csf1w sidebar-expanded"
      :class="{ 'sidebar-expanded': sidebarExpanded }"
      x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
      x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

<div>
    {{ $slot }}
</div>

<script src="{{ asset('backend/js/main.js') }}"></script>

</body>
</html>
