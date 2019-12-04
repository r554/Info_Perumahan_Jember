<?php
include 'Login/koneksi.php';
?>

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- Main content -->
    <section class="content">

        <?php

        $id = (int) $_SESSION['id'];

        $query = mysqli_query($koneksi, "select * from tabel_developer where nik = '$id' ");
        $seleksi = mysqli_query($koneksi, "SELECT * FROM tabel_perumahan where nik = '$id' ");
        $fetch = mysqli_fetch_array($query);
        $row = mysqli_fetch_array($seleksi);
        //var_dump($id);
        ?>

        <!-- Default box -->
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <h5>Tambah Data Rumah Yang Anda Sediakan Pada Perumahan Anda</h5>
                </div>
                <br>
                <br>
                <form action="" method="POST" enctype="multipart/form-data">
                    <table border="0">
                        <h8><b>Fasilitas Rumah<b></h8>
                        <tr>
                            <td>NIK</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" value="<?php echo $id; ?>"></td>
                        </tr>
                        <tr>
                            <td>Kd_Data_Rumah</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="kd_data_rumah" id=""></td>
                        </tr>
                        <tr>
                            <td>Kd_Perumahan</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="kd_perumahan" value="<?php echo $row['kd_perumahan']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Tipe_Ruumah</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="tipe_rumah" id=""></td>
                        </tr>
                        <tr>
                            <td>Jumlah Unit</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="jumlah_unit_rumah" id=""></td>
                        </tr>
                        <tr>
                            <td>Jumlah Kamar</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="jumlah_kamar" id=""></td>
                        </tr>
                        <tr>
                            <td>Jumlah WC</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="jumlah_wc" id=""></td>
                        </tr>
                        <tr>
                            <td>Harga Kisaran</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="harga" id=""></td>
                        </tr>
                        <tr>
                            <td>
                                <h6><b>Spesifikasi Rumah</b></h6>
                            </td>
                        </tr>
                        <tr>
                            <td>Luas Tanah</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="luas_tanah" id=""></td>
                        </tr>
                        <tr>
                            <td>Luas Bangunan</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="luas_bangunan" id=""></td>
                        </tr>
                        <tr>
                            <td>Sumber Air</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="sumber_air" id=""></td>
                        </tr>
                        <tr>
                            <td>Daya Listrik</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="daya_listrik" id=""></td>
                        </tr>
                        <tr>
                            <td>Pondasi Ruumah</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="pondasi" id=""></td>
                        </tr>
                        <tr>
                            <td>Dinding Ruumah</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="dinding" id=""></td>
                        </tr>
                        <tr>
                            <td>Daun Pintu</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="daun_pintu" id=""></td>
                        </tr>
                        <tr>
                            <td>Kusen</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="kusen" id=""></td>
                        </tr>
                        <tr>
                            <td>Keramik Rumah</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="keramik" id=""></td>
                        </tr>
                        <tr>
                            <td>Pintu Kamar Mandi</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="pintu_km_mandi" id=""></td>
                        </tr>
                        <tr>
                            <td>Kerangka Atap</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="kerangka_atap" id=""></td>
                        </tr>
                        <tr>
                            <td>Rangka Plafon</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="rangka_plafon" id=""></td>
                        </tr>
                        <tr>
                            <td>Tutup Plafon</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="tutup_plafon" id=""></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td></td>
                            <td>:</td>
                            <td></td>
                            <td><input type="text" name="status" id=""></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="kirim" value="SIMPAN"></td>
                        </tr>
                    </table>
                </form>

                <?php
                if (isset($_POST['kirim'])) {
                    $kd_data_rumah = $_POST['kd_data_rumah'];
                    $kd_perumahan = $_POST['kd_perumahan'];
                    $tipe_rumah = $_POST['tipe_rumah'];
                    $jumlah_unit_rumah = $_POST['jumlah_unit_rumah'];
                    $jumlah_kamar = $_POST['jumlah_kamar'];
                    $jumlah_wc = $_POST['jumlah_wc'];
                    $harga = $_POST['harga'];
                    $luas_tanah = $_POST['luas_tanah'];
                    $luas_bangunan = $_POST['luas_bangunan'];
                    $sumber_air = $_POST['sumber_air'];
                    $daya_listrik = $_POST['daya_listrik'];
                    $pondasi = $_POST['pondasi'];
                    $dinding = $_POST['dinding'];
                    $daun_pintu = $_POST['daun_pintu'];
                    $kusen = $_POST['kusen'];
                    $keramik = $_POST['keramik'];
                    $pintu_km_mandi = $_POST['pintu_km_mandi'];
                    $kerangka_atap = $_POST['kerangka_atap'];
                    $rangka_plafon = $_POST['rangka_plafon'];
                    $tutup_plafon = $_POST['tutup_plafon'];
                    $status = $_POST['status'];

                    // Upload Foto profile Developer
                    // $nama_file = $_FILES['foto_beranda']['name'];
                    //$source = $_FILES['foto_beranda']['tmp_name'];
                    //$folder = './img/';
                    //move_uploaded_file($source, $folder . $nama_file);

                    // Query untuk memasukan data ke Database
                    $insert = mysqli_query($koneksi, "insert into tabel_data_rumah values ('$kd_data_rumah','$kd_perumahan', '$tipe_rumah', '$jumlah_unit_rumah', '$jumlah_kamar', '$jumlah_wc', '$harga', '$luas_tanah', '$luas_bangunan', '$sumber_air', '$daya_listrik', '$pondasi', '$dinding', '$daun_pintu', '$kusen', '$keramik', '$pintu_km_mandi', '$kerangka_atap', '$rangka_plafon', '$tutup_plafon', '$status', '', '', '', '', '')");
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
    <!-- /.content -->

</section>
<!-- /.content-wrapper -->

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