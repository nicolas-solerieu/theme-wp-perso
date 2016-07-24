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

<!-- SHOTS -->
<div class="section">

	<div class="wrapper">

		<div class="left-col">
			<p class="left-col-title"><?php the_title(); ?></p>
		</div>

		<div class="right-col">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="entry-content"><?php the_content(); ?></div>

			<?php endwhile; // End of the loop. ?>
			
			<div class="shot-list">
				<?php
					$args = array( 'post_type' => 'shot', 'order' => 'DESC', 'posts_per_page' => 10); 
					$loop = new WP_Query( $args );
				?>

				<?php if($loop->post_count != 0) { ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			 		
				<article class="one-shot" >

					<a class="lightbox gallery-item" href="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" title="<?php echo get_the_title(); ?>" >
						<div class="thumb">
							<div class="overlay-shot">
								<i class="fa fa-search"></i>
								<h3><?php echo get_the_title(); ?></h3>
							</div>
							<?php the_post_thumbnail('large',''); ?>
						</div>
					</a>

				</article>

			 	<?php endwhile; ?>

				<?php } ?>

				<?php wp_reset_query(); ?>

				<div class="clear"></div>

				<a href="https://dribbble.com/SLRNCL" target="_blank" class="btn" >All on dribbble</a>

			</div>

		</div><!-- / Right col -->

		<div class="clear"></div>



	</div>
</div>
	
<?php get_footer(); ?>
