<?php
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); 
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