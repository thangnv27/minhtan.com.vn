<!-- begin sidebar -->
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar_single')) : else : ?>
<?php endif; ?>
<?php include_once(TEMPLATEPATH . '/woocommerce_vnkingnet/woocommerce_sale.php'); ?>
<?php include_once(TEMPLATEPATH . '/woocommerce_vnkingnet/woocommerce_news.php'); ?>
<!-- end sidebar -->
