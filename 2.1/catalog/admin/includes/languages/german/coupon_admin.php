<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
define('TEXT_COUPON_REDEEMED', 'Aktionsgutscheine einl�sen');
define('REDEEM_DATE_LAST', 'Zuletzt eingel�st am');
define('TOP_BAR_TITLE', 'Statistik');
define('HEADING_TITLE', 'Aktionsgutscheine');
define('HEADING_TITLE_PREVIEW', 'Aktionsgutscheinvorschau');
define('HEADING_TITLE_STATUS', 'Status : ');
define('TEXT_CUSTOMER', 'Kunde:');
define('TEXT_COUPON', 'Gutscheinbezeichnung');
define('TEXT_COUPON_ALL', 'Alle Aktionsgutscheine');
define('TEXT_COUPON_ACTIVE', 'Aktive Aktionsgutscheine');
define('TEXT_COUPON_INACTIVE', 'Inaktive Aktionsgutscheine');
define('TEXT_SUBJECT', 'Betreff:');
define('TEXT_FROM', 'Von:');
define('TEXT_FREE_SHIPPING', 'Gratisversand');
define('TEXT_MESSAGE', 'Nachricht:');
define('TEXT_SELECT_CUSTOMER', 'Kunden ausw�hlen');
define('TEXT_ALL_CUSTOMERS', 'Alle Kunden');
define('TEXT_NEWSLETTER_CUSTOMERS', 'An alle Newsletter-Abonnenten');
define('TEXT_CONFIRM_DELETE', 'Sind Sie sicher, dass Sie diesen Aktionsgutschein l�schen m�chten?');

define('TEXT_TO_REDEEM', 'Sie k�nnen diesen Aktionsgutschein w�hrend des Bezahlvorganges eil�sen. Geben Sie dazu den Code in das entsprechende Formularfeld ein und klicken Sie auf "Einl�sen".');
define('TEXT_IN_CASE', ' im Falle von Problemen oder Unklarheiten. ');
define('TEXT_VOUCHER_IS', 'Der Aktionsgutscheincode lautet ');
define('TEXT_REMEMBER', 'Bewahren Sie den Gutscheincode sicher auf, damit Sie dieses besondere Angebot nutzen k�nnen.');
define('TEXT_VISIT', 'wenn Sie ' . HTTP_SERVER . DIR_WS_CATALOG . ' besuchen');
define('TEXT_ENTER_CODE', ' und geben Sie den Code ein ');

define('TABLE_HEADING_ACTION', 'Aktion');

define('CUSTOMER_ID', 'Kunden ID');
define('CUSTOMER_NAME', 'Kundenname');
define('REDEEM_DATE', 'Eingel�st am');
define('IP_ADDRESS', 'IP Adresse');

define('TEXT_REDEMPTIONS', 'Einl�sungen');
define('TEXT_REDEMPTIONS_TOTAL', 'Gesamt');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Dieser Kunde');
define('TEXT_NO_FREE_SHIPPING', 'Kein Gratisversand');

define('NOTICE_EMAIL_SENT_TO', 'Hinweis: E-Mail gesendet an: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Fehler: Sie haben keinen Kunden ausgew�hlt.');
define('COUPON_NAME', 'Gutscheinbezeichnung');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', 'Gutscheinwert');
define('COUPON_CODE', 'Gutscheincode');
define('COUPON_STARTDATE', 'G�ltig ab');
define('COUPON_FINISHDATE', 'G�ltig bis');
define('COUPON_FREE_SHIP', 'Gratisversand');
define('COUPON_DESC', 'Gutscheinbeschreibung');
define('COUPON_MIN_ORDER', 'Mindestbestellwert');
define('COUPON_USES_COUPON', 'Verwendungen per Gutschein');
define('COUPON_USES_USER', 'Verwendungen per Kunde');
define('COUPON_PRODUCTS', 'G�ltige Produkte');
define('COUPON_CATEGORIES', 'G�ltige Kategorien');
define('VOUCHER_NUMBER_USED', 'Anzahl der Verwendungen');
define('DATE_CREATED', 'Erstellt am');
define('DATE_MODIFIED', 'Bearbeitet am');
define('TEXT_HEADING_NEW_COUPON', 'Neuen Aktionsgutschein erstellen');
define('TEXT_NEW_INTRO', 'Bitte vervollst�ndigen Sie die Angaben zum neuen Aktionsgutschein.<br>');


