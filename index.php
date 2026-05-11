<?php
$page = 'home';
require_once 'header.php';
$sql = "SELECT * FROM (

    (SELECT * FROM (
        SELECT * FROM property 
        WHERE property_id = 'PROP20260503014'
    ) AS t1)

    UNION ALL

    (SELECT * FROM (
        SELECT * FROM property 
        WHERE property_location = 'kilimani' 
        AND property_id != 'PROP20260503014'
        ORDER BY RAND() 
        LIMIT 1
    ) AS t2)

    UNION ALL

    (SELECT * FROM (
        SELECT * FROM property 
        WHERE property_location = 'kileleshwa'
        ORDER BY RAND() 
        LIMIT 2
    ) AS t3)

    UNION ALL

    (SELECT * FROM (
        SELECT * FROM property 
        WHERE property_location = 'westlands'
        ORDER BY RAND() 
        LIMIT 1
    ) AS t4)

    UNION ALL

    (SELECT * FROM (
        SELECT * FROM property 
        WHERE property_location = 'riverside'
        ORDER BY RAND() 
        LIMIT 1
    ) AS t5)

) AS combined;";
$properties = select_rows($sql);
?>


<!-- STAR HEADER SEARCH -->
<section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
    <div class="hero-main">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h1 class="h1">Find Your Dream
                                <br class="d-md-none">
                                <span class="typed "></span>
                            </h1>
                            <p class="mt-4">Find a Home That Matches Your Lifestyle.</p>
                        </div>
                        <!--/ End Welcome Text -->
                        <!-- Search Form -->
                        <div class="col-12">
                            <div class="banner-search-wrap">
                                <ul class="nav nav-tabs rld-banner-tab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs_1">
                                        <div class="rld-main-search">
                                            <div class="row">
                                                <div class="rld-single-input">
                                                    <input type="text" placeholder="Enter Keyword...">
                                                </div>
                                                <div class="rld-single-select ml-22">
                                                    <select class="select single-select">
                                                        <option value="1">Property Type</option>
                                                        <option value="2">Family House</option>
                                                        <option value="3">Apartment</option>
                                                        <option value="3">Condo</option>
                                                    </select>
                                                </div>
                                                <div class="rld-single-select">
                                                    <select class="select single-select mr-0">
                                                        <option value="1">Houses in Kilimani</option>
                                                        <option value="2">Houses in Kileleshwa</option>
                                                        <option value="3">Houses in Westlands</option>
                                                        <option value="3">Houses in Riverside</option>
                                                    </select>
                                                </div>
                                                <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                    <a class="btn btn-yellow" href="#">Search Now</a>
                                                </div>
                                                <div class="explore__form-checkbox-list full-filter">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                            <!-- Form Property Status -->
                                                            <div class="form-group categories">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">For Sale</li>
                                                                        <li data-value="2" class="option">For Rent</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Property Status -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                            <!-- Form Bedrooms -->
                                                            <div class="form-group beds">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bedrooms -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                            <!-- Form Bathrooms -->
                                                            <div class="form-group bath">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bathrooms -->
                                                        </div>
                                                        <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld d-none d-lg-none d-xl-flex">
                                                            <!-- Price Fields -->
                                                            <div class="main-search-field-2">
                                                                <!-- Area Range -->
                                                                <div class="range-slider">
                                                                    <label>Area Size</label>
                                                                    <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <br>
                                                                <!-- Price Range -->
                                                                <div class="range-slider">
                                                                    <label>Price Range</label>
                                                                    <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                <input id="check-2" type="checkbox" name="check">
                                                                <label for="check-2">Air Conditioning</label>
                                                                <input id="check-3" type="checkbox" name="check">
                                                                <label for="check-3">Swimming Pool</label>
                                                                <input id="check-4" type="checkbox" name="check">
                                                                <label for="check-4">Central Heating</label>
                                                                <input id="check-5" type="checkbox" name="check">
                                                                <label for="check-5">Laundry Room</label>
                                                                <input id="check-6" type="checkbox" name="check">
                                                                <label for="check-6">Gym</label>
                                                                <input id="check-7" type="checkbox" name="check">
                                                                <label for="check-7">Alarm</label>
                                                                <input id="check-8" type="checkbox" name="check">
                                                                <label for="check-8">Window Covering</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                <input id="check-9" type="checkbox" name="check">
                                                                <label for="check-9">WiFi</label>
                                                                <input id="check-10" type="checkbox" name="check">
                                                                <label for="check-10">TV Cable</label>
                                                                <input id="check-11" type="checkbox" name="check">
                                                                <label for="check-11">Dryer</label>
                                                                <input id="check-12" type="checkbox" name="check">
                                                                <label for="check-12">Microwave</label>
                                                                <input id="check-13" type="checkbox" name="check">
                                                                <label for="check-13">Washer</label>
                                                                <input id="check-14" type="checkbox" name="check">
                                                                <label for="check-14">Refrigerator</label>
                                                                <input id="check-15" type="checkbox" name="check">
                                                                <label for="check-15">Outdoor Shower</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs_2">
                                        <div class="rld-main-search">
                                            <div class="row">
                                                <div class="rld-single-input">
                                                    <input type="text" placeholder="Enter Keyword...">
                                                </div>
                                                <div class="rld-single-select ml-22">
                                                    <select class="select single-select">
                                                        <option value="1">Property Type</option>
                                                        <option value="2">Family House</option>
                                                        <option value="3">Apartment</option>
                                                        <option value="3">Condo</option>
                                                    </select>
                                                </div>
                                                <div class="rld-single-select">
                                                    <select class="select single-select mr-0">
                                                        <option value="1">Location</option>
                                                        <option value="2">Los Angeles</option>
                                                        <option value="3">Chicago</option>
                                                        <option value="3">Philadelphia</option>
                                                        <option value="3">San Francisco</option>
                                                        <option value="3">Miami</option>
                                                        <option value="3">Houston</option>
                                                    </select>
                                                </div>
                                                <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                    <a class="btn btn-yellow" href="#">Search Now</a>
                                                </div>
                                                <div class="explore__form-checkbox-list full-filter">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                            <!-- Form Property Status -->
                                                            <div class="form-group categories">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected ">For Sale</li>
                                                                        <li data-value="2" class="option">For Rent</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Property Status -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                            <!-- Form Bedrooms -->
                                                            <div class="form-group beds">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bedrooms -->
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                            <!-- Form Bathrooms -->
                                                            <div class="form-group bath">
                                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                    <ul class="list">
                                                                        <li data-value="1" class="option selected">1</li>
                                                                        <li data-value="2" class="option">2</li>
                                                                        <li data-value="3" class="option">3</li>
                                                                        <li data-value="3" class="option">4</li>
                                                                        <li data-value="3" class="option">5</li>
                                                                        <li data-value="3" class="option">6</li>
                                                                        <li data-value="3" class="option">7</li>
                                                                        <li data-value="3" class="option">8</li>
                                                                        <li data-value="3" class="option">9</li>
                                                                        <li data-value="3" class="option">10</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!--/ End Form Bathrooms -->
                                                        </div>
                                                        <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                            <!-- Price Fields -->
                                                            <div class="main-search-field-2">
                                                                <!-- Area Range -->
                                                                <div class="range-slider">
                                                                    <label>Area Size</label>
                                                                    <div id="area-range-rent" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <br>
                                                                <!-- Price Range -->
                                                                <div class="range-slider">
                                                                    <label>Price Range</label>
                                                                    <div id="price-range-rent" data-min="0" data-max="600000" data-unit="$"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                <input id="check-16" type="checkbox" name="check">
                                                                <label for="check-16">Air Conditioning</label>
                                                                <input id="check-17" type="checkbox" name="check">
                                                                <label for="check-17">Swimming Pool</label>
                                                                <input id="check-18" type="checkbox" name="check">
                                                                <label for="check-18">Central Heating</label>
                                                                <input id="check-19" type="checkbox" name="check">
                                                                <label for="check-19">Laundry Room</label>
                                                                <input id="check-20" type="checkbox" name="check">
                                                                <label for="check-20">Gym</label>
                                                                <input id="check-21" type="checkbox" name="check">
                                                                <label for="check-21">Alarm</label>
                                                                <input id="check-22" type="checkbox" name="check">
                                                                <label for="check-22">Window Covering</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                            <!-- Checkboxes -->
                                                            <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                <input id="check-23" type="checkbox" name="check">
                                                                <label for="check-23">WiFi</label>
                                                                <input id="check-24" type="checkbox" name="check">
                                                                <label for="check-24">TV Cable</label>
                                                                <input id="check-25" type="checkbox" name="check">
                                                                <label for="check-25">Dryer</label>
                                                                <input id="check-26" type="checkbox" name="check">
                                                                <label for="check-26">Microwave</label>
                                                                <input id="check-27" type="checkbox" name="check">
                                                                <label for="check-27">Washer</label>
                                                                <input id="check-28" type="checkbox" name="check">
                                                                <label for="check-28">Refrigerator</label>
                                                                <input id="check-29" type="checkbox" name="check">
                                                                <label for="check-29">Outdoor Shower</label>
                                                            </div>
                                                            <!-- Checkboxes / End -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HEADER SEARCH -->


