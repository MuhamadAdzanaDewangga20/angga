<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Pinjam Buku</title>


    <!-- Bootstrap -->
    <link href= "<?= base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body{
        background-image: url("gambar/books-768426_1920.jpg");
        background-repeat: no-repeat;
        background-position: left;
        background-attachment: fixed;
      }

      .container{
        background-color: #f1e6e7d1;
      }
    </style>
  </head>


<body>
<main role="main">


   <div class="container">
    <div class="row">
      <div class="col-md-12 mt-4">
        <h1>DATA TRANSAKSI</h1>
        <hr>
      </div>
      <div class="col-md-12">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#ModalTransaksi">Tambah Data</button>
      </div>

    </div>
        
      <div class="form-group ml-2  mt-4 row">
        <div class="col-md-3">
          <h3>Cari Data</h3>
        </div>
        <div class="col-md-7">
          <input type="email" class="form-control" id="cari" aria-describedby="emailHelp" placeholder="Cari Data Transaksi Berdasarkan Nama........" onkeyup="CariData($('#cari').val())">
        </div>
      </div>
      
        <div class="col-md-12">
        <table id="TableTransaksi" class="table " width="100%">
        	<thead class="thead-dark">
            <th> No trans</th>
        		<th> Nama Buku</th>
        		<th> Nama Pengarang</th>
        		<th> Status</th>
        		<th> Lama Pinjam</th>
        		<th> Tgl Transaksi</th>
        		<th> aksi</th>
        	</thead>

        	<tbody id="DataTransaksi">
        		
        	</tbody>

        </table>
        
      </div>

    <hr>

  </div> 

 <!-- modal -->
 <?php $this->load->view('modal.php') ?>
</main>

<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>


<script>
  $(document).ready(function(){
    $.ajax({
        url: " <?php echo base_url('index.php/getData') ?>",
        type: "GET",
        dataType: "JSON",
        success: function(response){
          $('#DataTransaksi').html();
          for (var i = 0; i <response.length; i++) {
            $('#DataTransaksi').append(
              '<tr>'+
                '<td>'+response[i].idteransaksi+'</td>'+
                '<td>'+response[i].judulbuku+'</td>'+
                '<td>'+response[i].namapengarang+'</td>'+
                '<td>'+response[i].status+'</td>'+
                '<td>'+response[i].lamapinjam+'</td>'+
                '<td>'+response[i].tgltransaksi+'</td>'+
                '<td><button type="button" data-toggle="modal" data-target="#UbahModalTransaksi" id="BtnUpdate" class="btn btn-light btn-outline-primary mr-1" onclick="TampilModal('+response[i].idteransaksi+')"><img src="gambar/baseline_create_black_18dp.png"></img></button>'+ 
                '<button type="button" class="btn btn-light btn-outline-danger" onclick=" HapusData('+response[i].idteransaksi+')"><img src="gambar/baseline_delete_sweep_black_18dp.png"></img></button></td>'+
              '</tr>'
              );
          }        
        }
      });

    });
 

  // No otomatis
    $.ajax({
        url: " <?php echo base_url('index.php/Nom') ?>",
        type: "GET",
        dataType: "JSON",
        success: function(response){
            $('#NoTransaksi').val(response.Nomor);
        }
      });
 


     // Judul Buku
    $.ajax({
      url: "<?php echo base_url('index.php/JudulBukuGet') ?>",
      type: "GET",
      dataType: "json",
      success: function(response){
       $('[id*=JudulBuku]').html('');
       $('[id*=JudulBuku]').append(
        '<option value="0">Pilih Judul Buku</option>'); 
       for (var i=0; i<response.length; i++){
        $('[id*=JudulBuku]').append(
          '<option value='+response[i].idbuku+'>'+response[i].judulbuku+'</option>'
        );
      }
    }
    });
 



    function tampil(IdBuku){
      $.ajax({
        url: "<?php echo base_url('index.php/tampilPengarang/')?>"+IdBuku,
        type: "GET",
        dataType: "json",
          success: function(response){
            $('[id*=NamaPengarang]').val(response.namapengarang);
      }
      });
    }



    // Tambah Data
    function TambahData(){
    $.ajax({
      url : "<?php echo base_url('index.php/tambahData') ?>",
      type : "POST",
      data: $('#TambahTran').serialize(),
      dataType: "JSON",
      success:function(inData){
        alert(inData.info);
        document.location.href = 'index.php'
        $('#ModalTransaksi').modal('hide');
      }
      });
    }


    // Tombol edit

    function TampilModal(Tamp){
      $.ajax({
        url: "<?php echo base_url('index.php/tampilEd/')?>"+Tamp,
        type: "GET",
        dataType: "json",
          success: function(response){
            $('#NoTransaksiUbah').val(response.IdTeransaksi);
            $('#JudulBukuUbah').val(response.IdBuku);
            $('#LamaPinjamUbah').val(response.LamaPinjam);
            $('[id*=\''+response.Status+'\']').prop("checked",true);
            $('#TanggalPinjam').val(response.TglTransaksi);
            
      }
      });
    }



    function Edit(){
    $.ajax({
      url : "<?php echo base_url('index.php/Edit') ?>",
      type : "POST",
      data: $('#UbahTran').serialize(),
      dataType: "JSON",
      success:function(response){
        alert('Data Sudah Diubah');
        document.location.href = 'index.php'
        $('#UbahModalTransaksi').modal('hide');
      }
      });
    }


    //hapus
    function HapusData(Hapus){
      var yes = confirm('Hapus Data Ini');
      if (yes == false){
        Close;
      }
      $.ajax({
        url: "<?php echo base_url('index.php/Hapus/')?>"+Hapus,
        type: "POST",
        dataType: "json",
          success: function(response){
            document.location.href = 'index.php';
          }
      });
    }

    //cari
    function CariData(CariD){
      if(CariD == '') CariD = '0';
      $.ajax({
        url: "<?php echo base_url('index.php/Cari/')?>"+CariD,
        type: "GET",
        dataType: "json",
        success: function(response){
          $('#DataTransaksi').html('');
          for (var i = 0; i <response.length; i++) {
            $('#DataTransaksi').append(
              '<tr>'+
                '<td>'+response[i].idteransaksi+'</td>'+
                '<td>'+response[i].judulbuku+'</td>'+
                '<td>'+response[i].namapengarang+'</td>'+
                '<td>'+response[i].status+'</td>'+
                '<td>'+response[i].lamapinjam+'</td>'+
                '<td>'+response[i].tgltransaksi+'</td>'+
                '<td><button type="button" data-toggle="modal" data-target="#UbahModalTransaksi" id="BtnUpdate" class="btn btn-light btn-outline-primary mr-1" onclick="TampilModal('+response[i].idteransaksi+')"><img src="gambar/baseline_create_black_18dp.png"></img></button>'+ 
                '<button type="button" class="btn btn-light btn-outline-danger" onclick=" HapusData('+response[i].idteransaksi+')"><img src="gambar/baseline_delete_sweep_black_18dp.png"></img></button></td>'+
              '</tr>'
              );
          }        
        }
      });
    }

</script>

            
</body>
</html>
