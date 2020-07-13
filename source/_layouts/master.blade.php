<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">

        <title>Northeastern University - {{ $page->title }}</title>

        <link rel="stylesheet" href="https://unpkg.com/@northeastern-web/global-elements@latest/dist/css/index.css">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <script src="https://unpkg.com/@northeastern-web/global-elements@latest/dist/js/index.umd.js" defer></script>
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
    </head>
    <body class="text-base leading-normal text-gray-900 font-sans antialiased">
        <div class="min-h-screen flex flex-col">
            <div x-data="NUGlobalElements.header()" x-init="init"></div>
            <x-local-header :page="$page" />

            <div class="flex-1">
                @yield('body')
            </div>

            <x-local-footer :page="$page" />
            <div x-data="NUGlobalElements.footer()" x-init="init"></div>
        </div>
    </body>
</html>
