<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package justvideo
 */

get_header(); 
?>

	<div class="single-wrap clear">

	<div id="primary" class="content-area">

		<main id="main" class="site-main">
		
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( ( comments_open() || get_comments_number() ) && is_singular('post') ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>

	</div><!-- .single-wrap -->

<?php get_footer(); ?>
