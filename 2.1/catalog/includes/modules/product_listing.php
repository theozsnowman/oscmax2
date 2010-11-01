<?php
/*
$Id: product_listing.php 3 2006-05-27 04:59:07Z user $

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright 2006 osCMax

  Released under the GNU General Public License
*/
?>
<!-- PGM fix for Corner Banners in Internet Explorer -->
<!--[if IE]>
<style>
img.corner_banner { display:inline-block; margin-left:-7px; margin-top:-7px; position:absolute; } 
</style>
<![endif]-->

<!-- PGM SORT ORDER, NUMBER DISPLAY, GRID SWITCH -->
<?php

if (tep_not_null($_GET['sort'])) $_GET['sort'] = $_GET['sort'];
$max_results = (tep_not_null($_GET['max']) ? $_GET['max'] : MAX_DISPLAY_SEARCH_RESULTS);


// sort order array
for ($i=0, $n=sizeof($column_list); $i<$n; $i++) {
      switch ($column_list[$i]) {
        case 'PRODUCT_LIST_NAME':
          $sort_array[] = array('id' => '2a', 'text' => 'Product Name (A-Z)');
		  $sort_array[] = array('id' => '2d', 'text' => 'Product Name (Z-A)');
          break;
        case 'PRODUCT_LIST_PRICE':
		  $sort_array[] = array('id' => '3a', 'text' => 'Price (Low - High)');
		  $sort_array[] = array('id' => '3d', 'text' => 'Price (High - Low)');
          break;	
      }
    }

// Max Results Array		
for ($i=1, $n=5; $i<$n; $i++) {		
		$max_display[] = array('id' => MAX_DISPLAY_SEARCH_RESULTS * $i, 'text' => MAX_DISPLAY_SEARCH_RESULTS * $i); 
		}	
		$max_display[] = array('id' => 1000000, 'text' => 'Show All');

// store GET vars		
$get_vars = '';
    reset($_GET);
    while (list($key, $value) = each($_GET)) {
      if ( ($key != 'sort') && ($key != 'max') && ($key != tep_session_name()) && ($key != 'x') && ($key != 'y') ) {
        $get_vars .= tep_draw_hidden_field($key, $value);
      }
    }

// BOF QPBPP for SPPC
  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_PRODUCT_LISTING);
// EOF QPBPP for SPPC

// set gridlist session variable to list
$_SESSION['gridlist'] = 'list';

$listing_split = new splitPageResults($listing_sql, $max_results, 'p.products_id');
  if ( ($listing_split->number_of_rows > 0) && ( (PREV_NEXT_BAR_LOCATION == '2') || (PREV_NEXT_BAR_LOCATION == '3') ) ) {

$list = '<table align="center"><tr><td width="20" align="center"><a href="' . tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('gridlist')). 'gridlist=list') . '"> ' . tep_image(DIR_WS_ICONS . 'list.png', 'View as List') . '</a></td><td width="80" class="smallText"><a class="filterbox" href="' . tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('gridlist')). 'gridlist=list') . '">View as List</a></td></tr></table>';

$grid = '<table align="center"><tr><td width="20" align="center"><a href="' . tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('gridlist')). 'gridlist=grid') . '"> ' . tep_image(DIR_WS_ICONS . 'grid.png', 'View as Grid') . '</a></td><td width="80" class="smallText"><a class="filterbox" href="' . tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('gridlist')). 'gridlist=grid') . '">View as Grid</a></td></tr></table>';


