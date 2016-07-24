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
<div class="section">
	<div class="wrapper">

		<div class="left-col">
			<p class="left-col-title">Journal</p>
		</div>

		<div class="right-col">
			<p>Started on november 2015, Just to remind what I have been through on the internet and with people.</p>
		</div>

		<div class="clear"></div>

	</div>
</div>

<!-- ARTICLES -->
<div class="section">
	<div class="wrapper">

		<div class="left-col">
			<i class="fa fa-hand-o-right side-icon" aria-hidden="true"></i>
		</div>

		<div class="right-col">
			<?php
			$args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 999); 
			$loop = new WP_Query( $args );
			?>

			<?php if($loop->post_count != 0) { ?>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<div class="one-article" >

					<div class="one-article__title" >
						<p><?php the_date('j F Y'); ?></p>
						<h3><?php the_title(); ?></h3>
					</div>

					<div class="one-article__content" >
						<div class="entry-content"><?php the_excerpt(); ?></div>
						<a href="<?php echo get_permalink(); ?>" >Read more...</a>
					</div>

				</div>

		 	<?php endwhile; ?>

			<?php } ?>

			<?php wp_reset_query(); ?>
		</div>

		<div class="clear"></div>

	</div>
</div>

<?php get_footer(); ?>
