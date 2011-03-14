<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
/*
  One Page Checkout, Version: 1.08

  I.T. Web Experts
  http://www.itwebexperts.com

  Copyright (c) 2009 I.T. Web Experts
*/

define('NAVBAR_TITLE', 'Einkauf abschlie�en');
define('NAVBAR_TITLE_1', 'Einkauf abschlie�en');

define('HEADING_TITLE', 'Einkauf abschlie�en');

define('TABLE_HEADING_SHIPPING_ADDRESS', 'Lieferadresse');
define('TABLE_HEADING_BILLING_ADDRESS', 'Rechnungsadresse');

define('TABLE_HEADING_PRODUCTS_MODEL', 'Artikelnummer');
define('TABLE_HEADING_PRODUCTS_NAME', 'Produktbezeichnung');
define('TABLE_HEADING_PRODUCTS_QTY', 'Anzahl');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Einzelpreis');
define('TABLE_HEADING_PRODUCTS_FINAL_PRICE', 'Gesamtpreis');
define('TABLE_HEADING_PRODUCTS_REMOVE_ITEM', 'Produkt entfernen');

define('TABLE_HEADING_PRODUCTS', 'Warenkorb');
define('TABLE_HEADING_TAX', 'USt.');
define('TABLE_HEADING_TOTAL', 'Gesamt');

define('ENTRY_TELEPHONE', 'Telefon: ');

define('TEXT_CHOOSE_SHIPPING_DESTINATION', 'Bitte w�hlen Sie eine Lieferanschrift aus Ihrem Adressbuch aus.');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Bitte w�hlen Sie eine Rechnungsanschrift aus Ihrem Adressbuch aus.');

define('TITLE_SHIPPING_ADDRESS', 'Lieferadresse:');
define('TITLE_BILLING_ADDRESS', 'Rechnungsadresse:');

define('TABLE_HEADING_SHIPPING_METHOD', 'Versandart');
define('TABLE_HEADING_PAYMENT_METHOD', 'Zahlungsart');

define('TEXT_CHOOSE_SHIPPING_METHOD', 'Bitte w�hlen Sie die gew�nschte Versandart f�r diese Bestellung aus.');
define('TEXT_SELECT_PAYMENT_METHOD', 'Bitte w�hlen Sie die gew�nschte Zahlungsart f�r diese Bestellung aus.');

define('TITLE_PLEASE_SELECT', 'Bitte w�hlen Sie');

define('TEXT_ENTER_SHIPPING_INFORMATION', 'Derzeit steht nur die folgende Versandart zur Verf�gung.');
define('TEXT_ENTER_PAYMENT_INFORMATION', 'Derzeit steht nur die folgende Zahlungsart zur Verf�gung.');

define('TABLE_HEADING_COMMENTS', 'Sie k�nnen Ihrer Bestellung eine Anmerkung hinzuf�gen');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Setzen Sie den Vorgang fort,');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', 'um Ihre Bestellung abzuschlie�en.');

define('TEXT_EDIT', 'Bearbeiten');

define('TEXT_SELECTED_SHIPPING_DESTINATION', 'Dies ist die derzeit ausgew�hlte Lieferadresse.');
define('TABLE_HEADING_NEW_ADDRESS', 'Neue Adresse');
define('TABLE_HEADING_EDIT_ADDRESS', 'Adresse bearbeiten');
define('TEXT_CREATE_NEW_SHIPPING_ADDRESS', 'Bitte benutzen Sie das nachstehende Formular, um eine neue Lieferadresse zu erstellen.');
define('TABLE_HEADING_ADDRESS_BOOK_ENTRIES', 'Adressbucheintr�ge');

