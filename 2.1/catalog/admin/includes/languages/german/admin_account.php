<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Verwaltungsbenutzerkonto');

define('TABLE_HEADING_ACCOUNT', 'Mein Konto');

define('TEXT_INFO_FULLNAME', '<b>Name: </b>');
define('TEXT_INFO_USERNAME', '<b>Benutzername: </b>');
define('TEXT_INFO_FIRSTNAME', '<b>Vorname: </b>');
define('TEXT_INFO_LASTNAME', '<b>Nachname: </b>');
define('TEXT_INFO_EMAIL', '<b>E-Mail-Adresse: </b>');
define('TEXT_INFO_PASSWORD', '<b>Passwort: </b>');
define('TEXT_INFO_PASSWORD_HIDDEN', '-Versteckt-');
define('TEXT_INFO_PASSWORD_CONFIRM', '<b>Passwort best�tigen: </b>');
define('TEXT_INFO_CREATED', '<b>Konto erstellt am: </b>');
define('TEXT_INFO_LOGDATE', '<b>Zuletzt angemeldet am: </b>');
define('TEXT_INFO_LOGNUM', '<b>Log Nummer: </b>');
define('TEXT_INFO_GROUP', '<b>Verwaltungsgruppe: </b>');
define('TEXT_INFO_ERROR', '<font color="red"> Diese E-Mail-Adresse wird bereits verwendet! Bitte versuchen Sie es erneut.</font>');
define('TEXT_INFO_MODIFIED', 'Bearbeitet: ');

define('TEXT_INFO_HEADING_DEFAULT', 'Konto bearbeiten ');
define('TEXT_INFO_HEADING_CONFIRM_PASSWORD', 'Passwortwiederholung ');
define('TEXT_INFO_INTRO_CONFIRM_PASSWORD', 'Passwort:');
define('TEXT_INFO_INTRO_CONFIRM_PASSWORD_ERROR', '<font color="red"><b>ST�RUNG:</b> falsches Kennwort!</font>');
define('TEXT_INFO_INTRO_DEFAULT', 'Klicken Sie die Bearbeitentaste unten, um Ihre Kontoinformationen zu �ndern.');
define('TEXT_INFO_INTRO_DEFAULT_FIRST_TIME', '<br><b>Warnung:</b><br>Hallo <b>%s</b>, Dies ist Ihr erster Besuch, wir empfehlen dringend eine �nderung des Passworts!');
define('TEXT_INFO_INTRO_DEFAULT_FIRST', '<br><b>WARNUNG:</b><br>Hallo <b>%s</b>, Wir empfehlen Ihnen die �nderung Ihrer E-Mail-Adresse <font color="red">admin@localhost</font> und Ihres Kennworts!');
define('TEXT_INFO_INTRO_EDIT_PROCESS', 'Alle Felder m�ssen ausgef�llt sein. Auf Speichern klicken.');

define('JS_ALERT_USERNAME',         '- Der Benutzername fehlt \n');
define('JS_ALERT_FIRSTNAME',        '- Der Vorname fehlt \n');
define('JS_ALERT_LASTNAME',         '- Der Nachname fehlt \n');
define('JS_ALERT_EMAIL',            '- Die E-Mail-Adresse fehlt \n');
define('JS_ALERT_PASSWORD',         '- Das Passwort fehlt \n');
define('JS_ALERT_USERNAME_LENGTH',  '- Mindestl�nge des Benutzernames ');
define('JS_ALERT_FIRSTNAME_LENGTH', '- Mindestl�nge des Vornames ');
define('JS_ALERT_LASTNAME_LENGTH',  '- Mindestl�nge des Nachnamens ');
define('JS_ALERT_PASSWORD_LENGTH',  '- Mindestl�nge des Passwortes ');
define('JS_ALERT_EMAIL_FORMAT',     '- Das Format der E-Mail-Adresse ist ung�ltig! \n');
define('JS_ALERT_EMAIL_USED',       '- Die E-Mail-Adresse wird bereits verwendet! \n');
define('JS_ALERT_PASSWORD_CONFIRM', '- Die Passw�rter stimmen nicht �berein \n');

define('ADMIN_EMAIL_SUBJECT', 'Ihre pers�nlichen Angaben wurden ge�ndert');
define('ADMIN_EMAIL_TEXT', 'Hallo %s,' . "\n\n" . 'An Ihrem Benutzerkonto wurden �nderungen vorgenommen. M�glicherweise wurde auch Ihr Passwort ge�ndert. Falls dies ohne Ihr Wissen oder Ihre Zustimmung geschehen ist, informieren Sie bitte umgehend den Administrator!' . "\n\n" . 'Website : %s' . "\n" . 'Benutzername: %s' . "\n" . 'Passwort: %s' . "\n\n" . 'Danke!' . "\n" . '%s' . "\n\n" . 'Dies ist eine automatische Nachricht, bitte antworten Sie nicht!');
?>