<!-- START SECTION FEATURED PROPERTIES -->
<section class="featured portfolio bg-white-3 rec-pro full-l">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Properties For Sale </span>in Nairobi </h2>
        </div>
        <div class="row portfolio-items">


            <?php foreach ($properties as $property) { ?>

                <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people rent">
                    <div class="project-single" data-aos="fade-left">

                        <div class="project-inner project-head">
                            <div class="homes">
                                <a href="property?id=<?= $property['property_id'] ?>" class="homes-img" style="width: 100%;">
                                    <div class="homes-tag button sale rent">For Sale</div>

                                    <!-- IMAGE -->
                                    <img src="<?php echo file_url . $property['property_image']; ?>"
                                        alt="<?php echo $property['property_name']; ?>"
                                        class="img-responsive"
                                        style="height: 100%;">
                                </a>
                            </div>

                            <div class="button-effect">
                                <a href="property?id=<?= $property['property_id'] ?>" class="view-property-btn">
                                    <i class="fa fa-eye"></i>
                                    View Property
                                </a>
                            </div>
                        </div>

                        <!-- CONTENT -->
                        <div class="homes-content">

                            <!-- NAME -->
                            <h3>
                                <a href="property?id=<?= $property['property_id'] ?>">
                                    <?php echo $property['property_name']; ?>
                                </a>
                            </h3>

                            <!-- LOCATION -->
                            <p class="homes-address mb-3">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    <span><?php echo ucfirst($property['property_location']); ?></span>
                                </a>
                            </p>

                            <!-- DETAILS -->
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <i class="flaticon-bed mr-2"></i>
                                    <span><?php echo $property['property_bedrooms']; ?> Bedrooms</span>
                                </li>

                                <li class="the-icons">
                                    <i class="flaticon-bathtub mr-2"></i>
                                    <span><?php echo $property['property_bathrooms']; ?> Bathrooms</span>
                                </li>

                                <li class="the-icons">
                                    <i class="flaticon-square mr-2"></i>
                                    <span><?php echo $property['property_rooms']; ?> Rooms</span>
                                </li>
                            </ul>

                            <!-- PRICE -->
                            <div class="price-properties footer pt-3 pb-0">
                                <h3 class="title mt-3">
                                    <a href="property?id=<?= $property['property_id'] ?>">
                                        <?php echo $property['property_price_details']; ?>
                                    </a>
                                </h3>

                                <div class="compare">
                                    <a href="#"><i class="flaticon-compare"></i></a>
                                    <a href="#"><i class="flaticon-share"></i></a>
                                    <a href="#"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            <?php } ?>



        </div>
        <div class="bg-all">
            <a href="properties" class="btn btn-outline-light">View More</a>
        </div>
    </div>
