<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>
			<?php if get_field('afficher')): ?>
			<div>Date de production:<?php echo get_field('date'); ?></div>
			<div>Auteur:<?php echo get_field('auteur'); ?></div>
			<?php endif;?>
			<!-- id: <? php the_ID();?> -->
			<div><?php the_content(); ?></div>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
