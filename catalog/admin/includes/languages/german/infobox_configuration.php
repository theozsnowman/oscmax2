<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/


define('HEADER_TITLE', 'Infoboxen anzeigen, aktualisieren und erstellen');
define('TABLE_HEADING_CONFIGURATION_TITLE', 'Titel');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Dateiname');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_COLUMN', 'Spalte');
define('TABLE_HEADING_SORT_ORDER', 'Position');

define('TEXT_INFO_EDIT_INTRO', 'F�hren Sie die gew�nschten �nderungen durch.');
define('TEXT_INFO_DATE_ADDED', 'Hinzugef�gt am:');
define('TEXT_INFO_LAST_MODIFIED', 'Zuletzt ge�ndert am:');
define('TEXT_INFO_HEADING_NEW_INFOBOX', 'Neue Infobox hinzuf�gen');
define('TEXT_INFO_INSERT_INTRO', 'Ein Beispiel f�r eine<b> what\'s_new.php</b> Infobox wird angezeigt.');
define('TEXT_INFO_DELETE_INTRO', '<p style="color: red; font-weight: bold;">Confirm OK to delete the Infobox</p>');
define('TEXT_INFO_HEADING_DELETE_INFOBOX', 'Infobox l�schen?');

define('IMAGE_INFOBOX_STATUS_GREEN', 'Links');
define('IMAGE_INFOBOX_STATUS_GREEN_LIGHT', 'Nach links verschieben');
define('IMAGE_INFOBOX_STATUS_RED', 'Rechts');
define('IMAGE_INFOBOX_STATUS_RED_LIGHT', 'Nach rechts verschieben');
define('BOX_HEADING_BOXES', 'Boxenverwaltung');

define('TEXT_INFOBOX_FILENAME', 'Dateiname');
define('TEXT_INFOBOX_DEFINE_KEY', 'Definiere Schl�ssel');
define('TEXT_INFOBOX_COLUMN', 'Spalte (left/right)');
define('TEXT_INFOBOX_POSITION', 'Position');
define('TEXT_INFOBOX_ACTIVE', 'Box aktivieren?'); 


define('TEXT_HELP_HEADING_NEW_INFOBOX', 'Infobox Hilfe');

define('TEXT_INFOBOX_HELP_FILENAME', 'Muss dem Namen der Boxdatei entsprechen, die Sie im <u>catalog/includes/boxes</u>-Ordner angelegt haben.<br><br> Er muss in Kleinbuchstaben geschrieben sein. Leerzeichen statt Unterstriche (_) sind zul�ssig und d�rfen \'s enthalten, da sie vom System entfernt werden.<br><br>Beispiel Eins:<br>Ihre neue Infobox hei�t <b>neue_box.php</b>, Sie k�nnen hier <b>neue box</b> eingeben. <br><br>Beispiel Zwei: Die <b>whats_new</b> Box hei�t <b>whats_new.php </b>. Sie k�nnen hier <b>what\'s new</b> eingeben.');

define('TEXT_INFOBOX_HELP_HEADING', 'Dies ist der Titel Ihrer Infobox im Catalog.');

define('TEXT_INFOBOX_HELP_DEFINE', 'Beispiel: <b>BOX_HEADING_WHATS_NEW</b>.  <br><br>Wird von den Sprachdateien verwendet, um die richtige �bersetzung der erstellten Infobx-�berschrift zu liefern.  <br><br>Wenn Sie das definieren m�chten, sehen Sie sich bitte die Sprachdatei f�r diese Infobox an.');

define('TEXT_INFOBOX_HELP_COLUMN', 'Geben Sie <b>left</b>(Links) oder <b>right</b>(Rechts) an.');

define('TEXT_INFOBOX_HELP_POSITION', 'Geben Sie eine beliebige Zahl an. H�here Zahlen f�hren zu einer Positionierung weiter unten<br><br> Bei gleichen Zahlen werden die Infoboxen alphabetisch gereiht.');

define('TEXT_INFOBOX_HELP_ACTIVE', 'W�hlen Sie <b>yes</b>(Ja) oder <b>no</b>(Nein). <br><br><b>yes</b> macht die Infobox sichtbar, <b>no</b> unsichtbar.');

define('TEXT_CLOSE_WINDOW', '<u>Fenster schlie�en</u> [x]');

define('COUNT_1', 'Es befinden sich derzeit ');
define('COUNT_2', ' Boxen in der linken Spalte und ');
define('COUNT_3', ' Boxes in der rechten Spalte.');

?>