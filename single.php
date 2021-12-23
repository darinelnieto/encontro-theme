<?php
/**
 * 
 * Default single.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<main id="ditto-single">
	
	<?php get_template_part('partials/single-post'); ?>
				
</main>

<?php get_footer(); ?>