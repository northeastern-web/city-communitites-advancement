---
extends: _layouts.program
section: content
title: Alliance of Civically Engaged Students (ACES)
description: The Northeastern University Alliance of Civically Engaged Students serves community nonprofit organizations throughout Boston.
image_url: /assets/images/programs-aces-training-week.jpg
---

<div class="prose max-w-3xl lg:prose-lg">
    <h1>Alliance of Civically Engaged Students (ACES)</h1>
    <p class="lead">The Northeastern University Alliance of Civically Engaged Students serves community nonprofit organizations throughout Boston. ACES students commit to volunteering regularly in local organizations, where they build leadership skills and provide sustained service in their communities throughout their undergraduate careers.</p>
    <h2>Program Details</h2>
    <p>As you might imagine, these free spaces get reserved quickly. We recommend that you submit the online Event Space Request form as early as possible before your event. Our staff responds to these requests on a rolling basis, although we try to reply within two business days. Currently, we are fulfilling reservations up to three months in advance.</p>
    <p>The two spaces available are the conference room (capacity: 12 people) and classroom (capacity: 40 people). Both rooms have modular furniture that can be rearranged or removed as necessary. They also have overhead audio/visual equipment that can be connected to laptop computers via HDMI cables.</p>
    <p>Please note the following guidelines regarding reservations at Northeastern Crossing:</p>
    <h3>Program fee</h3>
    <p>The ACES program fee is $300 per student, which covers the costs of meals and activities during Welcome Week. If a student can’t afford the program fee, they may reach out to ACES staff to discuss alternatives.</p>
    <h3>Benefits</h3>
    <p>ACES offers students social and professional development opportunities, including:</p>
    <ul>
        <li>Monthly ACES meetings with other ACES first-year students and upper-class mentors</li>
        <li>Free or low-cost group events and trips in the greater Boston area</li>
        <li>Networking events and resumé workshops</li>
        <li>Full or partial scholarships for Alternative Spring Break service trips</li>
    </ul>
    <h3>Welcome Week Training</h3>
    <p>ACES Welcome Week runs from Monday to Friday, 8 a.m. to 9 p.m. daily, the week before fall semester begins. ACES students can move into their fall housing the weekend before Welcome Week. Northeastern waives the early move-in fee for ACES Welcome Week students.</p>
    <p>We place students in teams of 10 for Welcome Week: eight first-year students and two upper-class Team Leaders. ACES teams participate in a program orientation, community tours, panels, workshops, and teambuilding and service projects to prepare for their year of service. ACES Welcome Week days are full days, and students must be available to participate in the entire program.</p>
    <p>Honors Welcome Week—the orientation program for Northeastern’s honors students—begins the Friday afternoon before fall semester, and therefore, overlaps with one day of ACES Welcome Week. Honors Program students will be excused from ACES Welcome Week to attend Honors Welcome Week activities on Friday afternoon. They can return for the ACES Welcome Week closing ceremony and dinner.  </p>
    <h3>Upper-class ACES students</h3>
    <p>Upper-class students can continue to participate in ACES in the following ways:</p>
    <ul>
        <li>
            Serve in an ACES leadership role to mentor first-year students, lead service projects, and plan events and programs. These roles include Peer Mentor, Peer Programmer, and Welcome Week Team Leader.
            <br> <a href="#">Learn more about these roles here</a>.
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
        <a href="#" class="mt-4 inline-block underline text-white hover:text-gray-200">Learn more about the awards or nominate an ACES participant here.</a>
    </div>
</div>
<div class="mt-24">
    <div class="prose lg:prose-lg">
        <h2>Roles &amp; Positions</h2>
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
    <p>Any first-year student, except those in the NUin semester abroad program, can apply to participate in ACES. Students who have Boston Housing Authority, Boston Public High School, Northeastern Neighborhood, Northeastern Valedictorian, and Torch scholarships are required to participate in the  ACES yearlong program, but are not required to attend Welcome Week.</p>
    <h3>Upper-class students</h3>
    <p>
        Students continuing in ACES can view the upper-class requirements
        <a href="#">here</a>.
    </p>
    <p>Upper-class students who completed the ACES program as first-year students can apply for the following leadership roles:</p>
