<?php
include '../database2.php';
$siswa = new Siswa();
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
    foreach ($siswa->edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
    }
    ?>
    <fieldset>
        <legend>Edit data siswa</legend>
        <form action="proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama siswa</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>"required </td>
                </tr>
                <tr>
                    <th>ALamat</th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>