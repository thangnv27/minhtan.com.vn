<!DOCTYPE html>
<html lang="vi">
<head>
<meta name="language" content="vietnamese">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' /> 
<title><?php wp_title(); ?></title>
<meta name="copyright" content="MINH TAN CO., LTD">
<meta property="article:author" content="MINH TAN">
<meta name="robots" content="index,follow">
<meta name="geo.placename" content="415 Nguyễn Thái Bình, 12, Tân Bình, Hồ Chí Minh, Việt Nam" />
<meta name="geo.position" content="10.766079;106.664506" />
<meta name="geo.region" content="VN-Hồ Chí Minh" />
<meta name="ICBM" content="10.7951050, 106.6504130" />
<meta name="revisit-after" content="1 days">
<meta name="dc.description" content="MINHTAN.COM.VN là đơn vị chuyên cung cấp các sản phẩm công nghệ thông minh như Android Tv Box, Kính Thực Tế Ảo, Đồng Hồ Thông Minh - SmartWatch chính hãng, giá rẻ uy tín chất lượng cao.">
<meta name="dc.keywords" content="android tv box, tv box, dong ho thong minh, đồng hồ thông minh, kinh thuc te ao, kính thực tế ảo, smartwatch">
<meta name="dc.subject" content="Công Ty">
<meta name="dc.created" content="2015-10-12">
<meta name="dc.publisher" content="CÔNG TY TNHH GIẢI PHÁP CÔNG NGHỆ MINH TÂN">
<meta name="dc.rights.copyright" content="MINH TAN">
<meta name="dc.creator.name" content="MINH TAN CO.,LTD">
<meta name="dc.creator.email" content="info@minhtan.com.vn">
<meta name="dc.identifier" content="https://minhtan.com.vn/">
<meta name="dc.language" content="vi-VN">	
<meta name="p:domain_verify" content="ba57154c52d1ef731aa19d968a9ebe4a"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="<?php  global $data; echo $data['favicon_website']; ?>"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.css" type="text/css" rel="stylesheet" />
<link href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/superfish.css">
<?php if(is_home()) { ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/superfish-vertical.css">
<?php } ?>
<?php wp_head(); ?>
<style type="text/css">
body {
<?php global $data; $i=0; foreach( $data['body_font'] as $body_font ): $i++; 
		   if($i==1){ ?> font-size:<?php echo $body_font.";"; }
		   if($i==2){ ?> font-family:<?php echo $body_font.";"; }
		   if($i==3){ ?> font-weight:<?php echo $body_font.";"; }
		   if($i==4){ ?> color:<?php echo $body_font.";"; }
 endforeach; ?> ;	
	}
</style>
<?php global $data; $mausac=$data['mau_background']; if($mausac != "" ) { ?>
<style type="text/css">
.maim_menu_header { background:<?php echo $mausac; ?>;}
.navbar-header button {  background:<?php echo $mausac; ?>;}
.coler-desc .coler-icon span {color:<?php echo $mausac; ?>; border:2px solid <?php echo $mausac; ?>;}
.coler-desc .coler-icon_pro span {  color:<?php echo $mausac; ?>; border:2px solid <?php echo $mausac; ?>;}
.coler-desc .coler-mesting { color:<?php echo $mausac; ?>;}

.module_sanpham .tieude_home { background:<?php echo $mausac; ?>;}
#footer { background:<?php echo $mausac; ?>; }
h1.catproduc-title{ color:<?php echo $mausac; ?>;}
.ssanphamlienquanss .panel-tieude {color:<?php echo $mausac; ?>;}
.binhlan {color:<?php echo $mausac; ?>;}
#slidebar .widget_nav_menu h4, #slidebar .widget h4 { color:<?php echo $mausac; ?>;}
#slidebar .widget_nav_menu ul li span {color:<?php echo $mausac; ?>;}
.module_tintuc_khachhang h4.tieudenewsf { background:<?php echo $mausac; ?>;}
.coler-desc .coler-mest {color:<?php echo $mausac; ?>;}
</style>
<?php } ?>

