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
<form
    id="form1644"
    name="form1644"
    class="wufoo topLabel page"
    accept-charset="UTF-8"
    autocomplete="off"
    enctype="multipart/form-data"
    method="post"
    novalidate
    action="https://provostweb.wufoo.com/forms/z1wbvnmh0r2e5p0/#public"
>
    <div class="mt-12 px-8 py-12 bg-gray-200 xl:px-16">
        <h2 class="text-xl font-light">Contact Information</h2>

        <div class="-mx-4 mt-8 flex flex-wrap">
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    id="title1"
                    for="Field1"
                    class="inline-block font-bold leading-tight"
                >
                    Requestor's name *
                </label>
                <input
                    id="Field1"
                    name="Field1"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    id="title3"
                    for="Field3"
                    class="inline-block font-bold leading-tight"
                >
                    Requestor's email address *
                </label>
                <input
                    id="Field3"
                    name="Field3"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    id="title4"
                    for="Field4"
                    class="inline-block font-bold leading-tight"
                >
                    Requestor's phone number *
                </label>
                <input
                    id="Field4"
                    name="Field4"
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
                    id="title6"
                    for="Field6"
                    class="inline-block font-bold leading-tight"
                >
                    Event title *
                </label>
                <input
                    id="Field6"
                    name="Field6"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    id="title7"
                    for="Field7"
                    class="inline-block font-bold leading-tight"
                >
                    Event description *
                </label>
                <input
                    id="Field7"
                    name="Field7"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    id="title8"
                    for="Field8"
                    class="inline-block font-bold leading-tight"
                >
                    Event location *
                </label>
                <input
                    id="Field8"
                    name="Field8"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="Field28"
                    class="inline-block font-bold leading-tight"
                >
                    Event date *
                </label>
                <input
                    x-init="function () {
                        new Cleave(this.$el, {
                            date: true,
                            datePattern: ['m', 'd', 'Y']
                        });
                    }"
                    x-data
                    id="Field28"
                    name="Field28"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    placeholder="dd/mm/yyyy"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="Field27"
                    class="inline-block font-bold leading-tight"
                >
                    Event start time *
                </label>
                <div class="flex items-end">
                    <input
                        x-init="function () {
                            new Cleave(this.$el, {
                                time: true,
                                timePattern: ['hh', 'mm']
                            });
                        }"
                        x-data
                        id="Field27"
                        name="Field27"
                        class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                        placeholder="hh:mm"
                        required
                    >
                    <select
                        class="ml-2 block py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                        name="am_pm"
                        required
                    >
                        <option value="am" selected>AM</option>
                        <option value="pm">PM</option>
                    </select>
                </div>
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    id="Title12"
                    for="Field12"
                    class="inline-block font-bold leading-tight"
                >
                    Expected duration of event *
                </label>
                <input
                    id="Field12"
                    name="Field12"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="mt-8 w-full p-4">
                <div class="space-y-4 flex flex-col sm:flex-row sm:flex-wrap sm:items-start sm:space-y-0 sm:space-x-8">
                    <label class="inline-block font-bold leading-tight">
                        Are attendees required to RSVP?
                    </label>
                    <input id="radioDefault_13" name="Field13" type="hidden" value="" />
                    <div class="inline-flex items-center">
                        <input id="Field13_0" name="Field13" value="yes" type="radio" class="form-radio text-red-600" required>
                        <label for="Field13_0" class="ml-3 inline-block text-sm leading-tight">Yes</label>
                    </div>
                    <div class="inline-flex items-center">
                        <input id="Field13_1" name="Field13" value="no" type="radio" class="form-radio text-red-600" required>
                        <label for="Field13_1" class="ml-3 inline-block text-sm leading-tight">No</label>
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
                    id="title15"
                    for="Field15"
                    class="inline-block font-bold leading-tight"
                >
                    Primary contact name *
                </label>
                <input
                    id="Field15"
                    name="Field15"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="Field17"
                    class="inline-block font-bold leading-tight"
                >
                    Email address *
                </label>
                <input
                    id="Field17"
                    name="Field17"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    required
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="Field18"
                    class="inline-block font-bold leading-tight"
                >
                    Phone number *
                </label>
                <input
                    id="Field18"
                    name="Field18"
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
                    for="Field20"
                    class="inline-block font-bold leading-tight"
                >
                    Facebook
                </label>
                <input
                    id="Field20"
                    name="Field20"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="Field21"
                    class="inline-block font-bold leading-tight"
                >
                    Twitter
                </label>
                <input
                    id="Field21"
                    name="Field21"
                    class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                >
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="Field22"
                    class="inline-block font-bold leading-tight"
                >
                    Instagram
                </label>
                <input
                    id="Field22"
                    name="Field22"
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
                    id="Field24"
                    name="Field24"
                    rows="4"
                    class="mt-2 block w-full py-2 px-3 bg-transparent border border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                ></textarea>
            </div>
            <div class="w-full p-4 lg:w-1/2 xl:w-1/3">
                <label
                    for="Field25"
                    class="inline-flex items-center leading-tight"
                >
                    <i data-feather="upload" class="w-5 h-5"></i>
                    <span class="ml-3">Upload a copy of your flyer</span>
                </label>
                <input
                    id="title25"
                    for="Field25"
                    type="file"
                    class="mt-6 text-sm"
                >
                <p class="mt-4 text-sm leading-tight">Please submit a JPEG file, 3MB or less.</p>
            </div>
        </div>
    </div>
    <div class="mt-4 flex justify-center px-8 py-12 bg-gray-200 xl:px-16">
        <input id="saveForm" name="saveForm" class="btn px-12 text-white bg-red-600 hover:bg-red-800" type="submit" value="Submit" />
    </div>
    <div class="hidden">
        <label for="comment">Do Not Fill This Out</label>
        <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
        <input type="hidden" id="idstamp" name="idstamp" value="Qz/hC0NUCgXx40d/zG0uhK8DDluur/q6j+m97jYkHGo=" />
        <input type="hidden" id="encryptedPassword" name="encryptedPassword" value="" />
      </div>
</form>
@endsection
