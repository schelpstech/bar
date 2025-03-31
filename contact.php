<?php
include "header.php"
?>
<!-- start page-title -->
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <h2>Contact</h2>
                <ol class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end page-title -->


<!-- start contact-pg-section -->
<section class="contact-pg-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-8 col-md-offset-2">
                <div class="section-title-s3">
                    <span>Contact Us</span>
                    <h2>Get in Touch with Our Chambers</h2>
                    <p>Whether you need legal advice, representation, or consultation, our dedicated team of legal professionals is here to assist you. Reach out today!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-xs-12">
                <div class="contact-form">
                    <form method="post" class="contact-validation-active" id="contact-form-main">
                        <div class="one-third-col">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        </div>
                        <div class="one-third-col">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                        </div>
                        <div class="one-third-col">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone">
                        </div>
                        <div>
                            <textarea class="form-control" name="note" id="note" placeholder="Brief Description of Your Legal Issue..."></textarea>
                        </div>
                        <div class="submit-btn-wrapper">
                            <button type="submit" class="theme-btn-s2">Submit Inquiry</button>
                            <div id="loader">
                                <i class="ti-reload"></i>
                            </div>
                        </div>
                        <div class="clearfix error-handling-messages">
                            <div id="success">Thank you for contacting us! We will get back to you shortly.</div>
                            <div id="error">An error occurred while sending your message. Please try again later.</div>
                        </div>
                    </form>
                </div>
                <div class="contact-info clearfix">
                    <div>
                        <div class="icon">
                            <i class="ti-email"></i>
                        </div>
                        <h5>Email</h5>
                        <p>admin@barchambers.com.ng</p>
                        <div class="icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <h5>Phone</h5>
                        <p>(+234)08023978040</p>
                        <p>(+234)08053498449</p>
                        <p>(+234)08032057023</p>
                    </div>
                    <div>
                        <div class="icon">
                            <i class="ti-location-arrow"></i>
                        </div>
                        <h5>Ikeja Office Address</h5>
                        <p>No. 5, Tokunbo Alli Street, off Toyin Street, Ikeja, Lagos, Nigeria</p>
                        <h5>IKORODU OFFICE Address</h5>
                        <p> No. 57. Akin Ogunlewe Street, off Bayeku Road/Bola Tinubu Road, Igbogbo, Ikorodu, Lagos</p>
                        <h5>Abuja Office Address</h5>
                        <p>Mainstream Legal, No 13, Lumumbashi Street, Ibrahim Abacha Estate, Wuse Zone 4, behind Sharaton hotel, Abuja, Nigeria</p>
                    </div>
                </div>

                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1014631.157958457!2d3.348363!3d6.596738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8dfb96940519%3A0x2849a38e57764cb8!2sB.%20A.%20Rufai%20and%20Company%20(Legal%20Practitioners%20%26%20Notaries%20Public)!5e0!3m2!1sen!2sus!4v1743157037443!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3963.4526320131786!2d3.527095!3d6.590526!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bef5a8feb982d%3A0x432fadc5a595f02d!2sB.%20A.%20Rufai%20and%20Company%20(Legal%20Practitioners%20%26%20Notaries%20Public)%20Ikorodu%20Office!5e0!3m2!1sen!2sus!4v1743157146461!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact-pg-section -->
<?php
include "footer.php"
?>