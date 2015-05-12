# Shopp Purchase Product API
Wordpress plugin to test shopp('purchase.item-product-*'); calls as an addition to the Shopp themeapi. The goal of this plugin is to test the new API calls before merging them into Shopp (http://shopplugin.net).

## Implemented ThemeAPI Calls:
* shopp('purchase.item-product-coverimage');
    * Must be used inside of a shopp('purchase.items') loop. 
    * Accepts same options as product.coverimage.
    * https://shopplugin.net/api/product-coverimage/
