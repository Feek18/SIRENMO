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

  @vite('resources/css/app.css')

</head>

<body>
  <nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="img/logo.png" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Fast Car</span>
      </a>
      <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button"
          class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
          id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
          data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-full" src="img/1.jpg" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div
          class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
          id="user-dropdown">
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <a href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
            </li>
            <li>
              <a href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Notifications</a>
            </li>
            <li>
              <a href="/logout"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button"
          class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
        <ul
          class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
          </li>
          <li>
            <a href="#"
              class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden md:h-96">
      <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="img/header1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="...">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="img/header1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
          alt="...">
      </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
      <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
        data-carousel-slide-to="0"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
        data-carousel-slide-to="1"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
        data-carousel-slide-to="2"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
        data-carousel-slide-to="3"></button>
      <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
        data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button"
      class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-prev>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 1 1 5l4 4" />
        </svg>
        <span class="sr-only">Previous</span>
      </span>
    </button>
    <button type="button"
      class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
      data-carousel-next>
      <span
        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 9 4-4-4-4" />
        </svg>
        <span class="sr-only">Next</span>
      </span>
    </button>
  </div>

  <!-- Product Section -->
  <section class="" id="specialdeals">
    <div class="container lg:h-screen mx-auto mt-12">
      <div class="text-center lg:flex lg:justify-between mt-4 pt-8">
        <h1
          class="text-secondary text-[28px] lg:text-4xl font-medium lg:font-semibold leading-loose tracking-widest mt-4">
          Most
          <span
            class="text-color text-[28px] lg:text-4xl font-semibold leading-loose tracking-widest">Recommended</span>
        </h1>
        <button
          class="px-4 py-2 lg:p-4 bg-secondary border hover:bg-color justify-center items-center inline-flex mt-2">
          <a class="text-white font-medium text-[11px] lg:text-[13px] text-sm font-medium tracking-widest hover:text-white"
            href="">See More</a>
        </button>
      </div>
      <div class="lg:flex lg:items-center lg:justify-center lg:gap-12 mt-14">
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
    </div>
  </section>

  <!-- Book Form -->

  <!-- Step Book -->

  <!-- Testimonials -->
  <section class="testi mt-8">
    <div class="heading">
      <span class="text-color">Testimonials</span>
      <h1>What Our Customers Say</h1>
    </div>
    <div class="testi-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <div class="box bg-white p-6 rounded-lg">
        <div class="stars">
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star-half"></i>
        </div>
        <p class="pt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio praesentium delectus porro
          voluptate ut itaque ducimus vel corporis minus dolores!</p>
        <div class="flex items-center mt-2">
          <div class="testi-img">
            <img class="h-12 w-12 object-cover rounded-full mr-4" src="img/testi1.png" alt="Morgan Steve">
          </div>
          <div>
            <h2 class="font-bold">Morgan Steve</h2>
            <span>Traveller</span>
          </div>
        </div>
      </div>

      <div class="box bg-white p-6 rounded-lg">
        <div class="stars">
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star-half"></i>
        </div>
        <p class="pt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio praesentium delectus porro
          voluptate ut itaque ducimus vel corporis minus dolores!</p>
        <div class="flex items-center mt-2">
          <div class="testi-img">
            <img class="h-12 w-12 object-cover rounded-full mr-4" src="img/testi2.png" alt="Morgan Steve">
          </div>
          <div>
            <h2 class="font-bold">Jessica Lawrence</h2>
            <span>Food Vlogger</span>
          </div>
        </div>
      </div>

      <div class="box bg-white p-6 rounded-lg">
        <div class="stars">
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star"></i>
          <i class="fa fa-solid fa-star-half"></i>
        </div>
        <p class="pt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio praesentium delectus porro
          voluptate ut itaque ducimus vel corporis minus dolores!</p>
        <div class="flex items-center mt-2">
          <div class="testi-img">
            <img class="h-12 w-12 object-cover rounded-full mr-4" src="img/testi3.png" alt="Morgan Steve">
          </div>
          <div>
            <h2 class="font-bold">Martis Bounce</h2>
            <span>Influencer</span>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg-secondary text-white
    mt-16 py-6">
    <div class="container mx-auto flex justify-between pt-4 py-4">
      <div class="w-1/3">
        <a href="#" class="text-2xl font-bold flex items-center">
          <img class="h-8 mr-2" src="img/logo.png" alt="Logo">
          FAST CAR
        </a>
        <p class="mt-4 text-[16px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum,
          delectus dolore
          exercitationem sunt eius quod.</p>
      </div>
      <ul class="flex flex-col lg:flex-row lg:space-x-8 mt-6 lg:mt-0">
        <li><a href="" class="hover:text-color text-sm">About Us</a></li>
        <li><a href="" class="hover:text-color text-sm">Our Rents</a></li>
        <li><a href="" class="hover:text-color text-sm">Terms & Conditions</a></li>
        <li><a href="" class="hover:text-color text-sm">Privacy Policy</a></li>
        <li>
          <button class="bg-color p-3">
            <a href="#" class=""><i class="fa-solid fa-phone mr-2"></i>+62 822 3788
              6327</a>
          </button>
        </li>
      </ul>
    </div>
    <hr>
    <div class="text-[12px] opacity-60 text-center mt-2">
      <span>Copyright ©2023 VOID</span>
    </div>
  </footer>






  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>