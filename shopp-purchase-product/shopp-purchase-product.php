<?php 
/*
Plugin Name: Shopp Purchase Product API
Plugin URI: http://github.com/msigley/
Description: Adds a purchase.item-product-coverimage call to the Shopp Theme API.
Version: 1.0.0
Author: Matthew Sigley
Author URI: http://github.com/msigley/
License: GPLv3
*/
class ShoppPurchaseItemImage {
	function __construct () {
		//Theme API
		add_filter('shopp_themeapi_purchase_itemproductcoverimage', 
			array($this, 'item_product_coverimage'), 10, 3);
	}
	
	public function item_product_coverimage($result, $options, $O) {
		$item = current($O->purchased);
		if( !isset($item->product_obj) && !empty($item->product) )
			$item->product_obj = shopp_product($item->product);
		if( empty($item->product_obj) )
			return '';
		return ShoppProductThemeAPI::coverimage( $result, $options, $item->product_obj );
	}
}

$ShoppPurchaseItemImage = new ShoppPurchaseItemImage();

	