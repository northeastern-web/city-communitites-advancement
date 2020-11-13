@extends('_layouts.master')

@section('body')
    <div
        x-init="init()"
        x-data="{
            show: false,
            alertName: 'covid-alert',
            init: function () {
                if (localStorage && ! localStorage.getItem('hide-' + this.alertName)) {
                    this.show = true;
                }
            },
            close: function () {
                this.show = false;

                if (localStorage) {
                    localStorage.setItem('hide-' + this.alertName, true)
                }
            }
        }"
        x-show="show"
        x-transition:enter="transition duration-300"
        x-transition:leave="transition duration-300"
        class="overflow-y-hidden"
    >
        <div
            x-show="show"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform translate-y-full"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-end="transform -translate-y-full"
            role="alert"
            class="bg-yellow-500"
        >
            <div class="flex items-center justify-between px-4 py-4 text-black lg:px-16">
                <p>In light of COVID-19, the Office of City and Community Engagement remains committed to serving our campus and local communities. Many of our programs and initiatives have been adapted to a virtual environment or have been modified to uphold university and state safety guidelines. Be sure to look at individual program pages and event information for further details and updates.</p>
                <button class="ml-4 p-1 rounded-full transition-colors duration-200 hover:text-gray-800 focus:outline-none focus:shadow-outline" @click="close">
                    <i data-feather="x-circle" class="w-5 h-5"></i>
                </button>
            </div>
        </div>
    </div>
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center relative"
        style="background-image: url('/assets/images/home-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">Progress Through Partnerships</h1>
                <h2 class="mt-4 text-sm uppercase tracking-wide">Volunteer + serve</h2>
                <p class="mt-6 text-gray-200">Engage with communities in Boston and beyond by joining one or more of our programs. </p>
                <a href="/programs" class="mt-8 btn text-white bg-red-600 hover:bg-red-800">Learn About Our Programs</a>
            </div>
        </div>
    </div>
    <section class="container py-16">
        <p class="max-w-5xl text-gray-900 md:text-lg">The Office of City and Community Engagement is an active and responsible contributor to our local and campus communities by fostering collaborative relationships and partnerships that connect, educate, and engage people and organizations throughout our network.</p>
        <a href="/about/#contact-us" class="mt-6 inline-flex items-center text-gray-900 text-sm font-semibold hover:text-gray-700">
            <span>Contact us</span>
            <i data-feather="arrow-right" class="ml-2 h-5 w-5"></i>
        </a>
    </section>
    <section class="container pb-16">
        <h2 class="text-gray-900 text-xl leading-tight md:text-2xl lg:text-3xl">Events</h2>
        <p class="mt-2 text-gray-900">Take part in events hosted by City and Community Engagement and our partners.</p>
        <a href="/events" class="mt-6 inline-flex items-center text-gray-900 text-sm font-semibold hover:text-gray-700">
            <span>View all upcoming events</span>
            <i data-feather="arrow-right" class="ml-2 h-5 w-5"></i>
        </a>
        <div class="-mx-4 mt-6 flex flex-wrap items-stretch">
            @foreach ($events->sortBy('unformatted_start_date')->take(2) as $event)
                <x-event-card :event="$event" />
            @endforeach
        </div>
    </section>
    <section class="container pb-16">
        <h2 class="text-gray-900 text-xl leading-tight md:text-2xl lg:text-3xl">News and Announcements</h2>
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
                action="https://provostweb.wufoo.com/forms/z107mm1b0abel4w/#public"
                class="-mx-4 flex flex-wrap items-start"
            >
                <div class="w-full flex flex-col justify-end px-4 lg:w-2/3">
                    <label class="w-full block font-bold leading-tight">
                        Name *
                    </label>
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full p-4 md:w-1/2 md:py-0 xl:w-1/2">
                            <input id="Field12" name="Field12" class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600" required />
                            <label for="Field12" class="text-sm">First</label>
                        </div>
                        <div class="w-full p-4 md:w-1/2 md:py-0 xl:w-1/2">
                            <input id="Field13" name="Field13" class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600" required />
                            <label for="Field13" class="text-sm">Last</label>
                        </div>
                    </div>
                </div>
                <div class="mt-8 w-full px-4 lg:mt-0 lg:w-1/3">
                    <label class="w-full block font-bold leading-tight" for="Field15">
                        Email *
                    </label>
                    <input id="Field15" name="Field15" type="email" spellcheck="false" class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600" required />
                </div>
                <div class="mt-12 w-full px-4">
                    <div class="-mx-4 w-full flex flex-wrap">
                        <div class="w-full flex items-start px-4 py-2 sm:w-1/2 md:w-1/3 lg:w-1/4">
                            <input
                                id="Field16"
                                name="Field16"
                                type="checkbox"
                                value="Community-based organization"
                                class="form-checkbox">
                            <label for="Field16" class="ml-3 inline-block text-gray-600 text-sm leading-tight">Community-based organization</label>
                        </div>
                        <div class="w-full flex items-start px-4 py-2 sm:w-1/2 md:w-1/3 lg:w-1/4">
                            <input
                                id="Field17"
                                name="Field17"
                                type="checkbox"
                                value="NU student"
                                class="form-checkbox">
                            <label for="Field17" class="ml-3 inline-block text-gray-600 text-sm leading-tight">NU student</label>
                        </div>
                        <div class="w-full flex items-start px-4 py-2 sm:w-1/2 md:w-1/3 lg:w-1/4">
                            <input
                                id="Field18"
                                name="Field18"
                                type="checkbox"
                                value="NU faculty member"
                                class="form-checkbox">
                            <label for="Field18" class="ml-3 inline-block text-gray-600 text-sm leading-tight">NU faculty member</label>
                        </div>
                        <div class="w-full flex items-start px-4 py-2 sm:w-1/2 md:w-1/3 lg:w-1/4">
                            <input
                                id="Field19"
                                name="Field19"
                                type="checkbox"
                                value="NU staff"
                                class="form-checkbox">
                            <label for="Field19" class="ml-3 inline-block text-gray-600 text-sm leading-tight">NU staff</label>
                        </div>
                        <div class="w-full flex items-start px-4 py-2 sm:w-1/2 md:w-1/3 lg:w-1/4">
                            <input
                                id="Field20"
                                name="Field20"
                                type="checkbox"
                                value="NU alumni"
                                class="form-checkbox">
                            <label for="Field20" class="ml-3 inline-block text-gray-600 text-sm leading-tight">NU alumni</label>
                        </div>
                        <div class="w-full flex items-start px-4 py-2 sm:w-1/2 md:w-1/3 lg:w-1/4">
                            <input
                                id="Field21"
                                name="Field21"
                                type="checkbox"
                                value="Resident of Roxbury, Mission Hill, Fenway, or South End"
                                class="form-checkbox">
                            <label for="Field21" class="ml-3 inline-block text-gray-600 text-sm leading-tight">Resident of Roxbury, Mission Hill, Fenway, or South End</label>
                        </div>
                        <div class="w-full flex items-start px-4 py-2 sm:w-1/2 md:w-1/3 lg:w-1/4">
                            <input
                                id="Field22"
                                name="Field22"
                                type="checkbox"
                                value="Other"
                                class="form-checkbox">
                            <label for="Field22" class="ml-3 inline-block text-gray-600 text-sm leading-tight">Other</label>
                        </div>
                    </div>
                </div>

                <div class="mt-12 w-full flex px-4">
                    <button class="btn text-white bg-red-600 hover:bg-red-800">Submit</button>
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
