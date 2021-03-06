<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package folio
 */

get_header(); ?>


<!-- CONTENT -->
<section class="content-404">
	<div class="wrapper">

		<h4>404 ERROR</h4>

		<p class="headline">Oops! Something went wrong.</p>
		<p>You have found a glitch in the matrix, this page is not real !</p>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="contact-link" >Go back to home</a>

	</div>
</section>
	
<?php get_footer(); ?>