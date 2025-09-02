<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>LIST BELANJA PERALATAN SEKOLAH</h1>
        <table border="1">
            <tr>
                <td>No</td>
                <td>Barang</td>
                <td>Jumlah Pembelian</td>
                <td>Harga Satuan</td>             
            </tr>
    <?php
    require_once('koneksi.php');
    $data = mysqli_query($koneksi,"SELECT *FROM list_belanja");

    while($barang=mysqli_fetch_assoc($data)):
    ?>

    <tr>
        <td><?= isset($i)? ++$i: $i=1; ?></td>
        <td><?= $barang['nama_barang'];?></td>
        <td><?= $barang['jumlah'];?></td>
        <td><?= $barang['harga_satuan'];?></td>
    </tr>
    <?php endwhile;?>
        </table>
    </center>
</body>
</html>