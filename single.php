<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package People_in_Motion
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
			<div class="row">
				<div class="col-xs-12 col-sm-9 col-md-9">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
						// the_post_navigation();
					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
// get_sidebar();
get_footer();