<?php global $data; $mausac2=$data['mau2_background']; if($mausac2 != "" ) { ?>
<style type="text/css">
.module_sanpham h2.title_link { background:<?php echo $mausac2; ?>;}
.maim_menu_header .menuproduc li a.danhmucspa { background:<?php echo $mausac2; ?>;}

.cacbuocdathang {border-bottom:5px solid <?php echo $mausac2; ?>;}
.giohangstyle {background:<?php echo $mausac2;?> }
.coler-desc .coler-mest p.sdt{color:<?php echo $mausac2; ?>;}
</style>
<?php } ?>
<?php  global $data; echo $data['header_code']; ?>
<?php if (is_singular()) { ?>
<link rel="canonical" href="<?php the_permalink() ?>" /> 
<?php } ?> 
<meta property="og:title" content="<?php wp_title(); ?>">
<meta property="fb:app_id" content="1848244738784567"/>
<meta property="fb:admins" content="1605315413072754"/>
	<meta name="google-site-verification" content="YSmyQjSysOFbF6Uh2mJk7lRC-cY_ng2A-kHEwaeiwTI" />
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1848244738784567";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body <?php body_class(); ?>>
 <div class="container">
 <div class="header">
  <div class="row">
  <div class="col-xs-12 col-md-3 hidden-xs">
	<?php global $data;
    $get_logo_image = $data['logo_website'];
    if($get_logo_image != '') { ?>
    <a class="thumbnail" style="float:left; border:none; box-shadow:none; margin:0; padding:0" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>"><img src="<?php echo $get_logo_image; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" class="logo" /></a>
    <?php if(is_home()) { ?>
      <h1 class="h1_an"><?php  global $data; echo $data['h1_home_website']; ?></h1>
    <?php } } else { ?>
    <div class="logo_text_wrap">
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <h2><?php bloginfo('description'); ?></h2>
    </div>
    <?php }?>
  </div>  <!-- end col-xs-12 col-sm-6 col-md-3 -->
  <div class="col-xs-12 col-sm-9 hidden-xs">
  <div class="row">
   <div class="col-xs-12">
   <div role="navigation" class="navbar_menutop">
      <div class="navbar-collapse collapse" style="height: 1px;">
  <?php  if(function_exists('wp_nav_menu')) {
  wp_nav_menu( 'theme_location=header_top&menu_class=nav navbar-nav&container=&fallback_cb=header_sp_default');
 }  ?>
 </div><!--/.nav-collapse -->
</div>
   </div>  <!-- col-xs-12-->
   </div> <!-- row-->
    <div class="row">
   <div class="col-xs-12">
   <div class="row">
    
    <div class="col-xs-12 col-md-8">
        <?php global $data; $header_camket=$data['header_camket']; if($header_camket != "" ) { echo $header_camket; } ?>
      </div>  <!-- col-xs-12 col-sm-12 col-md-12-->
       <div class="col-xs-12 col-md-4">
   	 <div class="col-xs-12"> 
      <div class="hotline coler-desc">
       <div class="coler-icon"><span class="glyphicon glyphicon-phone-alt"></span></div>
      <div class="coler-mest">Hotline <span>24/7</span>
      <p class="sdt">
	  <?php global $data; $hotline1_website=$data['hotline1_website']; if($hotline1_website != "" ) { echo $hotline1_website; } ?>
      </p></div>
  </div>  <!-- hotline coler-desc-->
   </div>  <!-- col-xs-12 col-sm-12 col-md-12-->
   </div> <!-- col-xs-12 col-sm-12 col-md-52-->
   </div>  <!-- col-xs-12 col-sm-12 col-md-12-->
   </div> <!-- row-->
   </div>  <!-- col-xs-12 .col-sm-6 col-md-9 -->
  </div> <!-- row-->
</div> <!-- end header -->

