<?php
/**
* Template Name: Contact
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @since 1.0
* @version 1.0
*/

get_header(); ?>

<div class="contact-page">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="small-12 medium-10 medium-offset-1 cell">
                <div class="contact-hero"> 
                    <h3>Request Information</h3>
                    <!-- <p>Questions? Comments? Concerns? Snide remarks?</p> -->

                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                                the_content();
                            endwhile; else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>

                    </div>
                </div> 
            </div>
        </div>
    </div>  
</div>






<?php get_footer();
