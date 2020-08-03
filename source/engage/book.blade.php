---
title: Book Event Space at Northeastern Crossing
---

@extends('_layouts.engage')

@section('content')
    <div class="prose max-w-3xl lg:prose-lg">
        <p>Since 2015, we have provided individuals and groups with complimentary access to a classroom and conference room at Northeastern Crossing, 1175 Tremont Street, Boston. Advance reservations are required for both spaces. Event organizers may only host programming that is free to participants. </p>
    </div>

    <div class="mt-12 -mx-4 flex flex-wrap items-start">
        <div class="prose w-full max-w-none p-4">
            <h2>Request Event Space</h2>
        </div>
        <div class="prose max-w-none w-full p-4 lg:w-1/2">
            <p>As you might imagine, these free spaces get reserved quickly. We recommend that you submit the online Event Space Request form as early as possible before your event. Our staff responds to these requests on a rolling basis, although we try to reply within two business days. Currently, we are fulfilling reservations up to three months in advance.</p>
            <p>The two spaces available are the conference room (capacity: 12 people) and classroom (capacity: 40 people). Both rooms have modular furniture that can be rearranged or removed as necessary. They also have overhead audio/visual equipment that can be connected to laptop computers via HDMI cables.</p>
            <p>Please note the following guidelines regarding reservations at Northeastern Crossing:</p>
        </div>
        <div class="prose max-w-none w-full p-4 lg:w-1/2">
            <ul>
                <li>Programming/events must be free to all participants; product sales, ticket sales, fundraisers, and other fee-for-service events are prohibited.</li>
                <li>Programming/events should be professional in nature. Birthday parties and baby showers, for example, will not be approved.</li>
                <li>Per Police on Political Campaign - Related Activity, Northeastern</li>
                <li>students and employees may not host political candidates or post  campaign endorsements in the venue.</li>
                <li>Minors must always be accompanied by a parent, guardian, or teacher. Northeastern Crossing staff are not responsible for overseeing minors. </li>
                <li>All event organizers and participants must adhere to Northeastern University’s Policy on Equal Opportunity. </li>
            </ul>
        </div>
    </div>

    <div role="alert" class="mt-12 flex items-center p-4 text-white bg-red-700">
        <i data-feather="info" class="text-black flex-shrink-0 w-6 h-6"></i>
        <p class="ml-3">We do not accept booking events at the moment, please sign up to be notified when the booking will come available again.</p>
    </div>

    <div class="mt-4 px-8 py-8 bg-gray-200 xl:px-16">
        <div class="-mx-4 flex flex-wrap items-end">
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="name"
                    class="inline-block font-bold leading-tight"
                >
                    Name
                </label>
                <input
                    id="name"
                    name="name"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="email"
                    class="inline-block font-bold leading-tight"
                >
                    Email address
                </label>
                <input
                    id="email"
                    name="email"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <button class="btn text-white bg-black hover:bg-gray-700">
                    Submit
                </button>
            </div>
        </div>
    </div>

    <div class="mt-8 -mx-4 flex flex-wrap items-stretch md:-mx-8">
        <div class="w-full p-4 md:w-1/2 md:p-8">
            <h2 class="text-xl font-bold">Review process</h2>
            <p class="mt-4 text-gray-700">If there any follow up or additional communication is needed, Northeastern Crossing will communicate with you regrading next steps.</p>
        </div>
        <div class="w-full p-4 md:w-1/2 md:p-8">
            <h2 class="text-xl font-bold">Contact us</h2>
            <p class="mt-4 text-gray-700">If you have additional questions or would like to visit Northeastern Crossing, please call our office at 617-373-2555.</p>
        </div>
    </div>
@endsection