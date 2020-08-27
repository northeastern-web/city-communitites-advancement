---
title: Community Volunteers Program (CVP)
description: Small teams of students and staff volunteer with one community organization at the same time and place for one semester.
image_url: /assets/images/programs-cvp.jpg
---

@extends('_layouts.program')

@section('content')
    <div class="prose max-w-3xl lg:prose-lg">
        <h1>{{ $page->title }}</h1>
        <p class="lead">Community Volunteers Program (CVP) members provide meaningful and consistent volunteer service to community organizations in neighborhoods surrounding Northeastern. Each team works with one organization once a week for one semester. Projects include tutoring young students in after-school programs, visiting with senior citizens, and preparing and distributing meals. The CVP program is open to all Northeastern students, faculty, and staff.</p>
        <h2>Program Details</h2>
        <h3>General information</h3>
        <p>Our volunteers work with a variety of organizations in the Boston area. Here are a few examples from 2019–2020:</p>
        <ul>
            <li>
                <h4 class="font-bold">St. Francis House</h4>
                <p>CVP volunteers work one-on-one with poor and homeless adults to provide them food and clothing. </p>
            </li>
            <li>
                <h4 class="font-bold">Let’s Get Ready</h4>
                <p>CVP volunteers work with a small group of high school students to help prepare them for the SATs and college application process.</p>
            </li>
            <li>
                <h4 class="font-bold">American Red Cross Home Fire Campaign</h4>
                <p>CVP volunteers help provide fire-safety information and other materials to local residents. They also help to assess existing smoke alarms, install alarms, or replace alarm batteries.</p>
            </li>
            <li>
                <h4 class="font-bold">Hostile International</h4>
                <p>CVP volunteers assist with creating community events and spreading the word about the hostel’s mission and programs.</p>
            </li>
        </ul>
        <h2 id="roles" name="roles">Roles and Positions</h2>
    </div>
    <div class="mt-12">
        <x-kernl-accordion.base label="Roles and Positions">
            <x-kernl-accordion.item title="CVP Volunteers">
                <div class="prose max-w-3xl">
                    <p>CVP Volunteers commit to serving at a community-based organization once a week for one academic semester. They are expected to:</p>
                    <ul>
                        <li>Complete the CVP training module prior to beginning service</li>
                        <li>Attend all weekly volunteer shifts</li>
                        <li>Be fully present and engaged on site</li>
                        <li>Follow the direction and meet the expectations of the community partner </li>
                        <li>Communicate absences with the Team Leader
                    Have fun</li>
                    </ul>
                    <p><a href="#apply">Apply here.</a></p>
                </div>
            </x-accordion-item>
            <x-kernl-accordion.item title="CVP Team Leaders">
                <div class="prose max-w-3xl">
                    <p>CVP Team Leaders serve as the critical link between City and Community Engagement, their CVP team, and their community partner organization. The Team Leader is responsible for guiding a team of 3–10 CVP volunteers, managing communication between the team and community partner, and supporting volunteers through service and engagement during the semester. Team Leaders also must:</p>
                    <ul>
                        <li>Attend Team Leader Orientation</li>
                        <li>Guide their CVP team to and from service each week</li>
                        <li>Check in with the point of contact at the service site</li>
                        <li>Support and guide team members during service shifts</li>
                        <li>Facilitate reflection activity after each volunteer shift</li>
                        <li>Submit weekly hour logs</li>
                        <li>Attend one or two Team Leader reflection sessions per term</li>
                        <li>Check in with the CVP Program Assistant and Assistant Director about team challenges, attendance issues, and strategies for volunteer support</li>
                    </ul>
                    <p><a href="#apply">Apply here.</a></p>
                </div>
            </x-accordion-item>
        </x-accordion>
    </div>
    <div class="mt-12 prose max-w-3xl lg:prose-lg">
        <h3>Support or Partner with Us</h3>
        <p>The Community Volunteers Program partners with local community-based organizations, government agencies, and schools to provide teams of Northeastern volunteers on days of the week when volunteer numbers are low.</p>
        <p>Prospective CVP partners are asked to complete a short application to propose volunteer opportunities with preferred shift days and times. An organizations can expect to receive up to two teams, with 3–10 volunteers each, per program cycle. We consider the following criteria when reviewing an organization’s application: </p>
        <ul>
            <li>Commitment to hosting teams each week during the program cycle</li>
            <li>Volunteer roles and responsibilities offer consistent,engaging work throughout the semester</li>
            <li>Partner is  within a 30-minute commute of Northeastern</li>
        </ul>
        <p>If your community organization is interested in partnering with CVP, please contact us at communityservice@northeastern.edu.</p>
    </div>
    <div id="apply" name="apply" class="mt-12 p-12 bg-gray-200 w-full">
        <div class="prose max-w-3xl lg:prose-lg">
            <h2>Apply</h2>

            <p>Learn about CVP roles and positions <a href="#roles">here</a>.</p>
            <p>The application period for Spring 2020 is now closed. The application period for Summer 2020 will begin April 6, 2020 and end May 1, 2020. A list of available positions will be posted soon.</p>
        </div>
    </div>
    <x-program-contact-info
        class="mt-4"
        name="Tim Krumreig"
        title="Assistant Director,<br>Community Service Programs and Events"
        image="/assets/images/programs-alternative-spring-break-contact.jpg"
        email="t.krumreig@northeastern.edu"
        phone="617.373.7479"
    />
@endsection
