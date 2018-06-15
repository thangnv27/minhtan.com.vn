<div class="container">
			<div class="box-brand col-xs-12">
				<div class="slider-brand">
                <?php global $data; $slides = $data['partner_logo']; foreach ($slides as $slide) { ?>
					<div class="list-brand">
						<a href="<?php echo $slide['link']; ?>" title="<?php echo $slide['title']; ?>"><img alt="<?php echo $slide['title']; ?>" src="<?php echo $slide['url']; ?>" alt="" class="img-responsive"></a>
					</div><!--end .list-brand-->
 				<?php } ?> 
					
				</div><!--end .slider-brand-->
			</div><!--end .box-brand-->

		</div>
<footer class="footer">
		<div class="container">
			<div class="footer-left col-xs-12 col-md-4">
				       <?php global $data; $thongtinlienhe = $data['thongtinlienhe_textarea'];  if($thongtinlienhe != '') {?>
				       	<?php echo $thongtinlienhe; ?>
						<?php } ?>

				<div class="social-footer hidden-xs hidden-sm">
					<h5>KẾT NỐI VỚI CHÚNG TÔI</h5>
					<ul>
						 <?php global $data; $facebook = $data['url_facebook'];  if($facebook != '') {?>
                         <li><a rel="nofollow" title="facebook" href="<?php $facebook;?>"><i class="fa fa-facebook"></i></a></li>
						 <?php } ?>
                         <?php global $data; $twitter = $data['url_twitter'];  if($twitter != '') {?>
                         <li><a rel="nofollow" title="twitter" href="<?php $twitter;?>"><i class="fa fa-twitter"></i></a></li>
						 <?php } ?>
                         <?php global $data; $youtube = $data['url_youtube'];  if($youtube != '') {?>
                         <li><a rel="nofollow" title="youtube" href="<?php $youtube;?>"><i class="fa fa-youtube"></i></a></li>
						 <?php } ?>
                         <?php global $data; $google_plus = $data['url_google_plus'];  if($google_plus != '') {?>
                         <li><a rel="nofollow" title="google plus" href="<?php $google_plus;?>"><i class="fa fa-google-plus"></i></a></li>
						 <?php } ?>
                         
                         <?php global $data; $linkedin = $data['url_linkedin_plus'];  if($linkedin != '') {?>
                         <li><a rel="nofollow" title="linkedin" href="<?php $linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
						 <?php } ?>
                         
						
					</ul>
				</div><!--end .social-footer-->

				<div class="paygate-footer hidden-xs hidden-sm">
					    <?php global $data; $chapnhanthantoan = $data['chapnhanthantoan_textarea'];  if($chapnhanthantoan != '') {?>
				        	<?php echo $chapnhanthantoan; ?>
						<?php } ?>
				</div><!--end .paygate-footer-->
			</div><!--end .footer-left-->

			<div class="footer-right col-xs-12 col-md-8">
				<div class="list-footer-right col-xs-12 col-md-4">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Widget footer 1')) : else : ?>
				<?php endif; ?>
				</div><!--end .list-footer-right-->

				<div class="list-footer-right col-xs-12 col-md-4">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Widget footer 2')) : else : ?>
				<?php endif; ?>
				</div><!--end .list-footer-right-->

				<div class="list-footer-right col-xs-12 col-md-4">
				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Widget footer 3')) : else : ?>
				<?php endif; ?>
				</div><!--end .list-footer-right-->

                <div class="received-mail col-xs-12 hidden-xs hidden-sm">
					<div class="row">
						<div class="col-xs-12 col-md-8">
						  <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Widget footer 4')) : else : ?>
						<?php endif; ?>	
                         </div>
						<div class="col-md-3 hidden-xs hidden-sm pull-right">
						<?php global $data; $chungnhanbaodam = $data['chungnhanbaodam_textarea'];  if($chungnhanbaodam != '') {?>
				       	<?php echo $chungnhanbaodam; ?>
						<?php } ?>
						</div>
					</div>
				</div><!--end .received-mail-->
			</div><!--end .footer-right-->
		</div>

		<div class="copyright">
			<div class="container">
				<div class="col-xs-12">
					<p>© Copyright 2014 by <?php wp_title(); ?>. All rights reserved.</p>
					<span>Design by LifeWeb</span>
				</div>
			</div>
		</div><!--end .copyright-->
	</footer><!--end .footer-->
	<?php get_template_part( 'inc/color' ); ?>	
    
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery/slick.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>

	
	<?php if(is_product()) { ?>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery/smoothproducts.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/smoothproducts.css">
	<?php } ?> 
    
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery/tinynav.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery/jquery-page.js"></script>
 
 	<script>
    $(function () {
      // TinyNav.js 1
      $('#slectmenu').tinyNav({
        active: 'selected',
        indent: '-',
        label: ''
      });
     
    });
  </script>
	<?php wp_footer(); ?>
</body>
</html>