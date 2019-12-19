<?php
include 'login/koneksi.php';
$delete = mysqli_query($koneksi, "DELETE FROM tabel_data_rumah WHERE kd_data_rumah = '" . $_GET['kd_data_rumah'] . "'");
if ($delete) {
    echo 'Sukses';
    header('location:index.php');
} else {
    echo 'Gagal';
}
?>