</div>
<div class="mt-12">
    <ul
        x-data="{
            active: null,
            setActive: function (section) {
                if (this.active === section) {
                    this.active = null;
                } else {
                    this.active = section;
                }
            }
        }"
        class="space-y-4"
        aria-label="Leadership roles accordion"
        x-cloak
    >
        <li class="border">
            <h3>
                <button
                    aria-controls="section-1"
                    :aria-expanded="active == 'section-1' ? 'true' : 'false'"
                    :class="{ 'bg-gray-200': active == 'section-1' }"
                    class="w-full flex items-center justify-between py-3 px-4 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:shadow-outline"
                    @click="setActive('section-1')"
                >
                    <span class="font-bold">ACES Peer Mentor</span>
                    <span aria-hidden="true" x-show="active === 'section-1'" class="ml-2">
                        <i data-feather="minus" class="w-4 h-4"></i>
                    </span>
                    <span aria-hidden="true" x-show="active !== 'section-1'" class="ml-2">
                        <i data-feather="plus" class="w-4 h-4"></i>
                    </span>
                </button>
            </h3>
            <div
                id="section-1"
                :aria-hidden="active !== 'section-1'"
                x-show="active == 'section-1'"
                x-transition:enter="transition-all duration-200"
                x-transition:enter-start="opacity-0 max-h-0 overflow-hidden"
                x-transition:enter-end="opacity-100 max-h-screen"
                x-transition:leave="transition-all duration-100"
                x-transition:leave-start="opacity-100 max-h-screen"
                x-transition:leave-end="opacity-0 max-h-0 overflow-hidden"
                class="h-full overflow-y-auto"
                tabindex="0"
            >
                <div class="px-10 py-8">
                    <div class="prose max-w-3xl">
                        <ul>
                            <li>Serve one academic year</li>
                            <li>Work in pairs to support 9–12 ACES first-year students and guide them through their service, education, and reflection activities</li>
                        </ul>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                        Find more details here
                        <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </li>
        <li class="border">
            <h3>
                <button
                    aria-controls="section-2"
                    :aria-expanded="active == 'section-2' ? 'true' : 'false'"
                    :class="{ 'bg-gray-200': active == 'section-2' }"
                    class="w-full flex items-center justify-between py-3 px-4 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:shadow-outline"
                    @click="setActive('section-2')"
                >
                    <span class="font-bold">ACES Peer Programmer</span>
                    <span aria-hidden="true" x-show="active === 'section-2'" class="ml-2">
                        <i data-feather="minus" class="w-4 h-4"></i>
                    </span>
                    <span aria-hidden="true" x-show="active !== 'section-2'" class="ml-2">
                        <i data-feather="plus" class="w-4 h-4"></i>
                    </span>
                </button>
            </h3>
            <div
                id="section-2"
                :aria-hidden="active !== 'section-2'"
                x-show="active == 'section-2'"
                x-transition:enter="transition-all duration-200"
                x-transition:enter-start="opacity-0 max-h-0 overflow-hidden"
                x-transition:enter-end="opacity-100 max-h-screen"
                x-transition:leave="transition-all duration-100"
                x-transition:leave-start="opacity-100 max-h-screen"
                x-transition:leave-end="opacity-0 max-h-0 overflow-hidden"
                class="h-full overflow-y-auto"
                tabindex="0"
            >
                <div class="px-10 py-8">
                    <div class="prose max-w-3xl">
                        <ul>
                            <li>Serve one semester (fall or spring)</li>
                            <li>Create academic and social programming for ACES first-year and upper-class participants</li>
                            <li>Plan, develop, and facilitate programming, service projects, and social gatherings</li>
                        </ul>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                        Find more details here
                        <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </li>
        <li class="border">
            <h3>
                <button
                    aria-controls="section-3"
                    :aria-expanded="active == 'section-3' ? 'true' : 'false'"
                    :class="{ 'bg-gray-200': active == 'section-3' }"
                    class="w-full flex items-center justify-between py-3 px-4 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:shadow-outline"
                    @click="setActive('section-3')"
                >
                    <span class="font-bold">ACES Welcome Week Team Leader</span>
                    <span aria-hidden="true" x-show="active === 'section-3'" class="ml-2">
                        <i data-feather="minus" class="w-4 h-4"></i>
                    </span>
                    <span aria-hidden="true" x-show="active !== 'section-3'" class="ml-2">
                        <i data-feather="plus" class="w-4 h-4"></i>
                    </span>
                </button>
            </h3>
            <div
                id="section-3"
                :aria-hidden="active !== 'section-3'"
                x-show="active == 'section-3'"
                x-transition:enter="transition-all duration-200"
                x-transition:enter-start="opacity-0 max-h-0 overflow-hidden"
                x-transition:enter-end="opacity-100 max-h-screen"
                x-transition:leave="transition-all duration-100"
                x-transition:leave-start="opacity-100 max-h-screen"
                x-transition:leave-end="opacity-0 max-h-0 overflow-hidden"
                class="h-full overflow-y-auto"
                tabindex="0"
            >
                <div class="px-10 py-8">
                    <div class="prose max-w-3xl">
                        <ul>
                            <li>Serve one week (week before fall semester begins)</li>
                            <li>Co-lead a team of students during Welcome</li>
                        </ul>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                        Find more details here
                        <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </li>
        <li class="border">
            <h3>
                <button
                    aria-controls="section-4"
                    :aria-expanded="active == 'section-4' ? 'true' : 'false'"
                    :class="{ 'bg-gray-200': active == 'section-4' }"
                    class="w-full flex items-center justify-between py-3 px-4 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:shadow-outline"
                    @click="setActive('section-4')"
                >
                    <span class="font-bold">ACES Co-op</span>
                    <span aria-hidden="true" x-show="active === 'section-4'" class="ml-2">
                        <i data-feather="minus" class="w-4 h-4"></i>
                    </span>
                    <span aria-hidden="true" x-show="active !== 'section-4'" class="ml-2">
                        <i data-feather="plus" class="w-4 h-4"></i>
                    </span>
                </button>
            </h3>
            <div
                id="section-4"
                :aria-hidden="active !== 'section-4'"
                x-show="active == 'section-4'"
                x-transition:enter="transition-all duration-200"
                x-transition:enter-start="opacity-0 max-h-0 overflow-hidden"
                x-transition:enter-end="opacity-100 max-h-screen"
                x-transition:leave="transition-all duration-100"
                x-transition:leave-start="opacity-100 max-h-screen"
                x-transition:leave-end="opacity-0 max-h-0 overflow-hidden"
                class="h-full overflow-y-auto"
                tabindex="0"
            >
                <div class="px-10 py-8">
                    <div class="prose max-w-3xl">
                        <ul>
                            <li>Serve six months (January to June or July to December)</li>
                            <li>Work with ACES staff to plan and implement 	activities and events</li>
                            <li>Manage data and results to demonstrate the 	program’s successes </li>
                        </ul>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                        Find more details here
                        <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </li>
        <li class="border">
            <h3>
                <button
                    aria-controls="section-5"
                    :aria-expanded="active == 'section-5' ? 'true' : 'false'"
                    :class="{ 'bg-gray-200': active == 'section-5' }"
                    class="w-full flex items-center justify-between py-3 px-4 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:shadow-outline"
                    @click="setActive('section-5')"
                >
                    <span class="font-bold">ACES Alternative Spring Break Team Leader</span>
                    <span aria-hidden="true" x-show="active === 'section-5'" class="ml-2">
                        <i data-feather="minus" class="w-4 h-4"></i>
                    </span>
                    <span aria-hidden="true" x-show="active !== 'section-5'" class="ml-2">
                        <i data-feather="plus" class="w-4 h-4"></i>
                    </span>
                </button>
            </h3>
            <div
                id="section-5"
                :aria-hidden="active !== 'section-5'"
                x-show="active == 'section-5'"
                x-transition:enter="transition-all duration-200"
                x-transition:enter-start="opacity-0 max-h-0 overflow-hidden"
                x-transition:enter-end="opacity-100 max-h-screen"
                x-transition:leave="transition-all duration-100"
                x-transition:leave-start="opacity-100 max-h-screen"
                x-transition:leave-end="opacity-0 max-h-0 overflow-hidden"
                class="h-full overflow-y-auto"
                tabindex="0"
            >
                <div class="px-10 py-8">
                    <div class="prose max-w-3xl">
                        <ul>
                            <li>Serve September to March (meetings, trainings, etc.) and during Spring Break Week</li>
                            <li>Attend leadership trainings, facilitate pre-trip logistical planning, plan at least one pre-trip enrichment activity</li>
                            <li>Serve as a liaison among the team, the host site, and the Office of City and Community Affairs</li>
                        </ul>
                    </div>
                    <a href="#" class="mt-6 inline-flex items-center font-bold transition-colors duration-200 hover:text-gray-700">
                        Find more details here
                        <i data-feather="arrow-right" class="ml-3 w-5 h-5"></i>
                    </a>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="mt-16 px-10 py-8 bg-gray-200">
    <div class="prose lg:prose-lg">
        <h2>Apply</h2>
    </div>
    <div role="alert" class="mt-8 flex items-center p-4 text-white bg-red-700">
        <i data-feather="info" class="text-black flex-shrink-0 w-6 h-6"></i>
        <p class="ml-3">
            Applications are no longer being accepted for the 2019–2020 academic year
        </p>
    </div>
    <div role="alert" class="mt-2 flex items-center p-4 bg-white">
        <i data-feather="info" class="text-black flex-shrink-0 w-6 h-6"></i>
        <p class="ml-3">
            Applications are no longer being accepted for the 2019–2020 academic year
        </p>
    </div>
    <div class="mt-6 prose max-w-3xl">
        <p>We are accepting 2020 Alternative Spring Break applications for volunteers on a rolling basis. Trips will be open until filled. Click here to review the application for more details.</p>
        <p>We send ASB participant lists to the Office of Student Conduct and Conflict Resolution and University Health and Counseling Services prior to departure. We may deny an applicant based on a recommendation from OSCCR. UHCS may follow up with applicants to discuss health concerns related to  participation in ASB.</p>
        <p>
            ACES Student Participant  (applications will be available in June 2020)<br>
            ACES Peer Mentor (applications will be available in Spring 2020)<br>
            ACES Peer Programmer (applications will be available in Spring 2020)<br>
            ACES Welcome Week Leader (applications will be available in Spring 2020)<br>
            ACES Co-op (check NUCareers)<br>
            ACES Alternative Spring Break Team Leader (applications will be available in Fall 2020)
        </p>
    </div>
