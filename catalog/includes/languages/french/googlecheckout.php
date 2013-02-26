<?php
/*
$Id: googlecheckout.php 982 2011-01-06 02:53:12Z michael.oscmax@gmail.com $

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
/*
  Copyright (C) 2007 Google Inc.
*/

/**
 * Google Checkout v1.5.0
 */

define('MODULE_PAYMENT_GOOGLECHECKOUT_TEXT_TITLE', 'GoogleCheckout');
define('MODULE_PAYMENT_GOOGLECHECKOUT_TEXT_DESCRIPTION', 'GoogleCheckout');
define('MODULE_PAYMENT_GOOGLECHECKOUT_TEXT_OPTION', '- Ou utilisez -');
define('GOOGLECHECKOUT_STRING_WARN_USING_SANDBOX', 'GC est configur&eacute; pour utiliser SANDBOX. La commande sera trait&eacute;e mais non encaiss�.');
define('GOOGLECHECKOUT_STRING_WARN_NO_MERCHANT_ID_KEY', 'L\'dentifiant marchand de Google Checkout ou cl�s n\'a pas &eacute;t&eacute; cr�e');
define('GOOGLECHECKOUT_STRING_WARN_VIRTUAL', 'Certains produits de t&eacute;l&eacute;charger dans votre panier ne sont pas disponibles actuellement via Google Checkout.');
define('GOOGLECHECKOUT_STRING_WARN_EMPTY_CART', 'Le panier est vide');
define('GOOGLECHECKOUT_STRING_WARN_OUT_OF_STOCK', 'Certains produits sont en rupture de stock');
define('GOOGLECHECKOUT_STRING_WARN_MULTIPLE_SHIP_TAX', 'Il existe de plusieurs mode de livraison s&eacute;lectionn&eacute; et ils utilisent diff&eacute;rentes tax de TVA d\'exp&eacute;dition ou certains n\'en poss�de pas');
define('GOOGLECHECKOUT_STRING_WARN_MIX_VERSIONS', 'La version du module install&eacute; dans l\'interface d\'administration est %s et celui de l\'emballage est %s, supprimer / r&eacute;installer le module');
define('GOOGLECHECKOUT_STRING_WARN_WRONG_SHIPPING_CONFIG', 'DIR_FS_CATALOG and DIR_WS_MODULES sont peut-�tre mal configur� dans includes/configure.php file.Ce r�pertoire n\'existe pas: %s');
define('GOOGLECHECKOUT_STRING_WARN_RESTRICTED_CATEGORY', 'Certains articles sont dans des cat�gorie restreinte de GC.');

// This string will be added after the product name and description in the yellow box in the GC confirmation page for all Digital Goods.
define('GOOGLECHECKOUT_STRING_EXTRA_DIGITAL_CONTENT', 'Attendez 2-5 minutes pour avoir toutes les transactions trait�es.');
  
define('GOOGLECHECKOUT_STRING_ERR_SHIPPING_CONFIG', ' Erreur: Mode d\'exp�dition n\'est pas configur� ');
    
define ('GOOGLECHECKOUT_FLAT_RATE_SHIPPING', 'Tarif forfaitaire par commande');
define ('GOOGLECHECKOUT_ITEM_RATE_SHIPPING', 'Tarif forfaitaire par article');
define ('GOOGLECHECKOUT_TABLE_RATE_SHIPPING', 'Varient selon le poids/prix');

define ('GOOGLECHECKOUT_TABLE_NO_MERCHANT_CALCULATION', 'Pas de calcul d\'exp�dition marchands s�lectionn�s');
define ('GOOGLECHECKOUT_MERCHANT_CALCULATION_NOT_CONFIGURED', ' pas configur�e!<br />');

define ('GOOGLECHECKOUT_ERR_REGULAR_CHECKOUT', 'Google Checkout ne peut pas �tre utilis� dans une commander r�guli�re, cliquer sur le bouton Google Checkout ci-dessous');

define ('GOOGLECHECKOUT_ERR_DUPLICATED_ORDER', 'Doublon de NewOrderNotification #%s Cart order #%s');
  
