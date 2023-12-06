<!-- plugin for charts  -->
<script src="./assets/js/plugins/chartjs.min.js" async></script>
<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
<script>
    $(function() {
        $('.tambahModal').on('click', function() {
            $('#judulModal').html('Tambah Data Mobil');
            $('.tombol-aksi').html('Tambah Data');
        })
        $('ubahModal').on('click', function() {
  
            const id = $(this).data('id');
            $('#judulModal').html('Ubah Data Mobil');
            $('.tombol-aksi').html('Simpan Perubahan');
            $('.modal-body form').attr('action', 'http://localhost/ci3app-latihan/mobil/ubahData/' + id);
  
  
            $.ajax({
                url: 'http://localhost/ci3app-latihan/mobil/ubah/',
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama').val(data.nama);
                    $('#nomor_plat').val(data.nomor_plat);
                    $('#tahun').val(data.tahun);
                    $('#kategori').val(data.kategori);
                    $('#harga').val(data.harga);
                    $('#paket').val(data.paket);
                    $('#status').val(data.status);
                    $('#deskripsi').val(data.deskripsi);
                    $('#transmisi').val(data.transmisi);
                    $('#image').val(data.image);
                    $('#merk').val(data.merk);
                    $('#id').val(data.id);
                }
            })
  
        })
    })
  </script>