<?php
 
/* For Slider Section Custom Post Type */

function custom_post_type_slide() {
 
    $labels = array(
        'name'                => _x( 'Sliders', 'Post Type General Name', 'R1T1' ),
        'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'R1T1' ),
        'menu_name'           => __( 'Sliders', 'R1T1' ),
        'parent_item_colon'   => __( 'Parent Slider', 'R1T1' ),
        'all_items'           => __( 'All Sliders', 'R1T1' ),
        'view_item'           => __( 'View Slider', 'R1T1' ),
        'add_new_item'        => __( 'Add New Slider', 'R1T1' ),
        'add_new'             => __( 'Add New', 'R1T1' ),
        'edit_item'           => __( 'Edit Slider', 'R1T1' ),
        'update_item'         => __( 'Update Slider', 'R1T1' ),
        'search_items'        => __( 'Search Slider', 'R1T1' ),
        'not_found'           => __( 'Not Found', 'R1T1' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'R1T1' ),
    );

    $args = array(
        'label'               => __( 'sliders', 'R1T1' ),
        'description'         => __( 'Slider and reviews', 'R1T1' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'slide' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    register_post_type( 'sliders', $args );

}

add_action( 'init', 'custom_post_type_slide', 0 );

/* For Slides Taxonomy */

function custom_taxonomy() {  
    register_taxonomy(  
        'slides',
        'sliders',
        array(
            'hierarchical' => true,
            'label' => 'Slides Taxonomy',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'slides' // This controls the base slug that will display before each term
            )
        )  
    );  
}  
add_action( 'init', 'custom_taxonomy');

/* For Top Services Section */

function custom_post_type_services() {
 
    $labels = array(
        'name'                => _x( 'Services', 'Post Type General Name', 'R1T1' ),
        'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'R1T1' ),
        'menu_name'           => __( 'Services', 'R1T1' ),
        'parent_item_colon'   => __( 'Parent Service', 'R1T1' ),
        'all_items'           => __( 'All Services', 'R1T1' ),
        'view_item'           => __( 'View Service', 'R1T1' ),
        'add_new_item'        => __( 'Add New Service', 'R1T1' ),
        'add_new'             => __( 'Add New', 'R1T1' ),
        'edit_item'           => __( 'Edit Service', 'R1T1' ),
        'update_item'         => __( 'Update Service', 'R1T1' ),
        'search_items'        => __( 'Search Service', 'R1T1' ),
        'not_found'           => __( 'Not Found', 'R1T1' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'R1T1' ),
    );

    $args1 = array(
        'label'               => __( 'services', 'R1T1' ),
        'description'         => __( 'Service and reviews', 'R1T1' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'service' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    register_post_type( 'services', $args1 );
}
 
add_action( 'init', 'custom_post_type_services', 0 );

/* For Services Taxonomy */

function custom_taxonomy_service() {  
    register_taxonomy(  
        'service', 
        'services',
        array(
            'hierarchical' => true,
            'label' => 'Service Taxonomy',  //Display name
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'service' // This controls the base slug that will display before each term
            )
        )
    );
}
add_action( 'init', 'custom_taxonomy_service');

/* For News Listing Page Custom Post Type */

function custom_post_type_listing_item() {

    $labels = array(
        'name'                => _x( 'Listing Items', 'Post Type General Name', 'R1T1' ),
        'singular_name'       => _x( 'Listing Item', 'Post Type Singular Name', 'R1T1' ),
        'menu_name'           => __( 'Listing Items', 'R1T1' ),
        'parent_item_colon'   => __( 'Parent Listing Item', 'R1T1' ),
        'all_items'           => __( 'All Listing Items', 'R1T1' ),
        'view_item'           => __( 'View Listing Item', 'R1T1' ),
        'add_new_item'        => __( 'Add New Listing Item', 'R1T1' ),
        'add_new'             => __( 'Add New', 'R1T1' ),
        'edit_item'           => __( 'Edit Listing Item', 'R1T1' ),
        'update_item'         => __( 'Update Listing Item', 'R1T1' ),
        'search_items'        => __( 'Search Listing Item', 'R1T1' ),
        'not_found'           => __( 'Not Found', 'R1T1' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'R1T1' ),
    );

    $args1 = array(
        'label'               => __( 'Listing Items', 'R1T1' ),
        'description'         => __( 'Listing Item and reviews', 'R1T1' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'listing_item' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    register_post_type( 'listing_items', $args1 );
}
 
add_action( 'init', 'custom_post_type_listing_item', 0 );

/* For Services Taxonomy */

function custom_taxonomy_listin_item() {  
    register_taxonomy(  
        'listing_item',
        'listing_items',
        array(  
            'hierarchical' => true,  
            'label' => 'Listing Items Taxonomy',  //Display name
            'show_ui'           => true,
			'how_in_nav_menus'  => true,
			'public'            => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array('slug' => 'listing_ite')
			)  
    );  
}  
add_action( 'init', 'custom_taxonomy_listin_item');

/* For Tags */

add_action( 'init', 'create_tags' );

function create_tags() {
	register_taxonomy(
		'tag',
		'listing_items',
		array(
			'label' => 'Tag',
			'hierarchical' => false,
			'show_ui'           => true,
			'how_in_nav_menus'  => true,
			'public'            => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array('slug' => 'tag')
		)
	);
}

/* For Header Top Email Id */

class new_general_setting {
    function new_general_setting( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'top_email_id', 'esc_attr' );
        add_settings_field('top_email', '<label for="top_email_id">'.__('Top Email Id' , 'top_email_id' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'top_email_id', '' );
        echo '<input type="text" id="top_email_id" name="top_email_id" value="' . $value . '" />';
    }
}

$new_general_setting = new new_general_setting();

/* For Header Top Phone No. */

class new_general_setting_phone {
    function new_general_setting_phone( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields_phone' ) );
    }
    function register_fields_phone() {
        register_setting( 'general', 'top_phoneno', 'esc_attr' );
        add_settings_field('top_phone', '<label for="top_phoneno">'.__('Top Phone No.' , 'top_phoneno' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'top_phoneno', '' );
        echo '<input type="text" id="top_phoneno" name="top_phoneno" value="' . $value . '" />';
    }
}

$new_general_setting_phone = new new_general_setting_phone();

/* For Footer Text */

class new_general_setting_footertext {
    function new_general_setting_footertext( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields_footertext' ) );
    }
    function register_fields_footertext() {
        register_setting( 'general', 'footer_text', 'esc_attr' );
        add_settings_field('footer_textbottom', '<label for="footer_text">'.__('Bottom Footer Text' , 'footer_text' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'footer_text', '' );
        echo '<input type="text" id="footer_text" name="footer_text" value="' . $value . '" />';
    }
}

$new_general_setting_footertext = new new_general_setting_footertext();

/* For Footer Copyright Text */

class new_general_setting_copyright_text {
    function new_general_setting_copyright_text( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields_copyrighttext' ) );
    }
    function register_fields_copyrighttext() {
        register_setting( 'general', 'copyright_text', 'esc_attr' );
        add_settings_field('footer_copyrighttext', '<label for="footer_text">'.__('Footer Copyright Text' , 'copyright_text' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'copyright_text', '' );
        echo '<input type="text" id="copyright_text" name="copyright_text" value="' . $value . '" />';
    }
}

$new_general_setting_copyright_text = new new_general_setting_copyright_text();


/* For Music Custom Post Type */

function custom_post_type_music() {
 
    $labels1 = array(
        'name'                => _x( 'Music', 'Post Type General Name', 'R1T1' ),
        'singular_name'       => _x( 'Music', 'Post Type Singular Name', 'R1T1' ),
        'menu_name'           => __( 'Music', 'R1T1' ),
        'parent_item_colon'   => __( 'Parent Music Item', 'R1T1' ),
        'all_items'           => __( 'All Music Items', 'R1T1' ),
        'view_item'           => __( 'View Music Item', 'R1T1' ),
        'add_new_item'        => __( 'Add New Music Item', 'R1T1' ),
        'add_new'             => __( 'Add New', 'R1T1' ),
        'edit_item'           => __( 'Edit Music Item', 'R1T1' ),
        'update_item'         => __( 'Update Music Item', 'R1T1' ),
        'search_items'        => __( 'Search Music Item', 'R1T1' ),
        'not_found'           => __( 'Not Found', 'R1T1' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'R1T1' ),
    );

    $args6 = array(
        'label'               => __( 'Music Items', 'R1T1' ),
        'description'         => __( 'Music Item and reviews', 'R1T1' ),
        'labels'              => $labels1,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        //'taxonomies'          => array( 'music_cat' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    register_post_type( 'music', $args6 );
}

add_action( 'init', 'custom_post_type_music', 0 );

/* For Services Taxonomy */

function custom_taxonomy_music_item() {
    register_taxonomy(
        'music',
        'music',
        array(
				'hierarchical' => true,  
				'label' => 'Music Taxonomy',  //Display name
				'show_ui'           => true,
				'how_in_nav_menus'  => true,
				'public'            => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array('slug' => 'music_tax')
			)
    );
}
add_action( 'init', 'custom_taxonomy_music_item');

?>
