<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast Car | Home Page</title>

    <!-- Logo bar -->
    <link rel="icon" type="image/png" href="img/logo.png">

    <link rel="stylesheet" href="../css/app.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/css/app.css')

</head>

<body>

    <!-- Navbar Section -->
    @include('layouts.navbar')

    <!-- Hero Section -->
    <section id="home" class="py-5">
        <div class="container mx-auto flex flex-wrap items-center justify-center mt-10 md:px-12 md:flex-row">
            <div class="mb-14 lg:mb-0 lg:mb-1/2">
                <div
                    class="lg:flex lg:items-center lg:justify-start flex flex-row justify-center items-center space-x-2 mb-3">
                    <span class="bg-[#FFB703] rounded-xl text-sm font-semibold px-4 py-2"><i
                            class="fa-solid fa-bolt"></i> Get Promos</span>
                    <p class="text-base">for new users this year</p>
                </div>
                <h1
                    class="max-w-xl text-4xl leading-none text-secondary font-bold text-center lg:text-6xl lg:tracking-normal lg:text-left lg:leading-normal mb-5">
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

    {{-- why us --}}
    <section>
        <div>
            <div>
                
            </div>
        </div>
    </section>

    <!-- Section Header -->
    <section>
        <header class="container pt-14 p-8">
            <div
                class="flex flex-col justify-center items-center lg:flex lg:flex-row lg:justify-between lg:items-center space-x-2 rtl:space-x-reverse">
                <div class="flex flex-col rtl:space-x-reverse">
                    <div class="flex items-center space-x-2">
                        <img class="w-8" src="../img/fire.png" alt="">
                        <h1 class="text-3xl font-medium lg:font-bold">Drive your dream cars</h1>
                    </div>
                    <p class="text-sm text-center lg:text-lg lg:text-left mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat soluta fugit doloribus dolorum
                        ex cumque.</p>
                </div>
                <button
                    class="px-4 py-2 lg:p-4 bg-secondary border hover:bg-color justify-center items-center inline-flex mt-4">
                    <a class="text-white font-medium text-[11px] lg:text-[13px] text-sm tracking-widest hover:text-white"
                        href="">See More</a>
                </button>
            </div>
            <div
                class="lg:flex lg:flex-row lg:items-center lg:justify-center flex flex-col justify-center items-center gap-6 lg:gap-12 mt-14">
                <div class="card">
                    <img class="lg:w-full h-full object-cover mt-6 px-4 py-2" src="img/pict1.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">All New Avanza</h2>
                        <p class="text-xl font-bold">Rp 350.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 450.000</p>
                            <p class="percent">save 15% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">8 Stock</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/pict2.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">Rush</h2>
                        <p class="text-xl font-bold">Rp 400.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 550.000</p>
                            <p class="percent">save 20% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">4 Stock</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/pict3.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">Veloz</h2>
                        <p class="text-xl font-bold">Rp 350.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 450.000</p>
                            <p class="percent">save 15% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">9 Stock</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/pict4.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">Honda HR-V</h2>
                        <p class="text-xl font-bold">Rp 450.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 500.000</p>
                            <p class="percent">save 25% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">4 Stock</p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="lg:flex lg:flex-row lg:items-center lg:justify-center flex flex-col justify-center items-center gap-6 lg:gap-12 mt-6">
                <div class="card">
                    <img class="lg:w-full h-full object-cover mt-6 px-4 py-2" src="img/crv.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">Honda CR-V</h2>
                        <p class="text-xl font-bold">Rp 350.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 450.000</p>
                            <p class="percent">save 15% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">8 Stock</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/mazda.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">Mazda 3</h2>
                        <p class="text-xl font-bold">Rp 400.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 550.000</p>
                            <p class="percent">save 20% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">4 Stock</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/civic.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">Civic</h2>
                        <p class="text-xl font-bold">Rp 350.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 450.000</p>
                            <p class="percent">save 15% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">9 Stock</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="w-full h-full object-cover mt-6 px-4 py-2" src="img/brv.png" alt="All New Avanza">
                    <div class="p-5 flex flex-col gap-3">
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">most recommend</span>
                        </div>
                        <h2 class="tittle">Honda BR-V</h2>
                        <p class="text-xl font-bold">Rp 450.000</p>
                        <div class="flex items-center gap-2 mt-1">
                            <p class="text-sm line-through opacity-50">Rp 500.000</p>
                            <p class="percent">save 25% </p>
                        </div>
                        <div class="mt-4 flex gap-2">
                            <button class="btn-product">
                                <a href="">Book Now</a>
                            </button>
                            <p class="stock">4 Stock</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <!-- Footer -->
    @include('layouts.footer')


    @include('sweetalert::alert')



    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script>
        document.querySelector('.btntoggle').addEventListener('click', function() {
            document.querySelector('.mobile').classList.toggle('hidden');
        });
        document.addEventListener('DOMContentLoaded', function() {
            var button = document.getElementById('menu-button');
            var menu = document.getElementById('menu');

            button.addEventListener('click', function(event) {
                event.stopPropagation();
                menu.classList.toggle('hidden');
            });

            document.addEventListener('click', function(event) {
                var isClickInside = button.contains(event.target) || menu.contains(event.target);

                if (!isClickInside) {
                    menu.classList.add('hidden');
                }
            });
        });
    </script>
</body>

</html>
