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
<div class="mau3" style="margin-top: 10px;">   
   <nav class="nav-single">
 <span class="nav-previous">
 <?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr; PREVIOUS', 'Previous post link', '' ) . '</span> %title' ); ?>
 </span>
 <span class="nav-next">
 <?php next_post_link( '%link', '<span class="meta-nav">' . _x( 'NEXT &rarr;', 'Next post link', '' ) . '</span> %title' ); ?>
 </span>
 </nav><!-- .nav-single -->
 </div>
	 <div class="call_ngay" style="margin-bottom: 15px; margin-top:15px;">
	<div class="txt_call">YÊU CẦU TƯ VẤN QUA ĐIỆN THOẠI</div>
		  <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"     
                                                    onload="if (submitted) {
                                                                window.location = 'https://minhtan.com.vn/yeu-cau-tu-van-thanh-cong/';
                                                            }"></iframe>        
	 <form action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSdjb_Q3QQU_UBtD4QdMD4MdEGyYHAgZXVaz5JxwbnkH9Z5H6A/formResponse" target="hidden_iframe" method="POST" id="mG61Hd" onsubmit="submitted = true;">
		 <input style="margin-bottom:10px"  style="margin-bottom:6px" placeholder="Họ tên" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Họ tên" aria-describedby="i.desc.1047691090 i.err.1047691090" name="entry.2033179539" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
		 <input style="display:none"  placeholder="Đia chỉ nhận hàng" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Địa chỉ nhận hàng" aria-describedby="i.desc.101450146 i.err.101450146" name="entry.1297493807" value="Tư vấn thông tin" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
		 <input style="margin-bottom:10px"  placeholder="Điện thoại" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Số điện thoại" aria-describedby="i.desc.1519440672 i.err.1519440672" name="entry.666266520" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
		 <textarea style="margin-bottom:10px" placeholder="Câu hỏi cần tư vấn" class="form-control quantumWizTextinputPapertextareaInput exportTextarea" jsname="YPqjbf" data-rows="1" tabindex="0" aria-label="Câu hỏi" jscontroller="gZjhIf" jsaction="input:Lg5SV;ti6hGc:XMgOHc;rcuQ6b:WYd;" name="entry.338937674" dir="auto" data-initial-dir="auto" data-initial-value=""></textarea>
		 <input style="display:none"  class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Url đặt hàng" aria-describedby="i.desc.1631657900 i.err.1631657900" name="entry.2054550271" value="<?php the_permalink() ?>" dir="auto" data-initial-dir="auto" data-initial-value="" type="url">
		 <button class="btn btn-danger" style="margin-left:8px;" type="submit">GỬI YÊU CẦU TƯ VẤN</button>
		 <input name="fvv" value="1" type="hidden">
		 <input name="draftResponse" value="[null,null,&quot;-8738566705220981525&quot;]" type="hidden">
		 <input name="pageHistory" value="0" type="hidden">
		 <input name="fbzx" value="-8738566705220981525" type="hidden">
	</form>
</div>
	 <div class="panel panel-default">
                            <div class="binhlan"><span class="glyphicon glyphicon-user"></span>BÁO CHÍ VÀ TRUYỀN HÌNH NÓI GÌ VỀ CHÚNG TÔI</div>								
                             <div class="panel-body binhliansanp">	
		  
	  <div class="col-xs-12 col-md-6">
<a href="https://minhtan.com.vn/bao-chi-noi-ve-minh-tan" title="Báo chí nói về đồng hồ minh tân"><img src="https://minhtan.com.vn/wp-content/uploads/2018/12/bao-chi-noi-ve-minh-tan-sao.jpg" class="attachment-thumb-archive size-thumb-archive wp-post-image img-responsive" alt="báo chí nói về đồng hồ minh tân"></a>  
		  </div>
		 <div class="col-xs-12 col-md-6">
	  <iframe width="100%" height="330" src="https://www.youtube.com/embed/gapTa87twKU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
								</div>
							</div>
   <div class="clear"></div>   
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
	  <?php comments_template(); ?>
	</div>   
</div>
</div>
 </div> 
 <div class="clear"></div>
 <div class="bicungchuyenmuc">
 <?php        
        $tags_ids = array();	 
        $tags = get_the_category(get_the_ID());
        foreach ($tags as $tag) {
            array_push($tags_ids, $tag->term_id);
        }
        
        $tags_query = new wp_query(array(            
            'category__in' => $tags_ids,
            'post__not_in' => array($post->ID),
            'posts_per_page' => 5, // Số bài viết bạn muốn hiển thị.            
        ));
        if( $tags_query->have_posts() ) 
        {
                echo '<h4 class="binhlan">BÀI VIẾT LIÊN QUAN</h4><ul>';
                while ($tags_query->have_posts())
                {
                        $tags_query->the_post();
                        ?>
        <li>
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
<?php _e('Viết bởi: ','Tân Bùi');?> <?php the_author_posts_link(); ?>
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
        </li>
                        <?php
                }
                echo '</ul>';
        }
?>


 </div> <!-- col-xs-12 col-sm-12 col-md-12 -->
  <?php endwhile; ?> 
  </div> <!-- col-xs-12 col-sm-6 col-md-3 -->
  <div id="slidebar" class="col-xs-12 col-sm-3 filter-cost">
    <?php
		do_action('woocommerce_sidebar');
	?>
    </div> <!-- col-xs-12 col-sm-6 col-md-3 -->
</div>
<?php get_footer(); ?>
