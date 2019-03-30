<?php global $data; $off_chuyenmucthunhat = $data['off_chuyenmucthunhat'];  if( $off_chuyenmucthunhat != 0) {?>
<div class="module_tintuc_khachhang">
<div class="col-xs-12">
<h4 class="tieudenewsf">
<a title="DANH MỤC TIN TỨC" href="#"><span class="glyphicon glyphicon-credit-card"></span>DANH MỤC TIN TỨC</a>
</h4>
<div class="row">
<div class="col-xs-6 col-md-3 motsanpham">  
<a href="https://minhtan.com.vn/bao-chi-noi-ve-minh-tan/" title="BÁO CHÍ NÓI GÌ VỀ MINH TÂN"><img width="278" height="180" src="https://minhtan.com.vn/wp-content/uploads/2019/01/bao-chi-noi-ve-minh-tan.jpg" class="attachment-thumb-archive size-thumb-archive wp-post-image img-responsive" alt="BÁO CHÍ NÓI GÌ VỀ MINH TÂN"></a>
 </div>
	<div class="col-xs-6 col-md-3 motsanpham">  
<a href="https://minhtan.com.vn/tin-tuc-mua-hang/" title="TIN TỨC MUA HÀNG"><img width="278" height="180" src="https://minhtan.com.vn/wp-content/uploads/2019/01/tin-tuc-mua-hang.jpg" class="attachment-thumb-archive size-thumb-archive wp-post-image img-responsive" alt="TIN TỨC MUA HÀNG"></a>
 </div>
	<div class="col-xs-6 col-md-3 motsanpham">  
<a href="https://minhtan.com.vn/tin-tuc-cong-nghe/" title="TIN TỨC CÔNG NGHỆ"><img width="278" height="180" src="https://minhtan.com.vn/wp-content/uploads/2019/01/tin-tuc-cong-nghe.jpg" class="attachment-thumb-archive size-thumb-archive wp-post-image img-responsive" alt="TIN TỨC CÔNG NGHỆ"></a>
 </div>
	<div class="col-xs-6 col-md-3 motsanpham">  
<a href="https://minhtan.com.vn/ho-tro-dong-ho-dinh-vi/" title="HỖ TRỢ ĐỒNG HỒ ĐỊNH VỊ"><img width="278" height="180" src="https://minhtan.com.vn/wp-content/uploads/2019/01/ho-tro-dong-ho-dinh-vi.jpg" class="attachment-thumb-archive size-thumb-archive wp-post-image img-responsive" alt="HỖ TRỢ ĐỒNG HỒ ĐỊNH VỊ"></a>
 </div>
</div> <!-- end row -->
</div>
</div> <!-- end container -->
<?php } ?>
<div class="module_newfooter">
<div class="row">
<?php
global $data;
$category_id2 = get_cat_ID( $data['footer2_category'] );
$category_link2 = get_category_link( $category_id2 );
$args = array(
///'category_name'         => $slug, // ID or slug category can hien thi
'cat' => $category_id2,
'post_type'        => 'post', // Kiểu dữ liệu
'showposts' => 4,  // Số sản phẩm	 
); 
$dem =0;  $rongrong=150 ; $daidai =308 ; $width =120 ; $height=100;
$my_query = new WP_Query( $args ); 
?>

<?php if ( $my_query->have_posts() ):?>


  <div class="col-xs-12 col-md-12">
 <div class="row">
 <h4 class="tieudenewsf">
<a title="<?php echo $data['footer2_category']; ?>" href="<?php echo esc_url( $category_link2 ); ?>"><span class="glyphicon glyphicon-credit-card"></span><?php echo $data['footer2_category']; ?></a>
<a rel="nofollow" class="title_link_no" title="<?php echo $data['footer2_category']; ?>" href="<?php echo esc_url( $category_link2 ); ?>"><span class="glyphicon glyphicon-forward"></span>Xem tất cả</a>
</h4>
<div class="col-md-5">
<?php while ( $my_query->have_posts() ) : $my_query->the_post();  $dem++;?>

