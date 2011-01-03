<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', '�nderung einer Bestellung #%s vom %s');
define('ADDING_TITLE', 'Artikel hinzuf�gen zur Bestellung #%s');

define('ENTRY_UPDATE_TO_CC', '(Aktualisiere ' . ORDER_EDITOR_CREDIT_CARD . ' um die Kreditkartenfelder zu sehen.)');
define('TABLE_HEADING_COMMENTS', 'Anmerkung');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_NEW_STATUS', 'Neuer Status');
define('TABLE_HEADING_ACTION', 'Ausf�hren');
define('TABLE_HEADING_DELETE', 'L�schen?');
define('TABLE_HEADING_QUANTITY', 'Menge');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Artikel-Nr.');
define('TABLE_HEADING_PRODUCTS', 'Artikel');
define('TABLE_HEADING_TAX', 'Steuer');
define('TABLE_HEADING_TOTAL', 'Gesamt');
define('TABLE_HEADING_BASE_PRICE', 'Grund<br>Preis');
define('TABLE_HEADING_UNIT_PRICE', 'Preis<br>(netto)');
define('TABLE_HEADING_UNIT_PRICE_TAXED', 'Preis<br>(brutto)');
define('TABLE_HEADING_TOTAL_PRICE', 'Gesamt<br>(netto)');
define('TABLE_HEADING_TOTAL_PRICE_TAXED', 'Gesamt<br>(brutto)');
define('TABLE_HEADING_OT_TOTALS', 'Order Gesamt:');
define('TABLE_HEADING_OT_VALUES', 'Wert:');
define('TABLE_HEADING_SHIPPING_QUOTES', 'Versandarten:');
define('TABLE_HEADING_NO_SHIPPING_QUOTES', 'Es gibt keine Versandarten zum Anzeigen!');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Kunde<br>benachrichtigt');
define('TABLE_HEADING_DATE_ADDED', 'hinzugef�gt am');

