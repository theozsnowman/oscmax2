<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Bestellung #%s vom %s bearbeiten');
define('ADDING_TITLE', 'Artikel zur Bestellung #%s hinzuf�gen');

define('ENTRY_UPDATE_TO_CC', '(Aktualisiere ' . ORDER_EDITOR_CREDIT_CARD . ' , um die Kreditkartenfelder zu sehen.)');
define('TABLE_HEADING_COMMENTS', 'Anmerkung');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_NEW_STATUS', 'Neuer Status');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_DELETE', 'L�schen?');
define('TABLE_HEADING_QUANTITY', 'Menge');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Artikelnummer');
define('TABLE_HEADING_PRODUCTS', 'Produkte');
define('TABLE_HEADING_TAX', 'Steuer');
define('TABLE_HEADING_TOTAL', 'Gesamt');
define('TABLE_HEADING_BASE_PRICE', 'Grundreis');
define('TABLE_HEADING_UNIT_PRICE', 'Preis<br>(exkl. USt.)');
define('TABLE_HEADING_UNIT_PRICE_TAXED', 'Preis<br>(inkl. USt.)');
define('TABLE_HEADING_TOTAL_PRICE', 'Gesamt<br>(exkl. USt.)');
define('TABLE_HEADING_TOTAL_PRICE_TAXED', 'Gesamt<br>(inkl. USt.)');
define('TABLE_HEADING_OT_TOTALS', 'Order Gesamt:');
define('TABLE_HEADING_OT_VALUES', 'Wert:');
define('TABLE_HEADING_SHIPPING_QUOTES', 'Versandarten:');
define('TABLE_HEADING_NO_SHIPPING_QUOTES', 'Es k�nnen keine Versandarten angezeigt werden!');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Kunde benachrichtigt');
define('TABLE_HEADING_DATE_ADDED', 'Hinzugef�gt am');

