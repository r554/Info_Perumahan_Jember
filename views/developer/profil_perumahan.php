<?php ob_start();
include 'Login/koneksi.php';
?>

<html>

<head>
    <title>Edit | Profil</title>
</head>

<body>
    <?php
    $id = (int) $_SESSION['id'];
    $query = mysqli_query($koneksi, "select * from tabel_perumahan where nik = '$id' ");
    $fetch = mysqli_fetch_array($query);
    $cek = $fetch['kd_perumahan'];


    if ($cek == NULL) {
        //echo 'Data kosong bos'; 
        ?>


        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="kd_perumahan" required></<input>
            <input type="text" name="nik" value="<?php echo $id; ?>"></<input>
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Profil Perumahan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <label>Foto Beranda</label><br>
                            <img src="img/<?php echo $fetch['foto_beranda']; ?>" width="700px" height="280px" style="width: 100%;">
                            <br>
                            <input type="file" name="foto_beranda" style="width: 100%;"></<input>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Perumahan</label><br>
                                    <input type="text" name="nama_perumahan" value="<?php echo $fetch['nama_perumahan']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Alamat Kantor Pemasaran</label><br>
                                    <input type="text" name="alamat_kantor_perumahan" value="<?php echo $fetch['alamat_kantor_perumahan']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Alamat Perumahan</label><br>
                                    <textarea name="alamat_perumahan" id="" cols="30" rows="10" style="width: 100%;"><?php echo $fetch['alamat_perumahan']; ?></textarea>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Kecamatan Perumahan</label><br>
                                    <input type="text" name="kecamatan_perum" value="<?php echo $fetch['kecamatan_perum']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Kelurahan Perumahan</label><br>
                                    <input type="text" name="kelurahan_perum" value="<?php echo $fetch['kelurahan_perum']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Deskripsi Informasi Perumahan</label>
                                    <textarea name="informasi_perumahan" id="" cols="30" rows="10" style="width: 100%;"><?php echo $fetch['informasi_perumahan']; ?></textarea>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Email Kantor Pemasaran</label>
                                    <input type="email" name="Email" value="<?php echo $fetch['Email']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Latitude</label><br>
                                    <input type="text" name="latitude" value="<?php echo $fetch['latitude']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Longitude</label><br>
                                    <input type="text" name="longitude" value="<?php echo $fetch['longitude']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->



                            <div class="col-md-6">
                                <label for="">Hubungkan Profil Perumahan Dengan Social Media:</label>
                                <div class="form-group">
                                    <label>Instagram</label><br>
                                    <input type="text" name="instagram" value="<?php echo $fetch['instagram']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Facebook</label><br>
                                    <input type="text" name="facebook" value="<?php echo $fetch['facebook']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Youtube</label><br>
                                    <input type="text" name="youtube" value="<?php echo $fetch['youtube']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Vidio Profil Beranda</label><br>
                                    <input type="text" name="vidio_profile" value="<?php echo $fetch['vidio_profile']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info btn-sm" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- / .Container Fluid -->

        </form>

        <?php
            if (isset($_POST['kirim'])) {
                $kd_perumahan = $_POST['kd_perumahan'];
                $nik = $_POST['nik'];
                $nama_perumahan = $_POST['nama_perumahan'];
                $alamat_kantor_perumahan = $_POST['alamat_kantor_perumahan'];
                $alamat_perumahan = $_POST['alamat_perumahan'];
                $kecamatan_perum = $_POST['kecamatan_perum'];
                $kelurahan_perum = $_POST['kelurahan_perum'];
                $informasi_perumahan = $_POST['informasi_perumahan'];
                $vidio_profile = $_POST['vidio_profile'];
                $Email = $_POST['Email'];
                $latitude = $_POST['latitude'];
                $longitude = $_POST['longitude'];
                $facebook = $_POST['facebook'];
                $instagram = $_POST['instagram'];
                $youtube = $_POST['youtube'];
                // Upload Foto profile Developer
                $nama_file = $_FILES['foto_beranda']['name'];
                $source = $_FILES['foto_beranda']['tmp_name'];
                $folder = './img/';
                move_uploaded_file($source, $folder . $nama_file);

                // Query untuk memasukan data ke Database
                $insert = mysqli_query($koneksi, "insert into tabel_perumahan values ('$kd_perumahan', '$nik', '$nama_perumahan', '$alamat_kantor_perumahan', '$alamat_perumahan', '$kecamatan_perum', '$kelurahan_perum', '$informasi_perumahan', '$vidio_profile', '$Email', '$latitude', '$longitude', '$facebook', '$instagram', '$youtube', '$nama_file')");
                if ($insert) {
                    echo 'Data Berhasil di Simpan';
                    echo "<meta http-equiv='refresh' content='0'>";
                } else {
                    echo 'Data Gagal di Simpan';
                }
            }
            ?>



    <?php
    } else {
        //echo 'Data ready';
        ?>



        <form action="" method="POST" enctype="multipart/form-data">
            <!-- Kd perumahan dan NIK -->
            <input type="hidden" name="kd_perumahan" value="<?php echo $fetch['kd_perumahan']; ?>"></input>
            <input type="hidden" name="nik" value="<?php echo $id; ?>"></<input>

            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Profil Perumahan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <label>Foto Beranda</label><br>
                            <img src="img/<?php echo $fetch['foto_beranda']; ?>" width="700px" height="280px" style="width: 100%;">
                            <br>
                            <input type="file" name="foto_beranda" style="width: 100%;"></<input>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Perumahan</label><br>
                                    <input type="text" name="nama_perumahan" value="<?php echo $fetch['nama_perumahan']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Alamat Kantor Pemasaran</label><br>
                                    <input type="text" name="alamat_kantor_perumahan" value="<?php echo $fetch['alamat_kantor_perumahan']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Alamat Perumahan</label><br>
                                    <textarea name="alamat_perumahan" id="" cols="30" rows="10" style="width: 100%;"><?php echo $fetch['alamat_perumahan']; ?></textarea>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Kecamatan Perumahan</label><br>
                                    <input type="text" name="kecamatan_perum" value="<?php echo $fetch['kecamatan_perum']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Kelurahan Perumahan</label><br>
                                    <input type="text" name="kelurahan_perum" value="<?php echo $fetch['kelurahan_perum']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Deskripsi Informasi Perumahan</label>
                                    <textarea name="informasi_perumahan" id="" cols="30" rows="10" style="width: 100%;"><?php echo $fetch['informasi_perumahan']; ?></textarea>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Email Kantor Pemasaran</label>
                                    <input type="email" name="Email" value="<?php echo $fetch['Email']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Latitude</label><br>
                                    <input type="text" name="latitude" value="<?php echo $fetch['latitude']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Longitude</label><br>
                                    <input type="text" name="longitude" value="<?php echo $fetch['longitude']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->



                            <div class="col-md-6">
                                <label for="">Hubungkan Profil Perumahan Dengan Social Media:</label>
                                <div class="form-group">
                                    <label>Instagram</label><br>
                                    <input type="text" name="instagram" value="<?php echo $fetch['instagram']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Facebook</label><br>
                                    <input type="text" name="facebook" value="<?php echo $fetch['facebook']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Youtube</label><br>
                                    <input type="text" name="youtube" value="<?php echo $fetch['youtube']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="">Vidio Profil Beranda</label><br>
                                    <input type="text" name="vidio_profile" value="<?php echo $fetch['vidio_profile']; ?>" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info btn-sm" style="width: 100%;">
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- / .Container Fluid -->
        </form>

        <?php
            if (isset($_POST['kirim'])) {
                $kd_perumahan = $_POST['kd_perumahan'];
                $nik = $_POST['nik'];
                $nama_perumahan = $_POST['nama_perumahan'];
                $alamat_kantor_perumahan = $_POST['alamat_kantor_perumahan'];
                $alamat_perumahan = $_POST['alamat_perumahan'];
                $kecamatan_perum = $_POST['kecamatan_perum'];
                $kelurahan_perum = $_POST['kelurahan_perum'];
                $informasi_perumahan = $_POST['informasi_perumahan'];
                $vidio_profile = $_POST['vidio_profile'];
                $Email = $_POST['Email'];
                $latitude = $_POST['latitude'];
                $longitude = $_POST['longitude'];
                $facebook = $_POST['facebook'];
                $instagram = $_POST['instagram'];
                $youtube = $_POST['youtube'];
                // Upload Foto profile Developer
                $nama_file = $_FILES['foto_beranda']['name'];
                $source = $_FILES['foto_beranda']['tmp_name'];
                $folder = './img/';
                //move_uploaded_file($source, $folder . $nama_file);

                // Query untuk memasukan data ke Database
                if ($nama_file != '') {
                    move_uploaded_file($source, $folder . $nama_file);
                    $update = mysqli_query($koneksi, "UPDATE tabel_perumahan SET nik='$nik', nama_perumahan='$nama_perumahan', alamat_kantor_perumahan='$alamat_kantor_perumahan', alamat_perumahan='$alamat_perumahan', kecamatan_perum='$kecamatan_perum', kelurahan_perum='$kelurahan_perum', informasi_perumahan='$informasi_perumahan', vidio_profile='$vidio_profile', Email='$Email', latitude='$latitude', longitude='$longitude', facebook='$facebook', instagram='$instagram', youtube='$youtube', foto_beranda='$nama_file' WHERE kd_perumahan='$kd_perumahan'");
                    if ($update) {
                        echo 'Data Berhasil di Simpan';
                        echo "<meta http-equiv='refresh' content='0'>";
                    } else {
                        echo 'Data Gagal di Simpan';
                    }
                } else {
                    $update = mysqli_query($koneksi, "UPDATE tabel_perumahan SET nik='$nik', nama_perumahan='$nama_perumahan', alamat_kantor_perumahan='$alamat_kantor_perumahan', alamat_perumahan='$alamat_perumahan', kecamatan_perum='$kecamatan_perum', kelurahan_perum='$kelurahan_perum', informasi_perumahan='$informasi_perumahan', vidio_profile='$vidio_profile', Email='$Email', latitude='$latitude', longitude='$longitude', facebook='$facebook', instagram='$instagram', youtube='$youtube' WHERE kd_perumahan='$kd_perumahan'");
                    if ($update) {
                        echo 'Data Berhasil di Simpan 2';
                        echo "<meta http-equiv='refresh' content='0'>";
                    } else {
                        echo 'Data Gagal di Simpan';
                    }
                }
            }
            ?>

    <?php
    }
    ?>
</body>

</html>