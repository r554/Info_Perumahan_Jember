<?php
include 'konek.php';
$nik = $_POST["nik"];
$nama_dev = $_POST['nama_dev'];
$alamat_dev = $_POST['alamat_dev'];
$no_dev = $_POST['no_dev'];
$username_dev = $_POST['username'];
$password_dev = $_POST['password'];
//echo $nama;
$query = mysqli_query($konek,"INSERT INTO tabel_developer values ('$nik','$nama_dev','$alamat_dev','$no_dev','','','','$username_dev','$password_dev')");
//$string = "INSERT INTO tabel_developer values ('$nik')";
//echo $string;
//$query = mysqli_query($konek,$string);
//echo "inputan dari form =$nama";

?>