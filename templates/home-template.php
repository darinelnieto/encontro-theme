   
<?php
/**
 * 
 * Template Name: Home
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
$btn_banner = get_field('btn');
?>
<main id="home-template-b95c23">
    <!-- banner -->
    <section class="banner-home">
        <div class="container">
            <div class="row alinea-row">
                <div class="col-12 col-lg-5 text-banner-home">
                    <h1><?php echo get_field('titulo') ?></h1>
                    <h3><?php echo get_field('subtitulo_banner') ?></h3>
                    <p><?php echo get_field('descripcion') ?></p>
                    <a href="<?php echo $btn_banner['link']['url'] ?>"><?php echo $btn_banner['nombre_del_boton'] ?></a>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 mt-5 mt-lg-0">
                    <img src="<?php echo get_field('image')['url'] ?>" class="img-banner-home" alt="<?php echo get_field('image')['title'] ?>">
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- section form -->
    <section class="form-home">
        <img src="<?php echo get_field('imagen_adorno_izquierda') ?>" class="imagen-izquierda-formulario" alt="">
        <div class="container">
            <div class="row alinea-row">
                <div class="col-12 col-lg-4">
                    <h3><?php echo get_field('titulo_introduccion') ?></h3>
                </div>
                <div class="col-12 col-lg-8 content-form">
                    <?php echo do_shortcode(get_field('shortcode')) ?>
                </div>
            </div>
        </div>
        <img src="<?php echo get_field('imagen_adorno_derecha') ?>" class="imagen-derecha-formulario" alt="">
    </section>
    <!-- end section form -->
    <!-- section one -->
    <section class="section-one-home">
        <!-- process -->
        <div class="container">
            <div class="row pb-4 alinea-row">
                <div class="col-12 text-center">
                    <h2 class="title-process"><?php echo get_field('title_process') ?></h2>
                </div>
            </div>
            <!-- grupo uno -->
            <?php $grupo_uno = get_field('grupo_uno'); ?>
            <div class="row aliea-row">
                <div class="col-12 col-lg-6 text-center content-grupo-uno">
                    <a href="<?php echo $grupo_uno['link_pagina_proceso'] ?>">
                        <img src="<?php echo $grupo_uno['icono_list'] ?>" alt="" class="icon-grupos">
                        <p><?php echo $grupo_uno['texto_icono_list'] ?></p>
                    </a>
                </div>
                <div class="col-12 col-lg-6 text-center content-grupo-uno">
                    <a href="<?php echo $grupo_uno['link_pagina_proceso'] ?>">
                        <img src="<?php echo $grupo_uno['icono_start'] ?>" alt="" class="icon-grupos">
                        <p><?php echo $grupo_uno['texto_icono_start'] ?></p>
                    </a>
                </div>
            </div>
            <!-- grupo dos -->
            <?php $grupo_dos = get_field('grupo_dos'); ?>
            <div class="row alinea-row">
                <div class="col-12 col-lg-4 content-icon-requisitos">
                    <a href="<?php echo $grupo_dos['link_pagina_proceso'] ?>">
                        <img src="<?php echo $grupo_dos['icono_requisitos'] ?>" alt="" class="icon-grupos">
                        <p><?php echo $grupo_dos['texto_requisitos'] ?></p>
                    </a>
                </div>
                <div class="col-12 col-lg-4 text-center btn-descarga-decktop">
                    <a href="<?php echo $grupo_dos['archivo_a_descargar']['url'] ?>" target="_blank" class="btn-descarga-solicitud">
                        <p><strong>Descarga</strong><br> <?php echo $grupo_dos['texto_boton_descarga'] ?></p>
                    </a>
                </div>
                <div class="col-12 col-lg-4 content-icon-solicitud">
                    <a href="<?php echo $grupo_dos['link_pagina_proceso'] ?>">
                        <img src="<?php echo $grupo_dos['icono_solucitud'] ?>" alt="" class="icon-grupos">
                        <p><?php echo $grupo_dos['texto_icono_solicitud'] ?></p>
                    </a>
                </div>
                <div class="col-12 col-lg-4 text-center btn-descarga-movil">
                    <a href="" class="btn-descarga-solicitud">
                        <p><strong>Descarga</strong><br> <?php echo $grupo_dos['texto_boton_descarga'] ?></p>
                    </a>
                </div>
            </div>
        </div>
        <!-- end process -->
        <!-- passport benefits -->
        <div class="container">
            <div class="row mt-5 alinea-row">
                <div class="col-12 col-lg-3 content-title-benefits">
                    <h2><?php echo get_field('titulo_beneficios') ?></h2>
                </div>
                <div class="col-12 col-lg-9 content-text-benefits">
                    <?php echo get_field('contenido_beneficios') ?>
                </div>
            </div>
        </div>
        <!-- end passport benefits -->
    </section>
    <!-- end section one -->
    <!-- parallax -->
    <section class="section-parallax" style="background-image:url(<?php echo get_field('imagen_parallax') ?>);">
        <div class="content-parallax">
            <div class="container">
                <div class="row">
                    <div class="col-12 parallax-text">
                        <h2><?php echo get_field('titulo_parallax') ?></h2>
                        <p><?php echo get_field('informacion_parallax') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end parallax -->
    <!-- section blog faq -->
    <section class="section-blog-faq pt-5 pb-5">
        <div class="container">
            <div class="row">
                <!-- post -->
                <div class="col-12 col-lg-7">
                    <?php get_template_part('partials/query-post'); ?>
                    <div class="text-center mt-5">
                        <a href="" class="view-blog-link">Ver todo el blog</a>
                    </div>
                </div>
                <!-- faq -->
                <div class="col-12 col-lg-5">
                    <h2 class="title-fqa"><?php echo get_field('titulo_fqa'); ?></h2>
                    <div class="content-fqa">
                        <?php 
                            $fqa_content = get_field('contenido_fqa');
                            if($fqa_content){
                                foreach($fqa_content as $fqa){ ?>
                                    <div class="item-fqa">
                                        <div class="question"><?php echo $fqa['pregunta'] ?></div>
                                        <div class="answer"><?php echo $fqa['respuesta'] ?></div>
                                    </div>
                               <?php }
                            } ?>
                    </div>
                    <?php $pregunta = get_field('pregunta'); ?>
                    <div class="content-btn-fqa-actions">
                        <!-- <a href="" class="btn-show-more-fqa">Ver más</a> -->
                        <a href="<?php echo $pregunta['link_whatsapp'] ?>" class="btn-i-have-a-question"><span><img src="<?php echo $pregunta['icono_whatsapp'] ?>" alt=""></span><span>Tengo una <br> pregunta</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section blog faq -->
</main>
<?php get_footer(); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $('.envia').prop('disabled', true);
    $('#check-acepta').on('click', function(){
        $('input[type=checkbox]').on('click');
	    if($('input[type=checkbox]').prop("checked") == true ){
			$('.acepta-politicas').css({'background':'black'});
            $('.envia').prop('disabled', false);
		}else{
			$('.acepta-politicas').css({'background':'#5e6464'});
            $('.envia').prop('disabled', true);
		}
    });
</script>
                    