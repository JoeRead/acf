<?php
/**
 * Template Name: [template name]
 *
 * @package understrap
 */

//Define Page Template Specific ACF Fields Here
$examplefieldname = get_field('example_field_name');

get_header();

?>

<div id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<h1><?php the_title() ?></h1>
					<p><?php echo $examplefieldname; ?></p>


					<?php while ( have_posts() ) : the_post(); ?>



					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
