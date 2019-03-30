<?php get_header('shop'); ?>
<div class="clearfix"></div>
<div class="chitietsanphamfull">
    <div class="row">
        <div  itemscope itemtype="http://schema.org/Product" >
            <?php do_action('woocommerce_before_main_content'); ?>
            <?php while (have_posts()) : the_post();
                global $post, $woocommerce, $product; ?>
                <!-- Modal -->
                <div style="padding-top:105px" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">THÔNG TIN KHÁCH HÀNG</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6 hidden-xs hidden-sm">
                                        <div class="cartsap">
                                            <?php $image = get_the_post_thumbnail($post->ID, apply_filters('single_product_large_thumbnail_size', 'shop_single')); ?> 
                                            <?php if ($image != "") { ?>
                                                <?php the_post_thumbnail('thumb-home-product'); ?>
                                            <?php } else { ?>
                                                <img src="<?php echo show_thumb_image() ?>" alt="<?php the_title_attribute() ?>" class="img-responsive center-block" />
                                            <?php } ?>

                                            <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title_attribute() ?></a></h2>
                                            <div class="giasanph">
                                                <p class="price"><?php echo $product->get_price_html(); ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6">
                                        <div class="phandathang">
                                            <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"     
                                                    onload="if (submitted) {
                                                                window.location = 'https://minhtan.com.vn/cam-on-mua-hang/';
                                                            }"></iframe>                                           
                                            <form action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSdjb_Q3QQU_UBtD4QdMD4MdEGyYHAgZXVaz5JxwbnkH9Z5H6A/formResponse" target="hidden_iframe" method="POST" id="mG61Hd" onsubmit="submitted = true;">                        
                                                <div class="clearfix"></div>

                                                <input style="margin-bottom:10px"  style="margin-bottom:6px" placeholder="Họ tên" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Họ tên" aria-describedby="i.desc.1047691090 i.err.1047691090" name="entry.2033179539" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">

                                                <div class="clearfix"></div>

                                                <input style="margin-bottom:10px"  placeholder="Đia chỉ nhận hàng" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Địa chỉ nhận hàng" aria-describedby="i.desc.101450146 i.err.101450146" name="entry.1297493807" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">

                                                <div class="clearfix"></div>

                                                <input style="margin-bottom:10px"  placeholder="Điện thoại" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Số điện thoại" aria-describedby="i.desc.1519440672 i.err.1519440672" name="entry.666266520" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">

                                                <div class="clearfix"></div>

                                                <textarea style="height:80px; margin-bottom:10px" placeholder="Ghi chú" class="form-control quantumWizTextinputPapertextareaInput exportTextarea" jsname="YPqjbf" data-rows="1" tabindex="0" aria-label="Ghi chú đơn hàng" jscontroller="gZjhIf" jsaction="input:Lg5SV;ti6hGc:XMgOHc;rcuQ6b:WYd;" name="entry.338937674" dir="auto" data-initial-dir="auto" data-initial-value=""></textarea>

                                                <div class="clearfix"></div>

                                                <input style=" display:none"  class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Url đặt hàng" aria-describedby="i.desc.1631657900 i.err.1631657900" name="entry.2054550271" value="<?php the_permalink() ?>" dir="auto" data-initial-dir="auto" data-initial-value="" type="url">

                                                <div class="clearfix"></div>

                                                <button class="btn btn-danger" type="submit">GỬI ĐƠN HÀNG</button>
                                                <input name="fvv" value="1" type="hidden">
                                                <input name="draftResponse" value="[null,null,&quot;-8738566705220981525&quot;]" type="hidden">
                                                <input name="pageHistory" value="0" type="hidden">
                                                <input name="fbzx" value="-8738566705220981525" type="hidden">
                                            </form>
                                            <p style="MARGIN-TOP: 15PX;">CHÚNG TÔI GIAO HÀNG TOÀN QUỐC CÓ TÍNH PHÍ THEO KHU VỰC</p>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>


    <?php do_action('woocommerce_before_single_product');
    if (post_password_required()) {
        echo get_the_password_form();
        return;
    } ?>
                <div class="clearfix"></div>


                <div class="row chitietsanpham_full">
                    <div class="col-xs-12 col-sm-6 col-md-4">

                        <?php
                        /**
                         * Single Product Image
                         *
                         * @author 		WooThemes
                         * @package 	WooCommerce/Templates
                         * @version     2.0.14
                         */
                        if (!defined('ABSPATH'))
                            exit; // Exit if accessed directly
                        ?>   

                        <div class="images000">

                            <?php
                            /**
                             * woocommerce_before_single_product_summary hook.
                             *
                             * @hooked woocommerce_show_product_sale_flash - 10
                             * @hooked woocommerce_show_product_images - 20
                             */
                            do_action('woocommerce_before_single_product_summary');
                            ?>

                        </div>
                        <style type="text/css">
							#content > div.row.chitietsanpham_full > div.col-xs-12.col-sm-6.col-md-4 > div > div > ol
							{
								display: none;
							}
                            .woocommerce span.onsale { margin-top: 45px;  margin-left: 25px;}
                            .woocommerce-product-gallery.images { border:none !important; box-shadow:none !important; border-radius:0 !important}

                            .woocommerce-product-gallery .thumbnail,.woocommerce-product-gallery .img-thumbnail  { border:none !important; box-shadow:none !important; border-radius:0 !important}
                        </style>
						<div class="giatien" style="margin-bottom: 10px;">
		<b> <?php esc_html_e( 'Giá tiền: ', 'woocommerce' ); ?></b>
		 <span class="giatien"><?php echo $product->get_price_html(); ?></span>
	</div>
						<div class="hrviet"></div>													