define('ENTRY_CUSTOMER', 'Kunde');
define('ENTRY_NAME', 'Name:');
define('ENTRY_CITY_STATE', 'Stadt, Land:');
define('ENTRY_SHIPPING_ADDRESS', 'Lieferadresse');
define('ENTRY_BILLING_ADDRESS', 'Rechnungsadresse');
define('ENTRY_PAYMENT_METHOD', 'Zahlungsweise');
define('ENTRY_CREDIT_CARD_TYPE', 'Kreditkarte:');
define('ENTRY_CREDIT_CARD_OWNER', 'Karteninhaber:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Kartennummer:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'g�ltig bis:');
define('ENTRY_SUB_TOTAL', 'Zwischensumme:');
define('ENTRY_TYPE_BELOW', 'unten angeben');

//the definition of ENTRY_TAX is important when dealing with certain tax components and scenarios
define('ENTRY_TAX', 'Steuer');
//do not use a colon (:) in the defintion, ie 'VAT' is ok, but 'VAT:' is not

define('ENTRY_SHIPPING', 'Lieferung:');
define('ENTRY_TOTAL', 'Gesamt:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_NOTIFY_CUSTOMER', 'Kunde benachrichtigen:');
define('ENTRY_NOTIFY_COMMENTS', 'Sende Anmerkung:');
define('ENTRY_CURRENCY_TYPE', 'W�hrung');
define('ENTRY_CURRENCY_VALUE', 'W�hrungswert');

define('TEXT_INFO_PAYMENT_METHOD', 'Zahlungsweise:');
define('TEXT_NO_ORDER_PRODUCTS', 'Diese Bestellung enth�lt keine Artikel');
define('TEXT_ADD_NEW_PRODUCT', 'Artikel hinzuf�gen');
define('TEXT_PACKAGE_WEIGHT_COUNT', 'Gewicht: %s  |  Artikelanzahl: %s');

define('TEXT_STEP_1', '<b>Schritt 1:</b>');
define('TEXT_STEP_2', '<b>Schritt 2:</b>');
define('TEXT_STEP_3', '<b>Schritt 3:</b>');
define('TEXT_STEP_4', '<b>Schritt 4:</b>');
define('TEXT_SELECT_CATEGORY', '- W�hle Kategorie aus der Liste -');
define('TEXT_PRODUCT_SEARCH', '<b>- ODER gebe einen Suchbegriff ein -</b>');
define('TEXT_ALL_CATEGORIES', 'Alle Kategorien/Alle Artikel');
define('TEXT_SELECT_PRODUCT', '- W�hle einen Artikel -');
define('TEXT_BUTTON_SELECT_OPTIONS', 'ausw�hlen');
define('TEXT_BUTTON_SELECT_CATEGORY', 'W�hle diese Kategorie');
define('TEXT_BUTTON_SELECT_PRODUCT', 'W�hle diesen Artikel');
define('TEXT_SKIP_NO_OPTIONS', '<em>Keine Optionen - �berspringen...</em>');
define('TEXT_QUANTITY', 'Menge:');
define('TEXT_BUTTON_ADD_PRODUCT', 'Zur Order hinzuf�gen');
define('TEXT_CLOSE_POPUP', '<u>Schlie�en</u> [x]');
define('TEXT_ADD_PRODUCT_INSTRUCTIONS', 'F�ge Artikel hinzu bist Du fertig bist. <br> Dann schlie�e dieses/n Tab/Fenster, kehre zum Hauptfenster zur�ck, und dr�cke die Schaltfl�che "Aktualisieren".');
define('TEXT_PRODUCT_NOT_FOUND', '<b>Artikel nicht gefunden<b>');
define('TEXT_SHIPPING_SAME_AS_BILLING', 'Lieferadresse ist gleich Rechnungsadresse');
define('TEXT_BILLING_SAME_AS_CUSTOMER', 'Rechnungsadresse ist gleich Kundenadresse');

define('IMAGE_ADD_NEW_OT', 'neue Kundenorder nach dieser erstellen');
define('IMAGE_REMOVE_NEW_OT', 'L�sche diese Order');
define('IMAGE_NEW_ORDER_EMAIL', 'Sende neue Bestellbest�tigung per Email');

define('TEXT_NO_ORDER_HISTORY', 'Keine Bestellhistorie verf�gbar');

define('PLEASE_SELECT', 'Bitte w�hlen');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Ihre Bestellung wurde bearbeitet');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestellnummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Detaillierte �bersicht:');
define('EMAIL_TEXT_DATE_ORDERED', 'Bestelldatum:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Herzlichen Dank f�r Ihre Bestellung!!' . "\n\n" . 'Der Status Ihrer Bestellung wurde ge�ndert.' . "\n\n" . 'Der neue Status ist: %s' . "\n\n");
define('EMAIL_TEXT_STATUS_UPDATE2', 'Bei Fragen antworten Sie einfach auf diese Email.' . "\n\n" . 'Herzlichen Dank und freundliche Gr��e vom Team ' . STORE_NAME . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Anmerkungen zu Ihrer Bestellung' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Fehler: Die Bestellung %s existiert nicht.');
define('ERROR_NO_ORDER_SELECTED', 'Du hast keine Bestellung zum �ndern ausgew�hlt, oder die Order-ID existiert nicht.');
define('SUCCESS_ORDER_UPDATED', 'Die Bestellung wurde erfolgreich aktualisiert.');
define('SUCCESS_EMAIL_SENT', 'Die Bestellung wurde erfolgreich aktualisiert und die Kundenemail wurde versandt.');

//the hints
define('HINT_UPDATE_TO_CC', 'Wenn die Zahlungsart auf ' . ORDER_EDITOR_CREDIT_CARD . ' gesetzt wird, erscheinen die Eingabefelder f�r die Kreditkartendaten automatisch.  Bei anderen Zahlungsweisen sind diese Felder unsichtbar.  Die Zahlungsart die Sie angeben m�ssen, um die Kreditkarteneingabefelder erscheinen zu lassen, wird unter Konfiguration "Order Editor" angegeben.');
define('HINT_UPDATE_CURRENCY', 'Eine �nderung der W�hrung erzeugt eine Aktualisierung der Gesamtsumme und der Versandarten.');
define('HINT_SHIPPING_ADDRESS', 'Nach �nderung der Lieferadresse (Postleitzahl, Stadt oder Land) erscheint die Option die Gesamtsumme neu zu berechnen und die Versandarten zu aktualisieren.');
define('HINT_TOTALS', 'Es ist m�glich durch die Angabe "negativer Werte" einen Rabatt zu gew�hren. Zwischensumme, Mehrwertsteuer und Gesamtsumme sind nicht editierbar. Beim Hinzuf�gen eines Wertes, ist es beim Einsatz von Ajax wichtig, das Feld umgehend auszuf�llen, denn ansonsten bleibt es leer und wird dann automatisch wieder gel�scht.');
define('HINT_PRESS_UPDATE', 'Um die �nderungen durchzuf�hren, bitte "Aktualisieren" dr�cken.');
define('HINT_BASE_PRICE', 'Grundpreis ist der Artikelpreis ohne Produktattribute (z.B., der Katalogpreis)');
define('HINT_PRICE_EXCL', 'Price (excl) is the base price plus any product attributes prices that may exist');
define('HINT_PRICE_INCL', 'Preis (brutto) ist der Nettopreis multipliziert mit Mehrwertsteuer');
define('HINT_TOTAL_EXCL', 'Gesamt (netto) ist der Nettopreis multipliziert mit Menge');
define('HINT_TOTAL_INCL', 'Gesamt (brutto) ist der Nettopreis multipliziert mit Menge und Mehrwertsteuer');
//end hints

