<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
global $post, $woocommerce, $product;
?>
<div class="images sp-wrap" id="product-images">
	<?php
		if ( has_post_thumbnail() ) {

			$image_title = esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$image_link  = wp_get_attachment_url( get_post_thumbnail_id() );
			$image       = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
				'title' => $image_title
				) );

			$attachment_count = count( $product->get_gallery_attachment_ids() );

			if ( $attachment_count > 0 ) {
				$gallery = '[product-gallery]';
			} else {
				$gallery = '';
			}
echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<a href="%s" itemprop="image" class="woocommerce-main-image zoom" title="%s">%s</a>', $image_link, $image_title, $image ), $post->ID );

		} else {

			echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="Placeholder" />', wc_placeholder_img_src() ), $post->ID );

		}
	?>

	<?php do_action( 'woocommerce_product_thumbnails' ); ?>

</div>

<?php /*?>

<div class="simpleLens-gallery-container" id="product-images">
        <div class="simpleLens-container">
            <div class="simpleLens-big-image-container">
                <a class="simpleLens-lens-image" data-lens-image="<?php bloginfo('template_url'); ?>/demo/large/benvado_elisa_bianco.jpg">
                    <img src="<?php bloginfo('template_url'); ?>/demo/medium/benvado_elisa_bianco.jpg" class="simpleLens-big-image">
                </a>
            </div>
        </div>

        <div class="simpleLens-thumbnails-container">
            <a href="#" class="simpleLens-thumbnail-wrapper"
               data-lens-image="<?php bloginfo('template_url'); ?>/demo/large/benvado_elisa_bianco.jpg"
               data-big-image="<?php bloginfo('template_url'); ?>/demo/medium/benvado_elisa_bianco.jpg">
                <img src="<?php bloginfo('template_url'); ?>/demo/thumbnail/benvado_elisa_bianco.jpg">
            </a>

            <a href="#" class="simpleLens-thumbnail-wrapper"
               data-lens-image="<?php bloginfo('template_url'); ?>/demo/large/camper_21926_red.jpg"
               data-big-image="<?php bloginfo('template_url'); ?>/demo/medium/camper_21926_red.jpg">
                <img src="<?php bloginfo('template_url'); ?>/demo/thumbnail/camper_21926_red.jpg">
            </a>

            <a href="#" class="simpleLens-thumbnail-wrapper"
               data-lens-image="<?php bloginfo('template_url'); ?>/demo/large/flylondon_most_red.jpg"
               data-big-image="<?php bloginfo('template_url'); ?>/demo/medium/flylondon_most_red.jpg">
                <img src="<?php bloginfo('template_url'); ?>/demo/thumbnail/flylondon_most_red.jpg">
            </a>
        </div>
    </div><?php */?>