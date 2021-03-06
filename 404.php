<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package One Paze
 */
get_header();
?>

<div class="container">

    <main id="main" class="site-main" role="main">

        <section class="error-404 not-found">                                   
            <h1>404</h1>
            <p>Page not found</p>


            <div class="page-content">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'one-paze'); ?></p>

                <?php get_search_form(); ?>

            </div><!-- .page-content -->
        </section><!-- .error-404 -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
