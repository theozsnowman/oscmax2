<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('TEXT_CREATE_FIRST_ADMINISTRATOR', 'Es existiert kein Administrator in der Datenbank. Bitte vervollst�ndigen Sie die nachstehenden Angaben, um den ersten Adrministrator zu erstellen. Eine manuelle Anmeldung nach diesem Schritt ist dennoch n�tig.');

define('ERROR_INVALID_ADMINISTRATOR', 'Fehler: Ung�ltiger Anmeldeversuch des Administrators.');

define('BUTTON_LOGIN', 'Anmeldung');
define('BUTTON_CREATE_ADMINISTRATOR', 'Administrator erstellen');
define('NAVBAR_TITLE', 'Anmeldung');
define('HEADING_TITLE', 'Admin Anmeldung');
define('TEXT_STEP_BY_STEP', ''); // sollte leer sein
define('HEADING_RETURNING_ADMIN', 'Anmeldung:');
define('HEADING_PASSWORD_FORGOTTEN', 'Passwort vergessen:');
define('TEXT_RETURNING_ADMIN', 'Nur f�r Mitarbeiter!');
define('ENTRY_USERNAME', 'Benutzername:');
define('ENTRY_FIRSTNAME', 'Vorname:');
define('ENTRY_LASTNAME', 'Nachname:');

define('TEXT_PASSWORD_FORGOTTEN', 'Passwort vergessen?');

define('TEXT_LOGIN_ERROR', '<font color="#ff0000"><b>FEHLER:</b></font> Benutzername oder Passwort falsch!');
define('TEXT_FORGOTTEN_ERROR', '<font color="#ff0000"><b>FEHLER:</b></font> Vorname und Passwort stimmen nicht �berein!');
define('TEXT_FORGOTTEN_FAIL', 'Sie mehr als dreimal versucht, sich anzumelden. Bitte fragen Sie Ihren Web Administrator aus Sicherheitsgr�nden nach einem neuen Passwort.<br>&nbsp;<br>&nbsp;');
define('TEXT_FORGOTTEN_SUCCESS', 'Das neue Passwort wurde an Ihre E-Mail-Adresse versendet. Bitte pr�fen Sie Ihre E-Mails und klicken Sie auf Zur�ck, um sich anzumelden.<br>&nbsp;<br>&nbsp;');

define('ADMIN_EMAIL_SUBJECT', 'Neues Passwort');
define('ADMIN_EMAIL_TEXT', 'Hallo %s,' . "\n\n" . 'Sie k�nnen sich mit dem folgenden Passwort in den Adminbereich anmelden. Danach sollten Sie aus Sicherheitsgr�nden umgehend Ihr Passwort �ndern!' . "\n\n" . 'Website : %s' . "\n" . 'Benutzername: %s' . "\n" . 'Passwort: %s' . "\n\n" . 'Danke!' . "\n" . '%s' . "\n\n" . 'Diese Nachricht wurde automatisch versendet. Bitte antworten Sie nicht darauf!');

define('IMAGE_BUTTON_LOGIN', 'Anmelden');
?>