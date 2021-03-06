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
  
  // start modification for reCaptcha
  if (RECAPTCHA_ON == 'true' && RECAPTCHA_CREATE_ACCOUNT == 'true') {
    require_once('includes/classes/recaptchalib.php');
    $publickey = RECAPTCHA_PUBLIC_KEY;
    $privatekey = RECAPTCHA_PRIVATE_KEY;
  }
  // end modification for reCaptcha

  // +Country-State Selector
  require(DIR_WS_FUNCTIONS . 'ajax.php');
if (isset($_POST['action']) && $_POST['action'] == 'getStates' && isset($_POST['country'])) {
	ajax_get_zones_html(tep_db_prepare_input($_POST['country']), true);
} else {
  // -Country-State Selector
// PWA EOF
  if (isset($_GET['guest']) && $cart->count_contents() < 1) tep_redirect(tep_href_link(FILENAME_SHOPPING_CART));
// PWA BOF
// needs to be included earlier to set the success message in the messageStack
  require(bts_select('language', FILENAME_CREATE_ACCOUNT));

  $process = false;
  if (isset($_POST['action']) && ($_POST['action'] == 'process')) {
    $process = true;

    if (ACCOUNT_GENDER == 'true') {
      if (isset($_POST['gender'])) {
        $gender = tep_db_prepare_input($_POST['gender']);
      } else {
        $gender = false;
      }
    }
    $firstname = tep_db_prepare_input($_POST['firstname']);
    $lastname = tep_db_prepare_input($_POST['lastname']);
    if (ACCOUNT_DOB == 'true') $dob = tep_db_prepare_input($_POST['dob']);
    $email_address = tep_db_prepare_input($_POST['email_address']);
	if (ACCOUNT_EMAIL_CONFIRMATION == 'true') $email_confirmation = tep_db_prepare_input($_POST['email_confirmation']); 
    // BOF Separate Pricing Per Customer, added: field for tax id number
    if (ACCOUNT_COMPANY == 'true') { 
      $company = tep_db_prepare_input($_POST['company']);
      $company_tax_id = tep_db_prepare_input($_POST['company_tax_id']);
    }
    // EOF Separate Pricing Per Customer, added: field for tax id number
    $street_address = tep_db_prepare_input($_POST['street_address']);
    if (ACCOUNT_SUBURB == 'true') $suburb = tep_db_prepare_input($_POST['suburb']);
    $postcode = tep_db_prepare_input($_POST['postcode']);
    $city = tep_db_prepare_input($_POST['city']);
    if (ACCOUNT_STATE == 'true') {
      $state = tep_db_prepare_input($_POST['state']);
      if (isset($_POST['zone_id'])) {
        $zone_id = tep_db_prepare_input($_POST['zone_id']);
      } else {
        $zone_id = false;
      }
    }
    $country = tep_db_prepare_input($_POST['country']);
    $telephone = tep_db_prepare_input($_POST['telephone']);
    $fax = tep_db_prepare_input($_POST['fax']);
    if (isset($_POST['newsletter'])) {
      $newsletter = tep_db_prepare_input($_POST['newsletter']);	  
    } else {
      $newsletter = false;
    }
	$email_type = tep_db_prepare_input($_POST['EMAILTYPE']);
    $password = tep_db_prepare_input($_POST['password']);
    $confirmation = tep_db_prepare_input($_POST['confirmation']);

    $error = false;

    // start modification for reCaptcha
    if (RECAPTCHA_ON == 'true' && RECAPTCHA_CREATE_ACCOUNT == 'true') {

	  // the response from reCAPTCHA
      $resp = null;

	  // was there a reCaptcha response?
      $resp = recaptcha_check_answer ($privatekey,
      $_SERVER["REMOTE_ADDR"],
      $_POST["recaptcha_challenge_field"],
      $_POST["recaptcha_response_field"]);
    }
    // end modification for reCaptcha

    if (ACCOUNT_GENDER == 'true') {
      if ( ($gender != 'm') && ($gender != 'f') ) {
        $error = true;

        $messageStack->add('create_account', ENTRY_GENDER_ERROR);
      }
    }

    if (strlen($firstname) < ENTRY_FIRST_NAME_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_FIRST_NAME_ERROR);
    }

    if (strlen($lastname) < ENTRY_LAST_NAME_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_LAST_NAME_ERROR);
    }

    if (ACCOUNT_DOB == 'true') {
      if (checkdate(substr(tep_date_raw($dob), 4, 2), substr(tep_date_raw($dob), 6, 2), substr(tep_date_raw($dob), 0, 4)) == false) {
        $error = true;

        $messageStack->add('create_account', ENTRY_DATE_OF_BIRTH_ERROR);
      }
    }

    if (strlen($email_address) < ENTRY_EMAIL_ADDRESS_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_EMAIL_ADDRESS_ERROR);
    } elseif (tep_validate_email($email_address) == false) {
      $error = true;

      $messageStack->add('create_account', ENTRY_EMAIL_ADDRESS_CHECK_ERROR);
    } else {
      // PWA BOF 2b
      $check_email_query = tep_db_query("select count(*) as total from " . TABLE_CUSTOMERS . " where customers_email_address = '" . tep_db_input($email_address) . "' and guest_account != '1'");
      // PWA EOF 2b
      $check_email = tep_db_fetch_array($check_email_query);
 //---PayPal WPP Modification START ---//     
      //if ($check_email['total'] > 0) {
      if ($check_email['total'] > 0 && tep_paypal_wpp_create_account_check($email_address)) {
//---PayPal WPP Modification END ---//
           $error = true;

           $messageStack->add('create_account', ENTRY_EMAIL_ADDRESS_ERROR_EXISTS);
      }
    }
	
	if (ACCOUNT_EMAIL_CONFIRMATION == 'true') {
	  if ($email_address != $email_confirmation) {
        $error = true;

        $messageStack->add('create_account', ENTRY_EMAIL_ERROR_NOT_MATCHING);
	  }
    }

    if (strlen($street_address) < ENTRY_STREET_ADDRESS_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_STREET_ADDRESS_ERROR);
    }

    if (strlen($postcode) < ENTRY_POSTCODE_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_POST_CODE_ERROR);
    }

    if (strlen($city) < ENTRY_CITY_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_CITY_ERROR);
    }

    if (is_numeric($country) == false) {
      $error = true;

      $messageStack->add('create_account', ENTRY_COUNTRY_ERROR);
    }

    if (ACCOUNT_STATE == 'true') {
      // +Country-State Selector
      if ($zone_id == 0) {
      // -Country-State Selector

        if (strlen($state) < ENTRY_STATE_MIN_LENGTH) {
          $error = true;

          $messageStack->add('create_account', ENTRY_STATE_ERROR);
        }
      }
    }

    if (strlen($telephone) < ENTRY_TELEPHONE_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_TELEPHONE_NUMBER_ERROR);
    }
	
	// start modification for reCaptcha
    if (RECAPTCHA_ON == 'true' && RECAPTCHA_CREATE_ACCOUNT == 'true') {
	  if (!$resp->is_valid) { 
	    $error = true;
        $messageStack->add('create_account', ENTRY_SECURITY_CHECK_ERROR);
      }
    }
    // end modification for reCaptcha

