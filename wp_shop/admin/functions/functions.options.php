<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array cat_ID
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		
		$of_categories [$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		
		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		//Background Images Reader
		$bg_images_path = get_stylesheet_directory(). '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_template_directory_uri().'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		            	natsort($bg_images); //Sorts the array into a natural order
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();


/*Header */
$of_options[] = array ( "name" => "Header website",
						"type" => "heading",
						"icon"		=> ADMIN_IMAGES . "layout_header.png"
						);
						
$of_options[] = array ("name" => "Logo website",
					   "desc" =>"Bạn hãy upload logo cho website của bạn",
					   "id"  => "logo_website",
					   "std"  => "",
					   "type" => "upload",
					   );
					   
$of_options[] = array ("name" => "H1 home page for SEO",
					   "desc" =>"Đây là thẻ h1 trang chủ",
					   "id"  => "h1_home_website",
					   "std"  => "Mẫu website đẹp",
					   "type" => "text",
					   );	
					   

$of_options[] = array ("name" => "Favicon website",
					   "desc" =>"Bạn hãy upload Favicon cho website của bạn",
					   "id"  => "favicon_website",
					   "std"  => "",
					   "type" => "upload",
					   );
		
		
$of_options[] = array( 	"name" 		=> "Header Code",
						"desc" 		=> "Đoạn code sẽ được chèn vào trước thẻ đóng </head>. Sử dụng nếu bạn muốn chèn  CSS, JS hoặc Google Analytic, Webmasters.",
						"id" 		=> "header_code",
						"std" 		=> "",
						"type" 		=> "textarea"
				);
						
				
$of_options[] = array( 	"name" 		=> "Header cam kết",
						"desc" 		=> "Đoạn code sẽ được chèn vào và hiển thị những cam kết ở cạnh logo",
						"id" 		=> "header_camket",
						"std" 		=> '<div class="col-xs-12 col-md-4"> 
      <div class="coler-desc">
       <div class="coler-icon_pro"><span class="fa fa-credit-card"></span></div>
      <div class="coler-mesting">Thanh toán khi nhận hàng</div>
      </div>  <!-- hotline coler-desc-->
     </div>  <!-- het cam ket-->
      <div class="col-xs-12 col-md-4"> 
      <div class="coler-desc">
       <div class="coler-icon_pro"><span class="fa fa-truck"></span></div>
      <div class="coler-mesting">Giao hàng toàn quốc</div>
      </div>  <!-- hotline coler-desc-->
    </div>  <!-- het cam ket-->
      <div class="col-xs-12 col-md-4">
      <div class="coler-desc">
       <div class="coler-icon_pro"><span class="fa fa-calendar"></span></div>
      <div class="coler-mesting">Trả hàng trong 3 ngày</div>
      </div>  <!-- hotline coler-desc--> 
     </div>  <!-- het cam ket-->',
						"type" 		=> "textarea"
				);
				
		
/*Footer */
$of_options[] = array ( "name" => "Footer website",
						"type" => "heading",
						"icon"		=> ADMIN_IMAGES . "layout_select_footer.png"
						);
$of_options[] = array( 	"name" 		=> "Chọn chuyên mục thứ nhất",
						"desc" 		=> "Bạn hãy chọn chuyên mục hiển thị dưới chân trang.",
						"id" 		=> "footer1_category",
						"std" 		=> "Chuyên mục 1 :",
						"type" 		=> "select",
						"options" 	=> $of_categories
				);	
				
$of_options[] = array( 	"name" 		=> "Tắt chức năng hiển thị Chuyên mục thứ nhất",
						"desc" 		=> "vì một lý do nào đấy bạn không muốn hiển thị Chọn chuyên mục thứ nhất hãy tắt nó đi",
						"id" 		=> "off_chuyenmucthunhat",
						"std" 		=> 1,
						"on" 		=> "Bật",
						"off" 		=> "Tắt",
						"type" 		=> "switch"
				);
				
$of_options[] = array( 	"name" 		=> "Chọn chuyên mục thứ hai",
						"desc" 		=> "Bạn hãy chọn chuyên mục hiển thị dưới chân trang.",
						"id" 		=> "footer2_category",
						"std" 		=> "Chuyên mục 2:",
						"type" 		=> "select",
						"options" 	=> $of_categories
				);					

$of_options[] = array ("name" => "Thông tin địa chỉ - SĐT - Email ...",
					   "desc" =>"Bạn hãy điền Địa ch ỉ- SĐT - Email ... cửa hàng hoặc công ty",
					   "id"  => "diachi_website",
					   "std"  => '<p class="widgettitlefooter">THÔNG TIN LIÊN HỆ</p>
<p class="congty">Tên Công ty Hoặc Cử Hàng</p>
<p class="dia_chi"><span class="fa fa-home"></span> Địa chỉ:  Số: XYZ, Đường : YXZ; TP: Hà Nội </p>
<p><span class="fa fa-phone-square"></span>Điện thoại: <b> 0974.50.33.44</b></p>
<p><span class="fa fa-envelope-o"></span>Email: shopwordpress88@gmail.com</p>',
					   "type" => "textarea",
					   );
					   
$of_options[] = array( 	"name" 		=> "Tắt chức năng hiển thị Link footer",
						"desc" 		=> "Nếu bạn không muốn hiển thị link về website của chúng tôi, tắt ở đây nhé, chúng tôi sẽ rất buồn vì điều này nhé, nhớ nhé, không vui tẹo nào.",
						"id" 		=> "off_link",
						"std" 		=> 1,
						"on" 		=> "Bật",
						"off" 		=> "Tắt",
						"type" 		=> "switch"
				);
				
										
				
$of_options[] = array( 	"name" 		=> "Cấu hình màu sắc font chữ",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-paint.png"
				);
				
				
$of_options[] = array( 	"name" 		=> "Màu sắc chủ đạo",
						"desc" 		=> "Bạn hãy chọn màu giao diện để phù hợp với bộ nhận dạng thương hiệu của bạn.",
						"id" 		=> "mau_background",
						"std" 		=> "",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Màu sắc khác",
						"desc" 		=> "Màu sắc này sẽ làm nổi bật lên màu sắc chủ đạo. Giúp website của bạn trông đẹp hơn.",
						"id" 		=> "mau2_background",
						"std" 		=> "",
						"type" 		=> "color"
				);
				
$of_options[] = array( 	"name" 		=> "Font chữ chính",
						"desc" 		=> "Bạn hãy chọn font chữ chính thước cho webste",
						"id" 		=> "body_font",
						"std" 		=> array('size' => '12px','face' => 'arial','style' => 'normal','color' => '#000000'),
						"type" 		=> "typography"
				);  
				

// Trang chi tiết sản phẩm

$of_options[] = array( 	"name" 		=> "Trang sản phẩm",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "wooc_icon.png"
				);
				
$of_options[] = array( 	"name" 		=> "Trang chi tiết sản phẩm cam kết",
						"desc" 		=> "Đoạn code sẽ được hiển thị trong trang chi tiết sản phẩm",
						"id" 		=> "conten_camket",
						"std" 		=> '<p><span class="glyphicon glyphicon-thumbs-up"></span> Đảm bảo 100% hàng chính hãng</p>
  <p><span class="glyphicon glyphicon-refresh"></span> Đổi trả hàng trong 10 ngày (*)</p>
  <p><span class="glyphicon glyphicon-heart"></span> Dịch vụ khách hàng tốt nhất</p>',
						"type" 		=> "textarea"
				);
		

$of_options[] = array ("name" => "Button mua hàng nhanh",
					   "desc" =>"Button kêu gọi khách hàng mua hàng nhanh",
					   "id"  => "Button_buynow_website",
					   "std"  => "Đặt Ngay Giao Tận Nơi<span>Xem thoải mái. Không thích không sao</span>",
					   "type" => "textarea",
					   );	

$of_options[] = array ("name" => "Button mua hàng",
					   "desc" =>"Button kêu gọi khách hàng mua hàng",
					   "id"  => "Button_by_website",
					   "std"  => "THÊM SẢN PHẨM VÀO GIỎ HÀNG <span>Dành cho mua cùng lúc nhiều sản phẩm</span>",
					   "type" => "textarea",
					   );		
		

// Thông tin liên hệ
$of_options[] = array( 	"name" 		=> "Hotline",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-docs.png"
				);
$of_options[] = array ("name" => "Hotline 1",
					   "desc" =>"Bạn hãy điền thông tin các số hotline - Để khách hàng liên hệ với bạn tốt nhất",
					   "id"  => "hotline1_website",
					   "std"  => "0974.50.33.44",
					   "type" => "textarea",
					   );
					   
$of_options[] = array ("name" => "Hotline 2",
					   "desc" =>"Bạn hãy điền thông tin các số hotline - Để khách hàng liên hệ với bạn tốt nhất",
					   "id"  => "hotline2_website",
					   "std"  => "0974.50.33.44",
					   "type" => "textarea",
					   );
					   
$of_options[] = array ("name" => "Hotline 3",
					   "desc" =>"Bạn hãy điền thông tin các số hotline - Để khách hàng liên hệ với bạn tốt nhất",
					   "id"  => "hotline3_website",
					   "std"  => "0974.50.33.44",
					   "type" => "textarea",
					   );
					   
$of_options[] = array ("name" => "Hotline 4",
					   "desc" =>"Bạn hãy điền thông tin các số hotline - Để khách hàng liên hệ với bạn tốt nhất",
					   "id"  => "hotline4_website",
					   "std"  => "0974.50.33.44",
					   "type" => "textarea",
					   );
					   
$of_options[] = array ("name" => "Hotline 5",
					   "desc" =>"Bạn hãy điền thông tin các số hotline - Để khách hàng liên hệ với bạn tốt nhất",
					   "id"  => "hotline5_website",
					   "std"  => "0974.50.33.44",
					   "type" => "textarea",
					   );					
$of_options[] = array ("name" => "Hotline 6",
					   "desc" =>"Bạn hãy điền số hotline - Để khách hàng liên hệ với bạn tốt nhất",
					   "id"  => "hotline6_website",
					   "std"  => "0974.50.33.44",
					   "type" => "text",
					   );					
/* Mạng xã hội */

$of_options[] = array( 	"name" 		=> "Mạng xã hội",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "social_network.png"
				);
$of_options[] = array ("name" => "Facebook",
					   "desc" =>"Bạn hãy điền thông tin Facebook",
					   "id"  => "facebook_website",
					   "std"  => "http://facebook.com/",
					   "type" => "text",
					   );			   
$of_options[] = array ("name" => "Google +",
					   "desc" =>"Bạn hãy điền thông tin Google +",
					   "id"  => "google_website",
					   "std"  => "",
					   "type" => "text",
					   );
$of_options[] = array ("name" => "Youtube",
					   "desc" =>"Bạn hãy điền thông tin Youtube",
					   "id"  => "youtube_website",
					   "std"  => "",
					   "type" => "text",
					   );		
$of_options[] = array ("name" => "Twitter",
					   "desc" =>"Bạn hãy điền thông tin Twitter",
					   "id"  => "twitter_website",
					   "std"  => "",
					   "type" => "text",
					   );
					   
$of_options[] = array( 	"name" 		=> "Comments Facebook",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "comments-icon.png"
				);
				

$of_options[] = array ("name" => "App ID",
					   "desc" =>"Bạn hãy điền thông tin App ID Facebook chưa có vào đây tạo : https://developers.facebook.com/ là demo add facebook của mình",
					   "id"  => "app_id_fb",
					   "std"  => "997809643565182",
					   "type" => "text",
					   );

$of_options[] = array ("name" => "USER ID",
					   "desc" =>"Bạn hãy điền thông tin USER ID Facebook chưa có vào đây tạo : http://findmyfacebookid.com/ ở đưới đây là demo USER ID tài khoản của minh",
					   "id"  => "user_id_fb",
					   "std"  => "100001881646571",
					   "type" => "text",
					   );
	
	
	
					
// Backup Options
$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-slider.png"
				);
				
