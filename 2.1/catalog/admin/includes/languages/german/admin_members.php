<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

if ($_GET['gID']) {
  define('HEADING_TITLE', 'Verwaltungsgruppen');
} elseif ($_GET['gPath']) {
  define('HEADING_TITLE', 'Gruppen anlegen');
} else {
  define('HEADING_TITLE', 'Verwaltungsbenutzer');
}

define('TEXT_COUNT_GROUPS', 'Gruppen: ');

define('TABLE_HEADING_USERNAME', 'Benutzername');
define('TABLE_HEADING_NAME', 'Name');
define('TABLE_HEADING_EMAIL', 'E-Mail-Adresse');
define('TABLE_HEADING_PASSWORD', 'Passwort');
define('TABLE_HEADING_CONFIRM', 'Passwort wiederholen');
define('TABLE_HEADING_GROUPS', 'Berechtigungsgruppe');
define('TABLE_HEADING_CREATED', 'erstellt am');
define('TABLE_HEADING_MODIFIED', 'ge�ndert am');
define('TABLE_HEADING_LOGDATE', 'letzte Anmeldung');
define('TABLE_HEADING_LOGNUM', 'LogNum');
define('TABLE_HEADING_LOG_NUM', 'Log Nummer');
define('TABLE_HEADING_ACTION', 'Aktion');

define('TABLE_HEADING_GROUPS_NAME', 'Gruppenname');
define('TABLE_HEADING_GROUPS_DEFINE', 'Boxen- und Dateiauswahl');
define('TABLE_HEADING_GROUPS_GROUP', 'Ebene');
define('TABLE_HEADING_GROUPS_CATEGORIES', 'Kategorieberechtigungen');


define('TEXT_INFO_HEADING_DEFAULT', 'Verwaltungsbenutzer ');
define('TEXT_INFO_HEADING_DELETE', 'Berechtigung l�schen ');
define('TEXT_INFO_HEADING_EDIT', 'Kategorie bearbeiten / ');
define('TEXT_INFO_HEADING_NEW', 'Neuer Verwaltungsbenutzer ');

define('TEXT_INFO_DEFAULT_INTRO', 'Benutzergruppe');
define('TEXT_INFO_DELETE_INTRO', 'Benutzer <b>%s</b> aus der Verwaltungsbenutzern l�schen?');
define('TEXT_INFO_DELETE_INTRO_NOT', 'Sie k�nnen die Gruppe %s nicht l�schen!');
define('TEXT_INFO_EDIT_INTRO', 'F�hren Sie die gew�nschten �nderungen durch.');

define('TEXT_INFO_USERNAME', 'Benutzername: ');
define('TEXT_INFO_FULLNAME', 'Name: ');
define('TEXT_INFO_FIRSTNAME', 'Vorname: ');
define('TEXT_INFO_LASTNAME', 'Nachname: ');
define('TEXT_INFO_EMAIL', 'E-Mail-Adresse: ');
define('TEXT_INFO_PASSWORD', 'Passwort: ');
define('TEXT_INFO_CONFIRM', 'Passwort best�tigen: ');
define('TEXT_INFO_CREATED', 'Konto erstellt am: ');
define('TEXT_INFO_MODIFIED', 'Zuletzt ge�ndert am: ');
define('TEXT_INFO_LOGDATE', 'Zuletzt angemeldet am: ');
define('TEXT_INFO_LOGNUM', 'Log Nummer: ');
define('TEXT_INFO_GROUP', 'Berechtigungsgruppe: ');
define('TEXT_INFO_ERROR', '<font color="red">Diese E-Mail Adresse wird bereits verwendet! Bitte versuchen Sie es erneut!</font>');

define('JS_ALERT_USERNAME', '- Der Benutzername fehlt! \n');
define('JS_ALERT_FIRSTNAME', '- Der Vorname fehlt! \n');
define('JS_ALERT_LASTNAME', '- Der Nachname fehlt! \n');
define('JS_ALERT_EMAIL', '- Die E-Mail-Adresse fehlt! \n');
define('JS_ALERT_EMAIL_FORMAT', '- Das Format der E-Mail-Adresse ist ung�ltig! \n');
define('JS_ALERT_EMAIL_USED', '- Die E-Mail-Adresse wird bereits verwendet! \n');
define('JS_ALERT_LEVEL', '- Die Berechtigungsgruppe fehlt! \n');

