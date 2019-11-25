<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$nama_dev = $_POST['nama_dev'];
$alamat_dev = $_POST['alamat_dev'];
$no_dev = $_POST['no_dev'];
$username_dev = $_POST['username_dev'];
$password_dev = $_POST['password_dev'];
// update data ke database
mysqli_query($koneksi,"UPDATE tabel_developer SET nama_dev='$nama_dev',alamat_dev='$alamat_dev',no_dev='$no_dev',username_dev='$username_dev',password_dev='$password_dev where nik='$id'");

// mengalihkan halaman kembali ke beranda.php
header("location:akun.php");

?>