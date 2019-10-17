<?php 
// menambah / memanggil file database.php
include '../database2.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <title>Latihan CRUD - Read Data</title>
</head>
<body>
      <div class="container">
    <div class="row" style="padding:20px;">
    <div class="col-md-12">
    <div class="card">
    <center><div class="card-header"><h2>DATA FORMULIR</h2></div></center>
    <div class="card-body">
    <a class="btn btn-success" href="create.php">Input Data Siswa</a>
    <table  class="table table-bordered table-primary" id="jay">
        <thead>
        <tr> 
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>tanggal Lahir</th>
            <th>Jenis kelamin</th>
            <th>Agama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>   
        </thead>
        <tbody>
        <?php
        $bio = new Biodata();
        $no = 1;
        foreach ($bio->index() as $data) {
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><?php echo $data['umur']; ?></td>
            

            <td><a class="btn btn-primary" href="show.php?id=<?php echo $data['id']; ?>">Show</a>
            <a class="btn btn-warning" href="editb.php?id=<?php echo $data['id']; ?>">Edit</a></<a>
            <a class="btn btn-danger" href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm('Apakah Anda Yakin Mau Menghapus data ini?')">Delete</a></td>
        </tr>
        <?php 
    } ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
      </div>
      
         <!--js-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/bootstrap.bundle.min.jss"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>  
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
<script>$(document).ready(function() {
    $('#jay').DataTable();
} );</script>
<!--end js-->
</body>

</html>