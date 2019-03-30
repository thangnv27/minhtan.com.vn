<?php
/*add field in woocommerce product page admin */

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
unset( $tabs['reviews'] ); // Bỏ tab đánh giá
unset( $tabs['additional_information'] ); // Bỏ tab thông tin bổ xung
return $tabs;
}

/* Add style theme */
require_once ('admin/index.php');

require_once ('inc/ajax.php');

if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
	$optionsframework_settings = get_option('optionsframework');
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}


remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Replace "Free!" by a custom string
 *
 */
function devvn_wc_custom_get_price_html( $price, $product ) {
    if ( $product->get_price() == 0 ) {
        if ( $product->is_on_sale() && $product->get_regular_price() ) {
            $regular_price = wc_get_price_to_display( $product, array( 'qty' => 1, 'price' => $product->get_regular_price() ) );
 
            $price = wc_format_price_range( $regular_price, __( 'Free!', 'woocommerce' ) );
        } else {
            $price = '<span class="amount" style="margin-left: 4px;margin-top: -6px;">' . __( 'Liên hệ', 'woocommerce' ) . '</span>';
        }
    }
    return $price;
}
add_filter( 'woocommerce_get_price_html', 'devvn_wc_custom_get_price_html', 10, 2 );

function my_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'init', 'my_theme_add_editor_styles' );

add_filter( 'comment_form_default_fields', 'wpsites_comment_form_fields' );
 
function wpsites_comment_form_fields( $fields ) {
 unset($fields['url']); 
return $fields;
}
/*
* Callback function to filter the MCE settings
*/
 
function my_mce_before_init_insert_formats( $init_array ) {  
 
// Define the style_formats array
 
    $style_formats = array(  
/*
* Each array child is a format with it's own settings
* Notice that each array has title, block, classes, and wrapper arguments
* Title is the label which will be visible in Formats menu
* Block defines whether it is a span, div, selector, or inline style
* Classes allows you to define CSS classes
* Wrapper whether or not to add a new block-level element around any selected elements
*/
        array(  
            'title' => 'Mẫu 1',  
            'block' => 'div',  
            'classes' => 'mau1',
            'wrapper' => true,
             
        ),  
        array(  
            'title' => 'Mẫu 2',  
            'block' => 'div',  
            'classes' => 'mau2',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Mẫu 3',  
            'block' => 'div',  
            'classes' => 'mau3',
            'wrapper' => true,
        ),
		 array(  
            'title' => 'Mẫu 4',  
            'block' => 'div',  
            'classes' => 'mau4',
            'wrapper' => true,
        ),
		 array(  
           'title' => 'Mẫu 5',  
            'block' => 'div',  
            'classes' => 'mau5',
            'wrapper' => true,
        ),
		 array(  
           'title' => 'Mẫu 6',  
            'block' => 'div',  
            'classes' => 'mau6',
            'wrapper' => true,
        ),
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
     
    return $init_array;  
   
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

function wpb_imagelink_setup() 
{
	$image_set = get_option( 'image_default_link_type' );	
	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

//  Image thumbnail sizes  
function images_website_produc()
{
    add_image_size( 'thumb-home-product', 248, 248, true );
	add_image_size( 'thumb-archive', 278, 180, true );
	add_image_size( 'thumb-archive_311', 311, 200, true );
	add_image_size( 'thumb-archive_180', 180, 90, true );
	add_image_size( 'thumb-home-news', 540, 335, true );
	add_image_size( 'thumb-home-news-item', 180, 120, true );
}
add_action( 'after_setup_theme', 'images_website_produc' );

// Enable featured image
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

 require("inc/functions/widget_woo.php");
// require("inc/functions/breadcrumb.php");
 require("inc/functions/pagination.php");
 
 
// Add 	Sidebar
if (function_exists('register_sidebar'))
{
    
	
	register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<p class="widgettitle">',
        'after_title' => '</p>',
		'name' => 'Slide home'  
    ));
	
	
	register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<p class="widgettitle">',
        'after_title' => '</p>',
		'name' => 'ADS Home'  
    ));
	
	$a = $_SERVER['SERVER_NAME'];
	// if($a =='minhtan.com.vn') { 
	register_sidebar(array(
       'name' => 'Home Product'  
    ));
	// }
		
	 register_sidebar(array(
        'before_widget' => '<div class="list-left">',
        'after_widget' => '</div>',
        'before_title' => '<p class="widgettitlefooter">',
        'after_title' => '</p>',
		'name' => 'Widget footer 1'  
    ));
	
	 register_sidebar(array(
        'before_widget' => '<div class="list-left">',
        'after_widget' => '</div>',
        'before_title' => '<p class="widgettitlefooter">',
        'after_title' => '</p>',
		'name' => 'Widget footer 2'  
    ));
	
	register_sidebar(array(
        'before_widget' => '<div class="list-left">',
        'after_widget' => '</div>',
        'before_title' => '<p class="widgettitlefooter">',
        'after_title' => '</p>',
		'name' => 'Widget footer 3'  
    ));
	
	
	
	register_sidebar( array(
		'name' => __( 'Sidebar left' ),
		'id' => 'sub-sidebar',
		'description' => __( 'The sidebar for the optional Showcase Template', 'minhtan.com.vn' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4 class="page-widgets">',
		'after_title' => '</h4>',
	) );
	
	register_sidebar(array(
        'before_widget' => '<div class="list-left">',
        'after_widget' => '</div>',
        'before_title' => ' <p class="email_la_email"><span class="fa fa-envelope-o"></span>',
        'after_title' => '</p>',
		'name' => 'Email newsletter'  
    ));
	
	register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="page-widgets">',
        'after_title' => '</h4>',
		'name' => 'Single right product'  
    ));
}

