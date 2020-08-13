---
title: Students
description: City and Community Engagement supports Northeastern students who serve and collaborate with the community through a variety of programs, events, and opportunities. Whether you want to serve through a CCE program, take on a leadership role, or plan a service project for your student organization, we have the resources to get you started.
---

@extends('_layouts.engage')

@section('hero')
    <x-hero.card
        :title="$page->title"
        :description="$page->description"
        background-image="/assets/images/engage-students-hero.jpg"
    />
@endsection

@section('content')
    <div class="-m-4 flex flex-wrap items-stretch">
        @foreach ($engageStudents as $item)
            <x-engage-card :item="$item" />
        @endforeach
    </div>
@endsection
