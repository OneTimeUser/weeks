<?php
/**
 * The sidebar containing the sub menu area.
 *
 * @package weeks
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<div id="secondary" class="submenu-area" role="complementary">
<!-- 	<?php dynamic_sidebar( 'sidebar-1' ); ?>-->
	<?php 
	    $args = array(
		'show_option_all'    => 'All <br>',
		'orderby'            => 'name',
		'order'              => 'ASC',
		'style'              => 'none',
		'show_count'         => 0,
		'hide_empty'         => 0,
		'use_desc_for_title' => 1,
		'child_of'           => 0,
		'feed'               => '',
		'feed_type'          => '',
		'feed_image'         => '',
		'exclude'            => '',
		'exclude_tree'       => '',
		'include'            => '',
		'hierarchical'       => 1,
		'title_li'           => __( 'Categories' ),
		'show_option_none'   => __( 'No categories' ),
		'number'             => null,
		'echo'               => 1,
		'depth'              => 0,
		'current_category'   => 0,
		'pad_counts'         => 0,
		'taxonomy'           => 'category',
		'walker'             => null
	    );

	wp_list_categories( $args ); ?> 
	
</div><!-- #secondary -->
