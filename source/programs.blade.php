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
            @foreach (range(1, 6) as $item)
                <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                    <a
                        href="/programs/aces"
                        aria-label="Alliance of Civically Engaged Students (ACES)"
                        class="group block w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:shadow-outline"
                    >
                        <div class="relative w-full bg-black">
                            <div class="relative w-full h-full ar-16x9">
                                <img
                                    src="https://images.unsplash.com/photo-1462275646964-a0e3386b89fa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                    alt="Image description"
                                    class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                                >
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <div class="flex-1">
                                <div class="py-6 px-8">
                                    <h2 class="text-lg text-gray-900 font-bold leading-tight">Alliance of Civically Engaged Students (ACES)</h2>
                                    <p class="mt-2 text-gray-700">The Northeastern University Alliance of Civically Engaged Students serves community nonprofit organizations throughout Boston. ACES students commit to volunteering regularly in local organizations, where they build leadership skills and provide sustained service in their communities throughout their undergraduate careers.</p>
                                    <div class="mt-4 flex justify-end">
                                        <i data-feather="arrow-right" class="inline-block h-5 w-5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
