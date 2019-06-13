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

<div class="hero"style="background-image:url('<?php the_field('hero_image'); ?>')"></div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		// while ( have_posts() ) :
		// 	the_post();
		// 	get_template_part( 'template-parts/content', 'page' );
		// endwhile;
		?>

		<section class="intro-text blue-block">
			<p>isdfi</p>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
