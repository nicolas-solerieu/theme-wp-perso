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

			<div class="intro-about">
				<h4>Currently</h4>

				<p class="headline">
				<?php $theheadline = get_option( 'headline_full', false ); echo $theheadline;  ?>
				</p>

			</div>
			
			<div class="col-about first">
				<h4>Clients</h4>
				<p> 
				Nobody's Perfekt Media<br/>
				Mercedes Benz Financial<br/>
				Goldenstein hall<br/>
				BMW R&D Munich<br/>
				Superwatch<br/>
				Arts Square<br/>
				</p>
			</div>

			<div class="col-about second">
				<h4>Skills</h4>
				<p> 
				User interface<br/>
				Web design<br/>
				Wordpress development<br/>
				UX/UI design<br/>
				Front end development<br/>
				Online advertising
				</p>
			</div>

			<div class="col-about third">
				<h4>Contact</h4>
				<p> 
				If you are interested in my services, or just want to talk about crazy projects, don't hesitate to get in touch.
				</p>
				<a href="<?php echo get_template_directory_uri(); ?>/files/nicolas-solerieu-en.pdf" class="contact-link" target="_blank">Download my resume</a>
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
				<h4>Selected works</h4>
			</div>

			<div class="work-list">

			<?php

				$args = array( 'post_type' => 'work', 'order' => 'ASC', 'posts_per_page' => 99); 
				$loop = new WP_Query( $args );
				?>

				<?php if($loop->post_count != 0) { ?>

				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>		

				<div class="one-work" onclick="document.location.href='<?php echo get_permalink(get_the_ID()); ?>'">
					<h4><?php echo get_the_title(get_the_ID()); ?></h4>
					<p class="work-desc" ><?php echo get_the_excerpt(get_the_ID()); ?></p>
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
