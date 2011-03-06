<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

// PWA BOF
define('TEXT_GUEST_INTRODUCTION', '<b>M�chten Sie direkt zur Kasse gehen?</b><br><br>Sie k�nnen Ihren Einkauf mit oder ohne Kundenkonto abschlie�en. Beachten Sie jedoch, dass bei einem die  Einkauf ohne Kundenkonto gewisse Funktionen in diesem Shop nicht zur Verf�gung stehen. Sie k�nnen den Status Ihrer Bestellung nicht verfolgen und bei einem k�nftigen Einkauf m�ssen Sie alle Angaben erneut machen.<br><br>Das Erstellen eines Kontos ist kostenlos. Wenn Sie dennoch Ihren Einkauf abschlie�en m�chten, klicken Sie auf den "Kasse" Button.');
// PWA BOF
define('NAVBAR_TITLE', 'Anmelden');
define('HEADING_TITLE', 'Herzlich Willkommen! Bitte melden Sie sich an');

define('HEADING_NEW_CUSTOMER', 'Neuer Kunde');
define('TEXT_NEW_CUSTOMER', 'Ich bin ein neuer Kunde.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Durch Ihre Anmeldung bei ' . STORE_NAME . ' sind Sie in der Lage, schneller zu bestellen, kennen jederzeit den Status Ihrer Bestellungen und haben immer eine aktuelle �bersicht �ber Ihre bisherigen Bestellungen.');

define('HEADING_RETURNING_CUSTOMER', 'Bestehender Kunde');
define('TEXT_RETURNING_CUSTOMER', 'Ich bin bereits Kunde.');

define('TEXT_PASSWORD_FORGOTTEN', 'Passwort vergessen? Hier klicken.');

define('TEXT_LOGIN_ERROR', 'Fehler: Die E-Mail-Adresse und/oder das Passwort sind nicht korrekt.');
define('TEXT_VISITORS_CART', '<font color="#ff0000"><b>Hinweis:</b></font> Der Inhalt Ihres Warenkorbes bleibt erhalten, wenn Sie sich anmelden.');

// LINE ADDED: MOD - Separate Pricing Per Customer
// define the email address that can change customer_group_id on login
define('SPPC_TOGGLE_LOGIN_PASSWORD', 'root@localhost');
define('PWA_FAIL_ACCOUNT_EXISTS','Es existiert bereits ein Konto f�r die E-Mail-Adresse {EMAIL_ADDRESS}. Sie m�ssen sich hier anmelden mit dem Passwort f�r dieses Konto, bevor Sie Ihren Einkauf abschlie�en k�nnen.');

define('HEADING_CHECKOUT','<font size="2">Gehen Sie direkt zur Kasse</font>');

define('TEXT_CHECKOUT_INTRODUCTION','Gehen Sie zur Kasse, ohne ein Kundenkonto zu erstellen. Bei dieser Option werden keine Ihrer Benutzerdaten zur weiteren Verwendung gespeichertwerden in unseren Unterlagen aufbewahrt werden. Sie k�nnen den Status Ihrer Bestellung nicht verfolgen und bei einem k�nftigen Einkauf m�ssen Sie alle Angaben erneut machen.');

define('PROCEED_TO_CHECKOUT','Gehen Sie zur Kasse, ohne ein Kundenkonto zu erstellen');

define('TEXT_GV_LOGIN_NEEDED', 'Sie m�ssen angemeldet sein, um Ihren Gutschein einl�sen zu k�nnen. Bitte erstellen Sie ein neues Konto oder melden Sie sich an.');

?>