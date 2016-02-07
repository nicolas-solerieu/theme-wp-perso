<?php
/**
 * The template for displaying all pages.
 * Template Name: About
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package folio
 *
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


<section class="stats">
	<div class="wrapper">
		<div class="box">

			<div class="one-stat" >
				<span class="stat-number">+3</span>
				<span class="stat-label">Years of experience</span>
			</div>

			<div class="one-stat" >
				<span class="stat-number">+3M</span>
				<span class="stat-label">Lines of code</span>
			</div>

			<div class="one-stat" >
				<span class="stat-number">+35</span>
				<span class="stat-label">Released projects</span>
			</div>

			<div class="one-stat" >
				<span class="stat-number">+2k</span>
				<span class="stat-label">Hours on photoshop</span>
			</div>

			<div class="one-stat" >
				<span class="stat-number">+12</span>
				<span class="stat-label">International clients</span>
			</div>

			<div class="clear"></div>

		</div>
	</div>
</section>

<section class="skills">
	<div class="wrapper">
		<div class="box">
			<h4>How can I help you...</h4>
			<div class="clear"></div>
			<div class="one-skill" >
				<span class="skill-logo"><i class="fa fa-mobile"></i></span>
				<span class="skill-label">Mobile & UI design</span>
			</div>

			<div class="one-skill" >
				<span class="skill-logo"><i class="fa fa-desktop"></i></span>
				<span class="skill-label">Web design</span>
			</div>

			<div class="one-skill" >
				<span class="skill-logo"><i class="fa fa-mouse-pointer"></i></span>
				<span class="skill-label">Interaction design</span>
			</div>

			<div class="one-skill" >
				<span class="skill-logo"><i class="fa fa-wordpress"></i></span>
				<span class="skill-label">Wordpress</span>
			</div>

			<div class="one-skill" >
				<span class="skill-logo"><i class="fa fa-code"></i></span>
				<span class="skill-label">Html/CSS/Js</span>
			</div>

			<div class="one-skill" >
				<span class="skill-logo"><i class="fa fa-cube"></i></span>
				<span class="skill-label">Prototyping</span>
			</div>

			<div class="one-skill" >
				<span class="skill-logo"><i class="fa fa-google"></i></span>
				<span class="skill-label">Online marketing</span>
			</div>

			<div class="one-skill" >
				<span class="skill-logo"><i class="fa fa-object-group"></i></span>
				<span class="skill-label">Web experiment</span>
			</div>

			<div class="one-skill" >
				<span class="skill-logo"><i class="fa fa-dot-circle-o"></i></span>
				<span class="skill-label">UX/UI consultancy</span>
			</div>

			<div class="one-skill" >
				<span class="skill-logo"><i class="fa fa-tasks"></i></i></span>
				<span class="skill-label">Web research</span>
			</div>

			<div class="clear"></div>
		</div>
	</div>
</section>

<!-- STATUS -->
<section class="status">
	<div class="wrapper">
		<div class="box">
			<h4>Currently</h4>
			<p>Doing top secret stuffs <a href="http://www.nobodysperfektmedia.com">@NobodysPerfektMedia</a> and trying to find the ultimate framework with my mates <a href="http://www.iris-interactive.fr/">@IRIS_Interactive</a>. Also planning on a big adventure on 2016. If you can help me in my quest or you have a project you would like to get me involved, feel free to <a href="mailto:solerieunicolas@gmail.com">get in touch</a>.</p>
		</div>
	</div>
</section>


	
<?php get_footer(); ?>
