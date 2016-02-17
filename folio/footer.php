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
			<span class="copy">
			&copy; <?php echo date("Y"); ?> Nicolas Solerieu.
  			<a href="<?php echo get_permalink(76); ?>" >Informations</a>
			</span>
		</div>

		<div class="footer-right">
			<a href="mailto:hello@solerieu-nicolas.fr" target="_blank"><i class="fa fa-envelope-o"></i></a>
			<a href="https://www.linkedin.com/in/nicolas-solerieu-5791a343" target="_blank"><i class="fa fa-linkedin-square"></i></a>
			<a href="https://dribbble.com/SLRNCL" target="_blank"><i class="fa fa-dribbble"></i></a>
			<a href="https://www.behance.net/SLRNCL" target="_blank"><i class="fa fa-behance"></i></a>
			<a href="https://github.com/nicolas-solerieu" target="_blank"><i class="fa fa-github"></i></a>
		</div>

		<div class="clear"></div>
		</div>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
