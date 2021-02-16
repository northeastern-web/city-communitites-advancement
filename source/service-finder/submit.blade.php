---
title: Service Opportunity Submission Form
---

@extends('_layouts.master')

@section('body')
    <x-hero.simple :title="$page->title" />

    <div class="container py-16">
        <a href="/service-finder" aria-label="back to service finder" class="-ml-1 inline-flex items-center p-1 hover:text-gray-700">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" viewBox="0 0 19 20" fill="none">
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

        <form
            id="form1654"
            name="form1654"
            accept-charset="UTF-8"
            autocomplete="off"
            enctype="multipart/form-data"
            method="post"
            action="https://provostweb.wufoo.com/forms/z142e2bs0i1cee4/#public"
            class="max-w-4xl"
        >
            <div class="mt-12 px-8 py-12 bg-gray-200 xl:px-16">
                <h2 class="text-xl font-light">Opportunity Information</h2>

                <div class="-mx-4 mt-8 flex flex-wrap">
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight" for="Field6">
                            Title *
                        </label>
                        <input id="Field6" name="Field6" type="text" class="block w-full py-3 px-1 border-0 border-b border-gray-600 focus:ring-0 focus:border-blue-500 bg-transparent" required />
                        <span class="text-sm">Name of your service opportunity, event, or program</span>
                    </div>
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight" for="Field7">
                            Description *
                        </label>
                        <textarea
                            id="Field7"
                            name="Field7"
                            class="mt-2 block w-full py-2 px-3 bg-transparent focus:ring-0 focus:border-blue-500"
                            rows="6"
                            required
                        ></textarea>
                        <span class="text-sm">Please provide a brief description (less than 100 words) of your service opportunity to help attract volunteers to it.</span>
                    </div>
                    <div class="w-full p-4 md:w-1/2">
                        <label class="inline-block font-bold leading-tight" for="Field28">
                            Date and time *
                        </label>
                        <input
                            x-data
                            id="Field28"
                            name="Field28"
                            type="text"
                            class="block w-full py-3 px-1 border-0 border-b border-gray-600 focus:ring-0 focus:border-blue-500 bg-transparent"
                            required
                        />
                    </div>
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight" for="Field8">
                            Address *
                        </label>
                        <input id="Field8" name="Field8" type="text" class="block w-full py-3 px-1 border-0 border-b border-gray-600 focus:ring-0 focus:border-blue-500 bg-transparent" required />
                        <span class="text-sm">Street address, city, state, ZIP</span>
                    </div>
                    <div class="w-full pt-8 pb-4 px-4">
                        <p>
                            For the categories below, please choose one answer per category to identify and define your service opportunity. We will plug the answers into the Service Finder.
                        </p>
                    </div>
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight">
                            Location
                        </label>
                        <div class="mt-2 -mx-4 flex flex-wrap">
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-virtual" name="Field41" type="checkbox" value="Virtual">
                                <label for="location-virtual" class="ml-3 text-sm leading-tight">
                                    Virtual
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-on-campus" name="Field41" type="checkbox" value="On campus">
                                <label for="location-on-campus" class="ml-3 text-sm leading-tight">
                                    On campus
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-allston-brighton" name="Field41" type="checkbox" value="Allston/Brighton">
                                <label for="location-allston-brighton" class="ml-3 text-sm leading-tight">
                                    Allston/Brighton
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-back-bay-south-end" name="Field41" type="checkbox" value="Back Bay/South End">
                                <label for="location-back-bay-south-end" class="ml-3 text-sm leading-tight">
                                    Back Bay/South End
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-beacon-hill" name="Field41" type="checkbox" value="Beacon Hill">
                                <label for="location-beacon-hill" class="ml-3 text-sm leading-tight">
                                    Beacon Hill
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-boston" name="Field41" type="checkbox" value="Boston">
                                <label for="location-boston" class="ml-3 text-sm leading-tight">
                                    Boston
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-brookline" name="Field41" type="checkbox" value="Brookline">
                                <label for="location-brookline" class="ml-3 text-sm leading-tight">
                                    Brookline
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-cambridge" name="Field41" type="checkbox" value="Cambridge">
                                <label for="location-cambridge" class="ml-3 text-sm leading-tight">
                                    Cambridge
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-charlestown" name="Field41" type="checkbox" value="Charlestown">
                                <label for="location-charlestown" class="ml-3 text-sm leading-tight">
                                    Charlestown
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-chinatown" name="Field41" type="checkbox" value="Chinatown">
                                <label for="location-chinatown" class="ml-3 text-sm leading-tight">
                                    Chinatown
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-dorchester" name="Field41" type="checkbox" value="Dorchester">
                                <label for="location-dorchester" class="ml-3 text-sm leading-tight">
                                    Dorchester
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-downtown-financial-district" name="Field41" type="checkbox" value="Downtown/Financial District">
                                <label for="location-downtown-financial-district" class="ml-3 text-sm leading-tight">
                                    Downtown/Financial District
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-east-boston" name="Field41" type="checkbox" value="East Boston">
                                <label for="location-east-boston" class="ml-3 text-sm leading-tight">
                                    East Boston
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-fenway" name="Field41" type="checkbox" value="Fenway">
                                <label for="location-fenway" class="ml-3 text-sm leading-tight">
                                    Fenway
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-hyde-park" name="Field41" type="checkbox" value="Hyde Park">
                                <label for="location-hyde-park" class="ml-3 text-sm leading-tight">
                                    Hyde Park
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-jamaica-plain" name="Field41" type="checkbox" value="Jamaica Plain">
                                <label for="location-jamaica-plain" class="ml-3 text-sm leading-tight">
                                    Jamaica Plain
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-mattapan" name="Field41" type="checkbox" value="Mattapan">
                                <label for="location-mattapan" class="ml-3 text-sm leading-tight">
                                    Mattapan
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-medford" name="Field41" type="checkbox" value="Medford">
                                <label for="location-medford" class="ml-3 text-sm leading-tight">
                                    Medford
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-metro-west" name="Field41" type="checkbox" value="Metro West">
                                <label for="location-metro-west" class="ml-3 text-sm leading-tight">
                                    Metro West
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-mission-hill" name="Field41" type="checkbox" value="Mission Hill">
                                <label for="location-mission-hill" class="ml-3 text-sm leading-tight">
                                    Mission Hill
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-north-end" name="Field41" type="checkbox" value="North End">
                                <label for="location-north-end" class="ml-3 text-sm leading-tight">
                                    North End
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-north-shore" name="Field41" type="checkbox" value="North Shore">
                                <label for="location-north-shore" class="ml-3 text-sm leading-tight">
                                    North Shore
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-quincy" name="Field41" type="checkbox" value="Quincy">
                                <label for="location-quincy" class="ml-3 text-sm leading-tight">
                                    Quincy
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-remote" name="Field41" type="checkbox" value="Remote">
                                <label for="location-remote" class="ml-3 text-sm leading-tight">
                                    Remote
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-roslindale" name="Field41" type="checkbox" value="Roslindale">
                                <label for="location-roslindale" class="ml-3 text-sm leading-tight">
                                    Roslindale
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-roxbury" name="Field41" type="checkbox" value="Roxbury">
                                <label for="location-roxbury" class="ml-3 text-sm leading-tight">
                                    Roxbury
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-seaport" name="Field41" type="checkbox" value="Seaport">
                                <label for="location-seaport" class="ml-3 text-sm leading-tight">
                                    Seaport
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-somerville" name="Field41" type="checkbox" value="Somerville">
                                <label for="location-somerville" class="ml-3 text-sm leading-tight">
                                    Somerville
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-south-boston" name="Field41" type="checkbox" value="South Boston">
                                <label for="location-south-boston" class="ml-3 text-sm leading-tight">
                                    South Boston
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-south-shore" name="Field41" type="checkbox" value="South Shore">
                                <label for="location-south-shore" class="ml-3 text-sm leading-tight">
                                    South Shore
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-west-end" name="Field41" type="checkbox" value="West End">
                                <label for="location-west-end" class="ml-3 text-sm leading-tight">
                                    West End
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="location-west-roxbury" name="Field41" type="checkbox" value="West Roxbury">
                                <label for="location-west-roxbury" class="ml-3 text-sm leading-tight">
                                    West Roxbury
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight">
                            Service Type
                        </label>
                        <div class="mt-2 -mx-4 flex flex-wrap">
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-activism-and-advocacy" name="Field39" type="checkbox" value="Activism and Advocacy">
                                <label for="service-type-activism-and-advocacy" class="ml-3 text-sm leading-tight">
                                    Activism and Advocacy
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-administrative-support" name="Field39" type="checkbox" value="Administrative Support">
                                <label for="service-type-administrative-support" class="ml-3 text-sm leading-tight">
                                    Administrative Support
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-animals" name="Field39" type="checkbox" value="Animals">
                                <label for="service-type-animals" class="ml-3 text-sm leading-tight">
                                    Animals
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-arts-and-culture" name="Field39" type="checkbox" value="Arts and Culture">
                                <label for="service-type-arts-and-culture" class="ml-3 text-sm leading-tight">
                                    Arts and Culture
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-community-outreach" name="Field39" type="checkbox" value="Community Outreach">
                                <label for="service-type-community-outreach" class="ml-3 text-sm leading-tight">
                                    Community Outreach
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-disability-services" name="Field39" type="checkbox" value="Disability Services">
                                <label for="service-type-disability-services" class="ml-3 text-sm leading-tight">
                                    Disability Services
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-environment" name="Field39" type="checkbox" value="Environment">
                                <label for="service-type-environment" class="ml-3 text-sm leading-tight">
                                    Environment
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-financial-literacy" name="Field39" type="checkbox" value="Financial Literacy">
                                <label for="service-type-financial-literacy" class="ml-3 text-sm leading-tight">
                                    Financial Literacy
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-food-justice" name="Field39" type="checkbox" value="Food Justice">
                                <label for="service-type-food-justice" class="ml-3 text-sm leading-tight">
                                    Food Justice
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-fundraising-events" name="Field39" type="checkbox" value="Fundraising Events">
                                <label for="service-type-fundraising-events" class="ml-3 text-sm leading-tight">
                                    Fundraising Events
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-health" name="Field39" type="checkbox" value="Health">
                                <label for="service-type-health" class="ml-3 text-sm leading-tight">
                                    Health
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-housing" name="Field39" type="checkbox" value="Housing">
                                <label for="service-type-housing" class="ml-3 text-sm leading-tight">
                                    Housing
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-hunger-and-homelessness" name="Field39" type="checkbox" value="Hunger and Homelessness">
                                <label for="service-type-hunger-and-homelessness" class="ml-3 text-sm leading-tight">
                                    Hunger and Homelessness
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-other" name="Field39" type="checkbox" value="Other">
                                <label for="service-type-other" class="ml-3 text-sm leading-tight">
                                    Other
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-parks" name="Field39" type="checkbox" value="Parks">
                                <label for="service-type-parks" class="ml-3 text-sm leading-tight">
                                    Parks
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-research-and-development" name="Field39" type="checkbox" value="Research and Development">
                                <label for="service-type-research-and-development" class="ml-3 text-sm leading-tight">
                                    Research and Development
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-seniors-older-adults" name="Field39" type="checkbox" value="Seniors/Older Adults">
                                <label for="service-type-seniors-older-adults" class="ml-3 text-sm leading-tight">
                                    Seniors/Older Adults
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-social-media-and-marketing" name="Field39" type="checkbox" value="Social Media and Marketing">
                                <label for="service-type-social-media-and-marketing" class="ml-3 text-sm leading-tight">
                                    Social Media and Marketing
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-special-events" name="Field39" type="checkbox" value="Special Events">
                                <label for="service-type-special-events" class="ml-3 text-sm leading-tight">
                                    Special Events
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-sports-and-athletics" name="Field39" type="checkbox" value="Sports and Athletics">
                                <label for="service-type-sports-and-athletics" class="ml-3 text-sm leading-tight">
                                    Sports and Athletics
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-translation-services" name="Field39" type="checkbox" value="Translation Services">
                                <label for="service-type-translation-services" class="ml-3 text-sm leading-tight">
                                    Translation Services
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-tutoring-and-mentoring-youth" name="Field39" type="checkbox" value="Tutoring and Mentoring Youth">
                                <label for="service-type-tutoring-and-mentoring-youth" class="ml-3 text-sm leading-tight">
                                    Tutoring and Mentoring Youth
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="service-type-tutoring-and-teaching-adults" name="Field39" type="checkbox" value="Tutoring and Teaching Adults">
                                <label for="service-type-tutoring-and-teaching-adults" class="ml-3 text-sm leading-tight">
                                    Tutoring and Teaching Adults
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight">
                            Proximity to Northeastern
                        </label>
                        <div class="mt-2 -mx-4 flex flex-wrap">
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="proximity-less-than-1-mile" name="Field40" type="radio" value="Less than 1 mile">
                                <label for="proximity-less-than-1-mile" class="ml-3 text-sm leading-tight">
                                    Less than 1 mile
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="proximity-1-to-5-miles" name="Field40" type="radio" value="1 to 5 miles">
                                <label for="proximity-1-to-5-miles" class="ml-3 text-sm leading-tight">
                                    1 to 5 miles
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="proximity-5-to-10-miles" name="Field40" type="radio" value="5 to 10 miles">
                                <label for="proximity-5-to-10-miles" class="ml-3 text-sm leading-tight">
                                    5 to 10 miles
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="proximity-more-than-10-miles" name="Field40" type="radio" value="More than 10 miles">
                                <label for="proximity-more-than-10-miles" class="ml-3 text-sm leading-tight">
                                    More than 10 miles
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight">
                            Number of Volunteers Needed
                        </label>
                        <div class="mt-2 -mx-4 flex flex-wrap">
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="number-of-volunteers-individual" name="Field42" type="radio" value="Individual">
                                <label for="number-of-volunteers-individual" class="ml-3 text-sm leading-tight">
                                    Individual
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="number-of-volunteers-small-group-2-10" name="Field42" type="radio" value="Small Group (2–10)">
                                <label for="number-of-volunteers-small-group-2-10" class="ml-3 text-sm leading-tight">
                                    Small Group (2–10)
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="number-of-volunteers-medium-group-11-20" name="Field42" type="radio" value="Medium Group (11–20)">
                                <label for="number-of-volunteers-medium-group-11-20" class="ml-3 text-sm leading-tight">
                                    Medium Group (11–20)
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="number-of-volunteers-large-group-21-or-more" name="Field42" type="radio" value="Large Group (21 or more)">
                                <label for="number-of-volunteers-large-group-21-or-more" class="ml-3 text-sm leading-tight">
                                    Large Group (21 or more)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight">
                            Time of Day
                        </label>
                        <div class="mt-2 -mx-4 flex flex-wrap">
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="time-of-day-weekday-afternoon" name="Field43" type="checkbox" value="Weekday Afternoon">
                                <label for="time-of-day-weekday-afternoon" class="ml-3 text-sm leading-tight">
                                    Weekday Afternoon
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="time-of-day-weekday-evening" name="Field43" type="checkbox" value="Weekday Evening">
                                <label for="time-of-day-weekday-evening" class="ml-3 text-sm leading-tight">
                                    Weekday Evening
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="time-of-day-weekday-morning" name="Field43" type="checkbox" value="Weekday Morning">
                                <label for="time-of-day-weekday-morning" class="ml-3 text-sm leading-tight">
                                    Weekday Morning
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="time-of-day-weekend-afternoon" name="Field43" type="checkbox" value="Weekend Afternoon">
                                <label for="time-of-day-weekend-afternoon" class="ml-3 text-sm leading-tight">
                                    Weekend Afternoon
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="time-of-day-weekend-evening" name="Field43" type="checkbox" value="Weekend Evening">
                                <label for="time-of-day-weekend-evening" class="ml-3 text-sm leading-tight">
                                    Weekend Evening
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="time-of-day-weekend-morning" name="Field43" type="checkbox" value="Weekend Morning">
                                <label for="time-of-day-weekend-morning" class="ml-3 text-sm leading-tight">
                                    Weekend Morning
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight">
                            Time of Year
                        </label>
                        <div class="mt-2 -mx-4 flex flex-wrap">
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="time-of-year-fall-semester" name="Field45" type="checkbox" value="Fall semester">
                                <label for="time-of-year-fall-semester" class="ml-3 text-sm leading-tight">
                                    Fall semester
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="time-of-year-spring-semester" name="Field45" type="checkbox" value="Spring semester">
                                <label for="time-of-year-spring-semester" class="ml-3 text-sm leading-tight">
                                    Spring semester
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="time-of-year-summer-i-semester" name="Field45" type="checkbox" value="Summer I semester">
                                <label for="time-of-year-summer-i-semester" class="ml-3 text-sm leading-tight">
                                    Summer I semester
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="time-of-year-summer-ii-semester" name="Field45" type="checkbox" value="Summer II semester">
                                <label for="time-of-year-summer-ii-semester" class="ml-3 text-sm leading-tight">
                                    Summer II semester
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight">
                            Duration of Service Opportunity
                        </label>

                        <div class="mt-2 -mx-4 flex flex-wrap">
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="duration-one-day" name="Field46" type="checkbox" value="One day">
                                <label for="duration-one-day" class="ml-3 text-sm leading-tight">
                                    One day
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="duration-one-week" name="Field46" type="checkbox" value="One week">
                                <label for="duration-one-week" class="ml-3 text-sm leading-tight">
                                    One week
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="duration-short-series-3-5-events" name="Field46" type="checkbox" value="Short series (3–5 events)">
                                <label for="duration-short-series-3-5-events" class="ml-3 text-sm leading-tight">
                                    Short series (3–5 events)
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="duration-periodic" name="Field46" type="checkbox" value="Periodic">
                                <label for="duration-periodic" class="ml-3 text-sm leading-tight">
                                    Periodic
                                </label>
                            </div>
                            <div class="w-full flex items-center px-4 py-2 md:w-1/2">
                                <input id="duration-ongoing" name="Field46" type="checkbox" value="Ongoing">
                                <label for="duration-ongoing" class="ml-3 text-sm leading-tight">
                                    Ongoing
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12 px-8 py-12 bg-gray-200 xl:px-16">
                <h2 class="text-xl font-light">Organization Information</h2>

                <div class="-mx-4 mt-8 flex flex-wrap">
                    <div class="w-full p-4 md:w-1/2">
                        <label class="inline-block font-bold leading-tight" for="Field1">
                            Organization name *
                        </label>
                        <input id="Field1" name="Field1" type="text" class="block w-full py-3 px-1 border-0 border-b border-gray-600 focus:ring-0 focus:border-blue-500 bg-transparent" required />
                    </div>
                    <div class="w-full p-4 md:w-1/2">
                        <label class="inline-block font-bold leading-tight" for="Field4">
                            Organization website *
                        </label>
                        <input id="Field4" name="Field4" type="text" class="block w-full py-3 px-1 border-0 border-b border-gray-600 focus:ring-0 focus:border-blue-500 bg-transparent" required />
                    </div>
                </div>
            </div>
            <div class="mt-4 px-8 py-12 bg-gray-200 xl:px-16">
                <h2 class="text-xl font-light">Service Coordinator Contact</h2>
                <p class="mt-2">Contact information of a person volunteers could contact to ask questions or for more info about the service opportunity.</p>

                <div class="-mx-4 mt-8 flex flex-wrap">
                    <div class="w-full p-4 md:w-1/2">
                        <label class="inline-block font-bold leading-tight" for="Field15">
                            Name *
                        </label>
                        <input id="Field15" name="Field15" type="text" class="block w-full py-3 px-1 border-0 border-b border-gray-600 focus:ring-0 focus:border-blue-500 bg-transparent" required />
                    </div>
                    <div class="w-full p-4 md:w-1/2">
                        <label class="inline-block font-bold leading-tight" for="Field37">
                            Title *
                        </label>
                        <input id="Field37" name="Field37" type="text" class="block w-full py-3 px-1 border-0 border-b border-gray-600 focus:ring-0 focus:border-blue-500 bg-transparent" required />
                    </div>
                    <div class="w-full p-4 md:w-1/2">
                        <label class="inline-block font-bold leading-tight" for="Field17">
                            Email *
                        </label>
                        <input id="Field17" name="Field17" type="email" class="block w-full py-3 px-1 border-0 border-b border-gray-600 focus:ring-0 focus:border-blue-500 bg-transparent" required />
                    </div>
                    <div class="w-full p-4 md:w-1/2">
                        <label class="inline-block font-bold leading-tight" for="Field18">
                            Phone *
                        </label>
                        <input id="Field18" name="Field18" type="text" class="block w-full py-3 px-1 border-0 border-b border-gray-600 focus:ring-0 focus:border-blue-500 bg-transparent" required />
                    </div>
                </div>
            </div>
            <div class="mt-12 px-8 py-12 bg-gray-200 xl:px-16">
                <h2 class="text-xl font-light">Other Details</h2>

                <div class="-mx-4 mt-8 flex flex-wrap">
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight" for="Field35">
                            Registration or application details *
                        </label>
                        <textarea
                            id="Field35"
                            name="Field35"
                            class="mt-2 block w-full py-2 px-3 bg-transparent focus:ring-0 focus:border-blue-500"
                            rows="6"
                            required
                        ></textarea>
                        <span class="text-sm">Do volunteers have to register or contact you beforehand, or can they just show up the day of? What’s the registration/application deadline? Please summarize these in less than 50 words.</span>
                    </div>
                    <div class="w-full p-4">
                        <label class="inline-block font-bold leading-tight" for="Field36">
                            Additional instructions or requirements *
                        </label>
                        <textarea
                            id="Field36"
                            name="Field36"
                            class="mt-2 block w-full py-2 px-3 bg-transparent focus:ring-0 focus:border-blue-500"
                            rows="6"
                            required
                        ></textarea>
                        <span class="text-sm">Is there anything else that volunteers need to bring, do, or prepare for prior to the opportunity?</span>
                    </div>
                </div>
            </div>
            <div class="mt-4 flex justify-center px-8 py-12 bg-gray-200 xl:px-16">
                <button class="btn px-12 text-white bg-red-600 hover:bg-red-700">Submit</button>
            </div>
            <div class="hidden">
                <label class="inline-block font-bold leading-tight" for="comment">Do Not Fill This Out</label>
                <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                <input type="hidden" id="idstamp" name="idstamp" value="F1nC0OfWwztN0pwSGlAY97ybgH5+bGb8wHuWFJxeXvo=" />
                <input type="hidden" id="encryptedPassword" name="encryptedPassword" value="" />
            </div>
        </form>

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
