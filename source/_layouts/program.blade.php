@extends('_layouts.master')

@section('body')
    <div
        class="pt-64 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/programs-hero.jpg')"
    >
        <div class="container py-6 text-white bg-black-semi-9">
            <h1 class="text-3xl leading-none md:text-5xl">Programs</h1>
        </div>
    </div>
    <div class="container pt-8 pb-24">
        <div class="-mx-4 flex flex-wrap lg:-mx-4">
            <div class="w-full px-4 md:w-1/3 lg:w-1/5 lg:px-4">
                <nav class="sticky top-0 flex flex-col py-8 text-gray-600">
                    <span class="px-2 leading-tight uppercase tracking-wide text-gray-900">Programs</span>
                    @foreach ($programs as $program)
                        <a
                            class="
                                mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                                {{ $page->getPath() === $program->getPath() ? 'text-gray-900 border-red-600' : 'border-transparent' }}
                            "
                            href="{{ $program->getPath() }}"
                        >
                            {{ $program->title }}
                        </a>
                    @endforeach
                </nav>
            </div>
            <div class="w-full py-8 px-4 md:w-2/3 lg:w-4/5 lg:px-16">
                @yield('content')
            </div>
        </div>
    </div>
@endsection