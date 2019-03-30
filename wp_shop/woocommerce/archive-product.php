<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
get_header('shop'); ?>
<div class="cat_sanpham">
<div class="row">
  <div id="slidebar" class="col-xs-12 col-md-3 filter-cost">
  	<?php
		do_action('woocommerce_sidebar');
	?>
  </div>
  
  <div class="col-xs-12 col-md-9" style="margin:10px 0">
  
 <?php do_action('woocommerce_before_main_content');?>
     <h1 class="catproduc-title"><span class="glyphicon glyphicon-tasks"></span><?php woocommerce_page_title(); ?></h1>	 
	  
<div class="clearfix">		  
<?php do_action( 'woocommerce_archive_description' ); ?>	
	<div class="read-full">
		<a href="javascript:void(0)" class="read-more">Xem thêm</a>
		<a href="javascript:void(0)" class="read-less">Thu gọn</a>
	</div>
	  </div>
<?php  if ( have_posts() ) : ?>	 
<div class="row navbar" style="max-height:70px; margin-bottom:0">
<?php do_action( 'woocommerce_before_shop_loop' );?>
			<?php woocommerce_product_loop_start(); ?>
				<?php woocommerce_product_subcategories(); ?>
</div>	 
	  <div class="row" id="products_container">
<?php $i=0; while ( have_posts() ) : the_post(); $i++;  global  $post, $product; ?>
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
</div><!-- end sanphamcats -->
    <?php if ($i%2==0 ) { echo'<div class="mobile_cl"></div>'; }?>
        <?php if ($i%4==0 ) { echo'<div class="xuonghangnhanh"></div>'; }?>

  	<?php endwhile; // end of the loop. ?>
    </div><!-- end row -->
<?php woocommerce_product_loop_end(); ?>
<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
<p> Hiện không có sản phẩm nào ! Mời quý khách quay lại trang chủ để mua hàng ! </p>
<h2><a href="<?php bloginfo('url'); ?>">Trang chủ</a></h2>
<?php endif; ?>
<div class="row">
    <?php
    global $wp_query;
    if($wp_query->found_posts > 24):
    ?>
    <div class="load-more-product" data-page="2" data-cat="<?php echo get_queried_object_id() ?>">
        <span> Xem thêm sản phẩm <i class="fa fa-long-arrow-down" aria-hidden="true"></i></span>
    </div>
    <?php endif; ?>
<?php // wp_pagenavi(); ?>
<?php // do_action('woocommerce_pagination'); ?>
	<hr>	
	<div class="panel panel-default">
            <div class="binhlan"><span class="glyphicon glyphicon-user"></span>Đánh Giá Và Nhận Xét Sản Phẩm</div>								
            <div class="panel-body binhliansanp">	
                <div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                <div class="kk-rating" style="float: left;height: 20px;margin-top: -41px; margin-left: 150px;">
		  <?php 
                    $obj = get_queried_object();
		   if(function_exists("kk_star_ratings")) : echo kk_star_ratings($obj->ID); endif; 
		  ?>		   
                </div>								
                <?php
                $canonical_url = get_term_link($obj, $obj->taxonomy);
                ?>
                <div id="disqus_thread" style="margin-top: 30px"></div>
                <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                var disqus_config = function () {
                    this.page.url = '<?php echo $canonical_url ?>';  // Replace PAGE_URL with your page's canonical URL variable
                    //this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://minhtancomvn.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div> 
        </div>	
	<?php
		do_action('woocommerce_after_main_content');
	?>	
</div>				
</div><!-- end col-md-12 col-md-pull-9 -->
</div><!-- end row -->
</div><!-- end cat_sanpham  -->
<?php get_footer('shop'); ?>