<div class="kk-rating">
	<?php 

		$obj = get_queried_object();
		//echo '<pre>', var_dump($obj) , '</pre>' ;
		if(function_exists("kk_star_ratings")) : echo kk_star_ratings($obj->ID); endif; 

	?>
							</div>



                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-5">
                        <h1 itemprop="name"><strong><?php the_title() ?></strong></h1>						
                        <div class="luotxem">
                            <p>
                                <span class="glyphicon glyphicon-eye-close"></span>
    <?php if (function_exists('the_views')) {
        the_views();
    } ?>
                            </p>

                            <p>
                                <span class="glyphicon glyphicon-calendar"></span>
                                Ngày: <?php the_time(__('d/m/Y', 'themetiger')) ?> 
                            </p>
                        </div>

<div class="wrap_something">
	<?php $product->list_attributes();?>		
	<div class="product-short-description">
		<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
	</div>	
</div> 

                  
                        <div class="giohang row">



                            <?php
                            if (!defined('ABSPATH')) {
                                exit;
                            }

                            global $product;

                            if (!$product->is_purchasable()) {
                                return;
                            }

                            echo wc_get_stock_html($product);

                            if ($product->is_in_stock()) :
                                ?>

                                            <?php do_action('woocommerce_before_add_to_cart_form'); ?>

                                <form class="cart" method="post" enctype='multipart/form-data'>                                    
                                    <button type="button" class="single_add_to_cart_button" data-toggle="modal" data-target="#myModal">		
        <?php global $data;
        echo $data['Button_buynow_website']; ?>
                                    </button>





        <?php
        /**
         * @since 2.1.0.
         */
        do_action('woocommerce_after_add_to_cart_button');
        ?>
                                </form>

        <?php do_action('woocommerce_after_add_to_cart_form'); ?>

    <?php endif; ?>
