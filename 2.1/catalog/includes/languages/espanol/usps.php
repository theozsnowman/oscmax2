<?php
/*
$Id: usps.php 3 2006-05-27 04:59:07Z user $

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright 2006 osCMax2005 osCMax, 2002 osCommerce

  Released under the GNU General Public License
*/

define('MODULE_SHIPPING_USPS_TEXT_TITLE', 'United States Postal Service');
define('MODULE_SHIPPING_USPS_TEXT_DESCRIPTION', 'United States Postal Service<br><br>You will need to have registered an account with USPS at http://www.uspsprioritymail.com/et_regcert.html to use this module<br><br>USPS expects you to use pounds as weight measure for your products.');
define('MODULE_SHIPPING_USPS_TEXT_OPT_PP', 'Parcel Post');
define('MODULE_SHIPPING_USPS_TEXT_OPT_PM', 'Priority Mail');
define('MODULE_SHIPPING_USPS_TEXT_OPT_EX', 'Express Mail');
// BOF: Added levels of service
define('MODULE_SHIPPING_USPS_TEXT_OPT_MM', 'Media Mail');
define('MODULE_SHIPPING_USPS_TEXT_OPT_LM', 'Library Mail');
define('MODULE_SHIPPING_USPS_TEXT_OPT_BM', 'Bound Printed');
// EOF: Added levels of service
define('MODULE_SHIPPING_USPS_TEXT_ERROR', 'Ha ocurrido un error calculando los gastos de envio.<br>Si aun desea usar USPS para su envio, contacte con el administrador.');
// BOF: Added Shipping text
define('MODULE_SHIPPING_USPS_TEXT_DAY', 'Day');
define('MODULE_SHIPPING_USPS_TEXT_DAYS', 'Days');
define('MODULE_SHIPPING_USPS_TEXT_WEEKS', 'Weeks');
// EOF: Added Shipping text
?>