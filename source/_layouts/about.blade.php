@extends('_layouts.master')

@section('body')
    @sectionMissing('hero')
        <x-hero.simple :title="$page->title" />
    @endif

    @yield('hero')

    <div class="container pt-8 pb-24">
        <div class="-mx-4 flex flex-wrap lg:-mx-4">
            <div class="w-full px-4 {{ $page->on_page_links ? 'order-3 lg:order-1 lg:w-1/5' : 'md:w-1/3 lg:w-1/5' }}">
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
                        Our Community Partners
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
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/about/annual-reports' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/about/annual-reports"
                    >
                        Annual Reports
                    </a>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/about/#contact-us' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/about/#contact-us"
                    >
                        Contact Us
                    </a>
                </nav>
            </div>
            <div class="w-full py-8 px-4 {{ $page->on_page_links ? 'order-2 md:w-2/3 lg:w-3/5' : 'md:w-2/3 lg:w-4/5 lg:px-16' }}">
                @yield('content')
            </div>
            @if($page->on_page_links)
                <div class="order-1 w-full px-4 md:w-1/3 lg:order-3 lg:w-1/5">
                    <x-on-page-nav :links="$page->on_page_links" />
                </div>
            @endif
        </div>
    </div>
@endsection
