<?php get_header();?>
 <div id="customer">
    	<div id="wrap-customer" class="row-fluid">
            <div class="slide-show">
            	<?php echo do_shortcode("[metaslider id=57]"); ?>
            </div><!--end slide-show-->
            
            <div class="adv">
          	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('ADS_Home_220px')) : else : endif; ?>
            </div><!--end adv-->
            
            <div class="support">
            	<ul>
                	<li class="support-mobile">
                    	<h5>HỖ TRỢ TRỰC TUYẾN ( 8h > 15h )</h5>
                        <h6><?php echo $dtb_hotro = get_option('nt_dtb_hotro') ?></h6>
                    </li>
                    
                    <li class="support-online">
                        <a class="skype" title="<?php echo $dtb_hotro = get_option('nt_skype_hotro') ?>" rel="nofollow" href="skype:<?php echo $dtb_hotro = get_option('nt_skype_hotro') ?>?chat"></a>
                    	<a class="yahoo" rel="nofollow" title="<?php echo $dtb_hotro = get_option('nt_yahoo_hotro') ?>" href="ymsgr:sendim?<?php echo $dtb_hotro = get_option('nt_yahoo_hotro') ?>"></a>
                    </li>
                    
                    <li class="support-mobile">
                    	<h5>Kinh doanh</h5>
                        <h6><?php echo $dtb_hotro = get_option('nt_kinhdoanh_hotro') ?></h6>
                    </li>
                    
                    <li class="support-mobile last-child">
                    	<span></span>
                    	<h5>HOTLINE <p>24/7</p></h5>
                        <h6><?php echo $dtb_hotro = get_option('nt_hotline_hotro') ?></h6>
                    </li>
                </ul>
            </div><!--end support-->
            
  <div class="pro-hot">
              <div id="tabs">
            	<div class="title-pro-hot">
                	<ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#tab-pro-hot-1">Sản phẩm hot</a></li>
                        <li><a href="#tab-pro-hot-2">Sản phẩm khuyến mãi</a></li>
                        <li><a href="#tab-pro-hot-3">Sản phẩm mua nhiều</a></li>
                    </ul>
                </div><!--end title-pro-hot-->
                
               <div  id="myTabContent" class="tab-content">
               
                    <div id="tab-pro-hot-1">
                		<div  class="tab-pro-hot carousel slide" id="myCarousel">
                         <div class="button-pro-hot">
                            <ul>
                                <li class="button-pro-hot-left"><a data-slide="prev" href="#myCarousel" class="left "></a></li>
                                <li class="button-pro-hot-right"><a data-slide="next" href="#myCarousel" class="right "></a></li>
                            </ul>
                        </div><!--end button-pro-hot-->
                    
<?php $args = array( 'post_type' => 'product','showposts' => 10, 'product_cat' => 'san-pham-hot' ); $loop = new WP_Query( $args ); $i=0;?>
                   	<div class="carousel-inner jcouts"><ul id="spdienthoai" class="thumbnails jcarousel-skin-tango">
<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  $title = cut_string(get_the_title(),20,'...'); $i++;  ?>
       


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
    
  <?php endwhile; wp_reset_query(); ?> </ul>                            
                        </div><!--end carousel-inner-->
                        </div>
                    </div><!--end tab-pro-hot--> 
                    
                    <div  id="tab-pro-hot-2">
               			 <div  class="tab-pro-hot carousel slide" id="myCarousel2">
                         <div class="button-pro-hot">
                            <ul>
                                <li class="button-pro-hot-left"><a data-slide="prev" href="#myCarousel2" class="left "></a></li>
                                <li class="button-pro-hot-right"><a data-slide="next" href="#myCarousel2" class="right "></a></li>
                            </ul>
                 </div><!--end button-pro-hot-->
<?php 
// Get products on sale
global $wp_query, $woocommerce;
$product_ids_on_sale = woocommerce_get_product_ids_on_sale();
$product_ids_on_sale[] = 0;
$meta_query = $woocommerce->query->get_meta_query();
$args = array(
    		'posts_per_page' 	=> 10, // số sản phẩm hiển thị
    		'no_found_rows' => 1,
    		'post_status' 	=> 'publish',
    		'post_type' 	=> 'product',
    		'orderby' 		=> 'date',
    		'order' 		=> 'ASC',
    		'meta_query' 	=> $meta_query,
    		'post__in'		=> $product_ids_on_sale
    	);

