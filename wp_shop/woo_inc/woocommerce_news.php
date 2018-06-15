<div class="froduc_kmai">
<h5 class="spkmm"><a href="http://bachhoanoithat.com/?page_id=4" title="Sản phẩm mới">Sản phẩm mới</a></h5>
<?php 
// Get products on sale
global $wp_query, $woocommerce;
$args = array(
    		'posts_per_page' 	=> 3, // số sản phẩm hiển thị
    		'post_status' 	=> 'publish',
    		'post_type' 	=> 'product',
    		'orderby' 		=> 'date',
    	);

$loop = new WP_Query( $args );?>
<ul class="products_km">
<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  $title = cut_string(get_the_title(),50,'...'); ?>
<li>
<h3 class="tieude"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo $title; ?></a></h3>
<div class="hinhimg">
<?php if ($product->is_on_sale()) : ?>
<?php echo apply_filters('woocommerce_sale_flash', '<img class="sale_vnking" alt="Sale khuyến mại" src="http://tranhsondaunghethuat.vn/wp-content/uploads/2013/08/news.png" />', $post, $product); ?>
<?php endif; ?>

<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" style="width:170px; height:170px;" alt="<?php the_title_attribute(); ?>" width="100px" height="100px" />'; ?>
</a>
</div>
<div class="rightprile">
<div class="rating">
<div class="sao-<?php $str = $product->get_average_rating(); $str = str_replace( '.', '_', $str ); echo $str;?>"></div>
</div>
<span itemprop="productID" class="sku_wrapper"><?php _e( 'Mã SP:', 'woocommerce' ); ?> <span class="sku"><?php echo $product->get_sku(); ?></span></span>
<p>Còn hàng</p>
<p itemprop="price" class="price"><?php echo $product->get_price_html(); ?></p>


</div>
</li>
<?php endwhile; wp_reset_query(); ?>
</ul>
<p class="spkmms"><a rel="nofollow" href="http://bachhoanoithat.com/?page_id=4" title="Sản phẩm khuyến mại">Xem tất cả</a></p>
</div>