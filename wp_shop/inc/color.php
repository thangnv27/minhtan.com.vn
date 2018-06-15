<?php 
global $data; $color = $data['page_colorpicker'];
global $data; $color2 =  $data['color2_colorpicker'];
?>
<style type="text/css">

/* ------ LIGHT BLUE ------ */
a:hover, .cart-header:hover p i, .cart-header strong, .sidebar-home ul li:hover h2, .list-opt-content-top-4 .text-list-opt h6, .list-opt-content-top-4 .text-list-opt span, .title-section a, .list-slider-fashion h2 a, .text-slider-top-buy h2 a, .woocommerce-breadcrumb a, .text-promo-sidebar h2 a, .post_page .woocommerce .cart_totals table tr td strong span, .order-client h6,.title-section span, .product_list_widget li img, .list-news-page h2 a, .tab-fashion .slick-prev i, .tab-fashion .slick-next i, .slider-top-buy .carousel-control i{
	color: <?php echo $color; ?> !important;
}
/* ------ BACKGROUND BLUE ------ */
.search-header input[type="submit"], .cart-header:hover, .cart-header p, .cart-hover, .menu-header, .menu-header nav, .sidebar-home h6, .title-section a:before, .tab-fashion .link-cat a:first-child, .received-mail form input[type="submit"], .title-info-service p, .tab-prod-rel .nav-tabs>li.active>a, .tab-prod-rel .nav-tabs>li.active>a:hover, .tab-prod-rel .nav-tabs>li.active>a:focus, .post_page .woocommerce form table tbody tr td input[type="submit"], .order-client button, .post_page .ninja-forms-cont .field-wrap input[type="submit"], .title-section span:before, .woocommerce .woocommerce-message:before, .woocommerce-page .woocommerce-message:before, .woocommerce-message a.button:hover, #carousel-slider-home .carousel-control, .menu-header nav ul li ul li, .info-detail button[type="submit"],.woocommerce .woocommerce-info:before, .woocommerce-page .woocommerce-info:before, .woocommerce-pagination ul li a:hover, .woocommerce-pagination ul li span, .sidebar-home .widget_price_filter form .ui-slider-range.ui-widget-header.ui-corner-all{
	background:<?php echo $color; ?> !important;
}
/* ------ HOVER BACKGROUND MENU ------ */
.menu-header nav ul li:hover{
	background: <?php echo $color2; ?> !important;
}
/* ------ BORDER COLOR BLUE ------ */
.slider-brand .slick-prev, .slider-brand .slick-next, .sidebar-home .widget_price_filter form .ui-slider-handle.ui-state-default.ui-corner-all, #thumb-product .jcarousel-prev, #thumb-product .jcarousel-next, .post_page .woocommerce form .form-row.validate-required.woocommerce-invalid .chosen-drop, .post_page .woocommerce form .form-row.validate-required.woocommerce-invalid .chosen-single, .post_page .woocommerce form .form-row.validate-required.woocommerce-invalid input.input-text, .post_page .woocommerce form .form-row.validate-required.woocommerce-invalid select, .post_page .woocommerce-page form .form-row.validate-required.woocommerce-invalid .chosen-drop, .post_page .woocommerce-page form .form-row.validate-required.woocommerce-invalid .chosen-single, .post_page .woocommerce-page form .form-row.validate-required.woocommerce-invalid input.input-text, .post_page .woocommerce-page form .form-row.validate-required.woocommerce-invalid select, .tagcloud a:hover, .woocommerce.widget_layered_nav select, .woocommerce .woocommerce-info, .woocommerce-page .woocommerce-info, .woocommerce .woocommerce-message, .woocommerce-page .woocommerce-message, .sidebar-home ul li.three_column .sub-menu, .tab-fashion .slick-prev, .tab-fashion .slick-next, .slider-top-buy .carousel-control{
	border-color: <?php echo $color; ?>;
}

body	 {
	<?php global $data; $i=0; foreach( $data['body_font'] as $body_font ): $i++; 
		   if($i==1){ ?> font-size:<?php echo $body_font.";"; }
		   if($i==2){ ?> font-family:<?php echo $body_font.";"; }
		   if($i==3){ ?> font-weight:<?php echo $body_font.";"; }
		   if($i==4){ ?> color:<?php echo $body_font." !important;"; }
		  endforeach; ?> ;
	}

/* Style tieu de danh muc */

.woocommerce .title-cate-all h1.page-title {
	<?php global $data; $i=0; foreach( $data['page_title_font'] as $body_font ): $i++; 
		   if($i==1){ ?> font-size:<?php echo $body_font.";"; }
		   if($i==2){ ?> font-family:<?php echo $body_font.";"; }
		   if($i==3){ ?> font-weight:<?php echo $body_font.";"; }
		   if($i==4){ ?> color:<?php echo $body_font." !important;"; }
 endforeach; ?> ;
	
	}


.category .cont-news-page .list-news-page h2 a {
	<?php global $data; $i=0; foreach( $data['single_title_font'] as $body_font ): $i++; 
		   if($i==1){ ?> font-size:<?php echo $body_font.";"; }
		   if($i==2){ ?> font-family:<?php echo $body_font.";"; }
		   if($i==3){ ?> font-weight:<?php echo $body_font.";"; }
		   if($i==4){ ?> color:<?php echo $body_font." !important;"; }
 endforeach; ?> ;
	
	}
		
.sidebar-home .title-section span {
	<?php global $data; $i=0; foreach( $data['widgets_title_font'] as $body_font ): $i++; 
		   if($i==1){ ?> font-size:<?php echo $body_font.";"; }
		   if($i==2){ ?> font-family:<?php echo $body_font.";"; }
		   if($i==3){ ?> font-weight:<?php echo $body_font.";"; }
		   if($i==4){ ?> color:<?php echo $body_font." !important;"; }
		  endforeach; ?> ;
	}
.sidebar-home .title-section span:before {
<?php global $data; $i=0; foreach( $data['widgets_title_font'] as $body_font ): $i++; 
		   if($i==4){ ?> background:none repeat scroll <?php echo $body_font." !important;";
		    }
 endforeach; ?> ;
		
	}	
footer.footer h5	 {
	<?php global $data; $i=0; foreach( $data['footer_widgets_title_font'] as $body_font ): $i++; 
		   if($i==1){ ?> font-size:<?php echo $body_font.";"; }
		   if($i==2){ ?> font-family:<?php echo $body_font.";"; }
		   if($i==3){ ?> font-weight:<?php echo $body_font.";"; }
		   if($i==4){ ?> color:<?php echo $body_font." !important;"; }
		  endforeach; ?> ;
	}	
	
</style>