<?php
/*
$Id: admin_members.php 3 2006-05-27 04:59:07Z user $

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright 2009 osCMax

  Released under the GNU General Public License
*/

if ($HTTP_GET_VARS['gID']) {
  define('HEADING_TITLE', 'Admin Gruppen');
} elseif ($HTTP_GET_VARS['gPath']) {
  define('HEADING_TITLE', 'Definieren Sie Gruppen');
} else {
  define('HEADING_TITLE', 'Admin Mitglieder');
}

define('TEXT_COUNT_GROUPS', 'Gruppen: ');

define('TABLE_HEADING_USERNAME', 'Benutzername');
define('TABLE_HEADING_NAME', 'Name');
define('TABLE_HEADING_EMAIL', 'Email Address');
define('TABLE_HEADING_PASSWORD', 'Kennwort');
define('TABLE_HEADING_CONFIRM', 'Best�tigen Sie Kennwort');
define('TABLE_HEADING_GROUPS', 'Gruppen Ebnen');
define('TABLE_HEADING_CREATED', 'Konto Verursacht');
define('TABLE_HEADING_MODIFIED', 'Konto Verursacht');
define('TABLE_HEADING_LOGDATE', 'Letztes Erreicht');
define('TABLE_HEADING_LOGNUM', 'LogNum');
define('TABLE_HEADING_LOG_NUM', 'Maschinenbordbuch-Zahl');
define('TABLE_HEADING_ACTION', 'T�tigkeit');

define('TABLE_HEADING_GROUPS_NAME', 'Gruppen Name');
define('TABLE_HEADING_GROUPS_DEFINE', 'K�sten und Akten Vorw�hler');
define('TABLE_HEADING_GROUPS_GROUP', 'Niveau');
define('TABLE_HEADING_GROUPS_CATEGORIES', 'Kategorien Erlaubnis');


define('TEXT_INFO_HEADING_DEFAULT', 'Admin Mitglied ');
define('TEXT_INFO_HEADING_DELETE', 'L�schung-Erlaubnis ');
define('TEXT_INFO_HEADING_EDIT', 'Redigieren Sie Kategorie / ');
define('TEXT_INFO_HEADING_NEW', 'Neues Admin Mitglied ');

define('TEXT_INFO_DEFAULT_INTRO', 'Mitgliedsgruppe');
define('TEXT_INFO_DELETE_INTRO', 'Entfernen Sie <nobr><b>%s</b></nobr> von den <nobr>Admin Mitgliedern?</nobr>');
define('TEXT_INFO_DELETE_INTRO_NOT', 'Sie k�nnen nicht <nobr>%s Gruppe l�schen!</nobr>');
define('TEXT_INFO_EDIT_INTRO', 'Stellen Sie Erlaubnis waagerecht ausgerichtet hier ein: ');

define('TEXT_INFO_USERNAME', 'Benutzername: ');
define('TEXT_INFO_FULLNAME', 'Name: ');
define('TEXT_INFO_FIRSTNAME', 'Vorname: ');
define('TEXT_INFO_LASTNAME', 'Nachname: ');
define('TEXT_INFO_EMAIL', 'Email Addresse: ');
define('TEXT_INFO_PASSWORD', 'Kennwort: ');
define('TEXT_INFO_CONFIRM', 'Kennwort best�tigen: ');
define('TEXT_INFO_CREATED', 'Konto erstellt: ');
define('TEXT_INFO_MODIFIED', 'Konto ge�ndert: ');
define('TEXT_INFO_LOGDATE', 'Letzter Login: ');
define('TEXT_INFO_LOGNUM', 'Log-number: ');
define('TEXT_INFO_GROUP', 'Gruppe: ');
define('TEXT_INFO_ERROR', '<font color="red">Email Addresse ist bereits vergeben! Bitte erneut versuchen!</font>');

define('JS_ALERT_USERNAME', '- Erfordert: Benutzername \n');
define('JS_ALERT_FIRSTNAME', '- Erfordert: Vorname \n');
define('JS_ALERT_LASTNAME', '- Erfordert: Nachname \n');
define('JS_ALERT_EMAIL', '- Erfordert: Email Addresse \n');
define('JS_ALERT_EMAIL_FORMAT', '- Format der Email Addresse ist unzul�ssig! \n');
define('JS_ALERT_EMAIL_USED', '- Email Addresse ist bereits vergeben! \n');
define('JS_ALERT_LEVEL', '- Erfordert: Gruppe Mitglied \n');

