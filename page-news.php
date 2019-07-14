<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package People_in_Motion
 */

get_header();
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

				<div class="row">
					<div class="col-xs-6">
						<h2>News</h2>
					</div>
				</div>
					<div class="row">


						<?php
						   // the query
						   $the_query = new WP_Query( array(
						      'posts_per_page' => 9
						   ));
						?>

						<?php if ( $the_query->have_posts() ) : ?>
						  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div class="col-xs-12 col-md-4">
									<div class="news-item">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<h3><?php the_title(); ?></h3>
										<?php the_post_thumbnail(); ?>
										<?php the_date('', '<p class="news-item-date">', '</p>'); ?>
								    <?php the_excerpt(); ?>
									</a>
									</div>
								</div>
						  <?php endwhile; ?>
						  <?php wp_reset_postdata(); ?>

						<?php else : ?>
						  <p><?php __('No News'); ?></p>
						<?php endif; ?>

					</div>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
