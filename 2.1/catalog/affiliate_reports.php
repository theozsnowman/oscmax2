<?php
/*
  $Id: shipping.php,v 2.00 2003/10/12

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  if (!tep_session_is_registered('affiliate_id')) {
    $navigation->set_snapshot();
    tep_redirect(tep_href_link(FILENAME_AFFILIATE, '', 'SSL'));
  }

  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_AFFILIATE_REPORTS);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_AFFILIATE_REPORTS));
  $content = affiliate_reports; 
  include (bts_select('main')); // BTSv1.5

   require(DIR_WS_INCLUDES . 'application_bottom.php'); ?>