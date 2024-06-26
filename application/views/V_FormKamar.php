<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//Tampilkan judul
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blue Moon Hotel</title>

    <!-- Favicons -->
    <link href="img/BLUE_MOON.jpg" rel="icon">
    <link href="img/BLUE_MOON.jpg" rel="apple-touch-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/elegant-icons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/flaticon.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/nice-select.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/slicknav.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon  search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
        <div class="language-option">
                                <span>Akun</span>
                                <div class="flag-dropdown">
                                    <ul>
									<li><a href="<?php echo base_url('C_BlueMoon/login');?>">Profil Saya</a></li>
									<li><a href="<?php echo site_url('C_BlueMoon/logout');?>" data-togle="modal" data-target="#logoutModal">Keluar</a></li>
                                    </ul>
                                </div>
                            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./pages.html">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./room-details.html">Room Details</a></li>
                        <li><a href="#">Deluxe Room</a></li>
                        <li><a href="#">Family Room</a></li>
                        <li><a href="#">Premium Room</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i> (+62) 851-7898-1265</li>
            <li><i class="fa fa-envelope"></i> bluemoon@gmail.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i> (+62) 851-7898-1265</li>
                            <li><i class="fa fa-envelope"></i> bluemoon@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <a href="<?php echo base_url('C_BlueMoon/booking');?>" class="bk-btn">Booking Now</a>
                            <div class="language-option">
                                <span>Akun</span>
                                <div class="flag-dropdown">
                                    <ul>
									<li><a href="<?php echo base_url('C_BlueMoon/login');?>">Profil Saya</a></li>
									<li><a href="<?php echo site_url('C_BlueMoon/logout');?>" data-togle="modal" data-target="#logoutModal">Keluar</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/BLUE MOON.png" style = "width: 500px;"alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
							<ul>
                                    <li><a href="<?php echo base_url('C_BlueMoon/linkCustomer');?>">Customer</a></li>
                                    <li><a href="<?php echo base_url('C_BlueMoon/linkBooking');?>">Booking</a></li>
                                    <li><a href="<?php echo base_url('C_BlueMoon/linkContact');?>">Contact</a></li>
									<li><a href="<?php echo base_url('C_BlueMoon/linkKamar');?>">Kamar</a></li>
									<li><a href="<?php echo base_url('C_BlueMoon/formkamar');?>">Isi Data</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Yakin untuk keluar?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">Pilih "Keluar" dibawah ini jika Anda yakin untuk keluar dari akun!</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="<?php echo site_url('C_BlueMoon/logout');?>" class="btn btn-primary">Keluar</a>
                </div>
            </div>
        </div>
    </div>

	<body>
		<center><h1>ISI DATA KAMAR<h1></center>
  
	<?php echo form_open_multipart('C_BlueMoon/tambahkamar');?>
							<div class="contact-form">
                            <center><div class="col-lg-6">
                                <input type="text" name = "type room" placeholder="Tipe Kamar">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name = "price_room" placeholder="Harga Kamar">
                            </div>
							<div class="col-lg-6">
                                <input type="text" name = "size_room" placeholder="Ukuran Kamar">
                            </div>
							<div class="col-lg-6">
                                <input type="text" name = "capacity_room" placeholder="Kapasitas Kamar">
                            </div>
							<div class="col-lg-6">
                                <input type="text" name = "bed_room" placeholder="Kasur Kamar">
                            </div>
							<div class="col-lg-6">
                                <input type="text" name = "services_room" placeholder="Fasilitas Kamar">
                            </div>
							<div class="col-lg-6">
                                <input type="file" name = "image_room">
                            </div>
                                <button type="submit" value = "Upload" >Tambah Data</button>
								<button type="submit">Batal</button>
                            </div></center>
</div>
                    <?php echo form_close(); ?>
					<br>
					<br>
  </body>

<!-- Footer Section Begin -->
<footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/BLUE MOON.png" alt="">
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>(+62) 851-7898-1265</li>
                                <li>bluemoon@gmail.com</li>
                                <li>856 Cordia Extension Apt. 356, Lake, United State</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
