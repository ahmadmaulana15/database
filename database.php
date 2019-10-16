<?php

class Database
{
    //$host = untuk memberitau kita menggunakan server lokal yaitu localhost,
    //$user= username dari localhost
    //$pass = pasword untuk masuk ke localhost mysql kita,kosongkan jika tidak menggunakan password
    //$db = untuk memberi akses kita mengunakan database mana di server lokal kita (localhost)
    public $host = "localhost", $user = "root", $pass = 123, $db = "latihan";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if ($this->koneksi) {
           // echo"berhasil";
        } else {
            return "Koneksi databse gagal";
        }
    }
}
class Siswa extends Database
{
    //menampilkan semua data 
    public function index()
    {
        $datasiswa = mysqli_query($this->koneksi, "select *from siswa");
        //var_dump($datasiswa);
        return $datasiswa;
    }
    //menambah data
    public function create($nis, $alamat, $nama)
    {
        mysqli_query($this->koneksi, "insert into siswa values('','$nis','$nama','$alamat')");
    }
    // menampilkan data berdasarka ID
    public function show($id)
    {
        $datasiswa = mysqli_query($this->koneksi, "select * from siswa where id='$id'");
        return $datasiswa;
    }
    //menampilkan data berdasarkan id
    public function edit($id)
    {
        $datasiswa = mysqli_query($this->koneksi, "select * from siswa where id='$id'");
        return $datasiswa;
    }
    //mengupdate data berdasarkan id
    public function update($id, $nis, $nama, $alamat)
    {
        mysqli_query($this->koneksi, "update siswa set nis='$nis', nama='$nama',alamat='$alamat',id='$id'");
    }
    //menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from siswa where id='$id'");
    }
}
//koneksi DB
$db = new Database();
?>