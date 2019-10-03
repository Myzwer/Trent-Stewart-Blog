<?php

/**
	Template Name: Broadcast Archives
**/

get_header();



$this_page = get_page_by_path('broadcasts');
        $post = $this_page;
        setup_postdata($post);
        ?>


<div class = "featured-pages">
    <div class="grid-container fullWidth billboard-img media-page-bg">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <h1 class = "center">Media</h1>
                <p class = "quote">Helping churches create healthy environments that grow healthy ministries.</p>
            </div>
        </div>
    </div>
</div>


<?php 
// This is the code for "hopefully" the full page, this will be surrounded in <a> tags for the "view all" button.
// echo get_term_link('sermons' , 'format'); 
?>


<h2 class = "media-titles">Sermons</h2>
    <div class="grid-container blog-background">
        <div class="grid-x grid-padding-x">


<?php

// WP_Query arguments
$args = array (
    'post_type'              => array( 'broadcast' ),
    'post_status'            => array( 'publish' ),
    'nopaging'               => false,
    'order'                  => 'DESC',
    'orderby'                => 'date',
    'tax_query'              => array(
        array(
            'taxonomy'               =>'format',
            'terms'                  =>'sermons',
            'field'                  =>'slug'
        )
    )
);

// The Query
$broadcasts = new WP_Query( $args );



// The Loop
if ( $broadcasts->have_posts() ) {
    while ( $broadcasts->have_posts() ) {
        $broadcasts->the_post();

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

    }
} else {
    echo 'there are no posts.'; // no posts found
}
        echo "<div class = 'page-nav'>";
        posts_nav_link( ' &#183; ', 'previous page', 'next page' );

        echo "</div>";
// Restore original Post Data
wp_reset_postdata();

?>
</div>
</div>


<hr>


<h2 class = "media-titles">The Ascent Podcast</h2>
    <div class="grid-container blog-background">
        <div class="grid-x grid-padding-x">


<?php

// WP_Query arguments
$args = array (
    'post_type'              => array( 'broadcast' ),
    'post_status'            => array( 'publish' ),
    'nopaging'               => false,
    'order'                  => 'DESC',
    'orderby'                => 'date',
    'tax_query'              => array(
        array(
            'taxonomy'               =>'format',
            'terms'                  =>'podcasts',
            'field'                  =>'slug'
        )
    )
);

// The Query
$broadcasts = new WP_Query( $args );

// The Loop
if ( $broadcasts->have_posts() ) {
    while ( $broadcasts->have_posts() ) {
        $broadcasts->the_post();

        echo "<div class='small-12 medium-6 large-4 cell'>";
                echo "<div class = 'blog-post'>";
                the_post_thumbnail(); 
                
                echo '<h2 class = "title"><a href="' . get_field('podcast_link') . '">' . get_the_title() . '</a></h2>';


                echo "<span class='author'>";
                echo 'featuring ';
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



    }
} else {
    echo 'there are no posts.'; // no posts found
}

?>
</div>
</div>


<?php


get_footer();
 ?>