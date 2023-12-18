<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/sweetalert2.all.min.js"></script>
<!-- main script file  -->
<script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
<script>
    function priviewImage() {
        const image = document.querySelector('#foto_kendaraan');
        const imagePriview = document.querySelector('.img-priview');

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imagePriview.src = oFREvent.target.result;
        }
    }
</script>

{{-- Kendaraan --}}
<script>
    $(document).ready(function() {
        $(document).on('click', '.editBtn', function() {
            let kendaraan_id = $(this).val()

            $('#modalUbah').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-kendaraan/" + kendaraan_id + "/edit",
                success: function (response) {
                    $('#nama-ubah').val(response.kendaraan.nama);
                    $('#nomor_plat-ubah').val(response.kendaraan.nomor_plat);
                    $('#tahun-ubah').val(response.kendaraan.tahun);
                    $('#harga_perjam-ubah').val(response.kendaraan.harga_perjam);
                    $('#harga_paket-ubah').val(response.kendaraan.harga_paket);
                    $('#transmisi-ubah').val(response.kendaraan.transmisi);
                    $('#kategori_id-ubah').val(response.kategori.id);
                    $('#status-ubah').val(response.kendaraan.status);
                    $('#deskripsi-ubah').val(response.kendaraan.deskripsi);
                    $('#foto_kendaraan-ubah').attr('src', 'http://127.0.0.1:8000/storage/' + response.kendaraan.foto_kendaraan);
                    $('#oldImage').val(response.kendaraan.foto_kendaraan);
                    $('#formData').attr('action', 'http://127.0.0.1:8000/data-kendaraan/' + response.kendaraan.id);
                    $('#id-ubah').val(response.kendaraan.id);
                }
            });
        })
    })
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.viewBtn', function() {
            let kendaraan_id = $(this).val()

            $('#cardView').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-kendaraan/" + kendaraan_id + "/edit",
                success: function (response) {
                    $('#foto_kendaraan-view').attr('src', 'http://127.0.0.1:8000/storage/' + response.kendaraan.foto_kendaraan);
                    $('#nama-view').val(response.kendaraan.nama);
                    $('#nomorplat-view').val(response.kendaraan.nomor_plat);
                    $('#harga-view').val(response.kendaraan.harga_perjam);
                    $('#paket-view').val(response.kendaraan.harga_paket);
                    $('#status-view').val(response.kendaraan.status);
                    $('#tahun-view').val(response.kendaraan.tahun);
                }
            });
        })
    })
</script>
<script>
    const flashData = $('.flash-data').data('flashdata');

    if (flashData) {
        Swal.fire(
            'Data Kendaraan',
            'Berhasil ' + flashData,
            'success'
        )
    }

    $(document).on('click', '.tombol-hapus', function(e) {
        e.preventDefault();
        let kendaraan_id = $(this).val();
        
        // Get the current action attribute
        let currentAction = $('.formHapus').attr('action');
        
        // Update the action attribute with the new URL
        const href = currentAction + kendaraan_id;
        
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda akan menghapus sebuah data Kendaraan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Update the action attribute of the form
                $('.formHapus').attr('action', href);
                
                // Submit the form
                $('.formHapus').submit();
            }
        });
    });
</script>

{{-- Pengguna  --}}
<script>
    $(document).ready(function() {
        $(document).on('click', '.ubahPengguna', function() {
            let pengguna_id = $(this).val()

            $('#modalPenggunaUbah').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-pengguna/" + pengguna_id + "/edit",
                success: function (response) {
                    $('#username-pengguna-ubah').val(response.pengguna.username);
                    $('#password-pengguna-ubah').val(response.pengguna.password);
                    $('#role-pengguna-ubah').val(response.pengguna.role);
                    $('#formUbah').attr('action', 'http://127.0.0.1:8000/data-pengguna/' + pengguna_id);
                    $('#id-pengguna-ubah').val(response.pengguna.id);
                }
            });
        })
    })
