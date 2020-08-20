---
title: Promote Your Event to Community Request Form
description: CCE partners with many local organizations and individuals, and can help Northeastern faculty promote forums, lectures, and panels to the off-campus community.
---

@extends('_layouts.engage-child')

@section('hero')
    <x-hero.simple :title="$page->title" />
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
        Alanna Fusco<br>
        Marketing and Communications Manager<br>
        <a href="mailto:a.fusco@northeastern.edu">a.fusco@northeastern.edu</a>
    </p>
</div>
@endsection
