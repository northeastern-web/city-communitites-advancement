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

        {!! Northeastern\Support\Meta::head() !!}

        @if ($page->production)
            {!! Northeastern\Support\Analytics::googleTagManagerScript() !!}
        @endif

        <link rel="stylesheet" href="https://unpkg.com/@northeastern-web/global-elements@latest/dist/css/index.css">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <script src="https://unpkg.com/@northeastern-web/global-elements@latest/dist/js/index.umd.js" defer></script>
        <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>
    </head>
    <body class="text-base leading-normal text-gray-900 font-sans antialiased">
        {!! Northeastern\Support\Analytics::googleTagManagerNoScript() !!}
        <div class="min-h-screen flex flex-col bg-gray-800">
            <div id="main" class="flex-1 flex items-center justify-center py-32">
                <div class="relative max-w-xl w-full bg-white shadow-lg">
                    <div class="absolute top-0 inset-x-0 transform -translate-y-16 flex justify-center">
                        <div class="w-32 h-32 flex items-center justify-center text-white bg-red-700 rounded-full">
                            <i data-feather="x-circle" class="w-20 h-20"></i>
                        </div>
                    </div>
                    <div class="h-4 bg-red-700"></div>
                    <div class="pt-16 pb-8 px-8">
                        <h1 class="text-5xl text-center leading-tight">Oops, page not found!</h1>
                        <p class="mt-2 text-sm text-center">The page you’re looking for has moved or no longer exists.</p>
                        <div class="mt-8 flex justify-center">
                            <button
                                x-data="{
                                    back: function () {
                                        if (document.referrer === '{{ $page->baseUrl }}') {
                                           history.back();
                                        }
                                        else {
                                            window.location.href = '/';
                                        }
                                    }
                                }"
                                class="inline-flex items-center text-red-700 text-sm font-bold transition-colors duration-200 hover:text-red-900"
                                @click="back()"
                            >
                                <i data-feather="arrow-left" class="w-4 h-4 mr-3"></i>
                                <span>Back to our site</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
