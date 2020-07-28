@extends('_layouts.master')

@section('body')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/programs-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">Our Programs</h1>
                <p class="mt-6 text-gray-200">We offer a variety of programs through which students, faculty, staff, and neighborhood residents volunteer, collaborate with, and serve communities locally and globally. </p>
            </div>
        </div>
    </div>
    <section class="container py-16">
        <div
            class="-mx-4 flex flex-wrap items-stretch"
        >
            @foreach ($programs as $program)
                <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                    <a
                        href="{{ $program->getPath() }}"
                        aria-label="{{ $program->title }}"
                        class="group flex flex-col w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:shadow-outline"
                    >
                        <div class="relative w-full bg-black">
                            <div class="relative w-full h-full ar-16x9">
                                <img
                                    src="{{ $program->image_url }}"
                                    class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                                >
                            </div>
                        </div>

                        <div class="flex-1 flex flex-col py-6 px-8">
                            <div class="flex-1">
                                <h2 class="text-lg text-gray-900 font-bold leading-tight">{{ $program->title }}</h2>
                                <p class="mt-2 text-gray-700">{{ $program->description }}</p>
                            </div>
                            <div class="mt-4 flex justify-end">
                                <i data-feather="arrow-right" class="inline-block h-5 w-5"></i>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
