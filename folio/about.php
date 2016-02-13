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
		<div class="box">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="entry-content"><?php the_content(); ?></div>

		<?php endwhile; // End of the loop. ?>
		
		</div>
	</div>
</section>

<!-- STATUS -->
<section class="status">
	<div class="wrapper">
		<div class="box">
			<h4>Currently</h4>
			<p>Doing top secret stuffs <a href="http://www.nobodysperfektmedia.com">@NobodysPerfektMedia</a> and trying to find the ultimate framework with my mates <a href="http://www.iris-interactive.fr/">@IRIS_Interactive</a>. Also planning on a big adventure on 2016. If you can help me in my quest or you have a project you would like to get me involved, feel free to get in touch.</p>
		</div>
	</div>
</section>


	
<?php get_footer(); ?>
