<section>
    <div class="container mx-auto px-6 mt-4">
        <div class="flex justify-between items-center text-[#282828]">
            <div>
                <h1 class="lg:text-3xl text-2xl font-bold">Dashboard Product List</h1>
                <p>Silahkan pilih sesuai kebutuhan anda</p>
            </div>
            <div class="flex items-center space-x-2 px-6">
                <i class="fa-solid fa-user mr-2"></i> Hello, {{ ucwords(Auth::user()->username) }}
                <button class="lg:hidden block btntoggle">
                    <img class="h-6" src="img/hamburger-menu.png" alt="">
                </button>
            </div>
        </div>
    </div>
</section>