// Google Request Success messages
define('GOOGLECHECKOUT_SUCCESS_SEND_CHARGE_ORDER', 'Envoyer � Google la commande d\'encaissement');
define('GOOGLECHECKOUT_SUCCESS_SEND_PROCESS_ORDER', 'Envoyer � Google la commande d\'exectuion');
define('GOOGLECHECKOUT_SUCCESS_SEND_DELIVER_ORDER', 'Envoyer � Google la commande de livraison de la commande');
define('GOOGLECHECKOUT_SUCCESS_SEND_ARCHIVE_ORDER', 'Envoyer � Google la commande d\'archivage de la commande');
define('GOOGLECHECKOUT_SUCCESS_SEND_REFUND_ORDER', 'Envoyer � Google la commande de remboursement int�gral');
define('GOOGLECHECKOUT_SUCCESS_SEND_CANCEL_ORDER', 'Envoyer � Google la commande d\'annulation');
define('GOOGLECHECKOUT_SUCCESS_SEND_MESSAGE_ORDER', 'Envoyer � Google Message � l\'acheteur');
define('GOOGLECHECKOUT_SUCCESS_SEND_NEW_USER_CREDENTIALS', 'Envoy� au nouvel acheteur l\'informations d\'identification de celui ci');
  
define('GOOGLECHECKOUT_SUCCESS_SEND_MERCHANT_ORDER_NUMBER', 'Envoy� le num�ro de commande au marchand');
define('GOOGLECHECKOUT_SUCCESS_SEND_ADMIN_COPY_EMAIL', 'Envoy� un message de changement l\'�tat au courrriel de l\'admin');

// Google Request warning Messages
define('GOOGLECHECKOUT_WARNING_CHUNK_MESSAGE', 'Google Message est plus long que %s, il a �t� r�dui lorsqu\'il est envoy� � l\'acheteur.');
define('GOOGLECHECKOUT_WARNING_SYSTEM_EMAIL_SENT', 'Un courriel standard a �t� envoy�  � l\'acheteur avec le message complet');

// Google Request Error Messages
define('GOOGLECHECKOUT_ERR_SEND_CHARGE_ORDER', 'Erreur d\'envoi Google Charge Order, voir les journaux d\'erreurs');
define('GOOGLECHECKOUT_ERR_SEND_PROCESS_ORDER', 'Erreur d\'envoi Google d\'exectuion de la commande, voir les journaux d\'erreurs');
define('GOOGLECHECKOUT_ERR_SEND_DELIVER_ORDER', 'Erreur d\'envoi Google de livraison de la commande, voir les journaux d\'erreurs');
define('GOOGLECHECKOUT_ERR_SEND_ARCHIVE_ORDER', 'Erreur d\'envoi Google d\'archivage de la commande, voir les journaux d\'erreurs');
define('GOOGLECHECKOUT_ERR_SEND_REFUND_ORDER', 'Erreur d\'envoi Google de remboursement int�gral, voir les journaux d\'erreurs');
define('GOOGLECHECKOUT_ERR_SEND_CANCEL_ORDER', 'Erreur d\'envoi Google Annulation de la commande, voir les journaux d\'erreurs');
define('GOOGLECHECKOUT_ERR_SEND_MESSAGE_ORDER', 'Erreur d\'envoi Google Message, voir les journaux d\'erreurs');
define('GOOGLECHECKOUT_ERR_SEND_NEW_USER_CREDENTIALS', 'Erreur d\'envoi de l\'informations d\'identification du nouvel acheteur, voir les journaux d\'erreurs');
define('GOOGLECHECKOUT_ERR_SEND_MERCHANT_ORDER_NUMBER', 'Erreur d\'envoi du num�ro de commande marchant, voir les journaux d\'erreurs');
define('GOOGLECHECKOUT_ERR_INVALID_STATE_TRANSITION', 'Invalid Google Checkout �tat de transition: %s => %s, revenir � %s et essayez de nouveau. Consulter le README');
  
// Remember max chars in 255, included that store name, email and pass that will replace the %s
define('GOOGLECHECKOUT_NEW_CREDENTIALS_MESSAGE', 'Ce sont vos identifiants pour se connecter au %s site. Utilisateur: %s Pass: %s S\'il vous pla�t changer votre mot de passe apr�s la connexion - le modifier dans l\'espace "Mon Compte".');

// Coupons
define('GOOGLECHECKOUT_COUPON_ERR_ONE_COUPON', 'D�sol�, un seul bon par commande');
define('GOOGLECHECKOUT_COUPON_ERR_MIN_PURCHASE', 'D�sol�, le minimum d\'achat n\'a pas �t� atteint pour utiliser ce bon');

