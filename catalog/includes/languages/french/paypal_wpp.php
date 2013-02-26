<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
// Copyright 2008 Brian Burton

  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_TITLE', 'Paiement direct par PayPal');
  define('MODULE_PAYMENT_PAYPAL_EC_TEXT_TITLE', 'Paiement express apr Paypal');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_DESCRIPTION', '<center><b><h2>PayPal Pro pour osCommerce 2.2MS2+</h2> Paiement direct & Express de Paypal<br><br><i>D�velopp� et maintenu par:</i><br><a href="http://forums.oscommerce.com/index.php?showuser=80233">Brian Burton (dynamoeffects)</a></b></center>');
  define('MODULE_PAYMENT_PAYPAL_DP_ERROR_HEADING', 'Nous sommes d�sol�s, mais nous n\'avons pas pu traiter votre carte de cr�dit.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CARD_ERROR', 'Les informations de carte de cr�dit que vous avez entr� contient une erreur. S\'il vous pla�t v�rifiez et essayez de nouveau.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_FIRSTNAME', 'Pr�nom sur la carte de cr�dit:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_LASTNAME', 'Nom de famile sur la carte de cr�dit:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_TYPE', 'Type de carte de cr�dit:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_NUMBER', 'Num�ro de carte de cr�dit:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration de carte de cr�dit:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_CHECKNUMBER', 'Code de s�curit� des cartes de cr�dit:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', 'Qu\'est-que s\'est?');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_START_MONTH', 'Maestro mois de d�but :');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_START_YEAR', 'Maestro l\'ann�e de d�but:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_ISSUE_NUMBER', 'Maestro num�ro:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_SWITCHSOLO_ONLY', '(n�cessaire uniquement pour cartes Maestro)');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_DECLINED', 'Votre carte de cr�dit a �t� refus�e. S\'il vous pla�t essayez avec une autre carte ou contacter votre banque pour plus d\'infos.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_DP_INVALID_RESPONSE', 'PayPal a renvoy� des donn�es invalides ou incompl�tes pour compl�ter votre commande. S\'il vous pla�t essayer de nouveau ou de s�lectionner une mode de paiement alternative.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_GEN_ERROR', 'Une erreur s\'est produite lorsque nous avons essay� de contacter des serveurs de PayPal.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_ERROR', 'Une erreur s\'est produite lorsque nous avons essay� de traiter votre carte de cr�dit.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_UNVERIFIED', 'Pour maintenir un niveau �lev� de s�curit�, les clients utilisant Express Checkout doit �tre des clients v�rifi�s de PayPal. S\'il vous pla�t v�rifier votre compte shez PayPal ou choisez un autre moyen de paiement.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_BAD_CARD', 'Nous nous excusons pour ce d�sagr�ment, mais PayPal accepte uniquement les cartes Visa, Master Card, Discover et American Express. S\'il vous pla�t utiliser une carte de cr�dit diff�rente.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_BAD_LOGIN', 'Il y avait un probl�me de validation de votre compte. S\'il vous pla�t essayez de nouveau.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_JS_CC_OWNER', '* Le nom du propri�taire de la carte de cr�dit doit avoir au moins ' . CC_OWNER_MIN_LENGTH . ' charact�rs.\n');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_JS_CC_NUMBER', '* Le num�ro de carte de cr�dit doit avoir au moins ' . CC_NUMBER_MIN_LENGTH . ' charact�rs.\n');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_JS_CC_CVV2', '* Vous devez entrer le num�ro de contr�le qui se trouve sur le verso de votre carte.\n');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_EC_HEADER', 'C\'est rapide et s�curis� avec PayPal:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_BUTTON_TEXT', 'Gagnez du temps et payer en toute s�curit�.<br>Payer sans partager vos informations financi�res.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_STATE_ERROR', 'L\'�tat attribu� � votre compte n\'est pas valide. S\'il vous pla�t aller dans les param�tres de votre compte et rectifiez le probl�me.');
  define('MODULE_PAYMENT_PAYPAL_DP_MISSING_XML', 'PayPal WPP installation incompl�te! Il devrait y avoir des fichiers XML situ�s dans ' . DIR_FS_CATALOG . DIR_WS_INCLUDES . 'paypal_wpp/xml/ !');
  define('MODULE_PAYMENT_PAYPAL_DP_CURL_NOT_INSTALLED', 'cURL, qui est requis par le module de payement PayPal Pro, n\'est pas pr�sent.  S\'il vous pla�t contactez votre h�bergeur et lui demander que ce soit install�.');
  define('MODULE_PAYMENT_PAYPAL_DP_CERT_NOT_INSTALLED', 'Le certificat e l\'API du payement Pro n\'a pas pu �tre trouv�. S\'il vous pla�t v�rifier l\'emplacement de votre section d\'administration.');
  define('MODULE_PAYMENT_PAYPAL_DP_GEN_ERROR', 'Paiement non trait�es!');
  define('MODULE_PAYMENT_PAYPAL_EC_ALTERNATIVE', '<hr /><p align="center">ou vous pouvez utiliser</p><hr />');
  define('MODULE_PAYMENT_PAYPAL_DP_BUG_1629', 'Votre magasin dispose d\'un bug dans checkout_process.php qui emp�che ce module de fonction�. S\'il vous pla�t lisez la section de d�pannage du READ_ME.htm fourni avec le module pour plus d\'informations.');
  define('MODULE_PAYMENT_PAYPAL_EC_TEXT_DECLINED', 'Votre transaction de PayPal a �t� refus�e. S\'il vous pla�t s�lectionner un mode diff�rent.<br><br>');
?>