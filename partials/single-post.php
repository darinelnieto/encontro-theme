   
<?php
/**
 * 
 * Partial Name: single-post
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<section class="single-post-partial-137a34">
    <div class="container">
        <div class="row">
            <div class="col-12">
				<?php the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'vino-la-leyenda' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
				
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vino-la-leyenda' ),
						'after'  => '</div>',
					)
				); ?>
            </div>
        </div>
    </div>
</section>
                    