define('GOOGLECHECKOUT_COUPON_DISCOUNT', 'Bon de remise: ');
define('GOOGLECHECKOUT_COUPON_FREESHIP', 'Bon de livraison gratuite: ');

// New Orders
define('GOOGLECHECKOUT_STATE_NEW_ORDER_NUM', 'Google Checkout numm�ro de commande: ');
define('GOOGLECHECKOUT_STATE_NEW_ORDER_MC_USED', 'Les calculs utilis�s Marchand: ');
define('GOOGLECHECKOUT_STATE_NEW_ORDER_BUYER_USER', 'Nouveau mon d\'utilisateur: ');
define('GOOGLECHECKOUT_STATE_NEW_ORDER_BUYER_PASS', 'Mot de passe de l\'acheteur : ');

// States
define('GOOGLECHECKOUT_STATE_STRING_TIME', 'Heure: ');
define('GOOGLECHECKOUT_STATE_STRING_NEW_STATE', 'Nouvel �tat: ');

define('GOOGLECHECKOUT_STATE_STRING_ORDER_READY_CHARGE', 'La commande pr�t � �tre ecaiss�e!');
define('GOOGLECHECKOUT_STATE_STRING_PAYMENT_DECLINED', 'Le paiement a �t� refus�!');
define('GOOGLECHECKOUT_STATE_STRING_ORDER_CANCELED', 'La commande a �t� annul�e.');
define('GOOGLECHECKOUT_STATE_STRING_ORDER_CANCELED_REASON', 'Raison: ');
define('GOOGLECHECKOUT_STATE_STRING_ORDER_CANCELED_BY_GOOG', 'La commande a �t� annul�e par Google.');
define('GOOGLECHECKOUT_STATE_STRING_ORDER_DELIVERED', 'La commande a �t� exp�di�e.');

define('GOOGLECHECKOUT_STATE_STRING_TRACKING', 'Donn�e de num�ro de suivi: ');
define('GOOGLECHECKOUT_STATE_STRING_TRACKING_CARRIER', 'Transporteur: ');
define('GOOGLECHECKOUT_STATE_STRING_TRACKING_NUMBER', 'Num�ro de suivi: ');

define('GOOGLECHECKOUT_STATE_STRING_LATEST_CHARGE', 'Derni�re montant encaiss�: ');
define('GOOGLECHECKOUT_STATE_STRING_TOTAL_CHARGE', 'Total du montant encaiss�: ');

define('GOOGLECHECKOUT_STATE_STRING_LATEST_REFUND', 'Derni�r montan rembours�: ');
define('GOOGLECHECKOUT_STATE_STRING_TOTAL_REFUND', 'Total des montans rembours�: ');
define('GOOGLECHECKOUT_STATE_STRING_GOOGLE_REFUND', 'Remboursement Google: ');
define('GOOGLECHECKOUT_STATE_STRING_NET_REVENUE', 'Revenu net: ');

define('GOOGLECHECKOUT_STATE_STRING_RISK_INFO', 'Information de risque: ');
define('GOOGLECHECKOUT_STATE_STRING_RISK_ELEGIBLE', ' B�n�ficier pour la protection: ');
define('GOOGLECHECKOUT_STATE_STRING_RISK_AVS', ' Response Avs: ');
define('GOOGLECHECKOUT_STATE_STRING_RISK_CVN', ' Response Cvn: ');
define('GOOGLECHECKOUT_STATE_STRING_RISK_CC_NUM', ' Num�ro CC partielle: ');
define('GOOGLECHECKOUT_STATE_STRING_RISK_ACC_AGE', ' L\'�ge du compte de l\'acheteur: ');

// Custom GC order states names  
define('GOOGLECHECKOUT_CUSTOM_ORDER_STATE_NEW', 'Google nouveau');
define('GOOGLECHECKOUT_CUSTOM_ORDER_STATE_PROCESSING', 'Google en traitement');
define('GOOGLECHECKOUT_CUSTOM_ORDER_STATE_SHIPPED', 'Google exp�di�');
define('GOOGLECHECKOUT_CUSTOM_ORDER_STATE_REFUNDED', 'Google rembours�');
define('GOOGLECHECKOUT_CUSTOM_ORDER_STATE_SHIPPED_REFUNDED', 'Google exp�di� et rembours�');
define('GOOGLECHECKOUT_CUSTOM_ORDER_STATE_CANCELED', 'Google annul�');

?>