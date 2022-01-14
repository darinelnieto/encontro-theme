   
<?php
/**
 * 
 * Template Name: Proceso
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
?>
<main id="proceso-template-037af5">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 mb-5 text-center">
                <h1 class="title"><?php echo get_field('titulo') ?></h1>
            </div>
            <div class="col-12 content-process">
                <?php if(get_field('contenido')){
                    foreach(get_field('contenido') as $process){ ?>
                        <div class="row mb-5">
                            <div class="col-12 col-lg-2 mb-5 mb-lg-0 content-image">
                                <img src="<?php echo $process['icono'] ?>" alt="" class="image-process">
                            </div>
                            <div class="col-12 col-lg-10 information">
                                <?php echo $process['informacion'] ?>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </div>
    <!-- content form -->
    <?php get_template_part('partials/form'); ?>
</main>
<?php get_footer(); ?>
                    