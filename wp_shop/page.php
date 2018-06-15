<?php get_header();?>
<div id="customer">
    	<div id="wrap-customer" class="row-fluid">
			<div class="news">
            	<div class="pos-link">
                	<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?> 
                </div><!--end pos-link-->
                
                <div class="content-news">
                 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                	<div id="post-<?php the_ID(); ?>"  class="content-news-left">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <div class="cacbuocdathang">
<div class="row">
  <div class="col-xs-12 col-sm-4 col-md-4 buocnhanh_1 buoc_nhanh">
  <div class="dhtrai">
  <span class="glyphicon glyphicon-shopping-cart"></span>
  </div>
  <div class="dathangphai">
  <p><strong>Bước 1</strong></p>
  <p class="buoc_la_buoc">Chọn sản phẩm</p>
  </div>
  <div class="clear"></div>
  <p class="ok_thi_ok"><span class="glyphicon glyphicon-record "></span></p>
  </div>
   <div class="col-xs-12 col-sm-4 col-md-4 buocnhanh_2 buoc_nhanh">
   <div class="dhtrai">
  <span class="glyphicon glyphicon-user"></span>
  </div>
  <div class="dathangphai">
  <p><strong>Bước 2</strong></p>
  <p class="buoc_la_buoc">Nhập thông tin thanh toán</p>
  </div>
   <div class="clear"></div>
  <p class="ok_thi_ok"><span class="glyphicon glyphicon-record "></span></p>
  </div>
   <div class="col-xs-12 col-sm-4 col-md-4 buocnhanh_3 buoc_nhanh">
   <div class="dhtrai">
  <span class="glyphicon glyphicon-check"></span>
  </div>
  <div class="dathangphai">
  <p><strong>Bước 3</strong></p>
  <p class="buoc_la_buoc">Xác nhận đơn hàng</p>
  </div>
   <div class="clear"></div>
  <p class="ok_thi_ok"><span class="glyphicon glyphicon-record "></span></p>
  </div>
 </div>
</div>
<div class="clear"></div>
                         <?php the_content(); ?>	
                    </div><!--end content-news-left-->
                   <?php endwhile; // end of the loop. ?>
                    
                </div><!--end content-news-->
                
            </div><!--end news-->
        </div><!--end wrap-customer-->
    </div><!--end customer-->
    
<?php get_footer(); ?>