define('COUPON_NAME_HELP', 'Kurzbezeichnung des Gutscheines');
define('COUPON_AMOUNT_HELP', 'Wert des Gutscheins, entweder als Fixbetrag oder als Prozentsatz mit einem abschlie�enden %-Zeichen.');
define('COUPON_CODE_HELP', 'Sie k�nnen Ihren eigenen Code angeben, oder das Feld freilassen, damit ein Code automatisch generiert wird.');
define('COUPON_STARTDATE_HELP', 'Datum, ab wann der Gutschein g�ltig wird');
define('COUPON_FINISHDATE_HELP', 'Datum, ab wann der Gutschein verf�llt');
define('COUPON_FREE_SHIP_HELP', 'Der Gutschein gew�hrt den Gratisversand bei jeder Bestellung. Hinweis: Damit wird Gutscheinwert ignoriert, nicht jedoch der Mindestbestellwert.');
define('COUPON_DESC_HELP', 'Eine Beschreibung des Gutscheines f�r den Kunden');
define('COUPON_MIN_ORDER_HELP', 'Eine Mindestbestellmenge, unter der der Gutschein nicht verwendet werden kann');
define('COUPON_USES_COUPON_HELP', 'Eine Angabe, wie oft der Gutschein maximal verwendet werden kann. Lassen Sie das Feld leer, wenn Sie eine unbegrenzte Verwendung w�nschen.');
define('COUPON_USES_USER_HELP', 'Eine Angabe, wie oft der Gutschein von einem einzelnen Kunden maximal verwendet werden kann. Lassen Sie das Feld leer, wenn Sie eine unbegrenzte Verwendung w�nschen.');
define('COUPON_PRODUCTS_HELP', 'Eine kommaseparierte Liste von Produkt IDs, f�r die dieser Gutschein gilt. Lassen Sie das Feld leer, wenn Sie den Gutschein nicht auf bestimmte Produkte beschr�nken m�chten.');
define('COUPON_CATEGORIES_HELP', 'Eine kommaseparierte Liste von cpaths, f�r die dieser Gutschein gilt. Lassen Sie das Feld leer, wenn Sie den Gutschein nicht auf bestimmte Kategorien beschr�nken m�chten.');
define('ERROR_NO_COUPON_AMOUNT', 'Fehler: Sie haben keinen Gutscheinwert angegeben. W�hlen Sie entweder einen Wert oder Gratisversand.');
define('ERROR_COUPON_EXISTS', 'Fehler: Der Gutscheincode wird bereits von einem anderen Gutschein verwendet.');
define('COUPON_BUTTON_EMAIL_VOUCHER', 'Gutschein versenden');
define('COUPON_BUTTON_EDIT_VOUCHER', 'Gutschein bearbeiten');
define('COUPON_BUTTON_DELETE_VOUCHER', 'Gutschein l�schen');
define('COUPON_BUTTON_VOUCHER_REPORT', 'Gutschein Bericht');
define('COUPON_BUTTON_PREVIEW', 'Gutscheinvorschau');
define('COUPON_STATUS', 'Status');
define('COUPON_STATUS_HELP', '�ndern Sie den Status auf ' . IMAGE_ICON_STATUS_RED . ', um den Gutscheines zu sperren.');

define('COUPON_BUTTON_BACK', 'Zur�ck');
define('COUPON_BUTTON_CONFIRM', 'Best�tigen');
?>