<?php
/**
 * The header for my theme
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trent Stewart</title>
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="icon" 
      type="image/png" 
      href="https://trentstewart.org/wp-content/uploads/2019/08/favicon-32x32.png">

<?php wp_head(); ?>
</head>

<div class="wrapper">
  <div class="circle-button">
    <div class="first-rectangle lines">         
    </div>
    <div class="second-rectangle lines">         
    </div>
    <div class="third-rectangle lines">         
    </div>
  </div>
</div>



<div class="overlay">
  <div class="overlay-content">
    <!-- <h1><a class = "navlink" href = "https://trentstewart.org">Home</a></h1>
    <h1><a class = "navlink" href = "https://trentstewart.org/about/">About</a></h1>
    <h1><a class = "navlink" href = "https://trentstewart.org/blog/">Blog</a></h1>
    <h1><a class = "navlink" href = "https://trentstewart.org/broadcast/">Media</a></h1>
    <h1><a class = "navlink" href = "https://trentstewart.org/consult/">Consulting</a></h1>
    <h1><a class = "navlink" href = "https://trentstewart.org/contact/">Contact</a></h1> -->
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
  </div>
</div>










<body <?php body_class(); ?>>