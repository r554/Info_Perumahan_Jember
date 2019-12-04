<?php
include '../developer/session.php';
include 'Login/koneksi.php';
?>


<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile Perumahan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Profil Perumahan</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <!-- Default box -->
    <div class="card">
        <!--<div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>-->

        <?php

        $id = (int) $_SESSION['id'];
        $query = mysqli_query($koneksi, "select * from tabel_perumahan where nik = '$id' ");
        $fetch = mysqli_fetch_array($query);
        ?>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <!-- Kd perumahan dan NIK -->
                <input type="hidden" name="kd_perumahan" value="<?php echo $fetch['kd_perumahan']; ?>"></input>
                <input type="hidden" name="nik" value="<?php echo $id; ?>"></<input>


                <h7>Foto Beranda</h7>
                <br>
                <img src="img/<?php echo $fetch['foto_beranda']; ?>" width="700px" height="200px">
                <!--<table border="1">
                    <tr>
                        <td>Nama Perumahan</td>
                        <td><input type="text" name="nama_perumahan" value="<?php echo $fetch['nama_perumahan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor Perumahan</td>
                        <td><input type="text" name="alamat_kantor_perumahan" value="<?php echo $fetch['alamat_kantor_perumahan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Almat Perumahan</td>
                        <td><input type="text" name="alamat_perumahan" value="<?php echo $fetch['alamat_perumahan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Deskripsi Informasi Perumahan Anda</td>
                        <td><input type="text" name="informasi_perumahan" value="<?php echo $fetch['informasi_perumahan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Vidio Profil Beranda </td>
                        <td><input type="text" name="vido_profile" value="<?php echo $fetch['vido_profile']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="Email" value="<?php echo $fetch['Email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>latitude</td>
                        <td><input type="text" name="latitude" value="<?php echo $fetch['latitude']; ?>"></td>
                    </tr>
                    <tr>
                        <td>longitude</td>
                        <td><input type="text" name="longitude" value="<?php echo $fetch['longitude']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td><input type="text" name="facebook" value="<?php echo $fetch['facebook']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td><input type="text" name="instagram" value="<?php echo $fetch['instagram']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Youtube</td>
                        <td><input type="text" name="youtube" value="<?php echo $fetch['youtube']; ?>"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="kirim" value="SIMPAN"></td>
                    </tr>


                </table>-->
            </form>

            <?php
            if (isset($_POST['kirim'])) {
                $kd_perumahan = $_POST['kd_perumahan'];
                $nik = $_POST['nik'];
                $nama_perumahan = $_POST['nama_perumahan'];
                $alamat_kantor_perumahan = $_POST['alamat_kantor_perumahan'];
                $alamat_perumahan = $_POST['alamat_perumahan'];
                $informasi_perumahan = $_POST['informasi_perumahan'];
                $vido_profile = $_POST['vido_profile'];
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
                $insert = mysqli_query($koneksi, "insert into tabel_perumahan values ('$kd_perumahan', '$nik', '$nama_perumahan', '$alamat_kantor_perumahan', '$alamat_perumahan', '$informasi_perumahan', '$vido_profile', '$Email', '$latitude', '$longitude', '$facebook', '$instagram', '$youtube', '$nama_file')");
                if ($insert) {
                    echo 'Data Berhasil di Simpan';
                } else {
                    echo 'Data Gagal di Simpan';
                }
            }
            ?>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Online Store Visitors</h3>
                            <a href="javascript:void(0);">View Report</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">820</span>
                                <span>Visitors Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 12.5%
                                </span>
                                <span class="text-muted">Since last week</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="visitors-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> This Week
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> Last Week
                            </span>
                        </div>
                    </div>
                </div>
                <!-- /.card -->

                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Products</h3>
                        <div class="card-tools">
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-download"></i>
                            </a>
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Sales</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Some Product
                                    </td>
                                    <td>$13 USD</td>
                                    <td>
                                        <small class="text-success mr-1">
                                            <i class="fas fa-arrow-up"></i>
                                            12%
                                        </small>
                                        12,000 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Another Product
                                    </td>
                                    <td>$29 USD</td>
                                    <td>
                                        <small class="text-warning mr-1">
                                            <i class="fas fa-arrow-down"></i>
                                            0.5%
                                        </small>
                                        123,234 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Amazing Product
                                    </td>
                                    <td>$1,230 USD</td>
                                    <td>
                                        <small class="text-danger mr-1">
                                            <i class="fas fa-arrow-down"></i>
                                            3%
                                        </small>
                                        198 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                                        Perfect Item
                                        <span class="badge bg-danger">NEW</span>
                                    </td>
                                    <td>$199 USD</td>
                                    <td>
                                        <small class="text-success mr-1">
                                            <i class="fas fa-arrow-up"></i>
                                            63%
                                        </small>
                                        87 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card text-center">
                        <div class="card-header border-0">
                            <h7 class="card-title-center">Hubungkan Profil Perumahan Andan Dengan Social Media</h7>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Masukan Alamat Social Perum Anda :</h5>
                        <br>
                        <br>
                        <h6>Facebook</h6>
                        <input type="text" style="width:300px;">
                        <h6>Instagram</h6>
                        <input type="text" style="width:300px;">
                        <h6>Youtube</h6>
                        <input type="text" style="width:300px;">
                    </div>
                </div>
            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title">Online Store Overview</h3>
                    <div class="card-tools">
                        <a href="#" class="btn btn-sm btn-tool">
                            <i class="fas fa-download"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-tool">
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                        <p class="text-success text-xl">
                            <i class="ion ion-ios-refresh-empty"></i>
                        </p>
                        <p class="d-flex flex-column text-right">
                            <span class="font-weight-bold">
                                <i class="ion ion-android-arrow-up text-success"></i> 12%
                            </span>
                            <span class="text-muted">CONVERSION RATE</span>
                        </p>
                    </div>
                    <!-- /.d-flex -->
                    <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                        <p class="text-warning text-xl">
                            <i class="ion ion-ios-cart-outline"></i>
                        </p>
                        <p class="d-flex flex-column text-right">
                            <span class="font-weight-bold">
                                <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                            </span>
                            <span class="text-muted">SALES RATE</span>
                        </p>
                    </div>
                    <!-- /.d-flex -->
                    <div class="d-flex justify-content-between align-items-center mb-0">
                        <p class="text-danger text-xl">
                            <i class="ion ion-ios-people-outline"></i>
                        </p>
                        <p class="d-flex flex-column text-right">
                            <span class="font-weight-bold">
                                <i class="ion ion-android-arrow-down text-danger"></i> 1%
                            </span>
                            <span class="text-muted">REGISTRATION RATE</span>
                        </p>
                    </div>
                    <!-- /.d-flex -->
                </div>
            </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->