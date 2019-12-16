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
    <title>Homes | IPJ</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <ul class="main-menu">
                        <li><a href="../developer/Login/login.php">Login</a></li>
                        <li><a href="../daftar/form.php">Daftar</a></li>
                        <!--<li><a href="./about.html">Categories</a></li>
                        <li><a href="./single-property.html">Single Property</a></li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>

                        <li class="top-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>-->
                    </ul>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Navbar Pencarian -->
    <section class="hero-section home-page set-bg" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>#Wayae Cari Rumah Baru</h2>
            <h1>INFO PERUMAHAN JEMBER</h1>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Filter Search Section Begin -->
    <div class="filter-search">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form class="filter-form">
                        <div class="location">
                            <p>Kecamatan</p>
                            <select class="filter-location">
                                <option value="">Kaliwates</option>
                                <option value="">Sumbersari</option>
                                <option value="">Patrang</option>
                            </select>
                        </div>
                        <div class="search-type">
                            <p>Kelurahan</p>
                            <select class="filter-property">
                                <option value="">Mangli</option>
                                <option value="">Ajung</option>
                                <option value="">Tegal Besar</option>
                            </select>
                        </div>
                        <div class="search-type">
                            <p>Tipe Rumah</p>
                            <select class="filter-property">
                                <option value="">Tipe 36</option>
                                <option value="">Tipe 45</option>
                                <option value="">Tipe 54</option>
                                <option value="">Tipe 60</option>
                                <option value="">Tipe 70</option>
                            </select>
                        </div>
                        <div class="search-btn">
                            <button type="submit"><i class="flaticon-search"></i>Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Filter Pencarian Section End -->


    <!-- Content Menu -->
    <section class="hotel-rooms spad">
        <div class="container">


            <div class="row">
                <?php

                $tampil = mysqli_query($koneksi, "SELECT * FROM tabel_data_rumah ");

                while ($row = mysqli_fetch_array($tampil)) {
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="room-items">
                            <div class="room-img set-bg" data-setbg="../developer/img/postingan/<?php echo $row['foto_1']; ?>">
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
                                        <!--<div class="garage">
                                            <p>Garasi</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span>1</span>
                                        </div>-->
                                    </div>
                                </div>
                                <div class="room-price">
                                    <p>Mulai Dari -</p>
                                    <span>Rp.133.000.000</span>
                                </div>
                                <a href="tampilan_detail_rumah.php?kd_data_rumah=<?php echo $row['kd_data_rumah'] ?>" class="site-btn btn-line">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- Content Menu Section End -->


    <!-- Popular Room Section Begin -->
    <!--<section class="popular-room set-bg p-in" data-setbg="img/bg-2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="slider-active owl-carousel">
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5>Spacious Modern Smart House</h5>
                                        <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                        <a href="#"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                            commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                            vehicula imperdiet sed justo. magna.</p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span>2561 sqft</span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span>9</span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>For Sale</p>
                                    <span>$345,000</span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="#" class="site-btn btn-line">View Property</a>
                            </div>
                        </div>
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5>Spacious Modern Smart House</h5>
                                        <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                        <a href="#"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                            commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                            vehicula imperdiet sed justo. magna.</p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span>2561 sqft</span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span>9</span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>For Sale</p>
                                    <span>$345,000</span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="#" class="site-btn btn-line">View Property</a>
                            </div>
                        </div>
                        <div class="popular-items">
                            <div class="popular-room-text">
                                <div class="popular-room-details">
                                    <div class="popular-room-title">
                                        <h5>Spacious Modern Smart House</h5>
                                        <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                        <a href="#"><i class="flaticon-cursor"></i> <span>Show on Map</span></a>
                                    </div>
                                </div>
                                <div class="popular-room-description">
                                    <div class="popular-room-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sodales
                                            commodo ex sed pellentesque. Aliquam vitae purus sed dolor hendrerit
                                            vehicula imperdiet sed justo. magna.</p>
                                    </div>
                                </div>
                                <div class="popular-room-features">
                                    <div class="popular-room-info">
                                        <div class="size">
                                            <p>Lot Size</p>
                                            <img src="img/rooms/size.png" alt="">
                                            <i class="flaticon-bath"></i>
                                            <span>2561 sqft</span>
                                        </div>
                                        <div class="beds">
                                            <p>Beds</p>
                                            <img src="img/rooms/bed.png" alt="">
                                            <span>9</span>
                                        </div>
                                        <div class="baths">
                                            <p>Baths</p>
                                            <img src="img/rooms/bath.png" alt="">
                                            <span>2</span>
                                        </div>
                                        <div class="garage">
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="popular-room-price">
                                    <p>For Sale</p>
                                    <span>$345,000</span>
                                    <span class="deal">Best Deal</span>
                                </div>
                                <a href="#" class="site-btn btn-line">View Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Popular Room Section End -->


    <!-- Newslatter Section Begin -->
    <!--<section class="service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="newslatter-text">
                        <img src="img/message.png" alt="">
                        <h4>Join our mailing to get weekly updates on <br>our exclusive deals.</h4>
                        <form>
                            <input type="text" placeholder="Email address">
                            <button type="submit" class="site-btn news-btn">Subscribe!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- Newslatter Section End -->


    <!-- Servies Section Begin -->
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-side">
                        <h2><span>Kenapa Harus Pilih Kami?</span><br>
                            <p> Info Perumahan Jember Merupakan Situs yang di peruntukan bagi yang ingin mencari rumah
                                di komplek perumahan, Khususnya di Kabupaten JEMBER dapat mencari refrensi rumah idaman
                                anda. Tersedia puluhan developer yang bekerja sama dengan kami dalam mengembangkan rumah
                                yang Nyaman Aman dan Murah.
                            </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-side">
                        <ul>
                            <li><img src="img/check.png" alt="">Tersedia Rumah Perumahan Seluruh Kota Jember
                            </li>
                            <li><img src="img/check.png" alt="">Cari Rumah baru </li>
                            <li><img src="img/check.png" alt="">Harga Bervariasi</li>
                            <li><img src="img/check.png" alt="">Berbagai Macam Desain Rumah dan Tipe
                            </li>
                            <li><img src="img/check.png" alt="">Resmi Certivicated PERUM
                            </li>
                            <li><img src="img/check.png" alt="">Tersedia Rumah Bersubsidi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Servies Section End -->
    <section class="instagram">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Info Perumahan Jember</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <!-- Rooms Pic Section Begin-->
        <!--<div class="room-pic">
            <div class="container-fluid">
                <div class="row sp-40">
                    <img src="img/room-pic/1.jpg" alt="">
                    <img src="img/room-pic/2.jpg" alt="">
                    <img src="img/room-pic/3.jpg" alt="">
                    <img src="img/room-pic/4.jpg" alt="">
                    <img src="img/room-pic/5.jpg" alt="">
                </div>
            </div>
        </div>-->
        <!-- Rooms Pic Section End -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center sp-60">
                    <img src="img/only-logo.png" alt="">
                </div>
            </div>
            <div class="row p-37">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>About Us</h5>
                        <p>Info Perumahan Jember merupakan situs penyedia Informasi terkait perumahan
                            yang berada di kota jember. Situs Info Perumahan Jember dibuat oleh Mahasiswa
                            Politeknik Jember yang bertujuan untuk menyediakan tempat bagi para developer
                            Perumahan untuk menginformasikan atau memasarkan produknya</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-blog">
                        <div class="single-blog">
                            <div class="lt-side">
                            </div>
                            <div class="rt-side">
                                <div class="blog-time">
                                </div>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="lt-side">
                            </div>
                            <div class="rt-side">
                                <div class="blog-time">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Partners</h5>
                        <!--<ul>
                            <li><i class="flaticon-placeholder"></i><span>132 Liberty Streetelit, Plano, Texas</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>hello@home.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>214-805-4428</span></li>
                        </ul>-->
                    </div>
                </div>
            </div>

            <div class="row p-20">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Info Perumahan Jember

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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