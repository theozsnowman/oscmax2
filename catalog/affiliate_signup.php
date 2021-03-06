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

  // +Country-State Selector
  require(DIR_WS_FUNCTIONS . 'ajax.php');
if (isset($HTTP_POST_VARS['action']) && $HTTP_POST_VARS['action'] == 'getStates' && isset($HTTP_POST_VARS['country'])) {
	ajax_get_zones_html(tep_db_prepare_input($HTTP_POST_VARS['country']), true);
} else {
  // -Country-State Selector
  require(bts_select('language', FILENAME_AFFILIATE_SIGNUP));

  if (isset($_POST['action'])) {
    $a_gender = tep_db_prepare_input($_POST['a_gender']);
    $a_firstname = tep_db_prepare_input($_POST['a_firstname']);
    $a_lastname = tep_db_prepare_input($_POST['a_lastname']);
    $a_dob = tep_db_prepare_input($_POST['a_dob']);
    $a_email_address = tep_db_prepare_input($_POST['a_email_address']);
    $a_company = tep_db_prepare_input($_POST['a_company']);
    $a_company_taxid = tep_db_prepare_input($_POST['a_company_taxid']);
    $a_payment_check = tep_db_prepare_input($_POST['a_payment_check']);
    $a_payment_paypal = tep_db_prepare_input($_POST['a_payment_paypal']);
    $a_payment_bank_name = tep_db_prepare_input($_POST['a_payment_bank_name']);
    $a_payment_bank_branch_number = tep_db_prepare_input($_POST['a_payment_bank_branch_number']);
    $a_payment_bank_swift_code = tep_db_prepare_input($_POST['a_payment_bank_swift_code']);
    $a_payment_bank_account_name = tep_db_prepare_input($_POST['a_payment_bank_account_name']);
    $a_payment_bank_account_number = tep_db_prepare_input($_POST['a_payment_bank_account_number']);
    $a_street_address = tep_db_prepare_input($_POST['a_street_address']);
    $a_suburb = tep_db_prepare_input($_POST['a_suburb']);
    $a_postcode = tep_db_prepare_input($_POST['a_postcode']);
    $a_city = tep_db_prepare_input($_POST['a_city']);
    $a_country=tep_db_prepare_input($_POST['a_country']);
    $a_zone_id = tep_db_prepare_input($_POST['a_zone_id']);
    $a_state = tep_db_prepare_input($_POST['a_state']);
    $a_telephone = tep_db_prepare_input($_POST['a_telephone']);
    $a_fax = tep_db_prepare_input($_POST['a_fax']);
    $a_homepage = tep_db_prepare_input($_POST['a_homepage']);
    $a_password = tep_db_prepare_input($_POST['a_password']);
    $a_newsletter = tep_db_prepare_input($_POST['a_newsletter']);
    $a_confirmation = tep_db_prepare_input($_POST['a_confirmation']);
    $a_agb = tep_db_prepare_input($_POST['a_agb']);

    $error = false; // reset error flag

    if (ACCOUNT_GENDER == 'true') {
      if (($a_gender == 'm') || ($a_gender == 'f')) {
        $entry_gender_error = false;
      } else {
        $error = true;
        $entry_gender_error = true;
      }
    }

    if (strlen($a_firstname) < ENTRY_FIRST_NAME_MIN_LENGTH) {
      $error = true;
      $entry_firstname_error = true;
    } else {
      $entry_firstname_error = false;
    }

    if (strlen($a_lastname) < ENTRY_LAST_NAME_MIN_LENGTH) {
      $error = true;
      $entry_lastname_error = true;
    } else {
      $entry_lastname_error = false;
    }

    if (ACCOUNT_DOB == 'true') {
      if (checkdate(substr(tep_date_raw($a_dob), 4, 2), substr(tep_date_raw($a_dob), 6, 2), substr(tep_date_raw($a_dob), 0, 4))) {
        $entry_date_of_birth_error = false;
      } else {
        $error = true;
        $entry_date_of_birth_error = true;
      }
    }

    if (strlen($a_email_address) < ENTRY_EMAIL_ADDRESS_MIN_LENGTH) {
      $error = true;
      $entry_email_address_error = true;
    } else {
      $entry_email_address_error = false;
    }

    if (!tep_validate_email($a_email_address)) {
      $error = true;
      $entry_email_address_check_error = true;
    } else {
      $entry_email_address_check_error = false;
    }

    if (strlen($a_street_address) < ENTRY_STREET_ADDRESS_MIN_LENGTH) {
      $error = true;
      $entry_street_address_error = true;
    } else {
      $entry_street_address_error = false;
    }

    if (strlen($a_postcode) < ENTRY_POSTCODE_MIN_LENGTH) {
      $error = true;
      $entry_post_code_error = true;
    } else {
      $entry_post_code_error = false;
    }

    if (strlen($a_city) < ENTRY_CITY_MIN_LENGTH) {
      $error = true;
      $entry_city_error = true;
    } else {
      $entry_city_error = false;
    }
    
    if (!$a_country) {
      $error = true;
      $entry_country_error = true;
    } else {
      $entry_country_error = false;
    }
    

    if (strlen($a_telephone) < ENTRY_TELEPHONE_MIN_LENGTH) {
      $error = true;
      $entry_telephone_error = true;
    } else {
      $entry_telephone_error = false;
    }

    $passlen = strlen($a_password);
    if ($passlen < ENTRY_PASSWORD_MIN_LENGTH) {
      $error = true;
      $entry_password_error = true;
    } else {
      $entry_password_error = false;
    }

    if ($a_password != $a_confirmation) {
      $error = true;
      $entry_password_error = true;
    }

    $check_email = tep_db_query("select affiliate_email_address from " . TABLE_AFFILIATE . " where affiliate_email_address = '" . tep_db_input($a_email_address) . "'");
    if (tep_db_num_rows($check_email)) {
      $error = true;
      $entry_email_address_exists = true;
    } else {
      $entry_email_address_exists = false;
    }

    // Check Suburb
    $entry_suburb_error = false;

    // Check Fax
    $entry_fax_error = false;

    if (!affiliate_check_url($a_homepage)) {
      $error = true;
      $entry_homepage_error = true;
    } else {
      $entry_homepage_error = false;
    }

    if (!$a_agb) {
	  $error=true;
	  $entry_agb_error=true;
    }

    // Check Company
    $entry_company_error = false;
    $entry_company_taxid_error = false;
    // Check Newsletter 
    $entry_newsletter_error = false;

    // Check Payment
    $entry_payment_check_error = false;
    $entry_payment_paypal_error = false;
    $entry_payment_bank_name_error = false;
    $entry_payment_bank_branch_number_error = false;
    $entry_payment_bank_swift_code_error = false;
    $entry_payment_bank_account_name_error = false;
    $entry_payment_bank_account_number_error = false;

    if (!$error) {

      $sql_data_array = array('affiliate_firstname' => $a_firstname,
                              'affiliate_lastname' => $a_lastname,
                              'affiliate_email_address' => $a_email_address,
                              'affiliate_payment_check' => $a_payment_check,
                              'affiliate_payment_paypal' => $a_payment_paypal,
                              'affiliate_payment_bank_name' => $a_payment_bank_name,
                              'affiliate_payment_bank_branch_number' => $a_payment_bank_branch_number,
                              'affiliate_payment_bank_swift_code' => $a_payment_bank_swift_code,
                              'affiliate_payment_bank_account_name' => $a_payment_bank_account_name,
                              'affiliate_payment_bank_account_number' => $a_payment_bank_account_number,
                              'affiliate_street_address' => $a_street_address,
                              'affiliate_postcode' => $a_postcode,
                              'affiliate_city' => $a_city,
                              'affiliate_country_id' => $a_country,
                              'affiliate_telephone' => $a_telephone,
                              'affiliate_fax' => $a_fax,
                              'affiliate_homepage' => $a_homepage,
                              'affiliate_password' => tep_encrypt_password($a_password),
                              'affiliate_agb' => '1',
                              'affiliate_newsletter' => $a_newsletter);

      if (ACCOUNT_GENDER == 'true') $sql_data_array['affiliate_gender'] = $a_gender;
      if (ACCOUNT_DOB == 'true') $sql_data_array['affiliate_dob'] = tep_date_raw($a_dob);
      if (ACCOUNT_COMPANY == 'true') {
        $sql_data_array['affiliate_company'] = $a_company;
        $sql_data_array['affiliate_company_taxid'] = $a_company_taxid;
      }
      if (ACCOUNT_SUBURB == 'true') $sql_data_array['affiliate_suburb'] = $a_suburb;
      
   if (ACCOUNT_STATE == 'true') {
      // +Country-State Selector
      if ($a_zone_id == 0) {
      // -Country-State Selector

        if (strlen($a_state) < ENTRY_STATE_MIN_LENGTH) {
          $error = true;

          $messageStack->add('affiliate_signup', ENTRY_STATE_ERROR);
        }
      }
    }

	  

      $sql_data_array['affiliate_date_account_created'] = 'now()';

      $affiliate_id = affiliate_insert ($sql_data_array, $HTTP_SESSION_VARS['affiliate_ref'] );

      // build the message content
	  $name = $a_firstname . ' ' . $a_lastname;    
	  $email_text = sprintf(MAIL_GREET_NONE, $a_firstname);
      $email_text .= sprintf(MAIL_AFFILIATE_HEADER, STORE_NAME);
	  $email_text .= sprintf(MAIL_AFFILIATE_ID, $affiliate_id);
	  $email_text .= sprintf(MAIL_AFFILIATE_USERNAME, $a_email_address);
	  $email_text .= sprintf(MAIL_AFFILIATE_PASSWORD, $a_password);
	  $email_text .= sprintf(MAIL_AFFILIATE_LINK, HTTP_SERVER . DIR_WS_CATALOG . FILENAME_AFFILIATE) . "\n\n";
	  $email_text .= sprintf(MAIL_AFFILIATE_FOOTER, STORE_NAME, AFFILIATE_EMAIL_ADDRESS);

      tep_mail($name, $a_email_address, sprintf(MAIL_AFFILIATE_SUBJECT, STORE_NAME), $email_text, STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS);
    
      tep_session_register('affiliate_id');
      $affiliate_email = $a_email_address;
      $affiliate_name = $a_firstname . ' ' . $a_lastname;
      tep_session_register('affiliate_email');
      tep_session_register('affiliate_name');
      tep_redirect(tep_href_link(FILENAME_AFFILIATE_SIGNUP_OK, '', 'SSL'));
    }
 // +Country-State Selector 
if (!isset($country)){$a_country = DEFAULT_COUNTRY;}
// -Country-State Selector
  }

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_AFFILIATE_SIGNUP, '', 'SSL'));

  $content = affiliate_signup;

  include (bts_select('main')); // BTSv1.5


  require(DIR_WS_INCLUDES . 'application_bottom.php');
// +Country-State Selector 
}
// -Country-State Selector 
?>