<?php get_header();?>
 <div id="customer">
    	<div id="wrap-customer" class="row-fluid">
<div class="container404">

      <div class="pos-link">
                	<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?> 
                </div><!--end pos-link-->

<h2 style=""><samp class="icon-warning-sign"></samp>Yêu cầu của bạn hệ thống chưa kịp xử lí hoặc không có nội dung !</h2>

<p>Bạn vui lòng bấm vào <a title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>">đây</a> để quay về trang chủ.</p>

   </div><!--end wrap-customer-->
    </div><!--end customer-->
    
<?php get_footer(); ?>
