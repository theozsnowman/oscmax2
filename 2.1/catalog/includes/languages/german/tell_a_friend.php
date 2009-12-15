<?php
/*
$Id: tell_a_friend.php 3 2006-05-27 04:59:07Z user $

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright 2006 osCMax

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Produkt weiterempfehlen');

define('HEADING_TITLE', 'Empfehlen Sie \'%s\' weiter');

define('FORM_TITLE_CUSTOMER_DETAILS', 'Ihre Angaben');
define('FORM_TITLE_FRIEND_DETAILS', 'Angaben Ihres Freundes');
define('FORM_TITLE_FRIEND_MESSAGE', 'Ihre Nachricht (wird mit der Empfehlung versendet)');

define('FORM_FIELD_CUSTOMER_NAME', 'Ihr Name:');
define('FORM_FIELD_CUSTOMER_EMAIL', 'Ihre eMail-Adresse:');
define('FORM_FIELD_FRIEND_NAME', 'Name Ihres Freundes:');
define('FORM_FIELD_FRIEND_EMAIL', 'eMail-Adresse Ihres Freundes:');

define('TEXT_EMAIL_SUCCESSFUL_SENT', 'Ihre eMail &uuml;ber <b>%s</b> wurde gesendet an <b>%s</b>.');

define('TEXT_EMAIL_SUBJECT', 'Ihr Freund %s, hat dieses Produkt gefunden, und zwar hier: %s');
define('TEXT_EMAIL_INTRO', 'Hallo %s!' . "\n\n" . 'Ihr Freund, %s, hat dieses Produkt %s bei %s gefunden.');
define('TEXT_EMAIL_LINK', 'Um das Produkt anzusehen, klicken Sie bitte auf den Link oder kopieren diesen und f�gen Sie ihn in der Adress-Zeile Ihres Browsers ein:' . "\n\n" . '%s');
// LINE ADDED: MOD - ARTICLE MANAGER
define('TEXT_EMAIL_LINK_ARTICLE', 'To view the article click on the link below or copy and paste the link into your web browser:' . "\n\n" . '%s');
define('TEXT_EMAIL_SIGNATURE', 'Mit freundlichen Gr�ssen,' . "\n\n" . '%s');

define('ERROR_TO_NAME', 'Fehler: Der Empf&auml;ngername darf nicht leer sein.');
define('ERROR_TO_ADDRESS', 'Fehler: Die Empf&auml;nger-Email-Adresse darf nicht leer sein.');
define('ERROR_FROM_NAME', 'Fehler: Der Absendername (Ihr Name) muss angegeben werden.');
define('ERROR_FROM_ADDRESS', 'Fehler: Die Absenderadresse muss eine g&uuml;ltige Mail-Adresse sein.');
?>
