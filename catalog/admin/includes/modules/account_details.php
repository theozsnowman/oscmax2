<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

  $newsletter_array = array(array('id' => '1',
                                  'text' => ENTRY_NEWSLETTER_YES),
                            array('id' => '0',
                                  'text' => ENTRY_NEWSLETTER_NO));

function sbs_get_zone_name($country_id, $zone_id) {
    $zone_query = tep_db_query("select zone_name from " . TABLE_ZONES . " where zone_country_id = '" . $country_id . "' and zone_id = '" . $zone_id . "'");
    if (tep_db_num_rows($zone_query)) {
      $zone = tep_db_fetch_array($zone_query);
      return $zone['zone_name'];
    } else {
      return $default_zone;
    }
  }
 
 // Returns an array with countries
// TABLES: countries
  function sbs_get_countries($countries_id = '', $with_iso_codes = false) {
    $countries_array = array();
    if (tep_not_null($countries_id)) {
      if ($with_iso_codes == true) {
        // Ajax Country-state selector
        //$countries = tep_db_query("select countries_name, countries_iso_code_2, countries_iso_code_3 from " . TABLE_COUNTRIES . " where countries_id = '" . (int)$countries_id . "' order by countries_name");
        $countries = tep_db_query("select countries_name, countries_iso_code_2, countries_iso_code_3 from " . TABLE_COUNTRIES . " where countries_id = '" . (int)$countries_id . "' and active = 1 order by countries_name");

        $countries_values = tep_db_fetch_array($countries);
        $countries_array = array('countries_name' => $countries_values['countries_name'],
                                 'countries_iso_code_2' => $countries_values['countries_iso_code_2'],
                                 'countries_iso_code_3' => $countries_values['countries_iso_code_3']);
      } else {
        $countries = tep_db_query("select countries_name from " . TABLE_COUNTRIES . " where countries_id = '" . (int)$countries_id . "'");
        $countries_values = tep_db_fetch_array($countries);
        $countries_array = array('countries_name' => $countries_values['countries_name']);
      }
    } else {
      // Ajax Country-state selector 
      //$countries = tep_db_query("select countries_id, countries_name from " . TABLE_COUNTRIES . " order by countries_name");
      $countries = tep_db_query("select countries_id, countries_name from " . TABLE_COUNTRIES . " where active = 1 order by countries_name");
      while ($countries_values = tep_db_fetch_array($countries)) {
        $countries_array[] = array('countries_id' => $countries_values['countries_id'],
                                   'countries_name' => $countries_values['countries_name']);
      }
    }

    return $countries_array;
  }
  ////
function sbs_get_country_list($name, $selected = '', $parameters = '') { 
   $countries_array = array(array('id' => '', 'text' => PULL_DOWN_DEFAULT)); 
   $countries = sbs_get_countries(); 
   $size = sizeof($countries); 
   for ($i=0; $i<$size; $i++) { 
     $countries_array[] = array('id' => $countries[$i]['countries_id'], 'text' => $countries[$i]['countries_name']); 
   } 

   return tep_draw_pull_down_menu($name, $countries_array, $selected, $parameters); 
}

///
// Alias function to tep_get_countries, which also returns the countries iso codes
 /* function tep_get_countries_with_iso_codes($countries_id) {
    return tep_get_countries($countries_id, true);
  }*/
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr>
    <td class="formAreaTitle"><?php echo CATEGORY_PERSONAL; ?></td>
  </tr>
  <tr>
    <td class="main"><table border="0" width="100%" cellspacing="0" cellpadding="2" class="formArea">
      <tr>
        <td class="main"><table border="0" cellspacing="0" cellpadding="2">
<?php
  if (ACCOUNT_GENDER == 'true') {
    $male = ($account['customers_gender'] == 'm') ? true : false;
    $female = ($account['customers_gender'] == 'f') ? true : false;
?>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_GENDER; ?></td>
            <td class="main">&nbsp;
<?php
    if ($is_read_only) {
      echo ($account['customers_gender'] == 'm') ? MALE : FEMALE;
    } elseif ($error) {
      if ($entry_gender_error) {
        echo tep_draw_radio_field('gender', 'm', $male) . '&nbsp;&nbsp;' . MALE . '&nbsp;&nbsp;' . tep_draw_radio_field('gender', 'f', $female) . '&nbsp;&nbsp;' . FEMALE . '&nbsp;' . ENTRY_GENDER_ERROR;
      } else {
        echo ($gender == 'm') ? MALE : FEMALE;
        echo tep_draw_hidden_field('gender');
      }
    } else {
      echo tep_draw_radio_field('gender', 'm', $male) . '&nbsp;&nbsp;' . MALE . '&nbsp;&nbsp;' . tep_draw_radio_field('gender', 'f', $female) . '&nbsp;&nbsp;' . FEMALE . '&nbsp;' . ENTRY_GENDER_TEXT;
    }
?></td>
          </tr>
<?php
  }
