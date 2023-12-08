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