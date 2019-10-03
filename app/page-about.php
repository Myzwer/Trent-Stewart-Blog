<?php
/**
* Template Name: About
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

get_header(); ?>

<div class = "featured-pages">
    <div class="grid-container fullWidth billboard-about">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <h1 class = "center"><?php the_field('about_page_title'); ?></h1>
                <p class = "quote"><?php the_field('about_page_quote'); ?></p>
            </div>
        </div>
    </div>
</div>


<div class = "bio">
    <h2 class = "center"><?php the_field('main_section_title'); ?></h2>
    <?php the_field('main_body_copy'); ?>
</div>


<div class="grid-container fullWidth trent-fam">
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-8 medium-offset-2 cell">
            <img src="http://trentstewart.org/wp-content/uploads/2019/08/Trent-Family-Photo.jpg" alt="Trent Family Photo">  
        </div>
    </div>
</div>

    <?php get_footer();
