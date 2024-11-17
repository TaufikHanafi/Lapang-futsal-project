<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>GSG Rizki Futsal | Contact</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="shortcut icon" href="admin/assets/images/logo/favicon.png" type="image/png">
    <link rel="shortcut icon" href="admin/assets/images/logo/favicon.png" type="image/png">

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/atlantis2.css">


    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">

    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/id.js'></script>

    <style>
        .nav-item.submenu-2>.nav-link::after {
            display: none !important;
        }

        .main-header .nav-bottom .page-navigation>.nav-item.mega-menu .navbar-dropdown {
            width: 45% !important;
            /* margin-right: 150px !important; */
            left: initial !important;
            right: initial !important;
        }

        .main-header .nav-bottom .page-navigation>.nav-item .category-heading {
            margin-bottom: -15px !important;
        }

        .nav-search .form-control {
            font-size: 12px !important;
            padding: 0.1em 1em !important;

        }

        .nav-search .search-icon {
            font-size: 14px !important;
        }

        .quick-actions.quick-actions-info .quick-actions-header {
            background: #6861CE !important;
        }

        .quick-actions.quick-actions-info .quick-actions-item {
            color: #6861CE !important;
        }

        .justify-text {
            text-align: justify;
        }

        @media only screen and (min-width : 992px) {
            .main-header .nav-bottom .page-navigation {
                margin: 0 120px !important;
            }

            .navbar .navbar-nav .nav-item-2 {
                margin-right: 20px !important;
            }

            #calendar {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">

        <div class="main-header" data-background-color="purple">
            <div class="nav-top">
                <div class="container d-flex flex-row">
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="icon-menu"></i>
                        </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                    <!-- Logo Header -->
                    <a href="index.php" class="logo d-flex align-items-center">
                        <img src="assets/img/logogsg.png" alt="navbar brand" class="navbar-brand">
                    </a>
                    <!-- End Logo Header -->

                    <!-- Navbar Header -->
                    <nav class="navbar navbar-header navbar-expand-lg p-0">

                        <div class="container-fluid p-0">
                            <div class="collapse" id="search-nav">
                                <form class="navbar-left navbar-form nav-search ml-md-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="btn btn-search pr-1">
                                                <i class="fa fa-search search-icon"></i>
                                            </button>
                                        </div>
                                        <input type="text" placeholder="Search ..." class="form-control">
                                    </div>
                                </form>
                            </div>
                            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                                <li class="nav-item toggle-nav-search hidden-caret">
                                    <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <!-- <li class="nav-item dropdown hidden-caret">
                                    <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bell"></i>
                                        <span class="notification">1</span>
                                    </a>
                                    <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                        <li>
                                            <div class="dropdown-title">You have 1 new notification</div>
                                        </li>
                                        <li>
                                            <div class="notif-scroll scrollbar-outer">
                                                <div class="notif-center">
                                                    <a href="#">
                                                        <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                                        <div class="notif-content">
                                                            <span class="block">
                                                                New user registered
                                                            </span>
                                                            <span class="time">5 minutes ago</span>
                                                        </div>
                                                    </a>

                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="nav-item dropdown hidden-caret">
                                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <i class="fas fa-layer-group"></i>
                                    </a>
                                    <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                        <div class="quick-actions-header">
                                            <span class="title mb-1">GSG Rizki Futsal</span>
                                            <span class="subtitle op-8">Shortcuts</span>
                                        </div>
                                        <div class="quick-actions-scroll scrollbar-outer">
                                            <div class="quick-actions-items">
                                                <div class="row m-0">
                                                    <a class="col-6 col-md-4 p-0" href="index.php">
                                                        <div class="quick-actions-item">
                                                            <div class="avatar-item bg-danger rounded-circle">
                                                                <i class="far fa-calendar-alt"></i>
                                                            </div>
                                                            <span class="text">Jadwal Tersedia</span>
                                                        </div>
                                                    </a>
                                                    <a class="col-6 col-md-4 p-0" href="admin/index.php">
                                                        <div class="quick-actions-item">
                                                            <div class="avatar-item bg-primary rounded-circle">
                                                                <i class="icon-user"></i>
                                                            </div>
                                                            <span class="text">Halaman Admin</span>
                                                        </div>
                                                    </a>
                                                    <a class="col-6 col-md-4 p-0" href="harga.php">
                                                        <div class="quick-actions-item">
                                                            <div class="avatar-item bg-success rounded-circle">
                                                                <i class="fas fa-file-invoice-dollar"></i>
                                                            </div>
                                                            <span class="text">Harga dan Metode Pembayaran</span>
                                                        </div>
                                                    </a>
                                                    <a class="col-6 col-md-4 p-0" href="contact.php">
                                                        <div class="quick-actions-item">
                                                            <div class="avatar-item bg-warning rounded-circle">
                                                                <i class="fas fa-map"></i>
                                                            </div>
                                                            <span class="text">Lokasi</span>
                                                        </div>
                                                    </a>
                                                    <a class="col-6 col-md-4 p-0" href="#">
                                                        <div class="quick-actions-item">
                                                            <div class="avatar-item bg-info rounded-circle">
                                                                <i class="icon-social-instagram"></i>
                                                            </div>
                                                            <span class="text">Instagram</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-item-2">
                                    <a href="#" class="nav-link quick-sidebar-toggler">
                                        <i class="icon-speech"></i>
                                    </a>
                                </li>
                                <!-- <li class="nav-item dropdown hidden-caret">
                                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <div class="avatar-sm">
                                            <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                                        <div class="dropdown-user-scroll scrollbar-outer">
                                            <li>
                                                <div class="user-box">
                                                    <div class="avatar-lg"><img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                                    <div class="u-text">
                                                        <h4>Hizrian</h4>
                                                        <p class="text-muted">hello@example.com</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">My Profile</a>
                                                <a class="dropdown-item" href="#">Setting</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="proses/pelanggan/logout_pelanggan.php">Logout</a>
                                            </li>
                                        </div>
                                    </ul>
                                </li> -->
                                <?php
                                // Periksa apakah pelanggan sudah login atau belum
                                // session_start();
                                if (isset($_SESSION['pelanggan_email'])) {
                                    // Jika pelanggan sudah login, tampilkan tampilan dropdown
                                    // $pelanggan_nama = $_SESSION['pelanggan_nama'];
                                    $pelanggan_email = $_SESSION['pelanggan_email'];
                                    echo '<li class="nav-item dropdown hidden-caret">
            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                <div class="avatar-sm">
                    <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                    <li>
                        <div class="user-box">
                            <div class="avatar-lg"><img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                            <div class="u-text">
                                <h4>' . $_SESSION['pelanggan_nama_lengkap'] . '</h4>
                                <p class="text-muted">' . $pelanggan_email . '</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="profile_pelanggan.php">My Profile</a>
                        <a class="dropdown-item" href="#">Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="proses/pelanggan/logout_pelanggan.php">Logout</a>
                    </li>
                </div>
            </ul>
        </li>';
                                } else {
                                    // Jika pelanggan belum login, tampilkan tombol login
                                    echo '<li class="nav-item dropdown hidden-caret">
                                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <div class="avatar-sm">
                                            <img src="assets/img/profile-belum-login.png" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                                        <div class="dropdown-user-scroll scrollbar-outer">
                                            <li>
                                                <div class="user-box">
                                                <a class="btn btn-secondary" href="login_pelanggan.php">
                                                <span class="btn-label">
												<i class="
                                                icon-login
                                                "></i>
											    </span> Login Pelanggan</a>
                                                </div>
                                            </li>
                                            <li>
                                            <div class="user-box">
                                            <div class="dropdown-divider"></div>
                                            <a class="btn btn-secondary btn-border" href="signup_pelanggan.php"><span class="btn-label">
                                            <i class="
                                            icon-user-follow
                                            "></i>
                                            </span> Buat Akunmu!</a>
                                            </div>
                                            </li>
                                        </div>
                                    </ul>
                                </li>';
                                }
                                ?>

                            </ul>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>
            <div class="nav-bottom bg-white">
                <h3 class="title-menu d-flex d-lg-none">
                    Menu
                    <div class="close-menu"> <i class="flaticon-cross"></i></div>
                </h3>
                <div class="container d-flex flex-row align-center">
                    <ul class="nav page-navigation page-navigation-secondary">
                        <li class="nav-item submenu submenu-2">
                            <a class="nav-link" href="index.php">
                                <i class="link-icon icon-screen-desktop"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item submenu submenu-2">
                            <a class="nav-link" href="pemesanan_pelanggan.php">
                                <i class="link-icon icon-book-open"></i>
                                <span class="menu-title">Pemesanan</span>
                            </a>
                        </li>
                        <li class="nav-item submenu submenu-2">
                            <a class="nav-link" href="pembayaran_pelanggan.php">
                                <i class="link-icon icon-credit-card"></i>
                                <span class="menu-title">Pembayaran</span>
                            </a>
                        </li>
                        <li class="nav-item submenu mega-menu dropdown">
                            <a class="nav-link" href="#">
                                <i class="link-icon icon-film"></i>
                                <span class="menu-title">Informasi Lapangan</span>
                            </a>
                            <div class="navbar-dropdown animated fadeIn">
                                <div class="col-group-wrapper row">
                                    <div class="col-group col-md-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="category-heading">Rumput Sintetis</p>
                                                <div class="submenu-item">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <ul>
                                                                <li><a href="lapangan_a.php">Lapangan A</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-group col-md-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="category-heading">Semen Floor</p>
                                                <div class="submenu-item">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <ul>
                                                                <li><a href="lapangan_b.php">Lapangan B</a></li>
                                                                <li><a href="lapangan_c.php">Lapangan C</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" href="#">
                                <i class="link-icon icon-information"></i>
                                <span class="menu-title">About Us</span>
                            </a>
                            <div class="navbar-dropdown animated fadeIn">
                                <ul>
                                    <li>
                                        <a href="profile_gsgrizkifutsal.php">Profile GSG Rizki</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-panel">
            <div class="container">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="font-weight-bold">Kontak Kami</h2>
                                    <div class="card-category">GSG Rizki Futsal, Bandung</div>
                                </div>
                                <div class="card-body">
                                    <!-- Card With Icon States Color -->
                                    <div class="row row-card-no-pd">
                                        <div class="col-sm-6 col-md-4">
                                            <div class="card card-stats card-round">
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="flaticon-whatsapp text-success"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-7 col-stats">
                                                            <div class="numbers">
                                                                <p class="card-category">Whatsapp</p>
                                                                <h4 class="card-title">0851-3245-467</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="card card-stats card-round">
                                                <div class="card-body ">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="flaticon-instagram text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-7 col-stats">
                                                            <div class="numbers">
                                                                <p class="card-category">instagram</p>
                                                                <h4 class="card-title">@gsg_rizki</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="card card-stats card-round">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="icon-big text-center">
                                                                <i class="flaticon-envelope-1 text-primary"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-7 col-stats">
                                                            <div class="numbers">
                                                                <p class="card-category">Email</p>
                                                                <h4 class="card-title">gsgrizki@gmail.com</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <div id="map-basic" class="map-demo"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="bantuan.php">
                                Help
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="syarat_ketentuan.php">
                                Term & Conditions
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- <div class="copyright ml-auto">
                2023, Made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://instagram.com/ntriumklorid">Kelompok Dhimaz</a>
            </div> -->
            </div>
        </footer>
    </div>

    <div class="quick-sidebar">
        <a href="#" class="close-quick-sidebar">
            <i class="flaticon-cross"></i>
        </a>
        <div class="quick-sidebar-wrapper">
            <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Chat with Admin!</a> </li>
            </ul>
            <div class="tab-pane fade show active" id="settings" role="tabpanel">
                <div class="quick-wrapper settings-wrapper">
                    <div class="quick-scroll scrollbar-outer">
                        <div class="quick-content settings-content">
                            <br>
                            <ul class="settings-list">
                                <li>
                                    <span class="item-label">Admin 1</span>
                                    <div class="item-control">
                                        <button class="btn btn-success"><i class="flaticon-whatsapp"></i> Whatsapp</button>
                                    </div>
                                </li>
                                <li>
                                    <span class="item-label">Admin 2</span>
                                    <div class="item-control">
                                        <button class="btn btn-success"><i class="flaticon-whatsapp"></i> Whatsapp</button>
                                    </div>
                                </li>
                            </ul>

                            <!-- <span class="category-title mt-0">Notifications</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Dropzone -->
    <script src="assets/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Wizard -->
    <script src="assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

    <!-- jQuery Validation -->
    <script src="assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="assets/js/plugin/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="assets/js/plugin/select2/select2.full.min.js"></script>

    <!-- Owl Carousel -->
    <script src="assets/js/plugin/owl-carousel/owl.carousel.min.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="assets/js/atlantis2.min.js"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <!-- <script src="assets/js/demo.js"></script> -->
    <!-- Google Maps Plugin -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1On32WMJzaErjXZhvYcEvYDQ_5PvlMCw"></script>
    <script>
        $(document).ready(function() {
            var mapBasic = new GMaps({
                div: '#map-basic',
                lat: -6.9193582,
                lng: 107.7038261,
            });

            var mapMarkers = new GMaps({
                div: '#map-markers',
                lat: -6.9193582,
                lng: 107.7038261,
            });

            mapMarkers.addMarker({
                lat: -6.9193582,
                lng: 107.7038261,
                title: 'GSG Rizki Futsal, Bandung',
                details: {
                    database_id: 42,
                    author: 'GSG Rizki Futsal'
                },
                click: function(e) {
                    if (console.log)
                        console.log(e);
                    alert('You clicked in this marker');
                }
            });

            var mapPolygons = new GMaps({
                div: '#map-polygons',
                lat: -6.9193582,
                lng: 107.7038261,
            });
            var path = [
                [-6.9193582, 107.7038261],
                [-6.9193582, 107.7038261],
                [-6.9193582, 107.7038261],
                [-6.9193582, 107.7038261]
            ];

            polygon = mapPolygons.drawPolygon({
                paths: path,
                strokeColor: '#BBD8E9',
                strokeOpacity: 1,
                strokeWeight: 3,
                fillColor: '#BBD8E9',
                fillOpacity: 0.6
            });

            //map routes
            mapRoutes = new GMaps({
                div: '#map-routes',
                lat: -6.9193582,
                lng: 107.7038261,
            });

            $('#start_travel').click(function(e) {
                e.preventDefault();
                mapRoutes.travelRoute({
                    origin: [-6.9193582, 107.7038261],
                    destination: [-6.9193582, 107.7038261],
                    travelMode: 'driving',
                    step: function(e) {
                        $('#instructions').append('<li>' + e.instructions + '</li>');
                        $('#instructions li:eq(' + e.step_number + ')').delay(450 * e.step_number).fadeIn(200, function() {
                            mapRoutes.setCenter(e.end_location.lat(), e.end_location.lng());
                            mapRoutes.drawPolyline({
                                path: e.path,
                                strokeColor: '#131540',
                                strokeOpacity: 0.6,
                                strokeWeight: 6
                            });
                        });
                    }
                });
            });

            // map static
            var url = GMaps.staticMapURL({
                size: [610, 300],
                lat: -6.9193582,
                lng: 107.7038261,
            });
            $('<img style="width: 100%; height: 100%" />').attr('src', url).appendTo('#map-static');

            // map geocoding
            mapGeocoding = new GMaps({
                div: '#map-geocoding',
                lat: -6.9193582,
                lng: 107.7038261,
            });
            $('#geocoding_form').submit(function(e) {
                e.preventDefault();
                GMaps.geocode({
                    address: $('#address').val().trim(),
                    callback: function(results, status) {
                        if (status == 'OK') {
                            var latlng = results[0].geometry.location;
                            mapGeocoding.setCenter(latlng.lat(), latlng.lng());
                            mapGeocoding.addMarker({
                                lat: latlng.lat(),
                                lng: latlng.lng()
                            });
                        }
                    }
                });
            });
        })
    </script>

</body>

</html>