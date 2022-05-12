   
<?php
/**
 * 
 * Partial Name: form
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<section class="form-partial-75821d">
    <img src="<?php echo get_field('imagen_adorno_izquierda', 'option') ?>" class="imagen-izquierda-formulario" alt="">
    <div class="container">
        <div class="row alinea-row">
            <div class="col-12 col-lg-4">
                <h3><?php echo get_field('titulo_introduccion', 'option') ?></h3>
                <p><?= get_field('fecha_limite', 'option') ?></p>
            </div>
            <div class="col-12 col-lg-8 content-form">
                <?php echo do_shortcode(get_field('shortcode', 'option')) ?>
            </div>
        </div>
    </div>
    <img src="<?php echo get_field('imagen_adorno_derecha', 'option') ?>" class="imagen-derecha-formulario" alt="">
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $('.envia').prop('disabled', true);
    $('#check-acepta').on('click', function(){
        $('input[type=checkbox]').on('click');
	    if($('input[type=checkbox]').prop("checked") == true ){
			$('.acepta-politicas').css({'background':'#5e6464'});
            $('.envia').prop('disabled', false);
		}else{
			$('.acepta-politicas').css({'background':'white'});
            $('.envia').prop('disabled', true);
		}
    });
</script>