<?php

/**
 * Template Name: Podcast Archives
 **/

get_header();


$this_page = get_page_by_path('broadcasts');
$post = $this_page;
setup_postdata($post);
?>


    <div class="featured-pages">
        <div class="grid-container fullWidth billboard-img media-page-bg">
            <div class="grid-x grid-padding-x">
                <div class="large-12 cell billboard-main">
                    <h1 class="center">Listen</h1>
                    <p class="quote">Helping churches create healthy environments that grow healthy ministries.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container fullWidth">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell">
            </div>
        </div>
    </div>


    <h2 class="media-titles">The Ascent Podcast</h2>
    <div class="grid-container blog-background">
        <div class="grid-x grid-padding-x">


            <?php

            // WP_Query arguments
            $args = array(
                'post_type' => array('broadcast'),
                'post_status' => array('publish'),
                'nopaging' => false,
                'order' => 'DESC',
                'orderby' => 'date',
                'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'format',
                        'terms' => 'podcasts',
                        'field' => 'slug'
                    )
                )
            );

            // The Query
            $broadcasts = new WP_Query($args);

            // The Loop
            if ($broadcasts->have_posts()) {
                while ($broadcasts->have_posts()) {
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
                    the_excerpt('<p class = "blog-excerpt">', '</p>');

                    echo "</div>";
                    echo "</div>";
                    echo "</div>";

                }
                echo "<div class='page-nav'>";
                echo "<div class='navigation'>";
                echo "<ul>";
                echo paginate_links(array(
                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'total' => $broadcasts->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'format' => '?paged=%#%',
                    'show_all' => false,
                    'type' => 'list',
                    'end_size' => 2,
                    'mid_size' => 1,
                    'prev_next' => true,
                    'prev_text' => sprintf('<i></i> %1$s', __('Newer Posts', 'text-domain')),
                    'next_text' => sprintf('%1$s <i></i>', __('Older Posts', 'text-domain')),
                    'add_args' => false,
                    'add_fragment' => '',
                ));
                echo "</ul>";
                echo "</div>";
                echo "</div>";
            } else {
                echo 'there are no posts.'; // no posts found
            }

            ?>
        </div>
    </div>


<?php


get_footer();
?>