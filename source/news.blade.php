---
title: News
description: Read the latest news about our people, our programs, and our achievements.
pagination:
  collection: news
  perPage: 3
---

@extends('_layouts.master')

@section('body')
    <x-hero.card
        :title="$page->title"
        :description="$page->description"
        background-image="/assets/images/news-hero.jpg"
    />
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
