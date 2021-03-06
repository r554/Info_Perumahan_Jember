<?php
include 'login/koneksi.php';
?>

<html>

<head>
    <title>Akun | Terdaftar</title>
</head>

<body>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Akun Developer</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header bg-secondary">
                <h3 class="card-title">Akun Developer Info Perumahan Jember</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table border="0" class="table table-hover" style="text-align:center">
                        <thead class="thead-light">
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Email</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>

                        <?php
                        $seleksi = mysqli_query($koneksi, "SELECT * FROM tabel_developer where status_developer = 1 ");
                        //$row = mysqli_fetch_array($seleksi);

                        //$fetch = mysqli_fetch_array($query);
                        while ($row = mysqli_fetch_array($seleksi)) {
                            ?>
                        <tr>
                            <td><?php echo $row['nik']; ?></td>
                            <td><?php echo $row['nama_dev']; ?></td>
                            <td><?php echo $row['alamat_dev']; ?></td>
                            <td><?php echo $row['no_dev']; ?></td>
                            <td><?php echo $row['email_dev']; ?></td>
                            <td>
                                <a href="?page=lihat_akun_terdaftar&?nik=<?php echo $row['nik'] ?>"
                                    class="btn btn-info btn-xs ">
                                    <span class="fas fa-pen-square"> Detail</span>
                                </a>

                                <!--<a href="hapus_akun.php?nik=<?php echo $row['nik'] ?>" class="btn btn-danger btn-sm "
                                    name="kirim">
                                    <span class="far fa-trash-alt"></span>
                                </a>-->
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $row['nik']; ?>" name="nik">
                                    <button type="submit" class="btn btn-danger btn-xs" name="kirim">
                                        <span class="fas fa-clipboard-list"> Hapus</span>
                                    </button>
                                </form>
                            </td>

                        </tr>
                        <?php } ?>
                    </table>
                    <?php
                        if (isset($_POST['kirim'])) {
                            $nik = $_POST['nik'];
                                $status_developer = 2;

                                $update = mysqli_query($koneksi, "UPDATE tabel_developer SET status_developer='$status_developer' where nik='$nik'");
                                if ($update) {
                                    echo "<script>alert('Akun Berhasil Di Non-Aktifkan');window.location='?page=akun_terdaftar'</script>";
                                } else {
                                    echo "<script>alert('Akun Gagal Di Non-Aktifkan');window.location='?page=akun_terdaftar'</script>";
                                }
                            }
                    ?>
                </form>
            </div>
        </div>
    </section>
</body>

</html>