$loop = new WP_Query( $args ); $i=0;?>
                   	<div class="carousel-inner">
<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  $title = cut_string(get_the_title(),20,'...'); $i++;  ?>
            <?php include("look.php");?>               
<?php endwhile; wp_reset_query(); ?>                            
                        </div><!--end carousel-inner-->
                        </div>
                     </div><!--end tab-pro-hot-->
                
                    <div id="tab-pro-hot-3">
                  		 <div  class="tab-pro-hot carousel slide" id="myCarousel3">
                         <div class="button-pro-hot">
                            <ul>
                                <li class="button-pro-hot-left"><a data-slide="prev" href="#myCarousel3" class="left "></a></li>
                                <li class="button-pro-hot-right"><a data-slide="next" href="#myCarousel3" class="right "></a></li>
                            </ul>
                        </div><!--end button-pro-hot-->
                    
     <?php $args = array( 'post_type' => 'product','showposts' => 10, 'product_cat' => 'san-pham-mua-nhieu' ); $loop = new WP_Query( $args ); $i=0;?>
                   	<div class="carousel-inner">
<?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  $title = cut_string(get_the_title(),20,'...'); $i++;  ?>
            <?php include("look.php");?>               
<?php endwhile; wp_reset_query(); ?>                            
                        </div><!--end carousel-inner-->
                        </div>
                   </div><!--end tab-pro-hot-->
                
                </div><!--end tab-content-->
                
            </div>
  <!--end pro-hot-->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
$(function() {
$( "#tabs" ).tabs();
});
</script>
  
  
  <!--------- smatphone ------------->
  <div class="pro-hot">
            
            	<div class="title-pro-hot">
                	<ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="http://dienthoai24.vn/dien-thoai-chinh-hang" title="Smatphone chính hãng">Smatphone</a></li>
                        <li><?php $name_1 = get_option('nt_name_1');  if($name_1 != '') { ?>
<a title="<?php echo $name_1; ?>" href="<?php echo $url_1 = get_option('nt_link_1') ?>"><?php echo $name_1; ?></a>
<?php } ?></li>
                        <li><?php $name_2 = get_option('nt_name_2');  if($name_2 != '') { ?>
<a title="<?php echo $name_2; ?>" href="<?php echo $url_2 = get_option('nt_link_2') ?>"><?php echo $name_2; ?></a>
<?php } ?></li>
                         <li><?php $name_3 = get_option('nt_name_3');  if($name_3 != '') { ?>
<a title="<?php echo $name_3; ?>" href="<?php echo $url_3 = get_option('nt_link_3') ?>"><?php echo $name_3; ?></a>
<?php } ?></li>

  <li><?php $name_4 = get_option('nt_name_4');  if($name_4 != '') { ?>
<a title="<?php echo $name_4; ?>" href="<?php echo $url_4 = get_option('nt_link_4') ?>"><?php echo $name_4; ?></a>
<?php } ?></li> <p class="viewall"><span></span><a href="http://dienthoai24.vn/dien-thoai-chinh-hang" title="Xem tất cả Điện thoại chính hãng" rel="nofollow">Xem tất cả</a></p>
                    </ul>
                </div><!--end title-pro-hot-->
                

                
                <div id="myTabContent" class="tab-content">
                
<div class="tab-pro-hot carousel slide" id="myCarousel">
<?php
 $args = array( 'post_type' => 'product','showposts' => 5, 'product_cat' => 'dien-thoai-chinh-hang' ); $loop = new WP_Query( $args ); $i=0;?>
 
