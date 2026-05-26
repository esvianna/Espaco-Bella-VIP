<?php
/**
 * A barra lateral contendo a área de widgets principal
 *
 * @package Bella_VIP
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area mt-12 lg:mt-0 lg:w-1/3">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
