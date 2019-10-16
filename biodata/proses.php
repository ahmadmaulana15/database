<?php
include '../database2.php';
$bio = new Biodata();

$aksi = $_GET['aksi'];
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $umur = date(Y) - $tgl_lahir;
}
if ($aksi == "tambah") {
    $bio->create($nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama);
    header("location:index.php");
} elseif ($aksi == "update") {
    $bio->update($id, $nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $bio->delete($_GET['id']);
    header("location:index.php");

}
?>