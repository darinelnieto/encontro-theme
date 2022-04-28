   
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
$next = get_field('formulario_siguiente');
$previu = get_field('formulario_anterior');
?>
<main id="perfil-template-c748bb">
    <div class="menu-hamburguesa-family-tree">
        <span><hr></span>
        <span><hr></span>
        <span><hr></span>
    </div>
    <section>
        <article class="menu-perfil">
            <?php get_template_part('partials/Menu-arbol-genealogico'); ?>
        </article>
        <article class="content-forms">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?= the_content(); ?>
                    </div>
                    <div class="col-12 mt-5 content-next-prev">
                        <?php if($previu): ?>
                            <a href="<?= $previu ?>"><i class="fas fa-angle-left"></i>  Anterior</i></a>
                        <?php endif; ?>
                        <?php if($next): ?>
                            <a href="<?= $next ?>">Siguiente <i class="fas fa-angle-right"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </article>
    </section>
</main>
<?php get_footer(); ?>
                    