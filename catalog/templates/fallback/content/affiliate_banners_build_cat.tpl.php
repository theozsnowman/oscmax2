<?php
/*
$Id$

  osCmax e-Commerce
  http://www.osCmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
?>
<!-- body_text //-->
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '4'); ?></td>
      </tr>
	  <tr>
        <td class="productinfo_header"><table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td class="pageHeading"><?php echo HEADING_TITLE; ?></td>
            <td align="right">&nbsp;</td>
          </tr>
	      <tr>
            <td colspan=2 class="main"><?php echo TEXT_INFORMATION; ?></td>
          </tr>
        </table>
	   </td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      <tr>
        <td><table width="100%" align="center" border="0" cellpadding="4" cellspacing="0"><td>
          <tr>
            <td class="infoBoxHeading" align="center"><?php echo TEXT_AFFILIATE_INDIVIDUAL_BANNER . ' ' . (isset($affiliate_banners['affiliate_banners_title']) ? $affiliate_banners['affiliate_banners_title'] : ''); ?></td>
          </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
          <tr>
            <td class="smallText" align="center"><?php echo TEXT_AFFILIATE_INDIVIDUAL_BANNER_INFO . tep_draw_form('individual_banner', tep_href_link(FILENAME_AFFILIATE_BANNERS_BUILD_CAT) ) . "\n" . tep_draw_input_field('individual_banner_id', '', 'size="5"') . "&nbsp;&nbsp;" . tep_image_submit('button_affiliate_build_a_link.gif', IMAGE_BUTTON_BUILD_A_LINK); ?></form></td>
          </tr>
     <tr>
       <td class="smallText" align="center"><?php echo '<a href="javascript:popupWindow(\'' . tep_href_link(FILENAME_AFFILIATE_VALIDCATS) . '\')"><b>' . TEXT_AFFILIATE_VALIDPRODUCTS . '</b></a>'; ?>&nbsp;&nbsp;<?php echo TEXT_AFFILIATE_INDIVIDUAL_BANNER_VIEW;?><br><?php echo TEXT_AFFILIATE_INDIVIDUAL_BANNER_HELP;?></td>
     </tr>
     <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
<?php
if (isset($_POST['individual_banner_id']) && tep_not_null($_POST['individual_banner_id']) || isset($_GET['individual_banner_id']) && tep_not_null($_GET['individual_banner_id'])) {
  if (tep_not_null($_POST['individual_banner_id'])) $individual_banner_id = $_POST['individual_banner_id'];
    if ($_GET['individual_banner_id']) $individual_banner_id = $_GET['individual_banner_id'];
    $affiliate_pbanners_values = tep_db_query("select c.categories_image, cd.categories_name from " . TABLE_CATEGORIES . " c, " . TABLE_CATEGORIES_DESCRIPTION . " cd where c.categories_id = '" . $individual_banner_id . "' and cd.categories_id = '" . $individual_banner_id . "' and cd.language_id = '" . $languages_id . "'");
      if ($affiliate_pbanners = tep_db_fetch_array($affiliate_pbanners_values)) {
      switch (AFFILIATE_KIND_OF_BANNERS) {
        case 1:
   			$link = '<a href="' . HTTPS_SERVER . DIR_WS_HTTP_CATALOG . FILENAME_DEFAULT . '?ref=' . $affiliate_id . '&cPath=' . $individual_banner_id . '&affiliate_banner_id=1" target="_blank"><img src="' . HTTPS_SERVER . DIR_WS_CATALOG . DIR_WS_IMAGES . CATEGORY_IMAGES_DIR .  $affiliate_pbanners['categories_image'] . '" border="0" alt="' . $affiliate_pbanners['categories_name'] . '"></a>';
   			$link1 = '<a href="' . HTTP_SERVER . DIR_WS_HTTP_CATALOG . FILENAME_DEFAULT . '?ref=' . $affiliate_id . '&cPath=' . $individual_banner_id . '&affiliate_banner_id=1" target="_blank"><img src="' . HTTP_SERVER . DIR_WS_CATALOG . DIR_WS_IMAGES . CATEGORY_IMAGES_DIR . $affiliate_pbanners['categories_image'] . '" border="0" alt="' . $affiliate_pbanners['categories_name'] . '"></a>';
   			$link2 = '<a href="' . HTTP_SERVER . DIR_WS_HTTP_CATALOG . FILENAME_DEFAULT . '?ref=' . $affiliate_id . '&cPath=' . $individual_banner_id . '&affiliate_banner_id=1" target="_blank">' . $affiliate_pbanners['categories_name'] . '</a>'; 
   		break; 
  		case 2: 
   // Link to Products 
   			$link = '<a href="' . HTTPS_SERVER . DIR_WS_HTTP_CATALOG . FILENAME_DEFAULT . '?ref=' . $affiliate_id . '&cPath=' . $individual_banner_id . '&affiliate_banner_id=1" target="_blank"><img src="' . HTTPS_SERVER . DIR_WS_CATALOG . FILENAME_AFFILIATE_SHOW_BANNER . '?ref=' . $affiliate_id . '&affiliate_pbanner_id=' . $individual_banner_id . '" border="0" alt="' . $affiliate_pbanners['categories_name'] . '"></a>';
   			$link1 = '<a href="' . HTTP_SERVER . DIR_WS_HTTP_CATALOG . FILENAME_DEFAULT . '?ref=' . $affiliate_id . '&cPath=' . $individual_banner_id . '&affiliate_banner_id=1" target="_blank"><img src="' . HTTP_SERVER . DIR_WS_CATALOG . FILENAME_AFFILIATE_SHOW_BANNER . '?ref=' . $affiliate_id . '&affiliate_pbanner_id=' . $individual_banner_id . '" border="0" alt="' . $affiliate_pbanners['categories_name'] . '"></a>';
   			$link2 = '<a href="' . HTTP_SERVER . DIR_WS_HTTP_CATALOG . FILENAME_DEFAULT . '?ref=' . $affiliate_id . '&cPath=' . $individual_banner_id . '&affiliate_banner_id=1" target="_blank">' . $affiliate_pbanners['categories_name'] . '</a>'; 
   		break; 
     } 
} 
?>
      <tr>
        <td><table width="100%" align="center" border="0" cellpadding="4" cellspacing="0" class="infoBoxContents">
          <?php if ($affiliate_pbanners['categories_image'] != '') { // only show if image name stored in dbase ?>
          <tr>
            <td class="infoBoxHeading"><?php echo TEXT_AFFILIATE_NAME; ?>&nbsp;<?php echo $affiliate_pbanners['categories_name']; ?></td>
          </tr>
          <tr>
            <td class="smallText" align="center"><?php echo $link; ?></td> 
          </tr> 
          <tr> 
            <td class="smallText"><?php echo TEXT_AFFILIATE_INFO; ?></td> 
          </tr> 
          <tr> 
            <td class="smallText" align="center"> 
             <textarea cols="60" rows="4" class="boxText"><?php echo $link1; ?></textarea> 
            </td> 
          </tr> 
          <tr> 
            <td>&nbsp;<td> 
          </tr> 
          <?php } ?>
          <tr>
            <td class="infoBoxHeading"><?php echo TEXT_AFFILIATE_NAME; ?>&nbsp;<?php echo $affiliate_pbanners['categories_name']; ?></td>
          </tr>
          <tr> 
            <td class="smallText" align="center"><b><?php echo TEXT_AFFILIATE_TEXT_VERSION; ?></b> <?php echo $link2; ?></td> 
          </tr> 
          <tr> 
            <td class="smallText"><?php echo TEXT_AFFILIATE_INFO; ?></td> 
          </tr> 
          <tr> 
            <td class="smallText" align="center"> 
             <textarea cols="60" rows="3" class="boxText"><?php echo $link2; ?></textarea> 
            </td> 
          </tr>
          </table>
<?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?>
<?php
}
?>
	 </td></tr>
	 </td>
      </tr></table>
	 </td>
      </tr>	
     </table>
<!-- body_text_eof //-->
