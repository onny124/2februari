<?php
//koneksi database
include 'koneksi.php';

//menangkap data id yang di kirim dari url
$id = $_GET['id'];

//menghapus data dari database
mysqli_query($db, "DELETE from tb_jurusan where jurusan_id = '$id'");
mysqli_query($db, "DELETE from tb_peserta where id = '$id'");

//mengalihkan halaman kembali ke index.php
header("location:tampil.php?status=sukses");
?>