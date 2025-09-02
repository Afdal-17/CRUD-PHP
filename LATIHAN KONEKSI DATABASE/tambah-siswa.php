<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <h1>TAMBAH DATA SISWA</h1>

    <form action="" method="post">
        <input type="text" name="nama_siswa" id="nama_siswa"
        placeholder="Isi Nama..."><br><br>
        <input type="text" name="umur" id="umur"
        placeholder="Isi Usia..."><br><br>
        <input type="text" name="email" id="email"
        placeholder="isi email..."><br><br>
        <button type="submit" name="tambah">Tambah</button><br><br>
        <button type="submit"><a href="data-siswa.php">Lihat</a></button>

    </form>

    <?php
    
    if(isset($_POST['tambah'])) {
       $nama = $_POST['nama_siswa'];
       $umur = $_POST['umur'];
       $email = $_POST['email'];

       //koneksi database
       require_once('koneksi.php');

       //insert data
       $result = mysqli_query($koneksi,"INSERT INTO
       tabel_siswa VALUES('','$nama','$umur','$email')") or die
       (mysqli_error($koneksi));

        //cek apabila data berhasil diinput
       if($result) {
        echo "<script>window.alert('data berhasil ditambahkan!')</script>";
       }    
    }
    ?>
</body>
</html>