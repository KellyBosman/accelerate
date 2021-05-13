<?php
/**
 * The template for displaying the case study archives
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
			$services = get_field('services');
			$link = get_field('site_link');
			$image_1 = get_field('image_1');
			$size = "full"; ?>

<article class="case-study">
	<aside class="case-study-sidebar">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<h5><?php echo $services; ?></h5>

		<?php the_excerpt(); ?>

		<p class="read-more-link"><strong><a href="<?php echo $link; ?>">View Project></a></strong></p>

	</aside>

	<div class="case-study-images">
		<a href="<?php the_permalink(); ?>"><?php if ($image_1) {
			echo wp_get_attachment_image( $image_1, $size );
		} ?>
		
	</div>

</article>
				
			<?php endwhile; // end of the loop. ?>
		</div><!-- #main-content -->

	</div><!-- #primary -->

	<nav id="navigation" class="container">
	
		<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to Blog</span></a></div>
	</nav>

<?php get_footer(); ?>