<!-- Sub banner start -->
<div class="sub-banner" style="background:rgba(0, 0, 0, 0.04) url(http://picsum.photos/1920/400) top left repeat;">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Contact Us</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Contact 2 start -->
<div class="contact-2 content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
            <p>Architecture Firm in Varanasi</p>
            <p>Opening at 11:00.</p>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 contact-info">
                    <i class="fa fa-map-marker"></i>
                    <h5 >Office Address</h5>
                    <p><?php echo $settings[0]->site_address;?></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 contact-info">
                    <i class="fa fa-phone"></i>
                    <h5 >Phone Number</h5>
                    <p>+91 <?php echo $settings[0]->co_number;?></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 contact-info">
                    <i class="fa fa-envelope"></i>
                    <h5 >Email Address</h5>
                    <p><?php echo $settings[0]->email;?></p>
                </div>
            </div>
        </div>
        <form action="#" method="GET" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="form-section">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Contact Form</h3>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="form-control" placeholder="Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group message">
                                    <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="send-btn">
                                    <button type="submit" class="btn btn-color btn-md">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="opening-hours">
                        <h3>Opening Hours</h3>
                        <ul class="day">
                            <li><strong>Sunday</strong> <span class="text-red"> closed</span></li>
                            <li><strong>Monday</strong> <span> 10 AM - 8 PM</span></li>
                            <li><strong>Tuesday </strong> <span> 10 AM - 8 PM</span></li>
                            <li><strong>Wednesday </strong> <span> 10 AM - 8 PM</span></li>
                            <li><strong>Thursday </strong> <span> 10 AM - 8 PM</span></li>
                            <li><strong>Friday </strong> <span> 10 AM - 8 PM</span></li>
                            <li><strong>Saturday </strong> <span> 10 AM - 8 PM</span></li>
                        </ul>
                        <h3>Follow Us</h3>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact 2 end -->

<!-- Maps start -->
<div class="section maps">
    <div class="map">
        <div id="contactMap" class="contact-map"></div>
    </div>
</div>
<!-- Maps end -->
