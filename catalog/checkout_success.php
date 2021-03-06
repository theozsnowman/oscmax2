<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

// Most of this file is changed or moved to BTS - Basic Template System - format.
// For adding in contribution or modification - parts of this file has been moved to: catalog\templates\fallback\contents\<filename>.tpl.php as a default (sub 'fallback' with your current template to see if there is a template specife change).
//       catalog\templates\fallback\contents\<filename>.tpl.php as a default (sub 'fallback' with your current template to see if there is a template specife change).
// (Sub 'fallback' with your current template to see if there is a template specific file.)

  require('includes/application_top.php');
/* One Page Checkout - BEGIN */
// if the customer is not logged on, redirect them to the shopping cart page
//  if (!tep_session_is_registered('customer_id')) {
//    tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
//  }
  if (ONEPAGE_CHECKOUT_ENABLED == 'True'){
      if (!tep_session_is_registered('onepage')){
          if (!tep_session_is_registered('customer_id')) {
              tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
          }
      }else{
		  require(bts_select('language', FILENAME_CHECKOUT));
          require_once('includes/functions/password_funcs.php');
          require('includes/classes/onepage_checkout.php');
          $onePageCheckout = new osC_onePageCheckout();
          $onePageCheckout->createCustomerAccount();
      }
  }else{
      if (!tep_session_is_registered('customer_id')) {
          tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
      }
  }
/* One Page Checkout - END */

  if (isset($_GET['action']) && ($_GET['action'] == 'update')) {
    $notify_string = '';

    if (isset($_POST['notify']) && !empty($_POST['notify'])) {
      $notify = $_POST['notify'];

      if (!is_array($notify)) {
        $notify = array($notify);
      }

      for ($i=0, $n=sizeof($notify); $i<$n; $i++) {
        if (is_numeric($notify[$i])) {
          $notify_string .= 'notify[]=' . $notify[$i] . '&';
        }
      }
      if (!empty($notify_string)) {
        $notify_string = 'action=notify&' . substr($notify_string, 0, -1);
    }
    }

    tep_redirect(tep_href_link(FILENAME_DEFAULT, $notify_string));
  }

  require(bts_select('language', FILENAME_CHECKOUT_SUCCESS));

  $breadcrumb->add(NAVBAR_TITLE_1);
  $breadcrumb->add(NAVBAR_TITLE_2);

  $global_query = tep_db_query("select global_product_notifications from " . TABLE_CUSTOMERS_INFO . " where customers_info_id = '" . (int)$customer_id . "'");
  $global = tep_db_fetch_array($global_query);

  if ($global['global_product_notifications'] != '1') {
    $orders_query = tep_db_query("select orders_id from " . TABLE_ORDERS . " where customers_id = '" . (int)$customer_id . "' order by date_purchased desc limit 1");
    $orders = tep_db_fetch_array($orders_query);

    $products_array = array();
    $products_query = tep_db_query("select products_id, products_name from " . TABLE_ORDERS_PRODUCTS . " where orders_id = '" . (int)$orders['orders_id'] . "' order by products_name");
    while ($products = tep_db_fetch_array($products_query)) {
      $products_array[] = array('id' => $products['products_id'],
                                'text' => $products['products_name']);
    }
  }

  $content = CONTENT_CHECKOUT_SUCCESS;

  include (bts_select('main')); // BTSv1.5


  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>