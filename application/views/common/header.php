<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $site_title??'Pratishilp'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/slick.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo base_url('public_assets');?>/assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('public_assets');?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="<?php echo base_url();?>/public_assets/assets/css/skins/default.css">

</head>
<body id="top" class="index-5 index-body">

<!-- <div class="page_loader"></div> -->

<!-- Top header start -->
<header class="top-header top-header-bg" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-7">
                <div class="list-inline">
                    <a href="tel:1-7X0-555-8X22"><i class="fa fa-phone"></i>+0477 85X6 552</a>
                    <a href="#" class="mr-0"><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>20/F Green Road, Dhanmondi,</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5">
                <ul class="top-social-media pull-right">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- main header start -->
<header class="main-header do-sticky" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo-2" href="index.html">
                        <img src="<?php echo base_url('public_assets'); ?>/assets/img/logos/black-logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav  justify-content-center">
                            <li class="nav-item  active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                    
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Projects
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">List Layout</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-list-rightside.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-list-leftside.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-list-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Grid Layout</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-grid-rightside.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-grid-leftside.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-grid-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Map View</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-map-rightside-list.html">Map List Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-leftside-list.html">Map List Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-rightside-grid.html">Map Grid Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-leftside-grid.html">Map Grid Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="properties-map-full.html">Map FullWidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Property Detail</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="properties-details.html">Property Detail 1</a></li>
                                            <li><a class="dropdown-item" href="properties-details-2.html">Property Detail 2</a></li>
                                            <li><a class="dropdown-item" href="properties-details-3.html">Property Detail 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">My Account</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="user-profile.html">User profile</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="my-properties.html">My Projects</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="favorited-properties.html">Favorited Projects</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="submit-property.html">Contact Us</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                            <li><a class="dropdown-item" href="about-me.html">About Me</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="services.html">Services 1</a></li>
                                            <li><a class="dropdown-item" href="services-2.html">Services 2</a></li>
                                            <li><a class="dropdown-item" href="services-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Pricing Tables</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pricing-tables-1.html">Pricing Tables 1</a></li>
                                            <li><a class="dropdown-item" href="pricing-tables-2.html">Pricing Tables 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gallery</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="gallery-1.html">Gallery 1</a></li>
                                            <li><a class="dropdown-item" href="gallery-2.html">Gallery 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Faq</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="faq-1.html">Faq 1</a></li>
                                            <li><a class="dropdown-item" href="faq-2.html">Faq 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Typography</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="typography.html">Typography 1</a></li>
                                            <li><a class="dropdown-item" href="typography-2.html">Typography 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">404 Error</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="pages-404.html">404 Error 1</a></li>
                                            <li><a class="dropdown-item" href="pages-404-2.html">404 Error 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="properties-comparison.html">Projects Comparison</a></li>
                                    <li><a class="dropdown-item" href="search-brand.html">Search Brand</a></li>
                                    <li><a class="dropdown-item" href="elements.html">Elements</a></li>
                                    <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                                    <li><a class="dropdown-item" href="login.html">Login/Register</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Agents
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Agent List</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="agent-list.html">Agent List 1</a></li>
                                            <li><a class="dropdown-item" href="agent-list-2.html">Agent List 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Agent Grid</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="agent-grid.html">Agent Grid 1</a></li>
                                            <li><a class="dropdown-item" href="agent-grid-2.html">Agent Grid 2</a></li>
                                            <li><a class="dropdown-item" href="agent-grid-3.html">Agent Grid 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="agent-detail.html">Agent Detail</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Columns</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-columns-2col.html">2 Columns</a></li>
                                            <li><a class="dropdown-item" href="blog-columns-3col.html">3 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Classic</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-classic-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-classic-sidebar-left.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-classic-fullwidth.html">FullWidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Blog Details</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-single-sidebar-right.html">Right Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-single-sidebar-left.html">Left Sidebar</a></li>
                                            <li><a class="dropdown-item" href="blog-single-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Shop
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="shop-list.html">Shop List</a>
                                    <a class="dropdown-item" href="shop-cart.html">Shop Cart</a>
                                    <a class="dropdown-item" href="shop-checkout.html">Shop Checkout</a>
                                    <a class="dropdown-item" href="shop-single.html">Shop Details</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Contact
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="contact-1.html">Contact 1</a>
                                    <a class="dropdown-item" href="contact-2.html">Contact 2</a>
                                    <a class="dropdown-item" href="contact-3.html">Contact 3</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto  justify-content-end">
                            <li class="nav-item">
                                <a  href="submit-property.html" class="submit-btn">
                                    Submit Property
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->