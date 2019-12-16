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
    <title>Single Property Page | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <!--<header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <ul class="main-menu">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./contact.html">Tentang Kami</a></li>
                    </ul>
                    <div id="mobile-menu-wrap"></div>
                </div>
            </div>
        </div>
    </header>-->
    <!-- Header Section End -->
    <!-- Hero Section Begin -->
    <!--<section class="hero-section set-bg single-property-r" data-setbg="img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>Property Page</h2>
        </div>
    </section>-->
    <!-- Hero Section End 
    navbar navbar-light" style="background-color: #e3f2fd;-->
    <nav class="navbar navbar-expand-lg" style="background-color: #353666;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!--<a class="navbar-brand" href="index.php">Home</a>-->
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active text-white">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>-->
            </ul>
            <form class="form-inline my-2 my-lg-0" action="index.php">
                <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
        </div>
    </nav>

    <!-- Single Property Section Begin -->

    <?php

    $kd_data_rumah = $_GET['kd_data_rumah'];
    $seleksi = mysqli_query($koneksi, "SELECT * FROM tabel_data_rumah where kd_data_rumah = '$kd_data_rumah' ");
    $row = mysqli_fetch_array($seleksi);



    ?>
    <div class="single-property">
        <div class="container">
            <div class="row spad-p">
                <div class="col-lg-12">
                    <div class="property-title">
                        <h3><?php echo $row['judul_postingan']; ?></h3>
                        <a href="#"><i class="fa flaticon-placeholder"></i> London, 76 Guild Street, EC3P 3WF</a>
                    </div>
                    <div class="property-price">
                        <p>Harga Mulai -</p>
                        <span><?php
                                $harga = $row['harga'];
                                function rupiah($harga)
                                {

                                    $hasil_rupiah = "Rp " . number_format($harga, 2, ',', '.');
                                    return $hasil_rupiah;
                                }
                                echo rupiah($harga);
                                ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="property-img owl-carousel">
                        <div class="single-img">
                            <img src="img/single-property/1.jpg" alt="">
                        </div>
                        <div class="single-img">
                            <img src="img/single-property/2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Property End -->
    <!-- Single Property Deatails Section Begin -->
    <section class="property-details">
        <div class="container">
            <div class="row sp-40 spt-40">
                <div class="col-lg-8">
                    <div class="p-ins">
                        <div class="row details-top">
                            <div class="col-lg-12">
                                <div class="t-details">
                                    <!--<div class="register-id">
                                        <p>Registered ID: <span>0D05426FF1</span></p>
                                    </div>-->
                                    <div class="popular-room-features single-property">
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
                                            <p>Garage</p>
                                            <img src="img/rooms/garage.png" alt="">
                                            <span>1</span>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Deskripsi</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in justo
                                        elementum,fermentum justo ac, rutrum erat. Aenean ut malesuada diam. Proin
                                        bibendum
                                        sapien sodales, convallis dolor facilisis, ultricies nisl. Sed malesuada nibh
                                        sed
                                        velit ultricies, id varius lacus feugiat. Aenean vestibulum, nisl eget accumsan
                                        aliquam, magna diam convallis risus, in tristique metus sem eu tortor. Cras leo
                                        libero, fermentum quis aliquam et, tincidunt at dolor. </p>
                                </div>
                                <div class="property-features">
                                    <h4>Spesifikasi Bangunan</h4>
                                    <div class="property-table">
                                        <table>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Pondasi Bangunan <?php echo $row['pondasi']; ?></td>
                                                <td><img src="img/check.png" alt=""> Carpeting</td>
                                                <td><img src="img/check.png" alt=""> Attic fans</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Media room</td>
                                                <td><img src="img/check.png" alt=""> Concrete</td>
                                                <td><img src="img/check.png" alt=""> Ceiling fans</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Family room</td>
                                                <td><img src="img/check.png" alt=""> Bamboo</td>
                                                <td><img src="img/check.png" alt=""> Thermostats</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Gym/workout room</td>
                                                <td><img src="img/check.png" alt=""> Stone</td>
                                                <td><img src="img/check.png" alt=""> Single flush toilets</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Library</td>
                                                <td><img src="img/check.png" alt=""> Tile</td>
                                                <td><img src="img/check.png" alt=""> Window shutters</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Butler's pantry</td>
                                                <td><img src="img/check.png" alt=""> Laminate</td>
                                                <td><img src="img/check.png" alt=""> Solar heat</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Sunroom</td>
                                                <td><img src="img/check.png" alt=""> Cork</td>
                                                <td><img src="img/check.png" alt=""> Solar plumbing</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Downstairs's bedroom</td>
                                                <td><img src="img/check.png" alt=""> Vinyl / linoleum</td>
                                                <td><img src="img/check.png" alt=""> Solar Screens</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Basement</td>
                                                <td><img src="img/check.png" alt=""> Manufactured wood</td>
                                                <td><img src="img/check.png" alt=""> Storm windows</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Guest quarters</td>
                                                <td><img src="img/check.png" alt=""> Marble</td>
                                                <td><img src="img/check.png" alt=""> Tankless water heater</td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/check.png" alt=""> Wine storage</td>
                                                <td><img src="img/check.png" alt=""> Wood</td>
                                                <td><img src="img/check.png" alt=""> Skylights or sky tubes</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="location-map">
                                    <h4>Location</h4>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107002.020096289!2d-96.80666618302782!3d33.06138629992991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c21da13c59513%3A0x62aa036489cd602b!2sPlano%2C+TX%2C+USA!5e0!3m2!1sen!2sbd!4v1558246953339!5m2!1sen!2sbd" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row pb-30">
                        <div class="col-lg-12">
                            <div class="contact-service">
                                <img src="img/single-property/small.png" alt="">
                                <p>Listed by</p>
                                <h5>Oliver G Harris</h5>
                                <table>
                                    <tr>
                                        <td>Office : <span>1-139-954-3228</span></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile : <span>1-517-328-7751</span></td>
                                    </tr>
                                    <tr>
                                        <td>Fax : <span>1-458-284-9871</span></td>
                                    </tr>
                                    <tr>
                                        <td>WhatsApp : <span>1-812-117-2663</span></td>
                                    </tr>
                                    <tr>
                                        <td>Email : <span>oliver@homes.com</span></td>
                                    </tr>
                                </table>
                                <a href="#" class="site-btn list-btn">View More Listings</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="room-items">
                                <div class="room-img set-bg" data-setbg="img/rooms/4.jpg">
                                    <a href="#" class="room-content">
                                        <i class="flaticon-heart"></i>
                                    </a>
                                </div>
                                <div class="room-text">
                                    <div class="room-details">
                                        <div class="room-title">
                                            <h5>Country Style House with beautiful garden and terrace</h5>
                                            <a href="#"><i class="flaticon-placeholder"></i> <span>Location</span></a>
                                            <a href="#" class="large-width"><i class="flaticon-cursor"></i> <span>Show
                                                    on Map</span></a>
                                        </div>
                                    </div>
                                    <div class="room-features">
                                        <div class="room-info">
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
                                    <div class="room-price">
                                        <p>For Sale</p>
                                        <span>$345,000</span>
                                    </div>
                                    <a href="#" class="site-btn btn-line">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Property Deatails Section End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section p-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center sp-60">
                    <img src="img/only-logo.png" alt="">
                </div>
            </div>
            <div class="row p-37">
                <div class="col-lg-4">
                    <div class="about-footer">
                        <h5>About Homes</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend tristique venenatis.
                            Maecenas a rutrum tellus nam vel semper nibh.</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-blog">
                        <h5>Latest Blog Posts</h5>

                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-1.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6>How to find the perfect area for<br> your next house.</h6>
                                <div class="blog-time">
                                    <i class="flaticon-clock"></i>
                                    <span>5 min</span>
                                </div>
                                <a href="#" class="read-more">
                                    <i class="flaticon-right-arrow-1"></i>
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                        <div class="single-blog">
                            <div class="lt-side">
                                <img src="img/footer-blog-2.jpg" alt="">
                            </div>
                            <div class="rt-side">
                                <h6>How to find the perfect area for<br> your next house.</h6>
                                <div class="blog-time">
                                    <i class="flaticon-clock"></i>
                                    <span>5 min</span>
                                </div>
                                <a href="#" class="read-more">
                                    <i class="flaticon-right-arrow-1"></i>
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-address">
                        <h5>Get In Touch</h5>
                        <ul>
                            <li><i class="flaticon-placeholder"></i><span>132 Liberty Streetelit, Plano, Texas</span>
                            </li>
                            <li><i class="flaticon-envelope"></i><span>hello@home.com</span></li>
                            <li><i class="flaticon-smartphone"></i><span>214-805-4428</span></li>
                        </ul>
                        <p>Monday – Friday: 9 am – 5 pm</p>
                        <p>Saturday: 9 am – 1pm</p>
                    </div>
                </div>
            </div>

            <div class="row p-20">
                <div class="col-lg-12 text-center">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

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