</script>
<script>
    const Pengguna = $('.pengguna').data('pengguna');

    if (Pengguna) {
        Swal.fire(
            'Data Pengguna',
            'Berhasil ' + Pengguna,
            'success'
        )
    }

    $(document).on('click', '.tombol-hapus-pengguna', function(e) {
        e.preventDefault();
        let pengguna_id = $(this).val();
        
        // Get the current action attribute
        let currentAction = $('.hapusPengguna').attr('action');
        
        // Update the action attribute with the new URL
        const href = currentAction + pengguna_id;
        
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda akan menghapus sebuah data Pengguna!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Update the action attribute of the form
                $('.hapusPengguna').attr('action', href);
                
                // Submit the form
                $('.hapusPengguna').submit();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.viewUser', function() {
            let pengguna_id = $(this).val()

            $('#viewUsers').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-pengguna/" + pengguna_id + "/edit",
                success: function (response) {
                    $('#username-pengguna-lihat').val(response.pengguna.username);
                    $('#password-pengguna-lihat').val(response.pengguna.password);
                    $('#role-pengguna-lihat').val(response.pengguna.role);
                    $('#id-pengguna-lihat').val(response.pengguna.id);
                }
            });
        })
    })
</script>

{{-- Kategori --}}
<script>
    $(document).ready(function() {
        $(document).on('click', '.editKategori', function() {
            let kategori_id = $(this).val()

            $('#ubahKategoriModal').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-kategori/" + kategori_id + "/edit",
                success: function (response) {
                    $('#id-ubah').val(response.kategori.id);
                    $('#logo-ubah').attr('src', 'http://127.0.0.1:8000/storage/' + response.kategori.logo);
                    $('#kode-ubah').val(response.kategori.kode);
                    $('#merk-ubah').val(response.kategori.merk);
                    $('#jumlah-ubah').val(response.kategori.jumlah);
                    $('#jenis-ubah').val(response.kategori.jenis);
                    $('#oldLogo').val(response.kategori.logo);
                    $('#formKategori').attr('action', 'http://127.0.0.1:8000/data-kategori/' + kategori_id);
                }
            });
        })
    })
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.viewKategori', function() {
            let kategori_id = $(this).val()

            $('#viewKategori').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-kategori/" + kategori_id + "/edit",
                success: function (response) {
                    $('#logo-view').attr('src', 'http://127.0.0.1:8000/storage/' + response.kategori.logo);
                    $('#kode-view').val(response.kategori.kode);
                    $('#merk-view').val(response.kategori.merk);
                    $('#jumlah-view').val(response.kategori.jumlah);
                    $('#jenis-view').val(response.kategori.jenis);
                }
            });
        })
    })
</script>
<script>
    const flashKategori = $('.kategori').data('flash');

    if (flashKategori) {
        Swal.fire(
            'Data Kategori',
            'Berhasil ' + flashKategori,
            'success'
        )
    }

    $(document).on('click', '.tombol-hapus-kategori', function(e) {
        e.preventDefault();
        let kategori_id = $(this).val();
        
        // Get the current action attribute
        let currentAction = $('.hapusKategori').attr('action');
        
        // Update the action attribute with the new URL
        const href = currentAction + kategori_id;
        
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda akan menghapus sebuah data Kategori!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Update the action attribute of the form
                $('.hapusKategori').attr('action', href);
                
                // Submit the form
                $('.hapusKategori').submit();
            }
        });
    });
</script>
<script>
    function priviewLogo() {
        const image = document.querySelector('#logo');
        const imagePriview = document.querySelector('.priview-logo');

        const oFReader = new FileReader();
        
        oFReader.onload = function(oFREvent) {
            imagePriview.src = oFREvent.target.result;
        }

        if (image.files.length > 0) {
            oFReader.readAsDataURL(image.files[0]);
        }
    }
</script>
