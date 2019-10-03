<?php
/**
* Template Name: Front Page
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
    <div class="grid-container fullWidth billboard-img">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <h1 class = "center">Dr. Trent Stewart</h1>
                <p class = "quote"><?php the_field('top_tagline'); ?></p>
                <div class = "center">
                    <img class = "signature" src = "http://trentstewart.org/wp-content/uploads/2019/08/ts-new.png" alt="signature">
                </div>
            </div>
        </div>
    </div>

    <div class = "purpose-section">
        <h3 class = "purpose-statement"><?php the_field('purpose_statement'); ?></h3>
    </div>

    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">

            <div class="small-12 large-4 cell feat-card-bg">
                <div class="grid-x grid-padding-x">
                    <div class="small-12 cell align-center feat-icon-bg">
                    </div>
                </div>
                <div class = "card-lower">
                    <h2 class = "center header-2">Consulting</h2>
                    <p class = "tag"><?php the_field('consulting_section'); ?></p>
                    <div class = "center">
                        <a class="ff dark1" href="http://trentstewart.org/consult">Learn More</a> 
                    </div>
                </div>
            </div>

            <div class="small-12 large-4 cell feat-card-bg">
                <div class="grid-x grid-padding-x">
                    <div class="small-12 cell align-center feat-icon-bg bg2">
                    </div>
                </div>
                <div class = "card-lower">
                    <h2 class = "center header-2">Blog</h2>
                    <p class = "tag"><?php the_field('blog_section'); ?> </p>
                    <div class = "center">
                        <a class="ff dark1" href="http://trentstewart.org/blog">Read More</a> 
                    </div>
                </div>
            </div>

            <div class="small-12 large-4 cell feat-card-bg">
                <div class="grid-x grid-padding-x">
                    <div class="small-12 cell align-center feat-icon-bg bg3">
                    </div>
                </div>
                <div class = "card-lower">
                    <h2 class = "center header-2">About</h2>
                    <p class = "tag"><?php the_field('about_section'); ?> </p>
                    <div class = "center">
                        <a class="ff dark1" href="http://trentstewart.org/about">Read More</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




    <?php get_footer();