?>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_FIRST_NAME; ?></td>
            <td class="main">&nbsp;
<?php
  if ($is_read_only) {
    echo $account['customers_firstname'];
  } elseif ($error) {
    if ($entry_firstname_error) {
      echo tep_draw_input_field('firstname') . '&nbsp;' . ENTRY_FIRST_NAME_ERROR;
    } else {
      echo $firstname . tep_draw_hidden_field('firstname');
    }
  } else {
    echo tep_draw_input_field('firstname', $account['customers_firstname']) . '&nbsp;' . ENTRY_FIRST_NAME_TEXT;
  }
?></td>
          </tr>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_LAST_NAME; ?></td>
            <td class="main">&nbsp;
<?php
  if ($is_read_only) {
    echo $account['customers_lastname'];
  } elseif ($error) {
    if ($entry_lastname_error) {
      echo tep_draw_input_field('lastname') . '&nbsp;' . ENTRY_LAST_NAME_ERROR;
    } else {
      echo $lastname . tep_draw_hidden_field('lastname');
    }
  } else {
    echo tep_draw_input_field('lastname', $account['customers_lastname']) . '&nbsp;' . ENTRY_LAST_NAME_TEXT;
  }
?></td>
          </tr>
<?php
  if (ACCOUNT_DOB == 'true') {
?>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_DATE_OF_BIRTH; ?></td>
            <td class="main">&nbsp;
<?php
    if ($is_read_only) {
      echo tep_date_short($account['customers_dob']);
    } elseif ($error) {
      if ($entry_date_of_birth_error) {
        echo tep_draw_input_field('dob') . '&nbsp;' . ENTRY_DATE_OF_BIRTH_ERROR;
      } else {
        echo $dob . tep_draw_hidden_field('dob');
      }
    } else {
      echo tep_draw_input_field('dob', tep_date_short($account['customers_dob'])) . '&nbsp;' . ENTRY_DATE_OF_BIRTH_TEXT;
    }
?></td>
          </tr>
<?php
  }
?>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_EMAIL_ADDRESS; ?></td>
            <td class="main">&nbsp;
<?php
  if ($is_read_only) {
    echo $account['customers_email_address'];
  } elseif ($error) {
    if ($entry_email_address_error) {
      echo tep_draw_input_field('email_address') . '&nbsp;' . ENTRY_EMAIL_ADDRESS_ERROR;
    } elseif ($entry_email_address_check_error) {
      echo tep_draw_input_field('email_address') . '&nbsp;' . ENTRY_EMAIL_ADDRESS_CHECK_ERROR;
    } elseif ($entry_email_address_exists) {
      echo tep_draw_input_field('email_address') . '&nbsp;' . ENTRY_EMAIL_ADDRESS_ERROR_EXISTS;
    } else {
      echo $email_address . tep_draw_hidden_field('email_address');
    }
  } else {
    echo tep_draw_input_field('email_address', $account['customers_email_address']) . '&nbsp;' . ENTRY_EMAIL_ADDRESS_TEXT;
  }
?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
<?php
  if (ACCOUNT_COMPANY == 'true') {
?>  
  <tr>
    <td class="formAreaTitle"><br><?php echo CATEGORY_COMPANY; ?></td>
  </tr>
  <tr>
    <td class="main"><table border="0" width="100%" cellspacing="0" cellpadding="2" class="formArea">
      <tr>
        <td class="main"><table border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_COMPANY; ?></td>
            <td class="main">&nbsp;
<?php
    if ($is_read_only) {
      echo $account['entry_company'];
    } elseif ($error) {
      if ($entry_company_error) {
        echo tep_draw_input_field('company') . '&nbsp;' . ENTRY_COMPANY_ERROR;
      } else {
        echo $company . tep_draw_hidden_field('company');
      }
    } else {
      echo tep_draw_input_field('company', $account['entry_company']) . '&nbsp;' . ENTRY_COMPANY_TEXT;
    }
?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
<?php
  }
?>
  <tr>
    <td class="formAreaTitle"><br><?php echo CATEGORY_ADDRESS; ?></td>
  </tr>
  <tr>
    <td class="main"><table border="0" width="100%" cellspacing="0" cellpadding="2" class="formArea">
      <tr>
        <td class="main"><table border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_STREET_ADDRESS; ?></td>
            <td class="main">&nbsp;
<?php
  if ($is_read_only) {
    echo $account['entry_street_address'];
  } elseif ($error) {
    if ($entry_street_address_error) {
      echo tep_draw_input_field('street_address') . '&nbsp;' . ENTRY_STREET_ADDRESS_ERROR;
    } else {
      echo $street_address . tep_draw_hidden_field('street_address');
    }
  } else {
    echo tep_draw_input_field('street_address', $account['entry_street_address']) . '&nbsp;' . ENTRY_STREET_ADDRESS_TEXT;
  }
?></td>
          </tr>
<?php
  if (ACCOUNT_SUBURB == 'true') {
?>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_SUBURB; ?></td>
            <td class="main">&nbsp;
<?php
    if ($is_read_only) {
      echo $account['entry_suburb'];
    } elseif ($error) {
      if ($entry_suburb_error) {
        echo tep_draw_input_field('suburb') . '&nbsp;' . ENTRY_SUBURB_ERROR;
      } else {
        echo $suburb . tep_draw_hidden_field('suburb');
      }
    } else {
      echo tep_draw_input_field('suburb', $account['entry_suburb']) . '&nbsp;' . ENTRY_SUBURB_TEXT;
    }
?></td>
          </tr>
<?php
  }
?>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_POST_CODE; ?></td>
            <td class="main">&nbsp;
<?php
  if ($is_read_only) {
    echo $account['entry_postcode'];
  } elseif ($error) {
    if ($entry_post_code_error) {
      echo tep_draw_input_field('postcode') . '&nbsp;' . ENTRY_POST_CODE_ERROR;
    } else {
      echo $postcode . tep_draw_hidden_field('postcode');
    }
  } else {
    echo tep_draw_input_field('postcode', $account['entry_postcode']) . '&nbsp;' . ENTRY_POST_CODE_TEXT;
  }
?></td>
          </tr>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_CITY; ?></td>
            <td class="main">&nbsp;
<?php
  if ($is_read_only) {
    echo $account['entry_city'];
  } elseif ($error) {
    if ($entry_city_error) {
      echo tep_draw_input_field('city') . '&nbsp;' . ENTRY_CITY_ERROR;
    } else {
      echo $city . tep_draw_hidden_field('city');
    }
  } else {
    echo tep_draw_input_field('city', $account['entry_city']) . '&nbsp;' . ENTRY_CITY_TEXT;
  }
?></td>
          </tr>
<?php
  if (ACCOUNT_STATE == 'true') {
?>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_STATE; ?></td>
            <td class="main"><div id="states">&nbsp;
<?php
    $state = sbs_get_zone_name($country, $zone_id);
    if ($is_read_only) {
      echo sbs_get_zone_name($account['entry_country_id'], $account['entry_zone_id']);
    } else {
     
				// +Country-State Selector
				echo ajax_get_zones_html($country,'',false);
				// -Country-State Selector
    }
?>
            </div></td>
          </tr>
<?php
     }
?>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_COUNTRY; ?><span id="indicator"><?php echo tep_image(DIR_WS_ICONS . 'ajax-loader.gif'); ?></span></td>
			<?php // +Country-State Selector ?>
            <td class="main">&nbsp;
<?php
      $account['entry_country_id'] = STORE_COUNTRY;
	  if ($is_read_only) {       
	    echo tep_get_country_name($account['entry_country_id']);     
      } elseif ($error) {
        if ($entry_country_error) {    
		  echo sbs_get_country_list('country') . '&nbsp;' . ENTRY_COUNTRY_ERROR;
        } else {
          echo tep_get_country_name($country) . tep_draw_hidden_field('country');
        }
     } else {
	   echo sbs_get_country_list('country',$country,'onChange="getStates(this.value, \'states\');"') . '&nbsp;' . (tep_not_null(ENTRY_COUNTRY_TEXT) ? '<span class="inputRequirement">' . ENTRY_COUNTRY_TEXT . '</span>': ''); 
	   // -Country-State Selector
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
  <tr>
    <td class="formAreaTitle"><br><?php echo CATEGORY_CONTACT; ?></td>
  </tr>
  <tr>
    <td class="main"><table border="0" width="100%" cellspacing="0" cellpadding="2" class="formArea">
      <tr>
        <td class="main"><table border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_TELEPHONE_NUMBER; ?></td>
            <td class="main">&nbsp;
<?php
  if ($is_read_only) {
    echo $account['customers_telephone'];
  } elseif ($error) {
    if ($entry_telephone_error) {
      echo tep_draw_input_field('telephone') . '&nbsp;' . ENTRY_TELEPHONE_NUMBER_ERROR;
    } else {
      echo $telephone . tep_draw_hidden_field('telephone');
    }
  } else {
    echo tep_draw_input_field('telephone', $account['customers_telephone']) . '&nbsp;' . ENTRY_TELEPHONE_NUMBER_TEXT;
  }
?></td>
          </tr>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_FAX_NUMBER; ?></td>
            <td class="main">&nbsp;
<?php
  if ($is_read_only) {
    echo $account['customers_fax'];
  } elseif ($processed) {
    echo $fax . tep_draw_hidden_field('fax');
  } else {
    echo tep_draw_input_field('fax', $account['customers_fax']) . '&nbsp;' . ENTRY_FAX_NUMBER_TEXT;
  }
?></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td class="formAreaTitle"><br><?php echo CATEGORY_OPTIONS; ?></td>
  </tr>
  <tr>
    <td class="main"><table border="0" width="100%" cellspacing="0" cellpadding="2" class="formArea">
      <tr>
        <td class="main"><table border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_NEWSLETTER; ?></td>
            <td class="main">&nbsp;
<?php
  if ($is_read_only) {
    if ($account['customers_newsletter'] == '1') {
      echo ENTRY_NEWSLETTER_YES;
    } else {
      echo ENTRY_NEWSLETTER_NO;
    }
  } elseif ($processed) {
    if ($newsletter == '1') {
      echo ENTRY_NEWSLETTER_YES;
    } else {
      echo ENTRY_NEWSLETTER_NO;
    }
    echo tep_draw_hidden_field('newsletter');  
  } else {
    echo tep_draw_pull_down_menu('newsletter', $newsletter_array, $account['customers_newsletter']) . '&nbsp;' . ENTRY_NEWSLETTER_TEXT;
  }
?></td>
          </tr>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_CUSTOMER_GROUP; ?></td>
            <td class="main">&nbsp;
			
			<?php 
			  $existing_customers_query = tep_db_query("select customers_group_id, customers_group_name from " . TABLE_CUSTOMERS_GROUPS . " order by customers_group_id ");
			  while ($existing_customers =  tep_db_fetch_array($existing_customers_query)) {
                $existing_customers_array[] = array("id" => $existing_customers['customers_group_id'], "text" => "&#160;".$existing_customers['customers_group_name']."&#160;");
			  }
			 
			  if ($processed == true) {
                echo $customers_group . tep_draw_hidden_field('customers_group_id');
              } else {
                echo tep_draw_pull_down_menu('customers_group_id', $existing_customers_array, $account['customers_group_id']);
              } ?></td>
        </table></td>
      </tr>
    </table></td>
  </tr>

<?php /* 
  if (!$is_read_only) {
?>
  <tr>
    <td class="formAreaTitle"><br><?php echo CATEGORY_PASSWORD; ?></td>
  </tr>
  <tr>
    <td class="main"><table border="0" width="100%" cellspacing="0" cellpadding="2" class="formArea">
      <tr>
        <td class="main"><table border="0" cellspacing="0" cellpadding="2">
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_PASSWORD; ?></td>
            <td class="main">&nbsp;
<?php
    if ($error) {
      if ($entry_password_error) {
        echo tep_draw_password_field('password') . '&nbsp;' . ENTRY_PASSWORD_ERROR;
      } else {
        echo PASSWORD_HIDDEN . tep_draw_hidden_field('password') . tep_draw_hidden_field('confirmation');
      }
    } else {
      echo tep_draw_password_field('password') . '&nbsp;' . ENTRY_PASSWORD_TEXT;
    }
?></td>
         </tr>
<?php
    if ( (!$error) || ($entry_password_error) ) {
?>
          <tr>
            <td class="main" width="170">&nbsp;<?php echo ENTRY_PASSWORD_CONFIRMATION; ?></td>
            <td class="main">&nbsp;
<?php
      echo tep_draw_password_field('confirmation') . '&nbsp;' . ENTRY_PASSWORD_CONFIRMATION_TEXT;
?></td>
          </tr>
<?php
    } 
?>
        </table></td>
      </tr>
    </table></td>
  </tr>


<?php
  }
?>
*/ ?>
</table>
