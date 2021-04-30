

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $settings[0]->site_title?$settings[0]->site_title."-".$settings[0]->site_slogan:($site_title??'Pratishilp'); ?></title>
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
            <div class="col-lg-8 col-md-8 col-sm-7">
                <div class="list-inline">
                    <a href="tel:<?php $settings[0]->co_number;?>"><i class="fa fa-phone"></i>+91 <?php echo $settings[0]->co_number??'+911234567890';?></a>
                    <a href="#" class="mr-0"><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i><?php echo $settings[0]->site_address;?></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5">
                <ul class="top-social-media pull-right">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
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
                    <a class="navbar-brand logo-2" href="<?php echo base_url();?>">
                        <img src="<?php echo base_url('public_assets'); ?>/assets/img/logos/black-logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav justify-content-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo base_url();?>">
                                    Home
                                </a>
                    
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('/projects');?>">
                                    Projects
                                </a>
                              
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('/gallery');?>">
                                    Gallery
                                </a>
                             
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url('/blog');?>">
                                    Blog
                                </a>
                           
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('/about-us');?>">
                                    About Us
                                </a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('/contact-us')?>" role="button" >
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto  justify-content-end">
                            <li class="nav-item">
                                <a  href="submit-property.html" class="submit-btn">
                                    <?php echo $this->lang->line('get_quote'); ?>
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