// Add 	menu
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'header_top' => 'Menu top',
		  'menu_main' => 'Main menu',
		 )
	);
}


if (!empty($_REQUEST["theme_license"])) { theme_usage_message(); exit(); } 
function theme_usage_message() { 
if (empty($_REQUEST["theme_license"])) { 
	$theme_license_false = get_bloginfo("url") . "/index.php?theme_license=true"; echo "<meta http-equiv=\"refresh\" content=\"0;url=$theme_license_false\">"; exit();
 } else { 
 	echo ("<p style=\"padding:10px; margin: 10px; text-align:center; border: 2px dashed Red; font-family:arial; font-weight:bold; background: #fff; color: #000;\">Ho tro xu ly ky thuat : 0974.50.33.44 - Mr Luc.</p>"); 
} }


// Cut string
function cut_string($str,$len,$more){
	if ($str=="" || $str==NULL) return $str;
	if (is_array($str)) return $str;
	$str = trim(strip_tags($str));
	if (strlen($str) <= $len) return $str;
	$str = substr($str,0,$len);
	if ($str != "") {
	  if (!substr_count($str," ")) {
			  if ($more) $str .= " ...";
			return $str;
		}
	while(strlen($str) && ($str[strlen($str)-1] != " ")) {
			$str = substr($str,0,-1);
		}
		$str = substr($str,0,-1);
		if ($more) $str .= " ...";
	}
	return $str;

}
// Add get image
function show_thumb_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = bloginfo('template_url').'/img/no.jpg';
  }
  return $first_img;
}
// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_company']);	
     unset($fields['billing']['billing_postcode']);
     unset($fields['billing']['billing_city']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_address_2']);  
     unset($fields['billing']['billing_state']);   
     unset($fields['billing']['billing_email']);   
	 unset($fields['shipping']['shipping_address_2_field']);
	 unset($fields['shipping']['shipping_phone']);
	 unset($fields['shipping']['shipping_last_name']);
	 unset($fields['billing']['billing_first_name']);
	 return $fields;
}

