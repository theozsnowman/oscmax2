<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gutschein versenden');
define('NAVBAR_TITLE', 'Gutschein versenden');
define('EMAIL_SUBJECT', 'Nachricht von ' . STORE_NAME);
define('HEADING_TEXT','<br>Bitte vervollst�ndigen Sie die folgenden Angaben zum Gutschein aus. Weitere Informationenen finden Sie hier: ');
define('ENTRY_NAME', 'Empf�ngername:');
define('ENTRY_EMAIL', 'Empf�nger E-Mail-Adresse:');
define('ENTRY_MESSAGE', 'Ihre Nachricht an den Empf�nger:');
define('ENTRY_AMOUNT', 'Gutscheinwert:');
define('ERROR_ENTRY_AMOUNT_CHECK', '&nbsp;&nbsp;<span class="errorText">Ung�ltiger Wert</span>');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', '&nbsp;&nbsp;<span class="errorText">Ung�ltige E-Mail Addresse</span>');
define('MAIN_MESSAGE', 'Sie m�chten einen Gutschein �ber %s f�r %s an dessen E-Mail-Adresse %s senden.<br><br>Diese E-Mail wird den folgenden Text enthalten:<br><br>Hallo %s<br><br>
                        Dies ist ein Geschenkgutschein �ber %s von %s');

define('PERSONAL_MESSAGE', '%s schreibt: ');
define('TEXT_SUCCESS', 'Ihr Gutschein wurde versendet !');


define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Sie haben einen Gutschein �ber %s erhalten !');
define('EMAIL_GV_TEXT_SUBJECT', 'Ein Geschenk von %s');
define('EMAIL_GV_FROM', 'Dieser Gutschein von %s an Sie gesendet');
define('EMAIL_GV_MESSAGE', 'Mit der Nachricht ');
define('EMAIL_GV_SEND_TO', 'Hallo %s');
define('EMAIL_GV_REDEEM', 'Um diesen Gutschein einzul�sen, klicken Sie bitte auf den unteren Link. Der Gutscheincode lautet %s. Bewahren Sie diesen Code sicher auf.');
define('EMAIL_GV_LINK', 'Um den Gutschein einzul�sen klichen Sie bitte auf ');
define('EMAIL_GV_VISIT', ' oder besuchen Sie ');
define('EMAIL_GV_ENTER', ' und geben den Code ein ');
define('EMAIL_GV_FIXED_FOOTER', 'Falls beim Einl�sen des Gutscheines �ber den obigen Link ein Problem auftritt, ' . "\n" .
                                'k�nnen Sie den Gutschein auch w�hrend des Bestellvorganges in unserem Online-Shop einl�sen.' . "\n\n");
define('EMAIL_GV_SHOP_FOOTER', '');
?>