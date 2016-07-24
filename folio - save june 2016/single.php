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
<section class="content-page">
	<div class="wrapper">

		<?php while ( have_posts() ) : the_post(); ?>

		<h4>You're about to read.</h4>
		<p class="article-name"><?php the_title(); ?></p>
		<div class="entry-content"><?php the_content(); ?></div>

		<?php endwhile; ?>

		<div class="post-nav">
			<a href="<?php echo get_permalink(43); ?>" class="bt-back">Back to the journal <i class="fa fa-angle-right"></i></a>
		</div>

	</div><!-- / WRAPPER -->
</section>

<?php get_footer(); ?>
