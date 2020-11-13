@extends('_layouts.master')

@section('body')
    <x-hero.bottom
        title="News"
        background-image="{{ $page->image['url'] }}"
    />

    <div class="container py-16">
        <a href="/news" aria-label="back to news" class="-ml-1 inline-flex items-center p-1 hover:text-gray-700">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" viewBox="0 0 19 20" fill="none">
                <path d="M3.83 5.87L6.36 8.3 4.95 9.64 0 4.92 4.95.21l1.41 1.34-2.53 2.42H11c2.12 0 4.16.8 5.66 2.23A7.44 7.44 0 0119 11.6c0 2.02-.84 3.96-2.34 5.39A8.2 8.2 0 0111 19.2H2v-1.9h9c1.6 0 3.12-.6 4.24-1.68A5.58 5.58 0 0017 11.59c0-1.52-.63-2.97-1.76-4.04A6.16 6.16 0 0011 5.87H3.83z" fill="currentColor"></path>
            </svg>
            <span class="ml-4">Back</span>
        </a>
    </div>

    <div class="container pb-32">
        <div class="prose max-w-3xl lg:prose-lg">
            <h1>{{ $page->title }}</h1>
            {!! $page->body !!}
        </div>
    </div>
@endsection
