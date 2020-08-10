@extends('_layouts.master')

@section('body')
    @sectionMissing('hero')
        <div class="py-20 bg-black">
            <div class="container">
                <div class="max-w-xl w-full text-white">
                    <h1 class="text-3xl leading-none md:text-5xl">{{ $page->title }}</h1>
                    @if ($page->description)
                        <p class="mt-6 text-gray-200">{{ $page->description }}</p>
                    @endif
                </div>
            </div>
        </div>
    @endif

    @yield('hero')

    <div class="container pt-8 pb-24">
        <div class="-mx-4 flex flex-wrap lg:-mx-4">
            <div class="w-full px-4 md:w-1/3 lg:w-1/5 lg:px-4">
                <nav aria-label="Engage with us navigation" class="sticky top-0 flex flex-col py-8 text-gray-600">
                    <span class="px-2 leading-tight uppercase tracking-wide text-gray-900 border-l-2 border-transparent">Engage with us</span>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/engage/students' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/engage/students"
                    >
                        Students
                    </a>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/engage/faculty' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/engage/faculty"
                    >
                        Faculty
                    </a>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/engage/staff' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/engage/staff"
                    >
                        Staff
                    </a>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/engage/residents' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/engage/residents"
                    >
                        Residents
                    </a>
                    <a
                        class="
                            mt-3 px-2 leading-tight border-l-2 transition-colors duration-300
                            {{ $page->getPath() === '/engage/community-organizations' ? 'text-gray-900 font-bold border-red-600' : 'border-transparent hover:text-gray-900' }}
                        "
                        href="/engage/community-organizations"
                    >
                        Community Organizations
                    </a>
                </nav>
            </div>
            <div class="w-full py-8 px-4 md:w-2/3 lg:w-4/5 lg:px-16">
                @yield('content')
            </div>
        </div>
    </div>
@endsection