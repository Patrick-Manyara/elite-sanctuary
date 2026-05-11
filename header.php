<?php
include_once 'path.php';
require_once MODEL_PATH . 'operations.php';

?>
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Apr 2026 00:21:53 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Sanctuary Realtors</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- GLOBAL CSS (always load) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="font/flaticon.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="font/flaticon.css">

    <?php if ($page == 'property'): ?>

        <link rel="stylesheet" href="css/leaflet.css">
        <link rel="stylesheet" href="css/leaflet-gesture-handling.min.css">
        <link rel="stylesheet" href="css/leaflet.markercluster.css">
        <link rel="stylesheet" href="css/leaflet.markercluster.default.css">
        <link rel="stylesheet" href="css/timedropper.css">
        <link rel="stylesheet" href="css/datedropper.css">
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/default.css">

    <?php else: ?>

        <link rel="stylesheet" href="css/search.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/aos2.css">
        <link rel="stylesheet" href="css/maps.css">
        <link rel="stylesheet" href="css/colors/pink.css">

    <?php endif; ?>
    <style>
        body,
        html {
            overflow-x: hidden;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box !important;
        }


        .welcome-text h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 800;
            line-height: 1.2;
            color: #ffffff;
        }

        .ready {
            text-transform: uppercase;
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 2rem;
            font-family: 'Montserrat', sans-serif;
        }

        .ready::after {
            display: block;
            height: 3px;
            font-weight: bold;
            background-color: #E0C58F;
            content: " ";
            width: 50px;
            margin-top: .5rem;
            margin-bottom: 1.5rem;
        }

        .call-info {
            background: -webkit-gradient(linear, left top, left bottom, from(rgba(43, 43, 43, 0.8)), to(rgba(43, 43, 43, 0.8))), url(../images/bg/bg-testimonials.jpg) no-repeat center center;
            background: linear-gradient(rgba(43, 43, 43, 0.8), rgba(43, 43, 43, 0.8)), url(../images/bg/bg-testimonials.jpg) no-repeat center center;
            padding: 2rem;
            background-size: cover;
        }

        .request {
            position: relative;
            padding: 6rem 0;
            background: url('images/bg/bg-info3.jpg') center/cover no-repeat;
        }

        .request::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            /* darker overlay like screenshot */
            z-index: 1;
        }

        .request .container {
            position: relative;
            z-index: 2;
        }

        .request .ready {
            color: #fff;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 30px;
            position: relative;
        }

        .request .ready::after {
            content: "";
            display: block;
            width: 50px;
            height: 3px;
            background: #E0C58F;
            margin-top: 8px;
        }

        /* Inputs */
        .contact-form .form-control {
            height: 55px;
            border-radius: 6px;
            border: none;
            padding: 0 20px;
            margin-bottom: 15px;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: none;
        }

        .contact-form textarea {
            height: 100px !important;
            padding-top: 15px;
        }



        .bgc {
            display: flex;
            align-items: center;
        }

        .call-info {
            background: rgba(0, 0, 0, 0.6);
            /* glass effect */
            padding: 40px;
            border-radius: 8px;
            color: #fff;
            width: 100%;
            backdrop-filter: blur(5px);
        }

        .call-info h3 {
            font-size: 20px;
            font-weight: 600;
            color: white;
        }

        .call-info h3::after {
            content: "";
            display: block;
            width: 50px;
            height: 3px;
            background: #E0C58F;
            margin: 10px 0 20px;
        }

        /* Contact items */
        .call-info ul {
            list-style: none;
            padding: 0;
        }

        .call-info .info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .call-info .info i {
            font-size: 18px;
            color: #E0C58F;
        }

        .call-info .info p {
            margin-left: 15px;
            color: #ddd;
        }

        /* Button */
        #submit-contact {
            background: #E0C58F;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-weight: 600;
            transition: 0.3s;
        }

        #submit-contact:hover {
            background: #e22e50;
        }


        @media (max-width: 991px) {
            .call-info {
                margin-top: 30px;
            }
        }

        .header-user-name a {
            width: 38px;
            height: 38px;
            background: #25D366;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
        }

        .header-user-name a i {
            color: #fff;
            font-size: 20px;
        }

        .button-effect {
            position: absolute;
            bottom: 15px;
            left: 15px;
            z-index: 5;
        }

        .view-property-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            border-radius: 30px;
            background: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .view-property-btn i {
            font-size: 14px;
        }

        .view-property-btn:hover {
            background: rgba(255, 255, 255, 0.18);
            color: #fff;
            transform: translateY(-2px);
        }
    </style>
</head>

<body class="homepage-9 hp-6 homepage-1 mh <?= $page != 'home' ? 'inner-pages hd-white' : '' ?>">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <?php
        $isPropertyPage = ($page == 'property');
        ?>

        <header id="header-container" class="header head-tr">
            <div id="header" class="head-tr bottom">
                <div class="container container-header">

                    <!-- LEFT -->
                    <div class="left-side">
                        <div id="logo">
                            <a href="index.php">
                                <img src="images/logo.png" alt="">
                            </a>
                        </div>

                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>

                        <!-- NAV -->
                        <nav id="navigation" class="style-1 head-tr">
                            <ul id="responsive">
                                <li><a href="index">Home</a></li>

                                <li><a href="#">Buy</a>
                                    <ul>
                                        <li><a href="properties?id=kilimani">Houses for sale in Kilimani</a></li>
                                        <li><a href="properties?id=kileleshwa">Houses for sale in Kileleshwa</a></li>
                                        <li><a href="properties?id=westlands">Houses for sale in Westlands</a></li>
                                        <li><a href="properties?id=riverside">Houses for sale in Riverside</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">Rent</a></li>
                                <li><a href="#">Airbnb</a></li>
                                <li><a href="about">About Us</a></li>
                                <li><a href="contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Right Side Content / End -->
                    <div class="header-user-menu user-menu add">
                        <div class="header-user-name">
                            <span>
                                <a href="https://wa.me/254700000000" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                    <!-- Right Side Content / End -->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>

        <!-- Header Container / End -->