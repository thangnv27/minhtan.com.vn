<?php
if ( ! function_exists( 'life_woo_cart' ) ) {
	function life_woo_cart(){
		$_actived = apply_filters( 'active_plugins', get_option( 'active_plugins' )  );
		if ( !in_array( "woocommerce/woocommerce.php", $_actived ) ) {
			return;
		}
		global $woocommerce;
		$_cart_empty = sizeof( $woocommerce->cart->get_cart() ) > 0 ? false : true ;
		
		ob_start();
		
		?>
		<?php do_action( 'wd_before_tini_cart' ); ?>
		
        <a href="javascript:void(0);">
								<strong>Giỏ hàng</strong>
								<span><?php echo $woocommerce->cart->cart_contents_count;?> Sản phẩm</span>
								<p><i class="fa fa-shopping-cart"></i></p>
		</a>
        <div  class="cart-hover">
			<table>
				<?php if ( !$_cart_empty ) : ?>
					<tbody>
							
							<?php
								$_cart_array = $woocommerce->cart->get_cart();
								$_index = 0;
							?>
							
							<?php foreach ( $_cart_array as $cart_item_key => $cart_item ) :
								
								$_product = $cart_item['data'];

								// Only display if allowed
								if ( ! apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) || ! $_product->exists() || $cart_item['quantity'] == 0 )
									continue;

								// Get price
								$product_price = get_option( 'woocommerce_tax_display_cart' ) == 'excl' ? $_product->get_price_excluding_tax() : $_product->get_price_including_tax();

								$product_price = apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_price ), $cart_item, $cart_item_key );
								?>

<tr>
<td><a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>">
										<?php echo $_product->get_image(); ?></a></td>
<td><h5><a class="wd_cart_title" href="<?php echo get_permalink( $cart_item['product_id'] ); ?>">
										<?php echo $_product->get_title(); ?>
</a></h5></td>
<td><?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s',$product_price, $cart_item['quantity'] ) . '</span>', $cart_item, $cart_item_key ); ?></td>
<td>
<?php
echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s"><i class="fa fa-times"></i></a>', esc_url( $woocommerce->cart->get_remove_url( $cart_item_key ) ), __( 'Remove this item', 'wpdance' ) ), $cart_item_key );
?></td>
</tr>

							<?php $_index++; ?>
								
							<?php endforeach; ?>
					</tbody><!-- end product list -->
			
				<?php else: ?>
				<div class="cart_total">
					<?php _e('Hiện chưa có sản phẩm.','wpdance');?>
				</div>
				<?php endif; ?>
				
</table>
<?php if ( !$_cart_empty ) : ?>
<div class="all-prod-cart">
<p><strong>Tổng:</strong><span><?php echo $woocommerce->cart->get_cart_subtotal(); ?></span></p>
<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>
<a href="<?php echo $woocommerce->cart->get_checkout_url(); ?>" class="vews_cart"><?php _e( 'Thanh toán', 'wpdance' ); ?></a>
</div>
<?php endif; ?>
</div>
<?php do_action( 'wd_after_tini_cart' ); ?>
<?php
		$tini_cart = ob_get_clean();
		return $tini_cart;
	}
}

if ( ! function_exists( 'wd_update_tini_cart' ) ) {
	function wd_update_tini_cart() {
		die($_tini_cart_html = life_woo_cart());
	}
}

add_action('wp_ajax_update_tini_cart', 'wd_update_tini_cart');
add_action('wp_ajax_nopriv_update_tini_cart', 'wd_update_tini_cart');

?>