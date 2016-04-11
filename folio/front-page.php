<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package folio
 */

get_header(); ?>

<!-- INTRO -->
<section class="about">
	<div class="wrapper">	
		<img src="<?php echo get_template_directory_uri(); ?>/img/design-illustration.png" class="design-illustration">

		<h1 class="site-name"><?php $myname = get_option( 'personal_name', false ); echo $myname;  ?></h1>
		<h2 class="job-title"><?php $myjob = get_option( 'job_label', false ); echo $myjob;  ?></h2>
		
		<p class="headline"><?php $headline_full = get_option( 'headline_full', false ); echo $headline_full;  ?></p>
		<p class="intro-text"><?php $intro_text = get_option( 'intro_text', false ); echo $intro_text;  ?></p>
		<div class="clear"></div>
	</div>
</section>


<!-- WORKS -->
<section class="works">
	<div class="wrapper">
		
		<p class="label-works">Selected works</p>
		<div class="work-list">
		<?php
			$counter = 0;
			$args = array( 'post_type' => 'work', 'order' => 'ASC', 'posts_per_page' => 99); 
			$loop = new WP_Query( $args );
			?>

			<?php if($loop->post_count != 0) { ?>

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<?php $counter ++;	?>

			<div class="one-work" onclick="document.location.href='<?php echo get_permalink(get_the_ID()); ?>'">
				<span class="number" >0<?php echo $counter; ?>.</span>
				<h4><?php echo get_the_title(); ?></h4>
				<p class="work-desc" ><?php echo get_the_excerpt(); ?></p>
			</div>

			<?php endwhile; ?>

		<?php } ?>
		<?php wp_reset_query(); ?>
		<div class="clear"></div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