define('EMAIL_SUBJECT', 'Willkommen bei ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Sehr geehrter Herr %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Sehr geehrte Frau %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Hallo %s' . "\n\n");
define('EMAIL_WELCOME', 'Willkommen im Onlineshop von <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Sie k�nnen nun die <b>erweiterten Funktionen</b> nutzen, die unser Shop f�r Sie bereit h�lt, wie etwa:' . "\n\n" . '<li><b>Pers�nlicher Warenkorb</b> - Der aktuelle Inhalt Ihres Warenkorbes wird beim Abmelden gespeichert und steht Ihnen bei der n�chsten Anmeldung wieder zur Verf�gung.' . "\n" . '<li><b>Adressbuch</b> - Speichern Sie unterschiedliche Lieferanschriften f�r k�nftige Bestellungen in Ihrem pers�nlichen Adressbuch ab.' . "\n" . '<li><b>Fr�here Bestellungen</b> - Sie erhalten eine �bersicht aller von Ihnen get�tigten Bestellungen.' . "\n" . '<li><b>Produktbewertungen</b> - Verfassen Sie einen Erfahrungsbericht zu unseren Produkten und ver�ffentlichen Sie ihn online.' . "\n\n");
define('EMAIL_CONTACT', 'Bei Fragen zu unserem Onlineshop wenden Sie sich bitte an: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Hinweis:</b> Diese email-Adresse wird von einem Kundenkonto in unserem Onlineshop verwendet. Falls Sie sich nicht als Kunde in unserem Onlineshop angemeldtet haben, senden Sie bitte eine email an ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");

// Start - CREDIT CLASS Gift Voucher Contribution
define('EMAIL_GV_INCENTIVE_HEADER', "\n\n" .'Als Wilkommensgeschenk f&ur Neukunden haben wir Ihnen einen Gutschein im Wert von %s �bersandt');
define('EMAIL_GV_REDEEM', 'Der Gutscheincode lautet %s und kann entweder bei Ihrem n�chsten Einkauf eingel�st werden,');
define('EMAIL_GV_LINK', 'oder wenn Sie diesem Link folgen ');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Herzlichen Gl�ckwunsch! Um Ihren ersten Einkauf in unserem Onlineshop noch lohnender f�r Sie zu machen, �bersenden wir Ihnen einen Gutschein.' . "\n" . ' Nachstehend finden Sie die Details Ihres pers�nlichen Gutscheins' . "\n");

define('EMAIL_COUPON_REDEEM', 'Um den Gutschein einzul�sen, geben Sie den angegebenen Code %s beim Abschlie�en Ihrer Bestellung in das entsprechende Feld ein');
// End - CREDIT CLASS Gift Voucher Contribution

define('TEXT_AGREE_TO_TERMS', 'Ich stimme den Allgemeinen Gesch�ftsbedingungen zu');

define('WINDOW_BUTTON_CANCEL', 'Abbrechen');
define('WINDOW_BUTTON_CONTINUE', '�bernehmen');
define('WINDOW_BUTTON_NEW_ADDRESS', 'Neue Adresse');
define('WINDOW_BUTTON_EDIT_ADDRESS', 'Adresse bearbeiten');

define('TEXT_PLEASE_SELECT', 'Bitte w�hlen Sie');
define('TEXT_PASSWORD_FORGOTTEN', 'Password vergessen? Hier klicken.');
define('IMAGE_UPDATE_CART', 'Warenkorb aktualisieren');
define('IMAGE_LOGIN', 'Anmelden');
define('TEXT_PAYMENT_METHOD_UPDATE_ERROR', 'Bitte versuchen Sie es noch einmal. Falls das Problem weiterhin besteht, w�hlen Sie bitte eine andere Zahlungsart.');
define('TEXT_HAVE_COUPON_CCGV', 'M�chten Sie einen Gutschein einl�sen?');
define('TEXT_HAVE_COUPON_KGT', 'M�chten Sie einen Gutschein einl�sen?');
define('TEXT_EXISTING_CUSTOMER_LOGIN', 'Haben Sie schon ein Kundenkonto erstellt?');
define('TEXT_DIFFERENT_SHIPPING', 'Abweichend von der Rechnungsadresse?');
define('TEXT_SHIPPING_NO_ADDRESS', 'Bitte geben Sie <b>zumindest</b> Ihre Rechnungsanschrift an, um die Frachtkosten berechnen zu lassen.');
define('TEXT_CHECKOUT_UPDATE_VIEW_ORDER', 'aktualisieren/anzeigen der Bestellung.');
define('CHECKOUT_BAR_CONFIRMATION', 'Bestellung abschlie�en');
// Points/Rewards Module V2.1rc2a BOF
define('TABLE_HEADING_REDEEM_SYSTEM', 'Treuepunkte einl�sen ');
define('TABLE_HEADING_REFERRAL', 'Treuepunkte �bertragen');
define('TEXT_REDEEM_SYSTEM_START', 'Sie haben ein Guthaben von %s . M�chten Sie es f�r diese Bestellung verwenden?<br />Die voraussichtliche Gesamtsumme Ihrer Bestellung betr�gt: %s .');
define('TEXT_REDEEM_SYSTEM_SPENDING', 'Setzen Sie hier einen Haken, wenn Sie die h�chstm�gliche Punktezahl einl�sen m�chten, die bei diesem Einkauf m�glich ist. (%s Punktes %s)&nbsp;&nbsp;->');
define('TEXT_REDEEM_SYSTEM_NOTE', '<span class="pointWarning">Die Gesamtsumme ist h�her, als die h�chstzul�ssige Treuepunktanzahl, daher m�ssen Sie auch eine Zahlungsart ausw�hlen</span>');
define('TEXT_REFERRAL_REFERRED', 'Wenn Sie von einem Bekannten an un weiterempfohlen wurden, geben Sie bitte dessen email-Adresse an. ');
// Points/Rewards Module V2.1rc2a EOF
define('TERMS_PART_1', 'Bitte best�tigen Sie, dass Sie unsere AGB gelesen und akzeptiert haben:');
define('TERMS_PART_2', '<br/><b><u>Allgemeine Gesch�ftsbedingungen</u></b>');

define('TEXT_NO_JAVASCRIPT', 'Sie haben JavaScript deaktiviert.');
define('TEXT_ENABLE_JAVSCRIPT_INSTRUCTIONS', '<p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold">Bitte befolgen Sie die Anweisungen f�r Ihren Webbrowser, um Ihre Bestellung abschlie�en zu k�nnen:<br /><br />Internet Explorer</p>
 <ol style="font-family: Arial, Helvetica, sans-serif; font-size:12px;">
  <li>Klicken Sie im Hauptmen� auf&nbsp;<strong>Extras</strong>, anschlie�end auf&nbsp;<strong>Internetoptionen</strong>&nbsp;und dann auf den Karteireiter&nbsp;<strong>Sicherheit</strong>.</li>
  <li>Klicken Sie auf das&nbsp;<strong>Internet</strong>&nbsp;Symbol.</li>
  <li>Wenn Sie die Grundeinstellungen aktivieren m�chten, klicken Sie auf&nbsp;<strong>Standardstufe</strong>. Folgen Sie nun den Anweisungen bei Punkt 4.<blockquote>Wenn Sie Ihre Interneteinstellungen behalten und nur JavaScript aktivieren m�chten, befolgen Sie diese Schritte:<br />
	a. Klicken Sie auf&nbsp;<strong>Stufe anpassen...</strong>.<br />
	b. Im Fenster&nbsp;<strong>Sicherheitseinstellungen &ndash; Internetzone</strong>&nbsp;gehen Sie zu&nbsp;<strong>Skripting</strong>&nbsp;und klicken unter&nbsp;<strong>Active Scripting</strong>&nbsp;auf <strong>Aktivieren</strong>.</blockquote></li>
  <li>Klicken Sie auf&nbsp;<strong>OK</strong>, um die Einstellungsfenster zu verlassen. Laden Sie im Browser die Seite neu, indem Sie entweder die <strong>F5-Taste</strong> dr�cken oder den <strong>Refresh-Button</strong> anklicken.</li>
 </ol>
 <p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold"><br />Firefox</p>
 <ol style="font-family: Arial, Helvetica, sans-serif; font-size:12px;">
  <li>Klicken Sie im Men� <strong>Extras</strong>&nbsp;auf&nbsp;<strong>Einstellungen...</strong>.</li>
  <li>Klicken Sie auf das Symbol&nbsp;<strong>Inhalt</strong>&nbsp; und haken Sie&nbsp;<strong>JavaScript aktiviert</strong>&nbsp;an.</li>
  <li>Klicken Sie auf&nbsp;<strong>OK</strong>, um die Einstellungsfenster zu verlassen. Laden Sie die Seite neu, indem Sie entweder die <strong>F5-Taste</strong> dr�cken oder den <strong>Refresh-Button</strong> anklicken.</li>
 </ol>
 <p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold"><br />Safari</p>
 <ol style="font-family: Arial, Helvetica, sans-serif; font-size:12px;">
  <li>Klicken Sie im Men� auf <strong>Ein Men� f�r allgemeine Safarieinstellungen anzeigen.</strong>-Men�.</li>
  <li>W�hlen Sie die <strong>Einstellungen ...</strong>.</li>
  <li>Klicken Sie auf das Symbol&nbsp;<strong>Inhalt</strong>.</li>
  <li>Haken Sie&nbsp;<strong>JavaScript aktivieren</strong>&nbsp;an.</li>
 </ol>
 <p>&nbsp;</p>');
?>