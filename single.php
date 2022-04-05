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
	<?php
		if(get_post_type() != 'formularios'){
			get_template_part('partials/single-post'); 
		}else{
			get_template_part('templates/perfil-template');
		}
	?>			
</main>

<?php get_footer(); ?>