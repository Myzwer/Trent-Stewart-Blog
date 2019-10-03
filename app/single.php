<?php
/**
* Template Name: Posts Page
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @since 1.0
* @version 1.0
*/

get_header(); ?>

<?php
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    echo '<div class="grid-container fullWidth post-header" style="background: url('. $url.')">';
       echo "<div class='grid-x grid-padding-x'>";
            echo "<div class='large-12 cell billboard-main'>";

                the_title( '<p class = "post-title">', '</p>' );

                echo "<p class='post-author'>";
                the_author_meta('display_name', 1);
                echo " | ";
                echo get_the_date();
                echo "</p>";
            echo "</div>";
        echo "</div>";
    echo" </div>";
?>
<div class = "white">
<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="small-12 medium-10 medium-offset-1 cell">
            <div class = "blog-article">
                <p class = "blog-paragraph">
                    <?php 
                    if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
               the_content();
            endwhile; 
        else: 
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
        endif; 



                    ?>
                </p>
            </div>
        </div>
    </div>
</div> 
</div>


<?php
get_footer();
