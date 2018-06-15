<div class="widget sale_pro">
<h4 class="page-widgets"><span class="glyphicon glyphicon-gift"></span>Sản phẩm khuyến mại</h4>
<?php 
// Get products on sale
global $wp_query, $woocommerce;
$product_ids_on_sale = woocommerce_get_product_ids_on_sale();
$product_ids_on_sale[] = 0;
$meta_query = $woocommerce->query->get_meta_query();
$args = array(
    		'posts_per_page' 	=> 2, // số sản phẩm hiển thị
    		'no_found_rows' => 1,
    		'post_status' 	=> 'publish',
    		'post_type' 	=> 'product',
    		'orderby' 		=> 'date',
    		'order' 		=> 'ASC',
    		'meta_query' 	=> $meta_query,
    		'post__in'		=> $product_ids_on_sale
    	);

$loop = new WP_Query( $args );?>
<div class="sanphamdangkhuyenmai">
<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;   ?>
<div class="col-xs-12 col-sm-12 col-md-12 motsanpham">
 
  <?php
 $image  = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));?> 
 <?php if($image !="") {?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumb-home-product'); ?></a>
 <?php } else { ?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
 <img src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive" />
 </a>
 <?php } ?>
 
    <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title_attribute() ?></a></h2>
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
    
    </div>
<?php endwhile; wp_reset_query(); ?>
</div>
</div>