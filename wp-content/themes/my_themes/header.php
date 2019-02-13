<!DOCTYPE html>
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title><?php bloginfo('name') ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" > 
   
   <?php wp_head(); ?>
   
</head>

<body>

   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
               <a href="<?php echo home_url(); ?>"><img alt="" src="<?php bloginfo('template_url') ?>images/logo.png"></a>
            </div>


            <nav id="nav-wrap">
					<a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
					<a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
					<?php wp_nav_menu(array(
					'theme_location'  => 'top',
					'container'       =>  null,
					'menu_class'      => 'nav', 
					'menu_id'         => 'nav'
				)); ?>
				</nav>
				<!-- end #nav-wrap -->


            <!--<nav id="nav-wrap">-->

            <!--   <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>-->
	           <!-- <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>-->

            <!--   <ul id="nav" class="nav">-->

	           <!--    <li class="current"><a href="index.htm">Home</a></li>-->
	           <!--    <li><span><a href="blog.html">Blog</a></span>-->
            <!--         <ul>-->
            <!--            <li><a href="blog.html">Blog Index</a></li>-->
            <!--            <li><a href="single.html">Post</a></li>-->
            <!--         </ul>-->
            <!--      </li>-->
            <!--      <li><span><a href="portfolio-index.html">Portfolio</a></span>-->
            <!--         <ul>-->
            <!--            <li><a href="portfolio-index.html">Portfolio Index</a></li>-->
            <!--            <li><a href="portfolio.html">Portfolio Entry</a></li>-->
            <!--         </ul>-->
            <!--      </li>-->
	           <!--    <li><a href="about.html">About</a></li>-->
            <!--      <li><a href="contact.html">Contact</a></li>-->
            <!--      <li><a href="styles.html">Features</a></li>-->

            <!--   </ul> <!-- end #nav -->

            <!--</nav> <!-- end #nav-wrap -->

         </div>

      </div>

   </header> <!-- Header End -->