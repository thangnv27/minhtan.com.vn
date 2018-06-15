<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop;

$related = $product->get_related( $posts_per_page );

if ( sizeof( $related ) == 0 ) return;

$args = apply_filters('woocommerce_related_products_args', array(
	'post_type'				=> 'product',
	'ignore_sticky_posts'	=> 1,
	'no_found_rows' 		=> 1,
'showposts' => 4,  // Số sản phẩm	 
	'orderby' 				=> $orderby,
	'post__in' 				=> $related,
	'post__not_in'			=> array($product->id)
) );
$products = new WP_Query( $args );

$woocommerce_loop['columns'] 	= $columns;

if ( $products->have_posts() ) : ?>
 <div  class="tab-pro-hot">
	<div class="related products carousel-inner jcouts">

  <ul class="thumbnails jcarousel-skin-tango">

<?php while ( $products->have_posts() ) : $products->the_post(); global $product; $i++;  ?>
<li class="span3 span-<?php echo $i; ?>">
 <div class="list-pro thumbnails">
 <a class="img-list-pro" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
<?php if ($product->is_on_sale()) : ?><span></span><?php endif; ?>
 <?php if (has_post_thumbnail( $product->post->ID )) echo get_the_post_thumbnail($product->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" style="width:170px; height:170px;" alt="<?php the_title_attribute(); ?>" width="170px" height="170px" />'; ?>
</a>
 <div class="text-list-pro">
    <h2><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <?php echo $product->get_price_html(); ?>
    <p><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_title(); ?>">Xem tiếp</a></p>
</div><!--end text-list-pro-->
</div><!--end list-pro-->
</li><!--end list-pro-->
	
				<?php  // woocommerce_get_template_part( 'content', 'product' ); ?>

			<?php endwhile; // end of the loop. ?>

</ul>

	</div></div>

<?php endif;

wp_reset_postdata();
