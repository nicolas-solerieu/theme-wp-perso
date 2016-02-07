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
			<p>Nicolas Solerieu<br/>&copy; 
			<?php 
			$fromYear = 2012; 
			$thisYear = (int)date('Y'); 
			echo $fromYear . (($fromYear != $thisYear) ? ' - ' . $thisYear : '');?>
			- <a href="<?php echo get_permalink(76); ?>">Informations</a></p>
		</div>

		<div class="footer-center">
			<p>Email<br/><a href="mailto:hello@solerieu-nicolas.fr">hello[at]solerieu-nicolas.fr</a></p>
		</div>

		<div class="footer-right">
			<p>Connect<br/>
			<a href="https://twitter.com/slrncl" >Twitter</a>
			<a href="https://www.linkedin.com/in/nicolas-solerieu-5791a343" >Linkedin</a>
			<a href="https://www.pinterest.com/solerieunicolas/" >Pinterest</a>
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
