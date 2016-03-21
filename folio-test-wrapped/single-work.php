<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package folio
 */

get_header(); ?>

<!-- TOP -->
<section class="page-top">
</section>

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

<?php get_footer(); ?>
