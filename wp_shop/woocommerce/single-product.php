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
                                            <h5>Thông tin nhận hàng</h5>
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
                                                <input name="draftResponse" value="[null,null,&quot;-8738566705220981525&quot;]
                                                       " type="hidden">
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
                            .woocommerce span.onsale { display:none}
                            .woocommerce-product-gallery.images { border:none !important; box-shadow:none !important; border-radius:0 !important}

                            .woocommerce-product-gallery .thumbnail,.woocommerce-product-gallery .img-thumbnail  { border:none !important; box-shadow:none !important; border-radius:0 !important}
                        </style>




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

                        <p style="font-size:12px; color:#1584d8; font-family:Arial, Helvetica, sans-serif; font-weight: bold;"> <span><?php
    $availability = $product->get_availability();
    if (!$availability['availability']) {
        echo "<span class='glyphicon glyphicon-edit'></span> Tình trạng : Còn Hàng";
    } else {
        echo "Hết Hàng";
    }
    ?></span></p>

                        <div itemprop="description" class="description">
                            <p class="tomtat"><b>Thông tin sản phẩm</b></p>
                            <?php echo apply_filters('woocommerce_short_description', $post->post_excerpt) ?>
                        </div>

                        <div class="giasanph" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <p itemprop="price" class="price"><?php echo $product->get_price_html(); ?></p>
                            <meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />

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
                                    <div class="row">
                                        <div class="col-xs-3">
                                            Số lượng
                                        </div>
                                        <div class="col-xs-9">
                                            <?php
                                            /**
                                             * @since 2.1.0.
                                             */
                                            do_action('woocommerce_before_add_to_cart_button');

                                            /**
                                             * @since 3.0.0.
                                             */
                                            do_action('woocommerce_before_add_to_cart_quantity');

                                            woocommerce_quantity_input(array(
                                                'min_value' => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
                                                'max_value' => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
                                                'input_value' => isset($_POST['quantity']) ? wc_stock_amount($_POST['quantity']) : $product->get_min_purchase_quantity(),
                                            ));

                                            /**
                                             * @since 3.0.0.
                                             */
                                            // do_action( 'woocommerce_after_add_to_cart_quantity' );
                                            ?>

                                        </div>
                                    </div>
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

                            <a title="Hệ thống cửa hàng" href="https://minhtan.com.vn/he-thong-cua-hang/"><span style="
                                                                                                                background: #1584d8;
                                                                                                                border: 0;
                                                                                                                border-radius: 5px;
                                                                                                                box-shadow: 0 -3px 0 0 #1584d8 inset;
                                                                                                                color: #fff;
                                                                                                                display: block;
                                                                                                                font-size: 16px;
                                                                                                                font-weight: 700;
                                                                                                                margin-bottom: 14px;
                                                                                                                padding: 18px 0;
                                                                                                                text-align: center;
                                                                                                                text-transform: uppercase;
                                                                                                                width: 100%;
                                                                                                                height: 58px;
                                                                                                                ">HỆ THỐNG CỬA HÀNG TRÊN TOÀN QUỐC</span></a>
                        </div> <!-- end gio hang -->



                        <!-- Button trigger modal -->
                      <!--<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button single_add_vang" >-->
    <?php //global $data; echo $data['Button_by_website'];  ?>

                        <!--</button>-->	
                    </div>
                    <div class="col-xs-12 col-md-3 lienhe_single_full" style="float: left;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <span class="label label-success">Like và share giảm giá thêm 2%</span>  
                                <div class="hrviet"></div>
                                <div style="width:100%; float:left">
                                    <div id="fb-root"></div>
                                    <script>(function (d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id))
                                                return;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=1848244738784567&version=v2.0";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="recommend" data-show-faces="false" data-share="true"></div>
                                    <script src="https://apis.google.com/js/platform.js" async defer>
                                        {
                                            lang: 'vi'
                                        }
                                    </script>

                                    <div class="g-plusone" data-size="medium"></div>
                                </div> 
                                <div class="hrviet"></div>   
                                <div class="camket">
    <?php global $data;
    $conten_camket = $data['conten_camket'];
    if ($conten_camket != "") {
        echo $conten_camket;
    } ?>
                                </div>
                                <div class="hrviet"></div>
                                <div class="hotlie">
                            <?php global $data;
                            $hotline3_website = $data['hotline3_website'];
                            if ($hotline3_website != "") { ?>
                                        <p class="sft"><span class="glyphicon glyphicon-phone-alt" style="margin-bottom: 7px;"></span><?php echo $hotline3_website; ?></p>
                            <?php } ?>
                            <?php global $data;
                            $hotline4_website = $data['hotline4_website'];
                            if ($hotline4_website != "") { ?>
                                        <p class="sft"><span class="glyphicon glyphicon-phone-alt" style="margin-bottom: 7px;"></span><?php echo $hotline4_website; ?></p>
                            <?php } ?>
                            <?php global $data;
                            $hotline5_website = $data['hotline5_website'];
                            if ($hotline5_website != "") { ?>
                                        <p><span class="glyphicon glyphicon-phone-alt" style="margin-bottom: 7px;"></span><?php echo $hotline5_website; ?></p>
    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row thongtinchitesanpham">
                    <div class="col-md-9">
                        <!--<div class="page-header">
                          <h4><strong>THÔNG TIN SẢN PHẨM</strong></h4>
                        </div>-->
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

                            <div class="col-xs-12 col-md-3">
                            </div>  
                            <div class="col-xs-12 col-md-6">
                                <!-- Button trigger modal -->
                                <button type="button" class="single_add_to_cart_button single_add_vang" data-toggle="modal" data-target="#myModal">
                            <?php global $data;
                            echo $data['Button_buynow_website']; ?>
                                    <script>
                                        function gtag_report_conversion(url) {
                                            var callback = function () {
                                                if (typeof (url) != 'undefined') {
                                                    window.location = url;
                                                }
                                            };
                                            gtag('event', 'conversion', {
                                                'send_to': 'AW-847097400/HHIECN_vw3sQuNz2kwM',
                                                'transaction_id': '',
                                                'event_callback': callback
                                            });
                                            return false;
                                        }
                                    </script>
                                </button>
                            </div>  
                            <div class="col-xs-12 col-md-3">
                            </div>   

                        </div>





                        <div class="product_meta">

                        <?php do_action('woocommerce_product_meta_start'); ?>

    <?php if ($product->is_type(array('simple', 'variable')) && get_option('woocommerce_enable_sku') == 'yes' && $product->get_sku()) : ?>
                                <span itemprop="productID" class="sku_wrapper"><?php _e('Mã sản phẩm:', 'woocommerce'); ?> <span class="sku"><b><?php echo $product->get_sku(); ?></b></span>.</span> 
    <?php endif; ?>

                <?php
                $size = sizeof(get_the_terms($post->ID, 'product_cat'));
                echo $product->get_categories(', ', '<span class="glyphicon glyphicon-list-alt"></span> <span class="posted_in">' . _n('Chuyên mục:', 'Chuyên mục:', $size, 'woocommerce') . ' ', '.</span> ');
                ?>

    <?php
    $size = sizeof(get_the_terms($post->ID, 'product_tag'));
    echo $product->get_tags(', ', '<span class="glyphicon glyphicon-tag"></span> <span class="tagged_as">' . _n('Tag:', 'Tags:', $size, 'woocommerce') . ' ', '.</span> ');
    ?>

    <?php do_action('woocommerce_product_meta_end'); ?>

                        </div>	
                        <div class="panel panel-default">
                            <div class="binhlan"><span class="glyphicon glyphicon-user"></span>NHẬN XÉT SẢN PHẨM</div>

                            <div class="panel-body binhliansanp">
                                <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="20" width="100%" data-colorscheme="light" data-version="v2.3"></div>
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
                <div class="clearfix"></div>
<?php endwhile; // end of the loop.  ?>
<?php do_action('woocommerce_after_main_content'); ?>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php get_footer('shop'); ?>