@extends('_layouts.master')

@section('body')
    <x-hero.bottom
        title="Service Finder"
        background-image="{{ $page->image['url'] }}"
    />

    <div class="container pt-16">
        <a href="/service-finder" class="-ml-1 inline-flex items-center p-1 hover:text-gray-700">
            <svg class="w-5 h-5" viewBox="0 0 19 20" fill="none">
                <path d="M3.83 5.87L6.36 8.3 4.95 9.64 0 4.92 4.95.21l1.41 1.34-2.53 2.42H11c2.12 0 4.16.8 5.66 2.23A7.44 7.44 0 0119 11.6c0 2.02-.84 3.96-2.34 5.39A8.2 8.2 0 0111 19.2H2v-1.9h9c1.6 0 3.12-.6 4.24-1.68A5.58 5.58 0 0017 11.59c0-1.52-.63-2.97-1.76-4.04A6.16 6.16 0 0011 5.87H3.83z" fill="currentColor"></path>
            </svg>
            <span class="ml-4">Back</span>
        </a>
    </div>

    <div class="container pt-16 pb-32">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full p-4 md:w-1/2 lg:w-2/3">
                <div class="prose max-w-3xl lg:prose-lg">
                    <h1>{{ $page->title }}</h1>

                    {!! $page->description !!}
                </div>
                <div class="mt-16">
                    <h3 class="text-gray-900 text-sm uppercase tracking-wide">Share</h3>
                    <div class="mt-2 -mx-1 space-x-4 flex items-center">
                        <a
                            class="text-gray-900 transition-colors duration-300 hover:text-gray-700 focus:outline-none focus:shadow-outline"
                            href=#
                            aria-label="Facebook"
                            title="Facebook"
                        >
                            <svg class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.378 14.192 5 15.115 5H18V0h-3.808C10.596 0 9 1.583 9 4.615V8z" fill="currentColor"></path>
                            </svg>
                        </a>
                        <a
                            class="text-gray-900 transition-colors duration-300 hover:text-gray-700 focus:outline-none focus:shadow-outline"
                            href="#"
                            aria-label="Twitter"
                            title="Twitter"
                        >
                            <svg class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724 9.864 9.864 0 01-3.127 1.195 4.916 4.916 0 00-3.594-1.555c-3.179 0-5.515 2.966-4.797 6.045A13.978 13.978 0 011.671 3.149a4.93 4.93 0 001.523 6.574 4.903 4.903 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.928 4.928 0 004.6 3.419A9.9 9.9 0 010 19.54a13.94 13.94 0 007.548 2.212c9.142 0 14.307-7.721 13.995-14.646A10.025 10.025 0 0024 4.557z" fill="currentColor"></path>
                            </svg>
                        </a>
                        <a
                            class="text-gray-900 transition-colors duration-300 hover:text-gray-700 focus:outline-none focus:shadow-outline"
                            href="#"
                            aria-label="Linkedin"
                            title="Linkedin"
                        >
                            <svg class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M4.98 3.5C4.98 4.881 3.87 6 2.5 6S.02 4.881.02 3.5C.02 2.12 1.13 1 2.5 1s2.48 1.12 2.48 2.5zM5 8H0v16h5V8zm7.982 0H8.014v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0V24H24V13.869c0-7.88-8.922-7.593-11.018-3.714V8z" fill="currentColor"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full p-4 md:w-1/2 lg:w-1/3">
                <div class="block w-full shadow-sm bg-gray-200">
                    <div class="p-12">
                        <h2 class="text-xl font-bold leading-snug">{{ $page->organization_name }} <br> At A Glance</h2>

                        @if ($page->location || $page->duration)
                            <div class="mt-8">
                                @if ($page->location)
                                    <dl>
                                        <dt class="font-bold inline">Location:</dt>
                                        <dd class="inline">{{ $page->location }}</dd>
                                    </dl>
                                @endif
                                @if ($page->duration)
                                    <dl class="mt-2">
                                        <dt class="font-bold inline">Duration:</dt>
                                        <dd class="inline">{{ $page->duration }}</dd>
                                    </dl>
                                @endif
                            </div>
                        @endif

                        @if ($page->primary_contact_name || $page->primary_contact_email || $page->primary_contact_phone)
                            <div class="mt-8">
                                <dl>
                                    <dt class="font-bold">Primary Contact:</dt>
                                    @if ($page->primary_contact_name)
                                        <dd>{{ $page->primary_contact_name }}</dd>
                                    @endif
                                    @if ($page->primary_contact_email)
                                        <dd>
                                            <a class="text-black underline hover:text-gray-700" href="mailto:{{ $page->primary_contact_email }}">{{ $page->primary_contact_email }}</a>
                                        </dd>
                                    @endif
                                    @if ($page->primary_contact_phone)
                                        <dd>{{ $page->primary_contact_phone }}</dd>
                                    @endif
                                </dl>
                            </div>
                        @endif

                        @if ($page->organization_website)
                            <div class="mt-8">
                                <dl>
                                    <dt class="font-bold">Organization Website:</dt>
                                    <dd>
                                        <a class="text-black underline hover:text-gray-700" href="mailto:{{ $page->organization_website }}">{{ $page->organization_website }}</a>
                                    </dd>
                                </dl>
                            </div>
                        @endif

                        @if ($page->how_to_participate)
                            <div class="mt-8 prose">
                                {!! $page->how_to_participate !!}
                            </div>
                        @endif
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
