<?php
$page = 'contact';
require_once 'header.php';
?>

<section class="headings" style="padding-top: 100px;">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Contact Us</h1>
            <h2><a href="index">Home </a> &nbsp;/&nbsp; Contact Us</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION CONTACT US -->
<section class="contact-us">
    <div class="container">
        <div class="property-location mb-5 text-center">

            <h3 style="text-align: center;">Our Location</h3>
            <div class="divider-fade mx-auto"></div>

            <!-- MAP -->
            <div class="contact-map mt-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510564.65107988653!2d36.5177334104462!3d-1.3031873859975642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1777846026272!5m2!1sen!2ske"
                    width="100%"
                    height="100%"
                    style="border:0; border-radius:10px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h3 class="mb-4">Contact Us</h3>
                <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                    <div id="success" class="successform">
                        <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                    </div>
                    <div id="error" class="errorform">
                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-12 bgc">
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

<?php require_once 'footer.php' ?>