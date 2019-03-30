<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $product, $woocommerce_loop;
$related = $product->get_related( $posts_per_page );
if ( sizeof( $related ) == 0 ) return;

$args = apply_filters('woocommerce_related_products_args', array(
	'post_type'				=> 'product',
	'ignore_sticky_posts'	=> 1,
	'no_found_rows' 		=> 1,
	'post__in' 				=> $related,
	'showposts' => 4,  // Số sản phẩm	 
	'post__not_in'			=> array($product->id)
) );

$products = new WP_Query( $args );
if ( $products->have_posts() ) : ?>
<div class="relatedspll">
<?php woocommerce_product_loop_start(); ?>
<div class="row sanphamlinequan">
<?php $i = 0; while ( $products->have_posts() ) : $products->the_post(); $i++ ?>
<div class="col-xs-6 col-md-3 motsanpham">
 
  <?php
 $image  = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));?> 
 <?php if($image !="") {?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumb-home-product'); ?></a>
 <?php } else { ?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
 <img src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive" />
 </a>
 <?php } ?>
 
 
    <h3><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php  echo $title = cut_string(get_the_title(),50,'...');  ?></a></h3>
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
   <?php if ($i%2==0 ) { echo'<div class="mobile_cl"></div>'; }?>
        <?php if ($i%4==0 ) { echo'<div class="xuonghangnhanh"></div>'; }?>
<?php endwhile;  ?> 

</div>
<?php woocommerce_product_loop_end(); ?>
</div>
<?php endif;
wp_reset_postdata();
?>