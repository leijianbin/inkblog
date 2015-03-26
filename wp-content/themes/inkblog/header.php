<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-theme.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/common.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.ico" >
  	
  	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.2.min.js"></script>
  	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/dropdown.js"></script>
  	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/common.js"></script>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

  </head>
  <body>
    <div id="header">
    	<div id="header-cont">
        	<div class="header-Wrap">
            	<div class="header-left">
                	<a href="#"><h1><span>Meltzer</span></h1></a>
                </div>
                <div class="header-right">
                	<ul class="nav nav-pills">
                      <li role="presentation" class="active"><a href="#" class="navbox home">Home</a></li>
                      <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle navbox about" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                          About
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Michael Meltzer</a></li>
                          <li><a href="#">Jessica Meltzer</a></li>
                          <li><a href="#">Meltzer Advantage</a></li>
                          <li><a href="#">Testimonials</a></li>
                        </ul>
                      </li>
                      <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle navbox services" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                          Services
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                          <li><a href="#">Medical</a></li>
                          <li><a href="#">Financial & Legal</a></li>
                          <li><a href="#">Social</a></li>
                          <li><a href="#">Concierge</a></li>
                          <li><a href="#">Information for Life Kit™</a></li>
                        </ul>
                      </li>
                      <li role="presentation"><a  class="navbox know" href="#">Did You Know</a></li>
                      <li role="presentation"><a  class="navbox contact" href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>