define('ENTRY_CUSTOMER', 'Kunde');
define('ENTRY_NAME', 'Name:');
define('ENTRY_CITY_STATE', 'Ort:');
define('ENTRY_SHIPPING_ADDRESS', 'Lieferadresse');
define('ENTRY_BILLING_ADDRESS', 'Rechnungsadresse');
define('ENTRY_PAYMENT_METHOD', 'Zahlungsart');
define('ENTRY_CREDIT_CARD_TYPE', 'Kreditkarte:');
define('ENTRY_CREDIT_CARD_OWNER', 'Karteninhaber:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Kartennummer:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'g�ltig bis:');
define('ENTRY_SUB_TOTAL', 'Zwischensumme:');
define('ENTRY_TYPE_BELOW', 'unten angeben');

//the definition of ENTRY_TAX is important when dealing with certain tax components and scenarios
define('ENTRY_TAX', 'Umsatzsteuer');
//do not use a colon (:) in the defintion, ie 'VAT' is ok, but 'VAT:' is not

define('ENTRY_SHIPPING', 'Versandart:');
define('ENTRY_TOTAL', 'Gesamt:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_NOTIFY_CUSTOMER', 'Kunde benachrichtigen:');
define('ENTRY_NOTIFY_COMMENTS', 'Sende Anmerkung:');
define('ENTRY_CURRENCY_TYPE', 'W�hrung');
define('ENTRY_CURRENCY_VALUE', 'W�hrungswert');

define('TEXT_INFO_PAYMENT_METHOD', 'Zahlungsart:');
define('TEXT_NO_ORDER_PRODUCTS', 'Diese Bestellung enth�lt keine Produkte');
define('TEXT_ADD_NEW_PRODUCT', 'Produkt hinzuf�gen');
define('TEXT_PACKAGE_WEIGHT_COUNT', 'Verpackungsgewicht: %s  |  Artikelanzahl: %s');

define('TEXT_STEP_1', '<b>Schritt 1:</b>');
define('TEXT_STEP_2', '<b>Schritt 2:</b>');
define('TEXT_STEP_3', '<b>Schritt 3:</b>');
define('TEXT_STEP_4', '<b>Schritt 4:</b>');
define('TEXT_SELECT_CATEGORY', '- Kategorie aus der Liste ausw�hlen -');
define('TEXT_PRODUCT_SEARCH', '<b>- ODER einen Suchbegriff eingebe -</b>');
define('TEXT_ALL_CATEGORIES', 'Alle Kategorien/Alle Produkte');
define('TEXT_SELECT_PRODUCT', '- Ein Produkt ausw�hlen -');
define('TEXT_BUTTON_SELECT_OPTIONS', 'Option ausw�hlen');
define('TEXT_BUTTON_SELECT_CATEGORY', 'Diese Kategorie ausw�hlen');
define('TEXT_BUTTON_SELECT_PRODUCT', 'Diesen Artikel ausw�hlen');
define('TEXT_SKIP_NO_OPTIONS', '<em>Keine Optionen - �bersprungen...</em>');
define('TEXT_QUANTITY', 'Menge:');
define('TEXT_BUTTON_ADD_PRODUCT', 'Zur Bestellung hinzuf�gen');
define('TEXT_CLOSE_POPUP', '<u>Schlie�en</u> [x]');
define('TEXT_ADD_PRODUCT_INSTRUCTIONS', 'F�gen Sie Artikel hinzu, bis Sie fertig sind. <br> Schlie�en Sie danach dieses/n Tab/Fenster, kehren zum Hauptfenster zur�ck, und klicken auf "Aktualisieren".');
define('TEXT_PRODUCT_NOT_FOUND', '<b>Produkt nicht gefunden<b>');
define('TEXT_SHIPPING_SAME_AS_BILLING', 'Lieferadresse ist gleich Rechnungsadresse');
define('TEXT_BILLING_SAME_AS_CUSTOMER', 'Rechnungsadresse ist gleich Kundenadresse');

define('IMAGE_ADD_NEW_OT', 'Eine zus�tzliche Zwischensumme einf�gen');
define('IMAGE_REMOVE_NEW_OT', 'Zus�tzliche Zwischensumme l�schen');
define('IMAGE_NEW_ORDER_EMAIL', 'Bestellbest�tigung per E-Mail versenden');

define('TEXT_NO_ORDER_HISTORY', 'Keine Bestellhistorie verf�gbar');

define('PLEASE_SELECT', 'Bitte ausw�hlen');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Ihre Bestellung wurde bearbeitet');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestellnummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Detaillierte Rechnung:');
define('EMAIL_TEXT_DATE_ORDERED', 'Bestelldatum:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Herzlichen Dank f�r Ihre Bestellung!!' . "\n\n" . 'Der Status Ihrer Bestellung wurde ge�ndert.' . "\n\n" . 'Der neue Status ist: %s' . "\n\n");
define('EMAIL_TEXT_STATUS_UPDATE2', 'Bei Fragen antworten Sie einfach auf diese Email.' . "\n\n" . 'Herzlichen Dank und freundliche Gr��e vom Team ' . STORE_NAME . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Anmerkungen zu Ihrer Bestellung' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Fehler: Die Bestellung %s existiert nicht.');
define('ERROR_NO_ORDER_SELECTED', 'Sie haben keine Bestellung zum �ndern ausgew�hlt oder die Bestell-ID existiert nicht.');
define('SUCCESS_ORDER_UPDATED', 'Die Bestellung wurde erfolgreich aktualisiert.');
define('SUCCESS_EMAIL_SENT', 'Die Bestellung wurde erfolgreich aktualisiert und eine E-Mail wurde an den Kunden versandt.');

//the hints
define('HINT_UPDATE_TO_CC', 'Wenn die Zahlungsart auf ' . ORDER_EDITOR_CREDIT_CARD . ' gesetzt wird, erscheinen die Eingabefelder f�r die Kreditkartendaten automatisch. Bei anderen Zahlungsweisen sind diese Felder unsichtbar. Die Zahlungsart die Sie angeben m�ssen, um die Kreditkarteneingabefelder erscheinen zu lassen, wird unter Konfiguration "Order Editor" angegeben.');
define('HINT_UPDATE_CURRENCY', 'Eine �nderung der W�hrung erzeugt eine Aktualisierung der Gesamtsumme und der Versandarten.');
define('HINT_SHIPPING_ADDRESS', 'Nach �nderung der Lieferadresse (Postleitzahl, Stadt oder Land) k�nnen Sie die Gesamtsumme neu berechnen und die Versandarten aktualisieren.');
define('HINT_TOTALS', 'Sie k�nnen durch Angabe eines "negativer Wertes" einen Rabatt gew�hren. Zwischensumme, Mehrwertsteuer und Gesamtsumme sind nicht �nderbar. Beim Hinzuf�gen eines Wertes via Ajax ist es wichtig, das Titelfeld als erstes auszuf�llen, denn ansonsten wird der Eintrag nicht erkannt und wird automatisch von der Bestellung gel�scht.');
define('HINT_PRESS_UPDATE', 'Zum Speichern der �nderungen bitte auf "Aktualisieren" klicken.');
define('HINT_BASE_PRICE', 'Der Grundpreis ist der Artikelpreis ohne Ber�cksichtigung der Produktattribute (z.B., der Katalogpreis)');
define('HINT_PRICE_EXCL', 'Der Nettopreis ist der Grundpreis zuz�glich etwaiger Attributpreise');
define('HINT_PRICE_INCL', 'Der Bruttopreis ist der Nettopreis einschlie�lich der Mehrwertsteuer');
define('HINT_TOTAL_EXCL', 'Der Nettogesamtpreis ist der Nettopreis multipliziert mit der Menge');
define('HINT_TOTAL_INCL', 'Der Bruttogesamtpreis ist der Nettopreis multipliziert mit der Menge und einschlie�lich der Mehrwertsteuer');
//end hints

