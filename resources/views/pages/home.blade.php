@extends('layouts.master')
@section('content')
    {{-- <!-- hero section  -->
    <section class="bg-[#111] md:bg-transparent py-8 md:py-0">
        <div class="container mx-auto flex flex-col md:flex-row md:space-x-4">
            <div class="md:w-[50%] lg:w-[58%] space-y-3 lg:space-y-5 my-auto md:pl-8 px-5 ">
                <h1 class="text-white md:text-black hero-heading text-center lg:text-left">
                    HALT ALL YOUR ACADEMIC <br class="hidden lg:inline">
                    TROUBLES WITH ASSIGNMENT<br class="hidden lg:inline"> HELP UAE.
                </h1>
                <p class=" text-white md:text-black text-sm md:text-lg text-center lg:text-left font-semibold">
                    Want your assignment to be done by expert assignment writers in UAE?
                    <br>Team of our professional
                    writers is ready to help you 24/7
                </p>
                <div class="flex justify-center lg:justify-start space-x-4 ">
                    <a href="https://assignmenthelpuae.com/order" class="btn btn-primary-one">Order
                        Now</a>
                    <a href="https://assignmenthelpuae.com/order" class="btn btn-primary-three">Live chat</a>

                </div>

                <div class="absolute right-0 left-0 bg-green-circle bg-no-repeat h-full hidden lg:block -z-10">
                </div>


                <!-- <div class="absolute top-10 lg:top-[3.5rem] xl:top-[-8.5rem] 2xl:top-[-15.5rem] right-0 left-0 lg:left-[137px] xl:left-0 z-10 bg-red-circle bg-no-repeat h-[62rem] lg:h-[80rem] 2xl:h-[88rem] hidden lg:block">
               </div> -->
            </div>

            <div class=" md:w-[50%] lg:w-2/6 mt-5 lg:mt-0 items-center justify-center px-5">
                <div
                    class="mx-auto lg:mx-0 sm:max-w-sm md:max-w-md lg:max-w-lg lg:pl-4 relative text-white rounded-[2.5rem] ">
                    <div class=" text-center ">
                        <span
                            class="relative top-3 md:text-2xl text-white text-sm font-semibold  bg-red-600 p-2 md:p-2 rounded-full px-4 lg:px-10">
                            Price Calculater
                        </span>
                    </div>
                    <form class="border-2 border-red-500 rounded-[1rem] p-6  space-y-4"
                        action="https://assignmenthelpuae.com/get-fare" method="POST">
                        <input type="hidden" name="_token" value="HOxJpNngXrcmAOrLZeXORuxbFeTQWs4FZgRDl1Jl">
                        <div class="flex flex-col mt-2 md:mt-5">
                            <select name="paper_type"
                                class=" bg-gray-100 text-black   border border-primary bg-transparent rounded-full  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 md:py-2  leading-8 transition-colors duration-200 ease-in-out">
                                <option hidden="" value="0" disabled="" selected="">Paper Type</option>
                                <option value="1">Essay</option>
                                <option value="2">Term Paper</option>
                                <option value="3">Research Paper</option>
                            </select>

                        </div>

                        <div class="flex flex-col">
                            <select name="academic_level" id="academic_level"
                                class="get-fare bg-gray-100 text-black  border border-primary bg-transparent rounded-full  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 md:py-2  leading-8 transition-colors duration-200 ease-in-out">
                                <option hidden="" value="0" disabled="" selected="">High School
                                </option>
                                <option hidden="" value="0" disabled="" selected="">Academic Levels</option>
                                <option value="1">College</option>
                                <option value="2">Undergraduate</option>
                                <option value="3">Master's</option>
                                <option value="4">Ph.D.</option>
                                <option value="5">Addmission Essay</option>
                            </select>
                        </div>

                        <div class="flex flex-col">
                            <select id="deadlines" name="deadlines"
                                class="get-fare  bg-gray-100 text-black  border border-primary bg-transparent rounded-full  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 md:py-2  leading-8 transition-colors duration-200 ease-in-out">
                                <option hidden="" value="0" disabled="" selected="">Deadline</option>
                                <option value="1">20 Days</option>
                                <option value="2">15 Days</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <select name="Pages" id="no_of_pages"
                                class="get-fare  bg-gray-100 text-black  border border-primary bg-transparent rounded-full  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 md:py-2  leading-8 transition-colors duration-200 ease-in-out">
                                <option hidden="" value="0" disabled="" selected="">No of words</option>
                                <option value="1">
                                    250 Words - 1 Pages
                                </option>
                                <option value="2">
                                    500 Words - 2 Pages
                                </option>
                            </select>
                        </div>
                        <div class="flex flex-col justify-center items-center text-white ">
                            <h1>Total Price AED:</h1>
                            <div id="cost"></div>
                        </div>
                        <div class="flex justify-center items-center">
                            <a href="https://assignmenthelpuae.com/order"
                                class="w-full text-center bg-red-500 hover:bg-red-600 py-2 px-8 font-semibold rounded-full">Order
                                Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section> --}}

    <!-- Section2 -->
    <div class=" container pt-12 mx-auto px-2 lg:px-24 space-y-3">
        <h1 class=" hero-heading text-center lg:text-left">
            ASSIGNMENT HELP DUBAI IS HERE TO TAKE<br>
            CONTROL OF ALL YOUR ACADEMIC LOAD
        </h1>
        <p class=" text-primary text-center lg:text-left">
            We aim to lower your academic burden through our quality assignments. There are thousands of students who face
            difficulty in covering all of their coursework by themselves. We love to help such students who need a little
            push to achieve their desired degree. We understand how sometimes it is difficult to manage things as today's
            competitive life requires a real struggle. These are the reasons we started our best assignment writing service
            website to reach you guys. So, opt for online assignment assistance rather than worrying over it all the time.
        </p>
    </div>

    <div class="container mx-auto flex flex-col md:flex-row justify-center items-center md:space-x-2 lg:space-x-14  mt-3  ">
        <button class=" hovercircle circle-primary-two hovercircle-size-two">
            Best Price</button>


        <button class=" hovercircle circle-primary-four hovercircle-size-two">Quality papers</button>

        <button class=" hovercircle circle-primary-two hovercircle-size-two">
            Quick help</button>

        <button class="hovercircle circle-primary-two hovercircle-size-two">
            24/7 customer <br> support</button>
    </div>

    <div class="container mx-auto flex flex-col md:flex-row justify-center items-center md:space-x-64  mt-3  ">
        <button class=" hovercircle circle-primary-two hovercircle-size-two">
            Turnitin report</button>



        <button class="hovercircle circle-primary-two hovercircle-size-two">
            Expert writers</button>
    </div>
    <!-- Section2 end -->


    <!-- Writing service -->
    <div
        class=" md:h-full pt-12 mx-auto px-5 lg:px-24 space-y-3 bg-[#111111] md:bg-transparent md:bg-blackbg md:bg-no-repeat md:bg-cover md:bg-top mt-8 md:-mt-52">
        <div class="relative md:mt-72 lg:mt-96">
            <h1 class=" heading-primary text-center text-white">
                CHEAP ASSIGNMENT WRITING SERVICE UAE

            </h1>
            <p class=" text-primary text-center text-white">
                Over these years, we are making it possible for students to attain their academic goals by getting
                assistance in their assignments. Our assignment writing service is available in Dubai, Sharjah, Ajman,
                Fujairah, Abu Dhabi, and all-over UAE. Every day we work on 40+ essays to help students in their academic
                journey. We write on almost all kinds of subjects, such as marketing, supply chain, human resources, CIPD,
                nursing, medical, or engineering. Assignment help in Abu Dhabi is one of our main branches serving student’s
                need of submitting top-quality assignments. If you are thinking that this process may be hectic, let us tell
                you that it is just about few minutes. We are here to set up everything, and you need to give us the “go
                ahead” to start your work. Whether it is your dissertation, thesis, or any other essay help, we will never
                leave you alone.
            </p>

            <div class="flex justify-center space-x-4 pt-10 pb-8 md:pb-56 ">
                <a href="https://assignmenthelpuae.com/order" class="btn btn-primary-one">Order
                    Now</a>
                <a href="https://assignmenthelpuae.com/order" class="btn btn-primary-two">Live chat</a>


            </div>


            <div
                class="bg-none lg:bg-yellow-circle lg:h-full lg:bg-right lg:bg-no-repeat lg:block lg:absolute lg:top-72 lg:-right-24 lg:left-0 bottom-0 z-10 ">
            </div>

        </div>

    </div>

    <!-- All you need -->
    <div class=" container pt-4 mx-auto px-5 lg:px-24 space-y-3">
        <h1 class=" hero-heading text-center">
            ASSIGNMENT HELP DUBAI IS HERE TO TAKE<br>
            CONTROL OF ALL YOUR ACADEMIC LOAD
        </h1>
        <p class=" text-primary text-center">
            We aim to lower your academic burden through our quality assignments. There are thousands of students who face
            difficulty in covering all of their coursework by themselves. We love to help such students who need a little
            push to achieve their desired degree. We understand how sometimes it is difficult to manage things as today's
            competitive life requires a real struggle. These are the reasons we started our best assignment writing service
            website to reach you guys. So, opt for online assignment assistance rather than worrying over it all the time.
        </p>
    </div>

    <!-- Circles -->
    <div class="container mx-auto flex flex-col md:flex-row justify-center items-center md:space-x-2 lg:space-x-14  mt-3  ">
        <button class=" hovercircle circle-primary-five hovercircle-size-two">
            Best Price</button>


        <button class=" hovercircle circle-primary-six hovercircle-size-two">Quality papers</button>

        <button class=" hovercircle circle-primary-five hovercircle-size-two">
            Quick help</button>

        <button class="hovercircle circle-primary-five hovercircle-size-two">
            24/7 customer <br> support</button>
    </div>

    <!-- Services -->
    <section class="container mx-auto my-8 space-y-6 lg:px-8">
        <h1 class=" hero-heading text-center ">
            THE RANGE OF ACADEMIC SERVICES <br class="hidden sm:inline"> WE OFFER TO LIGHTEN YOUR BURDEN

        </h1>
        <p class=" text-primary text-center ">
            So what are you looking for among the following?
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 xl:grid-cols-3 py-5 ">


            <div class=" border-0 px-9 border-b-2 md:border-r-2  border-primary-two md:p-4">

                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">Writing Critical Review</h4>
                <p class="text-gray-700 text-sm mb-4">
                    Most of the students are unaware of the critical writing structure. This is why our critical writing
                    experts will leave no stone unturned, enabling you to achieve the best grades.
                </p>

            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-r-2  border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">Homework writing</h4>
                <p class="text-gray-700 text-sm mb-4">
                    Homework is not a headache now! You need to just send us the details and our expert writers would love
                    to work on your homework anytime.
                </p>
                <div class="invisible lg:visible absolute -ml-8 w-5 h-6 p-4 lg:mt-4 xl:mt-0 bg-white rounded-full "></div>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14  border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl py-3 pt-2">Coursework writing</h4>
                <p class="text-gray-700 text-sm mb-4">
                    This thing is not at all difficult for us, our coursework writing team is intelligent and smart to deal
                    with all your toughest coursework online.
                </p>
                <div class="invisible lg:visible absolute -ml-8 lg:mt-8 xl:mt-0 w-5 h-6 p-4 bg-white rounded-full "></div>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-r-2  border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">Term paper writing</h4>
                <p class="text-gray-700 text-sm mb-4">
                    Do you think it’s hard to handle your term paper now? Reach us as soon as possible and we will clear all
                    your confusion. Get it rightly done from our term paper writers.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-r-2  border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">Admission Paper writing</h4>
                <p class="text-gray-700 text-sm mb-4">
                    Do you think it’s hard to handle your term paper now? Reach us as soon as possible, and we will clear
                    all your confusion. Get it rightly done from our term paper writers.
                </p>
                <div class="invisible lg:visible absolute -ml-8 md:mt-8 lg:mt-0 w-5 h-6 p-4 bg-white rounded-full "></div>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14  border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">PPT designing</h4>
                <p class="text-gray-700 text-sm mb-4">
                    How your presentation is designed does impact your confidence. We at Assignment help UAE design
                    presentations that are highly professional and appealing.
                </p>
                <div class="invisible lg:visible absolute -ml-8 w-5 h-6 p-4 bg-white rounded-full "></div>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-b-0 md:border-r-2 md:p-4 border-primary-two">

                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">Thesis writing</h4>
                <p class="text-gray-700 text-sm mb-4">
                    The thesis is one of the backbones of the degree which you are pursuing. It is one of the extended
                    research on your major subjects. Our specialized writers in your subject will let you get your degree
                    soon.
                </p>
            </div>

            <div class="border-0 px-9 border-b-2 sm:px-14 md:border-b-0 md:border-r-2 border-primary-two md:p-4">
                <h4 class="text-primary-one font-bold text-xl py-3 pt-2">Case study writing</h4>
                <p class="text-gray-700 text-sm mb-4">
                    A case study is not just about answering the question but the implication of appropriate theories and
                    points when required. Here we know the tricks and tips to work on your case study expertly.
                </p>
            </div>

            <div class="border-0 px-9 sm:px-14 md:p-4">

                <h4 class="text-primary-one font-bold text-xl pb-3 pt-2">Dissertation writing</h4>
                <p class="text-gray-700 text-sm mb-4">
                    Are you an undergraduate or Master’s Law student? Get in contact with our finest legal writers to get
                    the perfect solution for your assignments.
                    This is another lengthiest part of your qualification process, and it requires a lot of stamina to deal
                    with. Don’t worry! Our writers keep on doing this everyday act will let you get your degree soon.
                </p>
            </div>

        </div>

        <div class="container mx-auto flex flex-col md:flex-row justify-center items-center md:space-x-7 lg:space-x-36  ">
            <button class=" hovercircle circle-primary-three hovercircle-size-one">
                <img class="h-20 mx-auto" src="../imgs/phon.png" alt="">
                <p class="text-xl text-center text-primary-two">+ 11233-133-134</p>
                <p class="text-black pt-2 md:p-2 text-lg">Call Toll Free</p>
            </button>

            <button class=" hovercircle circle-primary-three hovercircle-size-one">
                <img class="h-20 mx-auto" src="../imgs/mouse.png" alt="">
                <p class="text-xl text-center text-primary-two">+ 11233-133-134</p>
                <p class="text-black pt-2 md:p-2 text-lg">Call Toll Free</p>
            </button>

            <button class=" hovercircle circle-primary-three hovercircle-size-one">
                <img class="h-20 mx-auto" src="../imgs/chat.png" alt="">
                <p class="text-xl text-center text-primary-two">+ 11233-133-134</p>
                <p class="text-black pt-2 md:p-2 text-lg">Call Toll Free</p>
            </button>
        </div>

        <div class="flex justify-center space-x-4 pt-10 ">
            <a href="https://assignmenthelpuae.com/order" class="btn btn-primary-one md:w-72">View All Services</a>
        </div>
    </section>

    <div class="absolute right-0 left-0 bg-green-circle bg-no-repeat h-full hidden lg:block ">
    </div>

    <section class="relative">
        <div class="container mx-auto my-16 space-y-6 px-4 lg:px-48">
            <h1 class=" hero-heading text-center ">
                Assignment help in Abu Dhabi <br class="hidden sm:inline"> – Grasp with the best writers in Town

            </h1>
            <p class=" text-primary text-center ">
                We know that what trouble our clients face and why they look for someone to help in their assignments. This
                is the reason we keep ourselves the time alert regarding your needs. We provide instant assignment help UAE
                to make you feel relax, at the time when you have no more days for the deadline. Our objective is to never
                leave you feel helpless with your assignment submission.
            </p>

            <p class="text-primary text-center"> Moreover, we understand that quality shouldn’t be affected when time is
                short, so we maintain the standard to deliver the best. We find this easy because the writers here is
                consistent and ready all the time to address your issues. Still, if you have any query related to our
                services, feel free to contact us assignment writing service in UAE is always there for you!
            </p>
            <ul class="flex justify-center">
                <li class="my-auto text-cyan-600">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                        class="w-7 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                        </path>
                    </svg>
                </li>
                <li class="my-auto">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                        class="w-7 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                        </path>
                    </svg>
                </li>
                <li class="my-auto">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                        class="w-7 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                        </path>
                    </svg>
                </li>
                <li class="my-auto">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                        class="w-7 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                        </path>
                    </svg>
                </li>
                <li class="my-auto">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-7 text-yellow-500"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor"
                            d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                        </path>
                    </svg>
                </li>
            </ul>
            <p class="text-xl text-center font-bold text-primary-one"> Increasing Rating Of 4.8/5 </p>
        </div>

        <div
            class="bg-none lg:bg-yellow-circle lg:h-full lg:bg-right lg:bg-no-repeat lg:block lg:absolute lg:top-72 lg:right-0 lg:left-0 bottom-0 z-10 ">
        </div>
    </section>


    <!-- Form -->
    <div
        class=" md:h-full pt-12 pb-8 md:pb-52 mx-auto px-5 lg:px-24 space-y-3 bg-[#111111] md:bg-transparent md:bg-blackimg md:bg-no-repeat md:bg-cover md:bg-top mt-8 md:-mt-52">

        <div class=" md:pt-72 lg:pt-96 lg:px-28">
            <p class=" hero-heading text-center text-white pb-4">
                Meet Your Deadline With The Help of Our Urgent <br class="hidden sm:inline">
                Essay Writing Service And Get Outstanding Grades Now!

            </p>

            <form class="grid grid-cols-1 md:grid-cols-2 gap-x-2 gap-y-2">
                <div class="w-full">
                    <input type="text" name="name"
                        class="w-full text-gray-700 rounded-full border border-gray-300 bg-transparent  focus:border-primary-two focus:ring-2 focus:ring-purple-200 outline-none px-3 leading-8 transition-colors duration-200 ease-in-out "
                        placeholder="Full Name" value="">
                </div>

                <div class="w-full">
                    <input type="email" name="email"
                        class="w-full text-gray-700 rounded-full border border-gray-300 bg-transparent  focus:border-primary-two focus:ring-2 focus:ring-purple-200 outline-none px-3 leading-8 transition-colors duration-200 ease-in-out  "
                        placeholder="Email" value="">
                </div>

                <div class="w-full md:col-span-2">
                    <input type="phone" name="phone"
                        class="w-full text-gray-700 rounded-full border border-gray-300 bg-transparent  focus:border-primary-two focus:ring-2 focus:ring-purple-200 outline-none px-3 leading-8 transition-colors duration-200 ease-in-out  "
                        placeholder="Phone" value="">
                </div>

                <div class=" md:col-span-2 text-center mt-4">
                    <div class="flex flex-col md:flex-row lg:space-x-4 justify-center">


                        <a href="https://assignmenthelpuae.com/order" class="btn btn-primary-two ">Send</a>

                    </div>

                </div>

            </form>

        </div>

    </div>

    <!-- FAQ -->
    <section class="container mx-auto md:-mt-36 2xl:-mt-2">
        <div class="my-6 md:my-16 space-y-6 px-4 lg:px-48">
            <p class=" hero-heading text-center "> FAQ </p>

            <p class="text-primary text-center"> Your concerns are justified and we answer them all before you ask us,
                Throughout our experience, we came to a list of questions that customers keep on asking. We have presented
                here a few of them so you can get an instant answer.

                Still, if you are confused, you can contact us through chat or WhatsApp to know further details </p>
        </div>

        <div class=" px-4 md:px-7 lg:px-28 space-y-1">

            <div class="content border-b-2 " data-no="0">
                <div class="questions cursor-pointer flex p-3 font-bold text-primary-one mb-1 active" data-no="0">
                    <div class="heading w-3/4">
                        <h4 class=" md:text-xl text-lg md:font-semibold">Are your writers are qualified?</h4>
                    </div>
                    <div class="icons text-right w-1/4">
                        <i class="fa fa-minus-square text-2xl"></i>
                    </div>
                </div>
                <p class="openSlide text-primary pb-3 px-4" id="openSlide0">Definitely yes! Our writers are not
                    only well-educated but also experienced and knowledgeable about working in different kinds of papers.
                </p>
            </div>

            <div class="content border-b-2 " data-no="1">
                <div class="questions cursor-pointer flex p-3 font-bold text-primary-one mb-1 active" data-no="1">
                    <div class="heading w-3/4 ">
                        <h4 class=" md:text-xl text-lg md:font-semibold">What if I have low satisfaction with your
                            work?</h4>
                    </div>
                    <div class="icons w-1/4 text-right">
                        <i class="fa fa-plus-square text-2xl"></i>
                    </div>
                </div>
                <p class="openSlide text-primary pb-3 px-4" id="openSlide1" style="display: none;">What happens is,
                    sometimes human error does occur but this only happens once in a blue moon, and we always offer revision
                    and
                    correction at the same time.</p>
            </div>

            <div class="content border-b-2 " data-no="2">
                <div class="questions cursor-pointer flex p-3 font-bold text-primary-one mb-1 active" data-no="2">
                    <div class="heading w-3/4 ">
                        <h4 class=" md:text-xl text-lg md:font-semibold">Do you have command on various topics?</h4>
                    </div>
                    <div class="icons w-1/4 text-right">
                        <i class="fa fa-plus-square text-2xl"></i>
                    </div>
                </div>
                <p class="openSlide text-primary pb-3 px-4" id="openSlide2" style="display: none;">As mentioned earlier,
                    we have command over hundreds of topics and subjects. We work hard to deliver the quality that never
                    leaves
                    you unsatisfied. </p>
            </div>

            <div class="content border-b-2 " data-no="3">
                <div class="questions cursor-pointer flex p-3 font-bold text-primary-one mb-1 active" data-no="3">
                    <div class="heading w-3/4 ">
                        <h4 class=" md:text-xl text-lg md:font-semibold">Why should I choose your company as there
                            are many agencies for assignment writing help in Dubai?</h4>
                    </div>
                    <div class="icons w-1/4 text-right">
                        <i class="fa fa-plus-square text-2xl"></i>
                    </div>
                </div>
                <p class="openSlide text-primary pb-3 px-4" id="openSlide3" style="display: none;">You know what, we can
                    commit that we are serious, dedicated, and honest. Our policy is to multiply customers through referrals
                    and
                    reviews. So never think about getting anything you won't be liking. </p>
            </div>

            <div class="content border-b-2 " data-no="4">
                <div class="questions cursor-pointer flex p-3 font-bold text-primary-one mb-1 active" data-no="4">
                    <div class="heading w-3/4 ">
                        <h4 class=" md:text-xl text-lg md:font-semibold">How do I confirm that I will get my
                            assignment on time? </h4>
                    </div>
                    <div class="icons w-1/4 text-right">
                        <i class="fa fa-plus-square text-2xl"></i>
                    </div>
                </div>
                <p class="openSlide text-primary pb-3 px-4" id="openSlide2" style="display: none;">
                    Deadlines are the most crucial part here, we understand that if students miss the deadline then there is
                    no
                    use of payment or asking for help. Thus, we never even think of missing your deadlines. </p>
            </div>

            <div class="content border-b-2 " data-no="5">
                <div class="questions cursor-pointer flex p-3 font-bold text-primary-one mb-1 active" data-no="5">
                    <div class="heading w-3/4 ">
                        <h4 class=" md:text-xl text-lg md:font-semibold">If I didn’t get my assignment on time, will
                            you refund me?</h4>
                    </div>
                    <div class="icons w-1/4 text-right">
                        <i class="fa fa-plus-square text-2xl"></i>
                    </div>
                </div>
                <p class="openSlide text-primary pb-3 px-4" id="openSlide2" style="display: none;">
                    Of course, we always refund the amount but first. We ask for an extension, if our client can corporate
                    with
                    us in rare cases. Otherwise, we hardly skip any deadline.</p>
            </div>

        </div>
        <div class="absolute right-0 left-0 bg-green-circle bg-no-repeat h-full hidden lg:block -z-10">
        </div>
        <div class=" my-16 space-y-6 px-4 lg:px-48">
            <p class=" hero-heading text-center ">
                KNOCK THE DOOR OF PERFECTION WITH <br class="hidden lg:inline"> ASSIGNMENT HELP IN ABU DHABI

            </p>
            <p class=" text-primary text-center ">
                You may find many online assignment services, but we assure you that you will find the best customer support
                and quality of work here. We aim to achieve maximum numbers of happy customers and this is why we have 98%
                of returning clients rate who trust our services blindly. Obviously, in case of any negligence,
                misunderstanding, or bad time, if ever we fail to provide better services we never step back for the
                corrections.
            </p>
            <p class="text-primary text-center">
                Help in assignment writing wasn’t that effective before, we listen to your queries and take your problems as
                it’s ours. Our writers are responsible and are highly capable of writing the best content you want for your
                academic papers. The years of experience in writing let us build strong relationships with our clients.
                Hence, without giving it a second thought click on the WhatsApp icon and get in touch with us.
            </p>
            <div class="flex justify-center ">
                <a href="https://assignmenthelpuae.com/order" class="btn btn-primary-two">Show More</a>
            </div>

        </div>
    </section>
@endsection
