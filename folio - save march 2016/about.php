<?php
/**
 * The template for displaying all pages.
 * Template Name: About
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package folio
 *
 */

get_header(); ?>

<!-- CONTENT -->
<section class="content-page">
	<div class="wrapper">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="entry-content"><?php the_content(); ?></div>

		<?php endwhile; // End of the loop. ?>
		
	</div>
</section>
	
<?php get_footer(); ?>
