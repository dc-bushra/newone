@extends('layouts.master')
@section('content')
<section class="text-blue-600 body-font bg-white opacity-90">
    <h4 class="page-bar">
        Contact Us
    </h4>
    <div class="container px-5 pt-3 pb-20  mx-auto">
         <div class="w-full ">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-x-2 gap-y-2">
                 <div class="mx-2">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                 </div>

                <div class="mx-2">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>

                <div class="mx-2">
                    <label class="form-label">Country:</label>
                    <select name="country" class="form-control">
                        <option class="text-gray-400" hidden="" disabled="" selected="">Country</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                    </select>
                </div>

                <div class="mx-2">
                    <label class="form-label">Phone Number:</label>

                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
                <div class="md:col-span-2 mx-2">
                    <label class="form-label">Subject:</label>
                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>

                <div class="md:col-span-2 mx-2">
                    <label class="form-label">Message:</label>
                    <textarea name="detail" rows="3" class="form-textarea" placeholder="Detail"></textarea>
                </div>

                <div class="md:col-span-2 mx-auto">
                    <button type="submit" class="btn btn-primary-two">
                        Submit Query
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
