<?php
/*
$Id: core.php 1267 2011-03-20 14:07:41Z cottonbarn $

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('TEXT_OSCMAX_WEBSITE', 'osCmax Website');
define('TEXT_FORUM', 'Support');
define('TEXT_DOCUMENTATION', 'Dokumentation');
define('TEXT_WIKI', 'Wiki');
define('TEXT_FOOTER_DISCLAIMER', 'Die Verwendung von osCmax erfolgt ohne Gew�hr und unterliegt der <a href="http://www.fsf.org/licenses/gpl.txt" target="_blank">GNU General Public License</a>.');

define('TAB_START', 'Start');
define('TAB_DATABASE_SERVER', 'Datenbankserver');
define('TAB_WEB_SERVER', 'Webserver');
define('TAB_STORE_SETTINGS', 'Shopeinstellungen');
define('TAB_FINISHED', 'Fertig');

define('TEXT_PHP_VERSION', 'PHP Version');
define('TEXT_PHP_SETTINGS', 'PHP Einstellungen');
define('TEXT_PHP_EXTENSIONS', 'PHP Erweiterungen');
define('TEXT_ON', 'On');
define('TEXT_OFF', 'Off');

define('IMAGE_CONTINUE', 'Fortsetzen');
define('IMAGE_CANCEL', 'Abbrechen');
define('IMGAE_RETRY', 'Wiederholen');
define('IMAGE_ADMIN', 'Verwaltungswerkzeug');
define('IMAGE_CATALOG', 'Catalog');

// Start Page
define('TEXT_WELCOME_TO_OSCMAX', 'Willkommen bei osCmax ');
define('TEXT_INDEX_MAIN_BLOCK', '<p>Mit osCmax k�nnen Sie weltweit Produkte �ber Ihren eigenen Online-Shop vertreiben. Verwalten Sie Produkte, Kunden, Bestellungen, Newsletter, Sonderangebote und mehr und f�hren Sie so Ihren Onlineshop zum Erfolg.</p>
  <p>osCmax basiert auf osCommerce Online Merchant 2.2 und macht die Entwicklung Ihrer Site schneller und einfacher als jemals zuvor. osCmax ist mit osCommerce Online Merchant 2.2 abw�rtskompatibel. Somit profitieren Sie von der gr��ten Community einer Shopl�sung: �ber 140.000 registrierte Shop-Betreiber und Entwickler geben Hilfestellung und haben �ber 4.000 Erweiterungen entwickelt, die die Funktionalit�t und das Potential Ihres Shops erweitern.</p>
  <p>osCmax und seine Erweiterungen sind kostenlos unter Verwendung einer Open-Source-Lizenz verf�gbar, damit Sie schneller und ohne Einschr�nkungen oder Lizenzgeb�hren online verkaufen k�nnen.</p><p>&nbsp;</p><p>&nbsp;</p><br />');
define('TEXT_REGISTER_GLOBALS_ERROR', 'Die Kompatibilit�t mit register_globals wird seit PHP 4.3+ unterst�tzt. Diese Einstellung <u>muss aktiviert werden</u>, da eine �ltere PHP Version verwendet wird.');
define('TEXT_PERMISSIONS_ERROR', '<p>Der Webserver kann die Installationsparameter nicht in seine Konfigurationsdateien speichern.</p><p>Bei den folgenden Dateien m�ssen die Zugriffsberechtigungen auf world-writeable (chmod 777) gesetzt werden:</p><p></p>');
define('TEXT_CORRECT_ERROR', '<p class="messageStackAlert">Bitte beheben Sie die rechts aufgelisteten Fehler und wiederholen Sie die Installation.</p>
');
define('TEXT_RESTART_WEB_SERVER_ERROR', '<p class="messageStackAlert"><i>Die �nderung von Webserver-Konfiguartionsparameter k�nnte den Neustart des Webserverdienstes erforderlich machen, damit die �nderungen wirksam werden.</i>');
define('TEXT_SERVER_SUCCESS', 'Die Webserverumgebung wurde �berpr�ft, damit Ihr Onlineshop erfolgreich installiert und konfiguriert werden kann.<br /><br />Sie k�nnen nun mit dem Installationsvorgang beginnen.');

// Step 1 - Database Server
define('TEXT_DATABASE_SERVER_BLOCK', '<p>Der Datenbankserver speichert den Inhalt des Shops, wie etwa Produktdaten, Kundendaten und get�tigte Bestellungen.</p><p>Bitte kontaktieren Sie Ihren Serveradministrator, falls Ihnen die Datenbankserver-Parameter nicht bekannt sind.</p>');
define('TEXT_DATABASE_SERVER', 'Datenbankserver');
define('TEXT_DATABASE_SERVER_DESC', 'Die Adresse des Datenbankservers als Hostname oder IP-Adresse.');
define('TEXT_DATABASE_USERNAME', 'Benutzername');
define('TEXT_DATABASE_USERNAME_DESC', 'Der Benutzername wird zur Verbindungsaufnahme mit dem Datenbankserver ben�tigt.');
define('TEXT_DATABASE_PASSWORD', 'Passwort');
define('TEXT_DATABASE_PASSWORD_DESC', 'Das Passwort wird zur Verbindungsaufnahme mit dem Datenbankserver ben�tigt.');
define('TEXT_DATABASE_NAME', 'Datenbankname');
define('TEXT_DATABASE_NAME_DESC', 'Diese Datenbank wird die Shopdaten speichern.');
define('TEXT_DATABASE_SUCCESS', 'Datenbank erfolgreich importiert.');
define('TEXT_DATABASE_IMPORTING', 'Die Datenbankstruktur wird jetzt importiert. Bitte unterbrechen Sie diesen Vorgang nicht!');
define('TEXT_DATABASE_PROBLEM', 'Beim Datenbankimport ist ein Fehler aufgetreten:<br><br>%s<br><br>Bitte �berpr�fen Sie die Verbindungsparameter und versuchen Sie es erneut.');
define('TEXT_DATBASE_CONNECTION_ERROR', 'Beim Verbindungsversuch mit dem Datenbankserver ist ein Fehler aufgetreten:<br><br>%s<br><br>Bitte �berpr�fen Sie die Verbindungsparameter und versuchen Sie es erneut.');
define('TEXT_TESTING_DATABASE', 'Die Verbindung zur Datenbank wird �berpr�ft.');

// Step 2 - Web Server
define('TEXT_WEB_SERVER', '<p>Der Webserver liefert die Seiten Ihres Onlineshops an Besucher und Kunden aus. Die Webserverparameter stellen sicher, dass Ihre Seiten richtig verlinkt werden.</p>');
define('TEXT_WWW_ADDRESS', 'WWW Adresse');
define('TEXT_WEB_ADDRESS', 'Die Webadresse Ihres Onlineshops.');
define('TEXT_WEBSERVER_ROOT_DIR', 'Webserver-Wurzelverzeichnis');
define('TEXT_WEBSERVER_DIRECTORY', 'In dieses Serververzeichnis wird Ihr Onlineshop installiert.');

// Step 3 - Store Setup
define('TEXT_STORE_SETUP', '<p>Hier k�nnen Sie Angaben zum Namen Ihres Onlineshops oder Kontaktinformationen hinterlegen.</p><p>Der Administrator-Benutzername und das Passwort werden zur Anmeldung in den Administrations-Bereich ben�tigt.</p>');
define('TEXT_STORE_NAME', 'Shopname');
define('TEXT_STORE_NAME_DESC', 'Diese Information wird �ffentlich angezeigt.');
define('TEXT_FIRST_NAME', 'Vorname des Shopbetreibers');
define('TEXT_FIRST_NAME_DESC', 'Diese Information wird �ffentlich angezeigt.');
define('TEXT_LAST_NAME', 'Nachname des Shopbetreibers');
define('TEXT_LAST_NAME_DESC', 'Diese Information wird �ffentlich angezeigt.');
define('TEXT_EMAIL', 'E-Mail-Adresse des Shopbetreibers');
define('TEXT_EMAIL_DESC', 'Diese Information wird �ffentlich angezeigt.');
define('TEXT_USERNAME', 'Benutzername des Administrators');
define('TEXT_USERNAME_DESC', 'Der Benutzername wird f�r den Zugang zum Administrations-Bereich ben�tigt.');
define('TEXT_PASSWORD', 'Administrator Passwort');
define('TEXT_PASSWORD_DESC', 'Das Passwort f�r das Administrator-Konto.');
define('TEXT_ADMIN_FOLDER_NAME', 'Verzeichnisname des Administrations-Bereiches');
define('TEXT_CHANGE_ADMIN_FOLDER', 'In diesem Verzeichnis befindet sich der Administrations-Bereich. Aus Sicherheitsgr�nden sollte der <b>Verzeichnisname unbedingt ge�ndert werden</b>, da der standardm��ig verwendete Name <b>admin</b> unsicher ist. Weitere Informationen zum Thema Sicherheit finden Sie im <a href="http://wiki.oscdox.com/v2.5/setting_up_security" target="_blank">Wiki</a>.');
define('TEXT_ADMIN_NO_PERMISSION', 'Sie besitzen keine ausreichende Berechtigung, um das <b>admin/</b> Verzeichnis umzubenennen. Sie sollten das Verzeichnis umbenennen, um die Sicherheit Ihres Onlineshops zu verbessern. Passen Sie Ihre Servereinstellungen an und folgen Sie <a href="http://wiki.oscdox.com/v2.1/setting_up_security" target="_blank">dieser Anleitung</a> zur manuellen Umbenennung.');
define('TEXT_NO_CONFIG_PERMISSIONS', 'Der Installer kann Ihre configure.php Dateien nicht erstellen. <br/> Die Zugriffsrechte sind inkorrekt bei mehreren Verzeichnissen!');
define('TEXT_NO_CONFIG_PERMISSIONS_DESC', ' Sie m�ssen die Zugriffsrechte auf 755 or 777 bei den folgenden Verzeichnissen �ndern. <br />Sobald dies geschehen ist, laden Sie diese Seite neu und Sie k�nnen die Installation fortsetzen. Falls Sie dennoch weiterhin diesen Fehler sehen, lesen Sie  die Dokumentation <a href="http://wiki.oscdox.com/v2.5/installation_troubleshooting" target="_blank">Troubleshooting</a>. <br><br>�ndern Sie die Zugriffsrechte auf 755 oder 777 (Tip: Versuchen Sie zuerst 755. Falls das nicht funktioniert, versuchen Sie 777.) bei den folgenden Verzeichnissen:<br><br>');


// Finished
define('TEXT_FINISHED', '<h1>Installation abgeschlossen</h1><p>Herzlichen Gl�ckwunsch zur erfolgreichen Einrichtung Ihres Onlineshops!</p><p>Wir w�nschen Ihnen viel Erfolg mit Ihrem Onlineshop und laden Sie ein, Teil unserer Community zu werden.</p><p align="right"><i><b>- Ihr osCmax Team</b></i></p>');
define('TEXT_ADMIN_RENAMED_1', 'Herzlichen Gl�ckwunsch! Ihr admin Verzeichnis wurde erfolgreich umbenannt zu ');
define('TEXT_ADMIN_RENAMED_2', '.<br><br>Falls Sie mehr �ber zus�tzliche Sicherheitsma�nahmen erfahren m�chten, lesen Sie bitte die Informationen im <a href="http://wiki.oscdox.com/v2.5/setting_up_security" target="_blank">Wiki</a>.');
define('TEXT_ADMIN_NOT_RENAMED', 'Sie haben das <b>admin</b>-Verzeichnis nicht umbenannt! Bei �ffentlich zug�nglichen Shops wird dies aus Sicherheitsgr�nden jedoch dringend empfohlen. <br><br>Bitte lesen Sie die <a href="http://wiki.oscdox.com/v2.5/setting_up_security" target="_blank">Wiki-Dokumentation zur Absicherung Ihres Onlineshops.</a>');
define('TEXT_INSTALLATION_SUCCESSFUL', 'Die Installation und Einrichtung war erfolgreich!');
?>