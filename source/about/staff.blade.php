@extends('_layouts.master')

@section('body')
    <x-hero
        title="Our Staff"
        background-image="/assets/images/about-staff-hero.jpg"
        background-gradient="bg-gradient-black-semi-6-black-semi-1-90deg"
    />

    <div class="px-4 py-20 lg:px-20">
        <a class="text-red-600 hover:underline" href="/about/staff/john-m-tobin-jr">John M. Tobin, Jr.</a>
    </div>
@endsection