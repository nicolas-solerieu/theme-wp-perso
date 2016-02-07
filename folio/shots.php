<?php
/**
 * The template for displaying shots.
 * Template Name: Shots
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="entry-content"><?php the_content(); ?></div>

		<?php endwhile; // End of the loop. ?>
		
		</div>
	</div>
</section>

<!-- SHOTS -->
<section class="shots">
	<div class="wrapper">
		<div class="box">
		
<?php

	$args = array( 'post_type' => 'shot', 'order' => 'DESC', 'posts_per_page' => 99); 
	$loop = new WP_Query( $args );
	?>

	<?php if($loop->post_count != 0) { ?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
 		
	<article class="one-shot" >

		<a href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="lightbox gallery-item" title="<?php echo get_the_title(); ?>">
			<figure>
				<?php the_post_thumbnail('full'); ?>
				<figcaption>
					<p><?php echo get_the_date(); ?></p>
					<h4><?php echo get_the_title(); ?></h4>
				</figcaption>
			</figure>
		</a>

	</article>

 	<?php endwhile; ?>

<?php } ?>
<?php wp_reset_query(); ?>

		<div class="clear"></div>

		</div>
	</div>
</section>
	
<?php get_footer(); ?>
