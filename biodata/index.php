<?php 
// menambah / memanggil file database.php
include '../database2.php';
$db = new Database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Read Data</title>
</head>
<body>
    <center>DATA</center>
    <a href="create.php">Input Data Siswa</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>tanggal Lahir</th>
            <th>Jenis kelamin</th>
            <th>Agama</th>
            <th colspan="3">Aksi</th>
        </tr>   
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

            

            <td><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a></td>
            <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclik="return confirm('Apakah Anda Yakin Mau Menghapus data ini?')">Delete</a></td>
        </tr>
        <?php 
    } ?>
    </table>
</body>
</html>