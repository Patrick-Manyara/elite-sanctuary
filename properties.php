<?php
$page = 'properties';
require_once 'header.php';

if (isset($_GET['id'])) {
    $loc = mysqli_real_escape_string(connect(), $_GET['id']);
    $query = "WHERE property_location = '$loc'";
} else {
    $query = '';
}

$sql = "SELECT * FROM property " . $query . " ORDER BY rand()";
$properties = select_rows($sql);

$featured_properties = select_rows("
    SELECT * FROM property 
    ORDER BY RAND() 
    LIMIT 3
");

$count = sizeof($properties);
?>

<!-- START SECTION PROPERTIES LISTING -->
<section class="properties-right featured portfolio blog pt-5" style="padding-top:120px !important;">
    <div class="container">
        <section class="headings-2 pt-0 pb-55">
            <div class="pro-wrapper">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar">
                        <div class="text-heading text-left">
                            <p class="pb-2"><a href="index">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                        </div>
                        <h3>Grid View</h3>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-lg-8 col-md-12 blog-pots">
                <section class="headings-2 pt-0">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p class="font-weight-bold mb-0 mt-3"><?= $count ?> Search results</p>
                                </div>
                            </div>
                        </div>
                        <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center grid">
                            <div class="input-group border rounded input-group-lg w-auto mr-4">
                                <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                                <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                                    <option selected>Top Selling</option>
                                    <option value="1">Most Viewed</option>
                                    <option value="2">Price(low to high)</option>
                                    <option value="3">Price(high to low)</option>
                                </select>
                            </div>
                            <!-- <div class="sorting-options">
                                <a href="#" class="change-view-btn lde"><i class="fa fa-th-list"></i></a>
                                <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                            </div> -->
                        </div>
                    </div>
                </section>
                <div class="row">

                    <?php foreach ($properties as $property) { ?>

                        <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                            <div class="project-single" data-aos="fade-up">

                                <div class="project-inner project-head">

                                    <div class="project-bottom">
                                        <h4>
                                            <a href="property.php?id=<?php echo $property['property_id']; ?>">
                                                View Property
                                            </a>
                                            <span class="category">Real Estate</span>
                                        </h4>
                                    </div>

                                    <div class="homes">
                                        <a href="property.php?id=<?php echo $property['property_id']; ?>" class="homes-img">

                                            <div class="homes-tag button alt featured">Featured</div>

                                            <div class="homes-tag button alt sale">
                                                <?php echo ($property['property_type'] == 'buy') ? 'For Sale' : 'For Rent'; ?>
                                            </div>

                                            <div class="homes-price">
                                                <?php echo $property['property_price_details']; ?>
                                            </div>

                                            <!-- IMAGE -->
                                            <img src="<?php echo file_url . $property['property_image']; ?>"
                                                alt="<?php echo $property['property_name']; ?>"
                                                class="img-responsive">

                                        </a>
                                    </div>

                                    <div class="button-effect">
                                        <a href="property.php?id=<?php echo $property['property_id']; ?>" class="btn">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </div>

                                </div>

                                <!-- CONTENT -->
                                <div class="homes-content">

                                    <!-- NAME -->
                                    <h3>
                                        <a href="property.php?id=<?php echo $property['property_id']; ?>">
                                            <?php echo $property['property_name']; ?>
                                        </a>
                                    </h3>

                                    <!-- LOCATION -->
                                    <p class="homes-address mb-3">
                                        <a href="property.php?id=<?php echo $property['property_id']; ?>">
                                            <i class="fa fa-map-marker"></i>
                                            <span>
                                                <?php echo ucfirst($property['property_location']) . ', ' . ucfirst($property['property_city']); ?>
                                            </span>
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
                                    <div class="price-properties">
                                        <h3 class="title mt-3">
                                            <a href="property.php?id=<?php echo $property['property_id']; ?>">
                                                <?php echo $property['property_price_details']; ?>
                                            </a>
                                        </h3>

                                        <div class="compare">
                                            <a href="#"><i class="fas fa-exchange-alt"></i></a>
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
                                            <a href="#"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>



                                </div>

                            </div>
                        </div>

                    <?php } ?>

                </div>

            </div>
            <aside class="col-lg-4 col-md-12 car">
                <div class="widget">
                    <!-- Search Fields -->
                    <div class="widget-boxed main-search-field">
                        <div class="widget-boxed-header">
                            <h4>Find Your House</h4>
                        </div>
                        <!-- Search Form -->
                        <div class="trip-search">
                            <form class="form">
                                <!-- Form Lookin for -->
                                <div class="form-group looking">
                                    <div class="first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="Enter Keyword..." value="" />
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Lookin for -->
                                <!-- Form Location -->
                                <div class="form-group location">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-map-marker"></i>Location</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">New York</li>
                                            <li data-value="2" class="option">Los Angeles</li>
                                            <li data-value="3" class="option">Chicago</li>
                                            <li data-value="3" class="option">Philadelphia</li>
                                            <li data-value="3" class="option">San Francisco</li>
                                            <li data-value="3" class="option">Miami</li>
                                            <li data-value="3" class="option">Houston</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Location -->
                                <!-- Form Categories -->
                                <div class="form-group categories">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home" aria-hidden="true"></i>Property Type</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">House</li>
                                            <li data-value="2" class="option">Apartment</li>
                                            <li data-value="3" class="option">Condo</li>
                                            <li data-value="3" class="option">Land</li>
                                            <li data-value="3" class="option">Bungalow</li>
                                            <li data-value="3" class="option">Single Family</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Categories -->
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
                            </form>
                        </div>
                        <!--/ End Search Form -->
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
                        <!-- More Search Options -->
                        <a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30" data-open-title="Advanced Features" data-close-title="Advanced Features"></a>

                        <div class="more-search-options relative">
                            <!-- Checkboxes -->
                            <div class="checkboxes one-in-row margin-bottom-10">
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
                        <!-- More Search Options / End -->
                        <div class="col-lg-12 no-pds">
                            <div class="at-col-default-mar">
                                <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="widget-boxed mt-5">
                        <div class="widget-boxed-header mb-5">
                            <h4>Feature Properties</h4>
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
            </aside>
        </div>
        <nav aria-label="..." class="agents pt-55">
            <ul class="pagination disabled">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->

<!-- ARCHIVES JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/rangeSlider.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mmenu.min.js"></script>
<script src="js/mmenu.js"></script>
<script src="js/aos.js"></script>
<script src="js/aos2.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/slick4.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/lightcase.js"></script>
<script src="js/search.js"></script>
<script src="js/light.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/popup.js"></script>
<script src="js/searched.js"></script>
<script src="js/ajaxchimp.min.js"></script>
<script src="js/newsletter.js"></script>
<script src="js/inner.js"></script>
<script src="js/color-switcher.js"></script>

<?php require_once 'footer.php' ?>