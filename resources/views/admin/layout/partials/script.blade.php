<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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