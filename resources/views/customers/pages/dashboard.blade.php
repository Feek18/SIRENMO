@extends('customers.main')

@section('content')

<div class="pesananSaya" data-pesanan="{{ session('pesanan') }}"></div>
<section class="" id="specialdeals">
  <div class="container lg:h-screen mx-auto mt-2">
      <div class="lg:flex lg:items-center lg:justify-center lg:gap-12">
            <div class="row">
              @foreach ($kendaraan as $mobil)
              <div class="col py-3">
                <form class="formPesanan" action="form-pesanan/" method="get">
                @csrf
                    <div class="card">
                        <img class="w-full h-full object-cover mt-6 px-4 py-2" src="../img/pict2.png" alt="All New Avanza">
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
                                <button value="{{ $mobil->id }}" class="btn-product tambahPesanan">Book Now</button>
                                <p class="stock">4 Stock</p>
                            </div>
                        </div>
                    </div>
                </form>   
              </div>
              @endforeach
            </div>  
      </div>
  </div>
</section>

@endsection