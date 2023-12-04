<nav id="header" class="fixed w-full z-30 top-0 text-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="hidden lg:block pl-2 flex items-center">
            <a href="#">
                <img class="h-8 md:h-10 w-auto" src="<?= base_url() . 'assets/img/logo-qw-light.webp' ?>" alt="Your Company">
            </a>
        </div>
        <div class="block lg:hidden pl-4">
            <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3">
                    <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="#">Cloud Hosting</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Server</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Domain</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Email Suite</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Service</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Internet Access</a>
                </li>
                <li class="mr-3">
                    <div class="flex">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4" href="#">Promo</a>
                        <img src="<?= base_url() . 'assets/img/discount-coupon.png' ?>" alt="" class="block absolute h-12 w-auto ml-12" id="disc">
                    </div>
                </li>
            </ul>
        </div>
        <div class="block lg:hidden pl-2 flex items-center">
            <a href="#">
                <img class="h-8 md:h-10 w-auto" src="<?= base_url() . 'assets/img/logo-qw-light.webp' ?>" alt="Your Company">
            </a>
        </div>
        <div>
            <button id="navAction" class="mr-2 lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-2 py-2 px-4 lg:mt-0 lg:py-2 lg:px-4 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out hover:text-black">
                Login
            </button>
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>