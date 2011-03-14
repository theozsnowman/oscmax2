<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
define('TEXT_ORDER_NUMBERS_RANGES', 'Bestellnummer(n), entweder einzelne Nummer # oder von - bis, # - #, oder #,#,#');
define('TEXT_DIR_ERROR', ' Fehler: Es ist ein Problem aufgetreten beim �ffnen des Verzeichnisses ');
define('TEXT_BPC_OPTIONS', 'Batch Print Center Optionen');
define('TEXT_BPC_NO_OPTIONS', 'F�r Ihre ausgew�hlte Option sind keine Optionen verf�gbar.');
define('HEADING_TITLE', 'Seriendruck Center');
define('TABLE_HEADING_COMMENTS', 'Kommentare');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Artikelnummer');
define('TABLE_HEADING_PRODUCTS', 'Produkte');
define('TABLE_HEADING_TAX', 'USt.');
define('TABLE_HEADING_TOTAL', 'Gesamt');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Preis exkl. USt.');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Preis inkl. USt.');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Gesamt (exkl. Ust.)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Gesamt (inkl. Ust.)');
define('ENTRY_SOLD_TO', 'Rechnungsadresse:');
define('ENTRY_SHIP_TO', 'Lieferadresse:');
define('ENTRY_PAYMENT_METHOD', 'Zahlungsart:');
define('ENTRY_PAYMENT_TYPE', 'Kreditkarte:');
define('PAYMENT_TYPE', 'Kreditkarte');
define('ENTRY_CC_OWNER', 'Inhaber:');
define('ENTRY_CC_NUMBER', 'Kreditkartenummer:');
define('ENTRY_CC_EXP', 'G�ltig bis:');
define('ENTRY_SUB_TOTAL', 'Zwischensumme:');
define('ENTRY_PHONE', 'Telefonnr.:');
define('ENTRY_EMAIL', 'E-Mail:');
define('ENTRY_TAX', 'USt.:');
define('ENTRY_SHIPPING', 'Versandkosten:');
define('ENTRY_TOTAL', 'Gesamt:');
define('TEXT_ORDER_NUMBER','Bestellnummer:');
define('TEXT_ORDER_DATE','Bestelldatum:');
define('TEXT_ORDER_FORMAT','F j, Y');
define('TEXT_CHOOSE_TEMPLATE','Bitte w�hlen Sie die gew�nschte Vorlage aus');
define('TEXT_CHOOSE_TEMPLATE','Bitte geben Sie entweder die Bestellnummern einzeln oder "von-bis" ein:<br>(z.B. 2577,2580-2585,2588)');
define('TEXT_DATES_ORDERS_EXTRACTRED','Oder die Bestelldaten:<br>(Bitte im Format JJJJ-MM-TT Format)');
define('TEXT_FROM','Von:');
define('TEXT_TO','Lieferung: ');
define('TEXT_PRINTING_LABELS_BILLING_DELIVERY','Beim Labeldruck:- Rechnungs- oder Lieferanschrift verwenden?');
define('TEXT_DELIVERY','Lieferung: ');
define('TEXT_BILLING','Rechnung: ');
define('TEXT_POSITION_START_PRINTING', 'Startposition f�r den Druck:<br>(Position 0 ist oben links auf dem Label, ansteigend von links nach rechts, dann von oben nach unten)');
define('TEXT_INCLUDE_ORDERS_STATUS', 'Nur Bestellungen mit Status:<br>(Bei None werden alle Bestellungen eingeschlossen)');
define('TEXT_SHOW_ORDER','Bestelldatum anzeigen?');
define('TEXT_SHOW_PHONE_NUMBER','Telefonnumer des Kunden anzeigen?');
define('TEXT_SHOW_EMAIL_CUSTOMER','eMail-Adresse des Kunden anzeigen?');
define('TEXT_PAYMENT_INFORMATION','Zahlungsweise anzeigen?');
define('TEXT_SHOW_CREDIT_CARD_NUMBER','Kreditkartennummer anzeigen? (nur f�r entspr. Bestellungen)');
define('TEXT_AUTOMACILLLY_CHANGE_ORDER','Automatisch den Status setzen auf:<br>(bei None wird kein Status ge�ndert)');
define('TEXT_SHOW_OREDERS_COMMENTS','Bestellungen ohne Kommentar anzeigen?<br>(Bestellungen mit Kommentaren des Kunden bei Kauf werden NICHT angezeigt!)');
define('TEXT_NOTIFY_CUSTOMER','Den Kunden per E-Mail benachrichtigen?<br>(Der Kunde wird per eMail mit den Kommentaren in der batch print language-Datei benachrichtigt.)');
define('TEXT_BANK','Bank: ');
define('TEXT_POST','Post: ');
define('TEXT_SALES','Sales: ');
define('TEXT_PACKED_BY','Gepackt von:  ______________________');
define('TEXT_VERIFIED_BY','Gepr�ft von:  ______________________');
define('TEXT_DEAR','Sehr geehrte(r) ');
define('TEXT_THX_CHRISMAS','Vielen Dank f�r Ihre Unterst�tzung -----');
define('TEXT_RETURNS_LABEL', 'R�cksende-Etikett Bestellung: ');
define('TEXT_SHIPPING_LABEL', 'Versand-Etikett Bestellung: ');
define('SHIP_FROM_COUNTRY', '');  //eg. 'United Kingdom'
define('WEBSITE', 'www.Your site.com');
define('TEXT_RETURNS', 'Wir hoffen, dass Sie es nicht brauchen werden, haben aber f�r den Fall der F�lle ein R�cksende-Label beigepackt. Bitte beachten Sie unsere Hinweise unter www.Your site.com/shipping.php');
define('TEXT_TO', 'An:');
// Change this to a general comment that you would like
define('BATCH_COMMENTS','Automatische Benachrichtung zu Ihrer Bestellung.');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Aktualisierung der Besellung');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestellnummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Detaillierte Rechnung:');
define('EMAIL_TEXT_DATE_ORDERED', 'Bestelldatum:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Ihre Bestellung hat jetzt den folgenden Status.' . "\n\n" . 'Neuer Status: %s' . "\n\n" . 'Bitte antworten sie auf diese E-Mail, wenn sie Fragen zu Ihrer Bestellung haben.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Die Kommentare zu Ihrer Bestellung lauten:' . "\n\n%s\n\n");

