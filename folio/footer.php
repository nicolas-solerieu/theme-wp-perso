<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package folio
 */

?>

</main><!-- / MAIN -->

<!-- FOOTER -->
<footer>
	<div class="wrapper">
		<div class="box">

		<div class="footer-left">
			<p>
			Nicolas Solerieu Design
			</p>
		</div>

		<div class="footer-right">
			<p>
			<a href="mailto:hello@solerieu-nicolas.fr" target="_blank"><i class="fa fa-envelope-o"></i></a>
			<a href="https://www.linkedin.com/in/nicolas-solerieu-5791a343" target="_blank"><i class="fa fa-linkedin"></i></a>
			<a href="https://www.behance.net/SLRNCL" target="_blank"><i class="fa fa-behance"></i></a>
			<a href="https://dribbble.com/SLRNCL" target="_blank"><i class="fa fa-dribbble"></i></a>
			<a href="<?php echo get_permalink(76); ?>" class="<?php if ( is_page( 76 ) ) { echo 'active'; } ?>">Informations</a>
			</p>
		</div>

		<div class="clear"></div>
		</div>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
