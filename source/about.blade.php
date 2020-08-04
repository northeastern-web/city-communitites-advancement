---
title: About
---

@extends('_layouts.about')

@section('hero')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/about-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">{{ $page->title }}</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <p>Coming soon.</p>
@endsection