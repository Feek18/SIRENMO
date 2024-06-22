{{-- navbar --}}
<section class="bg-white shadow">
    <div class="container mx-auto">
        <div class="flex justify-between items-center p-2 md:items-center md:justify-between" style="height: 68px">
            <div>
                <span class="text-2xl font-[Poppins] cursor-pointer font-bold">
                    <a class="font-bold text-xl pt-4" href="">
                        <img class="h-10 inline" src="img/logo.png" alt="">
                        FAST CAR
                    </a>
                </span>
            </div>
            <ul class="text-secondary text-sm lg:flex lg:items-center gap-7 hidden">
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#home">Home</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#specialdeals">Special Deals</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#about">About Us</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#testi">Testimonials</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#">Contact</a>
                </li>
                <div class="lg:flex hidden">
                    <button class="bg-color text-white text-[16px] lg:text-[17px] px-7 py-2 font-bold rounded">
                        <a href="{{ route('login') }}">Login</a>
                    </button>
                </div>
                <div class="relative inline-block dropdown">
                    <button
                        class="flex items-center justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <i class="fa-solid fa-user mr-2"></i> Hello, Fikri
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" id="menu">
                        <div class="py-1" role="none">
                            <a href="dasboard-customers" class="text-gray-700 block px-4 py-2 text-sm"
                                role="menuitem">Dashboard</a>
                            <a href="/logout" class="text-danger block px-4 py-2 text-sm text-red-600"
                                role="menuitem">Keluar</a>
                        </div>
                    </div>
                </div>
            </ul>
            <button class="lg:hidden block btntoggle">
                <img class="h-6" src="img/hamburger-menu.png" alt="">
            </button>
        </div>
    </div>

    <div class="mobile container mx-auto lg:hidden md:hidden hidden py-4">
        <ul class="text-secondary text-sm font-normal gap-7">
            <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                <a href="#home">Home</a>
            </li>
            <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                <a href="#specialdeals">Special Deals</a>
            </li>
            <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                <a href="#about">About Us</a>
            </li>
            <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                <a href="#testi">Testimonials</a>
            </li>
            <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                <a href="#">Contact</a>
            </li>
        </ul>
        <div class="container mx-auto px-3">
            <div class="flex items-center space-x-3">
                <div class="mt-3">
                    <a href="{{ route('login') }}"
                        class="bg-color text-white text-[16px] lg:text-[17px] px-7 py-2 font-bold rounded block text-center">
                        Login
                    </a>
                </div>
                <div class="relative inline-block dropdown mt-3">
                    <button
                        class="flex items-center justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
                        id="menu-button" aria-expanded="false" aria-haspopup="true">
                        <i class="fa-solid fa-user mr-2"></i> Hello, Fikri
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden"
                        role="menu" aria-orientation="vertical" aria-labelledby="menu-button" id="menu">
                        <div class="py-1" role="none">
                            <a href="dasboard-customers" class="text-gray-700 block px-4 py-2 text-sm"
                                role="menuitem">Dashboard</a>
                            <a href="/logout" class="text-danger block px-4 py-2 text-sm text-red-600"
                                role="menuitem">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
