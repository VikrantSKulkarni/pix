<?php 

function load_stylesheets(){
  
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css');
    wp_enqueue_style('custom'); 
}
add_action('wp_enqueue_scripts','load_stylesheets');

function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery3.7.1.js');
}

add_action('wp_enqueue_scripts','include_jquery');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' =>__('Top Menu','theme'),
        'side-menu' =>__('Side Menu','theme'),
    )      
    );

function my_first_post_type(){
     
    $args = array(

        'labels'=>array(
            'name'=>'Cars',
            'singulat_name'=>'Car',
        ),
        'hierarchical'=>true,
        'public'=>true,
        'has_archive'=>true,
        'menu_icon'=>'dashicons-images-alt2',
        'supports'=>array('title', 'editor', 'thumbnail','custom-fields'), //fields you require 
        //can be leave blank for default
        //'rewrite' =>array('slug'=>'cars'),
    );

    register_post_type('cars',$args);

}
add_action('init','my_first_post_type');


// function my_first_taxonomy(){
//     $args = array(

//         'labels'=>array(
//             'name' =>'Brands',
//             'singular_ame'=>'Brand',
//         ),
//         'public'=>true,
//         'hierarchical'=>true,
//     );

//     register_taxonomy('brands',array('cars'),$args);

// }
// add_action('init','my_first_taxonomy');
add_theme_support( 'post-thumbnails' );

function companies_post_type(){
    $args = array(

        'labels'=>array(
            'name'=>'Companies',
            'singulat_name'=>'Company',
        ),
        'hierarchical'=>true,
        'public'=>true,
        'has_archive'=>true,
        'menu_icon'=>'dashicons-store',
        'supports'=>array('title', 'editor', 'thumbnail','custom-fields'), //fields you require 
    );

    register_post_type('companies',$args);

}
add_action('init','companies_post_type');

function Custom_Fields(){
    add_meta_box(
        'cars_cf',
        'Company Details :',
        'CF',
        'companies',
        'normal',
        'low'
    );
}
function CF(){ ?>
<h1>Comapny Location:</h1>
    <table>
        <tr>
            <td> Address line 1 : </td>
            <td><input class="form-control" type="text" name="address1" id=""></td>
            <td> Address line 2 : </td>
            <td><input type="text" name="address2" id=""></td>
        </tr>
        <tr>
            <td> Country : </td>
            <td><input  type="text" name="country" id=""></td>
            <td> Select State : </td>
            <td>
                <select name="state" id="">
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="TamilNadu">TamilNadu</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Goa">Goa</option>
                </select>
            </td> 
        </tr>
        <tr>
            <td> Select City : </td>
            <td>
                <select name="city" id="">
                    <option value="Mumbai">Mumbai</option>
                    <option value="Satara">Satara</option>
                    <option value="Baramati">Baramati</option>
                    <option value="Pune">Pune</option>
                    <option value="Baner">Baner</option>
                </select>
            </td>
        </tr>
    </table>
<?php }
//add_action('admin_init','Custom_Fields');




add_action( 'add_meta_boxes', 'meta_box' );
  function meta_box() {
	  add_meta_box( 
		  'meta_box',
		  __( 'Company Details :', 'myplugin_textdomain' ),
		  'meta_box_content',
		  'companies',
		  'normal',
		  'low'
	  );
  }

  function meta_box_content( $post ) {
    wp_nonce_field( plugin_basename( __FILE__ ), 'meta_box_content_nonce' ); 
        echo '<label style="display:block" for="address1">Address line 1</label>';
        echo '<input type="text" style="display:block" id="address1" name="address1" value="' . get_post_meta( $post->ID, 'address1', true )  . '"/>';
        
        echo '<label style="display:block" for="address2">Address line 2</label>';
        echo '<input type="text" style="display:block" id="address2" name="address2" value="' . get_post_meta( $post->ID, 'address2', true )  . '"/>';
      
        echo '<label style="display:block" for="country">Country</label>';
        echo '<input type="text" id="country" name="country" value="' . get_post_meta( $post->ID, 'country', true ) . '"/>';

        echo '<label style="display:block" for="state">State</label>';
        echo '<input type="text" id="state" name="state" value="' . get_post_meta( $post->ID, 'state', true ) . '"/>';

        echo '<label style="display:block" for="city">City</label>';
        echo '<input type="text" id="city" name="city" value="' . get_post_meta( $post->ID, 'city', true ) . '"/>';

        echo '<label style="display:block" for="pin">Pin</label>';
        echo '<input type="text" id="pin" name="pin" value="' . get_post_meta( $post->ID, 'pin', true ) . '"/>';
        
  } 

  add_action( 'save_post', 'meta_box_save' );
  function meta_box_save( $post_id ) {	
  
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	return;
  
	if ( !wp_verify_nonce( $_POST['meta_box_content_nonce'], plugin_basename( __FILE__ ) ) )
	return;
  
	if ( 'page' == $_POST['season'] ) {
	  if ( !current_user_can( 'edit_page', $post_id ) )
	  return;
	} else {
	  if ( !current_user_can( 'edit_post', $post_id ) )
	  return;
	}

	$fields = [
        'address1',
        'address2',
        'country',
        'pin',
        'state',
        'city',
	    ];
	foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        	}
	}
}

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Forum';
    $submenu['edit.php'][5][0] = 'Forum';
    $submenu['edit.php'][10][0] = 'Add Forum';
    echo '';
}
add_action( 'admin_menu', 'change_post_menu_label' );
// Function to change post object labels to "news"
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Forum';
    $labels->singular_name = 'News Forum';
    $labels->add_new = 'Add Forum';
    $labels->add_new_item = 'Add New Forum';
    $labels->edit_item = 'Edit Forum';
    $labels->new_item = 'News Forum';
    $labels->view_item = 'View Forum';
    $labels->search_items = 'Search Forum';
    $labels->not_found = 'No Forum found';
    $labels->not_found_in_trash = 'No Forum found in Trash';
}
add_action( 'init', 'change_post_object_label' );
?>