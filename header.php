<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first-theme-unison
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


	<header id="masthead" class="site-header">
		<div class="container">
			<?php
			/*the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;*/?>


		</div><!-- .site-branding -->
        <!-- #my nav -navigation -->

        <div class="container">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <span class="text-muted" href="#">+38(066)11 22 444</span>
                </div>
                <div class="col-4 text-center">
                    <?php $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                    <a class="blog-header-logo logo-my" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo $description;  ?></a>
                        <?php
                    endif; ?>

            </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                <?php
                get_search_form();?>
            </div>
        </div>


        <div class="nav-scroller py-2 mb-2">
            <nav id="site-navigation" class="nav d-flex justify-content-center my-site-navigator" role="navigation">
                <?php
                $ulclass = array(
                    'menu'  => 'menu-1',
                    'container'       => false,
                    'echo'            => false,
                    'items_wrap'      => '%3$s',
                    'depth'           => 0,
                );

                echo strip_tags(wp_nav_menu( $ulclass ), '<a>' );
                ?>
            </nav>


        </div>


        <div class="jumbotron p-3 p-md-5  rounded bg-dark myback">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic"> <?php echo fw_get_db_settings_option('header_text');?></h1>
                <p class="lead my-3"><?php echo fw_get_db_settings_option('option_regular_text');?>.</p>

            </div>
        </div>
        </div>
        <!-- #end my nav -navigation -->

	</header><!-- #masthead -->

	<div id="content" class="container">
