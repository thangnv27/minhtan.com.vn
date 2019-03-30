<?php

add_action('wp_ajax_nopriv_ppo_get_products', 'ppo_get_products');
add_action('wp_ajax_ppo_get_products', 'ppo_get_products');

function ppo_get_products(){
    $cat = intval($_REQUEST['cat']);
    $paged = intval($_REQUEST['paged']);
    $orderby = trim($_REQUEST['orderby']);
    $showposts = 24;
    
    $args = array(
        'post_type' => 'product',
        'ignore_sticky_posts' => 1,
        'posts_per_page' => $showposts,
        'paged' => $paged,
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'term_id',
                'terms'    => $cat,
            ),
	),
        'post_status' => 'publish',
    );
    if($orderby == 'popularity'){
        $args['orderby'] = 'total_sales';
        $args['order'] = 'DESC';
    } else if($orderby == 'rating'){
        $args['orderby'] = 'rating';
        $args['order'] = 'DESC';
    } else if($orderby == 'date'){
        $args['orderby'] = 'date';
        $args['order'] = 'DESC';
    } else if($orderby == 'price'){
        $args['meta_key'] = '_price';
        $args['orderby'] = 'meta_value_num';
        $args['order'] = 'ASC';
    } else if($orderby == 'price-desc'){
        $args['meta_key'] = '_price';
        $args['orderby'] = 'meta_value_num';
        $args['order'] = 'DESC';
    }
    $products = new WP_Query( $args );
    $i=0;
    while ( $products->have_posts() ) : $products->the_post();
        global $post, $product; $i++;
?>
        <div class="col-xs-6 col-md-3 motsanpham">
            <?php $image = get_the_post_thumbnail($post->ID, apply_filters('single_product_large_thumbnail_size', 'shop_single')); ?> 
            <?php if ($image != "") { ?>
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumb-home-product'); ?></a>
            <?php } else { ?>	
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                    <img src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive" />
                </a>
            <?php } ?>

            <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h2>
            <div class="post-price">
                <div class="price">
                    <?php echo $product->get_price_html(); ?>
                </div>
                <div class="salepercent">
                    <?php
                    $price = get_post_meta(get_the_ID(), '_regular_price', true);
                    $sale = get_post_meta(get_the_ID(), '_sale_price', true);
                    if (get_post_meta(get_the_ID(), '_regular_price', true)) {
                        $salevew = ((($price - $sale) / $price) * 100);
                        if ($salevew > 0 & $salevew < 100) {
                            echo '<span class="label label-danger"> - ' . round($salevew) . '%</span>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div><!-- end motsanpham -->
    <?php
        if ($i%2==0 ) { echo'<div class="mobile_cl"></div>'; }
        if ($i%4==0 ) { echo'<div class="xuonghangnhanh"></div>'; }
    endwhile;
    wp_reset_query();
    exit;
}