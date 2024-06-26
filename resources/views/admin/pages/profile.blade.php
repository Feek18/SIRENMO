@extends('admin.main')

@section('content')
    <div class="profile" data-profile="{{ session('flash') }}"></div>
    <nav class="absolute z-20 flex flex-wrap items-center justify-between w-full px-6 py-6 text-white transition-all shadow-none duration-250 ease-soft-in lg:flex-nowrap lg:justify-start" navbar-profile navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-6 py-1 my-4 flex-wrap-inherit">
          <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 pl-2 pr-4 mr-12 bg-transparent rounded-lg sm:mr-16">
              <li class="leading-normal text-sm">
                <a class="opacity-50" href="javascript:;">Pages</a>
              </li>
              <li class="text-sm pl-2 capitalize leading-normal before:float-left before:pr-2 before:content-['/']" aria-current="page">Profile</li>
            </ol>
            <h6 class="mb-2 ml-2 font-bold text-white capitalize">Profile</h6>
          </nav>

          <div class="flex items-center justify-end">
            <a href="/logout" class="block px-4 py-2 font-semibold text-white transition-all ease-soft-in-out text-sm">
              <span class="hidden sm:inline me-3">Keluar</span>
              <i class="fa-solid fa-arrow-right-from-bracket text-white"></i>
            </a>
        </div>
        
        </div>
      </nav>

      <div class="w-full px-6 mx-auto">
        <div class="relative flex items-center p-0 mt-6 overflow-hidden bg-center bg-cover min-h-75 rounded-2xl" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%">
          <span class="absolute inset-y-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-purple-700 to-pink-500 opacity-60"></span>
        </div>
        <div class="relative flex flex-col flex-auto min-w-0 p-4 mx-6 -mt-16 overflow-hidden break-words border-0 shadow-blur rounded-2xl bg-white/80 bg-clip-border backdrop-blur-2xl backdrop-saturate-200">
          <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-auto max-w-full px-3">
              <div class="text-base ease-soft-in-out h-18.5 w-18.5 relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                <img src="../assets/img/admin2.png" alt="profile_image" class="w-full shadow-soft-sm rounded-xl" />
              </div>
            </div>
            <div class="w-full max-w-full px-3 flex sm:my-auto md:w-1/2 md:flex-none lg:w-4/12">
              <div class="h-full">
                <h3 class="mb-1">{{ ucwords(Auth::user()->username) }}</h3>
                <p class="mb-0 font-semibold leading-normal text-sm">{{ ucwords(Auth::user()->role) }}</p>
              </div>
            </div>
            <div class="w-full max-w-full px-3 flex justify-end sm:my-auto md:w-1/2 md:flex-none lg:w-12/12 ms-4">
              <div class="relative right-0 ml-auto">
                  <a class="ubahPengguna text-right z-30 block w-full px-3 py-1 mb-0 transition-colors border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link role="tab" aria-selected="false" value="{{ Auth::user()->id }}">
                    <button type="button" class="text-xs font-semibold leading-tight text-slate-400 ubahPengguna" value="{{ Auth::user()->id }}">
                      <a class="ubahPengguna text-right z-30 block w-full px-3 py-1 mb-0 transition-colors border-0 rounded-lg ease-soft-in-out bg-inherit text-slate-700" nav-link role="tab" aria-selected="false" value="{{ Auth::user()->id }}">
                        <i class="fa-solid fa-gear text-xl"></i>
                      </a>
                    </button>
                  </a>
              </div>
          </div>
        </div>
      </div>
      <div class="w-full px-6 py-2 mx-auto">
        <div class="flex flex-wrap -mx-3">
          <div class="flex-none w-full max-w-full px-3 mt-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="w-full px-6 py-6 mx-auto">
                <div class="flex flex-wrap -mx-3">
                  <div class="flex-none w-full max-w-full px-3">
                    <div
                      class="relative flex flex-col min-w-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                      <div class="flex-auto px-0 pt-0">
                        <div class="p-0 overflow-x-auto">
                          <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                              <tr>
                                <th
                                  class="px-3 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                  Username</th>
                                <th
                                  class="px-3 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                  {{ ucwords(Auth::user()->username) }}</th>
                              </tr>
                              <tr>
                                <th
                                  class="px-3 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                  Password</th>
                                <th
                                  class="px-3 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                  {{ ucwords(Auth::user()->password) }}</th>
                              </tr>
                              <tr>
                                <th
                                  class="px-3 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                  Role</th>
                                <th
                                  class="px-3 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-600 opacity-70">
                                  {{ ucwords(Auth::user()->role) }}</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="pt-4">
          <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
              <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                <div class="leading-normal text-center text-sm text-slate-500 lg:text-left">
                  ©
                  <script>
                    document.write(new Date().getFullYear() + ",");
                  </script>
                  made with <i class="fa fa-heart"></i> by
                  <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
                  for a better web.
                </div>
              </div>
              <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Creative Tim</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 font-normal transition-colors ease-soft-in-out text-sm text-slate-500" target="_blank">License</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    <!-- Modal -->
    <div class="modal fade" id="modalPenggunaUbah" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 judulModal" id="judulModal">Ubah Data Pengguna</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="{{ request()->path() == 'profile' ? 'formProfile' : 'formUbah'}}" method="post" enctype="multipart/form-data">
              @csrf
              @if (request()->path() != 'profile')
                @method('put')
              @endif
              <input type="hidden" name="id" id="id-pengguna-ubah">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control rounded border-slate-200 rounded border-slate-200" id="username-pengguna-ubah" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control rounded border-slate-200" id="password-pengguna-ubah" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-select" id="role-pengguna-ubah" name="role" required>
                        <option value="admin">Admin</option>
                        <option value="customers">Customers</option>
                        <option value="drivers">Drivers</option>
                        <option value="owners">Owner</option>
                    </select>
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
