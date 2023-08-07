$(document).ready(function () {
    // console.log("namaKaryawan");
    $(document).on("show.bs.modal", "#myUpdate", function (event) {
        var button = $(event.relatedTarget);
        var uidKaryawan = button.data("uid");
        var kode = button.data("kode");
        var namaKaryawan = button.data("nama");
        var posisi = button.data("posisi");
        var penempatan = button.data("penempatan");
        var domisili = button.data("domisili");
        var hp = button.data("hp");
        var masuk = button.data("masuk");
        var lahir = button.data("lahir");
        var poto = button.data("poto");
        var modal = $(this);
        modal.find("#uidKaryawan").val(uidKaryawan);
        modal.find("#namaKaryawan").val(namaKaryawan);
        modal.find("#lok").val(penempatan);
        modal.find('#pos').val(posisi);
        // modal.find('#posisi option[value="' + posisi + '"]').prop('selected', true);
        
        // modal
        //     .find('#penempatan option[value="' + penempatan + '"]')
        //     .prop("selected", true);
        // modal.find('select[name="penempatan"] option[value="' + penempatan + '"]').prop('selected', true);
        // $('option[value="kitchen"]').prop('selected', true);

        modal.find("#domisili").val(domisili);
        modal.find("#hp").val(hp);
        modal.find("#masuk").val(masuk);
        modal.find("#tanggal_lahir").val(lahir);
        modal.find("#poto").val(poto);
        // console.log(namaKaryawan)


    });
    $(document).on("show.bs.modal", "#upoutlet", function(event){
        var tombol = $(event.relatedTarget);
        var uid = tombol.data("uid");
        var nama = tombol.data("nama");
        var alamat = tombol.data("alamat");
        var hp = tombol.data("hp");
        var map = tombol.data("map");
        var modal =$(this);
        modal.find("#id-outlet").val(uid);
        modal.find("#outlet-nama").val(nama);
        modal.find("#outlet-alamat").val(alamat);
        modal.find("#outlet-hp").val(hp);
        modal.find("#map-outlet").val(map);
    });
    $(document).on("show.bs.modal", "#upbarang", function(event){
        var tombol = $(event.relatedTarget);
        var id = tombol.data("id")
        var nama = tombol.data("nama")
        var kategori = tombol.data("kategori")
        var satuan = tombol.data("satuan")
        var modal = $(this)
        modal.find("#id-barang").val(id)
        modal.find("#nama_barang").val(nama)
        modal.find("#kategori-barang-list").val(kategori)
        modal.find("#satuan-barang-list").val(satuan)
        console.log('tes')

    });

    $(document).on("show.bs.modal", "#updateKategory", function(event){
        var tombol = $(event.relatedTarget);
        var uid = tombol.data('uid')
        var kategory = tombol.data('kategory');
        var modal = $(this)
        modal.find('#uidKategory').val(uid)
        modal.find('#namaKategory').val(kategory)
    })
    $(document).on("show.bs.modal", "#updateSatuan", function(event){
        var tombol = $(event.relatedTarget);
        var uid = tombol.data('uid')
        var satuan = tombol.data('satuan');
        var modal = $(this)
        modal.find('#uidSatuan').val(uid)
        modal.find('#namaSatuan').val(satuan)
    })
    $(document).on("show.bs.modal", "#userEdit", function(event){
        var tombol = $(event.relatedTarget);
        var id = tombol.data('id')
        var level = tombol.data('level')
        var nama = tombol.data('nama')
        var email = tombol.data('email')
        var role = tombol.data('role')
        var password = tombol.data('password')
        var modal = $(this)
        modal.find('#idUser').val(id)
        modal.find('#levelUser').val(level)
        modal.find('#namaUser').val(nama)
        modal.find('#emailUser').val(email)
        modal.find('#roleUser').val(role)
        modal.find('#passwordUser').val(password)
       
    })

    $(document).on("show.bs.modal", "#updatePosisi", function(event){
        var tombol = $(event.relatedTarget)
        var uid = tombol.data('uid')
        var posisi = tombol.data('posisi')
        var modal = $(this)
        modal.find('#uidPosisi').val(uid)
        $(this).find('#namaPosisi').val(posisi)
    })
    $(document).on("show.bs.modal", "#modalLaporan", function(event){
        var tombol = $(event.relatedTarget)
        var uid = tombol.data('uid')
        var judul = tombol.data('judul')
        var keterangan = tombol.data('keterangan')
        var modal = $(this)
        modal.find('#uid').val(uid)
        modal.find('#judul').val(judul)
        modal.find('#keterangan').val(keterangan)
        
    })
    $(document).on("show.bs.modal", "#laporanList", function(event){
        var tombol = $(event.relatedTarget)
        var user = tombol.data('user')
        var judul = tombol.data('judul')
        var keterangan = tombol.data('keterangan')
        var gambar = tombol.data('gambar')
        var date = tombol.data('date')
        var modal = $(this)
        modal.find('#name-user').text(user)
        modal.find('#judul').text(judul)
        modal.find('#ket').text(keterangan)
        // modal.find('#gambar').text(gambar)
        // console.log(gambar)
        var path = '/storage/laporan/'
        var url = path+gambar
        $('#imagePreview').attr('src',url);
        modal.find('#tanggal').text(date)
    })
    $(document).on("show.bs.modal", "#myRanking", function(event){
        var tombol = $(event.relatedTarget)
        var uid = tombol.data('uid')
        var kebersihan = tombol.data('kebersihan')
        var solidaritas = tombol.data('solidaritas')
        var royalitas = tombol.data('royalitas')
        var omset = tombol.data('omset')
        var modal = $(this)
        modal.find('#uidRanking').val(uid)
        modal.find('#kebersihan').val(kebersihan)
        modal.find('#solidaritas').val(solidaritas)
        modal.find('#royalitas').val(royalitas)
        modal.find('#omset').val(omset)
        
    })

    
    $('select[name=opti]').on('change', function () {
        var tempat = $(this).children("option:selected").val();
       var tes =$('#lok').val(tempat)
        // console.log(tempat)
        // console.log(tes)
    });
    $('select[name=pos]').on('change', function () {
        var tempat = $(this).children("option:selected").val();
       var tes =$('#pos').val(tempat)
        // console.log(tempat)
        // console.log(tes)
    });
    $('select[name=kategori]').on('change', function () {
        var tempat = $(this).children("option:selected").val();
       var tes =$('#kategori-barang-list').val(tempat)
    });
    $('select[name=satuanb]').on('change', function () {
        var tempat = $(this).children("option:selected").val();
       var tes =$('#satuan-barang-list').val(tempat)
    });
    $('select[name=level]').on('change', function () {
        var tempat = $(this).children("option:selected").val();
       var tes =$('#levelUser').val(tempat)
    });
    $('select[name=role]').on('change', function () {
        var tempat = $(this).children("option:selected").val();
       var tes =$('#roleUser').val(tempat)
    });





    const quantityInput = $("#quantity");
    const btnPlus = $(".btn-plus");
    const btnMinus = $(".btn-minus");
  
    btnPlus.on("click", function() {
      let currentValue = parseInt(quantityInput.val());
      quantityInput.val(isNaN(currentValue) ? 1 : currentValue + 1);
    });
  
    btnMinus.on("click", function() {
      let currentValue = parseInt(quantityInput.val());
      quantityInput.val(isNaN(currentValue) || currentValue <= 0 ? 0 : currentValue - 1);
    });
    
});



