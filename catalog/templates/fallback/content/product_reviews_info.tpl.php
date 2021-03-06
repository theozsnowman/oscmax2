<?php
/*
$Id$

  osCmax e-Commerce
  http://www.osCmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
?>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '4'); ?></td>
      </tr>
      <tr>
        <td class="productinfo_header">
          <table border="0" width="100%" cellspacing="0" cellpadding="0">
            <tr>
              <td class="pageHeading" valign="top"><?php echo $products_name; ?></td>
              <td class="pageHeading" align="right" valign="top"><?php echo $products_price; ?></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      <tr>
        <td>
          <table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <td class="main"><?php echo '<b>' . sprintf(TEXT_REVIEW_BY, tep_output_string_protected($review['customers_name'])) . '</b>'; ?></td>
              <td class="smallText" align="right"><?php echo sprintf(TEXT_REVIEW_DATE_ADDED, tep_date_long($review['date_added'])); ?></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td class="productinfo_description">
          <table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
              <td width="10"><?php echo tep_draw_separator('pixel_trans.gif', '10', '1'); ?></td>
              <td valign="top" class="main"><?php echo tep_break_string(nl2br(tep_output_string_protected($review['reviews_text'])), 60, '-<br>') . '<br><br><i>' . sprintf(TEXT_REVIEW_RATING, tep_image(DIR_WS_IMAGES . 'icons/stars_' . $review['reviews_rating'] . '.gif', sprintf(TEXT_OF_5_STARS, $review['reviews_rating'])), sprintf(TEXT_OF_5_STARS, $review['reviews_rating'])) . '</i>'; ?></td>
              <td width="10" align="right"><?php echo tep_draw_separator('pixel_trans.gif', '10', '1'); ?></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      <tr>
        <td class="productinfo_buttons">
          <table width="100%" border="0" cellspacing="0" cellpadding="2">
            <tr>
               <td width="10"><?php echo tep_draw_separator('pixel_trans.gif', '10', '1'); ?></td>
               <td class="main" align="left"><?php echo '<a href="' . tep_href_link(FILENAME_PRODUCT_REVIEWS, tep_get_all_get_params(array('reviews_id'))) . '">' . tep_image_button('button_back.gif', IMAGE_BUTTON_BACK) . '</a>'; ?></td>
               <td class="main" align="right"><?php echo '<a href="' . tep_href_link(FILENAME_PRODUCT_REVIEWS_WRITE, tep_get_all_get_params(array('reviews_id'))) . '">' . tep_image_button('button_submit_review.gif', IMAGE_BUTTON_WRITE_REVIEW) . '</a>'; ?></td>
               <td width="10"><?php echo tep_draw_separator('pixel_trans.gif', '10', '1'); ?></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>    