//new order confirmation email- this is a separate email from order status update
define('ENTRY_SEND_NEW_ORDER_CONFIRMATION', 'Neue Bestellung best�tigen:');
define('EMAIL_TEXT_DATE_MODIFIED', 'Ge�ndert am:');
define('EMAIL_TEXT_PRODUCTS', 'Produkte');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Lieferadresse');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Rechnungsadresse');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Zahlungsart');
// If you want to include extra payment information, enter text below (use <br> for line breaks):
//define('EMAIL_TEXT_PAYMENT_INFO', ''); //why would this be useful???
// If you want to include footer text, enter text below (use <br> for line breaks):
define('EMAIL_TEXT_FOOTER', '');
//end email

//add-on for downloads
define('ENTRY_DOWNLOAD_COUNT', 'Download #');
define('ENTRY_DOWNLOAD_FILENAME', 'Dateiname');
define('ENTRY_DOWNLOAD_MAXDAYS', 'G�ltigkeitstage');
define('ENTRY_DOWNLOAD_MAXCOUNT', 'Verbleibende Downloads');

//add-on for Ajax
define('AJAX_CONFIRM_PRODUCT_DELETE', 'Sind Sie sicher, dass Sie das Produkt von der Bestellung l�schen m�chten?');
define('AJAX_CONFIRM_COMMENT_DELETE', 'Anmerkung aus der Bestellhistorie l�schen?');
define('AJAX_MESSAGE_STACK_SUCCESS', ' \' + %s + \' wurde aktualisiert');
define('AJAX_CONFIRM_RELOAD_TOTALS', 'Sie haben die Versandart ge�ndert. M�chten Sie Versandkosten und die Gesamtsumme neu berechnen?');
define('AJAX_CANNOT_CREATE_XMLHTTP', 'Kann keine XMLHTTP Umgebung erstellen');
define('AJAX_SUBMIT_COMMENT', 'Neue Anmerkungen und/oder Status versenden');
define('AJAX_NO_QUOTES', 'Es k�nnen keine Versandarten angezeigt werden.');
define('AJAX_SELECTED_NO_SHIPPING', 'Sie haben eine Versandart gew�hlt. Bisher waren keine Versandgeb�hren berechnet. M�chten Sie diese Versandgeb�hren hinzuf�gen?');
define('AJAX_RELOAD_TOTALS', 'Die neue Lieferadresse wurde gespeichert. Jetzt muss die Gesamtsumme neu berechnet werden. Klicken Sie auf OK f�r eine Neuberechnung. Wenn Ihre Internetverbindung langsam ist, warten Sie bitte, bis alle Daten geladen wurden, bevor Sie auf OK klicken.');
define('AJAX_NEW_ORDER_EMAIL', 'M�chten Sie eine neue Bestellbest�tigung per E-Mail versenden?');
define('AJAX_INPUT_NEW_EMAIL_COMMENTS', 'Anmerkungen eingeben.  Einfach leer lassen, wenn keine Anmerkungen gemacht werden sollen.  ACHTUNG: Zeilenumbr�che sind derzeit nicht m�glich. -> "Enter" versendet die Email.');
define('AJAX_SUCCESS_EMAIL_SENT', 'Eine neue Bestellbest�tigung wurde versendet an %s');
define('AJAX_WORKING', 'Besch�ftigt, bitte warten....');
?>
