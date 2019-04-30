<?php
/**
 * Template Name: YOUR PAGE TEMPLATE NAME
 *
 * Modular Page Template
 *
 * @package understrap
 */

get_header();

?>

<div id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<?php the_title() ?>
					<?php /*
						Flexible Content
						----------------
						This will loop through everything in the flex area.
						Going through headers, tabbed sections, content areas etc.

						It's build to be able to build your own pages, but without
						clients needing to see any code. They should ever need to
						create their own layouts, but it's nice to be able to have
						one tool that can be spread across the whole site.
					*/
					get_template_part('modules/flex','content'); ?>


					<?php while ( have_posts() ) : the_post(); ?>



						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
