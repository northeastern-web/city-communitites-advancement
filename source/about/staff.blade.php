@extends('_layouts.master')

@section('body')
    <x-hero
        title="Our Staff"
        background-image="/assets/images/about-staff-hero.jpg"
        background-gradient="bg-gradient-black-semi-6-black-semi-1-90deg"
    />

    <div class="max-w-screen-xl mx-auto px-8 py-20">
        <a class="text-red-600 hover:underline" href="/about/staff/john-m-tobin-jr">John M. Tobin, Jr.</a>
    </div>
@endsection