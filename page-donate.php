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
				<div class="col-xs-12 col-sm-3 col-md-3 paypal-btns-mob">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="8EQ3GY23JY8KQ">
					<input type="image" src="http://www.peopleinmotion.org.uk/wp-content/themes/peopleinmotion/img/btn_donateCC_LG.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="6H6273LGSTBTG">
					<input type="hidden" name="on0" value="">
					<select name="os0">
						<option value="1">1 : £3.00 GBP - monthly</option>
						<option value="2">2 : £5.00 GBP - monthly</option>
						<option value="3">3 : £10.00 GBP - monthly</option>
					</select>
					<input type="hidden" name="currency_code" value="GBP">
					<input type="image" src="http://www.peopleinmotion.org.uk/wp-content/themes/peopleinmotion/img/btn_subscribeCC_LG.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
				<div class="col-xs-12 col-sm-9 col-md-9">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>
				</div>

				<div class="col-xs-12 col-sm-3 col-md-3 paypal-btns-dtop">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="8EQ3GY23JY8KQ">
					<input type="image" src="http://www.peopleinmotion.org.uk/wp-content/themes/peopleinmotion/img/btn_donateCC_LG.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="6H6273LGSTBTG">
					<input type="hidden" name="on0" value="">
					<select name="os0">
						<option value="1">1 : £3.00 GBP - monthly</option>
						<option value="2">2 : £5.00 GBP - monthly</option>
						<option value="3">3 : £10.00 GBP - monthly</option>
					</select>
					<input type="hidden" name="currency_code" value="GBP">
					<input type="image" src="http://www.peopleinmotion.org.uk/wp-content/themes/peopleinmotion/img/btn_subscribeCC_LG.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
