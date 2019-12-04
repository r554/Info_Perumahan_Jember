<?php
// koneksi database
include 'Login/koneksi.php';

// menangkap data yang di kirim dari form
$nik = $_POST['nik'];
$nama_dev = $_POST['nama_dev'];
$alamat_dev = $_POST['alamat_dev'];
$no_dev = $_POST['no_dev'];
$username_dev = $_POST['username_dev'];
$password_dev = $_POST['password_dev'];
// update data ke database
mysqli_query($koneksi, "UPDATE tabel_developer set nama_dev='$nama_dev', alamat_dev='$alamat_dev', no_dev='$no_dev', Email='', foto_profil_dev='', foto_ktp_dev='', foto_diri_dev='', status_developer='', username_dev='$username_dev', password_dev='$password_dev' where nik='$nik'");

// mengalihkan halaman kembali ke beranda.php
//header("location:akun.php");
