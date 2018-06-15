<?php
$categories = get_the_category($post->ID);
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'showposts' => 8,  
'post__not_in'			=> array($post->id)
);
   $news_posts = new WP_Query($args);
?>

<?php if($news_posts->have_posts()) : ?>
<div class="title-news-detail-rel">
								<span>CÁC TIN LIÊN QUAN</span>
</div><!--end .title-news-detail-rel-->
	<div class="cont-news-detail-rel">
		<div class="row">
	  		 <div class="news-detail-rel hidden-xs hidden-sm">
   <?php while($news_posts->have_posts()) : $news_posts->the_post() ?>
     <div class="list-news-detail-rel col-xs-12 col-md-2">
 <?php
 $image  = get_the_post_thumbnail( $post->ID, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ));?> 
 <?php if($image !="") {?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('thumb-archive'); ?></a>
 <?php } else { ?>
 <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
 <img width="150" height="90" src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive" />
 </a>
 <?php } ?>
 <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a></h2>
	</div><!--end .list-news-detail-rel-->
   <?php endwhile ?>
			</div><!--end .news-detail-rel-->
		</div>
	</div>	<!--end .cont-news-detail-rel-->
<?php endif ?>