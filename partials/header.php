   
<?php
/**
 * 
 * Partial Name: header
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$logo = get_field('logo', 'option');
$ayuda = get_field('te_ayudamos', 'option');
?>
<section class="header-partial-3cace4">
    <div class="container">
        <div class="row alinea-row">
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-6 text-center">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo $logo['url'] ?>" alt="" class="logo-header">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <nav class="navbar">
                    <div class="main-menu">
                    <div class="hamburguer" onclick="ditto.menu(this)">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <?php
                        wp_nav_menu([
                        'menu'            => 'main_menu',
                        'theme_location'  => 'main_menu',
                        'container'       => 'div',
                        'menu_class'      => 'main-menu-list',
                        ]);
                    ?>   
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
                    