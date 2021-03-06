<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

// Most of this file is changed or moved to BTS - Basic Template System - format.

if (!strstr($_SERVER['PHP_SELF'],'checkout.php')) {
	
?>

<?php if (!tep_session_is_registered('customer_id') && ENABLE_PAGE_CACHE == 'true' && class_exists('page_cache') ) {
      echo "<%CART_CACHE%>";
      } else {
?>
<!-- shopping_cart //-->
<?php
if (BASKET_CART == 'cart') {
  $boxHeading = '<a href="' . tep_href_link(FILENAME_SHOPPING_CART) . '">' . BOX_HEADING_SHOPPING_CART . '</a>';
} else {
  $boxHeading = '<a href="' . tep_href_link(FILENAME_SHOPPING_CART) . '">' . BOX_HEADING_SHOPPING_BASKET . '</a>';	
}
  $corner_top_left = 'rounded';
  $corner_top_right = 'rounded';
  $corner_bottom_left = 'rounded';
  $corner_bottom_right = 'rounded';
  
  $boxContent_attributes = '';    
  $boxLink = '<a href="' . tep_href_link(FILENAME_SHOPPING_CART) . '">' . tep_image(bts_select('images', 'infobox/arrow_right.png'), ICON_ARROW_RIGHT) . '</a>';
  $box_base_name = 'shopping_cart'; // for easy unique box template setup (added BTSv1.2)
  $box_id = $box_base_name . 'Box';  // for CSS styling paulm (editted BTSv1.2)

  $boxContent = '';
  if ($cart->count_contents() > 0) {
    $boxContent .= '<table border="0" width="100%" cellspacing="0" cellpadding="0">';
    $products = $cart->get_products();
    for ($i=0, $n=sizeof($products); $i<$n; $i++) {
      $boxContent .= '<tr><td align="right" valign="top" class="infoBoxContents">';

      if ((tep_session_is_registered('new_products_id_in_cart')) && ($new_products_id_in_cart == $products[$i]['id'])) {
        $boxContent .= '<span class="newItemInCart">';
      } else {
        $boxContent .= '<span class="infoBoxContents">';
      }

      $boxContent .= $products[$i]['quantity'] . '&nbsp;x&nbsp;</span></td><td valign="top" class="infoBoxContents"><a href="' . tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $products[$i]['id']) . '">';

      if ((tep_session_is_registered('new_products_id_in_cart')) && ($new_products_id_in_cart == $products[$i]['id'])) {
        $boxContent .= '<span class="newItemInCart">';
      } else {
        $boxContent .= '<span class="infoBoxContents">';
      }

      $boxContent .= $products[$i]['name'] . '</span></a></td>';

      if ((tep_session_is_registered('new_products_id_in_cart')) && ($new_products_id_in_cart == $products[$i]['id'])) {
        tep_session_unregister('new_products_id_in_cart');
      }
	  
	  $boxContent .= '<td><a href="' . tep_href_link(FILENAME_SHOPPING_CART, 'action=remove_product&products_id='.$products[$i]['id'].'', 'NONSSL').'">' . tep_image(DIR_WS_ICONS . 'basket_delete.png', IMAGE_BUTTON_REMOVE_PRODUCT, 16, 16) . '</a></td>';
	  
	  $boxContent .= '</tr>';
	  
    }
    $boxContent .= '</table>';
  } else {
    $boxContent .= BOX_SHOPPING_CART_EMPTY;
  }

  if ($cart->count_contents() > 0) {
    $boxContent .= tep_draw_separator();
    $boxContent .= '<div align="right">' . $currencies->format($cart->show_total(true)) . '</div>';

  }
// BOF - MOD: CREDIT CLASS Gift Voucher Contribution
  if (tep_session_is_registered('customer_id')) {
    $gv_query = tep_db_query("select amount from " . TABLE_COUPON_GV_CUSTOMER . " where customer_id = '" . $customer_id . "'");
    $gv_result = tep_db_fetch_array($gv_query);
    if ($gv_result['amount'] > 0 ) {
      $boxContent .= tep_draw_separator();
      $boxContent .= '<table cellpadding="0" width="100%" cellspacing="0" border="0"><tr><td class="smallText">' . VOUCHER_BALANCE . '</td><td class="smallText" align="right" valign="bottom">' . $currencies->format($gv_result['amount']) . '</td></tr></table>';
      $boxContent .= '<table cellpadding="0" width="100%" cellspacing="0" border="0"><tr><td class="smallText"><a href="'. tep_href_link(FILENAME_GV_SEND) . '">' . BOX_SEND_TO_FRIEND . '</a></td></tr></table>';
    }
  }
  if (tep_session_is_registered('gv_id')) {
    $gv_query = tep_db_query("select coupon_amount from " . TABLE_COUPONS . " where coupon_id = '" . $gv_id . "'");
    $coupon = tep_db_fetch_array($gv_query);
    $boxContent .= tep_draw_separator();
    $boxContent .= '<table cellpadding="0" width="100%" cellspacing="0" border="0"><tr><td class="smallText">' . VOUCHER_REDEEMED . '</td><td class="smallText" align="right" valign="bottom">' . $currencies->format($coupon['coupon_amount']) . '</td></tr></table>';

  }
  if (tep_session_is_registered('cc_id') && $cc_id) {
 $coupon_query = tep_db_query("select * from " . TABLE_COUPONS . " where coupon_id = '" . $cc_id . "'");
 $coupon = tep_db_fetch_array($coupon_query);
 $coupon_desc_query = tep_db_query("select * from " . TABLE_COUPONS_DESCRIPTION . " where coupon_id = '" . $cc_id . "' and language_id = '" . $languages_id . "'");
 $coupon_desc = tep_db_fetch_array($coupon_desc_query);
 $text_coupon_help = sprintf("%s",$coupon_desc['coupon_name']);
    $boxContent .= tep_draw_separator();
    $boxContent .= '<table cellpadding="0" width="100%" cellspacing="0" border="0"><tr><td class="couponText"><a href="javascript:couponpopupWindow(\'' . tep_href_link(FILENAME_POPUP_COUPON_HELP, 'cID=' . $cc_id) . '\')">' . CART_COUPON . '</a></td><td class="couponText" align="right" valign="bottom">' . '<a href="javascript:couponpopupWindow(\'' . tep_href_link(FILENAME_POPUP_COUPON_HELP, 'cID=' . $cc_id) . '\')">' . $coupon['coupon_code'] . '</a>' . '</td></tr></table>';

  }
// EOF - MOD: CREDIT CLASS Gift Voucher Contribution

include (bts_select('boxes', $box_base_name)); // BTS 1.5

  $boxLink = '';

}

} // end if to check for OPC
?>
<!-- shopping_cart_eof //-->
