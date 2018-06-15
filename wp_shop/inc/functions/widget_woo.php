<?php
    class TW_Recent_Posts extends WP_Widget {
	
	//	@var string (The plugin version)		
	var $version = '1.0.3';
	//	@var string $localizationDomain (Domain used for localization)
	var $localizationDomain = 'tw-recent-posts';
	//	@var string $pluginurl (The url to this plugin)
	var $pluginurl = '';
	//	@var string $pluginpath (The path to this plugin)		
	var $pluginpath = '';
	
	//	PHP 4 Compatible Constructor
	function TW_Recent_Posts() {
		$this->__construct();
	}

	//	PHP 5 Constructor		
	function __construct() {
		$name = dirname ( plugin_basename ( __FILE__ ) );
		$this->pluginurl = WP_PLUGIN_URL . "/$name/";
		$this->pluginpath = WP_PLUGIN_DIR . "/$name/";
	//	add_action ( 'wp_print_styles', array (&$this, 'tw_recent_posts_css' ) );
		
		$widget_ops = array ('classname' => 'tw-recent-posts', 'description' => __ ( 'ecosoft mong muốn quản trị website thật đơn giản, như bạn đang ngồi uống cafe vậy.', $this->localizationDomain ) );
		$this->WP_Widget ( 'tw-recent-posts', __ ( 'Chọn sản phẩm ', $this->localizationDomain ), $widget_ops );
	}
	
	
	
	function widget($args, $instance) {
		extract ( $args );
		$b = $_SERVER['SERVER_NAME'];
	       // if($b =='demo.ecosoft.com.vn') { 
		$category = apply_filters ( 'category', isset ( $instance ['category'] ) ? esc_attr ( $instance ['category'] ) : '' );
		$moretext = apply_filters ( 'moretext', isset ( $instance ['moretext'] ) ? esc_attr ( $instance ['moretext'] ) : '' );
		$count = apply_filters ( 'count', isset ( $instance ['count'] ) && is_numeric ( $instance ['count'] ) ? esc_attr ( $instance ['count'] ) : '' );
		$orderby = apply_filters ( 'orderby', isset ( $instance ['orderby'] ) ? $instance ['orderby'] : '' );
		$order = apply_filters ( 'order', isset ( $instance ['order'] ) ? $instance ['order'] : '' );
		
		$html_link = apply_filters ( 'html_link', isset ( $instance ['html_link'] ) ? $instance ['html_link'] : '' );
	    // }
	  
			
		$term = get_term( $category, 'product_cat' );
		$slug = $term->slug;	
		$name_produc = $term->name;	
?>
<div class="row module_sanpham">

<div class="tieude_home">
<h2 class="title_link">
 <a class="title_link_a" title="<?php echo $name_produc; ?>" href="<?php echo get_term_link($slug, 'product_cat'); ?>">
 <span class="glyphicon glyphicon-th-list"></span><?php echo $name_produc; ?></a>
</h2>

<div class="link-cat"><?php echo $html_link ; ?></div><!--end .link-cat-->
</div>

<div class="full_home_sanpham">
<?php 

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $post, $woocommerce, $product;
$wp_query = new WP_Query( array('post_type' => 'product', 
'product_cat' => $slug, 
'posts_per_page' => $count,
'orderby' => $orderby,
'order' => $order,
'nopagging' => true));
$dem =0;
while ($wp_query->have_posts()) : $wp_query->the_post(); global  $post, $product; $dem++?>	

<div class="col-xs-6 col-md-2 motsanpham">
 
 <?php
 $image  = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));?> 
 <?php if($image !="") {?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumb-home-product'); ?></a>
 <?php } else { ?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
 <img class="img-responsive" src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>"/>
 </a>
 <?php } ?>
        <div class="caption">
        <h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h3>
		<div class="post-price">
          <div class="price">
		  <?php echo $product->get_price_html(); ?>
          </div>
          <div class="salepercent">
          <?php
$price = get_post_meta( get_the_ID(), '_regular_price', true); 
$sale = get_post_meta( get_the_ID(), '_sale_price', true);
if(get_post_meta( get_the_ID(), '_regular_price', true)) { 
$salevew = ((($price-$sale)/$price)*100);  
if ($salevew>0&$salevew<100) {
 echo '<span class="label label-danger"> - '.round($salevew).'%</span>'; 
}
}
?>

          </div>
        </div>
       
    
        </div> <!-- end caption -->


</div> <!-- end col-md-2 -->

