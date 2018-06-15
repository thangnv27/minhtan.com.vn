<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $post, $product, $woocommerce_loop;
$related = $product->get_related(  );
if ( sizeof( $related ) == 0 ) return;

$args = apply_filters('woocommerce_related_products_args', array(
	'post_type'				=> 'product',
	'post__in' 				=> $related,
	'showposts' => 8,  // Số sản phẩm	 
	'post__not_in'			=> array($product->id)
) );

$products = new WP_Query( $args );
if ( $products->have_posts() ) : ?>
<?php while ( $products->have_posts() ) : $products->the_post(); ?>
<div class="list-slider-fashion">
 <?php /*?> <?php if ( $product->is_on_sale() ) : ?>
                      <?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . __( 'Sale', 'woocommerce' ) . '</span>', $post, $product ); ?>
                        <?php endif; ?><?php */?>

<?php $sale = get_post_meta( get_the_ID(), '_sale_price', true); if($sale >=1850000) { ?>
 <div class="quatang">
 <p><i class="fa fa-gift"></i>Quà tặng</p>
 </div>
<?php } ?> 

 <?php
 $image  = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));?> 
 <?php if($image !="") {?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumb-home-product'); ?></a>
 <?php } else { ?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
 <img src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive" />
 </a>
 <?php } ?>
                        <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php  echo $title = cut_string(get_the_title(),50,'...');  ?></a></h2>
                        

<del><span class="amount"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true); ?>₫</span></del>
<ins><span class="amount"><?php echo $sale = get_post_meta( get_the_ID(), '_sale_price', true); ?>₫</span></ins>

	
                      
</div><!--end .list-slider-fashion-->                 
<?php endwhile;  ?> 
<?php endif;
wp_reset_postdata();
?>