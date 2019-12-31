<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Homes Template">
    <meta name="keywords" content="Homes, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../assets/css/custom.css">
    <title>Single Property Page | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
</head>


<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    <nav class="navbar navbar-expand-lg fixed-top " style="background-color: #353666;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <!--<a class="navbar-brand" href="index.php">Home</a>-->
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active text-white">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="index.php">
                    <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
                </form>
            </div>
        </div>
    </nav>



    <?php

    $kd_perumahan = $_GET['kd_perumahan'];
    $query = "SELECT * FROM tabel_perumahan 
    INNER JOIN tabel_developer ON tabel_developer.nik = tabel_perumahan.nik 
    where kd_perumahan = $kd_perumahan";
    $sql = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    $rowt = mysqli_fetch_array($sql);

    ?>

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg single-property"
        data-setbg="../developer/img/<?php echo $rowt['foto_beranda']; ?>">
        <div class="container hero-text text-white">
            <h2>Profil perusahaan</h2>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Filter Search Section Begin -->
    <div class="filter-search">
        <div class="container-fluid ">
            <form class="filter-form">
                <div class="row">
                    <div class="col-xs-9"></div>
                    <div class="col-md-1">
                        <img src="../developer/img/data_developer/foto_profil/<?php echo $rowt['foto_profil_dev']; ?>"
                            height="120" width="120" style="border-radius: 100%" alt="">
                    </div>

                    <div class="col-5">
                        <h4><?php echo $rowt['nama_perumahan']; ?></h4>
                        <label><img src="img/check.png" alt="">Admin Perumahan</h5>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- Filter Search Section End -->


    <!-- Embed Youtube -->
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5 float-left ">
                <div class="embed-responsive embed-responsive-21by9" style="width: 560px; height:315px;">
                    <iframe class="embed-responsive-item" src="<?php echo $rowt['vidio_profile']; ?>"></iframe>
                </div>
            </div>
            <div class="col-4 float-left ">
                <p><?php echo $rowt['informasi_perumahan']; ?></p>
            </div>

        </div>
    </div>
    <!-- Embed Youtube End -->


    <!-- Content Menu -->

    <section class="hotel-rooms spad" style="background-color: #F0F0F0">
        <div class="container">
            <br>
            <h3 class="text-center"> Produk <?php echo $rowt['nama_perumahan']; ?></h3>
            <h5 class="text-center">Temukan Rumah Impian Anda di sini.</h5>
            <br>

            <div class="row">

                <?php

                    $tampil = mysqli_query($koneksi, "SELECT * FROM tabel_data_rumah WHERE kd_perumahan=$kd_perumahan");

                    while ($row = mysqli_fetch_array($tampil)) {
                        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                        <div class="room-img set-bg"
                            data-setbg="../developer/img/postingan/<?php echo $row['foto_1']; ?>">
                            <a href="#" class="room-content">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5><?php echo $row['judul_postingan']; ?></h5>
                                    <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                    <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show on
                                            Map</span></a>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="size">
                                        <p>Luas Bangunan</p>
                                        <img src="img/rooms/size.png" alt="">
                                        <i class="flaticon-bath"></i>
                                        <span><?php echo $row['luas_bangunan']; ?></span>
                                    </div>
                                    <div class="beds">
                                        <p>Kamar Tidur</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span><?php echo $row['jumlah_kamar']; ?></span>
                                    </div>
                                    <div class="baths">
                                        <p>Kamar Mandi</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span><?php echo $row['jumlah_wc']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="room-price">
                                <p>Mulai Dari -</p>
                                <span><?php echo $row['harga']; ?></span>
                            </div>
                            <a href="detail.php?kd_data_rumah=<?php echo $row['kd_data_rumah'] ?>"
                                class="site-btn btn-line">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>


    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h3 class="text-center">Alamat Kantor Pemasaran Kami</h3>
                <br>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107002.020096289!2d-96.80666618302782!3d33.06138629992991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c21da13c59513%3A0x62aa036489cd602b!2sPlano%2C+TX%2C+USA!5e0!3m2!1sen!2sbd!4v1558246953339!5m2!1sen!2sbd"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer-section p-40">
        <div class="container">

            <div class="row p-37">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>Tentang Kami</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend tristique venenatis.
                            Maecenas a rutrum tellus nam vel semper nibh.</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Kontak Kami</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>Tegal Gede, Jl. Tawangmangu No. 20 RT 01 RW 01</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>ipj4@gmail.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>081331982991</span></li>
                        </ul>
                    </div>
                </div>
                
            </div>

        </div>
    </footer>


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>
</body>

</html>