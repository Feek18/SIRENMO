@extends('admin.main')

@section('content')
<div class="pesanan" data-flash="{{ session('flash') }}"></div>
<div class="w-full px-6 py-6 mx-auto">
  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div
        class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  <th
                    class="px-3 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    #</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Kode</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Tanggal Ambil</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Tanggal Kembali</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Pemesan</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Driver</th>
                  <th
                    class="px-3 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Kendaraan</th>
                    <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                </tr>
              </thead>

              <tbody>
                @foreach ($pesanans as $pesanan)
                <tr>
                  <td class="px-3 py-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">{{ $pesanan->id }}</h6>
                      </div>
                    </div>
                  </td>
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold text-center leading-tight">{{ $pesanan->kode }}</p>
                  </td>
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs text-center font-semibold leading-tight">{{ $pesanan->tgl_ambil }}</p>
                  </td>
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->tgl_kembali }}</p>
                  </td>
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->customers->nama }}</p>
                  </td>
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->drivers->nama }}</p>
                  </td>
                  <td class="px-3 py-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $pesanan->kendaraan->nama }}</p>
                  </td>
                  
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 editPesanan" value="{{ $pesanan->id }}"> Edit </button>
                  </td>
                  <td class="px-3 py-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 viewPesanan" value="{{ $pesanan->id }}"> Lihat </button>
                  </td>
                  <td class="px-3 py-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <form action="/data-pesanan/" method="post" class="hapusPesanan">
                      @csrf
                      @method('delete')
                      <button class="text-xs font-semibold leading-tight text-slate-400 tombol-hapus-pesanan" type="submit" value="{{ $pesanan->id }}">Hapus</button>
                    </form>                  
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div fixed-plugin>
  <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700" data-bs-toggle="modal" data-bs-target="#tambahPesanan">
    <i class="py-2 pointer-events-none fa fa-plus"></i>
  </a>
</div>

{{-- <!-- Modal Tambah Pesanan -->
<div class="modal fade" id="tambahPesanan" tabindex="-1" aria-labelledby="judulModalTambah" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Tambah Data Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/data-pesanan" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" id="id-pesanan">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                  <label for="kode" class="form-label">Kode</label>
                  <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="kode-pesanan" name="kode" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                  <label for="kendaraan_id" class="form-label">Kendaraan</label>
                  <select class="form-select" id="kendaraan_id" name="kendaraan_id" required>
                    <option value="#">-- Pilih Kendaraan --</option>
                    @foreach ($kendaraan as $k)
                        @if ($k->status == 'tersedia')
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endif
                    @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="tgl_ambil" class="form-label">Tgl. Ambil</label>
                <input type="date" class="form-control rounded border-slate-200 rounded border-slate-200" id="tgl_ambil" name="tgl_ambil" required>
            </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                  <label for="tgl_kembali" class="form-label">Tgl. Kembali</label>
                  <input type="date" class="form-control rounded border-slate-200 rounded border-slate-200" id="tgl_kembali" name="tgl_kembali" required>
              </div>
          </div>
          <div class="mb-3">
            <label for="customer_id" class="form-label">Nama Pemesan</label>
            <select class="form-select" id="customer_id" name="customer_id" required>
                <option value="#">-- Pilih Pemesan --</option>
                @foreach ($customers as $cust)
                    <option value="{{ $cust->id }}">{{ $cust->nama }}</option>
                @endforeach
            </select>
        </div>
          <div class="mb-3">
            <label for="driver_id" class="form-label">Nama Driver</label>
            <select class="form-select" id="driver_id" name="driver_id" required>
                <option value="#">-- Pilih Pengemudi --</option>
                @foreach ($drivers as $drive)
                    <option value="{{ $drive->id }}">{{ $drive->nama }}</option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="block text-white bg-cyan-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 btnModal">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div> --}}

{{-- <!-- Modal Edit Pesanan -->
<div class="modal fade" id="ubahPesananModal" tabindex="-1" aria-labelledby="judulModalEdit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Ubah Data Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="formPesananUbah" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          <input type="hidden" name="id" id="id-ubah">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                  <label for="kode" class="form-label">Kode</label>
                  <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="kode-ubah" name="kode" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                  <label for="kendaraan_id" class="form-label">Kendaraan</label>
                  <select class="form-select" id="kendaraan-ubah" name="kendaraan_id" required>
                    <option value="#">-- Pilih Kendaraan --</option>
                    @foreach ($kendaraan as $k)
                        @if ($k->status == 'tersedia')
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endif
                    @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="tgl_ambil" class="form-label">Tgl. Ambil</label>
                <input type="date" class="form-control rounded border-slate-200 rounded border-slate-200" id="tgl-ambil-ubah" name="tgl_ambil" required>
            </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                  <label for="tgl_kembali" class="form-label">Tgl. Kembali</label>
                  <input type="date" class="form-control rounded border-slate-200 rounded border-slate-200" id="tgl-kembali-ubah" name="tgl_kembali" required>
              </div>
          </div>
          <div class="mb-3">
            <label for="customer_id" class="form-label">Nama Pemesan</label>
            <select class="form-select" id="customers-ubah" name="customer_id" required>
                <option value="#">-- Pilih Pemesan --</option>
                @foreach ($customers as $cust)
                    <option value="{{ $cust->id }}">{{ $cust->nama }}</option>
                @endforeach
            </select>
        </div>
          <div class="mb-3">
            <label for="driver_id" class="form-label">Nama Driver</label>
            <select class="form-select" id="drivers-ubah" name="driver_id" required>
                <option value="#">-- Pilih Pengemudi --</option>
                @foreach ($drivers as $drive)
                    <option value="{{ $drive->id }}">{{ $drive->nama }}</option>
                @endforeach
            </select>
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="block text-white bg-cyan-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div> --}}


<!-- Card View -->
<div class="modal fade" id="viewPesanan" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Detail Pesanan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row pb-3">
          <div class="col-sm d-flex align-items-center justify-content-center">
            <img id="logo-view" alt="" class="priview-logo img-fluid mb-3 col-sm-8">
          </div>
          <hr>
        </div>
        <div class="row">
          <div class="col-sm-4">Kode Pesanan</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="kode-view" id="kode-view"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Tanggal Ambil</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="tgl-ambil-view" id="tgl-ambil-view"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Tanggal Kembali</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="tgl-kembali-view" id="tgl-kembali-view"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Nama Pemesan</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="cust-view" id="cust-view"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Nama Pengemudi</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="driver-view" id="driver-view"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">Nama Kendaraan</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="kendaraan-view" id="kendaraan-view"></input>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">No Plat</div>
          <div class="col-sm-1">:</div>
          <div class="col-sm-6">
            <input for="no-plat-view" id="no-plat-view"></input>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="block text-white bg-cyan-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection