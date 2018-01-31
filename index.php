<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package first-theme-unison
 */

get_header(); ?>

	<div id="primary" class="container">
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-8 blog-main">

                    <div class="blog-post">
                        <?php
                        if ( have_posts() ) :

                        if ( is_home() && ! is_front_page() ) : ?>
                            <header>
                                <h3 class="pb-3 mb-4 font-italic border-bottom"><?php single_post_title(); ?></h3>
                            </header>

                            <?php
                        endif;
                        ?>

                            <?php if ( have_posts() ) : ?>
                                <?php /* начинается цикл */ ?>
                                <?php /* Start the Loop */
                                while ( have_posts() ) : the_post();

                                    /*
                                     * Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', get_post_format() );

                                endwhile;
                                the_posts_pagination( array(
                                    'mid_size' => 2,
                                ) );

                            /*the_posts_navigation();*/

                            else :

                                get_template_part( 'template-parts/content', 'none' );


                            endif; ?>
                            <?php endif; ?>
                    </div><!-- /.blog-post -->



                   <!-- <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                    </nav>-->

                </div><!-- /.blog-main -->


<?php
//if (!is_front_page()) {

    get_sidebar();
//}
?>
            </div><!-- /.row -->




		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