</section>
<!-- END SECTION FEATURED PROPERTIES -->


<!-- START SECTION POPULAR PLACES -->
<section class="feature-categories bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Prime </span>Neighborhoods</h2>
            <p>Explore properties in Nairobi's most sought-after locations.</p>
        </div>
        <div class="row">

            <!-- Kilimani -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="small-category-2">
                    <div class="small-category-2-thumb img-1">
                        <a href="/buy/kilimani">
                            <img src="images/locations/kilimani.jpg" alt="Kilimani">
                        </a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title">
                            <a href="/buy/kilimani">Kilimani</a>
                        </h4>
                        <span>Premium Apartments & Investments</span>
                    </div>
                </div>
            </div>

            <!-- Kileleshwa -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                <div class="small-category-2">
                    <div class="small-category-2-thumb img-2">
                        <a href="/buy/kileleshwa">
                            <img src="images/locations/kileleshwa.PNG" alt="Kileleshwa">
                        </a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title">
                            <a href="/buy/kileleshwa">Kileleshwa</a>
                        </h4>
                        <span>Quiet Living & Modern Homes</span>
                    </div>
                </div>
            </div>

            <!-- Westlands -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                <div class="small-category-2">
                    <div class="small-category-2-thumb img-3">
                        <a href="/buy/westlands">
                            <img src="images/locations/westlands.jpeg" alt="Westlands">
                        </a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title">
                            <a href="/buy/westlands">Westlands</a>
                        </h4>
                        <span>Urban Lifestyle & High-End Living</span>
                    </div>
                </div>
            </div>

            <!-- Riverside -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                <div class="small-category-2">
                    <div class="small-category-2-thumb img-4">
                        <a href="/buy/riverside">
                            <img src="images/locations/riverside.jpeg" alt="Riverside">
                        </a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title">
                            <a href="/buy/riverside">Riverside</a>
                        </h4>
                        <span>Exclusive & Serene Residences</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->


