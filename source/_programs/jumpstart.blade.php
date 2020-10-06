---
title: Jumpstart
description: Students volunteer in Boston-area preschool classrooms to promote language, literacy, and social-emotional development.
image_url: /assets/images/programs-jumpstart.jpg
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
        <p class="lead">Jumpstart is a national early education organization that recruits and trains college students and community volunteers to teach preschool children in low-income neighborhoods. Through a proven curriculum, the children develop the necessary language and literacy skills to be ready for school, setting them on a path to academic success.</p>
        <h2 id="program-details">Program Details</h2>
        <h3>General information</h3>
        <p>Northeastern students who participate in Jumpstart serve 8–12 hours per week and  complete 200–300 hours of service during the school year. They serve on a team of 5–7 peers and work directly with a local Jumpstart staff member on training, session planning, service opportunities, and more. They also communicate with families and share strategies for helping children; participate in intensive pre-service and ongoing trainings; and attend periodic service days, often held on weekends.</p>
        <img src="/assets/images/programs/jumpstart-1.jpg">
        <p>Jumpstart participants reduce the student-to-teacher ratio to 3:1 in almost every Jumpstart classroom, enabling children to receive a personalized learning experience and develop nurturing relationships with caring adults. Through the Jumpstart program, Northeastern students not only prepare local children for kindergarten and future grades, but receive valuable skills and training themselves to prepare for  careers in education or related fields.</p>

        <h2 id="roles-and-positions" name="roles-and-positions">Roles and Positions</h2>
    </div>
    <div class="mt-12">
        <x-kernl-accordion.base label="Roles and Positions">
            <x-kernl-accordion.item title="Jumpstart Member">
                <div class="prose max-w-3xl">
                    <p>Jumpstart members have the unique opportunity to inspire young children to learn, serve in a local community, collaborate with others, and build professional skills. They receive high-quality training to help implement Jumpstart’s outcome-based program, promote children’s school success, and build family involvement.</p>
                    <p>Jumpstart participants are also eligible to receive a work-study award during their term of service and an AmeriCorps education award to pay for tuition, loans, or other qualified expenses.</p>
                    <p><a href="#apply">Apply here.</a></p>
                </div>
            </x-kernl-accordion.item>
            <x-kernl-accordion.item title="Jumpstart Team Leader">
                <div class="prose max-w-3xl">
                    <p>A team leader collaborates with a team of Jumpstart members to provide educational activities to children and families. Responsibilities include planning and implementing effective Jumpstart sessions using the Jumpstart curriculum, facilitating team meetings, and coaching Jumpstart members to use developmentally appropriate practices with young children.</p>
                    <p>The team leader position is open to Jumpstart members and alumni who have completed at least one year of service. In some cases, it is also open to undergraduate or graduate students who have backgrounds in early childhood education.</p>
                    <p><a href="#apply">Apply here.</a></p>
                </div>
            </x-kernl-accordion.item>
        </x-kernl-accordion.base>
    </div>
    <div id="apply" name="apply" class="mt-12 p-12 bg-gray-200 w-full">
        <div class="prose max-w-3xl lg:prose-lg">
            <h2 id="apply">Apply</h2>

            <p>View and apply for open positions <a href="https://www.jstart.org/our-work/corps-members/#positions">here</a>.</p>
        </div>
    </div>
    <x-program-contact-info
        id="contact-us"
        class="mt-4"
        name="Lisa Gozbekian"
        title="Site Manager"
        image="/assets/images/programs-jumpstart-contact.jpg"
        email="e.gozbekian@northeastern.edu"
        phone="617.373.7877"
        twitter="https://twitter.com/Jumpstartkids"
    />
@endsection
