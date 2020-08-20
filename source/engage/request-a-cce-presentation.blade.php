---
title: CCE Presentation Request Form
description: Are you interested in learning more about the Office of City and Community Engagement?
---

@extends('_layouts.engage-child')

@section('hero')
    <x-hero.simple :title="$page->title" />
@endsection

@section('content')
<div class="prose max-w-3xl lg:prose-lg">
    <p>{{ $page->description }} Do you want to help students or colleagues serve, volunteer, or collaborate with communities in and near Northeastern’s Boston campus?  A member of our staff can give a presentation to your students or office team about opportunities to engage with the community through CCE programs and events.</p>

    <p>Email <a href="mailto:communityengagement@northeastern.edu">communityengagement@northeastern.edu</a> to connect with a team member.</p>
</div>
@endsection