<!-- START SECTION INFO-HELP -->
<section class="info-help h18">
    <div class="container">
        <div class="row info-head">
            <div class="col-lg-12 col-md-8 col-xs-8">
                <div class="info-text" data-aos="fade-up" data-aos-delay="150">
                    <h3 class="text-center mb-0">Why Choose Elite Sanctuary Realtors</h3>
                    <p class="text-center mb-4 p-0">
                        Premium real estate solutions in Nairobi’s most sought-after locations
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION INFO-HELP -->

<!-- START SECTION INFO -->
<section _ngcontent-bgi-c3="" class="featured-boxes-area" style="margin-bottom: 100px;">
    <div _ngcontent-bgi-c3="" class="container">
        <div _ngcontent-bgi-c3="" class="featured-boxes-inner">
            <div _ngcontent-bgi-c3="" class="row m-0">
                <div _ngcontent-bgi-c3="" class="col-lg col-md-6 col-sm-6 p-2" data-aos="fade-up" data-aos-delay="250">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon color-fb7756"><img src="images/icons/i-5.svg" width="85" height="85" alt=""></div>
                        <h3 _ngcontent-bgi-c3="" class="mt-5">Engage</h3>
                        <p _ngcontent-bgi-c3="">
                            Start your journey with a simple call or message. Our team listens, understands your goals, and builds a clear investment profile tailored to you.
                        </p>
                    </div>
                </div>
                <div _ngcontent-bgi-c3="" class="col-lg col-md-6 col-sm-6 p-2" data-aos="fade-up" data-aos-delay="350">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon color-facd60"><img src="images/icons/i-6.svg" width="85" height="85" alt=""></div>
                        <h3 _ngcontent-bgi-c3="" class="mt-5">Explore</h3>
                        <p _ngcontent-bgi-c3="">
                            We curate high-value properties that match your objectives and guide you through physical or virtual tours for a real feel of each opportunity.
                        </p>
                    </div>
                </div>
                <div _ngcontent-bgi-c3="" class="col-lg col-md-6 col-sm-6 p-2" data-aos="fade-up" data-aos-delay="450">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon color-1ac0c6"><img src="images/icons/i-7.svg" width="85" height="85" alt=""></div>
                        <h3 _ngcontent-bgi-c3="" class="mt-5">Evaluate</h3>
                        <p _ngcontent-bgi-c3="">
                            Our advisors break down rental potential, ROI, yields, and long-term performance so you can confidently choose the right investment.
                        </p>
                    </div>
                </div>
                <div _ngcontent-bgi-c3="" class="col-lg col-md-6 col-sm-6 p-2" data-aos="fade-up" data-aos-delay="550">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon"><img src="images/icons/i-8.svg" width="85" height="85" alt=""></div>
                        <h3 _ngcontent-bgi-c3="" class="mt-5">Execute</h3>
                        <p _ngcontent-bgi-c3="">
                            Once you select a unit, we handle everything—reservation, paperwork, legal due diligence, and contract signing—smoothly and professionally.
                        </p>
                    </div>
                </div>
                <div _ngcontent-bgi-c3="" class="col-lg col-md-6 col-sm-6 p-2" data-aos="fade-up" data-aos-delay="550">
                    <div _ngcontent-bgi-c3="" class="single-featured-box">
                        <div _ngcontent-bgi-c3="" class="icon"><img src="images/icons/i-8.svg" width="85" height="85" alt=""></div>
                        <h3 _ngcontent-bgi-c3="" class="mt-5">Enjoy</h3>
                        <p _ngcontent-bgi-c3="">
                            Receive your keys and start earning. We assist with furnishing, Airbnb setup, tenant placement, and full-service management for effortless returns.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION INFO -->

