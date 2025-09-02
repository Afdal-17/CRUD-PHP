<?php
require_once 'koneksi.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $result = mysqli_query($koneksi, "DELETE FROM tabel_siswa WHERE id = $id") or die(mysqli_error($koneksi));

  if ($result) {
    echo "<script>alert('Data berhasil dihapus!');</script>";
    echo "<script>location='data-siswa.php';</script>";
  } else {
    echo "<script>alert('Gagal menghapus data!');</script>";
    echo "<script>location='data-siswa.php';</script>";
  }
} else {
  echo "<script>alert('ID tidak ditemukan!');</script>";
  echo "<script>location='data-siswa.php';</script>";
}
?>