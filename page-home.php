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

<div class="hero" style="background-image:url('<?php the_field('hero_image'); ?>')"></div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="intro-text blue-block">
			<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3">
							<?php the_field('intro_text'); ?>
						</div>
					</div>
			</div>
		</section>

		<section class="get-involved">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<h2>Get involved</h2>
					</div>
				</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="gi-block">
								<a href="<?php the_field('get_involved_block_1_-_link'); ?>">
									<img src="<?php the_field('get_involved_block_1_-_image'); ?>" role="presentation "/>
									<?php the_field('get_involved_block_1_-_text'); ?>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="gi-block">
								<a href="<?php the_field('get_involved_block_2_-_link'); ?>">
									<img src="<?php the_field('get_involved_block_2_-_image'); ?>" role="presentation "/>
									<?php the_field('get_involved_block_2_-_text'); ?>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="gi-block">
								<a href="<?php the_field('get_involved_block_3_-_link'); ?>">
									<img src="<?php the_field('get_involved_block_3_-_image'); ?>" role="presentation "/>
									<?php the_field('get_involved_block_3_-_text'); ?>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="gi-block">
								<a href="<?php the_field('get_involved_block_4_-_link'); ?>">
									<img src="<?php the_field('get_involved_block_4_-_image'); ?>" role="presentation "/>
									<?php the_field('get_involved_block_4_-_text'); ?>
								</a>
							</div>
						</div>
					</div>
			</div>
		</section>


		<section class="blue-block van-count-outer">

						<div class="van-count">
							<img src="<?php echo get_template_directory_uri(); ?>/img/van-icon.svg" role="presentation "/>
							<div class="van-count-text">
								<p class="van-count-number">over 90</p>
								<p class="van-count-label">vans of aid to Europe and the Middle East so far</p>
								<p class="van-count-thanks">with your support... thank you</p>
							</div>
						</div>

		</section>


		<section class="latest-news">
			<div class="container">
				<div class="row">
					<div class="col-xs-6">
						<h2>Latest news</h2>
					</div>
				</div>
					<div class="row">


						<?php
						   // the query
						   $the_query = new WP_Query( array(
						      'posts_per_page' => 3
						   ));
						?>

						<?php if ( $the_query->have_posts() ) : ?>
						  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div class="col-xs-12 col-md-4">
									<div class="news-item">
								    <?php the_title(); ?>
								    <?php the_excerpt(); ?>
									</div>
								</div>
						  <?php endwhile; ?>
						  <?php wp_reset_postdata(); ?>

						<?php else : ?>
						  <p><?php __('No News'); ?></p>
						<?php endif; ?>

					</div>
			</div>
		</section>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
