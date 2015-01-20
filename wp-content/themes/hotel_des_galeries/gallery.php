<?php
/*
Template Name: gallery
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

<div id="portfolio">
	<?php for ($i=0; $i < 30; $i++): ?>
	<div class ="bloc">
		<a class="thumb" href="#projet"><img src="http://placehold.it/150x150" alt="" width="150" height="150"></a>
		<div class ="info">
			<img src="http://placehold.it/640x450" alt="" width="630" height="470">
		</div>
	</div>
	
	<?php endfor; ?>
</div>

<?php get_footer(); ?>