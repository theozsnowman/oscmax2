<?php
/*
$Id: xsell.php 15 2006-07-28 20:46:15Z user $ 
osCMax Power E-Commerce 
http://oscdox.com 
Copyright 2006 osCMax2005 osCMax, 2002 osCommerce 

Released under the GNU General Public License 
xsell.php
Original Idea From Isaac Mualem im@imwebdesigning.com <mailto:im@imwebdesigning.com> 
Complete Recoding From Stephen Walker admin@snjcomputers.com
*/ 

define('CROSS_SELL_SUCCESS', 'Cross Sell Items Successfully Updated For Cross Sell Product #'.$_GET['add_related_product_ID']);
define('SORT_CROSS_SELL_SUCCESS', 'Sort Order Successfully Updated For Cross Sell Product #'.$_GET['add_related_product_ID']);
define('HEADING_TITLE', 'Cross-Sell (X-Sell) Admin');
define('TABLE_HEADING_PRODUCT_ID', 'Product Id');
define('TABLE_HEADING_PRODUCT_MODEL', 'Product Model');
define('TABLE_HEADING_PRODUCT_NAME', 'Product Name');
define('TABLE_HEADING_CROSS_PRODUCTS', 'Cross-Associated Products');
define('TABLE_HEADING_CROSS_SELL_ACTIONS', 'Cross Sell Actions');
define('TABLE_HEADING_CURRENT_SELLS', 'Current Cross-Sells');
define('TABLE_HEADING_UPDATE_SELLS', 'Update Cross-Sells');
define('TABLE_HEADING_PRODUCT_IMAGE', 'Product Image');
define('TABLE_HEADING_PRODUCT_PRICE', 'Product Price');
define('TABLE_HEADING_CROSS_SELL_THIS', 'Cross-Sell This?');
define('TABLE_HEADING_NAME', 'Name');
define('TABLE_HEADING_PRICE', 'Price');
define('TABLE_HEADING_ITEM_NO', 'Item No');
define('TABLE_HEADING_ITEM_NAME', 'Item Name');
define('TEXT_EDIT_SELLS', 'Edit');
define('TEXT_SORT', 'Prioritize');
define('TEXT_SETTING_SELLS', 'Setting Cross-Sells For');
define('TEXT_PRODUCT_ID', 'Product Id');
define('TEXT_MODEL', 'Model');
define('TABLE_HEADING_PRODUCT_SORT', 'Sort Order');
define('TEXT_NO_IMAGE', 'No Image');
define('TEXT_CROSS_SELL', 'Cross-Sell');
define('TEXT_NEW_CROSS_SELL', 'Click Here to add a new cross sale');
define('TEXT_CROSS_SELL_ADD', 'Add');
define('TEXT_CROSS_SELL_REMOVE', 'Remove');
define('TEXT_CROSS_SELL_SORT', 'Sort');
define('TEXT_CROSS_SELL_ORDER', 'Order - 1=Top');
define('TEXT_SEARCH_XSELL', 'Search :');
?>