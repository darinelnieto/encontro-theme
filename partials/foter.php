   
<?php
/**
 * 
 * Partial Name: foter
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$banner_footer = get_field('banner_footer', 'option');
$adornos = get_field('imagenes_adorno', 'option');
?>
<section class="foter-partial-3b2d84">
    <div class="banner-footer" style="background-image:url(<?php echo $banner_footer['imagen_de_fondo'] ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="<?php echo $banner_footer['imagen_marca']['url'] ?>" class="logo-footer" alt="<?php echo $banner_footer['imagen_marca']['title'] ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="content-gris">
        <img src="<?php echo $adornos['izquierda'] ?>" class="image-footer-izquierda">
        <div class="container">
            <div class="row text-footer-content">
                <div class="col-12 text-center">
                    <h2 class="title-footer mb-4"><?php echo get_field('titulo', 'option'); ?></h2>
                    <p class="description-footer pb-4"><?php echo get_field('descripcion', 'option'); ?></p>
                    <a href="<?php echo get_field('boton_ver_mas', 'option')['url'] ?>" class="btn-view-more-footer">Ver mas</a>
                </div>
            </div>
        </div>
        <img src="<?php echo $adornos['derecha'] ?>" class="image-footer-derecha">
    </div>
</section>
                    