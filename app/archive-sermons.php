<?php
/*
Template Name: Archive Sermons
*/
get_header(); ?>

<div class = "featured-pages">
    <div class="grid-container fullWidth billboard-img blog-page-bg">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell billboard-main">
                <h1 class = "center">This is Archive</h1>
                <p class = "quote">Helping churches create healthy environments that grow healthy ministries.</p>
            </div>
        </div>
    </div>
</div>

<?php
$args = array(
  'post_type'   => 'sermons',
  'post_status' => 'publish',
  'tax_query'   => array(
    array(
        'taxonomy' => 'sermon_uploader',
        'field'    => 'slug',
        'terms'    => 'diving'
    )
  )
 );
 
$sermons = new WP_Query( $args );
if( $sermons->have_posts() ) :
?>
  <ul>
    <?php
      while( $sermons->have_posts() ) :
        $sermons->the_post();
        ?>
          <li><?php printf( '%1$s - %2$s', get_the_title(), get_the_content() );  ?></li>
        <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
<?php
else :
  esc_html_e( 'No sermons in the diving taxonomy!', 'text-domain' );
endif;
?>


<?php
get_footer();
