<?php
/*
Template Name: Design
 */
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class= "design-info-text">
  <h2 style="text-align:center;">Design</h2>
  <p class="text-center">I also have some experiance in typography and design. Below you will find a gallery of some of my works.</p>
</div>
<div class="design-container">
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
</div>
<?php get_footer();



