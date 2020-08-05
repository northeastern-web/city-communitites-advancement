---
title: Service Opportunity Submission Form
---

@extends('_layouts.master')

@section('body')
    <div class="py-20 bg-black">
        <div class="container">
            <h1 class="text-white text-3xl leading-none md:text-5xl">{{ $page->title }}</h1>
        </div>
    </div>
    <div class="container py-16">
        <a href="/service-finder" class="-ml-1 inline-flex items-center p-1 hover:text-gray-700">
            <svg class="w-5 h-5" viewBox="0 0 19 20" fill="none">
                <path d="M3.83 5.87L6.36 8.3 4.95 9.64 0 4.92 4.95.21l1.41 1.34-2.53 2.42H11c2.12 0 4.16.8 5.66 2.23A7.44 7.44 0 0119 11.6c0 2.02-.84 3.96-2.34 5.39A8.2 8.2 0 0111 19.2H2v-1.9h9c1.6 0 3.12-.6 4.24-1.68A5.58 5.58 0 0017 11.59c0-1.52-.63-2.97-1.76-4.04A6.16 6.16 0 0011 5.87H3.83z" fill="currentColor"></path>
            </svg>
            <span class="ml-4">Back</span>
        </a>
        <div class="mt-16 prose max-w-3xl lg:prose-lg">
            <p>The Service Finder is an online tool that enables local community-based organizations that are seeking volunteers to advertise their service opportunities. Northeastern students, faculty, staff and local residents can browse this online database to discover and sign up for service opportunities on their own.</p>
            <p>Service Finder opportunities will be featured in a weekly email blast that City and Community Engagement sends to more than 1,000 members of the Northeastern community.</p>
            <p>To be considered for the Service Finder, a service opportunity must be associated with and benefit a community organization, a government agency, a school, or a Northeastern student group. Requests from local residents and for-profit entities will not be accepted.</p>
            <p>To submit an opportunity to the Service Finder, please fill out the fields below. Please note that this information will be posted publicly so that potential participants understand the details of your service opportunity.</p>
        </div>

        <div class="mt-16 prose max-w-3xl lg:prose-lg">
            <p>Form coming soon</p>
        </div>

        <div class="mt-16 prose max-w-3xl lg:prose-lg">
            <h2>Review process</h2>
            <p>Our staff at City and Community Engagement will review Service Finder submissions on an ongoing basis.</p>
            <p>If we approve an application, we will post the opportunity or event to the Service Finder and remove it when the event has passed.</p>
            <h2>Contact</h2>
            <p>For more information about submitting a service opportunity, contact us at:</p>
            <p>
                <a href="mailto:communityservice@northeastern.edu">communityservice@northeastern.edu</a><br>
                617.373.5809
            </p>
        </div>
    </div>
@endsection