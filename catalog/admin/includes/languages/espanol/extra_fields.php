<?php
/*
$Id: extra_fields.php 1011 2011-01-06 23:38:01Z michael.oscmax@gmail.com $

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', "Campos extra de productos");
define('TABLE_HEADING_ID', "ID");
define('TABLE_HEADING_LABEL', 'Idioma/Etiqueta');
define('TABLE_HEADING_ORDER', 'Orden');
define('TABLE_HEADING_STATUS', 'Estado en cat�logo');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TEXT_YES', 'S�');
define('TEXT_NO', 'No');
define('BUTTON_NEW', 'Nuevo campo extra');
define('BUTTON_EDIT_VALUES', 'Editar lista de valores');
define('ENTRY_LABEL', 'Etiqueta: ');
define('ENTRY_ACTIVE', '<b>Campo activo</b>');
define('ENTRY_ACTIVATE_NOW', 'Mostrar campo a los clientes: ');
define('ENTRY_SHOW_ADMIN', 'Mostrar campo en el panel de administraci�n incluso si est� oculto para los clientes: ');
define('ENTRY_ORDER', 'Orden: ');
define('ENTRY_VALUE_LIST', 'Utilizar una lista de valores: ');
define('ENTRY_SEARCH', 'Habilitar B�squeda avanzada para este campo: ');
define('ENTRY_TEXT_ENTRY', 'Introducir texto usando: ');
define('TEXT_SINGLE_LINE', 'l�nea simple');
define('TEXT_MULTILINE', '�rea de texto');
define('TEXT_LIST_IGNORES', ' Se ignora �rea de texto si el campo utiliza una lista de valores.');
define('TEXT_TEXTAREA_NOTE', 'NOTA: Campos con �rea de texto no se pueden mostrar en el listado de productos.');
define('ENTRY_LISTING', 'Mostrar campo en listado de productos: ');
define('ENTRY_SIZE', 'M�ximo numero de caracteres permitidos en el campo (se igonora si el campo utiliza lista de valores o �rea de texto): ');
define('ENTRY_META', 'Utilizar el valor del campo como META Keyword para los buscadores de Internet: ');
define('ENTRY_LIST_TYPE', 'De la lista de valores el usuario puede seleccionar: ');
define('TEXT_SINGLE_VALUE', 'valor individual');
define('TEXT_MULTIPLE_VALUE', 'm�ltiples valores');
define('ENTRY_CHAIN', 'Mostrar cadena de valores padre del campo (requiere lista de valores de selecci�n individual): ');
define('ENTRY_RESTRICT', 'Permitir utilizar el campo para restringir listado de productos (requiere lista de valores de selecci�n individual): ');
define('ENTRY_SEARCH_BOX', 'Utilizar el campo en la caja de B�squeda r�pida avanzada (requiere lista de valores de selecci�n individual y B�squeda avanzada): ');
define('ENTRY_CHECKBOX', 'Los valores se seleccionan mediante: ');
define('TEXT_DROPDOWN', 'Men� desplegable');
define('TEXT_CHECKBOX', 'Casillas de verificaci�n');
define('TEXT_RADIO', 'Botones radio');
define('TEXT_MS_CHECKBOX_NOTE', 'NOTA: Este par�metro s�lo se aplica a las lista de valores de selecci�n individual que utilizan el tipo seleccionado para la introducci�n de datos excepto en la caja de B�squeda r�pida avanzada donde siempre se utiliza una men� desplegable. Las listas de valores de selecci�n m�ltiple siempre utilizan casillas de verificaci�n para la introducci�n de datos.');
define('ENTRY_COLUMNS', 'N�mero de columnas de valores para usar con casillas de verificaci�n/botones radio: ');
define('ENTRY_DISPLAY_TYPE', 'Mostrar lista de valores del campo como: ');
define('TEXT_TEXT', 'S�lo texto');
define('TEXT_IMAGE', 'S�lo imagen (con texto alt)');
define('TEXT_IMAGE_TEXT', 'Imagen y texto');
define('TEXT_SAMPLE', 'Ejemplo de visualizaci�n');
define('ERROR_COLS_OUTOFRANGE', '�El n�mero de columnas debe ser un n�mero entre 1 y 255!');
define('ERROR_OUTOFRANGE', '�El tama�o m�ximo debe ser un n�mero entre 1 y 255!');
define('ERROR_ENTRY_REQUIRED', '�No has introducido nada! ');
define('ERROR_INCOMPATIBLE_MS_SC', '�Los campos que utilizan listas de valores de selecci�n m�ltiple no pueden mostrar la cadena de valores padre!');
define('ERROR_INCOMPATIBLE_TA_PL', '�Los campos que utilizan un �rea de texto no se pueden mostrar en el listado de productos!');
define('ERROR_INCOMPATIBLE_MS_RPL', '�Los campos que utilizan listas de valores de selecci�n m�ltiple no pueden restringir listado de productos!');
define('ERROR_INCOMPATIBLE_MS_QS', '�Los campos que utilizan listas de valores de selecci�n m�ltiple se no pueden usar en la caja de b�squeda r�pida avanzada!');
define('ERROR_AS_REQUIRED', 'Este campo no se mostrar� en la caja de B�squeda r�pida avanzada a menos que habilites la B�squeda avanzada para este campo.');
define('TEXT_APPLIES_LIST_ONLY', 'Los siguientes par�metros s�lo se aplican si Utilizar una lista de valores est� configurado a S�. Los puedes ignorar para campos con �reas de texto.');
define('TEXT_ENABLED', 'Habilitado');
define('TEXT_DISABLED', 'Deshabilitado');
define('TEXT_SIZE', 'Tama�o m�ximo: ');
define('TEXT_SEARCHABLE', 'Directorio de b�squeda: ');
define('TEXT_META', 'META Keyword: ');
define('TEXT_USER_SELECTS', 'Los usuarios pueden seleccionar: ');
define('TEXT_SELECTED_BY', 'Seleccionado usando: ');
define('TEXT_RESTRICTS', 'Restringir listado de productos: ');
define('TEXT_SHOW_PARENTS', 'Mostrar valores padre: ');
define('TEXT_SEARCH_BOX', 'Caja de B�squeda r�pida: ');
define('TEXT_COLUMNS', 'N�mero de columnas Casillas/Botones: ');
define('TEXT_DISPLAY_TYPE', 'Mostrar valores como: ');
define('TEXT_LINKED_TO', 'Vinculado al campo n�');
define('HEADING_NEW', 'Creando nuevo campo');
define('HEADING_EDIT', 'Editando campo existente n�');
define('ERROR_ACTIVE', '�El campo debe estar activado al menos para un idioma!');
define('ERROR_LABEL', '�La etiqueta del campo para el idioma activo %s no se puede dejar en blanco!');
define('WARNING_TRUNCATE', '�Se perder� informaci�n si reduces la longitud del campo a este tama�o! �Actualmente %d descripciones de productos contienen valores que son m�s largos que este tama�o! Para evitar p�rdidas de informaci�n este campo necesitar�a ser de largo al menos %d caracteres. Si realmente quieres reducir el tama�o de este campo y provocar que se trunquen los datos entonces pulsa el bot�n de Guardar para confirmar el cambio.');
define('WARNING_LANGUAGE_IN_USE', '�Este campo tiene actualmente %d productos con valores configurados para el idioma %s! Si realmente quieres desactivar el campo para este idioma entonces pulsa el bot�n de Guardar para confirmar el cambio. La informaci�n actual no ser� borrada pero tampoco se podr� cambiar ni visualizar.');
define('HEADING_DELETE', 'Eliminar el campo extra de producto n�');
define('TEXT_FIELD_DATA', '&nbsp;<b>Etiqueta:</b> %s <b>Utilizado por:</b> %d productos');
define('TEXT_ARE_SURE', '�Est�s seguro que quieres eliminar este campo?');
define('TEXT_VALUES_GONE', ' �Todos los valores almacenados en las listas de valores para este campo ser�n eliminados!');
define('TEXT_LINKS_DESTROYED', ' �Este campo est� vinculado con otro campo y todos los v�nculos entre sus valores se eliminar�n si eliminas este campo!');
define('TEXT_CONFIRM_DELETE', '�Est�s realmente seguro que quieres eliminar este campo? �Se perder� toda la informaci�n almacenada de este campo!');
define('BUTTON_UNLINK', 'Desvincular campo');
define('BUTTON_LINK', 'Vincular este campo a otro');
define('BUTTON_CREATE_LINK', 'Crear v�nculo hacia el campo seleccionado');
define('HEADING_UNLINK', 'Desvincular campo %d del campo %d');
define('TEXT_NUM_LINKED', 'Actualmente %d valores de este campo est�n vinculados al otro campo.');
define('TEXT_SURE_UNLINK', '�Est�s seguro que quieres desvincular estos dos campos?');
define('TEXT_LINKS_GONE', ' �Todos los v�nculos entre los valores de estos campos se eliminar�n si contin�as!');
define('TEXT_CONFIRM_UNLINK', '�Est�s realmente seguro que quieres desvincular estos dos campos? Todos los v�nculos entre sus valores se eliminar�n si contin�as!');
define('ERROR_NO_FIELD', '�No se ha encontrado el campo para vincular!');
define('TABLE_HEADING_SELECT', 'Selecciona');
define('TEXT_SELECT_LINK', ' Selecciona un campo de la lista a continuaci�n para vincular con este campo. Los idiomas marcados con un * en la lista pueden tener valores vinculados a este campo.');
define('TEXT_NOT_LINKABLE', 'Este campo no tiene ning�n idioma activo que coincidan con el campo al que va a ser vinculado y por tantono puede ser vinculado a �l.');
define('ERROR_NONE_LINKABLE', '�No se han encontrado campos que puedan ser vinculados a este!');
define('ERROR_WRONG_TYPE', '�Los campos a vincular deben usar listas de valores!');
define('ERROR_SAME_TYPE', '�Un campo a vincular debe usar una lista de valores de selecci�n individual mientras que el otro debe usar una lista de valores de selecci�n m�ltiple!');
define('ERROR_ALREADY_LINKED', 'El campo %d ya est� vinculado a otro campo!');
define('TEXT_LINK_SUCCESS', 'El campo %d ha sido vinculado correctamente al campo %d.');
define('ERROR_NOT_LINKED', '�Este campo no est� vinculado a otro!');
define('TEXT_ADMIN_AVAILABLE', 'Disponible en administraci�n: ');

define('HEADING_NO_EPF', 'Campos extra de productos');
define('TEXT_NO_EPF', 'Actualmente no hay campos extra definidos.<br><br>Por favor pulsa en <b>Nuevo campo extra</b> para crear uno nuevo.');
define('ENTRY_ALL_CATEGORIES', '�Se aplica este campo a todas las categor�as?');
define('ENTRY_CHECK_CATEGORIES', 'Selecciona las casillas para definir a qu� categor�as se aplica este campo: <br>T�ngase en cuenta que ser�n ignoradas si el par�metro \'�Se aplica este campo a todas las categor�as?\' est� configurado a S�. <ul><li>Si se selecciona una categor�a todas las subcategor�as bajo ella son incluidas autom�ticamente. </li><li>Si no se selecciona ninguna categor�a entonces \'�Se aplica este campo a todas las categor�as?\' se configurar� a S�.</li><li>Seleccionar la categor�a Inicio es lo mismo que seleccionar todas las categor�as.</li></ul>');
define('TEXT_ALL_CATEGORIES_HELP', 'Si no quieres que este campo se aplique a todas las categor�as de la tienda, config�ralo a No y selecciona las categor�as en las que se aplica con las casillas que se mostrar�n.');
define('TEXT_ACTIVATE_NOW_HELP', 'Controla si la informaci�n del campo se mostrar� o no a los clientes en el cat�logo.');
define('TEXT_SHOW_ADMIN_HELP', 'Controla si se puede o no introducir y visualizar la informaci�n del campo durante la introducci�n del producto en el sistema, habiendo configurado el campo como no visible en el cat�logo. Este par�metro permite introducir informaci�n de productos mientras se mantiene esa informaci�n oculta a los clientes que navegan por la parte del cat�logo.<br><br>Esto permite tener campos que almacenan informaci�n de un producto, siendo esa informaci�n �til solamente para la tienda pero no para los clientes. Tambi�n hace posible mantener un campo oculto hasta que la informaci�n de ese campo se haya introducido en todos los productos del cat�logo. Si tanto este par�metro como \'Mostrar campo a los clientes\' se configuran a NO entonces no se pueden introducir datos en el campo. REcuerda que un campo que es visible en el cat�logo es siempre visible tambi�n en el panel de administraci�n.');
define('TEXT_LISTING_HELP', 'Controla si se mostrar� o no el campo como una entrada disponible en la p�gina de B�squeda avanzada del cat�logo. Todos los campos creados con esta contribuci�n podr�n ser buscados por el Criterio de b�squeda siempre que se marque la opci�n de buscar en las descripciones, pero este par�metro permite a los usuarios buscar un valor en un campo espec�fico.');
define('TEXT_TEXT_HELP', 'Una l�nea simple o un �rea de texto determina qu�e tipo de campo de texto se crea en la base de datos. Si se define como l�nea simple en la tabla de descripci�n de productos de la base de datos se crea un campo de tipo VARCHAR utilizando en m�ximo n�mero de caracteres. Si se define como �rea de texto, e crea un campo de tipo TEXT y se ignora el m�ximo n�mero de caracteres. Una vez que se haya creado un campo de texto no se puede cambiar el tipo entre l�nea simple o �rea de texto. Este valor es ignorado si se establece \'Utilizar una lista de valores\' a SI.');
define('TEXT_VALUE_LIST_HELP', 'Determina si la informaci�n para el campo se introduce en un campo de text vac�o est�ndar (si se establece a NO) o como una lista de valores predefinidos (si se establece a S�). Si se elige una lista de valores entonces se ignora el m�ximo n�mero de caracteres ya que a todos los valores de la lista se les permite una longitud m�xima de 64 caracteres.');
define('TEXT_VALUE_LIST_WARNING', ' Una vez que se configure este valor para el nuevo campo extra <b>no se puede cambiar</b>. Un campo de texto debe permanecer como un campo de texto y un campo de lista de valores debe permanecer como una campo de lista de valores. Si te equivocas en este par�metro deber�s eliminar el campo y crear uno nuevo.');
define('TEXT_LIST_TYPE_HELP', 'Selecciona si quieres poder seleccionar un valor individual o m�ltiples valores. Por favor lee el mensaje de advertencia antes de guardar el campo extra de producto.');
define('TEXT_LIST_TYPE_WARNING', 'Los valores para productos para los dos tipos distintos de campos de lista son almacenados en dos formatos totalmente diferentes en la base de datos por lo que una vez que se configure este tipo <b>no se puede cambiar</b>. <br><br>Las listas de valores de selecci�n individual almacenan el valor del producto como un entero que es simplemente un puntero al valor real en el fichero de lista de valores. <br><br>Las listas de valores de selecci�n m�ltiples almacenan el valor del producto en un campo de texto como una serie de punteros separados por un delimitador. Cu�ntos punteros se almacenen depende totalmente de cu�ntos valores se seleccionen para el producto.  <br><br><b>Si te equivocas en este par�metro deber�s eliminar el campo y crear uno nuevo.</b>');
define('TEXT_CHAIN_HELP', 'Esta opci�n se aplica s�lo si �nicamente se puede seleccionar una valor individual de la lista. Las listas de selecci�n m�ltiple no pueden tener valores padre. Por ejemplo, si se cre� un campo para un tipo de producto y uno de los valores para ese campo era <b>Pel�culas</b> entonces se podr�an crear valores bajo Pel�culas como <b>VHS, DVD y BluRay</b>. Si entonces un producto tiene el valor establecido a DVD, con \'Mostrar cadena de valores padre\' habilitado el valor se mostrar�a como <b>Pel�culas : DVD</b>. De otra forma se mostrar�a simplemente como <b>DVD</b>.');
define('TEXT_RESTRICT_HELP', 'La opci�n Restringir listado de productos permite a los usuarios restringir los resultados de un listado de productos en la tienda. POr favor t�ngase en cuenta que las listas de valores de selecci�n m�ltiple no pueden restringir estos listados.');
define('TEXT_SEARCH_HELP','Determina si una lista de valores de selecci�n individual tendr� o no un men� desplegable en la caja de B�squeda r�pida avanzada.');
define('TEXT_CHECKBOX_HELP', 'Establece qu� m�todo usa una lista de valores de selecci�n individual para introducir datos, tanto en la parte de administraci�n como en la p�gina de B�squeda avanzada del cat�logo. Es mejor configurar el men� desplegable para grandes listas de valores.');
define('TEXT_COLUMNS_HELP', 'Determina cu�ntos valores se listan en cada columna durante la entrada de datos cuando se usan <b>botones radio</b> para las listas de valores de selecci�n individual o cuando se usan listas de valores <b>de selecci�n multiple</b> (que siempre utilizan <b>casillas de verificaci�n</b> para la entrada de datos). T�ngase en cuenta que el n�mero final de columnas mostradas puede acabar siendo menos para una lista de valores de selecci�n m�ltiple si la has vinculado a otro campo.');

?>