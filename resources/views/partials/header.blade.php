<header class="relative">
    <div
        class="h-screen -z-10 bg-hero-pattern bg-no-repeat bg-center bg-cover absolute hidden md:block md:h-[51rem] md:top-[-0.5rem] md:right-0 md:left-0 ">
    </div>
    <div class="pb-3 lg:pb-10">
        <!-- Navbar goes here -->
        <div class="w-full text-gray-700 bg-transparent dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-8">
                <div class=" flex flex-row items-center justify-between">
                    <a class="flex items-center py-4 px-2" href="#">
                        <img src="../imgs/logo.png" alt="Logo" class="h-24 mt-3">
                    </a>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" style="display: none;"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{'flex': open, 'hidden': !open}"
                    class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">

                    <a href="{{ route('home') }}"
                        class="block font-semibold text-primary-two hover:text-primary-one py-2 md:mx-2 px-5 md:px-0 md:my-auto lg:px-5">Home</a>

                    <a href="{{ route('order') }}"
                        class="block font-semibold text-primary-two hover:text-primary-one py-2 md:mx-2 px-5 md:px-0 md:my-auto lg:px-5">Order</a>

                    <a href="#"
                        class="block font-semibold text-primary-two hover:text-primary-one py-2 md:mx-2 px-5 md:px-0 md:my-auto lg:px-5">Pricing</a>

                    <a href="#"
                        class="block font-semibold text-primary-two hover:text-primary-one py-2 md:mx-2 px-5 md:px-0 md:my-auto lg:px-5">Samples</a>

                    <a href="#"
                        class="block font-semibold text-primary-two hover:text-primary-one py-2 md:mx-2 px-5 md:px-0 md:my-auto lg:px-5">Contact</a>



                    <div
                        class="flex flex-col md:flex-row  md:items-center my-3 mx-3 lg:my-0 md:space-x-1 space-y-2 md:space-y-0 ">
                        <a href="#" class="btn btn-primary-one rounded-md">
                            Order Now
                        </a>

                    </div>
                </nav>
            </div>
        </div>

    </div>
</header>

<!-- hero section  -->
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
                <form class="border-2 border-red-500 rounded-[1rem] p-6  space-y-4" action="{{ route('get.fare') }}"
                    method="POST">
                    @csrf
                    <input type="hidden" name="paper_type" value="HOxJpNngXrcmAOrLZeXORuxbFeTQWs4FZgRDl1Jl">
                    <div class="flex flex-col mt-2 md:mt-5">
                        <select name="paper_type"
                            class=" @error('paper_type') border-red-600 @enderror bg-gray-100 text-black   border border-primary bg-transparent rounded-full  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 md:py-2  leading-8 transition-colors duration-200 ease-in-out">
                            <option hidden="" value="0" disabled="" selected="">Paper Type</option>
                            {{-- <option value="1">Essay</option>
                            <option value="2">Term Paper</option>
                            <option value="3">Research Paper</option>
                            @foreach ($paper_types as $paper_type) --}}
                            @foreach ($paper_types as $paper_type)
                            <option {{ old('paper_type') == $paper_type->id ? 'selected' : '' }}
                                    value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                            @endforeach
                            @error('paper_type')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </select>

                    </div>

                    <div class="flex flex-col">
                        <select name="academic_level" id="academic_level"
                            class="get-fare @error('academic_level') border-red-600 @enderror get-fare bg-gray-100 text-black  border border-primary bg-transparent rounded-full  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 md:py-2  leading-8 transition-colors duration-200 ease-in-out">
                            <option hidden="" value="0" disabled="" selected="">High School
                            </option>
                            @foreach ($academic_levels as $academic_level)
                                <option {{ old('academic_level') == $academic_level->id ? 'selected' : '' }}
                                    value="{{ $academic_level->id }}">{{ $academic_level->name }}</option>
                            @endforeach
                            @error('academic_level')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <select id="deadline" name="deadlines"
                            class="get-fare @error('deadlines') border-red-600 @enderror get-fare  bg-gray-100 text-black  border border-primary bg-transparent rounded-full  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 md:py-2  leading-8 transition-colors duration-200 ease-in-out">
                            <option hidden="" value="0" disabled="" selected="">Deadline</option>
                            @foreach ($deadlines as $deadline)
                                <option {{ old('deadline') == $deadline->id ? 'selected' : '' }}
                                    value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                            @endforeach
                            @error('deadlines')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </select>
                    </div>
                    <div class="get-fare flex flex-col">
                        <select name="Pages" id="no_of_pages"
                            class="get-fare @error('Pages') border-red-600 @enderror  bg-gray-100 text-black  border border-primary bg-transparent rounded-full  focus:border-pink-500 focus:ring-2 focus:ring-red-200 text-base outline-none py-2 px-3 md:py-2  leading-8 transition-colors duration-200 ease-in-out">
                            <option hidden="" value="0" disabled="" selected="">No of words</option>
                            @for ($p = 1; $p <= 200; $p++)
                                <option value="{{ $p }}"
                                    {{ old('number_of_pages') == $p ? 'selected' : '' }}>
                                    {{ $p * 250 }} Words - {{ $p }} Pages
                                </option>
                            @endfor
                        </select>
                        @error('number_of_pages')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
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

</section>
@section('scripts')
    <!-- Initialize Swiper -->
    <script>
        $(".get-fare").change(function(e) {
            e.preventDefault();
            var data = {
                "_token": "{{ csrf_token() }}",
                "deadline_id": $('#deadline').val(),
                "academic_level_id": $('#academic_level').val(),
            }
            $.ajax({
                method: 'POST',
                url: '{{ route('get.fare') }}',
                beforeSend: function() {
                    // $("#cost-per-page").html("Loading...")
                    const loading =
                        '<svg class="inline-block " width="50px" height="50px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#771818"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#FF9600"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'

                    $("#cost").html(loading)
                },
                complete: function() {
                    // $("#loading").removeClass("d-block");
                },
                data: data,
                success: function(res) {
                    console.log(res);
                    $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ? 1 : $("#no_of_pages").val())))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection
