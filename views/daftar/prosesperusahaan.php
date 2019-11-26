<?php
include 'konek.php';
$kd_perumahan=$_POST['kd_perumahan'];
$nik = $_POST['nik'];
$nama_perumahan = $_POST['nama_perumahan'];
$alamat_kantor_perumahan = $_POST['alamat_kantor_perumahan'];
$alamat_perumahan = $_POST['alamat_perumahan'];
$informasi_perumahan = $_POST['informasi_perumahan'];
$vidio_profile = $_POST['vidio_profile'];
$Email = $_POST['Email'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$facebook = $_POST['facebook'];
$instagram = $_POST['instagram'];
$youtube = $_POST['youtube'];
$foto_siub = $_POST['foto_siub'];



//echo $nama;
$query = mysqli_query($konek,"INSERT INTO tabel_perumahan values ('$kd_perumahan','$nik','$nama_perumahan','$alamat_kantor_perumahan','$alamat_perumahan',
'$informasi_perumahan','$vidio_profile','$Email','$latitude','$longitude','$facebook','$instagram','$youtube','')");
//$string = "INSERT INTO tabel_developer values ('$nik')";
//echo $string;
//$query = mysqli_query($konek,$string);
//echo "inputan dari form =$nama";

?>