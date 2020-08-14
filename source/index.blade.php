@extends('_layouts.master')

@section('body')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center relative"
        style="background-image: url('/assets/images/home-hero.jpg')"
    >
        <div
            x-init="init()"
            x-data="{
                show: false,
                alertName: 'alert-name', // Update this to be unique on your site
                init: function () {
                    // Uncomment this conditional to make the alert stay hidden after being closed
                    // if (localStorage && ! localStorage.getItem('hide-' + this.alertName)) {
                        this.show = true;
                    // }
                },
                close: function () {
                    this.show = false;

                    // Uncomment the lines below to make the alert stay hidden after being closed
                    // if (localStorage) {
                    //     localStorage.setItem('hide-' + this.alertName, true)
                    // }
                }
            }"
            x-show="show"
            x-transition:enter="transition duration-300"
            x-transition:leave="transition duration-300"
            class="absolute top-0 inset-x-0 overflow-y-hidden"
        >
            <div
                x-show="show"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="transform translate-y-full"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-end="transform -translate-y-full"
                role="alert"
                class="flex items-center justify-between px-8 py-4 text-black bg-yellow-500"
            >
                <p>In light of COVID-19, the Office of City and Community Engagement remains committed to serving our campus and local communities. Many of our programs and initiatives have been adapted to a virtual environment or have been modified to uphold university and state safety guidelines. Be sure to look at individual program pages and event information for further details and updates.</p>
                <button class="ml-4 p-1 rounded-full transition-colors duration-200 hover:text-gray-800 focus:outline-none focus:shadow-outline" @click="close">
                    <i data-feather="x-circle" class="w-5 h-5"></i>
                </button>
            </div>
        </div>

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
        <a href="/about/#contact" class="mt-6 inline-flex items-center text-gray-900 text-sm font-semibold hover:text-gray-700">
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
            <form
                id="form1640"
                name="form1640"
                enctype="multipart/form-data"
                method="post"
                novalidate
                action="https://provostweb.wufoo.com/forms/z107mm1b0abel4w/#public"
                class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:flex-wrap lg:space-x-8"
            >
                <div class="flex-1 flex flex-col justify-end">
                    <label for="Field3" class="block text-gray-900 text-sm leading-tight">Email *</label>
                    <input id="Field3" name="Field3" type="email" class="mt-1 form-input bg-transparent border-0 border-b-2 border-gray-500 transition-all duration-300 hover:border-gray-600 focus:border-red-700" required>
                </div>
                <div class="flex-1 flex flex-col justify-end">
                    <label for="Field9" class="block text-gray-900 text-sm leading-tight">Phone *</label>
                    <input id="Field9" name="Field9" class="mt-1 form-input bg-transparent border-0 border-b-2 border-gray-500 transition-all duration-300 hover:border-gray-600 focus:border-red-700" required>
                </div>
                <div class="flex flex-col justify-end">
                    <input id="saveForm" name="saveForm" class="btn text-white bg-red-600 hover:bg-red-800" type="submit" value="Submit" />
                </div>
                <div class="hidden">
                    <label for="comment">Do Not Fill This Out</label>
                    <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                    <input type="hidden" id="idstamp" name="idstamp" value="hmoK+IFMnpmncvfgNPZ+DZOLR1j4oR29Roo/069/6DM=" />
                    <input type="hidden" id="encryptedPassword" name="encryptedPassword" value="" />
                </div>
            </form>
        </div>
    </section>
@endsection