// PWA BOF
    if (!isset($_GET['guest']) && !isset($_POST['guest'])) {
// PWA EOF

    if (strlen($password) < ENTRY_PASSWORD_MIN_LENGTH) {
      $error = true;

      $messageStack->add('create_account', ENTRY_PASSWORD_ERROR);
    } elseif ($password != $confirmation) {
      $error = true;

      $messageStack->add('create_account', ENTRY_PASSWORD_ERROR_NOT_MATCHING);
    }
// PWA BOF
} 
// PWA EOF

// BOF Customers extra fields
      $extra_fields_query = tep_db_query("select ce.fields_id, ce.fields_input_type, ce.fields_required_status, cei.fields_name, ce.fields_status, ce.fields_input_type, ce.fields_size from " . TABLE_EXTRA_FIELDS . " ce, " . TABLE_EXTRA_FIELDS_INFO . " cei where NOT find_in_set('" . $customer_group_id . "', ce.fields_cef_cg_hide) and ce.fields_status=1 and ce.fields_required_status=1 and cei.fields_id=ce.fields_id and cei.languages_id =" . $languages_id);
      while($extra_fields = tep_db_fetch_array($extra_fields_query)) {
        if (strlen($_POST['fields_' . $extra_fields['fields_id']])<$extra_fields['fields_size']) {
          $error = true;
          $string_error = sprintf(ENTRY_EXTRA_FIELDS_ERROR, $extra_fields['fields_name'], $extra_fields['fields_size']);
          $messageStack->add('create_account', $string_error);
        }
      }
