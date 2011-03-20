<?php
/*
$Id: extra_values.php 1011 2011-01-06 23:38:01Z michael.oscmax@gmail.com $

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Mantenimiento de valores de campos extra de productos');
define('TABLE_HEADING_ID', 'ID ');
define('TABLE_HEADING_ORDER', 'Orden');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TABLE_HEADING_PARENT', 'ID padre');
define('TABLE_HEADING_VALUE', 'Valor');
define('TABLE_HEADING_IMAGE', 'Imagen');
define('TABLE_HEADING_REQUIRED', 'ID requerido');
define('TABLE_HEADING_EXCLUDES', 'Excluye IDs');
define('TABLE_HEADING_LINKED', 'IDs vinculados');
define('TEXT_FIELD_ID', 'Valor para campo extra ID n�');
define('TEXT_LANGAUGE', 'Idioma: ');
define('BUTTON_SUBVALUE', 'A�adir un subvalor a este valor');
define('BUTTON_NEW', "A�adir un valor a este campo/idioma");
define('TEXT_SELECT_FIELD', 'Selecciona un idioma/campor de la lista desplegable');
define('ERROR_NO_LIST_FIELDS', '&nbsp;&nbsp;�No existen campos extra definidos para usar una lista de valores!');
define('ERROR_NO_LIST_FIELDS2', 'Por favot <u>pulsa aqu�</u> para definir algunos');
define('HEADING_NEW', 'Creando nuevo valor para ');
define('HEADING_EDIT', 'Editando valor existente ID n�');
define('ENTRY_ORDER', 'Orden: ');
define('ENTRY_VALUE', 'Valor: ');
define('ENTRY_IMAGE', 'Imagen opcional: ');
define('ERROR_VALUE', '�El valor no puede estar vac�o!');
define('TEXT_PREVIEW', 'La entrada del campo con esta lista de valores se mostrar� as�: ');
define('TEXT_CHAIN', 'Cadena del valor: ');
define('HEADING_DELETE', 'Eliminar valor ID n�');
define('TEXT_FIELD_DATA', 'Este valor para el idioma: %s etiqueta de campo: %s o uno de sus subvalores est� siendo usado por %d productos.');
define('TEXT_YES', 'S�');
define('TEXT_NO', 'No');
define('TEXT_ARE_SURE', '�Est�s seguro que quieres eliminar este valor?');
define('TEXT_VALUES_GONE', ' �Se eliminar�n tambi�n todos los subvalores de este valor!');
define('TEXT_CONFIRM_DELETE', '�Est�s realmente seguro que quieres eliminar este valor? �Se borrar� la informaci�n relativa a este campo de todos los productos que utilizan este valor o uno de sus subvalores!');
define('WARNING_VALUE_USED', '&nbsp;&nbsp;Este valor est� siendo utilizado por %d productos. Mientras que cambiar el orden no tendr� ninguna importancia, cualquier cambio que se haga al valor podr�a tener consecuencias no deseadas en el cat�logo online.');
define('ERROR_FILENAME_USED', '&nbsp;&nbsp;�El nombre del fichero de imagen que est� siendo cargado est� siendo utilizado por otro valor!');
define('TEXT_FIELD_LINKS', 'Este valor para el idioma: %s etiqueta de campo: %s o uno de sus subvalores est� vinculado a %d valores del campo vinculado ID n� %d.');
define('ENTRY_VALUE_REQUIREMENT', 'Para poder utilizar este valor se requiere el siguiente valor del campo vinculado (o uno de sus subvalores):');
define('ENTRY_NO_VALUE_REQUIRED', 'no se requiere un valor espec�fico');
define('TEXT_REQUIRES', 'Valor de campo vinculado requerido para usar este valor:');
define('ENTRY_EXCLUDES', 'Marque los valores que no se pueden seleccionar al mismo tiempo que este valor:');
define('TEXT_ALWAYS_AVAILABLE', 'Los siguientes valores estar�n disponibles durante la introducci�n del producto para cualquier valor del campo vinculado ID n�');
define('TEXT_AVAILABLE_REQUIRED', 'Los siguientes valores estar�n disponibles durante la introducci�n del producto s�lo si es elegido uno de los siguientes valores del campo vinculado ID <b>n� %s</b>: ');
?>
