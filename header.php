<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link
 *
 * @package Clearsoft
 * @subpackage RedmondsFarm
 * @since 1.0
 * @version 1.0
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>D.J. Hanleys | Local &amp; International | Removals &amp; Storage</title>
    <meta name="description" content="" />
    <meta name="Author" content="ClearSoft" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/layout.css" rel="stylesheet" type="text/css" />


    <!-- PAGE LEVEL SCRIPTS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/color_scheme/blue.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/pack-realestate.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/custom-forms-v2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/clearsoft.css" rel="stylesheet" type="text/css" />

    <?php wp_head(); ?>

</head>

<!--
    AVAILABLE BODY CLASSES:

    smoothscroll 			= create a browser smooth scroll
    enable-animation		= enable WOW animations
-->
<body class="smoothscroll enable-animation">


<!-- FULLSCREEN MAP -->
<div id="map-fullscreen">
    <button><i class="fa fa-remove"></i> </button>
    <div id="gmap-init"></div>
</div><!-- /FULLSCREEN MAP -->


<!--
    COOKIE ALERT

        .alert-primary
        .alert-warning
        .alert-danger
        .alert-info
        .alert-position-bottom		= bottom position

        .cookie-reset 				= tTEST ONLY: when you want to reset the cookie (NEVER USE ON PRODUCTION)
                                      usage: add this class, refresh the page two times and then remove the class


         data-expire="30"			= expiration in days
-->




<!-- wrapper -->
<div id="wrapper">

    <!-- Top Bar -->
    <div id="topBar">
        <div class="container">
            <!-- right -->
            <ul class="top-links list-inline float-right">
                <li style="padding-right: 5px;"><a href="tel:1800303169"><i class="fa fa-phone"></i>1800-303-169</a></li>
                <li style="padding-left: 5px; padding-right: 5px;"><a href="tel:012810416"><i class="fa fa-phone"></i>01 2810416</a></li>
                <li style="border-right:none"><a href="mailto:info@djhanleys.ie"><i class="fa fa-envelope"></i>info@djhanleys.ie</a></li>
            </ul>


        </div>
        <div class="border-top block clearfix">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-md-12">
                        <a href="free-quotation-request" class="btn btn-featured btn-navy btn-inverse ">
                            <span>GET A FREE QUOTE NOW</span>
                            <i class="et-megaphone"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Top Bar -->



    <!--
        AVAILABLE HEADER CLASSES

        Default nav height: 96px
        .header-md 		= 70px nav height
        .header-sm 		= 60px nav height

        .b-0 		= remove bottom border (only with transparent use)
        .sticky			= sticky header
        .static			= static header
        .dark			= dark header
        .bottom			= header on bottom

        shadow-before-1 = shadow 1 header top
        shadow-after-1 	= shadow 1 header bottom
        shadow-before-2 = shadow 2 header top
        shadow-after-2 	= shadow 2 header bottom
        shadow-before-3 = shadow 3 header top
        shadow-after-3 	= shadow 3 header bottom

        .clearfix		= required for mobile menu, do not remove!
    -->
    <div id="header" class="navbar-toggleable-md sticky clearfix">

        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- BUTTONS -->
                <ul class="float-right nav nav-pills nav-second-main">

                    <!-- SEARCH -->
                    <li class="search">
                        <a href="javascript:;">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="search-box">
                            <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
                                <div class="input-group">
                                    <input type="text" name="s" placeholder="Search" class="form-control">
                                    <span class="input-group-btn">
									    <button class="btn btn-primary" type="submit">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- /SEARCH -->

                </ul>
                <!-- /BUTTONS -->

                <!-- Logo -->
                <a href="<?php echo get_permalink(get_page_by_title('free-quotation-request'))?>" class="btn btn-featured btn-navy btn-inverse ">
                    <img class="wow fadeInRight animation-visible" src="<?php echo get_template_directory_uri() ;?>/assets/images/logo.jpg" alt="">
                </a>

                <!--
                    Top Nav

                    AVAILABLE CLASSES:
                    submenu-dark = dark sub menu
                -->
                <div class="navbar-collapse collapse float-right nav-main-collapse submenu-light">
                    <nav class="nav-main">
                        <ul id="topMain" class="nav nav-pills nav-main">
                                <?php
                                if ( has_nav_menu( 'primary-menu' ) ) {
                                    wp_nav_menu( array(
                                        'container' 		=> '',
                                        'items_wrap' 		=> '%3$s',
                                        'theme_location' 	=> 'primary-menu',
                                        'walker'  => new Child_Wrap(),
                                    ) );
                                } else {
                                    wp_list_pages( array(
                                        'container' => '',
                                        'title_li' 	=> '',
                                    ) );
                                }
                                ?>
                        </ul>

                    </nav>
                </div>

            </div>
        </header>
        <!-- /Top Nav -->

    </div>

    <?php if ( is_front_page()) : ?>

    <?php else: ?>
        <div class=container>
    <?php endif; ?>