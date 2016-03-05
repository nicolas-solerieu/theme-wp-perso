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

	<div class="journal-intro">
		<h4>ARCHIVE</h4>
	</div>

<?php 
	
	$counter = 0;
	$args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 9); 
	$loop = new WP_Query( $args );
	?>

	<?php if($loop->post_count != 0) { ?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

		<?php $counter++; ?>

		<div class="one-article" >

			<div class="one-article__title <?php if ( $counter == 1 ) { echo 'unwrapped'; } ?>" >
				<p><?php the_date('m/Y'); ?></p>
				<h4><?php the_title(); ?></h4>
				
				<i class="fa fa-angle-down"></i>
			</div>

			<div class="one-article__content" <?php if ( $counter == 1 ) { echo "style='display:block'"; } ?>>
				<div class="entry-content"><?php the_excerpt(); ?></div>
				<a href="<?php echo get_permalink(); ?>">Continue reading...</a>
			</div>

		</div>

 	<?php endwhile; ?>

	<?php } ?>
	

<?php wp_reset_query(); ?>

	</div>
</section>

<?php get_footer(); ?>