<!-- update 12-04-2015 -->
		<nav class="navbar navbar-default navbar-mobile navbar-static-top visible-xs" role="navigation">
			<div class="navbar-header hidden-md hidden-lg">
				 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
					 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				 </button>
				 
				 
				 <?php global $data;
    $get_logo_image = $data['logo_website'];
    if($get_logo_image != '') { ?>
    <a class="mobileLogo navbar-brand "  title="<?php bloginfo('name'); ?>" href="<?php bloginfo('url'); ?>"><img src="<?php echo $get_logo_image; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a>
    <?php if(is_home()) { ?>
      
    <?php } } else { ?>
    <div class="logo_text_wrap">
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <h2><?php bloginfo('description'); ?></h2>
    </div>
    <?php }?>
			</div>
			
<!--
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
			
             <?php  if(function_exists('wp_nav_menu')) {
    wp_nav_menu( 'theme_location=menu_main&menu_class=mainmenu_nhe sf-menu&menu_id=mainmsenu_nhe&container=&fallback_cb=header_sp_default$');
    }   ?> 
            </div>
-->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             	<?php  if(function_exists('wp_nav_menu')) {
			    wp_nav_menu( 'theme_location=menu_main&menu_class=nav navbar-nav mobile-menu&menu_id=mainmsenu_nhe&container=&fallback_cb=header_sp_default$');
			 }   ?> 
            </div>
		</nav>
<!-- /update 12-04-2015 -->
<div  class="maim_menu_header">
<div class="row">
 <div class="col-xs-12 col-sm-3 hidden-xs">
<div class="menuproduc">
   <ul class="sf-menu <?php if(!is_home()) { echo 'menuhome_padding'; }?> " >
			<li class="current">
				<a class="danhmucspa">Danh mục sản phẩm</a>
     <?php if(!is_home()) {  ?>          
   <?php  if(function_exists('wp_nav_menu')) {
    wp_nav_menu( 'theme_location=menu_main&menu_class=nav navbar-nav&container=&fallback_cb=header_sp_default$');
    }   ?> 
   <?php } ?>
			</li>
		</ul>   
   </div>
 </div> <!-- col-xs-12 col-sm-4 col-md-3 col-lg-3 --> 
  <div class="col-xs-12 col-sm-6" id="clear_none">
   <div class="row">  
<form role="search" id="searchform" action="<?php echo esc_url( home_url( '/'  ) ); ?>">   
<div class="col-xs-8 col-sm-9">
<input class="form-control" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e( 'Tìm kiếm theo sản phẩm, danh mục hay nhãn hàng mong muốn', 'woocommerce' ); ?>" />
</div><!-- end col-xs-12 .col-sm-12 .col-md-10 col-lg-10 --> 
<div class="col-xs-4 col-sm-3">  
<button type="submit" class="btn btn-default tim_but"><span class="glyphicon glyphicon-search"></span>Tìm kiếm</button> 
<input type="hidden" name="post_type" value="product" />
</div> <!-- end col-xs-12 .col-sm-12 .col-md-2 col-lg-2 -->
</form>
</div>
 </div> <!-- col-xs-12 .col-sm-3 col-md-6 -->
  <div class="col-xs-12 col-sm-3" id="clear_none">
 <div class="row" style="float:right"> 
 <ul class="social_network">
						 <?php global $data; $facebook = $data['facebook_website'];  if($facebook != '') {?>
                         <li><a title="Hệ thống cửa hàng" href="https://minhtan.com.vn/he-thong-cua-hang/"><span>HỆ THỐNG CỬA HÀNG</span></a></li>
						 <?php } ?>					
					</ul>
  <p class="label  label-danger" style="float:right; padding:5px; margin:5px; border-radius:3px">
<?php global $woocommerce; ?>
 <a class="cart-contents" style="color:#FFF;font-size:12px" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('Xem giỏ hàng', 'woothemes'); ?>">
  <span class="fa fa-cart-arrow-down"></span>
 <?php echo sprintf(_n('Giỏ hàng (%d)', 'Giỏ hàng (%d)', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></a>
 </p>
</div>
 </div> <!-- end col-md-6 -->
</div>
</div>