// BOF SPPC Hide products and categories from groups
  $page =  $_SERVER["SCRIPT_NAME"];
  $break = Explode('/', $page);
  $pfile = $break[count($break) - 1];
  
    if (PRODUCT_LIST_FILTER > 0) {
      if (isset($_GET['manufacturers_id'])) {
        $filterlist_sql = "select distinct c.categories_id as id, cd.categories_name as name from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c, " . TABLE_CATEGORIES . " c, " . TABLE_CATEGORIES_DESCRIPTION . " cd where p.products_status = '1' and find_in_set('" . $customer_group_id . "', categories_hide_from_groups) = 0 and find_in_set('".$customer_group_id."', products_hide_from_groups) = 0 and p.products_id = p2c.products_id and p2c.categories_id = c.categories_id and p2c.categories_id = cd.categories_id and cd.language_id = '" . (int)$languages_id . "' and p.manufacturers_id = '" . (int)$_GET['manufacturers_id'] . "' order by cd.categories_name";
      } else {
        $filterlist_sql= "select distinct m.manufacturers_id as id, m.manufacturers_name as name from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c left join " . TABLE_CATEGORIES . " using(categories_id), " . TABLE_MANUFACTURERS . " m where p.products_status = '1' and find_in_set('" . $customer_group_id . "', categories_hide_from_groups) = 0 and find_in_set('".$customer_group_id."', products_hide_from_groups) = 0 and p.manufacturers_id = m.manufacturers_id and p.products_id = p2c.products_id and p2c.categories_id = '" . (int)$current_category_id . "' order by m.manufacturers_name";
      }
// EOF SPPC Hide products and categories from groups

	  $filter = '';
      $filterlist_query = tep_db_query($filterlist_sql);
      if ( (tep_db_num_rows($filterlist_query) > 1)  && ($pfile != 'advanced_search_result.php') ) {
        $filter .= tep_draw_form('filter', FILENAME_DEFAULT, 'get') . TEXT_SHOW . '&nbsp;';
        if (isset($_GET['manufacturers_id'])) {
        $filter .= tep_draw_hidden_field('manufacturers_id', $_GET['manufacturers_id']);
          $options = array(array('id' => '', 'text' => TEXT_ALL_CATEGORIES));
        } else {
          $filter .= tep_draw_hidden_field('cPath', $cPath);
          $options = array(array('id' => '', 'text' => TEXT_ALL_MANUFACTURERS));
        } // end if
        $filter .= tep_draw_hidden_field('sort', $_GET['sort']);
        while ($filterlist = tep_db_fetch_array($filterlist_query)) {
          $options[] = array('id' => $filterlist['id'], 'text' => $filterlist['name']);
        } // end while
        $filter .= tep_draw_pull_down_menu('filter_id', $options, (isset($_GET['filter_id']) ? $_GET['filter_id'] : ''), 'onchange="this.form.submit()"');
        $filter .= tep_hide_session_id() . '</form>' . "\n";
      } else {
		$filter .= $listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS);
	  }
	} // end PRODUCT FILTER if

$page_nav = '<table border="0" width="100%" cellspacing="0" cellpadding="2" class="filterbox"><tr><td class="smallText" width="33%">' .  $filter . '</td><td class="smallText" width="33%" align="center">' . $list . '</td><td class="smallText" width="33%" align="right">' . $listing_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))) . '</td></tr>';

$drop = '<tr><td class="smallText">Results/Page: '. tep_draw_form('maxdisplay', tep_href_link(basename($PHP_SELF), '', $request_type, false), 'get') . $get_vars . (isset($_GET['sort']) ? tep_draw_hidden_field('sort', $_GET['sort']) : '') .  tep_draw_pull_down_menu('max', $max_display, $_GET['max'], 'onChange="this.form.submit();"') . tep_hide_session_id().'</form></td><td align="center">' . $grid . '</td><td class="smallText" align="right">Sort Order: ' . tep_draw_form('sorting', tep_href_link(basename($PHP_SELF), '', $request_type, false), 'get') . $get_vars . (isset($_GET['max']) ? tep_draw_hidden_field('max', $_GET['max']) : '') . tep_draw_pull_down_menu('sort', $sort_array, $_GET['sort'], 'onChange="this.form.submit();"') . tep_hide_session_id().'</form></td></tr></table>';

echo $page_nav;
echo $drop;
echo tep_draw_separator('pixel_trans.gif', '100%', '10');