<div class="carousel-inner">
<div class="content-pro-hot item active"> 
<ul class="thumbnails">
 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  $title = cut_string(get_the_title(),20,'...'); $i++;  ?>
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
<?php endwhile; wp_reset_query(); ?>   
</ul>
</div>                             
                        </div><!--end carousel-inner-->

                    </div><!--end tab-pro-hot-->
                
                </div><!--end tab-content-->
                
            </div>
  <!--end pro-hot-->
  <!--------- Phu kiên điện thoai ------------->
  <div class="pro-hot">
            
            	<div class="title-pro-hot">
                	<ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="http://dienthoai24.vn/phu-kien" title="phụ kiện điện thoại">Phụ kiện</a></li>
                        <li><?php $name_5 = get_option('nt_name_5');  if($name_5 != '') { ?>
<a title="<?php echo $name_5; ?>" href="<?php echo $url_5 = get_option('nt_link_5') ?>"><?php echo $name_5; ?></a>
<?php } ?></li>
                       <li><?php $name_6 = get_option('nt_name_6');  if($name_6 != '') { ?>
<a title="<?php echo $name_6; ?>" href="<?php echo $url_6 = get_option('nt_link_6') ?>"><?php echo $name_6; ?></a>
<?php } ?></li>

  <li><?php $name_7 = get_option('nt_name_7');  if($name_7 != '') { ?>
<a title="<?php echo $name_7; ?>" href="<?php echo $url_7 = get_option('nt_link_7') ?>"><?php echo $name_7; ?></a>
<?php } ?></li>

  <li><?php $name_8 = get_option('nt_name_8');  if($name_8 != '') { ?>
<a title="<?php echo $name_8; ?>" href="<?php echo $url_8 = get_option('nt_link_8') ?>"><?php echo $name_8; ?></a>
<?php } ?></li>
                        <p class="viewall"><span></span><a href="http://dienthoai24.vn/phu-kien" title="xem tất cả phụ kiện điện thoại" rel="nofollow">Xem tất cả</a></p>
                    </ul>
                </div><!--end title-pro-hot-->
                
                <div id="myTabContent" class="tab-content">
                
<div class="tab-pro-hot carousel slide" id="myCarousel">
<?php $args = array( 'post_type' => 'product','showposts' => 5, 'product_cat' => 'phu-kien' ); $loop = new WP_Query( $args ); $i=0;?>
                   	<div class="carousel-inner">
<div class="content-pro-hot item active"> 
<ul class="thumbnails">
 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  $title = cut_string(get_the_title(),20,'...'); $i++;  ?>
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
<?php endwhile; wp_reset_query(); ?>   
</ul>
</div>                             
                        </div><!--end carousel-inner-->

                    </div><!--end tab-pro-hot-->
                
                </div><!--end tab-content-->
                
            </div>
  <!--------- Tin tức ------------->
  <div class="newpro">
  <h2>Tin tức</h2>
  <div class="newslefft">
  
   <?php query_posts("showposts=8"); $dempost=0;  $daidai = 255;$rongrong = 145; while ( have_posts() ) : the_post(); $dempost++;?>
   <?php if($dempost == 1 ) { echo '<div class="tintrai">' ?>
 
      <?php $url_thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 	if ($url_thumbnail !="")  { ?>
<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php bloginfo('template_url');?>/thumb.php?src=<?php echo$url_thumbnail;?>&w=<?php echo $daidai;?>&h=<?php echo $rongrong;?>&zc=1&q=95" alt="<?php the_title_attribute(); ?>" width="<?php echo $daidai;?>" height="<?php echo $rongrong;?>" class="post_thumbnail" /></a>
<?php } else { ?>
<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><img src="<?php bloginfo('template_url');?>/thumb.php?src=<?php echo show_thumb_image() ?>&w=<?php echo $daidai;?>&h=<?php echo $rongrong;?>&zc=1&q=95" alt="<?php the_title_attribute(); ?>" width="<?php echo $daidai;?>" height="<?php echo $rongrong;?>" class="post_thumbnail" /></a>
<?php } ?>
     <h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
     <p><?php  echo $excerpt = cut_string(get_the_excerpt(),150,'...');  ?></p>
     <a class="xptie" href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_title(); ?>">Xem tiếp</a>
      
       <?php  echo '</div>';?>
	   <?php } if($dempost == 1 ) { echo '<div class="tinphai">';} else {?>
       	<li><a  href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
       <?php  } ?>
  <?php endwhile; wp_reset_query();?>
</div>
  </div><!-- end newslefft --->
  
  <div class="faceright">
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=435153163498257";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like-box" data-href="https://www.facebook.com/congtyminhtan" data-width="330" data-height="248" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>
  </div>
  </div><!-- end newpro --->
  
            
        </div><!--end wrap-customer-->
    </div><!--end customer-->
    

<?php get_footer(); ?>