<!-- START SECTION CONTACT US -->
<section class="request info-help" id="quote">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12" data-aos="fade-right">
                <h3 class="ready">Ready to get started?</h3>
                <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                    <div id="success" class="successform">
                        <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                    </div>
                    <div id="error" class="errorform">
                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="firstname" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="phonenumber" placeholder="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-custom input-full" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group mb-1">
                        <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="1" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Send Message</button>
                </form>
            </div>
            <div class="col-lg-5 col-md-12 bgc" data-aos="fade-left">
                <div class="call-info">
                    <h3>Contact Details</h3>
                    <p class="mb-5">Please find below contact details and contact us today!</p>
                    <ul>
                        <li>
                            <div class="info">
                                <i class="fa fa-map-marker"></i>
                                <p class="in-p">Pinetree Plaza, Kaburu Drive, off Ngong Road, Nairobi</p>
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
                        <li>
                            <div class="info cll">
                                <i class="fa fa-clock-o"></i>
                                <p class="in-p">Mon - Sat: 8:00 AM - 6:00 PM</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CONTACT US -->



<!-- START SECTION TESTIMONIALS -->
<section class="testimonials bg-white-2 rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Clients </span>Testimonials</h2>
            <p>We collect reviews from our customers.</p>
        </div>
        <div class="owl-carousel job_clientSlide">
            <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150">
                <p>
                    The service was exceptional. I was able to find a modern apartment in Kilimani quickly and without any stress. Highly recommended for anyone looking for property in Nairobi.
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/man1.jpeg" alt="" /></span>
                    <h5>Brian Mwangi</h5>
                </div>
            </div>

            <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="250">
                <p>
                    Very professional team. They guided me through the entire process and helped me secure a great property in Westlands. Transparent and reliable from start to finish.
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/man2.jpeg" alt="" /></span>
                    <h5>James Carter</h5>
                </div>
            </div>

            <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="350">
                <p>
                    I was looking for an investment property in Nairobi and their team delivered exactly what I needed. The experience was smooth and very well managed.
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/man7.jpeg" alt="" /></span>
                    <h5>Amani Tweve</h5>
                </div>
            </div>

            <div class="singleJobClinet">
                <p>
                    Great experience overall. They understood my requirements and helped me find a perfect home in Kileleshwa. I appreciated their attention to detail.
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/man4.jpeg" alt="" /></span>
                    <h5>Lee Omollo</h5>
                </div>
            </div>

            <div class="singleJobClinet">
                <p>
                    A reliable and knowledgeable team. They have a strong understanding of the Nairobi real estate market and offer genuine, high-quality listings.
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/man5.jpeg" alt="" /></span>
                    <h5>Amelie Muonzi</h5>
                </div>
            </div>

            <div class="singleJobClinet">
                <p>
                    Efficient and professional service. I was able to secure a great property faster than expected. I would definitely work with them again.
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/man6.jpeg" alt="" /></span>
                    <h5>Takana Mwendwa</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIALS -->


<!-- START SECTION POPULAR PLACES -->
<section class="popular-places home18 bg-white-1">
    <div class="container">
        <div class="sec-title">
            <h2><span>Popular </span>Places</h2>
            <p>Properties In Most Popular Places.</p>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-right">
                <!-- Image Box -->
                <a href="properties?id=kilimani" class="img-box hover-effect">
                    <img src="images/props/k1.jpeg" class="img-responsive" alt="">
                    <!-- Badge -->
                    <div class="listing-badges">
                        <span class="featured">Featured</span>
                    </div>
                    <div class="img-box-content visible">
                        <h4>Kilimani</h4>
                        <span>4 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6" data-aos="fade-left">
                <!-- Image Box -->
                <a href="properties?id=kileleshwa" class="img-box hover-effect">
                    <img src="images/props/kl1.jpeg" class="img-responsive" alt="">
                    <div class="img-box-content visible">
                        <h4>Kileleshwa</h4>
                        <span>3 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-8 col-md-6" data-aos="fade-right">
                <!-- Image Box -->
                <a href="properties?id=westlands" class="img-box hover-effect no-mb">
                    <img src="images/props/w1.jpeg" class="img-responsive" alt="">
                    <div class="img-box-content visible">
                        <h4>Westlands </h4>
                        <span>3 Properties</span>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-left">
                <!-- Image Box -->
                <a href="properties?id=riverside" class="img-box hover-effect no-mb x3">
                    <img src="images/props/rs1.jpeg" class="img-responsive" alt="">
                    <!-- Badge -->
                    <div class="listing-badges">
                        <span class="featured">Featured</span>
                    </div>
                    <div class="img-box-content visible">
                        <h4>Riverside</h4>
                        <span>1 Property</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->
<?php require_once 'footer.php' ?>