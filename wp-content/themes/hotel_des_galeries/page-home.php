<?php
/*
Template Name: Home
*/
?>
<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>



<?php get_sidebar(); ?>

<div class="top_images">
	<?php if( get_field('header_visual') ): ?>

		<img src="<?php the_field('header_visual'); ?>" />

	<?php endif; ?>
</div>

<div id="container">
	
	<?php 
		if (have_posts() ) :

		$the_query = new WP_Query( 'page_id=43' );
		while ($the_query->have_posts() ) : $the_query->the_post();
		echo the_content();
		endwhile;
		wp_reset_postdata();

		endif; 
	?>
	
</div>

<?php get_footer(); ?>