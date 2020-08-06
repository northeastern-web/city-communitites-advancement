---
title: Promote Your Event to Community Request Form
description: CCE partners with many local organizations and individuals, and can help Northeastern faculty promote forums, lectures, and panels to the off-campus community.
---

@extends('_layouts.engage-child')

@section('hero')
    <div class="py-20 bg-black">
        <div class="container">
            <h1 class="text-white text-3xl leading-none md:text-5xl">{{ $page->title }}</h1>
        </div>
    </div>
@endsection

@section('content')
<div class="prose max-w-3xl lg:prose-lg">
    <p>{{ $page->description }} Fill out the form below to tell us about your event and we will work with you on promoting it to area residents and organizations.</p>
</div>
<div class="py-16 prose max-w-3xl lg:prose-lg">
    <p>Form coming soon.</p>
</div>
<div class="prose max-w-3xl lg:prose-lg">
    <h2>Review Process</h2>
    <p>Submissions will be reviewed by the Marketing and Community Outreach team. If there are any questions, a member of the team will contact you to request additional information. We recommend submitting your materials at least one month in advance of the event.</p>
    <h2>Contact</h2>
    <p>
        David Isberg<br>
        Assistant Vice President, City and Community Engagement<br>
        <a href="mailto:d.isberg@northeastern.edu">d.isberg@northeastern.edu</a>
    </p>
</div>
@endsection