</div>
<div class="mt-4 -mx-4 flex flex-wrap items-stretch">
    <div class="w-full p-4 md:w-1/2 lg:w-2/3">
        <div class="pt-8 pb-12 px-10 text-gray-900 bg-gray-200">
            <h2 class="text-2xl">Contact us</h2>
            <div class="mt-8 -mx-4 flex flex-wrap items-center justify-center">
                <div class="flex-shrink-0 p-4">
                    <img class="w-48 h-48 rounded-full shadow-inner" src="/assets/images/programs-aces-contact.jpg" alt="Mark Estes">
                </div>
                <div class="p-4 flex-1">
                    <h3 class="text-xl font-bold">Mark Este</h3>
                    <p class="text-gray-700">Assistant Director,<br> Civic Engagement Programs</p>
                    <div class="mt-6">
                        <a href="#" class="inline-flex items-center font-bold hover:text-gray-700">
                            <i data-feather="mail" class="w-6 h-6"></i>
                            <span class="ml-4">j.este@northeastern.edu</span>
                        </a>
                    </div>
                    <div class="mt-2">
                        <a href="#" class="inline-flex items-center font-bold hover:text-gray-700">
                            <i data-feather="phone" class="w-6 h-6"></i>
                            <span class="ml-4">617.373.5810</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full p-4 md:w-1/2 lg:w-1/3">
        <div class="h-full flex flex-col py-12 px-10 text-sm text-gray-900 bg-gray-200">
            <h2 class="font-bold uppercase tracking-widest">Follow Us:</h2>
            <a href="#" class="mt-4 uppercase tracking-widest hover:text-gray-700">Twitter</a>
            <a href="#" class="mt-2 uppercase tracking-widest hover:text-gray-700">Facebook</a>
            <a href="#" class="mt-2 uppercase tracking-widest hover:text-gray-700">Instagram</a>
        </div>
    </div>
</div>
