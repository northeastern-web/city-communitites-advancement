---
title: Table Staffing Request Form
description: City and Community Engagement staff are available to travel on and off-campus to share information about the community engagement work done by our office.
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
    {{ $page->description }} Fill out the form below to tell us about your upcoming tabling event and to request that a CCE staff member attend.
</div>
<form name="Table Staffing Request Form" data-netlify="true" action="/success">
    <div class="mt-12 px-8 py-12 bg-gray-200 xl:px-16">
        <h2 class="text-xl font-light">Contact Information</h2>

        <div class="-mx-4 mt-8 flex flex-wrap">
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="requestor-name"
                    class="inline-block font-bold leading-tight"
                >
                    Requestor's name *
                </label>
                <input
                    id="requestor-name"
                    name="Requestor's name"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="requestor-email"
                    class="inline-block font-bold leading-tight"
                >
                    Requestor's email address *
                </label>
                <input
                    id="requestor-email"
                    name="Requestor's email"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="requestor-phone"
                    class="inline-block font-bold leading-tight"
                >
                    Requestor's phone number *
                </label>
                <input
                    id="requestor-phone"
                    name="Requestor's phone"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
        </div>
    </div>
    <div class="mt-4 px-8 py-12 bg-gray-200 xl:px-16">
        <h2 class="text-xl font-light">Event Information</h2>

        <div class="-mx-4 mt-8 flex flex-wrap">
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="event-title"
                    class="inline-block font-bold leading-tight"
                >
                    Event title *
                </label>
                <input
                    id="event-title"
                    name="Event title"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="event-description"
                    class="inline-block font-bold leading-tight"
                >
                    Event description *
                </label>
                <input
                    id="event-description"
                    name="Event description"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="event-location"
                    class="inline-block font-bold leading-tight"
                >
                    Event location *
                </label>
                <input
                    id="event-location"
                    name="Event location"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="event-date"
                    class="inline-block font-bold leading-tight"
                >
                    Event date *
                </label>
                <input
                    id="event-date"
                    name="Event date"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="event-start-time"
                    class="inline-block font-bold leading-tight"
                >
                    Event start time *
                </label>
                <input
                    id="event-start-time"
                    name="Event start time"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="event-duration"
                    class="inline-block font-bold leading-tight"
                >
                    Expected duration of event *
                </label>
                <input
                    id="event-duration"
                    name="Expected duration of event"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="mt-8 w-full p-4">
                <div class="space-y-4 flex flex-col sm:flex-row sm:flex-wrap sm:items-start sm:space-y-0 sm:space-x-8">
                    <label class="inline-block font-bold leading-tight">
                        Are attendees required to RSVP?
                    </label>
                    <div class="inline-flex items-center">
                        <input id="rsvp-required-yes" value="yes" name="RSVP required" type="radio" class="form-radio text-red-600" required>
                        <label for="rsvp-required-yes" class="ml-3 inline-block text-sm leading-tight">Yes</label>
                    </div>
                    <div class="inline-flex items-center">
                        <input id="rsvp-required-no" value="no" name="RSVP required" type="radio" class="form-radio text-red-600" required>
                        <label for="rsvp-required-no" class="ml-3 inline-block text-sm leading-tight">No</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 px-8 py-12 bg-gray-200 xl:px-16">
        <h2 class="text-xl font-light">Event Coordinator Contact</h2>

        <div class="-mx-4 mt-8 flex flex-wrap">
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="event-coordinator-name"
                    class="inline-block font-bold leading-tight"
                >
                    Primary contact name *
                </label>
                <input
                    id="event-coordinator-name"
                    name="Event coordinator name"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="event-coordinator-email"
                    class="inline-block font-bold leading-tight"
                >
                    Email address *
                </label>
                <input
                    id="event-coordinator-email"
                    name="Event coordinator email"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="event-coordinator-phone"
                    class="inline-block font-bold leading-tight"
                >
                    Phone number *
                </label>
                <input
                    id="event-coordinator-phone"
                    name="Event coordinator phone"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
        </div>
    </div>
    <div class="mt-4 px-8 py-12 bg-gray-200 xl:px-16">
        <h2 class="text-xl font-light">Social Media for the Event</h2>

        <div class="-mx-4 mt-8 flex flex-wrap">
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="facebook"
                    class="inline-block font-bold leading-tight"
                >
                    Facebook
                </label>
                <input
                    id="facebook"
                    name="Facebook"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="twitter"
                    class="inline-block font-bold leading-tight"
                >
                    Twitter
                </label>
                <input
                    id="twitter"
                    name="Twitter"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="instagram"
                    class="inline-block font-bold leading-tight"
                >
                    Instagram
                </label>
                <input
                    id="instagram"
                    name="Instagram"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                >
            </div>
        </div>
    </div>
    <div class="mt-4 px-8 py-12 bg-gray-200 xl:px-16">
        <h2 class="text-xl font-light">Miscellaneous</h2>

        <div class="-mx-4 mt-8 flex flex-wrap">
            <div class="w-full p-4 lg:w-2/3">
                <label
                    for="misc-notes"
                    class="inline-block font-bold leading-tight"
                >
                    Any other information that CCE or attendees need to know?
                </label>
                <textarea
                    id="misc-notes"
                    name="Any other information that CCE or attendees need to know?"
                    rows="4"
                    class="mt-2 block w-full py-2 px-3 bg-transparent border border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                ></textarea>
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="flyer"
                    class="inline-flex items-center leading-tight"
                >
                    <i data-feather="upload" class="w-5 h-5"></i>
                    <span class="ml-3">Upload a copy of your flyer</span>
                </label>
                <input
                    id="flyer"
                    name="Flyer"
                    type="file"
                    class="mt-6 text-sm"
                >
                <p class="mt-4 text-sm leading-tight">Please submit a JPEG file, 3MB or less.</p>
            </div>
        </div>
    </div>
    <div class="mt-4 flex justify-center px-8 py-12 bg-gray-200 xl:px-16">
        <button class="btn px-12 text-white bg-red-600 hover:bg-red-800">
            Submit
        </button>
    </div>
</form>
@endsection
