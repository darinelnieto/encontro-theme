   
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
</section>
                    