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
    <title>Latihan-crud - Edit data</title>
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
         <input type="hidden" name="id" value="<?php echo $id; ?>">
         <div class="form-group">
         <label>Nama :</label>
         <input type="text" name="nama" value="<?= $data['nama'] ?>"required> <br>
         </div>
         <div class="form-group">
         <label>Alamat :</label>
        <textarea name="alamat" cols="40" required><?= $data['alamat'] ?></textarea>         
         </div>
         <div class="form-group">
         <label>Tanggal Lahir :</label>
         <input type="date" name="tgl_lahir" class="form-control" value="<?= $data['tgl_lahir'] ?>" required></input><br>
         </div>
         <div class="form-group">
         <label for="">Jenis Kelamin :</label><br>
         <input type="radio" name="jenis_kelamin" value="Laki-laki" checked >Laki-laki<br>
           <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
        </div>
        <label>Agama</label>
        <div class="form-group">
        <select name="agama" class="form-control">
         <option value="">pilih</option>
         <option <?php
                if ($data['agama'] == "Islam") {
                    ?>
             selected
             <?php

        } ?>>Islam</option>
         <option <?php
                if ($data['agama'] == "Kristen") {
                    ?>
             selected
             <?php

        } ?>>Kristen</option>
        <option <?php
                if ($data['agama'] == "Hindu") {
                    ?>
             selected
             <?php

        } ?>>Hindu</option>
        <option <?php
                if ($data['agama'] == "budha") {
                    ?>
             selected
             <?php

        } ?>>budha</option>
         </select>
        </div>
         <div class="form-group">
         <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
         <button type="reset" class="btn btn-warning">Reset</button>
         </div>
         <?php

    }
    ?>
        
    
 </form>
    <!-- <fieldset>
        <legend>Edit data siswa</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
              <tr>
                    <th>Nama </th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>"required </td>
                </tr>
                <tr>
                    <th>ALamat</th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <tr>
                       <th>tanggal Lahir</th>
                    </tr>
                    <th><input type="submit" name="save" value="simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset> -->
     <!--js-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.jss"></script>
<!--end js-->
</body>
</html>