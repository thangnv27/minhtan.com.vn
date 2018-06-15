jQuery(document).ready(function(){
    jQuery(".load-more-product").click(function(){
        var _paged = parseInt(jQuery(this).attr('data-page')), _cat = jQuery(this).data('cat');
        jQuery(this).addClass('loading');
        jQuery.ajax({
            url: wc_add_to_cart_params.ajax_url, type: "POST", dataType: "html", cache: false,
            data: {
                action: 'ppo_get_products',
                cat: _cat,
                orderby: jQuery("form.woocommerce-ordering .orderby").val(),
                paged: _paged
            },
            success: function(response, textStatus, XMLHttpRequest){
                if(response.length > 0){
                    _paged += 1;
                    jQuery(".load-more-product").attr('data-page', _paged);
                    jQuery("#products_container").append(response);
                } else {
                    jQuery(".load-more-product").hide();
                }
            },  
            error: function(MLHttpRequest, textStatus, errorThrown){
                console.log(errorThrown);
            },
            complete:function(){
                jQuery(".load-more-product").removeClass('loading');
            }
        }); 
    });
});