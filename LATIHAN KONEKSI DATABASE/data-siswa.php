<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>

<center>
    <h2>TABEL DATA SISWA</h2>
    <table border="1" >
        <tr>
            <td>no</td>
            <td>nama</td>
            <td>umur</td>
            <td>email</td>
            <td>Update/Delete</td>
        </tr>

    <?php
    require_once('koneksi.php');
    $data = mysqli_query($koneksi, "SELECT *FROM tabel_siswa");

    while($siswa=mysqli_fetch_assoc($data)):
    ?>

    <tr>
        <td><?= isset($i) ? ++$i : $i=1; ?></td>
        <td><?= $siswa['nama_siswa'];?></td>
        <td><?= $siswa['umur'];?></td>
        <td><?= $siswa['email'];?></td>
        <td><a href="edit-siswa.php?id=<?= $siswa['id'];?>">Update</a>
        <a href="hapus-siswa.php?id=<?=$siswa['id']?>"onclick="return confirm
        ('Apakah anda yakin ingin menghapus data ini?')">Delete</a></td>
    </tr>
    <?php
    endwhile;
    ?>
    </table><br><br>
    <button type="submit"><a href="tambah-siswa.php" style="text-decoration: none">Kembali</a></button>
</center>
</body>
</html>