<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>{{ $title }} &mdash; {{ env('APP_NAME') }}</title>
    <x-link></x-link>
</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

    {{-- Sidebar --}}
    <aside
        class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 xl:ml-6 max-w-64 ease-nav-brand z-990 rounded-2xl xl:left-0 xl:translate-x-0"
        aria-expanded="false">
        <x-sidebar></x-sidebar>
    </aside>

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-x1">

        {{-- Header --}}
        <x-header>
            <x-slot:title>{{ $title }}</x-slot:title>
        </x-header>

        {{-- Content --}}
        <div class="w-full px-6 py-6 mx-auto">
            {{ $slot }}

            {{-- Footer --}}
            <x-footer></x-footer>
        </div>
    </main>

</body>

{{-- Script --}}
<x-script></x-script>

</html>
