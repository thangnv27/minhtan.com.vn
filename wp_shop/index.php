<?php get_header();?>
<div  class="maim_menu_header" style="background:none; padding:0">
<div class="row">
 <div class="col-xs-12 col-sm-4 col-md-3">

  <?php  if(function_exists('wp_nav_menu')) {
    wp_nav_menu( 'theme_location=menu_main&menu_class=mainmenu_nhe hidden-xs sf-menu sf-vertical&menu_id=mainmenu_nhe&container=&fallback_cb=header_sp_default$');
    }   ?>
   
 </div> <!-- col-xs-12 col-sm-4 col-md-3 col-lg-3 -->
 
 
  <div class="col-xs-12 col-sm-6" style="padding-top:10px">
 	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Slide home')) : else : ?>
    <?php endif; ?>
    
    
    
 </div> <!-- col-xs-12 .col-sm-3 col-md-6 -->
 <div class="col-xs-12 col-sm-3 quangcaoho hidden-xs"  style="padding-top:10px">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('ADS Home')) : else : ?>
    <?php endif; ?>
 </div> <!-- end col-md-6 -->
 
 
</div>
</div>
<div class="row">
<div class="col-xs-12">
 <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Home Product')) : else : ?>
 <?php endif; ?>
 </div>
</div> <!-- end container -->
<?php get_footer(); ?>