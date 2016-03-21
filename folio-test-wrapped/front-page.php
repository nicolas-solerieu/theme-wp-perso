<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package folio
 */

get_header(); ?>

<!-- Content -->
<div class="content-page">
	
	<div class="wrapper">

		<div class="box">

			<!-- Hero -->
			<div class="hero">
				<p class="headline"><?php $headline_full = get_option( 'headline_full', false ); echo $headline_full;  ?></p>
				<p class="intro-text"><?php $intro_text = get_option( 'intro_text', false ); echo $intro_text;  ?></p>
				<div class="info-box">
					<i class="fa fa-dot-circle-o"></i> Hey, I am currently looking for freelance job opportunities, <a href="<?php echo get_permalink(239); ?>">read about it</a>
				</div>
				<div class="clear"></div>
			</div>

			<!-- WORKS -->
			<section class="works">
				<div class="works-intro">
					<h4>SELECTED WORKS</h4>
				</div>

				<div class="work-list">

				<?php

					$args = array( 'post_type' => 'work', 'order' => 'ASC', 'posts_per_page' => 99); 
					$loop = new WP_Query( $args );
					?>

					<?php if($loop->post_count != 0) { ?>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>		

					<div class="one-work" onclick="document.location.href='<?php echo get_permalink(get_the_ID()); ?>'">
						<h4><?php echo get_the_title(); ?></h4>
						<div class="work-desc" ><?php echo the_excerpt(); ?></div>
						<span class="arrow-bt"></span>
					</div>

					<?php endwhile; ?>

				<?php } ?>
				<?php wp_reset_query(); ?>

				</div>
			</section>

			<!-- SKILLS -->
			<section class="capabilities">
				<h4>This is what I do...</h4>
				<p>I design apps UI and website layouts using photoshop and sketch. All of my designs featured original concepts and high quality standards. I'm used to wordpress, Craft CMS, Kirby and open to new challenges. Everyday I code CSS, HTML, PHP and of course javascript. You can check out my <a href="https://www.behance.net/SLRNCL" target="_blank">Behance page</a> or review a few lines of code on <a href="https://github.com/nicolas-solerieu">Github</a>.</p> 
			</section>

		</div>
	</div>
</div>

<?php get_footer(); ?>
