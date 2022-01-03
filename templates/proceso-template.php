   
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
                            <div class="col-12 col-lg-2 mb-5 mb-lg-0">
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
        <!-- informacion de contacto -->
        <?php $info_contacto = get_field('contacto'); ?>
        <div class="row pb-5">
            <div class="col-12 text-center">
                <p class="info-contacto">
                    <span><?php echo $info_contacto['email'] ?></span>
                    <br>
                    <?php echo $info_contacto['ciudad_pais'] ?>
                </p>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
                    