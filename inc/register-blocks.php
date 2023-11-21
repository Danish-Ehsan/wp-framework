<?php

//Register new block category
function register_olcpr_block_category( $categories ) {

	$newCategory = array(
		'slug'  => 'olcpr_blocks',
		'title' => 'OLCPR Blocks'
	);

    //Add new category to the start of the list
    array_unshift($categories, $newCategory);

	return $categories;
};
add_filter( 'block_categories_all' , 'register_olcpr_block_category');

//Register custom blocks
function olcpr_register_acf_blocks() {
    register_block_type( get_template_directory() . '/blocks/carousel' );
    register_block_type( get_template_directory() . '/blocks/banner' );
    register_block_type( get_template_directory() . '/blocks/imgtext' );
    register_block_type( get_template_directory() . '/blocks/text' );
    register_block_type( get_template_directory() . '/blocks/link-cards' );
}
add_action( 'init', 'olcpr_register_acf_blocks' );
