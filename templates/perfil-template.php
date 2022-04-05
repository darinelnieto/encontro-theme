   
<?php
/**
 * 
 * Template Name: perfil
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
?>
<main id="perfil-template-c748bb">
    <article class="menu-perfil">
        <?php get_template_part('partials/Menu-arbol-genealogico'); ?>
    </article>
    <article class="content-forms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?= the_content(); ?>
                </div>
            </div>
        </div>
    </article>
</main>
<?php get_footer(); ?>
                    