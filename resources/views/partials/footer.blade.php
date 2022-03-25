<footer
    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-10 gap-y-10 bg-[#111] md:bg-transparent md:bg-footer-bg md:bg-no-repeat md:bg-top h-full md:bg-cover py-20 md:px-24 lg:px-40 md:-mt-36 2xl:-mt-2 mx-auto text-white md:space-x-4">

    <div class="text-center md:text-left mt-12 md:mt-32 lg:mt-16">
        <div class="flex justify-center items-center md:justify-start md:items-start"><img class=" h-32  md:h-24"
                src="../imgs/footerlogo.png" alt=""></div>
        <p class="footer-text px-5 md:px-0">Our aim is to
            help the students in college and university with their academic Writing tasks,
            so that they can ace their results smoothly.
        </p>
    </div>

    <div class="text-center md:text-left md:mt-48 lg:mt-40 md:pl-10">
        <ul class="  ">
            <li><a href="https://assignmenthelpuae.com" class="footer-text">Home</a></li>
            <li><a href="https://assignmenthelpuae.com/order" class=" footer-text">Order Now</a>
            </li>
            <li><a href="https://assignmenthelpuae.com/contact-us" class=" footer-text">Contact</a>
            </li>
            <li><a href="https://assignmenthelpuae.com/blog" class=" footer-text">Blog</a></li>
        </ul>
    </div>

    <div class="text-center md:text-left lg:mt-40">
        <ul class="">
            <li class="pb-2">
                <p class="text-xl font-semibold text-white">Services</p>
            </li>
            <li><a href="https://assignmenthelpuae.com/cipdassignmentservices" class="footer-text">CIPD
                    Assignment Services</a></li>
            <li><a href="https://assignmenthelpuae.com/contentwritingdubai" class="footer-text">Content
                    Writing Service Dubai</a></li>
            <li><a href="https://assignmenthelpuae.com/dissertationwritinghelpcontent" class="footer-text">Thesis
                    Writing
                    Service</a></li>
            <li><a href="https://assignmenthelpuae.com/essaywritingservicescontent1" class="footer-text">Essay
                    writing
                    services content1</a></li>
        </ul>
    </div>

    <div class="text-center md:text-left lg:mt-40">
        <ul class="">
            <li><a href="#" class="footer-text">+213
                    123 12345</a></li>
            <li><a href="#" class="footer-text">info@7dollareasy.com</a>
            </li>
            <div class="md:flex xl:space-x-3 md:space-x-1">
                <button
                    class="w-10 h-10   md:w-8 md:h-8 lg:w-8 lg:h-8 xl:w-10 xl:h-10 mt-5 md:mt-1 bg-white rounded-full text-primary-two font-semibold  text-lg rotate-45 hover:rotate-0 hover:bg-primary-one hover:text-white transition duration-300 border-4 border-white ">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </button>
                <button
                    class="w-10 h-10  md:w-8 md:h-8 lg:w-8 lg:h-8 xl:w-10 xl:h-10  mt-5 md:mt-1 bg-white rounded-full text-primary-two font-semibold text-lg rotate-45 hover:rotate-0 hover:bg-primary-one hover:text-white transition duration-300 border-4 border-white ">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </button>
                <button
                    class="w-10 h-10  md:w-8 md:h-8 lg:w-8 lg:h-8 xl:w-10 xl:h-10  mt-5 md:mt-1   bg-white rounded-full text-primary-two font-semibold text-lg rotate-45 hover:rotate-0 hover:bg-primary-one hover:text-white transition duration-300 border-4 border-white ">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </button>
                <button
                    class="w-10 h-10 md:w-8 md:h-8 lg:w-8 lg:h-8 xl:w-10 xl:h-10   mt-5 md:mt-1     bg-white rounded-full text-primary-two font-semibold  text-lg rotate-45 hover:rotate-0 hover:bg-primary-one hover:text-white transition duration-300 border-4 border-white ">
                    <i class="fa fa-pinterest-p " aria-hidden="true"></i>
                </button>
            </div>

        </ul>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
    (function() {
        let sliderOpen = $('.openSlide');
        sliderOpen.hide();
        sliderOpen.eq(0).show();
        $('.questions').on('click', function() {
            let dataNo = $(this).attr('data-no');
            let xy = $(this);
            $('.content').each(function() {
                let eachdatano = $(this).attr('data-no');
                if (dataNo == eachdatano) {
                    xy.next().slideToggle();
                    xy.addClass('active');
                    xy.find('i').toggleClass("fa-plus-square fa-minus-square");
                } else if (dataNo != eachdatano) {
                    $(this).find('p#openSlide' + eachdatano).slideUp();
                    $(this).find('.questions').removeClass("active");;
                    $(this).find('i').removeClass("fa-minus-square");;
                    $(this).find('i').addClass("fa-plus-square");;
                }
            })
        })
    })();
</script>
