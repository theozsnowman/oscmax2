<?php
/*
$Id$

  osCmax e-Commerce
  http://www.osCmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
?>
<table width="100%" border="0" cellspacing="2" cellpadding="1">
<tr>
  <td>
    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr> 
        <td width="100%">
          <table border="0" width="100%" cellspacing="0" cellpadding="0">
            <tr> 
              <td class="pageHeading" valign="top"><?php //echo HEADING_TITLE ; ?></td>
              <td align="right"></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr> 
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      <tr>  
        <td>
          <table border="0" width="100%" cellspacing="0" cellpadding="2">
<?php
  if ($article_check['total'] < 1) {
?>
            <tr>
              <td class="pageHeading" ><?php echo HEADING_ARTICLE_NOT_FOUND; ?></td>
            </tr>
            <tr>
              <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
            </tr>
            <tr>
              <td class="main" ><?php echo TEXT_ARTICLE_NOT_FOUND; ?></td>
            </tr>
<?php
  } else {
    $article_info_query = tep_db_query("select a.articles_id, a.articles_date_added, a.articles_date_available, a.authors_id, ad.articles_name, ad.articles_description, ad.articles_url, au.authors_name from " . TABLE_ARTICLES . " a left join " . TABLE_AUTHORS . " au using(authors_id), " . TABLE_ARTICLES_DESCRIPTION . " ad where a.articles_status = '1' and a.articles_id = '" . (int)$_GET['articles_id'] . "' and ad.articles_id = a.articles_id and ad.language_id = '" . (int)$languages_id . "'");
    $article_info = tep_db_fetch_array($article_info_query);

    tep_db_query("update " . TABLE_ARTICLES_DESCRIPTION . " set articles_viewed = articles_viewed+1 where articles_id = '" . (int)$_GET['articles_id'] . "' and language_id = '" . (int)$languages_id . "'");

    $articles_name = $article_info['articles_name'];
    $articles_author_id = $article_info['authors_id'];
    $articles_author = $article_info['authors_name'];
?>
            <tr>
              <td>
                <table border="0" width="100%" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="pageHeading" valign="bottom"><?php echo $articles_name; ?></td>
                    <td class="main" align="right" valign="bottom">
             <?php
             if (tep_not_null($articles_author) && DISPLAY_AUTHOR_ARTICLE_LISTING == 'true') echo TEXT_BY . '<a href="' . tep_href_link(FILENAME_ARTICLES,'authors_id=' . $articles_author_id) . '">' . $articles_author . '</a>';
             ?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
            </tr>
            <tr>
              <td class="main"><?php echo stripslashes($article_info['articles_description']); ?></td>
            </tr>
<?php
    if (tep_not_null($article_info['articles_url'])) {
?>
            <tr>
              <td class="main"><?php //echo sprintf(TEXT_MORE_INFORMATION, tep_href_link(FILENAME_REDIRECT, 'action=url&goto=' . urlencode($article_info['articles_url']), 'NONSSL', true, false)); 
		      echo sprintf(TEXT_MORE_INFORMATION, tep_href_link(FILENAME_REDIRECT, 'action=arturl&goto=' . urlencode($article_info['articles_url']), 'NONSSL', true, false)); ?></td>
            </tr>
            <tr>
              <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
            </tr>
<?php
    }
if (DISPLAY_DATE_ADDED_ARTICLE_LISTING == 'true') {
    if ($article_info['articles_date_available'] > date('Y-m-d H:i:s')) {
?>
            <tr>
              <td align="left" class="smallText"><?php echo sprintf(TEXT_DATE_AVAILABLE, tep_date_long($article_info['articles_date_available'])); ?></td>
            </tr>
<?php
    } else {
?>
            <tr>
              <td align="left" class="smallText"><?php echo sprintf(TEXT_DATE_ADDED, tep_date_long($article_info['articles_date_added'])); ?></td>
            </tr>
<?php
    }
}
?>
            <tr>
              <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
            </tr>
<?php
  if (ENABLE_ARTICLE_REVIEWS == 'true') {
    $reviews_query = tep_db_query("SELECT COUNT(*) as count from " . TABLE_ARTICLE_REVIEWS . " where articles_id = '" . (int)$_GET['articles_id'] . "' and approved = '1'");
    $reviews = tep_db_fetch_array($reviews_query);
?>
            <tr>
              <td class="main"><?php echo TEXT_CURRENT_REVIEWS . ' ' . $reviews['count']; ?></td>
            </tr>
<?php
    if ($reviews['count'] <= 0) {
?>
            <tr>
              <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
            </tr>
            <tr>
              <td class="main"><?php echo '<a href="' . tep_href_link(FILENAME_ARTICLE_REVIEWS_WRITE, tep_get_all_get_params()) . '">' . tep_image_button('button_write_review.gif', IMAGE_BUTTON_WRITE_REVIEW) . '</a>'; ?></td>
            </tr>
<?php
    } else {
?>
            <tr>
              <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
            </tr>
            <tr>
              <td class="main"><?php echo '<a href="' . tep_href_link(FILENAME_ARTICLE_REVIEWS_WRITE, tep_get_all_get_params()) . '">' . tep_image_button('button_write_review.gif', IMAGE_BUTTON_WRITE_REVIEW) . '</a> '; ?><?php echo '<a href="' . tep_href_link(FILENAME_ARTICLE_REVIEWS, tep_get_all_get_params()) . '">' . tep_image_button('button_reviews.gif', IMAGE_BUTTON_REVIEWS) . '</a>'; ?></td></form>
            </tr>
<?php
    }
  }
?>
     
<!-- tell_a_friend //-->
            <tr>
              <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
            </tr>
            <tr>
              <td>
<?php
  if (ENABLE_TELL_A_FRIEND_ARTICLE == 'true') {
    if (isset($_GET['articles_id'])) {
      $info_box_contents = array();
      $info_box_contents[] = array('text' => BOX_TEXT_TELL_A_FRIEND);

      new infoBoxHeading($info_box_contents, false, false);

      $info_box_contents = array();
      $info_box_contents[] = array('form' => tep_draw_form('tell_a_friend', tep_href_link(FILENAME_TELL_A_FRIEND, '', 'NONSSL', false), 'get'),
                                   'align' => 'left',
                                   'text' => TEXT_TELL_A_FRIEND . '&nbsp;' . tep_draw_input_field('to_email_address', '', 'size="10" maxlength="30" style="width: ' . (BOX_WIDTH-30) . 'px"') . '&nbsp;' . tep_image_submit('button_tell_a_friend.gif', BOX_HEADING_TELL_A_FRIEND) . tep_draw_hidden_field('articles_id', $_GET['articles_id']) . tep_hide_session_id() );

      new infoBox($info_box_contents);
    }
  }
?>
              </td>
            </tr>
            <tr>
              <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
            </tr>          
<!-- tell_a_friend_eof //-->
            <tr>
              <td>
<?php
//added for cross-sell
   if ( (USE_CACHE == 'true') && !SID) {
     include(DIR_WS_MODULES . FILENAME_ARTICLES_XSELL);
   } else {
     include(DIR_WS_MODULES . FILENAME_ARTICLES_XSELL);
   }
 }
?>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </td>
</tr>
</table>