?>
<!-- PGM SORT ORDER, NUMBER DISPLAY, GRID SWITCH -->
<!-- begin extra product fields -->
		<?php
            $epf_list = array();
			$epf_number = count($epf);
			if ($epf_number > 0) { // hide epf if blank ?>
        	  <table border="0" width="100%" cellspacing="0" cellpadding="2" class="filterbox">
          		<tr>
            	  <td class="main" align="right" colspan="2">
					<?php
					  $epf_list = array();
					  foreach ($epf as $e) {
						if ($e['restrict']) $epf_list[] = $e['field'];
					  }
					  echo tep_draw_form('epf_restrict', FILENAME_DEFAULT, 'get');
					  if (is_array($_GET) && (sizeof($_GET) > 0)) {
						reset($_GET);
						while (list($key, $value) = each($_GET)) {
						  if ( (strlen($value) > 0) && ($key != tep_session_name()) && (!in_array($key, $epf_list)) ) {
							echo tep_draw_hidden_field($key, $value);
						  }
						}
					  }
					  foreach ($epf as $e) {
						if ($e['restrict']) {
						  echo sprintf(TEXT_RESTRICT_TO, $e['label'], tep_draw_pull_down_menu($e['field'], tep_build_epf_pulldown($e['id'], $languages_id, array(array('id' => '', 'text' => TEXT_ANY_VALUE))),'', 'onchange="this.form.submit()"')) . '<br>';
						}
					  }
					 ?>
                  </td>
          		</tr>
        	  </table>
           <?php } // end if to hide epf ?>
