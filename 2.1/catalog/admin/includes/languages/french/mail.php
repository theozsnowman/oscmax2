<?php
/*
  $Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Envoyer un courrier &eacute;lectronique aux clients');

define('TEXT_CUSTOMER', 'Client:');
define('TEXT_SUBJECT', 'Sujet:');
define('TEXT_FROM', 'De:');
define('TEXT_MESSAGE', 'Message:');
define('TEXT_SELECT_CUSTOMER', 'Choisissez un client');
define('TEXT_ALL_CUSTOMERS', 'Tous les clients');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Tous les abonn&eacute;s au bulletin d\'informations');

define('NOTICE_EMAIL_SENT_TO', 'Notification: Courrier &eacute;lectronique envoy&eacute; &agrave;: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Erreur: Aucun client n\'a &eacute;t&eacute; s&eacute;lectionn&eacute;.');
// BOF: MOD - WYSIWYG HTML Area
define('TEXT_EMAIL_BUTTON_TEXT', '<p><HR><b><font color="red">Le bouton arri�re a �t� NEUTRALISENT tandis que le r�dacteur de HTML WYSIWG est allum�.  POURQUOI?  - Puisque si vous cliquetez le bouton arri�re pour �diter votre email de HTML, Le PHP (php.ini - "Des citations magiques = sur") ajoutera automatiquement de"\\\\\\\"d'antislashs des citations de double partout" appara�t (HTML les emploie dans les liens, les images et plus) et ce les destorts le HTML et les images veulent dissapear une fois que vous soumettez l'email encore, si vous arr�tez le r�dacteur d'cImpression CONFORME � LA VISUALISATION dans l'Admin les capacit�s de HTML de l'osCommerce sont �galement arr�t�es et le bouton arri�re r�appara�tra. Une difficult� pour cette issue de HTML et de PHP serait gentille si quelqu'un conna�t une solution que j'ai tried. <br><br><b>Si vous devez vraiment visionner vos email pr�alablement avant de les envoyer, utilise le bouton de pr�vision situ� sur le r�dacteur d'cImpression CONFORME � LA VISUALISATION.<br><HR>');
define('TEXT_EMAIL_BUTTON_HTML', '<p><HR><b><font color="red">Le HTML est actuellement neutralis�!</b></font><br><br>Si vous voulez envoyer l'email de HTML, permettez le r�dacteur d'cImpression CONFORME � LA VISUALISATION pour l'email dans: Admin-->Configuration-->�diteur de WYSIWYG-->Options<br>');
// EOF: MOD - WYSIWYG HTML Area
?>