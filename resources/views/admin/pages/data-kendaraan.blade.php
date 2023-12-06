@extends('admin.main')

@section('content')
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
                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Nama</th>
                  <th
                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    No. Plat</th>
                  <th
                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Harga</th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Status</th>
                  <th
                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                    Tahun</th>
                  <th
                    class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                  </th>
                </tr>
              </thead>

              <tbody>
                @foreach ($kendaraan as $k)
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div>
                        <img src="../assets/img/{{ $k->foto_kendaraan }}"
                          class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                          alt="user1" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">{{ $k->nama }}</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400">{{ $k->kategori->merk }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $k->nomor_plat }}</p>
                    <p class="mb-0 text-xs leading-tight text-slate-400">{{ $k->transmisi }}</p>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $k->harga_perjam }}.000/jam</p>
                    <p class="mb-0 text-xs leading-tight text-slate-400">{{ $k->harga_paket }}.000/paket</p>
                  </td>
                  @if ($k->status == 'tersedia')
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span
                      class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Tersedia</span>
                  </td>
                  @endif
                  @if ($k->status == 'tidak_tersedia')
                  <td
                    class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span
                      class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Tidak
                      Tersedia</span>
                  </td>
                  @endif
                  <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="text-xs font-semibold leading-tight text-slate-400">{{ $k->tahun }}</span>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400 ubahModal" data-bs-toggle="modal" data-bs-target="#modalData"> Edit </a>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <form action="/data-kendaraan/{{ $k->id }}" method="POST">
                      @method('delete')
                      @csrf
                      <button class="text-xs font-semibold leading-tight text-slate-400" onclick="return confirm('Apakah anda yakin?')"> Hapus </button>
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
  <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700 tambahModal" data-bs-toggle="modal" data-bs-target="#modalData">
    <i class="py-2 pointer-events-none fa fa-plus"></i>
  </a>
</div>

<!-- Modal -->
<div class="modal fade" id="modalData" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 judulModal" id="judulModal">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/data-kendaraan" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id">
          <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="nama" name="nama" required>
          </div>
          <div class="row">
              <div class="col">
                  <div class="mb-3">
                      <label for="nomor_plat" class="form-label">No. Plat</label>
                      <input type="text" class="form-control rounded border-slate-200" id="nomor_plat" name="nomor_plat" required>
                  </div>
              </div>
              <div class="col">
                  <div class="mb-3">
                      <label for="tahun" class="form-label">Tahun</label>
                      <input type="text" class="form-control rounded border-slate-200" id="tahun" name="tahun" required>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <div class="mb-3">
                      <label for="harga" class="form-label">Harga</label>
                      <input type="text" class="form-control rounded border-slate-200" id="harga" name="harga" required>
                  </div>
              </div>
              <div class="col">
                  <div class="mb-3">
                      <label for="paket" class="form-label">Paket</label>
                      <input type="text" class="form-control rounded border-slate-200" id="paket" name="paket" required>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <div class="mb-3">
                      <label for="transmisi" class="form-label">Transmisi</label>
                      <select class="form-select" id="transmisi" name="transmisi" required>
                          <option value="manual">Manual</option>
                          <option value="automatic">Automatic</option>
                          <option value="manual/automatic">Manual/Automatic</option>
                      </select>
                  </div>
              </div>
              <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="foto_kendaraan">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="foto_kendaraan" type="file" name="foto_kendaraan">
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col">
                  <div class="mb-3">
                      <label for="kategori" class="form-label">Kode. Kategori</label>
                      <select class="form-select" id="kategori" name="kategori" required>
                          @foreach ($kategori as $kode)
                            <option value="{{ $kode->kode }}">{{ $kode->kode }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
              <div class="col">
                  <div class="mb-3">
                      <label for="status" class="form-label">Status</label>
                      <select class="form-select" id="status" name="status" required>
                          <option value="tersedia">Tersedia</option>
                          <option value="tidak_tersedia">Tidak Tersedia</option>
                      </select>
                  </div>
              </div>
          </div>
          <div class="form-floating">
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Deskripsi.."></textarea>
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="block text-white bg-cyan-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 tombol-aksi">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection