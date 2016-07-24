<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package folio
 */

get_header(); ?>

<!-- CONTENT -->
<div class="section">
	<div class="wrapper">

		<div class="left-col">
			<i class="fa fa-hand-o-right side-icon" aria-hidden="true"></i>
		</div>

		<div class="right-col">

			<?php while ( have_posts() ) : the_post(); ?>

			<p class="left-col-title">You're about to read</p>
			<h2 class="article-name"><?php the_title(); ?></h2>

			<div class="entry-content"><?php the_content(); ?></div>
			<a href="<?php echo get_permalink(43); ?>" class="btn" >Back to the journal</a>

			<?php endwhile; ?>
		</div>

		<div class="clear"></div>

	</div><!-- / WRAPPER -->
</div>

<?php get_footer(); ?>
