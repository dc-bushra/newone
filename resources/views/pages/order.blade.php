@extends('layouts.master')
@section('content')
    <section class=" opacity-90">
        <h4 class="page-bar">
            Order Now
        </h4>
        <div class="container md:px-5 pt-3 pb-20  mx-auto">
            <div class="flex flex-col md:px-12 w-full ">
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <div class=" p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 ">
                        <div class="flex flex-wrap ">
                            <div class=" px-1 mb-3 w-full md:w-1/2 lg:w-1/3 ">

                                <label class="form-label">Paper Topic:</label>
                                <input type="text" name="paper_topic"
                                    class=" @error('paper_topic') border-red-600 @enderror form-control" value=""
                                    placeholder="Paper Topic">
                                @error('paper_topic')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label class="form-label">Paper Type:</label>
                                <select name="paper_type"
                                    class="@error('paper_type') border-red-600 @enderror form-control">
                                    <option hidden="" value="0" disabled="" selected="">Paper Type</option>
                                    @foreach ($paper_types as $paper_type)
                                        <option {{ old('paper_type') == $paper_type->id ? 'selected' : '' }}
                                            value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                                    @endforeach
                                </select>
                                @error('paper_type')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label class="form-label">Urgency:</label>
                                <select name="deadline" id="deadline" class="get-fare @error('deadline') border-red-600 @enderror  form-control">
                                    <option hidden="" value="0" disabled="" selected="">Deadline</option>
                                    @foreach ($deadlines as $deadline)
                                        <option {{ old('deadline') == $deadline->id ? 'selected' : '' }}
                                            value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                                    @endforeach
                                </select>
                                @error('deadline')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label class="form-label">Style:</label>
                                <select name="style" class="@error('style') border-red-600 @enderror form-control ">
                                    <option hidden="" value="0" disabled="" selected="">Styles</option>
                                    @foreach ($reference_styles as $style)
                                        <option {{ old('reference_styles') == $style->id ? 'selected' : '' }}
                                            value="{{ $style->id }}">{{ $style->name }}</option>
                                    @endforeach
                                </select>
                                @error('style')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label class="form-label">Language:</label>
                                <select name="language" class="form-control ">
                                    <option hidden="" value="" disabled="" class="" selected="">Language
                                    </option>
                                    <option value="EN">English</option>
                                    <option value="SQ">Albanian</option>
                                    <option value="AR">Arabic</option>
                                </select>
                            </div>
                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label class="form-label">Number of References:</label>
                                <select name="reference" class="@error('reference') border-red-600 @enderror form-control ">
                                    <option hidden="" value="0" disabled="" selected="">References</option>
                                    @for ($i = 1; $i <= 20; $i++)
                                        <option value="{{ $i }}"
                                            {{ old('reference') == $i ? 'selected' : '' }}> {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                @error('reference')
                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label class="form-label">High School:</label>
                                <select name="academic_level" id="academic_level"
                                    class="get-fare @error('academic_level') border-red-600 @enderror form-control ">
                                    <option hidden="" value="0" disabled="" selected="">Choose any option</option>
                                    @foreach ($academic_levels as $academic_level)
                                        <option {{ old('academic_level') == $academic_level->id ? 'selected' : '' }}
                                            value="{{ $academic_level->id }}">{{ $academic_level->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="px-1 mb-3 w-full md:w-1/2 lg:w-1/3">
                                <label class="form-label">Pages</label>
                                <select name="number_of_pages" id="no_of_pages" class="get-fare form-control ">
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

                            <div class=" px-1 mb-3 w-full lg:w-1/3">
                                <label class="form-label">Subject:</label>
                                <select name="subject" class="form-control ">
                                    <option hidden="" value="0" disabled="" selected="">Subjects</option>
                                    @foreach ($subjects as $subject)
                                        <option {{ old('subject') == $subject->id ? 'selected' : '' }}
                                            value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="px-1 mb-3 w-full lg:w-1/1">
                                <label class="form-label">Message:</label>
                                <textarea name="detail" rows="3" class="form-textarea" placeholder="Detail"></textarea>
                            </div>

                            <div class=" w-full lg:w-1/2 my-5">
                                <div class="flex items-center ">
                                    <div class="ml-5 form-check form-check-inline">
                                        <input name="spacing"
                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary-three checked:border-primary-three focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="radio" id="spacing1" value="1" checked="">
                                        <label class="form-label"
                                            class="ml-1 sm:ml-2  form-check-label inline-block text-gray-700" for="single">
                                            Single Space </label>
                                    </div>
                                    <div class="ml-10 form-check form-check-inline">
                                        <input name="spacing"
                                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-primary-three checked:border-primary-three focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                            type="radio" id="spacing2" value="2">
                                        <label class="form-label"
                                            class="ml-1 sm:ml-2 form-check-label inline-block text-gray-700" for="double">
                                            Double Space </label>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-1/2 mb-3">
                                <div class="w-full px-1 mb-3">
                                    <p class="text-primary-one text-base ">Attach File (max file attach : 10 | max file
                                        size : 25Mb)</p>
                                    <input type="file" name="emailAttachments[]" multiple=""
                                        class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-cyan-500 focus:ring-2 focus:ring-blue-200 text-base outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out "
                                        accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar"
                                        aria-describedby="email_attacements_help" id="email_attacements">
                                </div>
                                <p class="text-primary-one text-sm">if file is larger then 25Mb then please email us on
                                    info@assignmentshelp.ae</p>
                            </div>
                          </div>
                           <h2 class="text-primary-one my-4 font-medium title-font text-4xl text-center">Contact Information
                            </h2>

                        <div class="flex flex-wrap ">

                            <div class="w-full md:w-1/2 px-1 mb-3">
                                <label class="form-label">Name:</label>
                                <input type="text" name="name" class="form-control " placeholder="Full Name" value="">
                            </div>

                            <div class="w-full md:w-1/2 px-1 mb-3">
                                <label class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control  " placeholder="Email" value="">
                            </div>

                            <div class="w-full md:w-1/2 px-1 mb-3">
                                <label class="form-label">Country:</label>
                                <select name="country" class="form-control ">
                                    <option hidden="" value="0" disabled="" selected="">Country</option>
                                    @foreach ($countries as $country)
                                        <option {{ old('country') == $country->id ? 'selected' : '' }}
                                            value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="w-full md:w-1/2 px-1 mb-3">
                                <label class="form-label">Phone Number:</label>
                                <input type="tel" name="Phone" id="phone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <h2 class="text-center text-primary-one my-4 font-medium title-font text-3xl">
                            Total Cost AED: <span class="text-3xl"> <span id="cost"> 0</span>
                            </span></h2>
                        <div class="text-center">
                            <button type="submit" id="btn-submit" class="btn btn-primary-two">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

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
                    $("#cost").html((res.per_page_price * ($("#no_of_pages").val() == null ? 1 : $(
                        "#no_of_pages").val())))
                },
                error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        });
    </script>
@endsection
