<header class="relative">
    <div
        {{-- class="h-screen -z-10 bg-hero-pattern bg-no-repeat bg-center bg-cover absolute hidden md:block md:h-[51rem] md:top-[-0.5rem] md:right-0 md:left-0 "> --}}
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

                    <a href="#"
                        class="block font-semibold text-primary-two hover:text-primary-one py-2 md:mx-2 px-5 md:px-0 md:my-auto lg:px-5">About</a>

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
