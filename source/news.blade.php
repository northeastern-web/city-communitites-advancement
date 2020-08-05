---
title: News
description: Read the latest news about our people, our programs, and our achievements.
pagination:
  collection: news
  perPage: 3
---

@extends('_layouts.master')

@section('body')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/news-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">{{ $page->title }}</h1>
                <p class="mt-6 text-gray-200">{{ $page->description }}</p>
            </div>
        </div>
    </div>
    <div class="container py-16">
        <div class="-mx-4 flex flex-wrap items-stretch">
            @foreach($pagination->items as $article)
                <x-news-card :article="$article" />
            @endforeach
        </div>
        <div class="mt-8">
            <x-pagination :page="$page" :pagination="$pagination" />
        </div>
    </div>
@endsection
