<?php
include 'login/koneksi.php';
?>

<html>

<head>
    <title>Edit | Profil</title>
</head>

<body>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="?page=">Home</a></li>
                        <li class="breadcrumb-item active">Data Developer</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <form action="" method="POST" enctype="multipart/form-data">
            <?php

            $id = $_GET['?nik'];

            $query = mysqli_query($koneksi, "select * from tabel_developer where nik = '$id' ");
            $fetch = mysqli_fetch_array($query);
            ?>
            <input type="hidden" value="<?php echo $fetch['status_developer']; ?>">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5>Identitas Developer:</h5>
                                    <div class="form-group">
                                        <label for="">NIK</label><br>
                                        <input type="text" name="nik" value="<?php echo $fetch['nik']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Nama</label><br>
                                        <input type="text" name="nama_admin" value="<?php echo $fetch['nama_dev']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">No Telepon</label><br>
                                        <input type="text" name="no_dev" value="<?php echo $fetch['no_dev']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Email</label><br>
                                        <input type="text" name="Email" value="<?php echo $fetch['Email']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Username</label><br>
                                        <input type="text" name="username_dev" value="<?php echo $fetch['username_dev']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <label for="">Password</label><br>
                                        <input type="text" name="password_dev" value="<?php echo $fetch['password_dev']; ?>" style="width: 100%;">
                                    </div>
                                    <!-- /.form-group -->
                                    <div class="form-group">
                                        <input type="submit" name="kirim" value="Hapus" style="width: 100%;" class="btn btn-info">
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title-center">Dokumen Foto Developer :</h5>
                                    <div class="form-group">
                                        <label for="">Foto Profil</label><br>
                                        <img src="../developer/img/data_developer/foto_profil/<?php echo $fetch['foto_profil_dev']; ?>" width="300px" height="300x" style="width: 100%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto KTP</label><br>
                                        <img src="../developer/img/data_developer/foto_ktp/<?php echo $fetch['foto_ktp_dev']; ?>" width="300px" height="300px" style="width: 100%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto Diri Beserta KTP</label><br>
                                        <img src="../developer/img/data_developer/foto_diri_ktp/<?php echo $fetch['foto_diri_dev']; ?>" width="300px" height="300px" style="width: 100%;">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </form>

        <?php
        if (isset($_POST['kirim'])) {
            $nik = $_POST['nik'];
            $status_developer = 1;

            $update = mysqli_query($koneksi, "UPDATE tabel_developer SET status_developer='$status_developer' where nik='$nik'");
            if ($update) {
                echo 'Data Berhasil di Simpan';
                //echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo 'Data Gagal di Simpan';
            }
        }
        ?>




    </section>


</body>

</html>