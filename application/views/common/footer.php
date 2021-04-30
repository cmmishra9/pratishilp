
<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i><?php echo $settings[0]->site_address; ?>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i><a href="mailto:sales@hotelempire.com"><?php echo $settings[0]->email; ?></a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:+91-<?php echo $settings[0]->co_number; ?>">+91 <?php echo $settings[0]->co_number; ?></a>
                        </li>
                        <!-- <li>
                            <i class="fa fa-skype"></i><a href="mailto:info@green.com">info@green.com</a>
                        </li> -->
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>About us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Service</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Contact Us</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Projects Grid</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Blog Post</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i>Property Details</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item recent-posts">
                    <h4>Recent Projects</h4>
                    <div class="media mb-4">
                        <a href="properties-details.html">
                            <img src="http://placehold.it/60x60" alt="sub-property">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Beautiful Single Home</a>
                            </h5>
                            <p>Feb 27, 2020 | $1045,000</p>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <a href="properties-details.html">
                            <img src="http://placehold.it/60x60" alt="sub-property-2">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Sweet Family Home</a>
                            </h5>
                            <p>Mar 14, 2020 | $944,000</p>
                        </div>
                    </div>
                    <div class="media">
                        <a href="properties-details.html">
                            <img src="http://placehold.it/60x60" alt="sub-property-3">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="properties-details.html">Real Luxury Villa</a>
                            </h5>
                            <p>Apr 14, 2020 | $1420,000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Contact Us</h4>
                    <div class="Subscribe-box">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <p class="copy">&copy; <?php echo date('Y'); ?> <a href="<?php echo base_url();?>">Pratishilp.</a></p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#" class="search">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Property Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="propertyModalLabel">
                    Find Your Dream Projects
                </h5>
                <p>
                    <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City,
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 modal-left">
                        <div class="modal-left-content">
                            <div id="modalCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <iframe class="modalIframe" src="https://www.youtube.com/embed/5e0LxrLSzok"  allowfullscreen></iframe>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="http://placehold.it/400x267" alt="Test ALT">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="http://placehold.it/400x267" alt="Test ALT">
                                    </div>
                                </div>
                                <a class="control control-prev" href="#modalCarousel" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="control control-next" href="#modalCarousel" role="button" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                            <div class="description"><h3>Description</h3>
                                <p>
                                    Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque
                                    massa, viverra interdum eros ut, imperdiet pellentesque mauris. Proin sit amet scelerisque
                                    risus. Donec
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                $178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <ul class="bullets">
                                    <li><i class="flaticon-bed"></i> Double Bed</li>
                                    <li><i class="flaticon-swimmer"></i> Swimming Pool</li>
                                    <li><i class="flaticon-bath"></i> 2 Bathroom</li>
                                    <li><i class="flaticon-car-repair"></i> Garage</li>
                                    <li><i class="flaticon-parking"></i> Parking</li>
                                    <li><i class="flaticon-theatre-masks"></i> Home Theater</li>
                                    <li><i class="flaticon-old-typical-phone"></i> Telephone</li>
                                    <li><i class="flaticon-green-park-city-space"></i> Private space</li>
                                </ul>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Area</dt>
                                    <dd>2500 Sq Ft:3400</dd>
                                    <dt>Condition</dt>
                                    <dd>New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <a href="properties-details.html" class="btn btn-show btn-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo-sitebar text-center">
                    <img src="<?php echo base_url('public_assets'); ?>/assets/img/logos/logo.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="properties-grid-leftside.html">Projects List</a></li>
                    <li class="menu-item"><a href="properties-details.html">Property Detail</a></li>
                    <li class="menu-item"><a href="blog-single-sidebar-right.html">Blog</a></li>
                    <li class="menu-item"><a href="about.html">About  US</a></li>
                    <li class="menu-item"><a href="contact-3.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

<!-- External JS libraries -->
<script src="<?php echo base_url('public_assets'); ?>/assets/js/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/jquery.selectBox.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/rangeslider.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/jquery.filterizr.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/backstretch.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/jquery.countdown.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/jquery.scrollUp.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/particles.min.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/typed.min.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/dropzone.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/jquery.mb.YTPlayer.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/leaflet.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/leaflet-providers.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/leaflet.markercluster.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/maps.js"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="<?php echo base_url('public_assets'); ?>/assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="<?php echo base_url('public_assets'); ?>/assets/js/app.js"></script>

</body>
</html>