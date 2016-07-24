<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package folio
 */

get_header(); ?>

<div class="section hero">
	<div class="wrapper">

		<p class="headline"><?php $headline_full = get_option( 'headline_full', false ); echo $headline_full;  ?></p>
		<p class="hero-text"><?php $intro_text = get_option( 'intro_text', false ); echo $intro_text;  ?></p>

	</div>
</div>

<div class="section works">
	<div class="wrapper">
		<div class="box">

			<div class="work-top">
				<h2>Case studies</h2>
				<p>More on <a href="https://www.behance.net/SLRNCL" target="_blank">Behance</a> & <a href="https://dribbble.com/SLRNCL" target="_blank">dribbble</a></p>
				<div class="clear"></div>
			</div>

			<div class="work-list">
				<?php
				$counter = 0;
				$args = array( 'post_type' => 'work', 'order' => 'ASC', 'posts_per_page' => 3); 
				$loop = new WP_Query( $args );
				?>

					<?php if($loop->post_count != 0) { ?>

					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<div class="one-work" onclick="document.location.href='<?php echo get_permalink(get_the_ID()); ?>'">
						<?php the_post_thumbnail('large',''); ?>
						<h4><?php echo get_the_title(); ?></h4>
					</div>

					<?php endwhile; ?>

				<?php } ?>
				<?php wp_reset_query(); ?>
				<div class="clear"></div>
			</div>

		</div>
	</div>
</div>

<div class="section">
	<div class="wrapper">
		<div class="box">

			<div class="left-col">
				<p class="left-col-title">Design</p>
			</div>

			<div class="right-col">
				<p>I work on data visualization, original mockups, content display problematics and dynamic prototypes of interfaces. All of my projects feature a unique individual style, original concepts, high quality.</p>
				<ul class="tags">
					<li class="tag-item">#Photoshop</li>
					<li class="tag-item">#Sketch</li>
					<li class="tag-item">#UiDesign</li>
					<li class="tag-item">#ResponsiveReady</li>
					<li class="tag-item">#ContentFirst</li>
					<li class="tag-item">#Minimalist</li>
					<li class="tag-item">#Newsletter</li>
				</ul>
			</div>

			<div class="clear"></div>

		</div>
	</div>
</div>

<div class="section">
	<div class="wrapper">
		<div class="box">

			<div class="left-col">
				<p class="left-col-title">Front-end</p>
			</div>

			<div class="right-col">
				<p>I use code to translate my concept into live prototype. I code HTML, CSS and javascript and also use php and wordpress to build small to medium size website. I put a strong focus on performances and maintainability.</p>
				<ul class="tags">
					<li class="tag-item">#Wordpress</li>
					<li class="tag-item">#Jquery</li>
					<li class="tag-item">#CSS</li>
					<li class="tag-item">#HTML</li>
					<li class="tag-item">#Javascript</li>
					<li class="tag-item">#GIT</li>
					<li class="tag-item">#PHP/PDO</li>
					<li class="tag-item">#MobileFirst</li>
					<li class="tag-item">#SEOFriendly</li>
				</ul>
			</div>

			<div class="clear"></div>

		</div>
	</div>
</div>


<div class="section">
	<div class="wrapper">
		<div class="box">

			<div class="left-col">
				<p class="left-col-title">Design vision</p>
			</div>

			<div class="right-col">
				<p>I work with small cross-disciplinary teams, I believe things happen when people interact by talking about the stuff they do best. I really think that valuable new offerings spring from a deep understanding of emerging behaviors and new technologies.</p>
				<p>I try to make things look better, because function is not enough to drive attention. As you may notice on by the overall design of this page, I'm into minimalism and put a strong focus on clarity and content.<br/>
			</div>

			<div class="clear"></div>

		</div>
	</div>
</div>


<div class="section">
	<div class="wrapper">
		<div class="box">

			<div class="left-col">
				<p class="left-col-title">Let's jam</p>
			</div>

			<div class="right-col">
				<p class="big-text">
					For work inquiries please email:<br/>
					<a href="mailto:contact@solerieu-nicolas.fr">contact@solerieu-nicolas.fr</a>
				</p>
				<p>For any request for proposal, pitch your idea and send a specifications document in order to define the scope of the work required. Also a budget and timeframe are appreciated.</p>

			</div>

			<div class="clear"></div>

		</div>
	</div>
</div>

<div class="section">
	<div class="wrapper">
		<div class="box">

			<div class="left-col">
				<p class="left-col-title">Contact</p>
			</div>

			<div class="right-col">
				<div class="half-width">
					<p>
					Rebounds on <a href="https://dribbble.com/SLRNCL">Dribbble</a><br>
					Case studies on <a href="https://dribbble.com/SLRNCL">Behance</a><br>
					Commits on <a href="https://github.com/nicolas-solerieu">Github</a><br>
					Pro stuffs on <a href="https://fr.linkedin.com/in/nicolas-solerieu-5791a343">Linkedin</a><br>
					Moodboard on <a href="http://slevinsky.tumblr.com/">Tumblr</a>
					</p>
				</div>
				<div class="half-width">
					<p>
					Nicolas Solerieu<br/>
					Skype : solerieu.nicolas<br>
					T : +33 7 86 17 97 49<br>
					SIRET : 79306507900022<br>
					Registered in France
					</p>
				</div>
			</div>

			<div class="clear"></div>

		</div>
	</div>
</div>


<?php get_footer(); ?>
