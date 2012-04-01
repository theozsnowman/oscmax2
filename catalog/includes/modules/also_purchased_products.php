<?php
/*
$Id$

osCmax e-Commerce 
http://www.oscmax.com 

Copyright 2000 - 2011 osCmax

Released under the GNU General Public License 
*/ 

if ($_GET['products_id']) { 
  $ap_query = tep_db_query("select distinct p.products_id, p.products_image, pd.products_name from " . TABLE_ORDERS_PRODUCTS . " opa, " . TABLE_ORDERS_PRODUCTS . " opb, " . TABLE_ORDERS . " o, " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd left join " . TABLE_PRODUCTS_TO_CATEGORIES . " p2c using(products_id) left join " . TABLE_CATEGORIES . " c using(categories_id) where opa.products_id = '" . (int)$_GET['products_id'] . "' and opa.orders_id = opb.orders_id and opb.products_id != '" . (int)$_GET['products_id'] . "' and opb.products_id = p.products_id and opb.orders_id = o.orders_id and p.products_id = pd.products_id and p.products_status = '1' and find_in_set('" . $customer_group_id . "', p.products_hide_from_groups) = '0' group by p.products_id order by o.date_purchased desc limit " . MAX_DISPLAY_ALSO_PURCHASED);
$num_products_ap = tep_db_num_rows($ap_query); 
if ($num_products_ap != 0) { // Check query is not blank

  // PGM WORKS OUT NUMBER OF ROWS AND SPACES NEEDED
	  $total_products_ap = tep_db_num_rows($ap_query);
	  $div3_ap = round($total_products_ap / 3 , 2);
	  $div3main_ap = floor($div3_ap);
	  $div3check_ap = $div3_ap - $div3main_ap;
	  $div3rows_ap = $div3_ap - $div3check_ap;
  // PGM END
  
    if ($num_products_ap >= MIN_DISPLAY_ALSO_PURCHASED) { 

      if (USE_AP_HORIZ_SCROLLER == 'true') {
	?>
    <!-- ap_products //-->
    <style type="text/css">
	.scrollable_ap { width: <?php echo SCROLLER_WIDTH; ?>px; height: <?php echo SCROLLER_HEIGHT; ?>px }
	.items_ap div { width: <?php echo SCROLLER_WIDTH; ?>px; }
	a.browse_ap { margin: <?php echo (SCROLLER_HEIGHT - 56)/2; ?>px 0px; /* Set the margin to height of scroller - height of buttons (56) / 2;  */ }
    <?php if ($total_products_ap <= 3) { ?>
	      a.left_ap, a.right_ap { visibility:hidden !important; }
    <?php } ?>
	</style>

    <?php
      $info_box_contents = array();
      $info_box_contents[] = array('align' => 'left', 'text' => '&nbsp;' . TEXT_ALSO_PURCHASED_PRODUCTS);
      new contentBoxHeading($info_box_contents);
	?>

	<table class="infoBoxScrolling" width="100%" cellspacing="0" cellpadding="0" border="0">
      <tr valign="middle">
        <td>

    <!-- "previous page" action -->
    <a class="prev browse_ap left_ap"></a>

      <!-- root element for scrollable -->
      <div class="scrollable_ap">   
   
        <!-- root element for the items -->
        <div class="items_ap">

      <?php
      $row = 0;
      $col = 0;

      while ($ap = tep_db_fetch_array($ap_query)) {
 
        $pf->loadProduct($ap['products_id'], $languages_id, NULL, NULL);

		  $display_code_ap = '<td width="33%" class="smallText"><br><center><a href="' . tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $ap['products_id']) . '">' . tep_image(DIR_WS_IMAGES . DYNAMIC_MOPICS_THUMBS_DIR . $ap['products_image'], $ap['products_name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) . '</a><br><a href="' . tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $ap['products_id']) . '">' . $ap['products_name'] .'</a><br>' . $pf->getPriceStringShort() . '<br>' . $pf->getProductButtons($ap['products_id'], FILENAME_PRODUCT_INFO, $ap['products_model'], $ap['products_name']) . '</a></center></td>';
 
	  if  (($div3rows_ap <> $row) && ($col == 0)) {
		$output_ap .= '<div><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr valign="middle">' . $display_code_ap;
      } // end if
		
	  if (($div3rows_ap <> $row) && ($col == 1)) {
        $output_ap .= $display_code_ap;
	  } // end if 
		
	  if (($div3rows_ap <> $row) && ($col == 2)) {
        $output_ap .= $display_code_ap . '</tr></table></div>';
   	  } // end if
	
	// Check to seee if this is the final row
		  if (($row == $div3rows_ap) && ($div3check_ap <> 0)) { 
			if ($div3check_ap < 0.5) {
			  //This is the last row and needs two spaces
			  $output_ap .= '<div><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr valign="middle">' . $display_code_ap . '<td width="33%">&nbsp;</td><td width="33%">&nbsp;</td></tr></table></div>'; 	
			} // end if
			
			elseif (($div3check_ap > 0.5) && ($col == 0)) {
			  //This is the last row and needs one space but is only the first column 
			  $output_ap .= '<div><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr valign="middle">' . $display_code_ap; 
			} // end else if
			
			elseif (($div3check_ap > 0.5) && ($col == 1)) {
			  //This is the last row and needs one space and is the second column and needs a spacer
			  $output_ap .= $display_code_ap . '<td width="33%">&nbsp;</td></tr></table></div>'; 
			} // end elseif
		  } // end $row if
	
		$col ++;
        if ($col > 2) {
		  $col = 0;
          $row ++;
        } // end if 
      } // end while
	  
	  echo $output_ap;
?>
   </div>
</div>

    <!-- "next page" action -->
    <a class="next browse_ap right_ap"></a>
    <!-- ap_products_eof //-->

        </td>
      </tr>
    </table>

<?php
	} // end if $num_products_ap
  } // end conditional scroller code
  ?> 
    <!-- ap_products //-->
    <?php
	
	if (USE_AP_HORIZ_SCROLLER != 'true') {  
	
      $info_box_contents = array();
      $info_box_contents[] = array('align' => 'left', 'text' => TEXT_ALSO_PURCHASED_PRODUCTS);
      new contentBoxHeading($info_box_contents);

      $row = 0;
      $col = 0;
      $info_box_contents = array();
	  
	  while ($ap = tep_db_fetch_array($ap_query)) {
	  
        $pf->loadProduct($ap['products_id'], $languages_id, NULL, NULL); 
     
	  $info_box_contents[$row][$col] = array('align' => 'center',
                                             'params' => 'class="smallText" width="33%" valign="top"',
                                             'text' => '<a href="' . tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $ap['products_id']) . '">' . tep_image(DIR_WS_IMAGES . DYNAMIC_MOPICS_THUMBS_DIR . $ap['products_image'], $ap['products_name'], SMALL_IMAGE_WIDTH, SMALL_IMAGE_HEIGHT) . '</a><br><a href="' . tep_href_link(FILENAME_PRODUCT_INFO, 'products_id=' . $ap['products_id']) . '">' . $ap['products_name'] .'</a><br>' . $pf->getPriceStringShort() . '<br>' . $pf->getProductButtons($ap['products_id'], FILENAME_PRODUCT_INFO, $ap['products_model'], $ap['products_name']));
											 
      $col ++;
        if ($col > 2) {
          $col = 0;
          $row ++;
        }
      } // end while
      new contentBox($info_box_contents);
  } // end traditional code
?>
    <!-- ap_products //-->
	<table>
	  <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
    </table>
<?php
  } // end if ($num_products_ap != 0) 
} // end if $_GET
?>