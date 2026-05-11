<?php
$page = 'property';
require_once 'header.php';
$id = $_GET['id'];
$property = select_rows("SELECT * FROM property WHERE property_id = '$id'")[0];
$images = select_rows("SELECT * FROM property_image WHERE property_id = '$id'")[0];
$amenities = select_rows("
    SELECT a.amenities_name 
    FROM features f
    JOIN amenities a ON f.amenities_id = a.amenities_id
    WHERE f.property_id = '$id'
");
$featured_properties = select_rows("
    SELECT * FROM property 
    WHERE property_id != '$id'
    ORDER BY RAND() 
    LIMIT 3
");
?>

<div class="swiper-container">
    <div class="swiper-wrapper" style="margin-top: 100px;">

        <div class="swiper-slide">
            <a href="<?= file_url . $property['property_image'] ?>" class="grid image-link">
                <img style="height:250px;width:100%;object-fit:cover;" src="<?= file_url . $property['property_image'] ?>" class="img-fluid" alt="Property Image 1">
            </a>
        </div>

        <?php
        // Loop through property_image_1 → property_image_5 (which are actually _2 → _6)
        for ($i = 1; $i <= 4; $i++) {

            $img = $images["property_image_$i"];

            if (!empty($img)) {
        ?>

                <div class="swiper-slide">
                    <a href="<?= file_url . $img; ?>" class="grid image-link">
                        <img style="height:250px;width:100%;object-fit:cover;"
                            src="<?= file_url . $img; ?>"
                            class="img-fluid"
                            alt="<?= $property['property_name']; ?>">
                    </a>
                </div>

        <?php
            }
        }
        ?>



    </div>

    <div class="swiper-pagination swiper-pagination-white"></div>
    <div class="swiper-button-next swiper-button-white mr-3"></div>
    <div class="swiper-button-prev swiper-button-white ml-3"></div>
</div>

<!-- START SECTION PROPERTIES LISTING -->
<section class="single-proper blog details">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">
                <div class="row">
                    <div class="col-md-12">
                        <section class="headings-2 pt-0">
                            <div class="pro-wrapper">
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <h3>Houses for Sale in Kilimani<span class="mrg-l-5 category-tag">For Sale</span></h3>
                                        <p><?= $property['property_name'] ?></p>
                                        <div class="mt-0">
                                            <a href="#listing-location" class="listing-address">
                                                <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>View Location
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single detail-wrapper mr-2">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <h4>From Ksh 2.5M</h4>
                                            <div class="mt-0">
                                                <a href="#listing-location" class="listing-address">
                                                    <p>Flexible unit pricing available</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Star Description -->
                        <div class="blog-info details mb-30">
                            <h5 class="mb-4">Description</h5>

                            <p class="mb-3">
                                <?= $property['property_description'] ?>
                            </p>

                            <p class="mb-3 font-weight-bold">Key Advantages:</p>

                            <ul class="mb-3">
                                <li>Proximity to Kilimani and Nairobi CBD</li>
                                <li>Strong rental demand from working professionals</li>
                                <li>Easy access to major roads and transport networks</li>
                                <li>Limited land availability supporting long-term appreciation</li>
                            </ul>

                            <p>
                                This positioning ensures consistent occupancy rates and strong resale potential, making it an ideal investment opportunity.
                            </p>
                        </div>
                        <!-- End Description -->
                    </div>
                </div>
                <!-- Star Property Details -->
                <div class="single homes-content details mb-30">
                    <!-- title -->
                    <h5 class="mb-4">Property Details</h5>
                    <ul class="homes-list clearfix">

                        <!-- LOCATION -->
                        <li>
                            <span class="font-weight-bold mr-1">Location:</span>
                            <span class="det">
                                <?php echo ucfirst($property['property_location']) . ', ' . ucfirst($property['property_city']); ?>
                            </span>
                        </li>

                        <!-- PROPERTY TYPE -->
                        <li>
                            <span class="font-weight-bold mr-1">Property Type:</span>
                            <span class="det">
                                <?php echo ucfirst($property['property_name']); ?>
                            </span>
                        </li>

                        <!-- STATUS -->
                        <li>
                            <span class="font-weight-bold mr-1">Status:</span>
                            <span class="det">
                                <?php echo ($property['property_type'] == 'buy') ? 'For Sale' : 'For Rent'; ?>
                            </span>
                        </li>

                        <!-- PRICE -->
                        <li>
                            <span class="font-weight-bold mr-1">Price:</span>
                            <span class="det">
                                <?php echo $property['property_price_details']; ?>
                            </span>
                        </li>

                        <!-- ROOMS -->
                        <li>
                            <span class="font-weight-bold mr-1">Rooms:</span>
                            <span class="det">
                                <?php echo $property['property_rooms']; ?>
                            </span>
                        </li>

                        <!-- BEDROOMS -->
                        <li>
                            <span class="font-weight-bold mr-1">Bedrooms:</span>
                            <span class="det">
                                <?php echo $property['property_bedrooms']; ?>
                            </span>
                        </li>

                        <!-- BATHROOMS -->
                        <li>
                            <span class="font-weight-bold mr-1">Bathrooms:</span>
                            <span class="det">
                                <?php echo $property['property_bathrooms']; ?>
                            </span>
                        </li>

                    </ul>
                    <!-- title -->
                    <h5 class="mt-5">Amenities</h5>

                    <ul class="homes-list clearfix">
                        <?php foreach ($amenities as $amenity) { ?>
                            <li>
                                <i class="fa fa-check-square"></i>
                                <span><?php echo $amenity['amenities_name']; ?></span>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="floor-plan property wprt-image-video w50 pro">
                    <h5>Floor Plans</h5>
                    <img alt="image" src="images/bg/floor-plan-1.png">
                </div>


                <div class="property-location map">
                    <h5>Location</h5>
                    <div class="divider-fade"></div>
                    <div id="map-contact" class="contact-map"></div>
                </div>


            </div>
            <aside class="col-lg-4 col-md-12 car">
                <div class="single widget">
                    <!-- Start: Schedule a Tour -->
                    <div class="schedule widget-boxed mt-0">
                        <div class="widget-boxed-header">
                            <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Schedule a Tour</h4>
                        </div>
                        <div class="widget-boxed-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 book">
                                    <input type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
                                </div>
                                <div class="col-lg-6 col-md-12 book2">
                                    <input type="text" id="reservation-time" class="form-control" readonly="">
                                </div>
                            </div>
                            <div class="row mrg-top-15 mb-3">
                                <div class="col-lg-6 col-md-12 mt-4">
                                    <label class="mb-4">Adult</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" name="quant[1]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[1]">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mt-4">
                                    <label class="mb-4">Children</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </span>
                                        <input type="text" name="quant[2]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[2]">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <a href="payment-method.html" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit Request</a>
                        </div>
                    </div>
                    <!-- End: Schedule a Tour -->
                    <!-- end author-verified-badge -->
                    <div class="sidebar">
                        <div class="widget-boxed mt-33 mt-5">
                            <div class="widget-boxed-header">
                                <h4>Agent Information</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="sidebar-widget author-widget2">
                                    <div class="author-box clearfix">
                                        <img src="images/testimonials/agent.jpg" alt="author-image" class="author__img">
                                        <h4 class="author__title">Clark Njogu</h4>
                                        <p class="author__meta">Agent of Property</p>
                                    </div>
                                    <ul class="author__contact">
                                        <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>302 Nairobi</li>
                                        <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">+254 0700 17813</a></li>
                                        <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">cnjogu@gmail.com</a></li>
                                    </ul>
                                    <div class="agent-contact-form-sidebar">
                                        <h4>Request Inquiry</h4>
                                        <form name="contact_form" method="post" action="http://code-theme.com/html/findhouses/functions.php">
                                            <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                            <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                            <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                            <textarea placeholder="Message" name="message" required></textarea>
                                            <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-search-field-2">

                            <div class="widget-boxed mt-5">
                                <div class="widget-boxed-header mb-5">
                                    <h4>Featured Properties</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="slick-lancers">

                                        <?php foreach ($featured_properties as $fp) { ?>

                                            <div class="agents-grid mr-0">
                                                <div class="listing-item compact">

                                                    <a href="property.php?id=<?php echo $fp['property_id']; ?>" class="listing-img-container">

                                                        <!-- BADGES -->
                                                        <div class="listing-badges">
                                                            <span class="featured"><?php echo $fp['property_price_details']; ?></span>
                                                            <span><?php echo ($fp['property_type'] == 'buy') ? 'For Sale' : 'For Rent'; ?></span>
                                                        </div>

                                                        <!-- CONTENT -->
                                                        <div class="listing-img-content">
                                                            <span class="listing-compact-title">
                                                                <?php echo $fp['property_name']; ?>
                                                                <i><?php echo ucfirst($fp['property_location']); ?></i>
                                                            </span>

                                                            <ul class="listing-hidden-content">
                                                                <li>Rooms <span><?php echo $fp['property_rooms']; ?></span></li>
                                                                <li>Beds <span><?php echo $fp['property_bedrooms']; ?></span></li>
                                                                <li>Baths <span><?php echo $fp['property_bathrooms']; ?></span></li>
                                                            </ul>
                                                        </div>

                                                        <!-- IMAGE -->
                                                        <img src="<?php echo file_url . $fp['property_image']; ?>" alt="<?php echo $fp['property_name']; ?>">

                                                    </a>

                                                </div>
                                            </div>

                                        <?php } ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </aside>
        </div>
       
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->


<!-- ARCHIVES JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/range-slider.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/slick4.js"></script>
<script src="js/fitvids.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/popup.js"></script>
<script src="js/ajaxchimp.min.js"></script>
<script src="js/newsletter.js"></script>
<script src="js/timedropper.js"></script>
<script src="js/datedropper.js"></script>
<script src="js/jqueryadd-count.js"></script>
<script src="js/leaflet.js"></script>
<script src="js/leaflet-gesture-handling.min.js"></script>
<script src="js/leaflet-providers.js"></script>
<script src="js/leaflet.markercluster.js"></script>
<script src="js/map-single.js"></script>
<script src="js/color-switcher.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/inner.js"></script>

<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 50,
            },
        }
    });
</script>

<!-- Date Dropper Script-->
<script>
    $('#reservation-date').dateDropper();
</script>
<!-- Time Dropper Script-->
<script>
    this.$('#reservation-time').timeDropper({
        setCurrentTime: false,
        meridians: true,
        primaryColor: "#e8212a",
        borderColor: "#e8212a",
        minutesInterval: '15'
    });
</script>


<script>
    $('.slick-carousel').each(function() {
        var slider = $(this);
        $(this).slick({
            infinite: true,
            dots: false,
            arrows: false,
            centerMode: true,
            centerPadding: '0'
        });

        $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
            slider.slick('slickPrev');
        });
        $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
            slider.slick('slickNext');
        });
    });
</script>

<?php require_once 'footer.php' ?>