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
    <title>Latihan-crud - Edit data</title>
</head>
<body>
    <?php
    foreach ($bio->edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $tgl_lahir = $data['tgl_lahir'];
        $jenis_kelamin = $data['jk'];
        $agama = $data['agama'];
    }
    ?>
    <fieldset>
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
    </fieldset>
</body>
</html>