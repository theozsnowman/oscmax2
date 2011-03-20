<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'B�squeda avanzada');
define('NAVBAR_TITLE_2', 'Resultados de la b�squeda');

define('HEADING_TITLE_1', 'B�squeda avanzada');
define('HEADING_TITLE_2', 'Productos que satisfacen los criterios de b�squeda');

define('HEADING_SEARCH_CRITERIA', 'B�squeda avanzada');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Buscar tambi�n en la descripci�n');
define('ENTRY_CATEGORIES', 'Categor�as:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Incluir subcategor�as');
define('ENTRY_MANUFACTURERS', 'Fabricante:');
define('ENTRY_PRICE_FROM', 'Desde precio:');
define('ENTRY_PRICE_TO', 'Hasta precio:');
define('ENTRY_DATE_FROM', 'Desde fecha:');
define('ENTRY_DATE_TO', 'Hasta fecha:');

define('TEXT_SEARCH_HELP_LINK', '<u>Ayuda</u> [?]');

define('TEXT_ALL_CATEGORIES', 'Todas');
define('TEXT_ALL_MANUFACTURERS', 'Todos');

define('HEADING_SEARCH_HELP', 'Consejos para la b�squeda avanzada');
define('TEXT_SEARCH_HELP', 'El motor de b�squeda le permite hacer una b�squeda por palabras clave en el modelo, nombre y descripci�n del producto y en el nombre del fabricante.<br><br>Cuando haga una b�squeda por palabras o frases clave, puede separar estas con los operadores l�gicos AND y OR. Por ejemplo, puede hacer una b�squeda por <u>microsoft AND rat�n</u>. Esta b�squeda dar�a como resultado los productos que contengan ambas palabras. Por el contrario, si teclea  <u>rat�n OR teclado</u>, conseguir� una lista de los productos que contengan las dos o s�lo una de las palabras. Si no se separan las palabras o frases clave con AND o con OR, la b�squeda se har� usando por defecto el operador logico AND.<br><br>Puede realizar b�squedas exactas de varias palabras encerr�ndolas entre comillas. Por ejemplo, si busca <u>"ordenador port�til"</u>, obtendr�s una lista de productos que tengan exactamente esa cadena de texto en ellos.<br><br>Se pueden usar par�ntensis para controlar el orden de las operaciones l�gicas. Por ejemplo, puede introducir <u>microsoft and (teclado or rat�n or "visual basic")</u>.');
define('TEXT_CLOSE_WINDOW', '<u>Cerrar ventana</u> [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Descripci�n');
define('TABLE_HEADING_MANUFACTURER', 'Fabricante');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_PRICE', 'Precio');
define('TABLE_HEADING_WEIGHT', 'Peso');
define('TABLE_HEADING_BUY_NOW', 'Compre ahora');

define('TEXT_NO_PRODUCTS', 'No hay productos que correspondan con los criterios de b�squeda.');

define('ERROR_AT_LEAST_ONE_INPUT', 'Debe introducir al menos un criterio de b�squeda.');
define('ERROR_INVALID_FROM_DATE', 'La fecha introducida en Desde fecha es inv�lida');
define('ERROR_INVALID_TO_DATE', 'La fecha introducida en Hasta fecha es inv�lida');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'La fecha de Hasta fecha debe ser mayor que la de Desde fecha');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'El campo Desde precio debe ser n�merico');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'El campo Hasta precio debe ser n�merico');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'El precio de Hasta precio debe ser mayor o igual que el de Desde precio');
define('ERROR_INVALID_KEYWORDS', 'Palabras clave incorrectas');
define('TEXT_OPTIONAL','Las entradas en los siguientes campos son opcionales a menos que el criterio de b�squeda se deja en blanco. En este caso, se debe rellenar al menos un campo de los siguientes.');

define('TEXT_FOR_FIELD','Para este campo coincide ');

define('TEXT_MATCH_ANY','Cualquier valor seleccionado o ');

define('TEXT_MATCH_ALL','Todos los valores seleccionados');

?>
