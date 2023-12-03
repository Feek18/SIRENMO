<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fast Car</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }

            .bg-img {
                background-image: url('{{ asset(' img/img.png') }}');
                background-size: cover;
                background-cover: no-repeat;
            }
        }
    </style>

    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="img/logo.png">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Top Navbar -->
    <div class="bg-color w-full p-1">
        <div class="container mx-auto flex justify-center md:justify-between lg:justify-between text-white">
            <p class="font-medium text-xs hidden md:flex">Powered by Void</p>
            <p class="font-medium text-xs">Get Promos for New Years!</p>
            <p class="font-medium text-xs hidden md:flex"><img class="w-3 mr-2" src="img/phone.svg"
                    alt="">0822-3788-6327</p>
        </div>
    </div>
    <!-- End Top Navbar -->

    <div class="">
        <nav class="bg-white shadow flex justify-between items-center p-2 md:items-center md:justify-between">
            <div>
                <span class="text-2xl font-[Poppins] cursor-pointer font-bold">
                    <a class="font-bold text-xl pt-4" href="">
                        <img class="h-10 inline" src="img/logo.png" alt="">
                        FAST CAR
                    </a>
                </span>
            </div>
            <ul class="text-secondary text-sm lg:flex gap-7 hidden">
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#">Home</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#">Special Deals</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#">About Us</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#">Testimonials</a>
                </li>
                <li>
                    <a class="hover:text-color duration-500 font-medium" href="#">Contact</a>
                </li>
            </ul>
            <div class="lg:flex hidden">
                <button class="bg-color text-white text-[16px] lg:text-[17px] px-7 py-2 font-bold rounded">
                    <a href="{{ route('login') }}">Login</a>
                </button>
            </div>
            <button class="lg:hidden block btntoogle">
                <img class="h-6" src="img/hamburger-menu.png" alt="">
            </button>
        </nav>

        <div class="mobile hidden mx-auto lg:hidden md:hidden">
            <ul class="text-secondary text-sm font-normal gap-7">
                <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                    <a href="#">Home</a>
                </li>
                <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                    <a href="#">Special Deals</a>
                </li>
                <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                    <a href="#">About Us</a>
                </li>
                <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                    <a href="#">Testimonials</a>
                </li>
                <li class="px-3 py-3 hover:bg-color hover:text-white cursor-pointer ease-in duration-200">
                    <a href="#">Contact</a>
                </li>
            </ul>
            <div class="lg:flex mt-3">
                <button class="bg-color text-white text-[16px] lg:text-[17px] px-7 py-2 font-bold rounded">
                    <a href="{{ route('login') }}">Login</a>
                </button>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="home" class="py-5">
        <div class="container mx-auto flex flex-wrap items-center justify-center mt-10 md:px-12 md:flex-row">
            <div class="mb-14 lg:mb-0 lg:mb-1/2">
                <h1
                    class="max-w-xl text-4xl leading-none text-secondary font-bold text-center leading-normal lg:text-6xl lg:tracking-normal lg:text-left lg:leading-normal mb-5">
                    Enjoy Your Travel Experience With <span class="text-color">Easy And Fast</span></h1>
                <p class="max-w-xl text-center text-secondary leading-normal lg:leading-7 lg:text-left lg:max-w-md">
                    We're offer a wide range of
                    rentals to suit you need. Whether, you're planning a weekend getaway or a business trip</p>
            </div>
            <div class="">
                <img class="h-1/2 rounded-2xl" src="img/img.png" alt="">
            </div>
        </div>
        <div
            class="container px-[30px] py-6 max-w-[1170px] mx-auto flex flex-col lg:flex-row justify-between mt-8 gap-4 lg:gap-x-3 relative lg:-top-16 lg:shadow bg-white lg:bg-transparent backdrop-blur rounded-lg">
            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pick up
                    Location</label>
                <input type="text" id="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pick up
                    Date</label>
                <input type="date" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Return
                    Date</label>
                <input type="date" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required>
            </div>
            <button type="button"
                class="text-white bg-color font-medium rounded-lg text-sm px-8 py-4 focus:outline-none">
                <a href="">Search</a>
            </button>
        </div>
    </section>

    <!-- Hero Product Section -->
    <section class="bg-secondary">
        <div class="container mx-auto">
            <div class="text-center lg:flex lg:justify-between mt-3 pt-6">
                <h1
                    class="text-white text-[28px] lg:text-3xl font-medium lg:font-semibold leading-loose tracking-widest mt-4">
                    Specials
                    <span
                        class="text-yellow-700 text-[28px] lg:text-3xl font-semibold leading-loose tracking-widest">Offer</span>
                </h1>
                <button
                    class="px-4 py-2 lg:p-4 bg-secondary border border-yellow-600 hover:bg-color justify-center items-center inline-flex mt-2">
                    <a class="text-white font-medium text-[11px] lg:text-[13px] text-sm font-medium tracking-widest hover:text-white"
                        href="">See More</a>
                </button>
            </div>
            <div class="w-full lg:flex lg:mx-auto lg:justify-between lg:gap-12">
                <div
                    class="lg:max-w-xs bg-white border shadow-md border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 items-center justify-center text-center mt-8 hover:scale-105 shadow mb-6">
                    <a href="#">
                        <img class="rounded-t-lg justify-center mx-auto pt-8" src="img/pict1.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">New Avanza</h5>
                        </a>
                        <p class="mt-2 font-normal text-xs text-gray-700 dark:text-gray-400">Honda | 4 Seat</p>
                        <p class="mt-2 font-normal text-xs line-through text-red-700 dark:text-gray-400">Rp. 450.000</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rp. 300.000</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-color rounded-lg hover:scale-105 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Book Now
                        </a>
                    </div>
                </div>
                <div
                    class="lg:max-w-xs bg-white border shadow-md border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 items-center justify-center text-center mt-8 hover:scale-105 shadow mb-6">
                    <a href="#">
                        <img class="rounded-t-lg justify-center mx-auto pt-8" src="img/pict2.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Rush</h5>
                        </a>
                        <p class="mt-2 font-normal text-xs text-gray-700 dark:text-gray-400">Honda | 4 Seat</p>
                        <p class="mt-2 font-normal text-xs line-through text-red-700 dark:text-gray-400">Rp. 500.000</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rp. 450.000</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-color rounded-lg hover:scale-105 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Book Now
                        </a>
                    </div>
                </div>
                <div
                    class="lg:max-w-xs bg-white border shadow-md border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 items-center justify-center text-center mt-8 hover:scale-105 shadow mb-6">
                    <a href="#">
                        <img class="rounded-t-lg justify-center mx-auto pt-8" src="img/pict3.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Veloz</h5>
                        </a>
                        <p class="mt-2 font-normal text-xs text-gray-700 dark:text-gray-400">Honda | 4 Seat</p>
                        <p class="mt-2 font-normal text-xs line-through text-red-700 dark:text-gray-400">Rp. 450.000</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rp. 350.000</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-color rounded-lg hover:scale-105 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Book Now
                        </a>
                    </div>
                </div>
                <div
                    class="lg:max-w-xs bg-white border shadow-md border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 items-center justify-center text-center mt-8 hover:scale-105 shadow mb-6">
                    <a href="#">
                        <img class="rounded-t-lg justify-center mx-auto pt-8" src="img/pict4.png" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Honda HR-V</h5>
                        </a>
                        <p class="mt-2 font-normal text-xs text-gray-700 dark:text-gray-400">Honda | 4 Seat</p>
                        <p class="mt-2 font-normal text-xs line-through text-red-700 dark:text-gray-400">Rp. 450.000</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rp. 300.000</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-color rounded-lg hover:scale-105 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Book Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>










































    <!-- Dropdown menu -->
    <div id="dropdownDelay"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDelayButton">
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
            </li>
            <li>
                <a href="#"
                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                    out</a>
            </li>
        </ul>
    </div>






    <script>
        const btntoogle = document.querySelector('.btntoogle');
        const mobile = document.querySelector('.mobile');

        btntoogle.addEventListener('click', function () {
    mlato('hidde      });
    </script>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>