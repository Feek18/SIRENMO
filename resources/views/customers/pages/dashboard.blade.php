@extends('customers.main')

@section('content')
 
<section class="" id="specialdeals">
  <div class="container lg:h-screen mx-auto mt-14">
      <div class="text-center lg:flex lg:justify-between mt-4 pt-8">
          <h1
              class="text-secondary text-[28px] lg:text-4xl font-medium lg:font-semibold leading-loose tracking-widest mt-4">
              Specials
              <span
                  class="text-color text-[28px] lg:text-4xl font-semibold leading-loose tracking-widest">Offer</span>
          </h1>
          <button
              class="px-4 py-2 lg:p-4 bg-secondary border hover:bg-color justify-center items-center inline-flex mt-2">
              <a class="text-white font-medium text-[11px] lg:text-[13px] text-sm font-medium tracking-widest hover:text-white"
                  href="">See More</a>
          </button>
      </div>
      <div class="lg:flex lg:items-center lg:justify-center lg:gap-12 mt-14">
        @foreach ($kendaraan as $mobil)
            <div class="card">
              <img class="w-full h-full object-cover mt-6 px-4 py-2" src="{{ asset('storage/' . $mobil->foto_kendaraan) }}" alt="All New Avanza">
              <div class="p-5 flex flex-col gap-3">
                  <div class="flex items-center gap-2">
                      <span class="badge">stock ready</span>
                      <span class="badge">most recommend</span>
                  </div>
                  <h2 class="tittle">{{ $mobil->nama }}</h2>
                  <p class="text-xl font-bold">{{ $mobil->harga_paket }}</p>
                  <div class="flex items-center gap-2 mt-1">
                      <p class="text-sm line-through opacity-50">{{ $mobil->harga_perjam }}</p>
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
        @endforeach
          
      </div>

  </div>
</section>

@endsection