<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vertex
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="widgets" class="widgets">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #widgets -->
