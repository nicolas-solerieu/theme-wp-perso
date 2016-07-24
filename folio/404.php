<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package folio
 */

get_header(); ?>

<div class="section">
	<div class="wrapper">

		<div class="left-col">
			<p class="left-col-title">404</p>
		</div>

		<div class="right-col">
			<p class="headline">Oops! Something went wrong.</p>
		<p>You have found a glitch in the matrix, this page is not real !</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="contact-link" >Go back to home</a>
		</div>

		<div class="clear"></div>

	</div>
</div>
	
<?php get_footer(); ?>