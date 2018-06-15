<!-- begin sidebar -->
<!--
<div class="cachangdienthoai">
<h2>Hãng điện thoại</h2>
<ul>
<?php
$all_categories = get_categories('taxonomy=product_cat&hide_empty=0&hierarchical=1&child_of=13');
 foreach ($all_categories as $cat) {
 $category = $cat->term_id; // retreives the currently queried object
 $category_thumbnail = get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true);
 $image = wp_get_attachment_url($category_thumbnail);
 echo '<li><a href="'.get_term_link($cat->slug, 'product_cat').'"><img alt="'.$cat->name.'" src="'.$image.'" width="50" height="20">'.$cat->name.'</a></li>';
 }
?>
</ul>
</div>

-->
<!--
<div class="locgia">
<h2>Lọc theo Giá</h2>
<ul>
<?php 
if (is_product_category()){ global $wp_query;
    $cat = $wp_query->get_queried_object();
	$a= 'http://dienthoai24.vn/?min_price=0&max_price=9700000&product_cat='.$cat->slug;
echo '<li><a title="Dưới 1.5 triệu" href="http://dienthoai24.vn/'.$cat->slug.'?min_price=0&max_price=1500000">Dưới 1.5 triệu</a><li>' ;
echo '<li><a title="Dưới 1.5 triệu" href="http://dienthoai24.vn/'.$cat->slug.'?min_price=1500000&max_price=4000000">Từ 1.5 triệu đến 4 triệu</a><li>' ;
echo '<li><a title="Dưới 1.5 triệu" href="http://dienthoai24.vn/'.$cat->slug.'?min_price=4000000&max_price=6000000">Từ 4 triệu đến 6 triệu</a><li>' ;
echo '<li><a title="Dưới 1.5 triệu" href="http://dienthoai24.vn/'.$cat->slug.'?min_price=6000000&max_price=9000000">Từ 6 triệu đến 9 triệu</a><li>' ;
echo '<li><a title="Dưới 1.5 triệu" href="http://dienthoai24.vn/'.$cat->slug.'?min_price=9000000&max_price=12000000">Từ 9 triệu đến 12 triệu</a><li>' ;
echo '<li><a title="Dưới 1.5 triệu" href="http://dienthoai24.vn/'.$cat->slug.'?min_price=12000000&max_price=120000000">Giá trên 12 triệu</a><li>' ;
}
?>
</ul>
</div>
-->
<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar_product_cat')) : else : ?>
<?php endif; ?>

<?php include_once(TEMPLATEPATH . '/woocommerce_vnkingnet/woocommerce_sale.php'); ?>

<!-- end sidebar -->
