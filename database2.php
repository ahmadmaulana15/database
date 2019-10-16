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
class Biodata extends Database
{
    //menampilkan semua data 
    public function index()
    {
        $databio = mysqli_query($this->koneksi, "select * from biodata");
        //var_dump($datasiswa);
        return $databio;
    }
    //menambah data
    public function create($nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama)
    {
        mysqli_query($this->koneksi, "insert into biodata values('',$nama','$alamat','$tgl_lahir','$jenis_kelamin','$agama')");
    }
    // menampilkan data berdasarka ID
    public function show($id)
    {
        $databio = mysqli_query($this->koneksi, "select * from biodata where id='$id'");
        return $databio;
    }
    //menampilkan data berdasarkan id
    public function edit($id)
    {
        $databio = mysqli_query($this->koneksi, "select * from biodata where id='$id'");
        return $databio;
    }
    //mengupdate data berdasarkan id
    public function update($id, $nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama)
    {
        mysqli_query($this->koneksi, "update biodata set nama='$nama',alamat='$alamat',tgl_lahir='$tgl_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',id='$id'");
    }
    //menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from biodata where id='$id'");
    }
}
//koneksi DB
$db = new Database();
?>