<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Vertex
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry__header">
		<?php the_title( sprintf( '<h2 class="entry__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry__meta">
			<?php
			vertex_posted_on();
			vertex_posted_by();
			?>
		</div><!-- .entry__meta -->
		<?php endif; ?>
	</header><!-- .entry__header -->

	<?php vertex_post_thumbnail(); ?>

	<div class="entry__summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php vertex_entry_footer(); ?>
	</footer><!-- .entry__footer -->
</article><!-- #post-<?php the_ID(); ?> -->