// RGB Colors
define('BLACK', '0,0,0');
define('GREY', '0.9,0.9,0.9');
define('DARK_GREY', '0.7,0.7,0.7');

// Error and Messages
$error['ERROR_INVALID_INPUT'] = 'Fehler: Nicht erkannte oder ung�ltige Eingabe.';
$error['ERROR_BAD_START_DATE'] =  'Fehler: Ung�ltiges Datum! Bitte geben Sie das Datum im Format JJJJ-MM-TT ein!';
$error['ERROR_BAD_END_DATE'] =  'Fehler: Ung�ltiges Datum! Bitte geben Sie das Datum im Format JJJJ-MM-TT ein!';
$error['ERROR_BAD_INVOICENUMBERS'] =  'Fehler: Ung�ltige Rechnungsnummer! Bitte geben Sie eine g�ltige Nummer ein. (z.B. 2577,2580-2585,2588)';
$error['NO_ORDERS'] =  'Fehler: Es wurden keine Bestellungen f�r den Export ausgew�hlt, bitte passen Sie ihre Optionen an.';
$error['SET_PERMISSIONS'] = 'Fehler: Das Verzeichnis ist schreibgesch�tzt!  Bitte setzen Sie die Zugriffsrechte f�r Ihr temp_pdf Verzeichnis auf CHMOD 0777';
$error['FAILED_TO_OPEN'] = 'Fehler: Die Datei kann nicht zum Schreiben ge�ffnet werden! Bitte �berpr�fen Sie die Zugriffsberechtigungen.';

define('SUCCESS_1', 'Erfolg: PDF mit ');
define('SUCCESS_2', ' Eintr�gen wurde erfolgreich erstellt. Bitte ');
define('SUCCESS_3', 'klicken Sie hier');
define('SUCCESS_4', ', umd die Datei zu �ffnen.');

// PDF FONT SIZES
define('COMPANY_HEADER_FONT_SIZE','14');
define('SUB_HEADING_FONT_SIZE','11');
define('GENERAL_FONT_SIZE', '11');
define('GENERAL_LEADING', '12');
define('PRODUCT_TOTALS_LEADING', '11');
define('PRODUCT_TOTALS_FONT_SIZE', '10');
define('PRODUCT_ATTRIBUTES_FONT_SIZE', '8');
define('GENERAL_FONT_COLOR', BLACK);

// Margins and Page Size

// This works best with A4, could work with diffferent page sizes,
// However it would require playing with the table values and font values to fit properly
//define('PAGE','A4');
//define('LEFT_MARGIN','30');
// The small indents in the Sold to: Ship to: Text blocks
//define('TEXT_BLOCK_INDENT', '5');
//define('SHIP_TO_COLUMN_START','300');
// This changes the 'Total', 'Sub-Total', 'Tax', and 'Shipping Method' text block
// position, for example if you choose to make the text a bigger font size you need to 
// tweak this value in order to prevent the text from clashing together
//define('PRODUCT_TOTAL_TITLE_COLUMN_START','400');
//define('RIGHT_MARGIN','30');

// Batch Print Misc Vars
define('BATCH_PRINT_INC', DIR_WS_MODULES . 'batch_print/');
define('BATCH_PDF_DIR', BATCH_PRINT_INC . 'temp_pdf/');
//define('LINE_LENGTH', '552');
// If you have attributes for certain products, you can have the text wrap
// or just be written completely on one line, with the text wrap disabled
// it makes the tables smaller appear much better, of course that is only my opinion
// so I made this variable if anyone would like it to wrap.
//define('PRODUCT_ATTRIBUTES_TEXT_WRAP', false);
// This sets the space size between sections
//define('SECTION_DIVIDER', '15');
// Main File
define('BATCH_PRINT_FILE', 'batch_print.php');
// TEMP PDF FILE
define('BATCH_PDF_FILE', 'batch_orders.pdf');

// Product table Settings
//define('TABLE_HEADER_FONT_SIZE', '9');
//define('TABLE_HEADER_BKGD_COLOR', DARK_GREY);
//define('PRODUCT_TABLE_HEADER_WIDTH', '552');
// This is more like cell padding, it moves the text the number
// of points specified to make the rectangle appear padded
//define('PRODUCT_TABLE_BOTTOM_MARGIN', '2');
// Tiny indent right before the product name, again more like
// the cell padding effect
//define('PRODUCT_TABLE_LEFT_MARGIN', '2');
// Height of the product listing rectangles
//define('PRODUCT_TABLE_ROW_HEIGHT', '11');

// The column sizes are where the product listing columns start on the
// PDF page, if you make the TABLE HEADER FONT SIZE any larger you will
// need to tweak these values to prevent text from clashing together
//define('PRODUCTS_COLUMN_SIZE', '172');
//define('PRODUCT_LISTING_BKGD_COLOR',GREY);
//define('MODEL_COLUMN_SIZE', '37');
//define('PRICING_COLUMN_SIZES', '67');

define('FOOTER_TEXT', 'Vielen Dank, dass Sie bei ' . STORE_NAME . ' eingekauft haben.');
?>