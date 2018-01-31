<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first-theme-unison
 */
/*$settings_options = fw()->theme->get_settings_options();*/

?>

	</div><!-- #content -->

<!--footer new-->
<div class="container">
    <div class="row">
<footer class="footer-bs">
    <div class="row">
        <div class="fw-col-md-3 footer-brand animated fadeInLeft">
            <h5>О нас</h5>
            <p>
                <?php echo fw_get_db_settings_option('option_regular_textarea');?>
            </p>
        </div>
        <div class="fw-col-md-3 footer-nav animated fadeInUp">
            <h5>Меню—</h5>
                <?php
                 wp_nav_menu( array( 'menu_class' => 'my-footer-nav','container_class' => 'fw-col-md-3 ', 'theme_location' => 'footer-menu' ) );
                ?>
        </div>
        <div class="fw-col-md-3 footer-nav animated fadeInUp">
            <h5>Сети-</h5>
            <?php
            wp_nav_menu( array( 'menu_class' => 'my-footer-nav','container_class' => 'fw-col-md-3', 'theme_location' => 'social-menu' ) );
            ?>
        </div>
        <div class="fw-col-md-3 footer-ns animated fadeInRight">
            <h5>Поиск</h5>
            <p>Ландша́фтный дизайн поиск</p>
            <p>
            <div class="input-group">
                <?php
                get_search_form();?>
            </div><!-- /input-group -->

        </div>
    </div>
</footer>
<section class="theme-un" style="text-align:center; margin:10px auto;">&copy; <?php echo get_bloginfo( 'title' ); ?> <?php echo date( 'Y' )  ?>
    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'first-theme-unison' ) ); ?>"><?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( 'Proudly powered by %s', 'first-theme-unison' ), 'WordPress' );
        ?></a>
    <span class="sep"> | </span>
    <?php
    /* translators: 1: Theme name, 2: Theme author. */
    printf( esc_html__( 'Theme: %1$s by %2$s.', 'first-theme-unison' ), 'first-theme-unison', '<a href="http://underscores.me/">Underscores.me</a>' );
    ?></section>
    </div>
</div>
<div class="site-footer">

    <?php
   // echo fw_get_db_settings_option('body-color');
    ?>


</div>
<!-- #footernew finish -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
