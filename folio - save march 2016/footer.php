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
		<img src="<?php echo get_template_directory_uri(); ?>/img/footer-illustration.png" class="footer-illustration">
		<div class="footer-links">
			<a href="https://dribbble.com/SLRNCL" target="_blank">Dribbble</a>
			<a href="https://www.behance.net/SLRNCL" target="_blank">Behance</a>
			<a href="https://github.com/nicolas-solerieu" target="_blank">Github</a>
			<a href="https://www.linkedin.com/in/nicolas-solerieu-5791a343" target="_blank">Linkedin</a>
		</div>
		<p class="copy">
		&copy; <?php echo date("Y"); ?> Nicolas Solerieu.
			<a href="<?php echo get_permalink(76); ?>" >Informations</a>
		</p>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
