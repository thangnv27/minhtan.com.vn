<?php get_header();?>
<div class="baiviet">
<div class="row">
  <div class="col-xs-12 col-sm-9">
  <div class="row">
   <div style="margin-top:10px; float:left; width:100%">
   <?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?> 
   </div>
  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
 <div class="col-xs-12 conten_baiviet">
   <h1 itemprop="name"><strong><?php the_title() ?></strong></h1>
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
   <?php the_content(); ?>	
   <div class="clear"></div>
   <div class="col-xs-12">

<div class="danhgiachiase">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=435153163498257";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>

<!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'vi'}
</script>

<!-- Đặt thẻ này vào nơi bạn muốn Nút +1 kết xuất. -->
<div class="g-plusone" data-size="medium"></div>
</div> 
  </div>
 <div class="panel panel-default">
<div class="binhlan"><span class="glyphicon glyphicon-user"></span>NHẬN XÉT BÀI VIẾT</div>

  <div class="panel-body binhliansanp">
<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="20" width="100%" data-colorscheme="light" data-version="v2.3"></div>
  </div>
</div>
 </div> 
 <div class="clear"></div>
 <div class="bicungchuyenmuc">
 <?php
	$categories = get_the_category($post->ID);
	if ($categories) 
	{
		$category_ids = array();
		foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

		$args=array(
		'category__in' => $category_ids,
		'post__not_in' => array($post->ID),
		'showposts'=>8, // Số bài viết bạn muốn hiển thị.
		'ignore_sticky_posts'=>1
		);
		$my_query = new wp_query($args);
		if( $my_query->have_posts() ) 
		{
			echo '<h3>Bài cùng chuyên mục</h3><ul>';
			while ($my_query->have_posts())
			{
				$my_query->the_post();
				?>
                <li>
            <div class="row">
<div class="col-xs-12 col-sm-2">
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
 <div class="col-xs-12 col-sm-10">
  <div class="text-content-news">
  <h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
 <?php the_excerpt(); ?>
</div><!--end text-content-news-->
 </div> <!-- col-xs-12 col-sm-8 col-md-8 -->
</div><!--end row-->  
                </li>
				<?php
			}
			echo '</ul>';
		}
	}
        
        $tags_ids = array();
        $tags = get_the_tags($post->ID);
        foreach ($tags as $tag) {
            array_push($tags_ids, $tag->term_id);
        }
        
        $tags_query = new wp_query(array(
            'post_type' => 'post',
            'tag__in' => $tags_ids,
            'post__not_in' => array($post->ID),
            'showposts'=>8, // Số bài viết bạn muốn hiển thị.
            'ignore_sticky_posts'=>1
        ));
        if( $tags_query->have_posts() ) 
        {
                echo '<h3>Bài cùng Tag</h3><ul>';
                while ($tags_query->have_posts())
                {
                        $tags_query->the_post();
                        ?>
        <li>
    <div class="row">
<div class="col-xs-12 col-sm-2">
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
<div class="col-xs-12 col-sm-10">
<div class="text-content-news">
<h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
<?php the_excerpt(); ?>
</div><!--end text-content-news-->
</div> <!-- col-xs-12 col-sm-8 col-md-8 -->
</div><!--end row-->  
        </li>
                        <?php
                }
                echo '</ul>';
        }
?>


 </div> <!-- col-xs-12 col-sm-12 col-md-12 -->
  <?php endwhile; ?>
 </div> <!-- end conten_baiviet-->
  </div> <!-- col-xs-12 col-sm-6 col-md-3 -->
  <div id="slidebar" class="col-xs-12 col-sm-3 filter-cost">
    <?php
		do_action('woocommerce_sidebar');
	?>
    </div> <!-- col-xs-12 col-sm-6 col-md-3 -->
</div>
<?php get_footer(); ?>
