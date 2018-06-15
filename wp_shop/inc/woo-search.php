<?php
	function wd_product_search_form(){
			$args = array(
			'number'     => '',
			'orderby'    => 'name',
			'order'      => 'ASC',
			'hide_empty' => true,
			'include'    => array()
		);
		$product_categories = get_terms( 'product_cat', $args ); 
		//print_r($product_categories);
		$categories_show = '<option value="">Sản phẩm</option>';
		$check = '';
		if(is_search()){
			if(isset($_GET['term']) && $_GET['term']!=''){
				$check = $_GET['term'];	
			}
		}
		$checked = '';
		foreach($product_categories as $category){
			if(isset($category->slug)){
				if(trim($category->slug) == trim($check)){
					$checked = 'selected="selected"';
				}
				$categories_show  .= '<option '.$checked.' value="'.$category->slug.'">'.$category->name.'</option>';
				$checked = '';
			}
		}
		echo $form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
		<p class="an_select hidden-xs hidden-sm">
		 <select class="wd_search_product" name="term">'.$categories_show.'</select>
		 
		 <div class="wd_search_form">
			 <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Tìm kiếm sản phẩm', 'wpdance' ) . '" />
			 <input type="submit" title="Search" id="searchsubmit" value="'. esc_attr__( 'Tìm kiếm', 'wpdance' ) .'" />
			 <input type="hidden" name="post_type" value="product" />
			 <input type="hidden" name="taxonomy" value="product_cat" />
		 </div>
		</form>';
		
	}