$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);
				
$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
		
		

/* Mạng xã hội */

$of_options[] = array( 	"name" 		=> "Trợ giúp sản phẩm",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "help.png"	
							);
$of_options[] = array( 	"name" 		=> "Trợ giúp sản phẩm cua toi!",
						"desc" 		=> "",
						"id" 		=> "introduction_2",
						"std" 		=> "
						<h3 style=\"margin: 0 0 10px;\">Rất mong muốn được hợp tác cùng quý khách!.</h3>
		       			<p style=\"margin: 0 0 10px;\"><b>TÔI VIẾT SẢN PHẨM NÀY, DÙ ĐÃ RẤT CỐ GẮNG ĐỂ ĐƠN GIẢN MỌI VẤN ĐỀ. NHƯNG NẾU CÓ PHẦN NÀO BẠN CHƯA HIỀU THÌ HÃY LIÊN HỆ VỚI TÔI ĐỂ ĐƯỢC TRỢ NHANH NHẤT</b></p>
						<p><b>Chúng tôi là ShopWordpress</b></p>
						<p><b>Email: shopwordpress88@gmail.com</b></p>
						<p><b>Yahoo và Skype : vanluc88</b></p>
						<p><b>Hotline 24/7 : 0974.50.33.44</b></p>
						<p><b>Cảm ơn các bạn đã tin tưởng và sử dụng dịch vụ của tôi</b></p>
						",
						"icon" 		=> true,
						"type" 		=> "info"
				);	
								
	}//End function: of_options()
}//End chack if function exists: of_options()

?>
