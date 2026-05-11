<!-- START FOOTER -->
<footer class="first-footer rec-pro" style="background: #163028;">
    <div class="top-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="netabout">
                        <a href="index.php" class="logo">
                            <img src="images/logo.png" alt="Sanctuary Realtors">
                        </a>
                        <p>
                            Explore exclusive, verified luxury property listings across Kenya.
                            We connect you to premium homes and high-value investment opportunities.
                        </p>
                    </div>

                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker"></i>
                                    <p class="in-p">Pinetree Plaza, Kaburu Drive, off Ngong Road, 7th Floor</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone"></i>
                                    <p class="in-p">+254 716 464 944</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope"></i>
                                    <p class="in-p">info@sanctuaryrealtors.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>Company</h3>
                        <div class="nav-footer">
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li><a href="about">About Us</a></li>
                                <li><a href="properties">Property</a></li>
                                <li><a href="contact">Contact Us</a></li>
                            </ul>
                            <ul class="nav-right">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Blog & News</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="widget">
                        <h3>Quick Contact</h3>
                        <div class="contactus">
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone"></i>
                                        <p class="in-p">+254 716 464 944</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope"></i>
                                        <p class="in-p">info@sanctuaryrealtors.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker"></i>
                                        <p class="in-p">Nairobi, Kenya</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="newsletters">
                        <h3>Newsletters</h3>
                        <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                    </div>
                    <form class="bloq-email mailchimp form-inline" method="post">
                        <label for="subscribeEmail" class="error"></label>
                        <div class="email">
                            <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                            <input type="submit" value="Subscribe">
                            <p class="subscription-success"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer rec-pro">
        <div class="container-fluid sd-f">
            <p><?= date('Y') ?> © Copyright - All Rights Reserved.</p>
            <ul class="netsocials">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!-- END FOOTER -->

<!--register form -->
<div class="login-and-register-form modal">
    <div class="main-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg"><i class="fa fa-times"></i></div>
            <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
            <div class="soc-log fl-wrap">
                <p>Login</p>
                <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
            </div>
            <div class="log-separator fl-wrap"><span>Or</span></div>
            <div id="tabs-container">
                <ul class="tabs-menu">
                    <li class="current"><a href="#tab-1">Login</a></li>
                    <li><a href="#tab-2">Register</a></li>
                </ul>
                <div class="tab">
                    <div id="tab-1" class="tab-contents">
                        <div class="custom-form">
                            <form method="post" name="registerform">
                                <label>Username or Email Address * </label>
                                <input name="email" type="text" onClick="this.select()" value="">
                                <label>Password * </label>
                                <input name="password" type="password" onClick="this.select()" value="">
                                <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Remember me</label>
                                </div>
                            </form>
                            <div class="lost_password">
                                <a href="#">Lost Your Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div id="tab-2" class="tab-contents">
                            <div class="custom-form">
                                <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                    <label>First Name * </label>
                                    <input name="name" type="text" onClick="this.select()" value="">
                                    <label>Second Name *</label>
                                    <input name="name2" type="text" onClick="this.select()" value="">
                                    <label>Email Address *</label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <label>Password *</label>
                                    <input name="password" type="password" onClick="this.select()" value="">
                                    <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register form end -->

<!-- START PRELOADER -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- END PRELOADER -->

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/254700000000"
    class="whatsapp-float"
    target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 20px;
        left: 20px;
        background-color: #25D366;
        color: #fff;
        border-radius: 50%;
        text-align: center;
        font-size: 32px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: 0.3s ease;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
        background-color: #20ba5a;
        color: #fff;
    }
</style>

<!-- FOOTER JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/rangeSlider.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/moment.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/aos.js"></script>
<script src="js/aos2.js"></script>
<script src="js/animate.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/fitvids.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/lightcase.js"></script>
<script src="js/search.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/ajaxchimp.min.js"></script>
<script src="js/newsletter.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/searched.js"></script>
<script src="js/forms-2.js"></script>
<script src="js/map-style2.js"></script>
<script src="js/range.js"></script>
<script src="js/color-switcher.js"></script>
<script>
    $(window).on('scroll load', function() {
        $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
    });
</script>

<!-- Slider Revolution scripts -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

<script>
    var typed = new Typed('.typed', {
        strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
        smartBackspace: false,
        loop: true,
        showCursor: true,
        cursorChar: "|",
        typeSpeed: 50,
        backSpeed: 30,
        startDelay: 800
    });
</script>

<script>
    $('.slick-lancers').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1292,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 993,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 769,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }
        }]
    });
</script>

<script>
    $('.job_clientSlide').owlCarousel({
        items: 2,
        loop: true,
        margin: 30,
        autoplay: false,
        nav: true,
        smartSpeed: 1000,
        slideSpeed: 1000,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            991: {
                items: 3
            }
        }
    });
</script>

<script>
    $('.style2').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        autoWidth: false,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 2,
                margin: 20
            },
            400: {
                items: 2,
                margin: 20
            },
            500: {
                items: 3,
                margin: 20
            },
            768: {
                items: 4,
                margin: 20
            },
            992: {
                items: 5,
                margin: 20
            },
            1000: {
                items: 7,
                margin: 20
            }
        }
    });
</script>

<script>
    $(".dropdown-filter").on('click', function() {

        $(".explore__form-checkbox-list").toggleClass("filter-block");

    });
</script>

<!-- MAIN JS -->
<script src="js/script.js"></script>

</div>
<!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Apr 2026 00:23:58 GMT -->

</html>