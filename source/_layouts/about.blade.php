@extends('_layouts.master')

@section('body')
    @sectionMissing('hero')
        <div class="py-20 bg-black">
            <div class="container">
                <h1 class="text-white text-3xl leading-none md:text-5xl">{{ $page->title }}</h1>
            </div>
        </div>
    @endif

    @yield('hero')

    <div class="container pt-8 pb-24">
        <div class="-mx-4 flex flex-wrap lg:-mx-4">
            <div class="w-full px-4 md:w-1/3 lg:w-1/5 lg:px-4">
                <nav class="sticky top-0 flex flex-col py-8 text-gray-600">
                    <a
                        href="/about"
                        class="px-2 leading-tight uppercase tracking-wide text-gray-900 border-l-2 border-transparent"
                    >
                        About
                    </a>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/about/staff' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/about/staff"
                    >
                        Our Staff
                    </a>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/about/careers' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/about/careers"
                    >
                        Job Opportunities
                    </a>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/about/partners' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/about/partners"
                    >
                        Our Program Partners
                    </a>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/about/awards' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/about/awards"
                    >
                        Awards, Grants, and Recognitions
                    </a>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/about/donations' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/about/donations"
                    >
                        Donations and Sponsorships
                    </a>
                    {{-- <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/about/book' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/about/book"
                    >
                        Book Event Space at Northeastern Crossing
                    </a> --}}
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/about/#contact' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/about/#contact"
                    >
                        Contact Us
                    </a>
                </nav>
            </div>
            <div class="w-full py-8 px-4 md:w-2/3 lg:w-4/5 lg:px-16">
                @yield('content')
            </div>
        </div>
    </div>
@endsection