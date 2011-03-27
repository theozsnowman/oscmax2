<?php
/*
$Id: paypal_wpp.php 1287 2011-03-26 09:12:50Z cottonbarn $

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
// Copyright 2008 Brian Burton

  include(DIR_FS_CATALOG_LANGUAGES . $language . '/paypal_wpp.php');
  define('TABLE_HEADING_TRANSACTION_INFO', 'Transaktionsdetails');
  define('WPP_ERROR_NO_TRANS_ID', 'Es wurde keine g�ltige Transaktions-ID gefunden.');
  define('WPP_ERROR_BAD_CURRENCY', 'Es wurde keine g�ltige W�hrung angegeben.');
  define('WPP_ERROR_SELECT_REFUND_TYPE', 'W�hlen Sie die Refundierungsart: Vollst�ndig oder Teilweise.');
  define('WPP_ERROR_FULL_MISSING_AMOUNT', 'F�r eine vollst�ndige Refundierung geben Sie den Gesamtbetrag der Bestellung an.');
  define('WPP_ERROR_INVALID_REFUND_AMOUNT', 'Geben Sie einen g�ltigen Betrag f�r die Refundierung an.');
  define('WPP_ERROR_REFUND_FAILED_BECAUSE', 'Die Refundierung scheiterte aus folgenden Gr�nden:');
  define('WPP_SUCCESS_REFUND', 'Die Refundierung wurde erfolgreich ausgef�hrt!');
  define('WPP_ERROR_INVALID_CHARGE_AMOUNT', 'Geben Sie einen g�ltigen Zahlungsbetrag an.');
  define('WPP_ERROR_INCOMPLETE_CARDHOLDER_NAME', 'Geben Sie den vollen Namen des Kartenbesitzers an, so wie er auf der Karte angef�hrt ist.');
  define('WPP_ERROR_CHARGE_FAILED_BECAUSE', 'Die Abbuchung konnte aus den folgenden Gr�nden nicht durchgef�hrt werden:');
  define('WPP_SUCCESS_CHARGE', 'Die Transaktion wurde erfolgreich durchgef�hrt!');
  define('WPP_SUCCESS_CAPTURE', 'Die Transaktion wurde erfolgreich �bermittelt!');
  define('WPP_CHARGE_NAME', 'Kunden-Bearbeitungsgeb�hr');
  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Das angegebene Ablaufdatum der Kreditkarte ist ung�ltig. Bitte korrigieren Sie das Datum und versuchen Sie es erneut.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Die Kreditkartennummer ist ung�ltig. Bitte korrigieren Sie die Nummer und versuchen Sie es erneut.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Die ersten vier Ziffern der angegebenen Nummer sind: %s. Wenn das korrekt ist, akzeptieren wir diesen Kreditkartentyp nicht. Anderenfalls korrigieren Sie Ihre Angaben und versuchen Sie es erneut.');
  define('WPP_TRANSACTION', 'Transaktion:');
  define('WPP_REFUND_TYPE', 'Refundierungsart:');
  define('WPP_AMOUNT_OPTIONAL', '(Nur bei teilweiser Refundierung notwendig)');
  define('WPP_REFUND_ISSUED', 'Refundierung in H�he von');
  define('WPP_FULL_REFUND_ISSUED', 'Refundierung veranlasst');
  define('WPP_CHARGE_ISSUED', 'Geb�hrenbelastung in H�he von');
  define('WPP_CAPTURE_ISSUED', 'Erfassung in H�he von');
  define('WPP_AMOUNT_TO_CHARGE', 'F�lliger Betrag:');
  define('WPP_FIRST_NAME', 'Vorname auf der Karte:');
  define('WPP_LAST_NAME', 'Nachname auf der Karte:');
  define('WPP_CC_TYPE', 'Kartentyp:');
  define('WPP_CC_NUMBER', 'Kartennummer:');
  define('WPP_CC_EXPIRATION_DATE', 'Ablaufdatum:');
  define('WPP_CC_CVV2', 'CVV2 Nummer:');
  define('WPP_COMMENTS', 'Anmerkungen: (Optional)');
  define('WPP_CHARGE_SUBMIT', 'Karte belasten');
  define('WPP_REFUND_PARTIAL', 'Teilweise');
  define('WPP_REFUND_FULL', 'Vollst�ndig');
  define('WPP_REFUND_AMOUNT', 'Betrag refundieren:');
  define('WPP_CAPTURE_AMOUNT', 'Betrag erfassen:');
  define('WPP_CHARGE_AMOUNT', 'F�lliger Betrag:');
  define('WPP_SUBMIT_REFUND', 'Refundieren');
  define('WPP_SUBMIT_CAPTURE', 'Erfassen');
  define('WPP_REFUND_TITLE', 'PayPal Pro - Refundierung erfassen');
  define('WPP_CHARGE_TITLE', 'PayPal Pro - Geb�hr hinzuf�gen');
  define('WPP_CANCEL', 'Abbrechen');
  define('WPP_ORDER_STATUS', 'Bestellstatus:');
  define('WPP_CAPTURE_TITLE', 'PayPal Pro - Betrag erfassen');
  define('WPP_ERROR_NO_SSL', 'Sie m�ssen auf Ihren Administrations-Bereich �ber HTTPS zugreifen, bevor Sie die erweiterten PayPal Pro Funktionen nutzen k�nnen.');
  define('WPP_ERROR_COUNTRY_NOT_FOUND', 'Das Land des Benutzers k�nnte nicht ermittelt werden. Der Vorgang ist gescheitert.');
?>