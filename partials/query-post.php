   
<?php
/**
 * 
 * Partial Name: query-post
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
// $posts = new WP_Query(array());
$posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 2, 'order' => 'desc'));

?>
<div class="query-post-partial-79a506">
    <div class="row content-post">
        <?php if($posts->have_posts()){
            while ($posts->have_posts()) { $posts->the_post(); ?>
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <!-- <a href="<?php echo get_permalink( )?>"> -->
                        <div class="card">
                            <div class="content-image-post" style="background-image:url(<?php echo get_field('imagen_destacada', $posts->ID)?>)"></div>
                            <!-- <div class="card-body">
                                <p class="title"><?php echo get_the_title($posts->ID) ?></p>
                                <p><?php echo get_field('descripcion_corta', $posts->ID) ?></p>
                                <p class="data-post"><?php echo get_the_date('d/m/y', $posts->ID) ?></p>
                            </div> -->
                        </div>
                    <!-- </a> -->
                </div>
            <?php }
             wp_reset_postdata();
        } ?>
    </div>
</div>

                    