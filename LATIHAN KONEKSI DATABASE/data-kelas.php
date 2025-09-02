<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
<center>
    <h1>DATA KELAS</h1>
    <table border="1" >
        <tr>
            <td>id</td>
            <td>tingkat</td>
            <td>jurusan</td>
            <td>rombel</td>
        </tr>

    <?php
    require_once('koneksi.php');
    $data = mysqli_query($koneksi, "SELECT *FROM tabel_kelas");

    while($kelas=mysqli_fetch_assoc($data)):
    ?>

    <tr>
        <td><?= isset($i) ? ++$i : $i=1; ?></td>
        <td><?= $kelas['tingkat'];?></td>
        <td><?= $kelas['jurusan'];?></td>
        <td><?= $kelas['rombel'];?></td>
    </tr>
    <?php endwhile; ?>
    </table>
</center>
</body>
</html>