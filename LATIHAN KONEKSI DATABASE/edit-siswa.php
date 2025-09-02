<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT Siswa</title>
</head>
<body>
    <h1>EDIT DATA SISWA</h1>

    <?php
    require_once('koneksi.php');
    $id = $_GET['id'] ?? 0;

    $data=mysqli_query($koneksi, "SELECT * FROM tabel_siswa WHERE
    id = $id");
    $data_siswa=mysqli_fetch_assoc($data);

    $nama_siswa = $data_siswa['nama_siswa'] ?? '';
    $umur =  $data_siswa['umur'] ?? '';
    $email = $data_siswa ['email'] ?? '';
    
    ?>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $data_siswa['id'] ?>">

        <input type="text" name="nama_siswa" id="nama_siswa"
        value="<?= $data_siswa['nama_siswa'] ?>">

        <input type="text" name="umur" id="umur"
        value="<?= $data_siswa['umur'] ?>">

        <input type="text" name="email" id="email"
        value="<?= $data_siswa['email'] ?>">
        <button type="submit" name="ubah">Ubah</button>
        <button><a href="data-siswa.php">tengok</a></button>

    </form>

    <?php
    
    if(isset($_POST['ubah'])) {
       $nama = $_POST['nama_siswa'];
       $umur = $_POST['umur'];
       $email = $_POST['email'];

       //koneksi database
       require_once('koneksi.php');

       //update data
       $result = mysqli_query($koneksi,"UPDATE
       tabel_siswa SET nama_siswa='$nama',umur= $umur, email='$email' WHERE id
       =$id") or die (mysqli_error($koneksi));

        //cek apabila data berhasil diinput
       if($result) {
        echo "<script>window.alert('data berhasil di ubah!')</script>";
       }    
    }
    ?>
</body>
</html>