<!-- end extra product fields -->
<?php
  echo tep_draw_separator('pixel_trans.gif', '100%', '10');
  }

  $list_box_contents = array();

  for ($col=0, $n=sizeof($column_list); $col<$n; $col++) {
    switch ($column_list[$col]) {
      case 'PRODUCT_LIST_MODEL':
        $lc_text = TABLE_HEADING_MODEL;
        $lc_align = '';
// LINE ADDED
        $lc_class = 'class="headerNavigation"';
        break;
      case 'PRODUCT_LIST_NAME':
        $lc_text = TABLE_HEADING_PRODUCTS;
        $lc_align = '';
// LINE ADDED
        $lc_class = 'class="headerNavigation"';
        break;
      case 'PRODUCT_LIST_MANUFACTURER':
        $lc_text = TABLE_HEADING_MANUFACTURER;
        $lc_align = '';
// LINE ADDED
        $lc_class = 'class="headerNavigation"';
        break;
      case 'PRODUCT_LIST_PRICE':
        $lc_text = TABLE_HEADING_PRICE;
        $lc_align = 'right';
// LINE ADDED
        $lc_class = 'class="headerNavigation"';
        break;
      case 'PRODUCT_LIST_QUANTITY':
        $lc_text = TABLE_HEADING_QUANTITY;
        $lc_align = 'right';
// LINE ADDED
        $lc_class = 'class="headerNavigation"';
        break;
      case 'PRODUCT_LIST_WEIGHT':
        $lc_text = TABLE_HEADING_WEIGHT;
        $lc_align = 'right';
// LINE ADDED
        $lc_class = 'class="headerNavigation"';
        break;
      case 'PRODUCT_LIST_IMAGE':
        $lc_text = TABLE_HEADING_IMAGE;
        $lc_align = 'center';
// LINE ADDED
        $lc_class = 'class="headerNavigation"';
        break;
      case 'PRODUCT_LIST_BUY_NOW':
// Bugfix 0000069        
//      $lc_text = '<a href="' . tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('action', 'pName')) . 'action=buy_now&products_id=' . $listing['products_id']) . '">' . tep_image_button('button_buy_now.gif', IMAGE_BUTTON_BUY_NOW) . '</a> ';
        $lc_text = TABLE_HEADING_BUY_NOW;
// LINE ADDED
        $lc_align = 'center';
        break;
    }

    if ( ($column_list[$col] != 'PRODUCT_LIST_BUY_NOW') && ($column_list[$col] != 'PRODUCT_LIST_IMAGE') ) {
      $lc_text = tep_create_sort_heading($_GET['sort'], $col+1, $lc_text);
    }

    $list_box_contents[0][] = array('align' => $lc_align,
	                                'params' => 'class="productListing-heading" style="cellpadding: 3px"',
//                                    'params' => $lc_class,
                                    'text' => '&nbsp;' . $lc_text . '&nbsp;');
  }

  if ($listing_split->number_of_rows > 0) {
    $rows = 0;
    $listing_query = tep_db_query($listing_split->sql_query);
// BOF: MOD - Separate Pricing per Customer
    $no_of_listings = tep_db_num_rows($listing_query);
// global variable (session) $sppc_customer_group_id -> local variable customer_group_id

  if(!tep_session_is_registered('sppc_customer_group_id')) {
  $customer_group_id = '0';
  } else {
   $customer_group_id = $sppc_customer_group_id;
  }
  while ($_listing = tep_db_fetch_array($listing_query)) {
// BOF QPBPP for SPPC
     $_listing['discount_categories_id'] = NULL;
     $listing[] = $_listing;
     $list_of_prdct_ids[] = $_listing['products_id'];
    }
    $list_of_prdct_ids = array_unique($list_of_prdct_ids);
// EOF QPBPP for SPPC
// next part is a debug feature, when uncommented it will print the info that this module receives
 /*
   echo '<pre>';
   print_r($listing);
   echo '</pre>';
 */
  $select_list_of_prdct_ids = "products_id = '".$list_of_prdct_ids[0]."' ";
  if ($no_of_listings > 1) {
    for ($n = 1 ; $n < count($list_of_prdct_ids) ; $n++) {
      $select_list_of_prdct_ids .= "or products_id = '".$list_of_prdct_ids[$n]."' ";
    }
  }

// get all product prices for products with the particular customer_group_id
// however not necessary for customer_group_id = 0
  if ($customer_group_id != '0') {
// BOF QPBPP for SPPC
    $pg_query = tep_db_query("select pg.products_id, customers_group_price as price from " . TABLE_PRODUCTS_GROUPS . " pg where (".$select_list_of_prdct_ids.") and pg.customers_group_id = '" . $customer_group_id . "' and customers_group_price != null");
// EOF QPBPP for SPPC
//  $no_of_pg_products = tep_db_num_rows($pg_query) ;
    while ($pg_array = tep_db_fetch_array($pg_query)) {
      $new_prices[] = array ('products_id' => $pg_array['products_id'], 'products_price' => $pg_array['price'], 'specials_new_products_price' => '', 'final_price' => $pg_array['price']);
    }
    for ($x = 0; $x < $no_of_listings; $x++) {
// replace products prices with those from customers_group table
      if(!empty($new_prices)) {
        for ($i = 0; $i < count($new_prices); $i++) {
          if( $listing[$x]['products_id'] == $new_prices[$i]['products_id'] ) {
            $listing[$x]['products_price'] = $new_prices[$i]['products_price'];
            $listing[$x]['final_price'] = $new_prices[$i]['final_price'];
          }
        }
      } // end if(!empty($new_prices)
      $listing[$x]['specials_new_products_price'] = ''; // makes sure that a retail specials price doesn't carry over to another customer group
      $listing[$x]['final_price'] = $listing[$x]['products_price']; // final price should not be the retail special price
    } // end for ($x = 0; $x < $no_of_listings; $x++)
  } // end if ($customer_group_id != '0')

// an extra query is needed for all the specials

  $specials_query = tep_db_query("select products_id, specials_new_products_price from " . TABLE_SPECIALS . " where (".$select_list_of_prdct_ids.") and status = '1' and customers_group_id = '" .$customer_group_id. "'");
  while ($specials_array = tep_db_fetch_array($specials_query)) {
  $new_s_prices[] = array ('products_id' => $specials_array['products_id'], 'products_price' => '', 'specials_new_products_price' => $specials_array['specials_new_products_price'] , 'final_price' => $specials_array['specials_new_products_price']);
  }

// add the correct specials_new_products_price and replace final_price
  for ($x = 0; $x < $no_of_listings; $x++) {

        if(!empty($new_s_prices)) {
      for ($i = 0; $i < count($new_s_prices); $i++) {
     if( $listing[$x]['products_id'] == $new_s_prices[$i]['products_id'] ) {
       $listing[$x]['specials_new_products_price'] = $new_s_prices[$i]['specials_new_products_price'];
       $listing[$x]['final_price'] = $new_s_prices[$i]['final_price'];
     }
         }
     } // end if(!empty($new_s_prices)
  } // end for ($x = 0; $x < $no_of_listings; $x++)

// BOF QPBPP for SPPC
    $price_breaks_query = tep_db_query("select products_id, products_price, products_qty from  " . TABLE_PRODUCTS_PRICE_BREAK . " where products_id in (" . implode(',', $list_of_prdct_ids) . ") and customers_group_id = '" . $customer_group_id . "' order by products_id, products_qty");
    while ($price_break = tep_db_fetch_array($price_breaks_query)) {
          $price_breaks_array[$price_break['products_id']][] = array('products_price' => $price_break['products_price'], 'products_qty' => $price_break['products_qty']);
    }
// get discount category plus quantity blocks and minimum order quantity for retail
    $discount_category_query = tep_db_query("select p.products_id, p.products_qty_blocks as qtyBlocks, p.products_min_order_qty, p.products_quantity, p.manufacturers_id, p.products_weight, discount_categories_id from " . TABLE_PRODUCTS ." p left join (select products_id, discount_categories_id from " . TABLE_PRODUCTS_TO_DISCOUNT_CATEGORIES . " where products_id in (" . implode(',', $list_of_prdct_ids) . ") and customers_group_id = '" . $customer_group_id . "') as ptdc on p.products_id = ptdc.products_id where p.products_id in (" . implode(',', $list_of_prdct_ids) . ")");
      while ($dc_array = tep_db_fetch_array($discount_category_query)) {
        $discount_categories[] = array ('products_id' => $dc_array['products_id'], 'qtyBlocks' => ($customer_group_id == '0' ? $dc_array['qtyBlocks']: '1'), 'products_min_order_qty' => ($customer_group_id == '0' ? $dc_array['products_min_order_qty']: '1'), 'products_quantity' => $dc_array['products_quantity'], 'products_weight' => $dc_array['products_weight'], 'discount_categories_id' => $dc_array['discount_categories_id']);
      }
      if(!empty($discount_categories)) {
        $no_of_discount_cats = count($discount_categories);
      for ($x = 0; $x < $no_of_listings; $x++) {
// add discount categories to the listing array 
        for ($i = 0; $i < $no_of_discount_cats; $i++) {
            if ($listing[$x]['products_id'] == $discount_categories[$i]['products_id'] ) {
                $listing[$x]['discount_categories_id'] = $discount_categories[$i]['discount_categories_id'];
                $listing[$x]['qtyBlocks'] = $discount_categories[$i]['qtyBlocks'];
                $listing[$x]['products_min_order_qty'] = $discount_categories[$i]['products_min_order_qty'];
                $listing[$x]['products_quantity'] = $discount_categories[$i]['products_quantity'];
                $listing[$x]['products_weight'] = $discount_categories[$i]['products_weight'];
              }
          } // end for ($i = 0; $i < $no_of_discount_cats; $i++) {
        }
    } // end if(!empty($discount_categories)

// if customer group id is not retail we will have to do another query to get the 
// quantity blocks and minimum order quantity
  if ($customer_group_id != '0') {
    $pg_qb_moq_query = tep_db_query("select pg.products_id, pg.products_qty_blocks as qtyBlocks, pg.products_min_order_qty from " . TABLE_PRODUCTS_GROUPS . " pg where products_id in (" . implode(',', $list_of_prdct_ids) . ") and pg.customers_group_id = '" . $customer_group_id . "'");

      while ($pg_qb_moq_array = tep_db_fetch_array($pg_qb_moq_query)) {
       $new_qb_moq[] = array ('products_id' => $pg_qb_moq_array['products_id'], 'qtyBlocks' => $pg_qb_moq_array['qtyBlocks'], 'products_min_order_qty' => $pg_qb_moq_array['products_min_order_qty']);
      }
      if (!empty($new_qb_moq)) {
        $no_of_pg_qb_moq = count($new_qb_moq);
      for ($x = 0; $x < $no_of_listings; $x++) {
        for  ($i = 0; $i < $no_of_pg_qb_moq; $i++) {
          if ($listing[$x]['products_id'] == $new_qb_moq[$i]['products_id'] ) {
                $listing[$x]['qtyBlocks'] = $new_qb_moq[$i]['qtyBlocks'];
                $listing[$x]['products_min_order_qty'] = $new_qb_moq[$i]['products_min_order_qty'];
          }
        }
      }
    } // end if (!empty($new_qb_moq))
  } // end if ($customer_group_id != '0')
// EOF QPBPP for SPPC

//    while ($listing = tep_db_fetch_array($listing_query)) { (was original code)
	for ($x = 0; $x < $no_of_listings; $x++) {
// EOF: MOD - Separate Pricing per Customer

      $rows++;

      if (($rows/2) == floor($rows/2)) {
        $list_box_contents[] = array('params' => 'class="productListing-even"');
      } else {
        $list_box_contents[] = array('params' => 'class="productListing-odd"');
      }

      $cur_row = sizeof($list_box_contents) - 1;

      for ($col=0, $n=sizeof($column_list); $col<$n; $col++) {
        $lc_align = '';

// BOF: MOD - Separate Pricing per Customer - Added on may lines [$x]
        switch ($column_list[$col]) {
		  case 'PRODUCT_CORNER_BANNER':
		  $lc_text = '&nbsp;';
		  
		  // Last Few Remaining Corner Banner
		  if (CB_LAST_FEW == 'true') { 
		    if ($listing[$x]['products_quantity'] <= CB_LAST_FEW_NO) {
	 	      $lc_text = '<img class="corner_banner" src="' . DIR_WS_IMAGES . '/corner_banners/last_few.png" alt="">';
            }	
		  }
		  // Top Rated Corner Banner
		  if (CB_TOP_RATED == 'true') {
		    $reviews_query = tep_db_query("select reviews_rating from " . TABLE_REVIEWS . " where products_id = '" . $listing[$x]['products_id'] . "'");
              $reviews = tep_db_fetch_array($reviews_query);
                if ($reviews['reviews_rating'] >= CB_TOP_RATED_NO) {
                  $lc_text = '<img class="corner_banner" src="' . DIR_WS_IMAGES . '/corner_banners/top_rated.png" alt="">';
                }
		  }
		  // Featured Product Corner Banner
		  if (CB_FEATURED == 'true') {
		    if ($listing[$x]['products_featured'] == 1) {
	 	      $lc_text = '<img class="corner_banner" src="' . DIR_WS_IMAGES . '/corner_banners/featured.png" alt="">';
            }	
		  }
		  // Special Offer Price Corner Banner
		  if (CB_SPECIALS == 'true') {
		    if (tep_not_null($listing[$x]['specials_new_products_price'])) {			 
			  //Find out discount and round to nearest 5
			  $fullprice = $listing[$x]['products_price'];
			  $saleprice = $listing[$x]['specials_new_products_price'];
			  $discount = ((($fullprice - $saleprice) / $fullprice) * 100);
			  $rounded_discount = floor($discount / 5) * 5; 
			    if ($rounded_discount >= CB_SPECIALS_NO) { 
                  $lc_text = '<img class="corner_banner" src="' . DIR_WS_IMAGES . '/corner_banners/save' . $rounded_discount . '.png" alt="">';
				}
            } 
		  }
		  // Call for Price Corner Banner
		  if (CB_CALL_FOR_PRICE == 'true') {
		    if ($listing[$x]['products_price'] == CALL_FOR_PRICE_VALUE) {
		      $lc_text = '<img class="corner_banner" src="' . DIR_WS_IMAGES . '/corner_banners/callforprice.png" alt="">';
		    }
		  }
		  // Out of Stock Corner Banner
		  if (CB_OUT_OF_STOCK == 'true') {
		    if ($listing[$x]['products_quantity'] == 0) {
		      $lc_text = '<img class="corner_banner" src="' . DIR_WS_IMAGES . '/corner_banners/out_of_stock.png" alt="">';
		    }
		  }	
		  break;
		  case 'PRODUCT_LIST_MODEL':
            $lc_align = '';
            $lc_text = '&nbsp;' . $listing[$x]['products_model'] . '&nbsp;';
            break;
          case 'PRODUCT_LIST_NAME':
            // begin extra product fields
            $extra = '';
            foreach ($epf as $e) {
              if ($e['listing']) {
                $mt = ($e['uses_list'] && !$e['multi_select'] ? ($listing[$e['field']] == 0) : !tep_not_null($listing[$e['field']]));
                if (!$mt) { // only list fields that aren't empty
                  $extra .= '<br><b>' . $e['label'] . ': </b>';
                  if ($e['uses_list']) {
                    if ($e['multi_select']) {
                      $epf_values = explode('|', trim($listing[$e['field']], '|'));
                      $epf_string = '';
                      foreach ($epf_values as $v) {
                        $epf_string .= tep_get_extra_field_list_value($v) . ', ';
                      }
                      $extra .= trim($epf_string, ', ');
                    } else {
                      $extra .= tep_get_extra_field_list_value($listing[$e['field']],$e['show_chain'] == 1);
                    }
                  } else {
                    $extra .= $listing[$e['field']];
                  }
                }
              }
            }
			// add short description
			if (PRODUCT_SHORT_DESCRIPTION == 'true') {
			  $short = '';
			  $short .= $listing[$x]['products_short'];
			}
            // end extra product fields
            $lc_align = '';
            if (isset($_GET['manufacturers_id'])) {
              $lc_text = '<a href="' . tep_href_link(FILENAME_PRODUCT_INFO, 'manufacturers_id=' . $_GET['manufacturers_id'] . '&products_id=' . $listing[$x]['products_id']) . '"><b>' . $listing[$x]['products_name'] . '</b>' . $short /*begin epf*/ . $extra /*end epf*/ . '</a>';
            } else {
              $lc_text = '<a href="' . tep_href_link(FILENAME_PRODUCT_INFO, ($cPath ? 'cPath=' . $cPath . '&' : '') . 'products_id=' . $listing[$x]['products_id']) . '"><b>' . $listing[$x]['products_name'] . '</b>' . $short /*begin epf*/ . $extra /*end epf*/ . '</a>&nbsp;';
            }
            break;
          case 'PRODUCT_LIST_MANUFACTURER':
            $lc_align = '';
            $lc_text = '&nbsp;<a href="' . tep_href_link(FILENAME_DEFAULT, 'manufacturers_id=' . $listing[$x]['manufacturers_id']) . '">' . $listing[$x]['manufacturers_name'] . '</a>&nbsp;';
            break;
          case 'PRODUCT_LIST_PRICE':
            $lc_align = 'right';
// BOF QPBPP for SPPC
            $price_breaks_from_listing = array();
            if (isset($price_breaks_array[$listing[$x]['products_id']])) {
              $price_breaks_from_listing = $price_breaks_array[$listing[$x]['products_id']];
            }
            $pf->loadProduct($listing[$x]['products_id'], $languages_id, $listing[$x], $price_breaks_from_listing);
            $lc_text = $pf->getPriceStringShort();
// EOF QPBPP for SPPC
            break;
          case 'PRODUCT_LIST_QUANTITY':
            $lc_align = 'right';
            $lc_text = '&nbsp;' . $listing[$x]['products_quantity'] . '&nbsp;';
            break;
          case 'PRODUCT_LIST_WEIGHT':
            $lc_align = 'right';
            $lc_text = '&nbsp;' . $listing[$x]['products_weight'] . '&nbsp;';
            break;
          case 'PRODUCT_LIST_IMAGE':
            $lc_align = 'center';
            if (isset($_GET['manufacturers_id'])) {
              $lc_text = '<a href="' . tep_href_link(FILENAME_PRODUCT_INFO, 'manufacturers_id=' . $_GET['manufacturers_id'] . '&products_id=' . $listing[$x]['products_id']) . '">' . tep_image(DIR_WS_IMAGES . DYNAMIC_MOPICS_THUMBS_DIR . $listing[$x]['products_image'], $listing[$x]['products_name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) . '</a>';
            } else {
              $lc_text = '&nbsp;<a href="' . tep_href_link(FILENAME_PRODUCT_INFO, ($cPath ? 'cPath=' . $cPath . '&' : '') . 'products_id=' . $listing[$x]['products_id']) . '">' . tep_image(DIR_WS_IMAGES . DYNAMIC_MOPICS_THUMBS_DIR . $listing[$x]['products_image'], $listing[$x]['products_name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) . '</a>&nbsp;';
            }
            break;
          case 'PRODUCT_LIST_BUY_NOW':
            $lc_align = 'center';
			if ($listing[$x]['products_price'] == CALL_FOR_PRICE_VALUE){ //fix for call for price
			  $lc_text = '<a href="' . tep_href_link(FILENAME_CONTACT_US, 'enquiry=Price Inquiry%0D%0A%0D%0AModel: ' . $listing[$x]['products_model'] . '%0D%0AProduct Name: ' . $listing[$x]['products_name'] . '%0D%0AProduct URL: ' . tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $listing[$x]['products_id'] .'%0D%0A%0D%0A') . '') . '">' . tep_image_submit('button_cfp.gif', IMAGE_BUTTON_CFP) . '</a>';
			} else {
              $lc_text = '<a href="' . tep_href_link(basename($PHP_SELF), tep_get_all_get_params(array('action')) . 'action=buy_now&products_id=' . $listing[$x]['products_id']) . '">' . tep_image_button('button_buy_now.gif', IMAGE_BUTTON_BUY_NOW) . '</a>&nbsp;';
			}
            break;
// EOF: MOD - Separate Pricing per Customer - Added on may lines [$x]
        }

        $list_box_contents[$cur_row][] = array('align' => $lc_align,
                                               'params' => 'class="productListing-data-list"',
                                               'text'  => $lc_text);
      }
    }

    new productListingBoxList($list_box_contents);
  } else {
    $list_box_contents = array();

    $list_box_contents[0] = array('params' => 'class="productListing-odd"');
    $list_box_contents[0][] = array('params' => 'class="productListing-data"',
                                   'text' => TEXT_NO_PRODUCTS);

    new productListingBox($list_box_contents);
  }

  if ( ($listing_split->number_of_rows > 0) && ((PREV_NEXT_BAR_LOCATION == '2') || (PREV_NEXT_BAR_LOCATION == '3')) ) {
?>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
  	<td colspan="2"><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
  </tr>
</table>
<table class="filterbox" width="100%" cellpadding="2" cellspacing="0" border="0">
  <tr>
    <td class="smallText"><?php echo $listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS); ?></td>
    <td class="smallText" align="right"><?php echo $listing_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></td>
  </tr>
</table>
<?php
  }
?>