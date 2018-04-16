<?php
/*
Template Name: Design
 */
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class= "code-info-text">
  <h2 style="text-align:center;">Web Development</h2>
  <p class="text-center">Listed below are the multiple web works I have taken a part of. Under each you will find info about why I did the project and their related resources</p>
</div>
<div class="main-container">
	<div class="main-content full-width">
		<main class="main-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php comments_template(); ?>
			<?php endwhile; ?>
		 </main>
	</div>
</div>
<?php get_footer();



