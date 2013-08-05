<?php

/* =============================================================================
   Adiciona panel de opciones en el menú Admin
   ========================================================================== */


if(is_admin()){	
	require_once('lib/wptuts-theme-settings-basic.php');
}

 /**
 * Collects our theme options
 *
 * @return array
 */
function wptuts_get_global_options(){
	
	$wptuts_option = array();

	$wptuts_option 	= get_option('wptuts_options');
	
return $wptuts_option;
}

 /**
 * Call the function and collect in variable
 *
 * Should be used in template files like this:
 * <?php echo $wptuts_option['wptuts_txt_input']; ?>
 *
 * Note: Should you notice that the variable ($wptuts_option) is empty when used in certain templates such as header.php, sidebar.php and footer.php
 * you will need to call the function (copy the line below and paste it) at the top of those documents (within php tags)!
 */ 
$wptuts_option = wptuts_get_global_options();

/* =============================================================================
   Custom post type: Testimonios
   ========================================================================== */
   add_action( 'init', 'create_post_type_html5' ); // Add our HTML5 Blank Custom Post Type

	function create_post_type_html5() { // Create 1 Custom Post type for a Demo, called HTML5-Blank
			register_taxonomy_for_object_type('category','html5-blank'); // Register Taxonomies for Category
			register_taxonomy_for_object_type('post_tag','html5-blank');
	        register_post_type( 'testimonios', // Register Custom Post Type
	                array(
	                        'labels' => array(
	                                'name' => __( 'Testimonios' ), // Rename these to suit
									'singular_name' => __( 'Testimonio' ),
									'add_new' => __( 'Add New' ),
									'add_new_item' => __( 'Add New Testimonio' ),
									'edit' => __( 'Edit' ),
									'edit_item' => __( 'Edit Testiomonio' ),
									'new_item' => __( 'New Testimonio' ),
									'view' => __( 'View Testimonio' ),
									'view_item' => __( 'View Testimonio' ),
									'search_items' => __( 'Search Testimonio' ),
									'not_found' => __( 'No Testimonio found' ),
									'not_found_in_trash' => __( 'No Testimonio found in Trash' ),
	                        ),
	                'public' => true,
	                'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
	                'has_archive' => true,
					'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ), // Go to Dashboard Custom HTML5 Blank post for supports
					'can_export' => true, // Allows export in Tools > Export
					'taxonomies' => array( 'post_tag', 'category'), // Add Category and Post Tags support
	                )
	        );
	}




?>