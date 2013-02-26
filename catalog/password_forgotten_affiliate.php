<?php
/*
$Id: password_forgotten_affiliate.php 956 2011-01-05 19:10:37Z michael.oscmax@gmail.com $

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

  require(bts_select('language', FILENAME_PASSWORD_FORGOTTEN_AFFILIATE));

  if (isset($_GET['action']) && ($_GET['action'] == 'process')) {
    $email_address = tep_db_prepare_input($_POST['email_address']);

    $check_customer_query = tep_db_query("select affiliate_firstname, affiliate_lastname , affiliate_password , affiliate_id from " . TABLE_AFFILIATE . " where affiliate_email_address = '" . tep_db_input($email_address) . "'");
    if (tep_db_num_rows($check_customer_query)) {
      $check_customer = tep_db_fetch_array($check_customer_query);

      $new_password = tep_create_random_value(ENTRY_PASSWORD_MIN_LENGTH);
      $crypted_password = tep_encrypt_password($new_password);

      tep_db_query("update " . TABLE_AFFILIATE . " set affiliate_password = '" . tep_db_input($crypted_password) . "' where affiliate_id = '" . (int)$check_customer['affiliate_id'] . "'");

      tep_mail($check_customer['affiliate_firstname'] . ' ' . $check_customer['affiliate_lastname'], $email_address, STORE_NAME . EMAIL_PASSWORD_REMINDER_SUBJECT, sprintf(EMAIL_PASSWORD_REMINDER_BODY, isset($REMOTE_ADDR), STORE_NAME, $new_password), STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS);

      $messageStack->add_session('login', SUCCESS_PASSWORD_SENT, 'success');

     tep_redirect(tep_href_link(FILENAME_AFFILIATE, '', 'SSL'));
    } else {
      $messageStack->add('password_forgotten', TEXT_NO_EMAIL_ADDRESS_FOUND);
    }
  }

  $breadcrumb->add(NAVBAR_TITLE_1, tep_href_link(FILENAME_AFFILIATE, '', 'SSL'));
  $breadcrumb->add(NAVBAR_TITLE_2, tep_href_link(FILENAME_PASSWORD_FORGOTTEN_AFFILIATE, '', 'SSL'));

  $content = CONTENT_PASSWORD_FORGOTTEN_AFFILIATE;

  include (bts_select('main')); // BTSv1.5

  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
