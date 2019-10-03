<?php
/*

*/
get_header(); ?>

<div class = "featured-pages">
    <div class="grid-container fullWidth billboard-img blog-page-bg">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <h1 class = "center">Media</h1>
                <p class = "quote">Helping churches create healthy environments that grow healthy ministries.</p>
            </div>
        </div>
    </div>
</div>

<div class="grid-container blog-background">
    <div class="grid-x grid-padding-x">
        <?php
        if ( have_posts() ) : 
             posts_nav_link(); 
            while ( have_posts() ) : 
                the_post(); 
                echo "<div class='small-12 medium-6 large-4 cell'>";
                echo "<div class = 'blog-post'>";
                the_post_thumbnail(); 
                
                echo '<h2 class = "title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';


                echo "<span class='author'>";
                the_author(); 
                echo "</span>";
                echo " | ";

                echo "<span class='date'>";
                echo get_the_date();
                echo "</span>";

                echo "<div class='blog-excerpt'>";
                the_excerpt( '<p class = "blog-excerpt">', '</p>' );

                echo "</div>";
                echo "</div>";
                echo "</div>";
            endwhile; 
        else: 
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
        endif; 
        ?>
    </div>
</div>


<?php
get_footer();