define('ADMIN_EMAIL_SUBJECT', 'Neuer Verwaltungsbenutzer');
define('ADMIN_EMAIL_TEXT', 'Hallo %s,' . "\n\n" . 'Sie k�nnen auf die Verwaltungskonsole mit dem nachstehenden Passwort zugreifen. Sobald Sie sich angemeldet haben, �ndern Sie bitte Ihr Passwort!' . "\n\n" . 'Website : %s' . "\n" . 'Benutzername: %s' . "\n" . 'Passwort: %s' . "\n\n" . 'Danke!' . "\n" . '%s' . "\n\n" . 'Diese Nachricht wurde automatisch an Sie versendet, bitte antworten Sie nicht!');
define('ADMIN_EMAIL_EDIT_SUBJECT', 'Verwaltungsmitgliedsprofil bearbeiten');
define('ADMIN_EMAIL_EDIT_TEXT', 'Hallo %s,' . "\n\n" . 'Ihre pers�nlichen Informationen sind von einem Administrator aktualisiert worden.' . "\n\n" . 'Website : %s' . "\n" . 'Benutzername: %s' . "\n" . 'Passwort: %s' . "\n\n" . 'Danke!' . "\n" . '%s' . "\n\n" . 'Diese Nachricht wurde automatisch an Sie versendet, bitte antworten Sie nicht!');

define('TEXT_INFO_HEADING_DEFAULT_GROUPS', 'Verwaltungsgruppe ');
define('TEXT_INFO_HEADING_DELETE_GROUPS', 'Gruppe l�schen ');

define('TEXT_INFO_DEFAULT_GROUPS_INTRO', '<b>ANMERKUNG:</b><ul><li><b>�ndern:</b> �ndern des Gruppennamens.</li><li><b>L�schen:</b> Gruppe entfernen.</li><li><b>Definieren:</b> Definieren Sie die Gruppenberechtigung.</li></ul>');
define('TEXT_INFO_DELETE_GROUPS_INTRO', 'Es werden auch alle Benutzer dieser Gruppe gel�scht werden. Sind Sie sicher, dass Sie die Gruppe <b>%s</b> l�schen m�chten?');
define('TEXT_INFO_DELETE_GROUPS_INTRO_NOT', 'Diese Gruppe kann nicht gel�scht werden!');
define('TEXT_INFO_GROUPS_INTRO', 'Geben Sie einen eindeutigen Gruppennamen an. Klicken Sie zum Speichern auf Weiter.');
define('TEXT_INFO_EDIT_GROUPS_INTRO', 'Geben Sie einen eindeutigen Gruppennamen an. Klicken Sie zum Speichern auf Weiter.');

define('TEXT_INFO_HEADING_EDIT_GROUP', 'Verwaltungsgruppe');
define('TEXT_INFO_HEADING_GROUPS', 'Neue Gruppe');
define('TEXT_INFO_GROUPS_NAME', ' <b>Gruppenname:</b><br>Geben Sie einen eindeutigen Gruppennamen an. Klicken Sie zum Speichern auf Weiter.<br>');
define('TEXT_INFO_GROUPS_NAME_FALSE', '<font color="red"><b>FEHLER:</b> Der Gruppenname mu� aus mindestens 6 Zeichen bestehen!</font>');
define('TEXT_INFO_GROUPS_NAME_USED', '<font color="red"><b>Achtung:</b> Der Gruppenname wird bereits verwendet!</font>');
define('TEXT_INFO_GROUPS_LEVEL', 'Berechtigungsgruppe: ');
define('TEXT_INFO_GROUPS_BOXES', '<b>Box-Berechtigung:</b><br>Gew�hren Sie Zugang zu den ausgew�hlten Boxen.');
define('TEXT_INFO_GROUPS_BOXES_INCLUDE', 'Dateien einschlie�en, die hier gespeichert sind: ');

define('TEXT_INFO_HEADING_DEFINE', 'Gruppe definieren');
if ($_GET['gPath'] == 1) {
  define('TEXT_INFO_DEFINE_INTRO', '<b>%s :</b><br>Sie k�nnen die Dateiberechtigung f�r diese Gruppe nicht �ndern.<br><br>');
} else {
  define('TEXT_INFO_DEFINE_INTRO', '<b>%s :</b><br>�ndern Sie Dateiberechtigungen f�r diese Gruppe, indem Sie Boxen und Dateien an- oder abw�hlen. Klicken Sie auf <b>Speichern</b>, um Ihre �nderungen zu speichern.<br><br>');
}
?>