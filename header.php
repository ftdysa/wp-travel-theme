<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '|', true, 'right' ); ?> The Ds Overseas</title>

    <link href="<?php echo get_template_directory_uri(); ?>/css/site.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic|Open+Sans:700,400" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<nav class="mobile-nav navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav mobile-nav-list">
                <li class="nav-item nav-item-home"><a href="/"><i class="fa fa-home fa-fw"></i> Home</a></li>
                <li class="nav-item nav-item-about"><a href="/about"><i class="fa fa-users fa-fw"></i> About</a></li>
                <li class="nav-item nav-item-waypoints"><a href="/map"><i class="fa fa-map-marker fa-fw"></i> Map</a></li>
                <li class="nav-item nav-item-galleries"><a href="/galleries"><i class="fa fa-image fa-fw"></i> Galleries</a></li>
                <li class="nav-item nav-item-contact-us"><a href="/contact-us"><i class="fa fa-envelope fa-fw"></i> Contact Us </a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="travel-header">
    <div class="container">
        <a href="/"><h1><i class="fa fa-briefcase"></i> The Ds Overseas</h1></a>
        <a class="rss" href="<?php bloginfo('rss_url'); ?>"><i class="fa fa-2x fa-rss"></i></a>
    </div>
</div>

<div class="container">
    <div class="main-content-wrapper">
