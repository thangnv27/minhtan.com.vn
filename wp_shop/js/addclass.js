$( ".wp-pagenavi .current" ).addClass( "label label-info" );
$( ".wp-pagenavi .page" ).addClass( "label label-default" );
$( ".wp-pagenavi .nextpostslink" ).addClass( "label label-default" );
$( ".wysija-submit" ).addClass( "btn btn-primary" );
$( ".wysija-input" ).addClass( "form-control" );
$( ".orderby" ).addClass( "form-control" );
$( ".woocommerce-breadcrumb" ).addClass( "breadcrumb" );
$( ".widget_price_filter button" ).removeClass( "button" ).addClass( "btn btn-primary  btn-xs" );

$( ".count" ).addClass( "label label-primary" );
$( ".attachment-shop_thumbnail" ).addClass( "img-thumbnail" );
$( "#slidebar .widget_nav_menu h4" ).append( "<span class='glyphicon glyphicon-list-alt'></span>" );
$( "#slidebar .widget_price_filter h4" ).append( "<span class='glyphicon glyphicon-usd'></span>" );
$( "#slidebar .yith-woo-ajax-navigation h4" ).append( "<span class='glyphicon glyphicon-saved'></span>" );
$( ".woocommerce-breadcrumb" ).append( "<span class='glyphicon glyphicon-home'></span>" );

$( "table" ).addClass( "table table-bordered table-responsive" );
$( ".aligncenter" ).addClass( "img-responsive center-block" );
$( ".alignleft" ).addClass( "img-responsive pull-left" );
$( ".alignright" ).addClass( "img-responsive pull-right" );
$( "img" ).addClass( "img-responsive" );


$( ".mc_input" ).addClass( "form-control" );
$( ".button" ).addClass( "btn btn-primary  btn-xs" );


$( ".input-text" ).addClass( "form-control" );

$('.read-full a.read-less').hide();
$('.read-full a.read-more').click(function(e){e.stopPropagation();$('.read-less').show();
    $('.content-main .page-description').last().addClass('more-overlay');
     $('.term-description').last().addClass('more-overlay');
    $(this).hide();$('.term-description').css({'height':'auto'});
    $('.page-description').css({'height':'auto'});});
$('.read-full a.read-less').click(function(e){e.stopPropagation();
        $('.content-main .page-description').last().removeClass('more-overlay');$('.read-more').show();$(this).hide();
        $('.term-description').last().removeClass('more-overlay');$('.read-more').show();$(this).hide();
        $('.term-description').css({'height':'100px'});$('.page-description').css({'height':'100px'});});
/* add style menu */

