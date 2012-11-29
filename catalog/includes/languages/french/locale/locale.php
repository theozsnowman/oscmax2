<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on Linux try 'fr_FR'
// on FreeBSD try 'fr_FR.ISO_8859-1'
// on Windows try 'fr', or 'French'
@setlocale(LC_TIME, 'fr_FR.ISO_8859-1');

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Retourne date au format brut
// $date doit etre au format dd/mm/yyyy (francais)
// Date au format burt est de la forme YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'EUR');

// LINE ADDED: Country-State Selector
define ('DEFAULT_COUNTRY', '81');

// text for date of birth example
define('DOB_FORMAT_STRING', 'JJ.MM.AAAA');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Entrez votre date de naissance dans ce format: JJ/MM/AAAA (ex. 21/05/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ex. 21.05.1970)');

// text for addresses
define('ENTRY_SUBURB', 'Addresse 2:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Code postal:');
define('ENTRY_POST_CODE_ERROR', 'Votre code postal doit cotenir au moins ' . ENTRY_POSTCODE_MIN_LENGTH . ' caract�res.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_STATE', 'R�gion:');
define('ENTRY_STATE_ERROR', 'Votre pays doit contenir un minimum de ' . ENTRY_STATE_MIN_LENGTH . ' charact�rs.');
define('ENTRY_STATE_ERROR_SELECT', 'S\'il vous pla�t s�lectionner un comt� dans le menu d�roulant.');

// BOF: MSRP
define('TEXT_PRODUCTS_MSRP', '&nbsp;MSRP:&nbsp;');
define('TEXT_PRODUCTS_SAVINGS_RRP', '&nbsp;You&nbsp;Save&nbsp;(Off&nbsp;MSRP):&nbsp;');
// EOF: MSRP
?>