<div class="call_ngay">
	<div class="txt_call">ĐẶT HÀNG NHANH QUA ĐIỆN THOẠI</div>	 
	 <form action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSdjb_Q3QQU_UBtD4QdMD4MdEGyYHAgZXVaz5JxwbnkH9Z5H6A/formResponse" target="hidden_iframe" method="POST" id="mG61Hd" onsubmit="submitted = true;">
		 <input style="margin-bottom:10px"  style="margin-bottom:6px" placeholder="Họ tên" class="hoten quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Họ tên" aria-describedby="i.desc.1047691090 i.err.1047691090" name="entry.2033179539" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
		 <input style="display:none"  placeholder="Đia chỉ nhận hàng" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Địa chỉ nhận hàng" aria-describedby="i.desc.101450146 i.err.101450146" name="entry.1297493807" value="Gọi điện xác nhận lấy địa chỉ" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
		 <input style="margin-bottom:10px"  placeholder="Điện thoại" class="call_ngay quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Số điện thoại" aria-describedby="i.desc.1519440672 i.err.1519440672" name="entry.666266520" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
		 <textarea style="display:none" placeholder="Ghi chú" class="form-control quantumWizTextinputPapertextareaInput exportTextarea" jsname="YPqjbf" data-rows="1" tabindex="0" aria-label="Ghi chú đơn hàng" jscontroller="gZjhIf" jsaction="input:Lg5SV;ti6hGc:XMgOHc;rcuQ6b:WYd;" name="entry.338937674" dir="auto" data-initial-dir="auto" data-initial-value=""></textarea>
		 <input style="display:none"  class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Url đặt hàng" aria-describedby="i.desc.1631657900 i.err.1631657900" name="entry.2054550271" value="<?php the_permalink() ?>" dir="auto" data-initial-dir="auto" data-initial-value="" type="url">
		 <button class="btn btn-danger" type="submit">GỬI</button>
		 <input name="fvv" value="1" type="hidden">
		 <input name="draftResponse" value="[null,null,&quot;-8738566705220981525&quot;]" type="hidden">
		 <input name="pageHistory" value="0" type="hidden">
		 <input name="fbzx" value="-8738566705220981525" type="hidden">
	</form>
