<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package folio
 */

?>

<!-- FOOTER -->
<footer>
	<div class="wrapper">
		<div class="box">
		
			<div class="left-col">
				<i class="fa fa-hand-peace-o side-icon"></i>
			</div>

			<div class="right-col">
				<p class="copy">
					2012-<?php echo date("Y"); ?>. All rights reserved <a href="<?php echo get_permalink(76); ?>" >Informations</a>
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
