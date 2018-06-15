<ul id="spdienthoai" class="thumbnails jcarousel-skin-tango">
 <li class="span3 span-<?php echo $i; ?>">
 <div class="list-pro thumbnails">
 <a class="img-list-pro" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
<?php if ($product->is_on_sale()) : ?><span></span><?php endif; ?>
 <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" style="width:170px; height:170px;" alt="<?php the_title_attribute(); ?>" width="170px" height="170px" />'; ?>
</a>
 <div class="text-list-pro">
    <h2><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_title(); ?>"><?php echo $title; ?></a></h2>
    <?php echo $product->get_price_html(); ?>
    <p><a href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_title(); ?>">Xem tiếp</a></p>
</div><!--end text-list-pro-->
</div><!--end list-pro-->
</li>
</ul>