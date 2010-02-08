<?php
/*
  $Id: affiliate_banners.php,v 2.0 2002/09/29 SDK

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright 2006 osCMax2002 -2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gestion des banni�res - Affili�');

define('TABLE_HEADING_BANNERS', 'Banni�res');
define('TABLE_HEADING_GROUPS', 'Groupees');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_STATISTICS', 'Statistiques');
define('TABLE_HEADING_PRODUCT_ID', 'ID Produit');
define('TABLE_HEADING_CATEGORY_ID','ID Cat�gorie');

define('TEXT_VALID_CATEGORIES_LIST', 'Liste de Cat�gorie');
define('TEXT_VALID_CATEGORIES_NAME', 'Nom de Cat�gorie');
define('TABLE_HEADING_CATEGORY_ID', 'Cat ID');
define('TEXT_BANNERS_LINKED_CATEGORY','Cat�gorie ID :');
define('TEXT_BANNERS_LINKED_CATEGORY_NOTE','Si vous voulez lier la Banni�re � une cat�gorie sp�cifique entrez l\'ID Cat�gorie ici. Si vous voulez lier � la page par d�faut, entrez "0"');
define('TEXT_AFFILIATE_VALIDPRODUCTS', 'Cliquez Ici :');
define('TEXT_AFFILIATE_INDIVIDUAL_BANNER_VIEW', 'Pour voir les produits disponibles.');
define('TEXT_AFFILIATE_INDIVIDUAL_BANNER_HELP', 'S�lectionnez le num�ro de produit � partir de la popup et entrez le num�ro dans le champ Produit ID.');
define('TEXT_BANNERS_TITLE', 'Banni�re Titre :');
define('TEXT_BANNERS_GROUP', 'Banni�re Groupe:');
define('TEXT_BANNERS_NEW_GROUP', ', ou entrez un nouveau(elle) banni�re groupe ci-dessous');
define('TEXT_BANNERS_IMAGE', 'Image :');
define('TEXT_BANNERS_IMAGE_LOCAL', ', ou entrez un fichier local ci-dessous');
define('TEXT_BANNERS_IMAGE_TARGET', 'Image cible :');
define('TEXT_BANNERS_HTML_TEXT', 'Texte HTML:');
define('TEXT_AFFILIATE_BANNERS_NOTE', '<b>Banni�re Notes:</b><ul><li>Utilisez une image ou du Texte HTML pour la banni�re - pas les deux.</li><li>HTML Text avait prioritoire au dessus d\'un image</li></ul>');

define('TEXT_BANNERS_LINKED_PRODUCT','Produit ID :');
define('TEXT_BANNERS_LINKED_PRODUCT_NOTE','Si vous voulez lier la Banni�re � un produit sp�cifique entrez l\'ID Produit ici. Si vous voulez lier � la page par d�faut, entrez "0"');

define('TEXT_BANNERS_DATE_ADDED', 'Date Ajout�e:');
define('TEXT_BANNERS_STATUS_CHANGE', 'Edit� derni�rement le: %s');

define('TEXT_AFFILIATE_VALIDPRODUCTS', 'Cliquez Ici :');
define('TEXT_AFFILIATE_INDIVIDUAL_BANNER_VIEW', 'Pour voir les produits disponibles.');
define('TEXT_AFFILIATE_INDIVIDUAL_BANNER_HELP', 'S�lectionnez le num�ro de produit � partir de la popup et entrez le num�ro dans le champ Produit ID.');
define('TEXT_VALID_PRODUCTS_LIST', 'Liste Produits Disponible(s)');
define('TEXT_VALID_PRODUCTS_ID', 'Produit #');
define('TEXT_VALID_PRODUCTS_NAME', 'Nom des Produits');

define('TEXT_CLOSE_WINDOW', '<u>Fermer cette fen�tre</u> [x]');
define('TEXT_INFO_DELETE_INTRO', '�tes-vous certain de vouloir effacer cette banni�re?');
define('TEXT_INFO_DELETE_IMAGE', 'Effacer l\'image banni�re');

define('SUCCESS_BANNER_INSERTED', 'Success: The banni�re a �t� ins�r�e.');
define('SUCCESS_BANNER_UPDATED', 'Success: The banni�re a �t� mise � jour.');
define('SUCCESS_BANNER_REMOVED', 'Success: The banni�re a �t� enlev�e.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Erreur: titre de la Banni�re requis.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Erreur: groupe de la Banni�re requis.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Erreur: Dossier cible n\'existe pas.');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Erreur: Dossier cible n\'est pas en mode �criture.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Erreur: Image inexistante.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Erreur: Image impossible � enlever.');
?>