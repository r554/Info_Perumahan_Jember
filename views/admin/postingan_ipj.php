<?php
include 'login/koneksi.php';
?>

<html>

<head>
    <title>Postingan | IPJ</title>
    <link rel="stylesheet" href="../../assets/sb admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../assets/sb admin/dist/css/adminlte.min.css">
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
                        <li class="breadcrumb-item active">Postingan IPJ</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Postingan IPJ</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table border="0" class="table table-hover" style="text-align:center">
                        <tr>
                            <th>Kode Perumahan</th>
                            <th>Kode Data Rumah</th>
                            <th>Postingan</th>
                            <th colspan="2">Aksi</th>
                        </tr>

                        <?php

                        $data = mysqli_query($koneksi, "SELECT * FROM tabel_data_rumah");
                        //$row = mysqli_fetch_array($seleksi);

                        //$fetch = mysqli_fetch_array($query);
                        while ($row = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $row['kd_perumahan']; ?></td>
                                <td><?php echo $row['kd_data_rumah']; ?></td>
                                <td><?php echo $row['judul_postingan']; ?></td>
                                <td>
                                    <a href="detail_data_rumah.php?kd_data_rumah=<?php echo $row['kd_data_rumah']; ?>" class="btn btn-info btn-sm ">
                                        <span class="fas fa-clipboard-list"></span>
                                    </a>
                                </td>


                            </tr>
                        <?php } ?>
                    </table>
                </form>
            </div>
        </div>
    </section>
</body>

</html>