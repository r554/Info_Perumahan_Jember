<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';
//include '../config/koneksi.php';
//$conn = new database();



// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from tabel_developer where username_dev='$username' and password_dev='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username_dev'] = $username;
    $_SESSION['status'] = "login";
    echo $_SESSION['username_dev'];
    header("location:admin/index.php");
} else {
    header("location:index.php?pesan=gagal");
}
