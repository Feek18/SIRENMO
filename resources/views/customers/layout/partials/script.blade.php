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

{{-- Customers --}}
<script>
    $(document).ready(function() {
        $(document).on('click', '.editCust', function() {
            let cust_id = $(this).val()

            $('#editCust').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-customers/" + cust_id + "/edit",
                success: function (response) {
                    $('#id-ubah').val(response.customers.id);
                    $('#nik-ubah').val(response.customers.nik);
                    $('#nama-ubah').val(response.customers.nama);
                    $('#telepon-ubah').val(response.customers.telepon);
                    $('#alamat-ubah').val(response.customers.alamat);
                    $('#tgl_lahir-ubah').val(response.customers.tgl_lahir);
                    $('#user_id-ubah').val(response.customers.user_id);
                    $('#foto_sim-ubah').attr('src', 'http://127.0.0.1:8000/storage/' + response.customers.foto_sim);
                    $('#formEditCust').attr('action', 'http://127.0.0.1:8000/data-customers/' + cust_id);
                    $('#oldSIM').val(response.customers.foto_sim);
                }
            });
        })
    })
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.viewCustomers', function() {
            let cust_id = $(this).val()

            $('#viewCustomers').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-customers/" + cust_id + "/edit",
                success: function (response) {
                    $('#foto_sim-view').attr('src', 'http://127.0.0.1:8000/storage/' + response.customers.foto_sim);
                    $('#nik-view').val(response.customers.nik);
                    $('#nama-view').val(response.customers.nama);
                    $('#telepon-view').val(response.customers.telepon);
                    $('#alamat-view').val(response.customers.alamat);
                    $('#tgl_lahir-view').val(response.customers.tgl_lahir);
                    $('#user_id-view').val(response.customers.user_id);
                }
            });
        })
    })
</script>
<script>
    const flashCust = $('.customers').data('flash');

    if (flashCust) {
        Swal.fire(
            'Data Customers',
            'Berhasil ' + flashCust,
            'success'
        )
    }

    $(document).on('click', '.hapus-cust', function(e) {
        e.preventDefault();
        let cust_id = $(this).val();
        
        // Get the current action attribute
        let currentAction = $('.hapusCust').attr('action');
        
        // Update the action attribute with the new URL
        const href = currentAction + cust_id;
        
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda akan menghapus sebuah data Customers!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Update the action attribute of the form
                $('.hapusCust').attr('action', href);
                
                // Submit the form
                $('.hapusCust').submit();
            }
        });
    });
</script>
<script>
    function priviewSIM() {
        const image = document.querySelector('#foto_sim');
        const imagePriview = document.querySelector('.priview-sim');

        const oFReader = new FileReader();
        
        oFReader.onload = function(oFREvent) {
            imagePriview.src = oFREvent.target.result;
        }

        if (image.files.length > 0) {
            oFReader.readAsDataURL(image.files[0]);
        }
    }
</script>

{{-- Pesanan --}}
<script>
    const flashPesananSaya = $('.pesananSaya').data('pesanan');

    if (flashPesananSaya) {
        Swal.fire(
            'Pesanan',
            'Berhasil ' + flashPesananSaya,
            'success'
        )
    }
    $(document).on('click', '.tambahPesanan', function(e) {
        e.preventDefault();
        let kendaraan_id = $(this).val();
        
        // Get the current action attribute
        let currentAction = $('.formPesanan').attr('action');
        
        // Update the action attribute with the new URL
        const href = currentAction + kendaraan_id;
        
        $('.formPesanan').attr('action', href);
        
        // Submit the form
        $('.formPesanan').submit();
    });
