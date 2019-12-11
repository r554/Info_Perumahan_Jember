<?php
include('Login/koneksi.php');
?>

<html>

<head>
    <title>Tambah|Postingan</title>
</head>

<body>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Postingan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Postingan</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>
            </div>
            <div class="card-body">

                <a href="?page=tambah_postingan">
                    <input type="submit" class="btn btn-info btn-xs" value="Tambah Postingan">
                </a>
                <div class="card-body table-responsive p-0">
                    <table border="0" class="table table-hover" style="text-align:center">
                        <tr>
                            <th>Judul Postingan</th>
                            <th>Tipe Rumah</th>
                            <th>Harga</th>
                            <th>Jumlah Unit</th>
                            <th>Status</th>
                            <th colspan="2">Aksi</th>
                        </tr>

                        <?php
                        //$query = mysqli_query($koneksi, "select * from tabel_developer");
                        $id = (int) $_SESSION['id'];
                        $seleksi = mysqli_query($koneksi, "SELECT * FROM tabel_perumahan where nik = '$id' ");
                        $rowt = mysqli_fetch_array($seleksi);
                        $kd_perumahan = $rowt['kd_perumahan'];
                        $query = mysqli_query($koneksi, "SELECT * FROM tabel_data_rumah  where kd_perumahan = '$kd_perumahan'");


                        //$fetch = mysqli_fetch_array($query);
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $row['judul_postingan']; ?></td>
                                <td><?php echo $row['tipe_rumah']; ?></td>
                                <td><?php echo $row['harga']; ?></td>
                                <td><?php echo $row['jumlah_unit_rumah']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                                <td>
                                    <a href="?page=edit_postingan&?kd_data_rumah=<?php echo $row['kd_data_rumah'] ?>" class="btn btn-info ">
                                        <span class="fas fa-pen-square"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href="hapus_postingan.php?kd_data_rumah=<?php echo $row['kd_data_rumah'] ?>" class="btn btn-danger ">
                                        <span class="far fa-trash-alt"></span>
                                    </a>
                                </td>


                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </section>
</body>

</html>