---
title: About
---

@extends('_layouts.about')

@section('hero')
<div
    class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
    style="background-image: url('/assets/images/about-hero.jpg')"
>
    <div class="container">
        <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
            <h1 class="text-3xl leading-none md:text-5xl">{{ $page->title }}</h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="prose max-w-3xl lg:prose-lg">
    <h2 class="font-bold">Creating connections that make an impact</h2>
    <p class="lead">The Office of City and Community Engagement builds partnerships and programs that connect community assets with Northeastern University resources through engagement and education. We connect hundreds of local community organizations, residents, schools, social service groups, and government agencies with students, staff, and faculty across the university. Through a variety of initiatives—from volunteer projects, to community events, to programs that integrate service and learning—we encourage communities to collaborate and learn from one another to create a more just and vibrant world.</p>
</div>
<x-tooth-card image="/assets/images/conference-table.jpg">
    <h2>Community Advisory Board</h2>
    <p>The Community Advisory Board meets quarterly to talk about issues happening in the neighborhoods around Northeastern with City and Community Engagement staff. Among other issues, the CAB discusses and provides input about community engagement, the impact of CCE’s work on local neighborhoods, and the university’s development ideas and initiatives.</p>
    <h3>Participation</h3>
    <p>The Community Advisory Board is a small group of representatives from Fenway, Mission Hill, Roxbury, and the South End. It includes a mix of local residents, staff from nonprofit organizations, and members of Northeastern’s Institutional Master Plan advisory group. CAB members are nominated by fellow members and invited to join based on their working relationships with the Office of City and Community Engagement.</p>
</x-tooth-card>
<div class="mt-12 flex flex-wrap items-stretch">
    <div class="w-full md:w-1/2 lg:w-2/3 prose lg:prose-lg">
        <h2>Annual Reports</h2>
        <p>Each year, our office of City and Community Engagement compiles information from across Northeastern to include in the Community Benefits Annual Report. The CBAR contains information about Northeastern’s commitments in local neighborhoods, progress reports on construction projects, and data on hiring practices. The report is required by the Boston Planning and Development Authority and is released annually in December.</p>
        <p>CCE compiles another annual report highlighting our office’s work and its impact in and around Boston. Although this report has some overlapping information with the CBAR, it contains more information about our staff and includes comments from our partners and program participants.</p>
    </div>
    <div class="w-full pt-12 pb-16 px-8 md:w-1/2 lg:w-1/3 prose">
        <ul class="list-none font-bold">
            <li><a href="#">Community Benefits Annual Report</a></li>
            <li><a href="#">City and Community Engagement Annual Report</a></li>
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
            novalidate
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
                <li>Call us weekdays from 9 a.m. to 5 p.m. at 617.373.7666</li>
                <li>Drop by our office at Northeastern Crossing, 1175 Tremont Street, Boston</li>
                <li>Find a specific <a href="/about/staff">staff member</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