</div>
						</div> <!-- end gio hang -->                      
                    </div>
                    <div class="col-xs-12 col-md-3 lienhe_single_full" style="float: left;">
                        <div class="panel panel-default">                            <div class="panel-body">
                               
                                <div style="width:100%; float:left">                                    
                                   <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="recommend" data-show-faces="false" data-share="true"></div>
                                </div> 
                                <div class="hrviet"></div>  
							 	<span class="label label-success">Cam kết khi mua sản phẩm tại Minh Tân</span>                                  
                                <div class="camket" style="margin-top: 15px;">
    <?php global $data;
    $conten_camket = $data['conten_camket'];
    if ($conten_camket != "") {
        echo $conten_camket;
    } ?>
                                </div>
                                <div class="hrviet"></div>
                                <div class="hotlie">
										<p class="sft"><span class="glyphicon glyphicon-phone-alt" style="margin-bottom: 7px;"></span> Hotline: <a href="tel:0901850185" style="color: #e63433;font-weight: bold;">09 0185 0185</a></p>
                            <?php global $data;
                            $hotline3_website = $data['hotline3_website'];
                            if ($hotline3_website != "") { ?>
                                        <p class="sft"><span class="glyphicon glyphicon-earphone" style="margin-bottom: 7px;"></span><?php echo $hotline3_website; ?></p>
                            <?php } ?>
                            <?php global $data;
                            $hotline4_website = $data['hotline4_website'];
                            if ($hotline4_website != "") { ?>
                                        <p class="sft"><span class="glyphicon glyphicon-earphone" style="margin-bottom: 7px;"></span><?php echo $hotline4_website; ?></p>
                            <?php } ?>
                            <?php global $data;
                            $hotline5_website = $data['hotline5_website'];
                            if ($hotline5_website != "") { ?>
                                       <p class="sft"><span class="glyphicon glyphicon-earphone" style="margin-bottom: 7px;"></span><?php echo $hotline5_website; ?></p>
    <?php } ?>
									<p class="sft"><span class="glyphicon glyphicon-earphone" style="margin-bottom: 7px;"></span> Thanh Khê - ĐN: <a href="tel:0906686432" style="color: #e63433;font-weight: bold;">0906 686 432</a></p>
									<p class="sft"><span class="glyphicon glyphicon-phone-alt" style="margin-bottom: 7px;"></span> Hỗ Trợ Kỹ Thuật: <a href="tel:0933479012" style="color: #e63433;font-weight: bold;">0933 479 012</a></p>
									<p class="sft"><span class="glyphicon glyphicon-phone-alt" style="margin-bottom: 7px;"></span> For English: <a href="tel:0973771522" style="color: #e63433;font-weight: bold;">0973 711 522</a></p>									
                                </div>
                            </div>
                        </div>
                    </div>					
                </div>
                <div class="clearfix"></div>
                <div class="row thongtinchitesanpham">  
                    <div class="col-xs-12 col-sm-9">                      
                        <div class="row thongtinsinpp woocommerce">
    <?php // the_content();  ?>							
							

    <?php
    /**
     * woocommerce_after_single_product_summary hook.
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    do_action('woocommerce_after_single_product_summary');
							?>	
							 <div class="call_ngay" style="margin-bottom: 15px;margin-top: 10px;">
	<div class="txt_call">ĐẶT HÀNG NHANH QUA ĐIỆN THOẠI</div>	 
	 <form action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSdjb_Q3QQU_UBtD4QdMD4MdEGyYHAgZXVaz5JxwbnkH9Z5H6A/formResponse" target="hidden_iframe" method="POST" id="mG61Hd" onsubmit="submitted = true;">
		 <input style="margin-bottom:10px"  style="margin-bottom:6px" placeholder="Họ tên" class="hoten quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Họ tên" aria-describedby="i.desc.1047691090 i.err.1047691090" name="entry.2033179539" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
		 <input style="display:none"  placeholder="Đia chỉ nhận hàng" class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Địa chỉ nhận hàng" aria-describedby="i.desc.101450146 i.err.101450146" name="entry.1297493807" value="Gọi điện xác nhận lấy địa chỉ" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
		 <input style="margin-bottom:10px"  placeholder="Điện thoại" class="call_ngay quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Số điện thoại" aria-describedby="i.desc.1519440672 i.err.1519440672" name="entry.666266520" value="" required dir="auto" data-initial-dir="auto" data-initial-value="" type="text">
		 <textarea style="display:none" placeholder="Ghi chú" class="form-control quantumWizTextinputPapertextareaInput exportTextarea" jsname="YPqjbf" data-rows="1" tabindex="0" aria-label="Ghi chú đơn hàng" jscontroller="gZjhIf" jsaction="input:Lg5SV;ti6hGc:XMgOHc;rcuQ6b:WYd;" name="entry.338937674" dir="auto" data-initial-dir="auto" data-initial-value=""></textarea>
		 <input style="display:none"  class="form-control quantumWizTextinputPaperinputInput exportInput" jsname="YPqjbf" autocomplete="off" tabindex="0" aria-label="Url đặt hàng" aria-describedby="i.desc.1631657900 i.err.1631657900" name="entry.2054550271" value="<?php the_permalink() ?>" dir="auto" data-initial-dir="auto" data-initial-value="" type="url">
		 <button class="btn btn-danger" style="height: 28px;margin-left: 10px;" type="submit">GỬI</button>
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
	  </div>							
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
							<div class="panel panel-default">
                            <div class="binhlan" style="border-bottom: 1px solid #ddd;">SẢN PHẨM LIÊN QUAN</div>
                            <div class="panel-body">
                                <?php include_once(TEMPLATEPATH . '/woo_inc/woocommerce_sanphamlienquan.php'); ?>
                            </div>
							</div>						
						</div>
										<div id="slidebar" class="col-xs-12 col-md-3 filter-cost">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Single right product')) : else : ?>
    <?php endif; ?>
                    </div>  
             </div>
<?php endwhile; // end of the loop.  ?>
<?php do_action('woocommerce_after_main_content'); ?>
       </div>
    </div>
</div>
<?php get_footer('shop'); ?>