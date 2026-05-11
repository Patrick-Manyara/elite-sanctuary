
<body class="homepage-9 hp-6 homepage-1 mh">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="header head-tr">
            <!-- Header -->
            <div id="header" class="head-tr bottom">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.php"><img src="images/logo.png" data-sticky-logo="images/logo.png" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 head-tr">
                            <ul id="responsive">
                                <li><a href="#">Home</a>

                                </li>
                                <li><a href="#">Buy</a>
                                    <ul>
                                        <li><a href="/buy/kilimani">Houses in Kilimani</a></li>
                                        <li><a href="/buy/kileleshwa">Houses in Kileleshwa</a></li>
                                        <li><a href="/buy/westlands">Houses in Westlands</a></li>
                                        <li><a href="/buy/riverside">Houses in Riverside</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Rent</a>

                                </li>
                                <li><a href="#">Airbnb</a>

                                </li>
                                <li><a href="#">About Us</a>

                                </li>
                                <li><a href="contact-us.html">Contact</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Search Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="add-property.html" class="button border">Give us a call<i class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <?php
                    if (isset($_SESSION['login'])) {
                    ?>
                        <!-- Right Side Content / End -->
                        <div class="header-user-menu user-menu add">
                            <div class="header-user-name">
                                <span><img src="images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                            </div>
                            <ul>
                                <li><a href="user-profile.html"> Edit profile</a></li>
                                <li><a href="add-property.html"> Add Property</a></li>
                                <li><a href="payment-method.html"> Payments</a></li>
                                <li><a href="change-password.html"> Change Password</a></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </div>
                        <!-- Right Side Content / End -->
                    <?php
                    }
                    ?>
                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div class="show-reg-form modal-open"><a href="#">Sign In</a></div>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->



                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->