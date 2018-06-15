<?php get_header();?>
<div class="baiviet">
<div class="row">
  <div class="col-xs-12 col-sm-9">
  <div class="row conten_baiviet">
   <div style="margin-top:10px; float:left; width:100%">
   <?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?> 
   </div>
   <?php if (have_posts()) : ?>
   <?php $post = $posts[0]; ?>
 	  <?php if (is_category()) { ?>
		<h1 class="pagetitle"><?php single_cat_title(); ?></h1>
 	  <?php } elseif( is_tag() ) { ?>
		<h1 class="pagetitle"><?php single_tag_title(); ?></h1>
 	  <?php } elseif (is_day()) { ?>
		<h1 class="pagetitle"><?php _e('Archive for','themetiger');?> <?php the_time('F jS, Y'); ?></h1>
 	  <?php } elseif (is_month()) { ?>
		<h1 class="pagetitle"><?php _e('Archive for','themetiger');?> <?php the_time('F, Y'); ?></h1>
 	  <?php  } elseif (is_year()) { ?>
		<h1 class="pagetitle"><?php _e('Archive for','themetiger');?> <?php the_time('Y'); ?></h1>
	  <?php } elseif (is_author()) { ?>
		<h1 class="pagetitle"><?php _e('Tác gi','themetiger');?></h1>
 	  <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="pagetitle"><?php _e('Blog Archives','themetiger');?></h1>
 	  <?php } elseif (is_search()){ ?>
	  <h1 class="pagetitle"><?php _e('Tìm kiếm','themetiger');?></h1>
	  <?php } ?>
 <?php $width = 275; $height = 150; while (have_posts()) : the_post(); ?>
 <div class="col-xs-12 noidung_bai_single_cat">
  <div class="row">
<div class="col-xs-12 col-sm-3">
<?php
 $image  = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));?> 
 <?php if($image !="") {?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumb-archive'); ?></a>
 <?php } else { ?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
 <img width="278" height="180" src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive" />
 </a>
 <?php } ?>


 </div> <!-- col-xs-12 col-sm-4 col-md-3 -->
 <div class="col-xs-12 col-sm-9">
  <div class="text-content-news">
  <h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
  <div class="luotxem">
<p>
<span class="glyphicon glyphicon-eye-close"></span>
<?php if(function_exists('the_views')) { the_views(); } ?>
</p>
<p>
<span class="glyphicon glyphicon-user"></span>
<?php _e('Viết bởi: ','Ecosoft');?> <?php the_author_posts_link(); ?>
</p>
<p>
<span class="glyphicon glyphicon-calendar"></span>
Ngày: <?php the_time(__('d/m/Y','themetiger')) ?> 
</p>
</div>
 <?php the_excerpt(); ?>
<h6 class="label label-danger"><a style="color:#FFF" href="<?php the_permalink() ?>" rel="nofollow" title="<?php the_title_attribute(); ?>"> Xem tiếp</a></h6>
</div><!--end text-content-news-->
 </div> <!-- col-xs-12 col-sm-8 col-md-8 -->
</div><!--end row-->  
 </div> <!-- col-xs-12 col-sm-12 col-md-12 -->
 <div class="clear"></div>
   <?php endwhile; ?>
   <div class="row">
    <?php wp_pagenavi(); ?>
 </div><!--end row-->
 <?php else : ?>
  <div class="row">
 <?php
	if ( is_category() ) { // If this is a category archive
			printf("<h2 class='generic'>".__('Bài viết đang xây dựng nội dung')."</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2 class='generic'>".__('Bài viết đang xây dựng nội dung','Ecosoft')."</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='generic'>".__('Bài viết đang xây dựng nội dung','Ecosoft')."</h2>", $userdata->display_name);
		} else {
			echo('<h2 class="generic">'.__('No posts found.','Ecosoft').'</h2><p class="center">'.__('Sorry, but you are looking for something that isn\'t here.','themetiger').'</p>');
		}
	?>
     </div><!--end row-->
 <?php endif; ?>
 </div> <!-- end conten_baiviet-->
  </div> <!-- col-xs-12 col-sm-6 col-md-3 -->
  <div id="slidebar" class="col-xs-12 col-sm-3 filter-cost">
    <?php
		do_action('woocommerce_sidebar');
	?>
    </div> <!-- col-xs-12 col-sm-6 col-md-3 -->
</div>
<?php get_footer(); ?>
