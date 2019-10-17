<?php
include '../database2.php';
$bio = new Biodata();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Latihan-crud - show data</title>
</head>
<body>
    <?php
    foreach ($bio->edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tgl_lahir = $data['tgl_lahir'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $agama = $data['agama'];
    }
    ?><div class="container">
  <div class="row" style="padding:20px;">
  <div class="col-md-12">
  <div class="card">
  <center><div class="card-header"><h2>Formulir</h2></div></center>
  <div class="card-body">
      <?php
        foreach ($bio->show($_GET['id']) as $data) {
            ?>
         <!--isi disini-->
         <form action="proses.php?aksi=update" method="post">
         <input type="hidden" readonly name="id" value="<?php echo $id; ?>">
         <div class="form-group">
         <label>Nama :</label>
         <input type="text" class="form-control" readonly name="nama" value="<?= $data['nama'] ?>"required> <br>
         </div>
         <div class="form-group">
         <label>Alamat :</label>
        <textarea name="alamat" class="form-control" readonly cols="40" required><?= $data['alamat'] ?></textarea>         
         </div>
         <div class="form-group">
         <label>Tanggal Lahir :</label>
         <input type="date" readonly name="tgl_lahir" class="form-control" value="<?= $data['tgl_lahir'] ?>" required></input><br>
         </div>
         <div class="form-group">
         <label for="">Jenis Kelamin :</label><br>
         <input type="text" readonly class="form-control" name="jenis_kelamin" value="<?= $data['jenis_kelamin'] ?>" checked ><br>
        </div>
        <div class="form-group">
        <label>Agama</label>
        <input type="text" readonly class="form-control" name="agama" value="<?= $data['agama'] ?>"> 
        
        </div>
        <div class="form-group">
            <label>Umur</label>
        <input type="text" readonly class="form-control" name="umur" value="<?= $data['umur'] ?>">     
        </div> 
         <div class="form-group">
         <button href="index.php" class="btn btn-success">kembali</button>
         </div>
         <?php

    }
    ?>
        
    
 </form>
    
     <!--js-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.jss"></script>
<!--end js-->
</body>
</html>