@extends('customers.main')

@section('content')
    <div class="pesananSaya" data-pesanan="{{ session('pesanan') }}"></div>
    <section class="mt-4 px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-8 overflow-hidden">
            @foreach ($kendaraan as $mobil)
                <form class="formPesanan" action="form-pesanan/{{ $mobil->id }}" method="get">
                    @csrf
                    <div class="bg-white shadow-md hover:scale-105 transform duration-300 w-full max-w-sm mx-auto lg:mx-0">
                        <a href="">
                            <img class="object-cover w-full h-48 mt-3" src="../img/pict2.png" alt="Mazda CX-3">
                        </a>
                        <div class="px-4 py-3">
                            <div class="flex items-center gap-2 mb-3 mt-2">
                                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">stock {{ $mobil->status }}</span>
                                <span class="px-3 py-1 rounded-full text-xs bg-gray-100">most recommend</span>
                            </div>
                            <span class="text-gray-400 uppercase text-sm">{{ $mobil->kategori->merk }}</span>
                            <p class="text-lg font-bold block truncate capitalize">{{ $mobil->nama }}</p>
                            <div class="flex items-center">
                                <p class="text-lg font-semibold my-3">@currency($mobil->harga_paket)</p>
                                <del>
                                    <p class="text-sm text-gray-600 ml-2">@currency($mobil->harga_perjam)</p>
                                </del>
                            </div>
                            <div class="mt-4 flex gap-2">
                                <button class="btn-product bg-blue-500 text-white px-4 py-2 rounded">Book Now</button>
                                <p class="stock">4 Stock</p>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </section>
    
@endsection
