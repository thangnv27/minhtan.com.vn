<?php

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title',5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price',10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart',30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing',50);


add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title',5);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing',10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price',20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',30);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart',40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta',50);



/*
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title',5);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price',20);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',30);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart',10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta',40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing',50);
*/