// EOF Customers extra fields

    if ($error == false) {
		// PWA BOF 2b
		if (!isset($_GET['guest']) && !isset($_POST['guest'])) {
			$dbPass = tep_encrypt_password($password);
			$guestaccount = '0';
		} else {
			$dbPass = tep_encrypt_password('guest');
			$guestaccount = '1';
		}
		// PWA EOF 2b
      $sql_data_array = array('customers_firstname' => $firstname,
                              'customers_lastname' => $lastname,
                              'customers_email_address' => $email_address,
                              'customers_telephone' => $telephone,
                              'customers_fax' => $fax,
                              'customers_newsletter' => $newsletter,
							  'customers_newsletter_type' => $email_type,
                              // PWA BOF 2b
                              'customers_password' => $dbPass,
                              'guest_account' => $guestaccount);
                              // PWA EOF 2b

      if (ACCOUNT_GENDER == 'true') $sql_data_array['customers_gender'] = $gender;
      if (ACCOUNT_DOB == 'true') $sql_data_array['customers_dob'] = tep_date_raw($dob);
// BOF: MOD - Separate Pricing Per Customer
// if you would like to have an alert in the admin section when either a company name has been entered in
// the appropriate field or a tax id number, or both then uncomment the next line and comment the default
// setting: only alert when a tax_id number has been given
//    if ( (ACCOUNT_COMPANY == 'true' && tep_not_null($company) ) || (ACCOUNT_COMPANY == 'true' && tep_not_null($company_tax_id) ) ) { 
      if ( ACCOUNT_COMPANY == 'true' && tep_not_null($company_tax_id)  ) { 
        $sql_data_array['customers_group_ra'] = '1';
      }
// EOF: MOD - Separate Pricing Per Customer

      tep_db_perform(TABLE_CUSTOMERS, $sql_data_array);

      $customer_id = tep_db_insert_id();
	  
	  // BOF Customers extra fields
   	  	$extra_fields_query = tep_db_query("select ce.fields_id from " . TABLE_EXTRA_FIELDS . " ce where ce.fields_status=1 ");
    	while ($extra_fields = tep_db_fetch_array($extra_fields_query)) {
		  if (isset($_POST['fields_' . $extra_fields['fields_id']])) {
            $sql_data_array = array('customers_id' => (int)$customer_id,
                                    'fields_id' => $extra_fields['fields_id'],
                                    'value' => $_POST['fields_' . $extra_fields['fields_id']]);
       	  } else {
			$sql_data_array = array('customers_id' => (int)$customer_id,
                                    'fields_id' => $extra_fields['fields_id'],
                                    'value' => '');
			$is_add = false;
			for ($i = 1; $i <= $_POST['fields_' . $extra_fields['fields_id'] . '_total']; $i++) {
			  if (isset($_POST['fields_' . $extra_fields['fields_id'] . '_' . $i])) {
				if ($is_add) {
				  $sql_data_array['value'] .= "\n";
				} else {
                  $is_add = true;
				} // end if ($is_add)
              $sql_data_array['value'] .= $_POST['fields_' . $extra_fields['fields_id'] . '_' . $i];
			  } // end if (isset($_POST['fields_' . $extra_fields['fields_id'] . '_' . $i]))
			} // end for
		  } // end if (isset($_POST['fields_' . $extra_fields['fields_id']]))
		  tep_db_perform(TABLE_CUSTOMERS_TO_EXTRA_FIELDS, $sql_data_array);
      	} // end while
      // EOF Customers extra fields
	  
      $sql_data_array = array('customers_id' => $customer_id,
                              'entry_firstname' => $firstname,
                              'entry_lastname' => $lastname,
                              'entry_street_address' => $street_address,
                              'entry_postcode' => $postcode,
                              'entry_city' => $city,
                              'entry_country_id' => $country);

      if (ACCOUNT_GENDER == 'true') $sql_data_array['entry_gender'] = $gender;
// BOF: MOD - Separate Pricing Per Customer
//    if (ACCOUNT_COMPANY == 'true') $sql_data_array['entry_company'] = $company;
      if (ACCOUNT_COMPANY == 'true') {
        $sql_data_array['entry_company'] = $company;
        $sql_data_array['entry_company_tax_id'] = $company_tax_id;
      }
 // EOF: MOD - Separate Pricing Per Customer
      if (ACCOUNT_SUBURB == 'true') $sql_data_array['entry_suburb'] = $suburb;
      if (ACCOUNT_STATE == 'true') {
        if ($zone_id > 0) {
          $sql_data_array['entry_zone_id'] = $zone_id;
          $sql_data_array['entry_state'] = '';
        } else {
          $sql_data_array['entry_zone_id'] = '0';
          $sql_data_array['entry_state'] = $state;
        }
      }

// PWA BOF
     if (isset($_GET['guest']) or isset($_POST['guest']))
       tep_session_register('customer_is_guest');
// PWA EOF
      tep_db_perform(TABLE_ADDRESS_BOOK, $sql_data_array);

      $address_id = tep_db_insert_id();

      tep_db_query("update " . TABLE_CUSTOMERS . " set customers_default_address_id = '" . (int)$address_id . "' where customers_id = '" . (int)$customer_id . "'");

      tep_db_query("insert into " . TABLE_CUSTOMERS_INFO . " (customers_info_id, customers_info_number_of_logons, customers_info_date_account_created) values ('" . (int)$customer_id . "', '0', now())");

      if (SESSION_RECREATE == 'True') {
        tep_session_recreate();
      }

      $customer_first_name = $firstname;
      $customer_default_address_id = $address_id;
      $customer_country_id = $country;
      $customer_zone_id = $zone_id;
      tep_session_register('customer_id');
      tep_session_register('customer_first_name');
      tep_session_register('customer_default_address_id');
      tep_session_register('customer_country_id');
      tep_session_register('customer_zone_id');

// PWA BOF
      if (isset($_GET['guest']) or isset($_POST['guest'])) tep_redirect(tep_href_link(FILENAME_CHECKOUT_SHIPPING));
// PWA EOF
// restore cart contents
      $cart->restore_contents();
      
//BOF: MOD - Wishlist 3.5
// restore wishlist to sesssion
        $wishList->restore_wishlist();
//EOF: MOD - Wishlist 3.5      

// build the message content
      $name = $firstname . ' ' . $lastname;

      if (ACCOUNT_GENDER == 'true') {
         if ($gender == 'm') {
           $email_text = sprintf(EMAIL_GREET_MR, $lastname);
         } else {
           $email_text = sprintf(EMAIL_GREET_MS, $lastname);
         }
      } else {
        $email_text = sprintf(EMAIL_GREET_NONE, $firstname);
      }
	  // BOF PHONE ORDER
	  $email_text .= EMAIL_ACCOUNT_DETAILS . "\n" . EMAIL_ACCOUNT_USERNAME . $email_address . "\n" . EMAIL_ACCOUNT_PASSWORD  . $password . "\n\n";
	  // EOF PHONE ORDER

      $email_text .= sprintf(EMAIL_WELCOME, STORE_NAME) . EMAIL_TEXT . sprintf(EMAIL_CONTACT, STORE_OWNER_EMAIL_ADDRESS) . sprintf(EMAIL_WARNING, STORE_OWNER_EMAIL_ADDRESS);

// BOF - MOD: CREDIT CLASS Gift Voucher Contribution
  if (NEW_SIGNUP_GIFT_VOUCHER_AMOUNT > 0) {
    $coupon_code = create_coupon_code();
    $insert_query = tep_db_query("insert into " . TABLE_COUPONS . " (coupon_code, coupon_type, coupon_amount, date_created) values ('" . $coupon_code . "', 'G', '" . NEW_SIGNUP_GIFT_VOUCHER_AMOUNT . "', now())");
        $insert_id = tep_db_insert_id();
    $insert_query = tep_db_query("insert into " . TABLE_COUPON_EMAIL_TRACK . " (coupon_id, customer_id_sent, sent_firstname, emailed_to, date_sent) values ('" . $insert_id ."', '0', 'Admin', '" . $email_address . "', now() )");

    $email_text .= sprintf(EMAIL_GV_INCENTIVE_HEADER, $currencies->format(NEW_SIGNUP_GIFT_VOUCHER_AMOUNT)) . "\n\n" .
                   sprintf(EMAIL_GV_REDEEM, $coupon_code) . "\n\n" .
                   EMAIL_GV_LINK . tep_href_link(FILENAME_GV_REDEEM, 'gv_no=' . $coupon_code,'NONSSL', false) .
                   "\n\n";
  }
  if (NEW_SIGNUP_DISCOUNT_COUPON != '') {
		$coupon_code = NEW_SIGNUP_DISCOUNT_COUPON;
    $coupon_query = tep_db_query("select * from " . TABLE_COUPONS . " where coupon_code = '" . $coupon_code . "'");
    $coupon = tep_db_fetch_array($coupon_query);
    $coupon_id = $coupon['coupon_id'];		
    $coupon_desc_query = tep_db_query("select * from " . TABLE_COUPONS_DESCRIPTION . " where coupon_id = '" . $coupon_id . "' and language_id = '" . (int)$languages_id . "'");
    $coupon_desc = tep_db_fetch_array($coupon_desc_query);
    $insert_query = tep_db_query("insert into " . TABLE_COUPON_EMAIL_TRACK . " (coupon_id, customer_id_sent, sent_firstname, emailed_to, date_sent) values ('" . $coupon_id ."', '0', 'Admin', '" . $email_address . "', now() )");
    $email_text .= EMAIL_COUPON_INCENTIVE_HEADER .  "\n" .
                   sprintf("%s", $coupon_desc['coupon_description']) ."\n\n" .
                   sprintf(EMAIL_COUPON_REDEEM, $coupon['coupon_code']) . "\n\n" .
                   "\n\n";
  }
//    $email_text .= EMAIL_TEXT . EMAIL_CONTACT . EMAIL_WARNING;
 // +Country-State Selector 
if (!isset($country)){$country = DEFAULT_COUNTRY;}
// -Country-State Selector
  //---------
  //add these:
      if (tep_session_is_registered('floating_gv_code')) {
        $gv_query = tep_db_query("SELECT c.coupon_id, c.coupon_amount, IF(rt.coupon_id>0, 'true', 'false') AS redeemed FROM ". TABLE_COUPONS ." c LEFT JOIN ". TABLE_COUPON_REDEEM_TRACK." rt USING(coupon_id), ". TABLE_COUPON_EMAIL_TRACK ." et WHERE c.coupon_code = '". $floating_gv_code ."' AND c.coupon_id = et.coupon_id");
        // check if coupon exist
        if (tep_db_num_rows($gv_query) >0) {
          $coupon = tep_db_fetch_array($gv_query);
          // check if coupon_id exist and coupon not redeemed
          if($coupon['coupon_id']>0 && $coupon['redeemed'] == 'false') {
              tep_session_unregister('floating_gv_code');
              $gv_query = tep_db_query("insert into  " . TABLE_COUPON_REDEEM_TRACK . " (coupon_id, customer_id, redeem_date, redeem_ip) values ('" . $coupon['coupon_id'] . "', '" . $customer_id . "', now(),'" . $REMOTE_ADDR . "')");
              $gv_update = tep_db_query("update " . TABLE_COUPONS . " set coupon_active = 'N' where coupon_id = '" . $coupon['coupon_id'] . "'");
              tep_gv_account_update($customer_id, $coupon['coupon_id']);
          }
        }
      }
// BOF: MOD - GV_REDEEM_EXPLOIT_FIX (GVREF)

      tep_mail($name, $email_address, EMAIL_SUBJECT . STORE_NAME, $email_text, STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS);

// Add MailChimp Subscription
if (MAILCHIMP_ENABLE == 'true' && $newsletter == '1') {
  require DIR_WS_FUNCTIONS . 'mailchimp_functions.php';
  mc_add_email($email_address, $email_format);
} // end if 

// BOF: MOD - Separate Pricing Per Customer: alert shop owner of account created by a company
// if you would like to have an email when either a company name has been entered in
// the appropriate field or a tax id number, or both then uncomment the next line and comment the default
// setting: only email when a tax_id number has been given
//    if ( (ACCOUNT_COMPANY == 'true' && tep_not_null($company) ) || (ACCOUNT_COMPANY == 'true' && tep_not_null($company_tax_id) ) ) { 
      if ( ACCOUNT_COMPANY == 'true' && tep_not_null($company_tax_id) ) { 
        $alert_email_text = "Please note that " . $firstname . " " . $lastname . " of the company: " . $company . " has created an account.";
        tep_mail(STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS, 'Company account created', $alert_email_text, STORE_OWNER, STORE_OWNER_EMAIL_ADDRESS);
      }
// EOF: MOD - Separate Pricing Per Customer: alert shop owner of account created by a company

      tep_redirect(tep_href_link(FILENAME_CREATE_ACCOUNT_SUCCESS, '', 'SSL'));
    }
 
// BOF: MOD - Country-State Selector 
 }
 
if (isset($_POST['action']) && $_POST['action'] == 'refresh') { $state = ''; }
if (!isset($country)){$country = DEFAULT_COUNTRY;}
// EOF: MOD - Country-State Selector 
 // PWA BOF
 if (!isset($_GET['guest']) && !isset($_POST['guest'])){
   $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'));
 }else{
   $breadcrumb->add(NAVBAR_TITLE_PWA, tep_href_link(FILENAME_CREATE_ACCOUNT, 'guest=guest', 'SSL'));
 }
// PWA EOF
  $content = CONTENT_CREATE_ACCOUNT;
  $javascript = $content . '.js.php';
  
  include (bts_select('main')); // BTSv1.5


  require(DIR_WS_INCLUDES . 'application_bottom.php');
// +Country-State Selector 
}
// -Country-State Selector 
?>