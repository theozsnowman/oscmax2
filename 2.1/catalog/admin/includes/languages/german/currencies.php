<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'W�hrungen');

define('TABLE_HEADING_CURRENCY_NAME', 'W�hrung');
define('TABLE_HEADING_CURRENCY_CODES', 'K�rzel');
define('TABLE_HEADING_CURRENCY_VALUE', 'Wert');
define('TABLE_HEADING_ACTION', 'Aktion');

define('TEXT_INFO_EDIT_INTRO', 'F�hren Sie die gew�nschten �nderungen durch.');
define('TEXT_INFO_CURRENCY_TITLE', 'Name:');
define('TEXT_INFO_CURRENCY_CODE', 'K�rzel:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbol Links:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbol Rechts:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Dezimalkomma:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Tausenderpunkt:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Dezimalstellen:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Zuletzt ge�ndert am:');
define('TEXT_INFO_CURRENCY_VALUE', 'Wert:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Beispiel:');
define('TEXT_INFO_INSERT_INTRO', 'Bitte geben Sie die neue W�hrung mit allen relevanten Daten ein');
define('TEXT_INFO_DELETE_INTRO', 'Sind Sie sicher, dass Sie diese W�hrung l�schen m�chten?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'neue W�hrung');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'W�hrung bearbeiten');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'W�hrung l�schen');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (manuelles Aktualisieren der Wechselkurse erforderlich.)');
define('TEXT_INFO_CURRENCY_UPDATED', 'Der Wechselkurs f�r %s (%s) wurde erfolgreich ge�ndert via %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Fehler: Die Standardw�hrung darf nicht gel�scht werden. Bitte definieren Sie eine neue Standardw�hrung und wiederholen Sie den Vorgang.');
define('ERROR_CURRENCY_INVALID', 'Fehler: Der Wechselkurs f�r %s (%s) wurde nicht via %s ge�ndert. Ist das K�rzel g�ltig?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Warnung: Der prim�re Wechselkursserver (%s) reagiert nicht f�r %s (%s) - Kontaktiere den sekund�ren Wechselkursserver.');
?>