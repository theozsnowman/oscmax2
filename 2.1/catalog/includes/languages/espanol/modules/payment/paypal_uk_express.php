<?php
/*
  $Id: paypal_uk_express.php 1800 2008-01-11 16:33:02Z user $

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright 2008 osCMax

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_UK_EXPRESS_TEXT_TITLE', 'PayPal Website Payments Pro (UK) Express Checkout');
  define('MODULE_PAYMENT_PAYPAL_UK_EXPRESS_TEXT_PUBLIC_TITLE', 'PayPal Express');
  define('MODULE_PAYMENT_PAYPAL_UK_EXPRESS_TEXT_DESCRIPTION', '<b>Attencion: PayPal necesita el PayPal Website Payments Pro (UK) Direct Payments M&oacute;dulo de Pago cuando este M&oacute;dulo esta instalado.</b><br /><br /><img src="images/icons/icon_popup.gif" border="0">&nbsp;<a href="https://www.paypal.com/us/mrb/pal=QFHLNU89TLJYA" target="_blank" style="text-decoration: underline; font-weight: bold;">Visita la web de PayPal</a>&nbsp;<a href="javascript:toggleDivBlock(\'paypalExpressUKInfo\');">(info)</a><span id="paypalExpressUKInfo" style="display: none;"><br><i>Con el uso del Link para usar PayPal osCMax dar a cada Cliente nuevo un pequeno Bonus.</i></span>');
  define('MODULE_PAYMENT_PAYPAL_UK_EXPRESS_TEXT_BUTTON', 'Pague con PayPal');
  define('MODULE_PAYMENT_PAYPAL_UK_EXPRESS_TEXT_COMMENTS', 'Comentarios:');
  define('MODULE_PAYMENT_PAYPAL_UK_EXPRESS_ERROR_GENERAL', 'Error: A general problem has occurred with the transaction. Please try again.');
  define('MODULE_PAYMENT_PAYPAL_UK_EXPRESS_ERROR_CFG_ERROR', 'Error: Payment module configuration error. Please verify the login credentials.');
  define('MODULE_PAYMENT_PAYPAL_UK_EXPRESS_ERROR_ADDRESS', 'Error: A match of the Shipping Address City, State, and Postal Code failed. Please try again.');
  define('MODULE_PAYMENT_PAYPAL_UK_EXPRESS_ERROR_DECLINED', 'Error: This transaction has been declined. Please try again.');
  define('MODULE_PAYMENT_PAYPAL_UK_EXPRESS_ERROR_EXPRESS_DISABLED', 'Error: PayPal Express Checkout has been disabled for this merchant. Please contact PayPal Customer Service.');
?>