//new order confirmation email- this is a separate email from order status update
define('ENTRY_SEND_NEW_ORDER_CONFIRMATION', 'Um neue Bestellbest�tigung per Email zu senden, bitte anklicken:');
define('EMAIL_TEXT_DATE_MODIFIED', '�nderungsdatum:');
define('EMAIL_TEXT_PRODUCTS', 'Artikel');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Lieferadresse');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Rechnungsadresse');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Zahlungsweise');
// If you want to include extra payment information, enter text below (use <br> for line breaks):
//define('EMAIL_TEXT_PAYMENT_INFO', ''); //why would this be useful???
// If you want to include footer text, enter text below (use <br> for line breaks):
define('EMAIL_TEXT_FOOTER', '');
//end email

//add-on for downloads
define('ENTRY_DOWNLOAD_COUNT', 'Download #');
define('ENTRY_DOWNLOAD_FILENAME', 'Dateiname');
define('ENTRY_DOWNLOAD_MAXDAYS', 'G�ltigkeitstage');
define('ENTRY_DOWNLOAD_MAXCOUNT', 'wie oft downgeloaded');

//add-on for Ajax
define('AJAX_CONFIRM_PRODUCT_DELETE', 'Artikel aus der Bestellung l�schen?');
define('AJAX_CONFIRM_COMMENT_DELETE', 'Anmerkung aus der Bestellhistorie l�schen?');
define('AJAX_MESSAGE_STACK_SUCCESS', ' \' + %s + \' wurde aktualisiert');
define('AJAX_CONFIRM_RELOAD_TOTALS', 'Du hast die Versandart ge�ndert. Willst Du die Versandkosten und die Gesamtsumme neu berechnen?');
define('AJAX_CANNOT_CREATE_XMLHTTP', 'Kann keine XMLHTTP Umgebung erstellen');
define('AJAX_SUBMIT_COMMENT', 'Sende neue Anmerkungen und/oder den Status');
define('AJAX_NO_QUOTES', 'Es gibt keine Versandarten zum Anzeigen.');
define('AJAX_SELECTED_NO_SHIPPING', 'Du hast eine Versandart gew�hlt. Bisher waren keine Versandgeb�hren berechnet. M�chtest Du diese Versandgeb�hren hinzuf�gen?');
define('AJAX_RELOAD_TOTALS', 'Die neue Lieferadresse wurde gespeichert. Jetzt muss die Gesamtsumme neu berechnet werden.  Klicke OK zum neu berechnen.  Wenn Deine Internetverbindung langsam ist, so warte bitte bis alle Daten geladen wurden und klicke dann erst auf OK.');
define('AJAX_NEW_ORDER_EMAIL', 'Willst Du eine neue Bestellbest�tigung per Email senden?');
define('AJAX_INPUT_NEW_EMAIL_COMMENTS', 'Anmerkungen eingeben.  Einfach leer lassen, wenn keine Anmerkungen gemacht werden sollen.  ACHTUNG: Zeilenumbr�che sind derzeit nicht m�glich. -> "Enter" versendet die Email.');
define('AJAX_SUCCESS_EMAIL_SENT', 'Eine neue Bestellbest�tigung wurde versendet an %s');
define('AJAX_WORKING', 'Besch�ftigt, bitte warten....');
?>
