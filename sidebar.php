<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first-theme-unison
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


    <aside id="secondary" class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">О дизайне</h4>
            <p class="mb-0"><?php
                echo fw_get_db_settings_option('option_regular_textarea');
                ?></p>
        </div>
        <div class="p-3">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>


    </aside><!-- /.blog-sidebar -->


