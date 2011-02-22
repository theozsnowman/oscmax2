<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Themen/Artikel');
define('HEADING_TITLE_SEARCH', 'Suche:');
define('HEADING_TITLE_GOTO', 'Gehe zu:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_TOPICS_ARTICLES', 'Themen/Artikel');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_STATUS', 'Status');

define('TEXT_ARTICLES_CURRENT', 'Aktuell:');

define('TEXT_NEW_ARTICLE', 'Neuer Artikel in &quot;%s&quot;');
define('TEXT_TOPICS', 'Themen:');
define('TEXT_SUBTOPICS', 'Unterthemen:');
define('TEXT_ARTICLES', 'Artikel:');
define('TEXT_ARTICLES_AVERAGE_RATING', 'Durchschnittliche Bewertung:');
define('TEXT_ARTICLES_HEAD_TITLE_TAG', 'HTML Seitetitel:');
define('TEXT_ARTICLES_HEAD_DESC_TAG', 'Meta Beschreibung:<br><small>(Artikelkurzbeschreibung =<br>es werden die ersten %s Zeichen angezeigt)</small>');
define('TEXT_ARTICLES_HEAD_KEYWORDS_TAG', 'Meta Schl�sselw�rter:');
define('TEXT_DATE_ADDED', 'Hinzugef�gt am:');
define('TEXT_DATE_AVAILABLE', 'geplante Ver�ffentlichung:');
define('TEXT_LAST_MODIFIED', 'zuletzt ge�ndert am:');
define('TEXT_NO_CHILD_TOPICS_OR_ARTICLES', 'Neues Thema oder neuen Artikel erstellen.');
define('TEXT_ARTICLE_MORE_INFORMATION', 'F�r weiter Informationen besuchen Sie bitte die <a href="http://%s" target="blank"><u>Homepage</u></a> dieses Artikels.');
define('TEXT_ARTICLE_DATE_ADDED', 'Dieser Artikel wurde unserer Seite am %s hinzugef�gt.');
define('TEXT_ARTICLE_DATE_AVAILABLE', 'Die Ver�ffentlichung dieses Artikels ist am %s geplant.');

define('TEXT_EDIT_INTRO', 'F�hren Sie die gew�nschten �nderungen durch.');
define('TEXT_EDIT_TOPICS_ID', 'Themen ID:');
define('TEXT_EDIT_TOPICS_NAME', 'Themenbezeichnung:');
define('TEXT_EDIT_SORT_ORDER', 'Reihenfolge:');

define('TEXT_INFO_COPY_TO_INTRO', 'Bitte w�hlen Sie ein Thema, in welches Sie diesen Artikel kopieren m�chten');
define('TEXT_INFO_CURRENT_TOPICS', 'Aktuelle Themen:');

define('TEXT_INFO_HEADING_NEW_TOPIC', 'Neue Themen');
define('TEXT_INFO_HEADING_EDIT_TOPIC', 'Thema �ndern');
define('TEXT_INFO_HEADING_DELETE_TOPIC', 'Thema l�schen');
define('TEXT_INFO_HEADING_MOVE_TOPIC', 'Thema verschieben');
define('TEXT_INFO_HEADING_DELETE_ARTICLE', 'Artikel l�schen');
define('TEXT_INFO_HEADING_MOVE_ARTICLE', 'Artikel verschieben');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopieren nach');

define('TEXT_DELETE_TOPIC_INTRO', 'Sind Sie sicher, dass Sie dieses Thema l�schen m�chten?');
define('TEXT_DELETE_ARTICLE_INTRO', 'Sind Sie sicher, dass Sie diesen Artikel unwiderruflich l�schen m�chten?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>WARNING:</b> Es sind %s Unterthemen mit diesem Thema verbunden!');
define('TEXT_DELETE_WARNING_ARTICLES', '<b>WARNING:</b> Es sind %s Artikel mit diesem Thema verbunden!');

define('TEXT_MOVE_ARTICLES_INTRO', 'W�hlen Sie das Thema, in das Sie <b>%s</b> verschieben m�chten');
define('TEXT_MOVE_TOPICS_INTRO', 'W�hlen Sie das Thema, in das Sie <b>%s</b> verschieben m�chten');
define('TEXT_MOVE', 'Verschiebe <b>%s</b> nach:');

define('TEXT_NEW_TOPIC_INTRO', 'Geben Sie die folgenden Informationen zu dem neue Thema an');
define('TEXT_TOPICS_NAME', 'Themenbezeichnung:');
define('TEXT_SORT_ORDER', 'Reihenfolge:');

define('TEXT_EDIT_TOPICS_HEADING_TITLE', 'Themen�berschrift:');
define('TEXT_EDIT_TOPICS_DESCRIPTION', 'Themenbeschreibung:');

define('TEXT_ARTICLES_STATUS', 'Artikelstatus:');
define('TEXT_ARTICLES_DATE_AVAILABLE', 'Geplante Ver�ffentlichung:');
define('TEXT_ARTICLE_AVAILABLE', 'Ver�ffentlicht');
define('TEXT_ARTICLE_NOT_AVAILABLE', 'Entwurf');
define('TEXT_ARTICLES_AUTHOR', 'Autor:');
define('TEXT_ARTICLES_NAME', 'Artikelbezeichnung:');
define('TEXT_ARTICLES_DESCRIPTION', 'Inhaltsangabe:');
define('TEXT_ARTICLES_URL', 'URL des Artikels:');
define('TEXT_ARTICLES_URL_WITHOUT_HTTP', '<small>(ohne http://)</small>');

define('EMPTY_TOPIC', 'Leeres Thema');

define('TEXT_HOW_TO_COPY', 'Kopiermethode:');
define('TEXT_COPY_AS_LINK', 'Artikel verlinken');
define('TEXT_COPY_AS_DUPLICATE', 'Artikel kopieren');

define('ERROR_CANNOT_LINK_TO_SAME_TOPIC', 'Fehler: Kann Artikel nicht im selben Thema verlinken.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fehler: Bilderordner des Kataloges ist nicht schreibberechtigt: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fehler: Bilderordner des Kataloges existiert nicht: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_TOPIC_TO_PARENT', 'Fehler: Thema kann nicht in Unterthema verschoben werden.');

define('TEXT_ARTICLES_SHOW_ON_INDEX', 'Artikel im Shop anzeigen?');
define('DO_SHOW_ON_INDEX', 'Ja');
define('DO_NOT_SHOW_ON_INDEX', 'Nein');
define('IMAGE_SHOW_ON_INDEX', 'Dieser Artikel wird im Shop angezeigt.');
?>
