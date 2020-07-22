@extends('_layouts.master')

@section('body')
    <div
        class="pt-64 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/programs-hero.jpg')"
    >
        <div class="container py-6 text-white bg-black-semi-9">
            <h1 class="text-3xl leading-none md:text-5xl">Alliance of Civically Engaged Students (ACES)</h1>
        </div>
    </div>
    <div class="container pt-8 pb-24">
        <div class="-mx-4 flex flex-wrap lg:-mx-16">
            <div class="w-full px-4 md:w-1/3 lg:w-1/5 lg:px-16">
                <div class="sticky top-0 flex flex-col py-8 text-gray-600">
                    <a class="px-2 leading-tight text-gray-900 border-l-2 border-red-600 transition-colors duration-300 hover:text-gray-900" href="#program-details">Program Details</a>
                    <a class="mt-3 px-2 leading-tight border-l-2 border-transparent transition-colors duration-300 hover:text-gray-900" href="#welcome-week-training">Welcome Week Training</a>
                    <a class="mt-3 px-2 leading-tight border-l-2 border-transparent transition-colors duration-300 hover:text-gray-900" href="#upper-class-aces-students">Upper-class ACES students</a>
                    <a class="mt-3 px-2 leading-tight border-l-2 border-transparent transition-colors duration-300 hover:text-gray-900" href="#awards">Awards</a>
                    <a class="mt-3 px-2 leading-tight border-l-2 border-transparent transition-colors duration-300 hover:text-gray-900" href="#role-and-positions">Roles & Positions</a>
                    <a class="mt-3 px-2 leading-tight border-l-2 border-transparent transition-colors duration-300 hover:text-gray-900" href="#apply">Apply</a>
                    <a class="mt-3 px-2 leading-tight border-l-2 border-transparent transition-colors duration-300 hover:text-gray-900" href="#contact-us">Contact us</a>
                </div>
            </div>
            <div class="w-full py-8 px-4 md:w-2/3 lg:w-4/5 lg:px-16">
                <div class="prose max-w-3xl">
                    <p class="lead">The Northeastern University Alliance of Civically Engaged Students serves community nonprofit organizations throughout Boston. ACES students commit to volunteering regularly in local organizations, where they build leadership skills and provide sustained service in their communities throughout their undergraduate careers.</p>
                    <h2 id="program-details">Program Details</h2>
                    <p>As you might imagine, these free spaces get reserved quickly. We recommend that you submit the online Event Space Request form as early as possible before your event. Our staff responds to these requests on a rolling basis, although we try to reply within two business days. Currently, we are fulfilling reservations up to three months in advance.</p>
                    <p>The two spaces available are the conference room (capacity: 12 people) and classroom (capacity: 40 people). Both rooms have modular furniture that can be rearranged or removed as necessary. They also have overhead audio/visual equipment that can be connected to laptop computers via HDMI cables.</p>
                    <p>Please note the following guidelines regarding reservations at Northeastern Crossing:</p>
                </div>
                <div class="mt-8 px-8 py-12 bg-gray-200">
                    <div class="-mx-4 flex flex-wrap items-center">
                        <div class="prose w-full p-4 lg:w-2/3">
                            <h3>Program fee</h3>
                            <p>The ACES program fee is $300 per student, which covers the costs of meals and activities during Welcome Week. If a student can’t afford the program fee, they may reach out to ACES staff to discuss alternatives.</p>
                        </div>
                        <div class="flex justify-center w-full p-4 lg:w-1/3">
                            <a href="#" class="w-2/3 btn text-white bg-red-600 hover:bg-red-800">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="mt-16 prose max-w-3xl">
                    <h2 id="benefits">Benefits</h2>
                    <p>ACES offers students social and professional development opportunities, including:</p>
                </div>
                <div class="mt-8 -mx-4 flex flex-wrap items-stretch">
                    <div class="w-1/2 h-full flex flex-col items-center justify-start p-4 text-gray-700 text-center md:w-1/3 lg:w-1/4">
                        <div class="h-24 flex items-center justify-center">
                            <svg class="text-gray-900 w-16 h-16" viewBox="0 0 69 52">
                                <path d="M30.24 50.9h0-.01a2.92 2.92 0 01-.16-.01 5 5 0 01-1.85-.5c-.5-.25-1-.62-1.37-1.18a4.09 4.09 0 01-.62-2.33c0-2.07 1.04-6.27 4.2-9.96 3.15-3.67 8.4-6.83 16.86-6.83 8.45 0 13.7 3.16 16.86 6.83 3.15 3.69 4.2 7.9 4.2 9.96 0 1.03-.26 1.78-.63 2.33a3.5 3.5 0 01-1.36 1.18 5 5 0 01-1.98.5h-.02-.02 0-34.1zm0 0v.25-.25zm.05-3.77h33.98a1.58 1.58 0 00.07 0h.22v-.02h-.18.02l.19-.05v-.2c-.01-1.18-.74-4.5-3.3-7.49-2.4-2.81-6.61-5.52-14-5.52-7.4 0-11.6 2.71-14 5.52-2.57 2.99-3.3 6.32-3.3 7.5v.2l.2.04s0 0 0 0h-.18v.01h.24l.04.01zm-5.6-16.9h0c1.61.14 3.2.45 4.74.9a22.73 22.73 0 00-3.26 3.22 19.81 19.81 0 00-4.7 12.53 9.79 9.79 0 00.78 4.02H4.66c-1.38 0-2.37-.35-3.02-1-.64-.64-.99-1.63-.99-3.02 0-2.07 1.05-6.27 4.2-9.96 3.15-3.67 8.4-6.83 16.86-6.83h0c1 0 2 .04 2.99.14zm-3.1 4l.25-.39h-.47c-7.18.1-11.29 2.77-13.66 5.53-2.58 3-3.3 6.34-3.3 7.51v.25H17.7v-.25c0-4.4 1.36-8.79 3.88-12.65zm25.7-12.67a8.77 8.77 0 100-17.55 8.77 8.77 0 000 17.55zm12.53-8.77a12.54 12.54 0 11-25.07 0 12.54 12.54 0 0125.07 0zM7.05 14.92a12.54 12.54 0 1125.07 0 12.54 12.54 0 01-25.07 0zm12.53-8.78a8.77 8.77 0 100 17.55 8.77 8.77 0 000-17.55z" fill="#000" stroke="#fff" stroke-width=".5"/>
                            </svg>
                        </div>
                        <p class="mt-4">Monthly ACES meetings with other ACES first-year students and upper-class mentors</p>
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-center justify-start p-4 text-gray-700 text-center md:w-1/3 lg:w-1/4">
                        <div class="h-24 flex items-center justify-center">
                            <svg class="text-gray-900 w-16 h-16" viewBox="0 0 50 56">
                                <path d="M11.08 23h.5V6a5 5 0 015-5h27.5a5 5 0 015 5v46.75A2.25 2.25 0 0146.83 55h-44a2.25 2.25 0 01-2.25-2.25V28a5 5 0 015-5h5.5zm-5.5 4.5h-.5v23h17.5v-23h-17zm38.5 23h.5v-45h-28.5V23h6a5 5 0 015 5v22.5h17z" fill="#000" stroke="#fff"/>
                                <path d="M22.58 12h4.5v4.5h-4.5V12zm11 0h4.5v4.5h-4.5V12zm0 11.09h4.5v4.41h-4.5v-4.41zm0 10.91h4.5v4.5h-4.5V34zm-22 0h4.5v4.5h-4.5V34z" fill="#000" stroke="#fff"/>
                            </svg>
                        </div>
                        <p class="mt-4">Free or low-cost group events and trips in the greater Boston area</p>
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-center justify-start p-4 text-gray-700 text-center md:w-1/3 lg:w-1/4">
                        <div class="h-24 flex items-center justify-center">
                            <svg class="text-gray-900 w-16 h-16" viewBox="0 0 43 43">
                                <path d="M41.27 3.88h-9.03V.45c0-.24-.2-.43-.43-.43h-3c-.24 0-.43.19-.43.43v3.43H14.63V.45c0-.24-.2-.43-.43-.43h-3.01c-.24 0-.43.19-.43.43v3.43H1.73C.78 3.88.02 4.65.02 5.6v35.67c0 .95.76 1.71 1.71 1.71h39.54c.95 0 1.71-.76 1.71-1.71V5.6c0-.95-.76-1.72-1.71-1.72zm-2.15 35.24H3.88V18.7h35.24v20.4zM3.88 15.05v-7.3h6.88v2.58c0 .23.2.43.43.43h3c.24 0 .44-.2.44-.43V7.75h13.74v2.58c0 .23.2.43.43.43h3.01c.24 0 .43-.2.43-.43V7.75h6.88v7.3H3.88z" fill="#000"/>
                            </svg>
                        </div>
                        <p class="mt-4">Networking events and resumé workshops</p>
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-center justify-start p-4 text-gray-700 text-center md:w-1/3 lg:w-1/4">
                        <div class="h-24 flex items-center justify-center">
                            <svg class="text-gray-900 w-16 h-16" viewBox="0 0 51 51">
                                <path d="M24.3161 34.8747V34.6224C24.3271 34.6239 24.3381 34.6254 24.3491 34.6269L24.3161 34.8747ZM24.3161 34.8747C24.2315 34.8634 24.1482 34.8509 24.0661 34.8374V34.8747H24.3161ZM20.0983 31.3855C20.0642 31.1692 19.8706 31.0098 19.6487 31.0098H17.019C16.7514 31.0098 16.5408 31.2375 16.5636 31.505C16.8198 34.6356 19.1933 37.5157 24.2592 37.8857V39.673C24.2592 39.9234 24.4641 40.1283 24.7145 40.1283H26.331C26.5815 40.1283 26.7864 39.9234 26.7864 39.6673L20.0983 31.3855ZM26.5364 39.6679C26.5361 39.7877 26.4412 39.8783 26.331 39.8783H24.7145C24.6021 39.8783 24.5092 39.7854 24.5092 39.673V37.8857V37.6533L24.2774 37.6364C21.7889 37.4546 19.9862 36.6587 18.777 35.5466C17.5682 34.4348 16.9361 32.9923 16.8128 31.4846L16.8127 31.4838C16.8024 31.3629 16.8972 31.2598 17.019 31.2598H19.6487C19.7535 31.2598 19.8373 31.3354 19.8514 31.4245L19.8515 31.4251C20.0056 32.3861 20.4594 33.2285 21.2098 33.8726C21.958 34.5149 22.9885 34.9497 24.283 35.1225L24.5661 35.1603V34.8747V26.7522V26.558L24.3779 26.51L22.9719 26.1514L22.972 26.1514L22.9683 26.1505C21.5067 25.8012 20.0994 25.1751 19.0609 24.1817C18.0288 23.1944 17.3487 21.8336 17.3487 19.9788C17.3487 17.9715 18.1072 16.4458 19.3432 15.3697C20.5856 14.2881 22.3272 13.647 24.3062 13.4542L24.5319 13.4322V13.2054V11.327C24.5319 11.2146 24.6249 11.1217 24.7373 11.1217H26.3367C26.4491 11.1217 26.5421 11.2146 26.5421 11.327V13.1883V13.4144L26.767 13.437C30.586 13.8217 33.3763 16.0352 33.7093 19.4264C33.7191 19.5505 33.6205 19.6548 33.5029 19.6548H30.9472C30.8417 19.6548 30.758 19.5798 30.7456 19.481L30.7452 19.4781C30.5001 17.6884 29.0599 16.2605 26.8032 15.9516L26.5193 15.9128V16.1993V23.8436V24.0422L26.7127 24.0872L28.1551 24.4222C28.1557 24.4223 28.1563 24.4225 28.1569 24.4226C29.9816 24.8733 31.4815 25.528 32.5248 26.5325C33.5595 27.5286 34.1665 28.8895 34.1693 30.8053C34.1692 32.8767 33.4009 34.4729 32.1042 35.6033C30.8011 36.7393 28.9456 37.4207 26.7531 37.6139L26.5236 37.6341L26.525 37.8645L26.5364 39.6673C26.5364 39.6675 26.5364 39.6677 26.5364 39.6679ZM24.2417 23.4977L24.5604 23.5888V23.2574V16.1993V15.9156L24.2789 15.9513C23.1909 16.0895 22.2206 16.4654 21.5182 17.0946C20.8099 17.729 20.3891 18.6081 20.3891 19.7113C20.3891 20.4901 20.6315 21.19 21.1356 21.7853C21.6354 22.3756 22.3807 22.8496 23.3673 23.2063C23.6449 23.3183 23.9207 23.406 24.2417 23.4977ZM26.5193 34.8917V35.165L26.7915 35.1408C28.0417 35.0292 29.1219 34.6267 29.8936 33.9425C30.6705 33.2537 31.1175 32.2938 31.1175 31.1123C31.1175 30.1905 30.8766 29.4031 30.2616 28.7414C29.6553 28.0891 28.7072 27.583 27.343 27.1676L27.3321 27.1643L27.3208 27.162C27.1627 27.1293 27.0097 27.0911 26.839 27.0415L26.5193 26.9487V27.2816V34.8917ZM0.25 25.5C0.25 11.5562 11.5562 0.25 25.5 0.25C39.4438 0.25 50.75 11.5562 50.75 25.5C50.75 39.4438 39.4438 50.75 25.5 50.75C11.5562 50.75 0.25 39.4438 0.25 25.5ZM4.07589 25.5C4.07589 37.3294 13.6706 46.9241 25.5 46.9241C37.3294 46.9241 46.9241 37.3294 46.9241 25.5C46.9241 13.6706 37.3294 4.07589 25.5 4.07589C13.6706 4.07589 4.07589 13.6706 4.07589 25.5Z" fill="black" stroke="white" stroke-width="0.5"/>
                            </svg>
                        </div>
                        <p class="mt-4">Full or partial scholarships for Alternative Spring Break service trips</p>
                    </div>
                </div>
                <div id="welcome-week-training" class="mt-16 -mb-20 mx-auto prose max-w-3xl">
                    <img src="/assets/images/programs-aces-training-week.jpg" alt="Training week">
                </div>
                <div class="px-8 pt-32 pb-16 bg-gray-200">
                    <div class="prose max-w-3xl mx-auto text-gray-900">
                        <h2>Welcome Week Training</h2>
                        <p>ACES Welcome Week runs from Monday to Friday, 8 a.m. to 9 p.m. daily, the week before fall semester begins. ACES students can move into their fall housing the weekend before Welcome Week. Northeastern waives the early move-in fee for ACES Welcome Week students.</p>
                        <p>We place students in teams of 10 for Welcome Week: eight first-year students and two upper-class Team Leaders. ACES teams participate in a program orientation, community tours, panels, workshops, and teambuilding and service projects to prepare for their year of service. ACES Welcome Week days are full days, and students must be available to participate in the entire program.</p>
                        <p>Honors Welcome Week—the orientation program for Northeastern’s honors students—begins the Friday afternoon before fall semester, and therefore, overlaps with one day of ACES Welcome Week. Honors Program students will be excused from ACES Welcome Week to attend Honors Welcome Week activities on Friday afternoon. They can return for the ACES Welcome Week closing ceremony and dinner.  </p>
                    </div>
                </div>
                <div class="mt-16 -mx-4 flex flex-wrap items-center">
                    <div class="w-full p-4 prose max-w-3xl md:w-1/2 lg:w-2/3">
                        <h2 id="upper-class-aces-students">Upper-class ACES students</h2>
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
                    </div>
                    <div class="w-full p-4 md:w-1/2 lg:w-1/3">
                        <div class="prose p-8 text-gray-900 bg-gray-200">
                            <p>Upper-class ACES volunteers are expected to manage their own service partnerships and should contact organizations directly to determine if those organizations want to host student volunteers. ACES staff can assist.</p>
                            <p>For more information about participating in ACES as an upper-class student, contact <a href="mailto:communityservice@northeastern.edu">communityservice@northeastern.edu</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection