<?php
/*
$Id$

  osCmax e-Commerce
  http://www.osCmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
      echo tep_draw_form('contact_us', tep_href_link(FILENAME_CONTACT_US, 'action=send')); ?><table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '4'); ?></td>
      </tr>
	  <tr>
        <td class="productinfo_header"><table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td class="pageHeading"><?php echo HEADING_TITLE; ?></td>
            <td class="pageHeading" align="right">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
<?php
  if ($messageStack->size('contact') > 0) {
?>
      <tr>
        <td><?php echo $messageStack->output('contact'); ?></td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
<?php
  }

  if (isset($_GET['action']) && ($_GET['action'] == 'success')) {
?>
      <tr valign="middle">
        <td class="messageStackSuccess" align="center"><?php echo tep_image(DIR_WS_ICONS . 'success.png', ''); ?> &nbsp;<?php echo TEXT_SUCCESS; ?></td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      <tr>
        <td><table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
          <tr class="infoBoxContents">
            <td><table border="0" width="100%" cellspacing="0" cellpadding="2">
              <tr>
                <td width="10"><?php echo tep_draw_separator('pixel_trans.gif', '10', '1'); ?></td>
                <td align="right"><?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . tep_image_button('button_continue.gif', IMAGE_BUTTON_CONTINUE) . '</a>'; ?></td>
                <td width="10"><?php echo tep_draw_separator('pixel_trans.gif', '10', '1'); ?></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
<?php
  } else {
	  
	if ( (tep_session_is_registered('affiliate_id')) && ($source == 'affiliate') ) { 
	$account_query = tep_db_query("select affiliate_firstname, affiliate_lastname, affiliate_email_address from " . TABLE_AFFILIATE . " where affiliate_id = '" . (int)$affiliate_id . "'");
    $account = tep_db_fetch_array($account_query);

    $name = $account['affiliate_firstname'] . ' ' . $account['affiliate_lastname'];
    $email = $account['affiliate_email_address'];	
  	}
	  
	if (tep_session_is_registered('customer_id')) {
    $account_query = tep_db_query("select customers_firstname, customers_lastname, customers_email_address from " . TABLE_CUSTOMERS . " where customers_id = '" . (int)$customer_id . "'");
    $account = tep_db_fetch_array($account_query);

    $name = $account['customers_firstname'] . ' ' . $account['customers_lastname'];
    $email = $account['customers_email_address'];	
  	}
	
	if (!isset($name)) { $name = ''; }
	if (!isset($email)) { $email = ''; }
	
?>
      <tr>
        <td><table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
          <tr class="infoBoxContents">
          	<td colspan="2" class="main"><?php echo INSTRUCTIONS_TEXT; ?><BR /><BR /></td>
          </tr>
          <tr class="infoBoxContents">
            <td width="65%"><table border="0" width="100%" cellspacing="0" cellpadding="2">
              <tr>
                <td class="main"><?php echo ENTRY_NAME; ?></td>
              </tr>
              <tr>
                <td class="main"><?php echo tep_draw_input_field('name', '','value="' . $name .'" size="40" '); ?></td>
              </tr>
              <tr>
                <td class="main"><?php echo ENTRY_EMAIL; ?></td>
              </tr>
              <tr>
                <td class="main"><?php echo tep_draw_input_field('email', '','value="' . $email .'" size="40" ','email'); ?></td>
              </tr>
              <tr>
              <td class="main"><?php echo ENTRY_REASON; ?>
              
              <br>
					<select name="reason" class="input-style">
						<?php echo '<option value="' . REASON_1 . '">' . REASON_1 . '</option>'; ?>
						<?php echo '<option value="' . REASON_2 . '">' . REASON_2 . '</option>'; ?>
						<?php echo '<option value="' . REASON_3 . '">' . REASON_3 . '</option>'; ?>
						<?php echo '<option value="' . REASON_4 . '">' . REASON_4 . '</option>'; ?>
						<?php echo '<option value="' . REASON_5 . '">' . REASON_5 . '</option>'; ?>
						<?php echo '<option value="' . REASON_6 . '">' . REASON_6 . '</option>'; ?>

					</select><br />
              
              </td>
              </tr>
              <tr>
                <td class="main"><?php echo ENTRY_ENQUIRY; ?></td>
              </tr>
              <tr>
                <td><?php echo tep_draw_textarea_field('enquiry', 50, 10); ?></td>
              </tr>
<?php if (RECAPTCHA_ON == 'true') { ?>
<!-- start modification for reCaptcha -->
			  <tr>
                <td class="smallText"><?php echo SECURITY_PROMPT; ?></td>
              </tr>
<!-- end modification for reCaptcha -->
<?php } ?>
            </table></td>
        
        <td width="35%" valign="top">
		  <table border="0" width="100%" cellspacing="0" cellpadding="2">
		    <?php if (SHOW_STORE_OPENING_HOURS == 'true') { ?>
           	  <tr>
                <td class="smallText"><?php echo OPENING_HOURS; ?></td>
              </tr>
			  <tr>
                <td class="smallText"><?php echo nl2br(STORE_OPENING_HOURS_TEXT); ?><br><br></td>
              </tr>
			<?php } ?>
			<?php if (SHOW_EMAIL_ADDRESS == 'true') { ?>
           	  <tr>
                <td class="smallText"><?php echo EMAIL_US; ?></td>
              </tr>
			  <tr>
              <?php if (RECAPTCHA_EMAIL_URL != '' && RECAPTCHA_EMAIL_FROM != '') { ?>
                <td class="smallText"><a href="<?php echo RECAPTCHA_EMAIL_URL; ?>" onclick="window.open('<?php echo RECAPTCHA_EMAIL_URL; ?>', '', 'toolbar=0,scrollbars=0,location=0,statusbar=0, menubar=0,resizable=0,width=510,height=340'); return false;" title="<?php echo TEXT_REVEAL_EMAIL; ?>">
				<?php if (RECAPTCHA_EMAIL_FROM == 'CLICK') { echo TEXT_REVEAL_EMAIL; } else { echo RECAPTCHA_EMAIL_FROM; } ?></a><br><br></td>
              <?php } else { ?>  
                <td class="smallText"><a href="mailto:<?php echo EMAIL_FROM; ?>"><?php echo EMAIL_FROM; ?></a><br><br></td>
              <?php } ?>  
              </tr>
			<?php } ?>
			<?php if (SHOW_MAILING_ADDRESS == 'true') { ?>
			  <tr>
			    <td class="smallText"><?php echo WRITE_US; ?></td>
			  </tr>
			  <tr>
			    <td class="smallText"><?php echo nl2br(STORE_NAME_ADDRESS); ?></td>
			  </tr>
			<?php } ?>
<?php if (RECAPTCHA_ON == 'true') { ?>
<!-- start modification for reCaptcha -->
              <tr>
                <td class="smallText"><br><b><?php echo ENTRY_SECURITY_CHECK; ?></b></td>
              </tr>
              <tr>
								<script>
								var RecaptchaOptions = {
								   theme : '<?php echo RECAPTCHA_STYLE; ?>',
								   tabindex : 3
								};
								</script>              	
                <td class="main"><?php echo recaptcha_get_html($publickey); ?></td>
              </tr>
<!-- end modification for reCaptcha -->
<?php } ?>

                </table>
            </td>
            
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      <tr>
        <td><table border="0" width="100%" cellspacing="1" cellpadding="2" class="infoBox">
          <tr class="infoBoxContents">
            <td><table border="0" width="100%" cellspacing="0" cellpadding="2">
              <tr>
                <td width="10"><?php echo tep_draw_separator('pixel_trans.gif', '10', '1'); ?></td>
                <td align="right"><?php echo tep_image_submit('button_continue.gif', IMAGE_BUTTON_CONTINUE); ?></td>
                <td width="10"><?php echo tep_draw_separator('pixel_trans.gif', '10', '1'); ?></td>
              </tr>
            </table></td>
        
          </tr>
        </table></td>
        
      </tr>
<?php
  }
?>
    </table></form>