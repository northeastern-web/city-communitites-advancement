@extends('_layouts.master')

@section('body')
    <x-hero
        title="Service Opportunities"
        background-image="/assets/images/service-finder-hero.jpg"
        background-gradient="bg-gradient-black-semi-4-transparent-90deg"
    />

    <div class="max-w-screen-xl mx-auto px-8 py-20">
        <a class="text-red-600 hover:underline" href="/service-finder/food-rescue-volunteers-needed">Food rescue volunteers needed</a>
    </div>
@endsection
