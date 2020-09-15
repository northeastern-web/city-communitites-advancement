---
title: Alliance of Civically Engaged Students (ACES)
description: The Northeastern University Alliance of Civically Engaged Students serves community partner organizations throughout Boston. ACES students commit to volunteering regularly in local organizations, where they build leadership skills and provide sustained service in their communities throughout their undergraduate careers.
image_url: /assets/images/programs-aces-training-week.jpg
on_page_links:
  - Program Details
  - Roles and Positions
  - Apply
  - Contact Us
---
@extends('_layouts.program')

@section('content')
<div class="prose max-w-3xl lg:prose-lg">
    <h1>{{ $page->title }}</h1>
    <p class="lead">{{ $page->description }}</p>
    <h2 id="program-details">Program Details</h2>
    <h3>Benefits</h3>
    <p>ACES offers students social and professional development opportunities, including:</p>
    <ul>
        <li>Monthly ACES meetings with other ACES first-year students and upper-class mentors</li>
        <li>Free or low-cost group events and trips in the greater Boston area</li>
        <li>Networking events and resumé workshops</li>
        <li>Full or partial scholarships for Alternative Spring Break service trips</li>
    </ul>
    <h3>Welcome Week</h3>
    <p>ACES Welcome Week typical runs from Monday to Friday, 8 a.m. to 9 p.m. daily, the week before fall semester begins. ACES students can move into their fall housing the weekend before Welcome Week. Northeastern waives the early move-in fee for ACES Welcome Week students.</p>
    <p>We place students in teams of 10 for Welcome Week: eight first-year students and two upper-class Team Leaders. ACES teams participate in a program orientation, community tours, panels, workshops, and teambuilding and service projects to prepare for their year of service. ACES Welcome Week days are full days, and students must be available to participate in the entire program.</p>
    <p>Due to COVID-19 regulations, ACES staff is working on recruiting the 2020-21 cohort during the Fall 2020 semester to begin the program in January 2021 with supplementary introductory programming for incoming ACES students.</p>
    <h3>Upper-class ACES students</h3>
    <p>Upper-class students can continue to participate in ACES in the following ways:</p>
    <ul>
        <li>
            Serve in an ACES leadership role to mentor first-year students, lead service projects, and plan events and programs. These roles include Peer Mentor, Peer Programmer, Peer Educator, and Welcome Week Team Leader.<br>
            <a href="#roles-and-parntership">Learn more about these roles here</a>.
        </li>
        <li>Volunteer with a local nonprofit organization each week for one semester or the full academic year.</li>
        <li>Complete one-time service projects with community organizations or nonprofits.</li>
        <li>Participate in civic actions such as voting, working on a campaign, or serving on a jury.</li>
    </ul>
    <p>Upper-class ACES volunteers are expected to manage their own service partnerships and should contact organizations directly to determine if those organizations want to host student volunteers. ACES staff can assist.</p>
    <p>For more information about participating in ACES as an upper-class student, contact <a class="break-words" href="mailto:communityservice@northeastern.edu">communityservice@northeastern.edu</a>.</p>
</div>
<div class="mt-24 flex flex-wrap items-stretch bg-black">
    <div class="relative w-full h-48 md:h-auto md:w-1/2 lg:w-2/3">
        <img src="/assets/images/programs-aces-awards.jpg" alt="Awards" class="absolute inset-0 w-full h-full object-cover">
    </div>
    <div class="text-white w-full pt-12 pb-16 px-8 md:w-1/2 lg:w-1/3">
        <h3 class="text-xl font-bold">Awards</h3>
        <p class="mt-4">Northeastern’s Suit Awards recognize ACES students who have demonstrated exceptional service.</p>
        <a href="/about/awards" class="mt-4 inline-block underline text-white hover:text-gray-200">Learn more about the awards or nominate an ACES participant here.</a>
    </div>
</div>
<div class="mt-24">
    <div class="prose lg:prose-lg">
        <h2 id="roles-and-positions" name="roles-and-positions">Roles &amp; Positions</h2>
    </div>
    <div class="mt-8 -mx-4 flex flex-wrap items-start">
        <div class="w-full p-4 lg:w-1/2">
            <img src="/assets/images/programs-aces-roles-and-positions.jpg">
        </div>
        <div class="w-full p-4 prose lg:w-1/2">
            <ul>
                <li>Serve a community organization during the fall and spring semesters</li>
                <li>Take the ACES Oath pledging to work with local communities in a collaborative way and represent ACES and Northeastern in a positive and respectful manner</li>
                <li>Commit to completing civic actions throughout the year </li>
                <li>Attend monthly ACES Club meetings to build social connections and reflect on the ACES experience</li>
                <li>Communicate professionally with partner site staff, ACES staff, and peers</li>
                <li>Be open to learning and growing, and maintain a positive attitude</li>
            </ul>
        </div>
    </div>
</div>
<div class="mt-16 prose lg:prose-lg">
    <h3>ACES Student Participant</h3>
    <p>First-year students can apply to participate in ACES. in their first year of ACES, students can expect to:</p>
    <ul>
        <li>Serve with  a community organization during the fall and spring semesters</li>
        <li>Take the ACES Oath pledging to work with local communities in a collaborative way and represent ACES and Northeastern in a positive and respectful manner</li>
        <li>Commit to completing civic actions throughout the year </li>
        <li>Attend monthly ACES Club meetings to build social connections and reflect on the ACES experience</li>
        <li>Communicate professionally with partner site staff, ACES staff, and peers</li>
        <li>Be open to learning and growing, and maintain a positive attitude</li>
    </ul>
    <h3>Upper-class students</h3>
    <p>
        Students continuing in ACES can view the upper-class requirements
        <a href="#">here</a>.
    </p>
    <p>Upper-class students who completed the ACES program as first-year students can apply for the following leadership roles:</p>