<?php if ($dem ==1) { ?>

 <?php
 $image  = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));?> 
 <?php if($image !="") {?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumb-archive_311'); ?></a>
 <?php } else { ?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
 <img width="311" height="200" src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive" />
 </a>


<?php } ?>
<div class="luotxem">
<p>
<span class="glyphicon glyphicon-eye-close"></span>
<?php if(function_exists('the_views')) { the_views(); } ?>
</p>
<p>
<span class="glyphicon glyphicon-user"></span>
<?php _e('Viết bởi: ','Tân Bùi');?> <?php the_author_posts_link(); ?>
</p>
<p>
<span class="glyphicon glyphicon-calendar"></span>
Ngày: <?php the_time(__('d/m/Y','themetiger')) ?> 
</p>
</div>
<h3><small><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></small></h3>
<p><?php echo $excerpt = cut_string(get_the_excerpt(),200,'...'); ?></p>

<?php if ($dem ==1) { echo '</div><div class="col-md-7 benphainhe">';} ?>  <!-- end col-md-5 -->

<?php } if ($dem ==2) { ?>

 <?php
 $image  = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));?> 
 <?php if($image !="") {?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumb-archive_180'); ?></a>
 <?php } else { ?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
 <img width="180" height="90" src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive" />
 </a>
 <?php } ?>

<h3><small><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></small></h3>
<p><?php echo $excerpt = cut_string(get_the_excerpt(),200,'...'); ?></p>
<div class="luotxem">
<p>
<span class="glyphicon glyphicon-eye-close"></span>
<?php if(function_exists('the_views')) { the_views(); } ?>
</p>
<p>
<span class="glyphicon glyphicon-user"></span>
<?php _e('Viết bởi: ','Tân Bùi');?> <?php the_author_posts_link(); ?>
</p>
<p>
<span class="glyphicon glyphicon-calendar"></span>
Ngày viết : <?php the_time(__('d/m/Y','themetiger')) ?> 
</p>
</div>
<?php } if ($dem >2) { ?>
 <h3><small><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><span class="glyphicon glyphicon-play-circle"></span><?php the_title(); ?></a></small></h3>
 <p><?php echo $excerpt = cut_string(get_the_excerpt(),100,'...'); ?></p>
 
<?php } endwhile; ?>
 </div><!-- end row -->
  </div><!-- end col-md-7 -->
<?php endif; ?>
<?php wp_reset_query();?>  
  </div><!-- end col-md-12 -->  
</div><!-- end row -->
</div> <!-- end container -->
<div class="footer" id="footer">
<div class="row">
 <div class="col-xs-12 col-md-4 cotfooter">
  <?php global $data; echo $data['diachi_website']; ?> 
 </div>
  
  <div class="col-xs-12 col-md-8">
  <div class="col-xs-12 col-md-4 cotfooter">
   <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Widget footer 1')) : else : ?>
  <?php endif; ?>
  </div>
  <div class="col-xs-12 col-md-4 cotfooter">
  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Widget footer 2')) : else : ?>
  <?php endif; ?>
  </div>
  <div class="col-xs-12 col-md-4 cotfooter">
  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Widget footer 3')) : else : ?>
  <?php endif; ?>
  </div>  
  </div>
</div><!-- end row -->
</div> <!-- end container -->

<div class="footer_bq" id="banquyen">
<div class="row">
<span style="font-size:12px; float:left">
© Copyright 2015 by MINHTAN.COM.VN - Nhà phân phối hàng đầu các sản phẩm công nghệ thông minh như <strong>Android Tv Box</strong>, <strong>Đồng Hồ Thông Minh SmartWatch</strong>, <strong>Kính Thực Tế Ảo</strong> ... uy tín, chất lượng. All rights reserved.</span>
<?php global $data; $off_link = $data['off_link'];  if( $off_link != 0) {?>
<span style="font-size:12px; float:right">Thiết kế website <strong> bởi MINHTAN CO.,LTD </strong></span>
<?php } ?>
</div><!-- end row -->
</div> <!-- end container -->

<div class="callus">
    <i class="glyphicon glyphicon-earphone"></i> <a href="tel:<?php echo $data['hotline6_website'] ?>"><?php echo $data['hotline6_website'] ?></a>
</div>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- link to the JavaScript files (hoverIntent is optional) -->
<!-- if you use hoverIntent, use the updated r7 version (see FAQ) -->
<script src="<?php bloginfo('template_url'); ?>/js/hoverIntent.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/superfish.js"></script>
<!-- initialise Superfish -->
<script>
	jQuery(document).ready(function(){
		jQuery('ul#mainmenu_nhe').superfish({
			animation: {height:'show'},	// slide-down effect without fade-in
			delay:		 1200			// 1.2 second delay on mouseout
		});
	});
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/addclass.js"></script>
<?php wp_footer(); ?>
</body>
</html>