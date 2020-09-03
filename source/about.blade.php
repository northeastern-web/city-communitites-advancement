---
title: About
description: Through a variety of initiatives—from volunteer projects, to partnerships with local organizations and city agencies, to programs and events that integrate service and learning—our office serves as the bridge between Northeastern and surrounding communities.
---

@extends('_layouts.about')

@section('hero')
    <x-hero.card :title="$page->title" background-image="/assets/images/about-hero.jpg" />
@endsection

@section('content')
<div class="prose max-w-3xl lg:prose-lg">
    <h2 class="font-bold">Creating connections that make an impact</h2>
    <p class="lead">{{ $page->description }}</p>
    <h3 class="font-bold">Our Mission</h3>
    <p>CCE's mission is to be an active and responsible contributor to our local and campus communities by fostering collaborative relationships and partnerships that connect, educate, and engage people and organizations throughout our network.</p>
    <h3 class="font-bold">Our Vision</h3>
    <p>We aspire to be a catalyst for vibrant, interconnected, and evolving networks of individuals and communities that value equity and justice as guiding and core principles in our shared work.</p>
</div>
<x-tooth-card image="/assets/images/conference-table.jpg">
    <h2>Community Advisory Board</h2>
    <p>The Community Advisory Board (CAB) is an active and thoughtful group of dedicated community members tasked with advising the work of the Office of City and Community Engagement. The CAB is organized into four working groups that align with the work of CCE and allow members to focus on an area of interest while serving on the board. Each working group is co-led by a CCE team member and member of the CAB. Among other issues, the CAB discusses and provides input about community engagement, the impact of CCE’s work on local neighborhoods, and the university’s development ideas and initiatives.</p>
    <h3>Participation</h3>
    <p>The Community Advisory Board is a small group of representatives from Fenway, Mission Hill, Roxbury, and the South End. It includes a mix of local residents, staff from nonprofit organizations, and members of Northeastern’s Institutional Master Plan advisory group and Task Force. CAB members are nominated by fellow members or CCE staff and invited to join based on their working relationships with the Office of City and Community Engagement.</p>
</x-tooth-card>
<div class="mt-12 flex flex-wrap items-stretch">
    <div class="w-full md:w-1/2 lg:w-2/3 prose lg:prose-lg">
        <h2>Annual Reports</h2>
        <p>Each year, our office of City and Community Engagement compiles information from across Northeastern to include in the Community Benefits Annual Report. The CBAR contains information about Northeastern’s commitments in local neighborhoods, progress reports on construction projects, and data on hiring practices. The report is required by the Boston Planning and Development Authority and is released annually in December.</p>
    </div>
    <div class="w-full pt-12 pb-16 px-8 md:w-1/2 lg:w-1/3 prose">
        <ul class="list-none font-bold">
            <li><a href="https://issuu.com/northeasterncrossing7/docs/cbar_2019_final" target="_blank">Community Benefits Annual Report</a></li>
        </ul>
    </div>
</div>
<div id="contact" name="contact" class="mt-12 prose lg:prose-lg">
    <h2>Contact us</h2>
</div>
<div class="mt-4 -mx-4 flex flex-wrap items-start">
    <div class="w-full p-4 xl:w-2/3">
        <form
            id="form1637"
            name="form1637"
            class="wufoo topLabel page"
            accept-charset="UTF-8"
            autocomplete="off"
            enctype="multipart/form-data"
            method="post"
            action="https://provostweb.wufoo.com/forms/zotap8j1fh63ga/#public"
        >
            <div class="flex flex-wrap">
                <label class="w-full block font-bold leading-tight" id="title1">
                    Name *
                </label>
                <div class="-mx-4 w-full flex flex-wrap">
                    <div class="w-full p-4 md:w-1/2 lg:w-full xl:w-1/2">
                        <input id="Field1" name="Field1" type="text" class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600" value="" size="8" tabindex="0" placeholder="" required />
                        <label for="Field1" class="text-sm">First</label>
                    </div>
                    <div class="w-full p-4 md:w-1/2 lg:w-full xl:w-1/2">
                        <input id="Field2" name="Field2" type="text" class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600" value="" size="14" tabindex="0" placeholder="" required />
                        <label for="Field2" class="text-sm">Last</label>
                    </div>
                </div>
            </div>
            <div class="-mx-4 w-full flex flex-wrap xl:mt-4">
                <div class="w-full p-4 md:w-1/2 lg:w-full xl:w-1/2">
                    <label class="inline-block font-bold leading-tight" id="title3" for="Field3">
                        Email *
                    </label>
                    <input id="Field3" name="Field3" type="email" spellcheck="false" class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600" value="" maxlength="255" tabindex="0" placeholder="" required />
                </div>
                <div class="w-full p-4 md:w-1/2 lg:w-full xl:w-1/2">
                    <label class="inline-block font-bold leading-tight" id="title9" for="Field9">
                        Phone
                    </label>
                    <input id="Field9" name="Field9" type="text" class="block w-full py-2 px-1 bg-transparent border-b border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600" value="" maxlength="255" tabindex="0" onkeyup="" placeholder="" />
                </div>
            </div>
            <div class="-mx-4 w-full flex flex-wrap xl:mt-4">
                <div class="w-full p-4">
                    <label class="inline-block font-bold leading-tight" id="title4" for="Field4">
                        Message *
                    </label>
                    <textarea id="Field4"
                    name="Field4"
                    class="mt-2 block w-full py-2 px-3 bg-transparent border border-gray-600 transition-colors duration-200 focus:outline-none focus:border-red-600"
                    spellcheck="true"
                    rows="10" cols="50"
                    tabindex="0"
                    onkeyup=""
                    placeholder=""
                    required></textarea>
                </div>
            </div>
            <div class="mt-8">
                <button class="btn px-12 text-white bg-red-600 hover:bg-red-800">Submit</button>
            </div>
            <div class="hidden">
                <label for="comment">Do Not Fill This Out</label>
                <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
                <input type="hidden" id="idstamp" name="idstamp" value="wCSQsQ3IJhFh4zoux60UY++qlDBm05HT9coz1+qwqQo=" />
                <input type="hidden" id="encryptedPassword" name="encryptedPassword" value="" />
            </div>
        </form>
    </div>
    <div class="w-full p-4 xl:w-1/3">
        <div class="pt-12 pb-16 px-8 prose bg-gray-200">
            <h3>Reach us in one of four ways:</h3>
            <ul style="list-style:none">
                <li>Fill out the online form on this page</li>
                <li>Email <a href="mailto:communityengagement@northeastern.edu">communityengagement<span class="inline-block xl:block"></span>@northeastern.edu</a></li>
                <li>Find a specific <a href="/about/staff">staff member</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
