<?php


get_header(); ?>

<?php
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
   
   // This controls the background and the filter I put on it
    echo '<div class="grid-container fullWidth post-header" 
    style="background: linear-gradient(
      rgba(0, 0, 0, 0.55), 
      rgba(0, 0, 0, 0.55)
    ), url('. $url.')">';

    //Start of foundation
        echo "<div class='grid-x grid-padding-x'>";
            echo "<div class='small-12 cell '>";
                echo "<div class='grid-x grid-padding-x'>";
                    echo "<div class='small-12 medium-8 medium-offset-2 cell sermon-video-main'>";
                        echo "<div class = 'embed-container'>";
                            //The Video Is placed here
                            echo '<p>' . the_field('vimeo_url') . '</p>';
                        echo '</div>'; //closing video main
                    echo '</div>'; //closing subset foundation
                echo "</div>";
            echo "</div>";
        echo" </div>";
    echo "</div>";


    //start of lower title section
    echo "<div class='grid-container fullWidth video-title-card'>";
            echo "<div class='grid-x grid-padding-x'>";
                echo "<div class='small-12 medium-8 medium-offset-2 cell '>";

                    the_title( '<p class = "post-title">', '</p>' );
                    echo '<p class="post-desc">' . get_the_excerpt() . '</p>';
                    echo "<p class='post-author'>";
                    the_author_meta('display_name', 1);
                    echo " | ";
                    echo get_the_date();
                    echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]');
                    echo "</p>";
                echo '</div>'; //closing 
            echo '</div>'; //closing subset foundation
?>
</div>


<?php
get_footer();
