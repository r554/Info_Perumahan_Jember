<?php
include 'konek.php';
$nik = $_POST["nik"];
$nama_dev = $_POST['nama_dev'];
$alamat_dev = $_POST['alamat_dev'];
$no_dev = $_POST['no_dev'];
$Email = $_POST['Email'];
$username_dev = $_POST['username'];
$password_dev = $_POST['password'];


$query = mysqli_query($konek,"INSERT INTO tabel_developer values ('$nik','$nama_dev','$alamat_dev','$no_dev',
'$Email','','','','','$username_dev','$password_dev')");

header("location:daftarperusahaan.php");

?>