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
						<div class="six columns offset-by-three">
							<?php the_field('intro_text'); ?>
						</div>
					</div>
			</div>
		</section>

		<section class="get-involved">
			<div class="container">
				<div class="row">
					<div class="six columns">
						<h2>Get involved</h2>
					</div>
				</div>
					<div class="row">
						<div class="three columns">
							<?php the_field('intro_text'); ?>
						</div>
						<div class="three columns">
							<?php the_field('intro_text'); ?>
						</div>
						<div class="three columns">
							<?php the_field('intro_text'); ?>
						</div>
						<div class="three columns">
							<?php the_field('intro_text'); ?>
						</div>
					</div>
			</div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
