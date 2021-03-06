---
title: Donations and Sponsorships
description: As part of being a good neighbor, we are committed to sharing resources that support personal and organizational growth. Requests for monetary, event sponsorships, and other resources can be made below. Submissions are reviewed on a rolling basis, and response times vary depending on the volume of submissions received. We recommend submitting your request as early as possible.
---

@extends('_layouts.about')

@section('content')
    <div class="prose max-w-3xl lg:prose-lg">
        <p>{{ $page->description }}</p>
    </div>

    <div class="mt-12 flex flex-wrap items-stretch bg-gray-200">
        <div class="prose max-w-none w-full px-8 py-16 lg:w-2/3 xl:px-16">
            <h2>Get free tickets to Northeastern sporting events</h2>
            <p>The Athletics Department is always glad to have local fans attend home games and support the Huskies. City and Community Engagement regularly works with Athletics to facilitate the ticket giveaway process. Contact us to attend a game yourself, bring a group, or receive tickets to give away as gifts. [<i>Please note that Northeastern is not hosting athletic events in Fall 2020.</i>]</p>
            <h4>Contact</h4>
            <p>
                <a href="mailto:communityengagement@northeastern.edu">communityengagement@northeastern.edu</a>
            </p>
        </div>
        <div class="w-full lg:w-1/3">
            <div class="relative w-full h-64 lg:h-full">
                <img src="/assets/images/donations.jpg" alt="Hockey player" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>
    </div>

    <div class="mt-8 -mx-4 flex flex-wrap items-stretch md:-mx-8">
        <div class="flex flex-col w-full p-4 md:w-1/2 md:p-8">
            <h2 class="text-xl font-bold">Seek event sponsorship from Northeastern</h2>
            <p class="mt-4 text-gray-700">The CCE team is happy to support the hard work and dedication of small, local groups and organizations that are working to make a change in their communities. Each year, we offer a limited amount of event sponsorship support in the form of advertisements placed in event program books. Preference is given to groups and organizations that work in or with neighborhoods adjacent to our campus.</p>
            <p class="mt-4 text-gray-700">For further information please contact <a href="mailto:communityengagement@northeastern.edu">communityengagement@northeastern.edu</a></p>
        </div>
        <div class="flex flex-col w-full p-4 md:w-1/2 md:p-8">
            <h2 class="text-xl font-bold">Seek a monetary donation from Northeastern</h2>
            <p class="mt-4 text-gray-700">The CCE team is happy to support the hard work and dedication of small, local groups and organizations that are working to make a change in their communities. Each year, we offer a limited amount of monetary donations for operational expenses. Preference is given to groups and organizations that work in or with the neighborhoods adjacent to our campus.</p>
            <p class="mt-4 text-gray-700">For further information please contact <a href="mailto:communityengagement@northeastern.edu">communityengagement@northeastern.edu</a></p>
        </div>
    </div>
@endsection
