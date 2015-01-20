<?php
/*
Template Name: location
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
	<iframe width='100%' height='500px' frameBorder='0' src='http://a.tiles.mapbox.com/v3/piletteantoine.i410ogbb/attribution,zoompan,zoomwheel,geocoder,share.html'></iframe>
</div>

<div id="container">
	<div id="content" role="main">

				<?php
				/* Run the loop to output the page.
				 * If you want to overload this in a child theme then include a file
				 * called loop-page.php and that will be used instead.
				 */
				get_template_part( 'loop', 'page' );
				?>

	</div><!-- #content -->

</div><!-- #container -->

<?php get_footer(); ?>