</div>
<div class="mt-12">
    <x-kernl-accordion.base label="Leadership roles accordion">
        <x-kernl-accordion.item title="ACES Peer Mentor">
            <div class="prose max-w-3xl">
                <ul>
                    <li>Serve one academic year</li>
                    <li>Work in pairs to support 9–12 ACES first-year students and guide them through their service, education, and reflection activities</li>
                </ul>
            </div>
            <a href="#apply" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                Find more details here
                <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
            </a>
        </x-kernl-accordion.item>
        <x-kernl-accordion.item title="ACES Peer Programmer">
            <div class="prose max-w-3xl">
                <ul>
                    <li>Serve one semester (fall or spring)</li>
                    <li>Create academic and social programming for ACES first-year and upper-class participants</li>
                    <li>Plan, develop, and facilitate programming, service projects, and social gatherings</li>
                </ul>
            </div>
            <a href="#apply" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                Find more details here
                <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
            </a>
        </x-kernl-accordion.item>
        <x-kernl-accordion.item title="ACES Peer Educator">
            <div class="prose max-w-3xl">
                <ul>
                    <li>Serve one semester (fall or spring)</li>
                    <li>Plan and facilitate curriculum for monthly ACES Club Meetings</li>
                    <li>Create other programming related to civic action, learning and professional development</li>
                </ul>
            </div>
            <a href="#apply" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                Find more details here
                <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
            </a>
        </x-kernl-accordion.item>
        <x-kernl-accordion.item title="ACES Welcome Week Team Leader">
            <div class="prose max-w-3xl">
                <ul>
                    <li>Serve one week (week before fall semester begins)</li>
                    <li>Co-lead a team of students during Welcome</li>
                </ul>
            </div>
            <a href="#apply" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                Find more details here
                <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
            </a>
        </x-kernl-accordion.item>
        <x-kernl-accordion.item title="ACES Co-op">
            <div class="prose max-w-3xl">
                <ul>
                    <li>Serve six months (January to June or July to December)</li>
                    <li>Work with ACES staff to plan and implement activities and events</li>
                    <li>Manage data and results to demonstrate the program’s successes </li>
                </ul>
            </div>
            <a href="#apply" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                Find more details here
                <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
            </a>
        </x-kernl-accordion.item>
        <x-kernl-accordion.item title="ACES Alternative Spring Break Team Leader">
            <div class="prose max-w-3xl">
                <ul>
                    <li>Serve September to March (meetings, trainings, etc.) and during Spring Break Week</li>
                    <li>Attend leadership trainings, facilitate pre-trip logistical planning, plan at least one pre-trip enrichment activity</li>
                    <li>Serve as a liaison among the team, the host site, and the Office of City and Community Affairs</li>
                </ul>
            </div>
            <a href="#apply" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                Find more details here
                <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
            </a>
        </x-kernl-accordion.item>
    </x-kernl-accordion.base>
</div>
<div id="apply" name="apply" class="mt-16 px-10 py-8 bg-gray-200">
    <div class="prose lg:prose-lg">
        <h2>Apply</h2>
    </div>
    <div role="alert" class="mt-8 flex items-center p-4 text-white bg-red-700">
        <i data-feather="info" class="text-black flex-shrink-0 w-6 h-6"></i>
        <p class="ml-3">
            Applications are no longer being accepted for the 2019–2020 academic year.
        </p>
    </div>
    <div role="alert" class="mt-2 flex items-center p-4 bg-white">
        <i data-feather="info" class="text-black flex-shrink-0 w-6 h-6"></i>
        <p class="ml-3">
            Applications for 2020–2021 will be available soon.
        </p>
    </div>
    <div class="mt-6 prose max-w-3xl">
        <ul>
            <li><b>ACES Student Participant</b> (applications will be available in June 2020)<br>
            <span class="text-sm">Due to COVID-19 regulations, ACES staff is working on recruiting the 2020-21 cohort during the Fall 2020 semester to begin the program in January 2021 with supplementary introductory programming for incoming ACES students.</span></li>
        </ul>
        <p><b>ACES Leadership Roles</b></p>
        <ul>
            <li>ACES Peer Mentor (applications are <a href="https://www.surveymonkey.com/r/ACESLeader2021">open now</a>)</li>
            <li>ACES Peer Programmer (applications are <a href="https://www.surveymonkey.com/r/ACESLeader2021">open now</a>)</li>
            <li>ACES Peer Educator (applications are <a href="https://www.surveymonkey.com/r/ACESLeader2021">open now</a>)</li>
            <li>ACES Welcome Week Leader (applications will be available in Spring 2021)</li>
            <li>ACES Co-op (check NUCareers)</li>
        </p>
    </div>
</div>

<x-program-contact-info
    id="contact-us"
    class="mt-4"
    name="Mark Este"
    title="Assistant Director,<br> Civic Engagement Programs"
    image="/assets/images/programs-aces-contact.jpg"
    email="communityservice@northeatern.edu"
    twitter="https://twitter.com/nu_aces?lang=en"
    facebook="https://www.facebook.com/NortheasternACES/"
    instagram="https://www.instagram.com/northeasternaces/?hl=en"
/>
@endsection