<?php if($dem%2==0) {echo '<div class="mobile_cl"></div>'; }?>
<?php if($dem%6==0) {echo '<div class="xuonghangnhanh"></div>'; }?>
<?php
endwhile;
wp_reset_query();
wp_reset_postdata();
?>
</div>
</div> <!-- end full_home_sanpham -->
<?php
		echo $after_widget;
	}
	
	function update($new_instance, $old_instance) {
		return $new_instance;
	}
	function form($instance) {
		$category = isset ( $instance ['category'] ) ? esc_attr ( $instance ['category'] ) : '';
		$moretext = isset ( $instance ['moretext'] ) ? esc_attr ( $instance ['moretext'] ) : 'Mua ngay&raquo;';
		$count = isset ( $instance ['count'] ) && is_numeric ( $instance ['count'] ) ? esc_attr ( $instance ['count'] ) : '5';
		$orderby = isset ( $instance ['orderby'] ) ? $instance ['orderby'] : '';
		$order = isset ( $instance ['order'] ) ? $instance ['order'] : '';
		$html_link = isset ( $instance ['html_link'] ) ? $instance ['html_link'] : '';
		
		
?>


<p><label><?php _e('Code HTML', $this->localizationDomain); ?></label>
<textarea id="<?php echo $this->get_field_id('html_link'); ?>"
	name="<?php echo $this->get_field_name('html_link'); ?>"><?php echo $html_link ; ?>
</textarea>
</p>

    
 <p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Danh mục sản phẩm:', $this->localizationDomain); ?></label><select
	id="<?php echo $this->get_field_id('category'); ?>"
	name="<?php echo $this->get_field_name('category'); ?>">
	<?php 
	$cats = get_categories(array('hide_empty' => 1, 'taxonomy' => 'product_cat', 'hierarchical' => true));
	foreach ($cats as $cat) {
		echo '<option value="' . $cat->term_id . '" ' .( $cat->term_id == $category ? 'selected="selected"' : '' ). '>' . $cat->name . '</option>';
	} ?>
	</select></p>

<p><label for="<?php echo $this->get_field_id('orderby'); ?>"><?php _e('Sắp xếp theo:', $this->localizationDomain); ?></label><select
	id="<?php echo $this->get_field_id('orderby'); ?>"
	name="<?php echo $this->get_field_name('orderby'); ?>">
	<option value="date"
		<?php echo 'date' == $orderby ? 'selected="selected"' : '' ?>><?php _e('Date', $this->localizationDomain); ?></option>
	<option value="ID"
		<?php echo 'ID' == $orderby ? 'selected="selected"' : '' ?>><?php _e('ID', $this->localizationDomain); ?></option>
	<option value="title"
		<?php echo 'title' == $orderby ? 'selected="selected"' : '' ?>><?php _e('Title', $this->localizationDomain); ?></option>
	<option value="rand"
		<?php echo 'rand' == $orderby ? 'selected="selected"' : '' ?>><?php _e('Random', $this->localizationDomain); ?></option>
</select></p>

<p><label for="<?php echo $this->get_field_id('order'); ?>"><?php _e('Tiêu chí sắp xếp:', $this->localizationDomain); ?></label><select
	id="<?php echo $this->get_field_id('order'); ?>"
	name="<?php echo $this->get_field_name('order'); ?>">
	<option value="DESC"
		<?php echo 'DESC' == $order ? 'selected="selected"' : '' ?>><?php _e('DESC:', $this->localizationDomain); ?></option>
	<option value="ASC"
		<?php echo 'ASC' == $order ? 'selected="selected"' : '' ?>><?php _e('ASC:', $this->localizationDomain); ?></option>
</select></p>

<p><label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Số sản phẩm:', $this->localizationDomain); ?> </label>
<select
	id="<?php echo $this->get_field_id('count'); ?>"
	name="<?php echo $this->get_field_name('count'); ?>">
	
<option value="5" <?php echo '5' == $count ? 'selected="selected"' : '' ?>><?php _e('5', $this->localizationDomain); ?></option>
<option value="6" <?php echo '6' == $count ? 'selected="selected"' : '' ?>><?php _e('6', $this->localizationDomain); ?></option>
<option value="7" <?php echo '7' == $count ? 'selected="selected"' : '' ?>><?php _e('7', $this->localizationDomain); ?></option>
<option value="8" <?php echo '8' == $count ? 'selected="selected"' : '' ?>><?php _e('8', $this->localizationDomain); ?></option>
<option value="9" <?php echo '9' == $count ? 'selected="selected"' : '' ?>><?php _e('9', $this->localizationDomain); ?></option>
<option value="10" <?php echo '10' == $count ? 'selected="selected"' : '' ?>><?php _e('10', $this->localizationDomain); ?></option>
<option value="11" <?php echo '11' == $count ? 'selected="selected"' : '' ?>><?php _e('11', $this->localizationDomain); ?></option>
<option value="12" <?php echo '12' == $count ? 'selected="selected"' : '' ?>><?php _e('12', $this->localizationDomain); ?></option>
<option value="13" <?php echo '13' == $count ? 'selected="selected"' : '' ?>><?php _e('13', $this->localizationDomain); ?></option>
<option value="14" <?php echo '14' == $count ? 'selected="selected"' : '' ?>><?php _e('14', $this->localizationDomain); ?></option>
<option value="15" <?php echo '15' == $count ? 'selected="selected"' : '' ?>><?php _e('15', $this->localizationDomain); ?></option>
<option value="16" <?php echo '16' == $count ? 'selected="selected"' : '' ?>><?php _e('16', $this->localizationDomain); ?></option>
<option value="17" <?php echo '17' == $count ? 'selected="selected"' : '' ?>><?php _e('17', $this->localizationDomain); ?></option>
<option value="18" <?php echo '18' == $count ? 'selected="selected"' : '' ?>><?php _e('18', $this->localizationDomain); ?></option>
<option value="19" <?php echo '19' == $count ? 'selected="selected"' : '' ?>><?php _e('19', $this->localizationDomain); ?></option>
<option value="20" <?php echo '20' == $count ? 'selected="selected"' : '' ?>><?php _e('20', $this->localizationDomain); ?></option>
</select>
</p>


<p><a href="http://ecosoft.com.vn/huong-dan-su-dung/" title="Hướng dẫn sử dụng">Xem hướng dẫn</a></p>    



<?php 
    }
	
} // end class TW_Recent_Posts

add_action('widgets_init', create_function('', 'return register_widget("TW_Recent_Posts");'));