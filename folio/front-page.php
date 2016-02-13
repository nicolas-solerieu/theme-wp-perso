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
		<div class="box">

				<h4>Currently</h4>

				<p class="headline">
				<?php $theheadline = get_option( 'headline_full', false ); echo $theheadline;  ?>
				</p>

				<div class="bt-actions">
					<a href="<?php echo get_template_directory_uri(); ?>/files/nicolas-solerieu-en.pdf" target="_blank">get my resume <i class="fa fa-file-pdf-o"></i></a>
					<a href="mailto:hello@solerieu-nicolas.fr">send me a mail <i class="fa fa-paper-plane-o"></i></a>
				</div>

			<div class="clear"></div>

		</div>
	</div>
</section>


<!-- WORKS -->
<section class="works">
	<div class="wrapper">
		<div class="box">

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

		</div>
	</div>
</section>


<!-- SKILLS -->
<section class="capabilities">
	<div class="wrapper">
		<div class="box">
			<h4>Design + Code</h4>
			<p>I design apps UI and website layouts. I use Photoshop for 3 years and recently I get to Sketch. You can check out my case studies on <a href="https://www.behance.net/SLRNCL" target="_blank">Behance</a>. I solve UX problems and create meaningful designs to promote products and services. All of my designs featured original concepts and high quality standards. I'm used to wordpress and open to new challenges. I'm always keen on new challenges and keep a close eye on design trends and new technologies.</p> 
		</div>
	</div>
</section>


<?php get_footer(); ?>
