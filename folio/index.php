<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package folio
 */

get_header(); ?>

<!-- CONTENT -->
<section class="content-page">
	<div class="wrapper">
		<div class="box">

			<h4>Journal.</h4>
			<p class="big-text">Started on november 2015, Just to remind what I have been through on the internet and with people.</p>

		</div>
	</div><!-- / WRAPPER -->
</section>

<!-- ARTICLES -->
<section class="content-page">
	<div class="wrapper">

<?php 
	$args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 99); 
	$loop = new WP_Query( $args );
	?>

	<?php if($loop->post_count != 0) { ?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<div class="box">

			<h4><?php echo get_the_title(get_the_ID()); ?></h4>
			<div class="entry-content"><?php the_content(); ?></div>

		</div>

 	<?php endwhile; ?>

<?php } ?>
<?php wp_reset_query(); ?>

	</div>
</section>

<?php get_footer(); ?>
