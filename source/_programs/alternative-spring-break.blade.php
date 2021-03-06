---
title: Alternative Spring Break
description: Students and faculty spend a week serving with community-based organizations in the U.S. or abroad and exploring critical social issues.
image_url: /assets/images/programs-alternative-spring-break.jpg
on_page_links:
  - Program Details
  - Roles and Positions
  - Apply
  - Support and Partnership
  - Contact Us
---

@extends('_layouts.program')

@section('content')
    <div class="prose max-w-3xl lg:prose-lg">
        <h1>{{ $page->title }}</h1>
        <p class="lead">Alternative Spring Break (ASB) is an immersive, weeklong service and learning experience. Northeastern students volunteer with community organizations—in the U.S. and around the world—that address critical social issues, such as affordable housing, environmental conservation, youth education, and sustainable agriculture. Through meaningful action, reflection, and education, our volunteers explore new places and cultures, work with people from different communities, and build problem-solving and leadership skills for the future.</p>
        <h2 id="program-details">Program Details</h2>
        <h3>General information</h3>
        <p>To learn more about the Alternative Spring Break program and this year’s trips, please review our <a href="https://drive.google.com/drive/folders/1beNnR3eMMWBYV1kyKswO19iVHm-fj3sy" target="_blank" rel="noopener">detailed guide</a>.</p>
        <p>In light of the new Spring 2021 academic calendar, the Alternative Spring Break Program will be offering a series of Alternative Weekend Trips throughout New England that will focus on how organizations and communities have responded to the impacts of the COVID-19 pandemic. Trips will take place Friday through Sunday during the month of March. More details will be available following winter break.</p>
        <img src="/assets/images/programs/ASB-1.jpg">
        <h3>Spring 2021 trips</h3>
        <p>City and Community Engagement will sponsor up to 7 Alterative Weekend trips across New England focusing on community response to the impacts of the COVID-19 pandemic. Learn more about each trip below. For more details on the Alternative Spring Break Program and FAQs, please review the <a href="https://drive.google.com/drive/folders/1beNnR3eMMWBYV1kyKswO19iVHm-fj3sy" target="_blank" rel="noopener">ASB guidebook</a>.</p>
    </div>

    <div class="mt-12">
        <x-kernl-accordion.base label="Spring trips">
            <x-kernl-accordion.item title="Local trips">
                <div class="prose max-w-3xl">
                    <p>Program fee: $250</p>
                    <p><b>Opioid Epidemic</b> (Greater Boston Area)—Volunteers will work with organizations that have been at the forefront of fighting the opioid epidemic in New England. The team will connect with local, state, and regional advocacy groups to understand the history, context, and impact of this epidemic. They’ll also serve organizations that are meeting the needs of individuals, families, and communities affected by the public health crisis (for example: homeless shelters, food pantries, and ministries).</p>
                </div>
            </x-kernl-accordion.item>
            <x-kernl-accordion.item title="Regional trips">
                <div class="prose max-w-3xl">
                    <p>Program fee: $400</p>
                    <p><b><a href="https://projectcure.org/">Project Cure</a></b> (West Grove, Pennsylvania)—Volunteers will partner with Project Cure, the largest provider of donated medical supplies and equipment to developing countries around the world. They’ll work in a major distribution center in Pennsylvania to help pack and organize supplies for shipments. They’ll also connect with local and regional organizations that focus on public health.</p>
                </div>
            </x-kernl-accordion.item>
            <x-kernl-accordion.item title="Domestic trips">
                <div class="prose max-w-3xl">
                    <p>Program fee: $775</p>
                    <p><b><a href="https://americanhiking.org/">American Hiking Society</a></b> (location TBD)—Volunteers will participate in day hiking, trail work, and learn about the plant life and natural history of a region. No prior trail experience is necessary, American Hiking Society just asks that volunteers come with a good attitude and a willingness to get a little dirty! Location will be announced later this fall!</p>
                    <p><b><a href="https://bestfriends.org/">Best Friends Animal Society</a></b> (Kanab, Utah)—Volunteers will serve at the largest no-kill animal sanctuary in the country, which provides homes and care to a variety of animals, including cats, dogs, pigs, horses, bunnies, and birds. They will also have the opportunity to learn about animal advocacy issues surrounding breed discriminaton and state legislation. Projects may include cleaning, improving facilities, and socializing animals.</p>
                    <p><b><a href="https://www.varietytexas.org/pkhistory/">Peaceable Kingdom Retreat for Children</a></b> (Killeen, Texas)—Volunteers will work with Peaceable Kingdom Retreat for Children’s day camp, which enables children with special needs and chronic illness to enjoy the health-giving benefits of nature. Activities may include assisting with classes and retreats, camp rehabilitation projects, farm animal care, cleaning, gardening, and administrative tasks.</p>
                    <p><b><a href="https://www.nps.gov/sagu/index.htm">Saguaro National Park</a></b> (Tucson, Arizona)—This park features a variety of animal and plant life, including majestic saguaro cacti. Volunteers will spend the week camping in the park and working directly with National Park Service crews to increase access to and maintenance of this natural resource through education and trail maintenance projects. </p>
                </div>
            </x-kernl-accordion.item>
            <x-kernl-accordion.item title="Global Trips">
                <div class="prose max-w-3xl">
                    Program fee: $1,525</p>
                    <p><b><a href="https://7elements.global/our-locations/dominican-republic/">7 Elements</a></b> (Las Canas, Dominican Republic)—Volunteers will work with 7 Elements to support its mission of improving health outcomes by creating a healthy physical and social environment. Volunteers will work on projects aimed at reducing waste and provide healthy and safe conditions for local communities.</p>
                    <p><b><a href="https://www.outreach360.org/dominicanrepublic">Outreach 360</a></b> (Dominican Republic)—Volunteers will serve with Outreach 360, which provides opportunities for youth in Monte Cristi that seek to “Release the Hero Within”. Volunteers will work in the Neighborhood Learning Center to teach English classes and literacy skills and to complete other projects. Volunteers do not have to be fluent in Spanish to participate on this trip.</p>
                    <p><b><a href="https://www.plenitudpr.org/welcome">Plenitud Organic Farming and Sustainable Living Center</a></b> (Las Marias, Puerto Rico)—Volunteers will work with Plenitud to practice sustainable and harmonious living, learn about permaculture and sustainable agriculture, and contribute to the center’s operations. Tasks may involve food production, stormwater management, bio-construction, composting, and education.</p>
                </div>
            </x-kernl-accordion.item>
            <x-kernl-accordion.item title="Weekend Trips">
                <div class="prose max-w-3xl">
                    <p>Due to COVID19, CCE will not be sponsoring any Alternative Weekend trips this fall or winter. Check back for opportunities during summer 2021.</p>
                </div>
            </x-kernl-accordion.item>
        </x-kernl-accordion.base>
    </div>
    <div class="mt-12 prose max-w-3xl lg:prose-lg">
        <h3>Travel and accommodations</h3>
        <p>For ASB trips outside Boston, volunteers will fly to their destinations via Logan International Airport. Volunteers for local and regional trips will drive to the host site. Teams travel together, leaving March 6 and returning March 13.</p>
        <p>Once on-site, ground transportation will be provided. Some vehicles will be driven by staff and students older than 21 who have been certified by Northeastern. For global trips, the host organization will coordinate transportation.</p>
        <p>Volunteers stay in modest housing at community centers, churches, hostels, camp facilities, or Airbnbs. Team Leaders will provide detailed packing lists prior to departure based on your trip and its accommodations.</p>
        <h3>Zero-tolerance policy</h3>
        <p>ASB participants are not permitted to consume alcohol or drugs at any time on ASB trips regardless of the laws in the host state or country. Any participant that violates this zero-tolerance policy will be asked to leave the trip at their own expense. </p>
        <h3>Safety and emergency response</h3>
        <p>We carefully vet our host sites to verify that they do meaningful work and can provide a safe environment for ASB teams. We work closely with Northeastern’s risk management and legal departments to ensure host sites are in compliance with university policies. We also monitor travel advisories from the State Department and the Centers for Disease Control and Prevention to ensure volunteer safety.</p>
        <p>In the event of a medical, security, political, or other emergency, ASB participants will immediately notify Northeastern’s Office of City and Community Engagement. Northeastern employs GardaWorld Travel Security as a travel assistance and response provider, and GardaWorld and Northeastern will work to facilitate the appropriate response. In an emergency scenario, every reasonable accommodation will be made to ensure the safety of ASB participants and get them back to Boston quickly. Unfortunately, we cannot offer a refund of trip fees. Learn more about <a href="https://provost.northeastern.edu/international-travel/health-safety/travel-support-services/">GardaWorld Travel Security</a>.</p>
        <p>Read ASB’s <a href="https://drive.google.com/drive/folders/1beNnR3eMMWBYV1kyKswO19iVHm-fj3sy" target="_blank" rel="noopener">Program Handbook</a> for more information.</p>
        <h3>Costs and payment</h3>
        <h4 class="font-bold">Program fees</h4>
        Volunteer fees to participate in ASB trips include flights, transportation between campus and Logan airport, ground transportation at the host site, housing, meals, site fees, and entry and exit fees. They do not include medical expenses, passport fees, travel insurance, or souvenirs.</p>
        <p>The cost of your trip and your payment deadlines will be confirmed with you if your application to ASB is accepted.</p>
        <p>Volunteer fees for Spring 2021 ASB are:</p>
        <ul>
            <li>Local trips: $250</li>
            <li>Regional trips: $425</li>
            <li>Domestic trips (U.S. locations reached by plane): $800</li>
            <li>Global trips: $1,525</li>
        </ul>
        <p>University Representatives are charged a flat rate of $250, no matter their ASB location.</p>
        <h4 class="font-bold">Payment deadlines</h4>
        <p>ASB requires a non-refundable deposit equal to half the total program fee to secure a spot on a trip. Payment deadlines for each ASB role are:</p>
        <ul>
            <li>November 20, 2020: Deposit due for Team Leaders and Priority Deadline Trip Volunteers</li>
            <li>December 14, 2020: Deposit due for all Trip Volunteers and University Representatives</li>
            <li>January 25, 2021: Balance due for all program participants.</li>
        </ul>
        <h4 class="font-bold">Payment options</h4>
        <p>We accept checks or money orders payable to Northeastern University, with the volunteer’s name in the memo line. Please note that we are unable to accept cash payments. Deliver payments to our office at 172 Curry Student Center or mail them to:</p>
        <p class="ml-4">Tim Krumreig<br>
        Northeastern University<br>
        360 Huntington Avenue, 232 YMC<br>
        Boston, MA 02115</p>
        <p>We also accept credit or debit card payments through Northeastern’s CashNet system, found here.</p>
        <h4 class="font-bold">Non-refundable payments</h4>
        <p>Participating in ASB requires commitment and investments of money and time. Historically, ASB has had a no-refund policy. However, in light of COVID-19, adjustments to our ability to recover costs will likely change. CCE will be working to update our reimbursement policy based on the refund policies of our host sites, accommodations, and airlines.</p>
        <img src="/assets/images/programs/ASB-3.jpg">
        <h3>Discounts and scholarships</h3>
        <p>Team Leaders receive a 50% discount on program fees. Student Drivers on domestic trips are given a credit of $100 toward the cost of their trip.</p>
        <p>We offer scholarships to Team Leaders and Trip Volunteers. To be considered, select “yes” on the scholarship portion of the volunteer application. We choose scholarship recipients based on financial need and in collaboration with the Office of Student Financial Services. Fundraising</p>
        <p>Some ASB volunteers raise money toward their program fees. Here are some resources to help: Use <a href="https://resources.bestfriends.org/article/animal-shelter-fundraising-ideas">these strategies</a> from one of our ASB partners, the Best Friends Animal Society.</p>
        <ul>
            <li>Put on a workshop to teach one of your skills (photography, knitting, vegan cooking, etc.) and charge admission.</li>
            <li>Try a local restaurant fundraiser.</li>
            <li>Launch an online fundraiser at <a href="https://www.kickstarter.com/">Kickstarter</a> or <a href="https://www.gofundme.com/">GoFundMe</a>.</li>
        </ul>

        <h2 id="roles-and-positions" name="roles-and-positions">Roles and Positions</h2>

        <p>ASB teams are typically made up of two student Team Leaders, nine student Trip Volunteers, and one University Representative.</p>

        <p>While each role has its own responsibilities, all ASB participants are expected to engage fully in the program, including participating in pre-departure training and education sessions, team meetings, and post-trip celebrations. Below are the requirements for each role.</p>
    </div>
    <div class="mt-12">
        <x-kernl-accordion.base label="Roles and Positions">
            <x-kernl-accordion.item title="Trip Volunteers">
                <div class="prose max-w-3xl">
                    <ul>
                        <li>Are flexible and willing to adapt to shifting priorities based on travel schedules and partner needs.</li>
                        <li>Are open to new experiences, ideas, and perspectives.</li>
                        <li>Are respectful to one other, to staff, and to members of their host communities.</li>
                        <li>Are engaged in all facets—education, service, and reflection—of the ASB program.</li>
                        <li>Understand and are willing to follow the expectations and policies set by ASB, the Office of City and Community Engagement, and Northeastern’s Student Code of Conduct.</li>
                        <li>Are not required to have previous volunteer experience to participate in ASB.</li>
                        <li>Can take part in ASB while on co-op, but should get prior approval from their co-op employer.</li>
                        <li>Complete program evaluation at the end of ASB.</li>
                    </ul>
                    <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSf9jihzwjHJxZ5owigmSChrwmlG0NU4jKWlV_dm7SXr5tZjaw/viewform" target="_blank" rel="noopener">Apply here.</a></p>
                </div>
            </x-kernl-accordion.item>
            <x-kernl-accordion.item title="Team Leaders">
                <div class="prose max-w-3xl">
                    <ul>
                        <li>Coordinate trip logistics based on timelines set by the Office of City and Community Engagementand the host site.</li>
                        <li>Work closely with their Co-Team Leader during the planning process to ensure the success of all aspects of the trip.
                        Attend monthly trainings focused on leadership development and trip logistics.</li>
                        <li>Participate in biweekly office hours with the ASB Assistant Director and program coordinators to track progress and seek support during the planning process.</li>
                        <li>Serve as a liaison between Trip Volunteers, the host organization, and the Office of City and Community Engagement.</li>
                        <li>Plan and facilitate two pre-departure meetings with their team: one educational opportunity based on the trip topic or location and one trip overview meeting.</li>
                        <li>Lead by example to create the best service experience possible. Your actions, work ethic, and collaboration with host site staff set the tone for the team.</li>
                        <li>Receive a 50% discount on program fees.</li>
                        <li>Complete program evaluation at the end of ASB.</li>
                    </ul>
                    <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSenTzE12GUOjQPpt6GMLcFKK6uD-GjDW577yorVpn_1N1kuTA/viewform" target="_blank" rel="noopener">Apply here.</a></p>
                </div>
            </x-kernl-accordion.item>
            <x-kernl-accordion.item title="University Representatives">
                <div class="prose max-w-3xl">
                    <p>One staff or faculty member accompanies each ASB team. They serve as volunteers, help maintain the trip’s budget, assist the Team Leaders during emergencies, and drive students to the locations of domestic trips. These staff and faculty:</p>
                    <ul>
                        <li>Understand that Team Leaders are responsible for managing and facilitating trips from start to finish. University Representatives can provide input when Team Leaders seek it.</li>
                        <li>Attend two, mandatory pre-trip meetings to meet Team Leaders in a formal training session and learn about trips expectations and safety with the volunteer team.</li>
                        <li>Participate in learning, service, and reflection opportunities with the rest of the team.</li>
                        <li>Make purchases based on the budget created by the Team leaders, and support the tracking of expenses.</li>
                        <li>Step into a leadership role during emergencies. Ensure the safety of all participants, communicate updates to Northeastern, and coordinate with Northeastern to arrange next steps and logistics for the team.</li>
                        <li>Complete program evaluation at the end of ASB.</li>
                    </ul>
                    <p><a href="https://docs.google.com/forms/d/e/1FAIpQLScEzcqTopNTBIzG5lBk53fmDHLO-ZXe-MxLZUYdZkEF44849w/viewform" target="_blank" rel="noopener">Apply here.</a></p>
                </div>
            </x-kernl-accordion.item>
        </x-kernl-accordion.base>
    </div>
    <div id="apply" name="apply" class="mt-12 p-12 bg-gray-200 w-full">
        <div class="prose max-w-3xl lg:prose-lg">
            <h2>Apply</h2>
            <p>Applicaitons for the Alternative Week trips will open in Janurary 2021.</p>
            <p>We send ASB participant lists to the Office of Student Conduct and Conflict Resolution and University Health and Counseling Services prior to departure. We may deny an applicant based on a recommendation from OSCCR. UHCS may follow up with applicants to discuss health concerns related to participation in ASB.</p>
        </div>
    </div>
    <x-program-contact-info
        id="contact-us"
        class="mt-4"
        name="Tim Krumreig"
        title="Assistant Director,<br>Community Service Programs and Events"
        image="/assets/images/programs-alternative-spring-break-contact.jpg"
        email="t.krumreig@northeastern.edu"
        phone="617.373.7479"
    />
    <p>Or contact communityservice@northeastern.edu</p>
@endsection
