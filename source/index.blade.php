@extends('_layouts.master')

@section('body')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/home-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">Progress Through Partnerships</h1>
                <h3 class="mt-4 text-sm uppercase tracking-wide">Volunteer + serve</h3>
                <p class="mt-6 text-gray-200">Engage with communities in Boston and beyond by joining one or more of our programs. </p>
                <a href="/programs" class="mt-8 btn text-white bg-red-600 hover:bg-red-800">Learn About Our Programs</a>
            </div>
        </div>
    </div>
    <section class="container py-16">
        <p class="max-w-5xl text-gray-900 md:text-lg">We bring together community organizations, social service groups, government agencies, and Northeastern students, faculty, and staff to build a better world. A spirit of collaboration infuses everything we do, from hosting volunteer programs, to conducting service-based research, to organizing community events.</p>
        <a href="/contact" class="mt-6 inline-flex items-center text-gray-900 text-sm font-semibold hover:text-gray-700">
            <span>Contact us</span>
            <i data-feather="arrow-right" class="ml-2 h-5 w-5"></i>
        </a>
    </section>
    <section class="container pb-16">
        <h2 class="text-gray-900 text-xl leading-tight md:text-2xl lg:text-3xl">Events</h2>
        <p class="mt-2 text-gray-900">Take part in events hosted by City and Community Engagement.</p>
        <a href="/events" class="mt-6 inline-flex items-center text-gray-900 text-sm font-semibold hover:text-gray-700">
            <span>View all upcoming events</span>
            <i data-feather="arrow-right" class="ml-2 h-5 w-5"></i>
        </a>
        <div class="-mx-4 mt-6 flex flex-wrap items-stretch">
            @foreach ($events->take(2) as $event)
                <x-event-card :event="$event" />
            @endforeach
        </div>
    </section>
    <section class="container pb-16">
        <h2 class="text-gray-900 text-xl leading-tight md:text-2xl lg:text-3xl">News</h2>
        <p class="mt-2 text-gray-900">Learn more about who we are and the communities where we work.</p>
        <a href="/news" class="mt-6 inline-flex items-center text-gray-900 text-sm font-semibold hover:text-gray-700">
            <span>View all news</span>
            <i data-feather="arrow-right" class="ml-2 h-5 w-5"></i>
        </a>
        <div
            class="-mx-4 mt-6 flex flex-wrap items-stretch"
        >
            @foreach ($news->take(3) as $article)
                <x-news-card :article="$article" />
            @endforeach
        </div>
    </section>
    <section class="container pb-32">
        <h2 class="text-gray-900 text-xl leading-tight md:text-2xl lg:text-3xl">Subscribe to our Newsletter</h2>
        <div class="mt-8 px-8 py-12 bg-gray-200 md:px-20 md:py-16">
            <form action="#" class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:flex-wrap lg:space-x-8">
                <div class="flex-1 flex flex-col justify-end">
                    <label for="email" class="block text-gray-900 text-sm leading-tight">Email*</label>
                    <input id="email" name="email" class="mt-1 form-input bg-transparent border-0 border-b-2 border-gray-500 transition-all duration-300 hover:border-gray-600 focus:border-red-700" required>
                </div>
                <div class="flex-1 flex flex-col justify-end">
                    <label for="phone" class="block text-gray-900 text-sm leading-tight">Phone*</label>
                    <input id="phone" name="phone" class="mt-1 form-input bg-transparent border-0 border-b-2 border-gray-500 transition-all duration-300 hover:border-gray-600 focus:border-red-700" required>
                </div>
                <div class="flex flex-col justify-end">
                    <button class="btn text-white bg-red-600 hover:bg-red-800">Submit</button>
                </div>
            </form>
        </div>
    </section>
@endsection
