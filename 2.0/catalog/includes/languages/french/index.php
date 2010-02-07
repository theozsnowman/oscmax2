<?php
/*
  $Id: index.php,v 1.1.1.1.2.1 2005/06/12 00:04:33 Michael Sasek Exp $

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
  Translated by Gunt - Contact : webmaster@webdesigner.com.fr
*/

define('TEXT_MAIN', '');
define('TABLE_HEADING_NEW_PRODUCTS', 'Nouveaux produits pour %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Prochains produits');
define('TABLE_HEADING_DATE_EXPECTED', 'Date pr&eacute;vue');
// MOD - default specials - line added
define('TABLE_HEADING_DEFAULT_SPECIALS', 'Sp&eacute;ciaux Pour %s');

if ( ($category_depth == 'products') || (isset($HTTP_GET_VARS['manufacturers_id'])) ) {
  define('HEADING_TITLE', '');
  define('TABLE_HEADING_IMAGE', '');
  define('TABLE_HEADING_MODEL', 'Mod&egrave;le');
  define('TABLE_HEADING_PRODUCTS', 'Nom du produit ');
  define('TABLE_HEADING_MANUFACTURER', 'Fabricant');
  define('TABLE_HEADING_QUANTITY', 'Quantit&eacute;');
  define('TABLE_HEADING_PRICE', 'Prix');
  define('TABLE_HEADING_WEIGHT', 'Poids');
  define('TABLE_HEADING_BUY_NOW', 'Acheter maintenant');
  define('TEXT_NO_PRODUCTS', 'Il n\'y a aucun produit list&eacute; dans cette cat&eacute;gorie.');
  define('TEXT_NO_PRODUCTS2', 'Il n\'y a aucun produit disponible pour ce fabricant.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Nombre de produits:');
  define('TEXT_SHOW', '<b>Afficher :</b>');
  define('TEXT_BUY', 'Acheter 1 \'');
  define('TEXT_NOW', '\' maintenant');
  define('TEXT_ALL_CATEGORIES', 'Toutes cat&eacute;gories');
  define('TEXT_ALL_MANUFACTURERS', 'Tous fabricants');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'ACCUEIL');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Cat&eacute;gories');
}
?>