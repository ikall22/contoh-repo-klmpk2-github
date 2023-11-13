<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets1/img/kai4.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets1/css/magnific-popup.css">
    <link rel="stylesheet" href="assets1/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets1/css/themify-icons.css">
    <link rel="stylesheet" href="assets1/css/nice-select.css">
    <link rel="stylesheet" href="assets1/css/flaticon.css">
    <link rel="stylesheet" href="assets1/css/gijgo.css">
    <link rel="stylesheet" href="assets1/css/animate.css">
    <link rel="stylesheet" href="assets1/css/slick.css">
    <link rel="stylesheet" href="assets1/css/slicknav.css">
    <link rel="stylesheet" href="assets1/https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="assets1/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        .main-menu ul#navigation li a {
            font-size: 20px; /* Ukuran teks menu utama */
                }

        /* Gaya untuk tautan submenu */
        .main-menu ul#navigation ul.submenu {
            background-color: white; /* Warna latar belakang putih */
            width: 230px; /* Lebar submenu sesuai keinginan Anda */
            position: absolute;
            top: 100%; /* Menempatkan submenu di bawah menu utama */
            left: 0;
            display: none;
            padding: 10px; /* Padding agar submenu lebih terlihat */
            border-radius: 10px; /* Menambahkan radius sudut */
        }

        /* Gaya untuk tautan submenu */
        .main-menu ul#navigation ul.submenu li a {
            font-size: 16px; /* Ukuran teks submenu */
            white-space: nowrap; /* Mencegah teks berjalan ke bawah */
            display: block;
            padding: 5px 10px; /* Padding untuk tautan submenu */
            text-align: right; /* Mengatur teks ke kanan */
        }

        /* Tampilkan submenu saat mengarahkan kursor mouse ke menu utama */
        .main-menu ul#navigation li:hover ul.submenu {
            display: block;
        }

        /* Gaya untuk menu saat diklik */
        .main-menu ul#navigation li a:active,
        .main-menu ul#navigation li a:hover,
        .main-menu ul#navigation li.active a {
            color: darkorange; /* Warna teks saat menu diklik atau saat kursor mouse di atasnya */
        }

        /* Gaya untuk mengatur ukuran ikon rumah */
        .main-menu ul#navigation li a i.fa-home {
            font-size: 22px; /* Sesuaikan ukuran ikon yang Anda inginkan di sini */
            margin-right: 5px; /* Jarak antara ikon dan teks */
        }

        /* Gaya untuk mengatur ikon di depan teks */
        .main-menu ul#navigation li a i.fa-user {
            font-size: 22px; /* Sesuaikan ukuran ikon yang Anda inginkan di sini */
            margin-right: 5px; /* Jarak antara ikon dan teks */
        }

         .main-menu ul#navigation li a i.fa-circle-user {
            font-size: 24px; /* Sesuaikan ukuran ikon yang Anda inginkan di sini */
            margin-right: 6px; /* Jarak antara ikon dan teks */
        }

        .main-menu ul#navigation ul.submenu {
            font-size: 24px; /* Sesuaikan ukuran ikon yang Anda inginkan di sini */
            margin-right: 6px; /* Jarak antara ikon dan teks */
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="assets1/img/kai4.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                    <li><a class="active" href="dashboard.php"><i class="fas fa-home fa-lg fa-home"></i> <strong>Home</strong></a></li>
                                    <!-- Menambahkan class "fas fa-home" akan menampilkan ikon rumah -->
                                    <!-- Anda dapat menyesuaikan ikon sesuai dengan ikon Font Awesome lainnya -->
                                    <li><a href="#"><strong><i class="fa-solid fa-user"></i>Visitor</i></strong></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="datadiri.php">
                                                   <i class="fa-solid fa-user" style="font-size: 18px; margin-left: 5px;"></i>

                                                    <strong style="font-size: 16px;">Registrasi Visitor</strong>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="registrasi.php">
                                                    <i class="fa-solid fa-users" style="font-size: 18px; margin-right: 5px;"></i>
                                                    <strong style="font-size: 16px;">Registrasi Anggota</strong>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><strong><i class="fa-solid fa-circle-user"></i>Login</strong></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="login.php">
                                                    <i class="fa-solid fa-key" style="font-size: 18px; margin-right: 5px;"></i>
                                                    <strong style="font-size: 16px;">Login Sistem</strong></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                </nav>
                            </div>
                        </div>
                            <div class="social_wrap d-flex align-items-center justify-content-end ml-4">
                                <ul>
                                    <b style="font-family: Arial Black, sans-serif;  font-size: 22px; color: black; font-weight: bold;">PT. KERETA API INDONESIA (PERSERO)</b>
                                </ul>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
