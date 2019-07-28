<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package People_in_Motion
 */

?>

<div class="container">
	<div class="row externals">
		<div class="col-xs-12">
			<a href="http://www.easyfundraising.org.uk/causes/peopleinmotion/?t=Easyfundraising-li&v=a&u=2CYFNA&=" class="easyfundraising" title="easyfundraising.org.uk">
				<img src="<?php echo get_template_directory_uri(); ?>/img/easyfundraising.png" alt="easyfundraising.org.uk" />
			</a>
			<a href="https://www.recycle4charity.co.uk/Register/C75354" class="recycle4charity" title="recycle4charity.co.uk">
				<img src="<?php echo get_template_directory_uri(); ?>/img/recycle4charity.png" alt="recycle4charity.co.uk" />
			</a>
		</div>
	</div>
</div>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			<ul class="social">
				<li>
					<a href="https://www.facebook.com/peopleinmotion15/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="Facebook logo" />
					</a>
				</li>
				<li>
					<a href="https://instagram.com/peopleinmotion15/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="Instagram logo" />
					</a>
				</li>
				<li>
					<a href="https://twitter.com/People1nMotion?lang=en">
						<img src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="Twitter logo" />
					</a>
				</li>
			</ul>
			<p>Registered Charitable Incorporated Organisation in England and Wales. Registered charity number 1167492</p>
			<ul>
				<li><a href="http://peopleinmotion.org.uk/our-constitution/">Our constitution</a></li>
				<li><a href="http://peopleinmotion.org.uk/our-privacy-policy/">Our privacy policy</a></li>
			</ul>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
