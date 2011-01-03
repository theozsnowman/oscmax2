<?php
/*
$Id$
  Recover Cart Sales v 1.4 GERMAN Language File

  Recover Cart Sales contrib: JM Ivler (c)
  osCmax e-Commerce
  http://www.oscmax.com

  Released under the GNU General Public License

  Modifed by Aalst (recover_cart_sales.php,v 1.2 .. 1.36)
  aalst@aalst.com
  
  Modifed by willross (recover_cart_sales.php,v 1.4)
  reply@qwest.net
  - don't forget to flush the 'scart' db table every so often

  Modifed by Lane (stats_recover_cart_sales.php,v 1.4d .. 2.22)
  lane@ifd.com www.osc-modsquad.com / www.ifd.com
*/

define('MESSAGE_STACK_CUSTOMER_ID', 'Cart for Customer-ID ');
define('MESSAGE_STACK_DELETE_SUCCESS', ' deleted successfully');
define('HEADING_TITLE', 'Recover Cart Sales v2.22');
define('HEADING_EMAIL_SENT', 'E-mail Sende-Report');
define('EMAIL_TEXT_LOGIN', 'Login to your account here:');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Anfrage von '.  STORE_NAME );
define('EMAIL_TEXT_SALUTATION', 'Dear ' );
define('EMAIL_TEXT_NEWCUST_INTRO', "\n\n" . 'Vielen Dank f�r Ihren Besuch bei ' . STORE_NAME .
                                   ' und Ihr uns entgegengebrachtes Vertrauen.  ');
define('EMAIL_TEXT_CURCUST_INTRO', "\n\n" . 'Vielen Dank f�r Ihren erneuten Besuch bei ' .
                                   STORE_NAME . ' und Ihr wiederholtes uns entgegengebrachtes Vertrauen.  ');
define('EMAIL_TEXT_BODY_HEADER', 'Wir haben gesehen, da� Sie bei Ihrem Besuch in unserem Onlineshop den Warenkorb mit folgenden ' .
                                 'Artikeln gef�llt haben aber den Einkauf nicht vollst�ndig durchgef�hrt haben. ' .
                                 "\n\n" . 'Inhalt Ihres Warenkorbes:' . "\n\n");
define('EMAIL_TEXT_BODY_FOOTER', 'Wir sind immer bem�ht unseren Service ' .
                                 'im Interesse unserer Kunden zu verbessern. Aus diesem Grund interessiert es uns nat�rlich, was die ' .
                                 'Ursachen daf�r waren, Ihren Einkauf dieses Mal nicht bei '. STORE_NAME . ' zu t�tigen. Wir w�ren Ihnen ' .
                                 'daher sehr dankbar, wenn Sie uns mitteilen w�rden, ob Sie bei Ihrem Besuch in unsererm Onlineshop ' .
                                 'Probleme oder Bedenken hatten ' . 'den Einkauf erfolgreich abzuschlie�en. Unser Ziel ist es Ihnen und ' .
                                 ' anderen Kunden den Einkauf bei ' . STORE_NAME . ' leichter und besser zu gestalten. ' .
                                 "\n\n" . 'Nochmals, vielen Dank f�r Ihre Zeit und Ihre Hilfe ' .
                                 'den Onlineshop von ' . STORE_NAME . ' zu verbessern.' . "\n\n" .
                                 'Mit freundlichen Gr��en' . "\n". 'Ihr Team von ');
define('DAYS_FIELD_PREFIX', 'Zeige letzen ');
define('DAYS_FIELD_POSTFIX', ' Tage ');
define('DAYS_FIELD_BUTTON', 'Anzeigen');
define('TABLE_HEADING_DATE', 'Datum');
define('TABLE_HEADING_CONTACT', 'kontaktieren?');
define('TABLE_HEADING_CUSTOMER', 'Kunden Name');
define('TABLE_HEADING_EMAIL', 'E-Mail');
define('TABLE_HEADING_PHONE', 'Telefon');
define('TABLE_HEADING_MODEL', 'Artikel');
define('TABLE_HEADING_DESCRIPTION', 'Beschreibung');
define('TABLE_HEADING_QUANTY', 'Menge');
define('TABLE_HEADING_PRICE', 'Preis');
define('TABLE_HEADING_TOTAL', 'Summe');
define('TABLE_GRAND_TOTAL', 'Summe netto Gesamt: ');
define('TABLE_CART_TOTAL', 'Summe netto: ');
define('TEXT_CURRENT_CUSTOMER', 'Kunde');
define('TEXT_SEND_EMAIL', 'Sende E-mail');
define('TEXT_RETURN', '[Klick hier um zur�ckzugehen]');
define('TEXT_NOT_CONTACTED', 'Nicht kontaktiert');
define('PSMSG', 'Zus�tzliche Nachricht (PS) am Ende der Mail: ');
?>