</script>
<script>
    const psnSaya = $('.bayarPesanan').data('transaksi');

    if (psnSaya) {
        Swal.fire(
            'Pesanan',
            'Telah ' + psnSaya,
            'success'
        )
    }

    const sttsPsn = $('.selesai').data('statuspsn');

    if (sttsPsn) {
        Swal.fire({
        title: "Terimakasih!",
        text: "Silahkan berikan ulasan yaa!",
        imageUrl: "https://unsplash.it/400/200",
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: "Custom image"
        });
    }

    const FeedbackUser = $('.feedback').data('feedback');

    if (FeedbackUser) {
        Swal.fire({
        title: "Terimakasih!",
        text: "See u next time",
        imageUrl: "https://unsplash.it/400/200",
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: "Custom image"
        });
    }
    $(document).ready(function() {
        $(document).on('click', '.pesananLihat', function() {
            let pesananID = $(this).val()

            $('#pesananSaya').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-pesanan/" + pesananID + "/edit",
                success: function (response) {
                    // Pastikan format tanggal yang valid
                    var tglAmbil = new Date(response.pesanan.tgl_ambil);
                    var tglKembali = new Date(response.pesanan.tgl_kembali);

                    // Menghitung selisih hari
                    var jumlahHari = Math.ceil((tglKembali - tglAmbil) / (1000 * 60 * 60 * 24));

                    // Melakukan validasi selisih hari
                    if (jumlahHari < 0) {
                        console.error('Tanggal kembali harus setelah tanggal ambil');
                        return;
                    }

                    let harga = response.kendaraan.harga_paket;
                    // Menghitung total bayar
                    
                    var totalBayar = harga * jumlahHari;

                    // Menetapkan nilai pada elemen HTML
                    $('#kode-transaksi').val(response.pesanan.kode);
                    $('#total_bayar').val(totalBayar);
                    $('#formBayar').attr('action', 'http://127.0.0.1:8000/pembayaran');

                    console.log(response.pesanan.kode);
                }

            });
        })
    })
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.detailPesanan', function() {
            let pesananId = $(this).val()

            $('#detailPesanan').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-pesanan/" + pesananId + "/edit",
                success: function (response) {
                    $('#kode-pesanan-customers').val(response.pesanan.kode);
                    $('#status').val(response.pesanan.status);
                }
            });

            $(document).on('click', '.btnSelesai', function() {
                
                // Get the current action attribute
                let currentAction = $('.formDetail').attr('action');
                
                // Update the action attribute with the new URL
                const href = currentAction + pesananId;

                console.log(href);
                
                $('.formDetail').attr('action', href);
                
                // Submit the form
                $('.formDetail').submit();
            })
        })
    })
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.ulasanPesanan', function() {
            let pesananId = $(this).val()

            $('#ulasanPesanan').modal('show')

            $('#pesanan_id').val(pesananId);

            console.log(pesananId);

            $(document).on('click', '.btnSimpan', function() {
                // Submit the form
                $('.formFeedback').submit();
            })
        })
    })
</script>

{{-- Pesanan  --}}
<script>
    $(document).ready(function() {
        $(document).on('click', '.ubahPesanan', function() {
            let pesanan_id = $(this).val()

            $('#modalPesananUbah').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-pesanan/" + pesanan_id + "/edit",
                success: function (response) {
                    $('#id-ubah').val(response.pesanan.id);
                    $('#kode-pesanan-ubah').val(response.pesanan.kode);
                    $('#tgl_ambil-ubah').val(response.pesanan.tgl_ambil);
                    $('#tgl_kembali-ubah').val(response.pesanan.tgl_kembali);
                    $('#pengemudi-ubah').val(response.pesanan.driver_id);
                    $('#kendaraan-ubah').val(response.pesanan.kendaraan_id);
                    $('#formUbahPesanan').attr('action', 'http://127.0.0.1:8000/data-pesanan/' + pesanan_id);
                }
            });
        })
    })
</script>
<script>
    const Pesanan = $('.pesanan').data('pesanan');

    if (Pesanan) {
        Swal.fire(
            'Data Pesanan',
            'Berhasil ' + Pesanan,
            'success'
        )
    }

    $(document).on('click', '.tombol-hapus-pesanan', function(e) {
        e.preventDefault();
        let pesanan_id = $(this).val();
        
        // Get the current action attribute
        let currentAction = $('.hapusPesanan').attr('action');
        
        // Update the action attribute with the new URL
        const href = currentAction + pesanan_id;
        
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Anda akan menghapus sebuah data Pesanan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Update the action attribute of the form
                $('.hapusPesanan').attr('action', href);
                
                // Submit the form
                $('.hapusPesanan').submit();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(document).on('click', '.viewPesanan', function() {
            let pesanan_id = $(this).val()

            $('#viewPesanans').modal('show')

            $.ajax({
                type: "GET",
                url: "/data-pesanan/" + pesanan_id + "/edit",
                success: function (response) {
                    $('#foto-kendaraan-lihat').attr('src', 'http://127.0.0.1:8000/storage/' + response.kendaraan.foto_kendaraan);
                    $('#kode-pesanan-lihat').val(response.pesanan.kode);
                    $('#tgl-ambil-lihat').val(response.pesanan.tgl_ambil);
                    $('#tgl-kembali-lihat').val(response.pesanan.tgl_kembali);
                    $('#pemesan-lihat').val(response.customers.nama);
                    $('#pengemudi-lihat').val(response.drivers.nama);
                    $('#kendaraan-lihat').val(response.kendaraan.nama);
                    $('#nomor-plat-lihat').val(response.kendaraan.nomor_plat);
                }
            });
        })
    })
</script>