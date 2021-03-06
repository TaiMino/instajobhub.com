<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package One Paze
 */
 
    $cur_cat = get_query_var('cat');
    $port_cat = get_theme_mod('portfolio_section_category');
    
    $blog_class = '';
    if($cur_cat != $port_cat){
        $blog_class = get_theme_mod('blog_page_layouts', 'blog_image_large'); 
    }
    
get_header(); ?>
    <?php if($port_cat) : ?>
    	<?php if($cur_cat != $port_cat) : ?>
			<div id="primary" class="content-area <?php echo esc_attr($blog_class); ?> blog-collection">
		<?php endif; ?>
	<?php else : ?>
		<div id="primary" class="content-area <?php echo esc_attr($blog_class); ?> blog-collection">
    <?php endif; ?>
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<!-- For Portfolio Related Archives -->
			<?php if($port_cat && $cur_cat == $port_cat) : ?>
				<?php get_template_part('template-parts/archive', 'portfolio'); ?>

				<?php the_posts_navigation(); ?>
			<!-- For Other Archive Contents -->
			<?php else : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>
			<?php endif; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
<?php if($port_cat) : ?>
	<?php if($cur_cat != $port_cat) : ?>
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	<?php endif; ?>
<?php else : ?>
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>
