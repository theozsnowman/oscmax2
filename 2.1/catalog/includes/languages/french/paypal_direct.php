<?php
/*
  $Id: paypal_direct.php 1801 2008-01-11 16:49:20Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_DIRECT_TEXT_TITLE', 'Syst�me de Paiements Pro pour Sites Web (US) Paiements Directs');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_TEXT_PUBLIC_TITLE', 'Carte de cr�dit ou de d�bit (transaction s�curis�e op�r�e par PayPal)');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_TEXT_DESCRIPTION', '<b>Note : Si ce module est mis en service, il est n�cessaire que le module PayPal de Panier de Commande Express soit activ�.</b><br /><br /><img src="images/icons/icon_popup.gif" border="0" alt="">&nbsp;<a href="https://www.paypal.com/mrb/pal=PS2X9Q773CKG4" target="_blank" style="text-decoration: underline; font-weight: bold;">Visiter le site Web de PayPal</a>&nbsp;<a href="javascript:toggleDivBlock(\'paypalDirectInfo\');">(info)</a><span id="paypalDirectInfo" style="display: none;"><br><i>Merci d\'utiliser le lien ci-dessus pour vous inscrire � PayPal.</i></span>');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_CARD_OWNER', 'Titulaire de la carte de cr�dit :');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_CARD_TYPE', 'Type de carte :');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_CARD_NUMBER', 'Num�ro de carte :');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_CARD_VALID_FROM', 'Carte valide depuis (mm/yy) :');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_CARD_VALID_FROM_INFO', '(si disponible)');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_CARD_EXPIRES', 'Expiration (mm/yy) :');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_CARD_CVC', 'Cryptogramme (3 derniers chiffres situ�s au dos de la carte) :');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_CARD_ISSUE_NUMBER', 'Num�ro d\'�mission de la carte (cartes de d�bit uniquement) :');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_CARD_ISSUE_NUMBER_INFO', '(pour les titulaires de cartes Maestro et Solo seulement)');
  define('MODULE_PAYMENT_PAYPAL_DIRECT_ERROR_ALL_FIELDS_REQUIRED', 'Erreur : tous les champs relatifs au paiement sont requis.');
?>