<style>
    /* Gaya responsif untuk slider */
    .slider_area {
        max-width: 100%; /* Menentukan lebar maksimum slider */
        overflow: hidden; /* Menghindari tumpukan gambar yang keluar dari slider */
    }

    .single_slider {
        text-align: center;
        position: relative; /* Mengatur posisi elemen berdasarkan kotak single_slider */
    }

    .single_slider img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto; /* Mengatur gambar agar berada di tengah slider */
        filter: brightness(65%); /* Menurunkan kecerahan gambar menjadi 60% (sesuaikan sesuai keinginan Anda) */
    }

    .slider_text {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%); /* Mengatur posisi teks ke tengah gambar */
        color: white;
        font-size: 5vw; /* Ukuran huruf responsif dalam vw (viewport width) */
        font-weight: bold;
        font-family: "Nothing You Could Do", cursive;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Efek bayangan teks */
    }

    .owl-carousel {
        display: flex;
    }

    .owl-stage {
        display: flex;
        flex-direction: row;
    }

    .owl-item {
        flex: 0 0 auto;
    }

    @media (max-width: 768px) {
        .single_slider img {
            width: 100%;
        }

        /* Menyesuaikan posisi teks pada layar kecil */
        .slider_text {
            font-size: 8vw; /* Ukuran huruf responsif pada layar kecil */
        }
    }
</style>

<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider d-flex align-items-center">
            <img src="assets1/img/banner/persero1.jpg" alt="Gambar 1">
        </div>
    </div>
</div>



    <!-- slider_area_end -->

    <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <div>
                            <i class="fa-solid fa-camera-retro" style="font-size: 40px; margin-right: 10px"></i>
                            <h3 style="display: inline;">Gallery</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="assets1/img/banner/uap.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Tanggal 8 Agustus 1829</span>
                            </div>
                                <h4>Kereta Api Uap</h4>
                                <p style="text-align: justify;">Lokomotif uap adalah jenis lokomotif yang menggunakan tenaga mesin uap untuk menarik rangkaian kereta, lokomotif uap adalah salah satu inovasi paling penting dalam sejarah transportasi dan ini adalah perangkat yang menggunakan mesin uap.</p>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="assets1/img/banner/kereta5.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Tanggal 17 Agustus 1867</span>
                            </div>
                                <h4>Kereta Api Indonesia</h4>
                                <p style="text-align: justify;">Perkeretaapian di Indonesia dimulai ketika pencangkulan pertama jalur kereta api Semarang-Vorstenlanden (Solo-Yogyakarta) di Desa Kemijen oleh Gubernur Jendral Hindia Belanda Mr. L.A.J Baron Sloet van de Beele tanggal 17 Juni 1864.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="assets1/img/banner/lrt.jpg" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Tanggal 13 Juli 2018</span>
                            </div>
                              <h4>Kereta Api LRT</h4>
                              <p style="text-align: justify;">Light Rail Transit (LRT) adalah sistem angkutan cepat yang menggunakan rel ringan atau rel tram untuk mengoperasikan kereta atau trem listrik dalam lingkungan perkotaan. LRT merupakan salah satu bentuk transportasi massal yang lebih efisien dan ramah lingkungan daripada mobil pribadi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <footer class="footer">
    <br><br><br>
    <section class="service">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="box">
                        <span><i class="fa-solid fa-location-dot" style="font-size: 18px; color: white; margin-right: 8px;"></i></span>
                        <h4 style="color: white; display: inline;">Alamat Kantor</h4>
                        <p>Jl. Jend. A. Yani No. 541 13 Ulu Plaju - Palembang 30116</p><br>

                        <span><i class="fa-solid fa-envelope" style="font-size: 18px; color: white; margin-right: 8px;"></i></span>
                        <h4 style="color: white; display: inline;">E-Mail</h4>
                        <p>humasda.divre3pg@kai.id</p><br>

                        <span><i class="fa-solid fa-phone" style="font-size: 18px; color: white; margin-right: 8px;"></i></span>
                        <h4 style="color: white; display: inline;">Telepon</h4>
                        <p>(0711) 519800, Ext. 70010</p>
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 20px;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127499.76766402229!2d104.63291844335939!3d-2.995241999999982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b7620745ac795%3A0xf96163bd7b43b45!2sPT.%20KAI%20(Persero)%20Divre%20III%20Palembang!5e0!3m2!1sid!2sid!4v1693672049629!5m2!1sid!2sid" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | By Kelompok 2
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

    <!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="assets1/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets1/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets1/js/popper.min.js"></script>
    <script src="assets1/js/bootstrap.min.js"></script>
    <script src="assets1/js/owl.carousel.min.js"></script>
    <script src="assets1/js/isotope.pkgd.min.js"></script>
    <script src="assets1/js/ajax-form.js"></script>
    <script src="assets1/js/waypoints.min.js"></script>
    <script src="assets1/js/jquery.counterup.min.js"></script>
    <script src="assets1/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets1/js/scrollIt.js"></script>
    <script src="assets1/js/jquery.scrollUp.min.js"></script>
    <script src="assets1/js/wow.min.js"></script>
    <script src="assets1/js/nice-select.min.js"></script>
    <script src="assets1/js/jquery.slicknav.min.js"></script>
    <script src="assets1/js/jquery.magnific-popup.min.js"></script>
    <script src="assets1/js/plugins.js"></script>
    <script src="assets1/js/gijgo.min.js"></script>
    <script src="assets1/js/slick.min.js"></script>
   
    <!--contact js-->
    <script src="assets1/js/contact.js"></script>
    <script src="assets1/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets1/js/jquery.form.js"></script>
    <script src="assets1/js/jquery.validate.min.js"></script>
    <script src="assets1/js/mail-script.js"></script>
    <script src="assets1/js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</body>

</html>