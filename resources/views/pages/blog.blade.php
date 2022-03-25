@extends('layouts.master')
@section('content')
    <main class="flex-1">
        <h4 class="page-bar">
            Blogs
        </h4>

        <div class="container p-6 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-8">

            <div class="p-2">

                <a href="#">
                    <div class="relative" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="200">
                        <img src="../imgs/blogimg.png" alt="Emoji Support"
                            class=" rounded-lg shadow-sm w-full h-52 transform transition hover:scale-105 hover:opacity-[0.6]">
                    </div>
                </a>

                <div class=" flex flex-col space-y-2 md:space-y-0 md:flex-row md:space-x-4 author-date text-gray-600 py-4 ">
                    <div><a href="#">
                            <span class="vcard author post-author">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </a>
                        <a href="#">Rida Hashmi</a>
                    </div>
                    <div> <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <span class="post-date updated">October 2, 2020</span>
                    </div>
                </div>

                <div class=" blog-heading ">Importance And Structure Of A Thesis Statement.</div>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel eos esse
                    amet consequuntur beatae accusamus libero eaque, aspernatur obcaecati laborum placeat dolore
                    mollitia! Tenetur eos explicabo voluptatibus quibusdam, voluptates placeat?</p>

                <div class="flex blog-bottom">
                    <div class="button-love">
                        <a href="#" class="mfn-love " data-id="595">
                            <span class="icons-wrapper">
                                <i class="icon-heart-empty-fa"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </span>
                            <span class="label">0</span>
                        </a>
                    </div>
                    <div class="post-links">
                        <div class="border-l-1 border-gray-700"><i class="fa fa-book" aria-hidden="true"></i>
                            <a href="#" class="post-more  ">Read more</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="p-2">

                <a href="#">
                    <div class="relative">
                        <img src="../imgs/blogimg2.jpg" alt="Emoji Support"
                            class="rounded-lg shadow-sm w-full h-52 transform transition hover:scale-105 hover:opacity-[0.6] ">
                    </div>
                </a>

                <div class=" flex flex-col space-y-2 md:space-y-0 md:flex-row md:space-x-4 author-date text-gray-600 py-4 ">
                    <div><a href="#">
                            <span class="vcard author post-author">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </a>
                        <a href="#">Rida Hashmi</a>
                    </div>
                    <div> <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <span class="post-date updated">October 2, 2020</span>
                    </div>
                </div>

                <div class=" blog-heading ">Importance And Structure Of A Thesis Statement.</div>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel eos esse
                    amet consequuntur beatae accusamus libero eaque, aspernatur obcaecati laborum placeat dolore
                    mollitia! Tenetur eos explicabo voluptatibus quibusdam, voluptates placeat?</p>

                <div class="flex blog-bottom">
                    <div class="button-love">
                        <a href="#" class="mfn-love " data-id="595">
                            <span class="icons-wrapper">
                                <i class="icon-heart-empty-fa"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </span>
                            <span class="label">0</span>
                        </a>
                    </div>
                    <div class="post-links">
                        <div class="border-l-1 border-gray-700"><i class="fa fa-book" aria-hidden="true"></i>
                            <a href="#" class="post-more  ">Read more</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="p-2">

                <a href="#">
                    <div class="relative">
                        <img src="../imgs/blogimg.png" alt="Emoji Support"
                            class="rounded-lg shadow-sm w-full h-52 transform transition hover:scale-105 hover:opacity-[0.6] ">
                    </div>
                </a>

                <div class=" flex flex-col space-y-2 md:space-y-0 md:flex-row md:space-x-4 author-date text-gray-600 py-4 ">
                    <div><a href="#">
                            <span class="vcard author post-author">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </a>
                        <a href="#">Rida Hashmi</a>
                    </div>
                    <div> <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <span class="post-date updated">October 2, 2020</span>
                    </div>
                </div>

                <div class=" blog-heading ">Importance And Structure Of A Thesis Statement.</div>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel eos esse
                    amet consequuntur beatae accusamus libero eaque, aspernatur obcaecati laborum placeat dolore
                    mollitia! Tenetur eos explicabo voluptatibus quibusdam, voluptates placeat?</p>

                <div class="flex blog-bottom">
                    <div class="button-love">
                        <a href="#" class="mfn-love " data-id="595">
                            <span class="icons-wrapper">
                                <i class="icon-heart-empty-fa"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </span>
                            <span class="label">0</span>
                        </a>
                    </div>
                    <div class="post-links">
                        <div class="border-l-1 border-gray-700"><i class="fa fa-book" aria-hidden="true"></i>
                            <a href="#" class="post-more  ">Read more</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="p-2">

                <a href="#">
                    <div class="relative">
                        <img src="../imgs/blogimg2.jpg" alt="Emoji Support"
                            class="rounded-lg shadow-sm w-full h-52 transform transition hover:scale-105 hover:opacity-[0.6] ">
                    </div>
                </a>

                <div class=" flex flex-col space-y-2 md:space-y-0 md:flex-row md:space-x-4 author-date text-gray-600 py-4 ">
                    <div><a href="#">
                            <span class="vcard author post-author">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </a>
                        <a href="#">Rida Hashmi</a>
                    </div>
                    <div> <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <span class="post-date updated">October 2, 2020</span>
                    </div>
                </div>

                <div class=" blog-heading ">Importance And Structure Of A Thesis Statement.</div>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel eos esse
                    amet consequuntur beatae accusamus libero eaque, aspernatur obcaecati laborum placeat dolore
                    mollitia! Tenetur eos explicabo voluptatibus quibusdam, voluptates placeat?</p>

                <div class="flex blog-bottom">
                    <div class="button-love">
                        <a href="#" class="mfn-love " data-id="595">
                            <span class="icons-wrapper">
                                <i class="icon-heart-empty-fa"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </span>
                            <span class="label">0</span>
                        </a>
                    </div>
                    <div class="post-links">
                        <div class="border-l-1 border-gray-700"><i class="fa fa-book" aria-hidden="true"></i>
                            <a href="#" class="post-more  ">Read more</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="p-2">

                <a href="#">
                    <div class="relative">
                        <img src="../imgs/blogimg.png" alt="Emoji Support"
                            class="rounded-lg shadow-sm w-full h-52 transform transition hover:scale-105 hover:opacity-[0.6] ">
                    </div>
                </a>

                <div class=" flex flex-col space-y-2 md:space-y-0 md:flex-row md:space-x-4 author-date text-gray-600 py-4 ">
                    <div><a href="#">
                            <span class="vcard author post-author">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </a>
                        <a href="#">Rida Hashmi</a>
                    </div>
                    <div> <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <span class="post-date updated">October 2, 2020</span>
                    </div>
                </div>

                <div class=" blog-heading ">Importance And Structure Of A Thesis Statement.</div>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel eos esse
                    amet consequuntur beatae accusamus libero eaque, aspernatur obcaecati laborum placeat dolore
                    mollitia! Tenetur eos explicabo voluptatibus quibusdam, voluptates placeat?</p>

                <div class="flex blog-bottom">
                    <div class="button-love">
                        <a href="#" class="mfn-love " data-id="595">
                            <span class="icons-wrapper">
                                <i class="icon-heart-empty-fa"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </span>
                            <span class="label">0</span>
                        </a>
                    </div>
                    <div class="post-links">
                        <div class="border-l-1 border-gray-700"><i class="fa fa-book" aria-hidden="true"></i>
                            <a href="#" class="post-more  ">Read more</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="p-2">

                <a href="#">
                    <div class="relative">
                        <img src="../imgs/blogimg2.jpg" alt="Emoji Support"
                            class="rounded-lg shadow-sm w-full h-52 transform transition hover:scale-105 hover:opacity-[0.6]">
                    </div>
                </a>

                <div
                    class=" flex flex-col space-y-2 md:space-y-0 md:flex-row md:space-x-4 author-date text-gray-600 py-4 ">
                    <div><a href="#">
                            <span class="vcard author post-author">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </a>
                        <a href="#">Rida Hashmi</a>
                    </div>
                    <div> <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <span class="post-date updated">October 2, 2020</span>
                    </div>
                </div>

                <div class=" blog-heading ">Importance And Structure Of A Thesis Statement.</div>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel eos esse
                    amet consequuntur beatae accusamus libero eaque, aspernatur obcaecati laborum placeat dolore
                    mollitia! Tenetur eos explicabo voluptatibus quibusdam, voluptates placeat?</p>

                <div class="flex blog-bottom">
                    <div class="button-love">
                        <a href="#" class="mfn-love " data-id="595">
                            <span class="icons-wrapper">
                                <i class="icon-heart-empty-fa"></i>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </span>
                            <span class="label">0</span>
                        </a>
                    </div>
                    <div class="post-links">
                        <div class="border-l-1 border-gray-700"><i class="fa fa-book" aria-hidden="true"></i>
                            <a href="#" class="post-more  ">Read more</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