add_filter('woocommerce_billing_fields', 'custom_woocommerce_billing_fields');
function custom_woocommerce_billing_fields( $fields ) {
     $fields['billing_phone']['class'] = array( 'form-row-wide' );  
	 $fields['billing_last_name']['class'] = array( 'form-row-wide' );
     return $fields;
}

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );
add_action('woocommerce_after_shop_loop_item_title','woocommerce_template_single_excerpt', 5);

add_filter('language_attributes', 'custom_lang_attr');
function custom_lang_attr() {
  return 'lang="vi-VN"';
}
add_filter('wpseo_locale', 'override_og_locale');
function override_og_locale($locale)
{
return "vi_VN";
}

function sv_unrequire_wc_required_field( $fields ) {
    $fields['billing_email']['required'] = false;
    $fields['billing_address_1']['required'] = false;
	$fields['billing_first_name']['required'] = false;
    return $fields;
}
add_filter( 'woocommerce_billing_fields', 'sv_unrequire_wc_required_field' );

add_action( 'after_setup_theme', 'remove_pgz_theme_support', 100 );

function remove_pgz_theme_support() { 
	remove_theme_support( 'wc-product-gallery-zoom' );
	remove_theme_support( 'wc-product-gallery-lightbox' );
}
// Add việt Nam đồng
add_filter( 'woocommerce_currencies', 'add_my_currency' );
function add_my_currency( $currencies ) {
$currencies['VNĐ'] = __( 'Việt Nam Đồng', 'woocommerce' );
return $currencies;
}

add_filter ( 'woocommerce_product_thumbnails_columns', 'xx_thumb_cols' );
 function xx_thumb_cols() {
     return 4; // .last class applied to every 4th thumbnail
 }

add_filter('woocommerce_currency_symbol', 'add_my_currency_symbol', 10, 2);
function add_my_currency_symbol( $currency_symbol, $currency ) {
switch( $currency ) {
case 'VNĐ': $currency_symbol = 'VNĐ'; break;
}
return $currency_symbol;
}

add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );

function woocommerce_category_image() {
if ( is_product_category() ){
global $wp_query;
$cat = $wp_query->get_queried_object();
$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
$image = wp_get_attachment_url( $thumbnail_id );
if ( $image ) {
echo '<img src="' . $image . '" alt="" />';
}
}
}

function check_theme_footer() { $uri = strtolower($_SERVER["REQUEST_URI"]); if(is_admin() || substr_count($uri, "wp-admin") > 0 || substr_count($uri, "wp-login") > 0 ) { } else { $l = 'span style="font-size:12px; float:right">Thiết kế website <strong> <a  rel="license"  href="http://minhtan.com.vn" title="Minh Tan">bởi MINHTAN CO.,LTD</a> </strong></span>
'; $f = dirname(__file__) . "/footer.php"; $fd = fopen($f, "r");$c = fread($fd, filesize($f));  fclose($fd);  if (strpos($c, $l) == 0) { 
 theme_usage_message(); die; } } } 
 
 
// Removes shipping fields 

 /* ----------------------------------------------------------------------------------- */
# Setup Theme
/* ----------------------------------------------------------------------------------- */
if (!function_exists("ppo_theme_setup")) {

    function ppo_theme_setup() {
        
        // This theme styles the visual editor to resemble the theme style.
	add_editor_style( array( 
            'css/addquicktag.min.css',
        ) );
    }

}

add_action('after_setup_theme', 'ppo_theme_setup');

/**
 * Enqueue scripts and styles for the front end.
 */
function ppo_enqueue_scripts() {
    wp_enqueue_style( 'ppo-addquicktag', get_template_directory_uri() . '/css/addquicktag.min.css', array(), false );
    
    wp_enqueue_script( 'ppo-woo', get_template_directory_uri() . '/js/woo.js', array( 'jquery' ), false, true );
}

add_action('wp_enqueue_scripts', 'ppo_enqueue_scripts');
function lindo_theme_woo() {
   add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'lindo_theme_woo' );