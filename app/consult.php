<?php
/**
* Template Name: Consult
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
    <div class="grid-container fullWidth billboard-consult"> 
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <h1 class = "center">Consultation</h1>
                <p class = "consult-tag"><?php the_field('consulting_tagline'); ?></p>
            </div>
        </div>
    </div>
</div>


<div class = "consult-hero">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="small-12 medium-6 cell">
                <div class = "hero-callout">
                    <h2><?php the_field('Section_2_header'); ?></h2>
                    <p><?php the_field('section_2_paragraph'); ?></p>
                    <a class="ff dark1" href="http://trentstewart.org/contact">Contact Us</a> 
                </div>
            </div>
            <div class="small-12 medium-6 cell">
                <div class = "hero-callout">
                <img src="http://trentstewart.org/wp-content/uploads/2019/08/DSC_0337-copy.jpg" alt="">
            </div>
        </div>
    </div>
</div>


<div class = "consult-approach">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <h2><?php the_field('approach_header'); ?></h2>
                <div class = "approach-tag"><?php the_field('approach_quote'); ?></div>
            </div>
            <div class="small-12 medium-6 cell">
                <h3 class= "consult-callout"><?php the_field('question_1'); ?></h3>
                <p><?php the_field('answer_1'); ?></p>
            </div>

            <div class="small-12 medium-6 cell">
                <h3 class= "consult-callout"><?php the_field('question_2'); ?></h3>
                <p><?php the_field('answer_2'); ?></p>
            </div>
        </div>
    </div>
</div>


<section class="intro">
  <div class="container">
    <h2><?php the_field('consult_header'); ?></h2>
  </div>
</section>

<section class="timeline">
  <ul>
    <li>
      <div>
        <time><?php the_field('phase_1_title'); ?></time> <!-- <h5>Request Phase:</h5> -->
        <p><?php the_field('phase_1_description'); ?></p>
    <a class="ff dark1" href="http://trentstewart.org/contact">Contact Us</a>
    </li>
    <li>
      <div>
        <time><?php the_field('phase_2_title'); ?></time> <!-- <h5>Discovery Phase:</h5>  -->
        <p><?php the_field('phase_2_description'); ?></p>
      </div>
    </li>
    <li>
      <div>
        <time><?php the_field('phase_3_title'); ?></time> <!-- <h5>Proposal Phase:</h5>  -->
        <p><?php the_field('phase_3_description'); ?></p>
      </div>
    </li>
    <li>
      <div>
        <time><?php the_field('phase_4_title'); ?></time> <!-- <h5>Consulting Phase:</h5>  -->
        <p><?php the_field('phase_4_description'); ?></p>
      </div>
    </li>
    <li>
      <div>
        <time><?php the_field('phase_5_title'); ?></time> <!-- <h5>Recommendation Phase:</h5> -->
         <p><?php the_field('phase_5_description'); ?></p>
      </div>
    </li>
  </ul>
</section>

<div class = "consult-approach">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <h2><?php the_field('package_header'); ?></h2>
                <div class = "approach-tag"><?php the_field('package_quote'); ?></div>
            </div>
        </div>
    </div>
</div>

<div class = "consult-sections">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class = "large-6 cell package-background">
                <h2><?php the_field('package_1_title'); ?></h2>
            </div>
            <div class = "large-6 center cell">
                <div class="right-padding">
                    <h3><?php the_field('package_1_right_header'); ?></h3>
                    <hr>
                    <div class="grid-x grid-padding-x">
                        <div class="large-6 cell">
                            <ul>
                                <?php
                                    // check if the repeater field has rows of data
                                    if( have_rows('package_1_details_list_items') ):
                                        // loop through the rows of data
                                        while ( have_rows('package_1_details_list_items') ) : the_row();
                                            // display a sub field value
                                            echo '<li>';
                                            the_sub_field('list_item');
                                            echo '</li>';
                                        endwhile;
                                    else :
                                        // no rows found
                                    endif;
                                ?>
                            </ul>
                        </div>
                    
                        <div class="large-6 cell">
                            <ul>
                                <?php
                                    // check if the repeater field has rows of data
                                    if( have_rows('package_1_details_list_items_2') ):
                                        // loop through the rows of data
                                        while ( have_rows('package_1_details_list_items_2') ) : the_row();
                                            // display a sub field value
                                            echo '<li>';
                                            the_sub_field('list_item');
                                            echo '</li>';
                                        endwhile;
                                    else :
                                        // no rows found
                                    endif;
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="large-6 cell">
                        <hr>
                        <p>
                            <?php the_field('package_1_paragraph'); ?>
                        </p>
                        <a class="ff dark1" href="http://trentstewart.org/contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class = "consult-sections">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class = "large-6 cell package-background2">
                <h2><?php the_field('package_2_title'); ?></h2>
            </div>
            <div class = "large-6 center cell">
                <div class="right-padding">
                    <h3><?php the_field('package_2_right_header'); ?></h3>
                    <hr>
                    <div class="grid-x grid-padding-x">
                        <div class="large-6 cell">
                            <ul>
                                <?php
                                    // check if the repeater field has rows of data
                                    if( have_rows('package_2_bullet_item_list') ):
                                        // loop through the rows of data
                                        while ( have_rows('package_2_bullet_item_list') ) : the_row();
                                            // display a sub field value
                                            echo '<li>';
                                            the_sub_field('list_item');
                                            echo '</li>';
                                        endwhile;
                                    else :
                                        // no rows found
                                    endif;
                                ?>
                            </ul>
                        </div>
                    
                        <div class="large-6 cell">
                            <ul>
                                <?php
                                    // check if the repeater field has rows of data
                                    if( have_rows('package_2_bullet_item_list_2') ):
                                        // loop through the rows of data
                                        while ( have_rows('package_2_bullet_item_list_2') ) : the_row();
                                            // display a sub field value
                                            echo '<li>';
                                            the_sub_field('list_item');
                                            echo '</li>';
                                        endwhile;
                                    else :
                                        // no rows found
                                    endif;
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="large-6 cell">
                        <hr>
                        <p>
                            <?php the_field('package_2_paragraph'); ?>
                        </p>
                        <a class="ff dark1" href="http://trentstewart.org/contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class = "consult-sections">
    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class = "large-6 cell package-background3">
                <h2><?php the_field('package_3_title'); ?></h2>
            </div>
            <div class = "large-6 center cell">
                <div class="right-padding">
                    <h3><?php the_field('package_3_right_header'); ?></h3>
                    <hr>
                    <div class="grid-x grid-padding-x">
                        <div class="large-6 cell">
                            <ul>
                                <?php
                                    // check if the repeater field has rows of data
                                    if( have_rows('package_3_bullet_item_list') ):
                                        // loop through the rows of data
                                        while ( have_rows('package_3_bullet_item_list') ) : the_row();
                                            // display a sub field value
                                            echo '<li>';
                                            the_sub_field('list_item');
                                            echo '</li>';
                                        endwhile;
                                    else :
                                        echo "Catas";
                                    endif;
                                ?>
                            </ul>
                        </div>
                    
                        <div class="large-6 cell">
                            <ul>
                                <?php
                                    // check if the repeater field has rows of data
                                    if( have_rows('package_3_bullet_item_list_2') ):
                                        // loop through the rows of data
                                        while ( have_rows('package_3_bullet_item_list_2') ) : the_row();
                                            // display a sub field value
                                            echo '<li>';
                                            the_sub_field('list_item');
                                            echo '</li>';
                                        endwhile;
                                    else :
                                        // no rows found
                                    endif;
                                ?>
                            </ul>
                        </div>
                    </div>

                    <div class="large-6 cell">
                        <hr>
                        <p>
                            <?php the_field('package_1_paragraph'); ?>
                        </p>
                        <a class="ff dark1" href="http://trentstewart.org/contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<div class = "featured-pages">
    <div class="grid-container fullWidth billboard-consult-about"> 
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <h1 class = "center"><?php the_field('about_title_1'); ?> </h1>
            </div>
        </div>
    </div>
</div>

<div class = "consult-about">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">
                <p><?php the_field('about_bio_1'); ?> </p>
            </div>
        </div>
    </div>
</div>


<div class = "featured-pages">
    <div class="grid-container fullWidth billboard-consult-about ron"> 
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <h1 class = "center"><?php the_field('about_title_2'); ?></h1>
            </div>
        </div>
    </div>
</div>

<div class = "consult-about">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">
                <p><?php the_field('about_bio_2'); ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Too lazy to delete this in the event I need it later, but this is the code for cards if we ever get more than one other person consulting. -->
<!-- <div class="consult-team">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">
                <h1 class="center">Meet The Team</h1>
            </div>

            <div class="small-12 medium-4 cell">
                <div class = "team-card">
                    <img src="https://images.unsplash.com/photo-1531750026848-8ada78f641c2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                    <h4>Pastor Todd Stewart</h4>
                    <p class = "team-card-title">Pastor Of Missions and Multiplication</p>
                    <p class="team-card-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis lectus ac justo vulputate placerat. Fusce non leo et sapien ultricies lacinia. Nam elementum quam quis massa accumsan ultricies. Vivamus pulvinar tempor est. Morbi vitae metus eget augue scelerisque blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc semper rutrum tellus. Aliquam erat volutpat. Nullam tincidunt orci vel rutrum consequat.</p>
                </div>
            </div>

            <div class="small-12 medium-4 cell">
                <div class = "team-card">
                    <img src="https://images.unsplash.com/photo-1531750026848-8ada78f641c2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                    <h4>Pastor Ron Stewart</h4>
                    <p class = "team-card-title">Former Lead Pastor of GBC</p>
                    <p class="team-card-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis lectus ac justo vulputate placerat. Fusce non leo et sapien ultricies lacinia. Nam elementum quam quis massa accumsan ultricies. Vivamus pulvinar tempor est. Morbi vitae metus eget augue scelerisque blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc semper rutrum tellus. Aliquam erat volutpat. Nullam tincidunt orci vel rutrum consequat.</p>
                </div>
            </div>

            <div class="small-12 medium-4 cell">
                <div class = "team-card">
                    <img src="https://images.unsplash.com/photo-1531750026848-8ada78f641c2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="">
                    <h4>Pastor Todd Stewart</h4>
                    <p class = "team-card-title">Pastor Of Missions and Multiplication</p>
                    <p class="team-card-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis lectus ac justo vulputate placerat. Fusce non leo et sapien ultricies lacinia. Nam elementum quam quis massa accumsan ultricies. Vivamus pulvinar tempor est. Morbi vitae metus eget augue scelerisque blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc semper rutrum tellus. Aliquam erat volutpat. Nullam tincidunt orci vel rutrum consequat.</p>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- do the cards with picture on top, name, and title. Leave plenty of space for title -->
<?php get_footer();















