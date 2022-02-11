   
<?php
/**
 * 
 * Partial Name: foter
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$info_contacto = get_field('contacto', 'option');
$logos = get_field('logos_footer', 'option');
?>
<section class="foter-partial-3b2d84">
    <div class="content-gris">
        <div class="container">
            <div class="row text-footer-content">
                <div class="col-12 text-center">
                    <p class="info-contacto">
                        <span><?php echo $info_contacto['email'] ?></span>
                        <br>
                        <?php echo $info_contacto['ciudad_pais'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-logos-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4 text-center">
                    <img src="<?= $logos['logo_izquierda']['url'] ?>" alt="<?= $logos['logo_izquierda']['title'] ?>" class="izquierda" width="100%" height="100%">
                </div>
                <div class="col-4 text-center">
                    <img src="<?= $logos['logo_centro']['url'] ?>" alt="<?= $logos['logo_centro']['title'] ?>" class="centro" width="100%" height="100%">
                </div>
                <div class="col-4 text-center">
                    <img src="<?= $logos['logo_derecha']['url'] ?>" alt="<?= $logos['logo_derecha']['title'] ?>" class="derecha" width="100%" height="100%">
                </div>
            </div>
        </div>
    </div>
</section>
                    