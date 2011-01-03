<?php
/*
  $Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Afiliados Administrador de Banners');

define('TABLE_HEADING_BANNERS', 'Banners');
define('TABLE_HEADING_GROUPS', 'Grupos');
define('TABLE_HEADING_ACTION', 'Accion');
define('TABLE_HEADING_STATISTICS', 'Vistas / Clicks');
define('TABLE_HEADING_PRODUCT_ID', 'Productos ID');
define('TEXT_VALID_CATEGORIES_LIST', 'Available Categories List');
define('TEXT_VALID_CATEGORIES_ID', 'Category #');
define('TEXT_VALID_CATEGORIES_NAME', 'Categories Name');
define('TABLE_HEADING_CATEGORY_ID', 'Cat ID');
define('TEXT_BANNERS_LINKED_CATEGORY','Category ID');
define('TEXT_BANNERS_LINKED_CATEGORY_NOTE','If you want to link the Banner to a specific CATEGORY enter its CATEGORY ID here. If you want to link to the default page enter "0"');
define('TEXT_AFFILIATE_VALIDCATS', 'Click Here:');
define('TEXT_AFFILIATE_CATEGORY_BANNER_VIEW', 'to view available CATEGORIES.');
define('TEXT_AFFILIATE_CATEGORY_BANNER_HELP', 'Select the category number from the popup window and enter the number in the Category ID field.');

define('TEXT_BANNERS_TITLE', 'Titulo:');
define('TEXT_BANNERS_GROUP', 'Grupo:');
define('TEXT_BANNERS_NEW_GROUP', ', o introduzca un grupo nuevo');
define('TEXT_BANNERS_IMAGE', 'Imagen:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', o introduzca un fichero local');
define('TEXT_BANNERS_IMAGE_TARGET', 'Destino de la Imagen (Grabar en):');
define('TEXT_BANNERS_HTML_TEXT', 'Texto HTML:');
define('TEXT_AFFILIATE_BANNERS_NOTE', '<b>Notas sobre el Banner:</b><ul><li>Use una imagen o texto HTML para el banner - no ambos.</li><li>Texto HTML tiene prioridad sobre una imagen</li></ul>');

define('TEXT_BANNERS_LINKED_PRODUCT','Productos ID');
define('TEXT_BANNERS_LINKED_PRODUCT_NOTE','If you want to link the Banner to a specific product enter its products_id here. If you want to link to the default page enter 0');

define('TEXT_BANNERS_DATE_ADDED', 'A�adido el:');
define('TEXT_BANNERS_STATUS_CHANGE', 'Cambio Estado: %s');

define('TEXT_AFFILIATE_VALIDPRODUCTS', 'Click Here:');
define('TEXT_AFFILIATE_INDIVIDUAL_BANNER_VIEW', 'to view available products.');
define('TEXT_AFFILIATE_INDIVIDUAL_BANNER_HELP', 'Select the product number from the popup window and enter the number in the Product ID field.');

define('TEXT_VALID_PRODUCTS_LIST', 'Available Products List');
define('TEXT_VALID_PRODUCTS_ID', 'Product #');
define('TEXT_VALID_PRODUCTS_NAME', 'Products Name');

define('TEXT_CLOSE_WINDOW', '<u>Close Window</u> [x]');
define('TEXT_INFO_DELETE_INTRO', 'Seguro que quiere eliminar este banner?');
define('TEXT_INFO_DELETE_IMAGE', 'Borrar imagen');

define('SUCCESS_BANNER_INSERTED', 'Success: The banner has been inserted.');
define('SUCCESS_BANNER_UPDATED', 'Success: The banner has been updated.');
define('SUCCESS_BANNER_REMOVED', 'Success: The banner has been removed.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Error: Banner title required.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Error: Banner group required.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: Target directory does not exist.');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: Target directory is not writeable.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Error: Image does not exist.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Error: Image can not be removed.');
?>