define('ADMIN_EMAIL_SUBJECT', 'Neues Admin Mitglied');
define('ADMIN_EMAIL_TEXT', 'Hallo %s,' . "\n\n" . 'Sie k�nnen die Leitung Verkleidung mit dem folgenden Kennwort zug�nglich machen. Sobald Sie die Verkleidung zug�nglich machen, �ndern Sie bitte Ihr Kennwort!' . "\n\n" . 'Website : %s' . "\n" . 'Username: %s' . "\n" . 'Kennwort: %s' . "\n\n" . 'Danke!' . "\n" . '%s' . "\n\n" . 'Dieses ist eine automatisierte Nachricht, bitte antworten Sie nicht!');
define('ADMIN_EMAIL_EDIT_SUBJECT', 'Admin Mitgliedsprofil bearbeiten');
define('ADMIN_EMAIL_EDIT_TEXT', 'Hallo %s,' . "\n\n" . 'Ihre pers�nlichen Informationen sind von einem Administrator aktualisiert worden.' . "\n\n" . 'Website : %s' . "\n" . 'Username: %s' . "\n" . 'Kennwort: %s' . "\n\n" . 'Danke!' . "\n" . '%s' . "\n\n" . 'Dieses ist eine automatisierte Nachricht, bitte antworten Sie nicht!');

define('TEXT_INFO_HEADING_DEFAULT_GROUPS', 'Admin Gruppe ');
define('TEXT_INFO_HEADING_DELETE_GROUPS', 'Gruppe l�schen ');

define('TEXT_INFO_DEFAULT_GROUPS_INTRO', '<b>ANMERKUNG:</b><li><b>Bearbeiten:</b> Bearbeitung von Gruppen Namen.</li><li><b>L�schen:</b> Gruppe entfernen.</li><li><b>Definieren:</b> Definieren Sie Gruppen Zugang.</li>');
define('TEXT_INFO_DELETE_GROUPS_INTRO', 'Dieses l�scht alle Mitglieder dieser Gruppe. Sind Sie sicher, dass Sie <nobr><b>%s</b>  l�schen m�chten?</nobr>');
define('TEXT_INFO_DELETE_GROUPS_INTRO_NOT', 'Gruppe kann nicht gel�scht werden!');
define('TEXT_INFO_GROUPS_INTRO', 'Gruppen Namen eingeben.');
define('TEXT_INFO_EDIT_GROUPS_INTRO', 'Gruppen Namen eingeben.');

define('TEXT_INFO_HEADING_EDIT_GROUP', 'Admin Gruppe');
define('TEXT_INFO_HEADING_GROUPS', 'Neue Gruppe');
define('TEXT_INFO_GROUPS_NAME', ' <b>Gruppe Name:</b><br>Gruppen Namen eingeben.<br>');
define('TEXT_INFO_GROUPS_NAME_FALSE', '<font color="red"><b>Achtung:</b> Der Gruppen Name mu� mehr als 5 Buchstaben haben!</font>');
define('TEXT_INFO_GROUPS_NAME_USED', '<font color="red"><b>Achtung:</b> Der Gruppen Name existiert bereits!</font>');
define('TEXT_INFO_GROUPS_LEVEL', 'Gruppe: ');
define('TEXT_INFO_GROUPS_BOXES', '<b>Kasten-Erlaubnis:</b><br>Geben Sie Zugang zu vorgew�hlten K�sten.');
define('TEXT_INFO_GROUPS_BOXES_INCLUDE', 'Schlie�en Sie die Akten mit ein, die innen gespeichert werden: ');

define('TEXT_INFO_HEADING_DEFINE', 'Definieren Sie Gruppe');
if ($HTTP_GET_VARS['gPath'] == 1) {
  define('TEXT_INFO_DEFINE_INTRO', '<b>%s :</b><br>Sie k�nnen nicht Akte Erlaubnis f�r diese Gruppe �ndern.<br><br>');
} else {
  define('TEXT_INFO_DEFINE_INTRO', '<b>%s :</b><br>�ndern Sie Erlaubnis f�r diese Gruppe, indem Sie K�sten und Akten vorw�hlen oder unselecting. Klicken speichert, um Ihre �nderungen einzureichen.<br><br>');
}
?>