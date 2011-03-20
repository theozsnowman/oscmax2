<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Editar pedido n�%s con fecha %s');
define('ADDING_TITLE', 'A�adiendo producto(s) al pedido  #%s');

define('ENTRY_UPDATE_TO_CC', '(Actualizar ' . ORDER_EDITOR_CREDIT_CARD . ' para ver datos de tarjeta de cr�dito.)');
define('TABLE_HEADING_COMMENTS', 'Comentarios');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_NEW_STATUS', 'Nuevo estado');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TABLE_HEADING_DELETE', '�Eliminar?');
define('TABLE_HEADING_QUANTITY', 'Cant.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Referencia');
define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_TAX', 'Impuestos');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_BASE_PRICE', 'Precio<br>(base)');
define('TABLE_HEADING_UNIT_PRICE', 'Precio<br>(sin imp.)');
define('TABLE_HEADING_UNIT_PRICE_TAXED', 'Precio<br>(imp. incl.)');
define('TABLE_HEADING_TOTAL_PRICE', 'Total<br>(sin imp.)');
define('TABLE_HEADING_TOTAL_PRICE_TAXED', 'Total<br>(imp. incl.)');
define('TABLE_HEADING_OT_TOTALS', 'Totales del pedido:');
define('TABLE_HEADING_OT_VALUES', 'Valor:');
define('TABLE_HEADING_SHIPPING_QUOTES', 'Formas de env�o:');
define('TABLE_HEADING_NO_SHIPPING_QUOTES', '�No hay formas de env�o para mostrar!');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente notificado');
define('TABLE_HEADING_DATE_ADDED', 'Fecha a�adido');

define('ENTRY_CUSTOMER', 'Cliente');
define('ENTRY_NAME', 'Nombre:');
define('ENTRY_CITY_STATE', 'Poblaci�n, provincia:');
define('ENTRY_SHIPPING_ADDRESS', 'Direcci�n de env�o');
define('ENTRY_BILLING_ADDRESS', 'Direcci�n de facturaci�n');
define('ENTRY_PAYMENT_METHOD', 'Forma de pago:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo de tarjeta:');
define('ENTRY_CREDIT_CARD_OWNER', 'Titular de la tarjeta:');
define('ENTRY_CREDIT_CARD_NUMBER', 'N�mero de tarjeta:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Caducidad tarjeta:');
define('ENTRY_SUB_TOTAL', 'Subtotal:');
define('ENTRY_TYPE_BELOW', 'Escriba a continuaci�n');

//the definition of ENTRY_TAX is important when dealing with certain tax components and scenarios
define('ENTRY_TAX', 'Impuestos');
//do not use a colon (:) in the defintion, ie 'VAT' is ok, but 'VAT:' is not

define('ENTRY_SHIPPING', 'Env�o:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_STATUS', 'Estado:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notificar al cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'Enviar comentarios:');
define('ENTRY_CURRENCY_TYPE', 'Moneda');
define('ENTRY_CURRENCY_VALUE', 'Valor de moneda');

define('TEXT_INFO_PAYMENT_METHOD', 'Forma de pago:');
define('TEXT_NO_ORDER_PRODUCTS', 'Este pedido no contiene ning�n producto');
define('TEXT_ADD_NEW_PRODUCT', 'A�adir productos');
define('TEXT_PACKAGE_WEIGHT_COUNT', 'Peso del paquete: %s  |  Cantidad de productos: %s');

define('TEXT_STEP_1', '<b>Paso 1:</b>');
define('TEXT_STEP_2', '<b>Paso 2:</b>');
define('TEXT_STEP_3', '<b>Paso 3:</b>');
define('TEXT_STEP_4', '<b>Paso 4:</b>');
define('TEXT_SELECT_CATEGORY', '- Selecciona una categor�a de la lista -');
define('TEXT_PRODUCT_SEARCH', '<b>- O introduce un t�rmino de b�squeda a continuaci�n -</b>');
define('TEXT_ALL_CATEGORIES', 'Todas las categor�as/Todos los productos');
define('TEXT_SELECT_PRODUCT', '- Selecciona un producto -');
define('TEXT_BUTTON_SELECT_OPTIONS', 'Selecciona estas opciones');
define('TEXT_BUTTON_SELECT_CATEGORY', 'Selecciona esta categor�a');
define('TEXT_BUTTON_SELECT_PRODUCT', 'Selecciona este producto');
define('TEXT_SKIP_NO_OPTIONS', '<em>No hay opciones - Omitido...</em>');
define('TEXT_QUANTITY', 'Cantidad:');
define('TEXT_BUTTON_ADD_PRODUCT', 'A�adir al pedido');
define('TEXT_CLOSE_POPUP', '<u>Cerrar</u> [x]');
define('TEXT_ADD_PRODUCT_INSTRUCTIONS', 'Sigue a�adiendo productos hasta que hayas finalizado.<br>Despu�s cierra esta pesta�a/ventana, vuelve a la pesta�a/ventana principal, y pulsa el bot�n "Actualizar".');
define('TEXT_PRODUCT_NOT_FOUND', '<b>Producto no encontrado<b>');
define('TEXT_SHIPPING_SAME_AS_BILLING', 'Direcci�n de env�o igual que la de facturaci�n');
define('TEXT_BILLING_SAME_AS_CUSTOMER', 'Direcci�n de facturaci�n igual que la del cliente');

define('IMAGE_ADD_NEW_OT', 'Inserte un nuevo concepto despu�s de este');
define('IMAGE_REMOVE_NEW_OT', 'Quitar este concepto');
define('IMAGE_NEW_ORDER_EMAIL', 'Enviar por e-mail una nueva confirmaci�n del pedido');

define('TEXT_NO_ORDER_HISTORY', 'No existe el historial del pedido');

define('PLEASE_SELECT', 'Por favor selecciona');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Su pedido ha sido actualizado');
define('EMAIL_TEXT_ORDER_NUMBER', 'N�mero de pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Detalles del pedido:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha de pedido:');
define('EMAIL_TEXT_STATUS_UPDATE', '�Muchas gracias por su pedido!' . "\n\n" . 'El estado de su pedido ha sido actualizado.' . "\n\n" . 'Nuevo estado: %s' . "\n\n");
define('EMAIL_TEXT_STATUS_UPDATE2', 'Si tiene cualquier pregunta, por favor responda a este correo.' . "\n\n" . 'Reciba un cordial saludo de sus amigos de ' . STORE_NAME . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Estos son los comentarios sobre su pedido:' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: No existe el pedido %s.');
define('ERROR_NO_ORDER_SELECTED', 'No has seleccionado un pedido para editar, o no se ha establecido la variable ID del pedido.');
define('SUCCESS_ORDER_UPDATED', 'Correcto: El pedido ha sido actualizado correctamente.');
define('SUCCESS_EMAIL_SENT', 'Completado: El pedido ha sido actualizado y se ha enviado un e-mail con la nueva informaci�n.');

//the hints
define('HINT_UPDATE_TO_CC', 'Si estableces la forma de pago a ' . ORDER_EDITOR_CREDIT_CARD . ' se mostrar�n autom�ticamente los campos de tarjeta de cr�dito, que permanecen ocultos mientras est� seleccionado otra forma de pago. El nombre de la forma de pago que hace que al seleccionarse se muestren los campos de tarjeta de cr�dito se puede configurar en el �rea de Editor de pedidos de la secci�n Configuraci�n del Panel de administraci�n.');
define('HINT_UPDATE_CURRENCY', 'Cambiar la moneda har� que se recalculen las tarifas de env�o y los totales del pedido.');
define('HINT_SHIPPING_ADDRESS', 'Si cambias la provincia, c�digo postal o pa�s de env�o se te dar� la opci�n de recalcular o no los totales y recargar las tarifas de env�o.');
define('HINT_TOTALS', 'Puedes otorgar descuentos introduciendo vaores negativos. El subtotal, impuestos y total no son editables. Cuando a�adas conceptos v�a AJAX aseg�rate de introducir primero el nombre o el programa no reconocer� la entrada (es decir, un concepto con un nombre en blanco ser� eliminado del pedido).');
define('HINT_PRESS_UPDATE', 'Por favor pulsa en "Actualizar" para guardar todos los cambios.');
define('HINT_BASE_PRICE', 'Precio (base) es el precio del producto sin considerar los atributos del producto (es decir, el precio en cat�logo)');
define('HINT_PRICE_EXCL', 'Precio (sin imp.) es el precio base m�s los precios de atributos que puedan existir');
define('HINT_PRICE_INCL', 'Precio (imp. incl.) es Precio (sin imp.) sum�ndole impuestos');
define('HINT_TOTAL_EXCL', 'Total (sin imp.) es Precio (sin imp.) multiplicado por cant.');
define('HINT_TOTAL_INCL', 'Total (imp. incl.) es Precio (sin imp.) sum�ndole impuestos y multiplicado por cant.');
//end hints

//new order confirmation email- this is a separate email from order status update
define('ENTRY_SEND_NEW_ORDER_CONFIRMATION', 'Nueva confirmaci�n de pedido:');
define('EMAIL_TEXT_DATE_MODIFIED', 'Fecha modificado:');
define('EMAIL_TEXT_PRODUCTS', 'Productos');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Direcci�n de entrega');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Direcci�n de facturaci�n');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Forma de pago');
// If you want to include extra payment information, enter text below (use <br> for line breaks):
//define('EMAIL_TEXT_PAYMENT_INFO', ''); //why would this be useful???
// If you want to include footer text, enter text below (use <br> for line breaks):
define('EMAIL_TEXT_FOOTER', '');
//end email

//add-on for downloads
define('ENTRY_DOWNLOAD_COUNT', 'Descargar #');
define('ENTRY_DOWNLOAD_FILENAME', 'Nombre fichero');
define('ENTRY_DOWNLOAD_MAXDAYS', 'D�as de validez');
define('ENTRY_DOWNLOAD_MAXCOUNT', 'Descargas restantes');

//add-on for Ajax
define('AJAX_CONFIRM_PRODUCT_DELETE', '�Est�s seguro que quieres quitar este producto del pedido?');
define('AJAX_CONFIRM_COMMENT_DELETE', '�Est�s seguro que quieres eliminar este comentario del historial de estados del pedido?');
define('AJAX_MESSAGE_STACK_SUCCESS', '�Correcto! \' + %s + \' ha sido actualizado!');
define('AJAX_CONFIRM_RELOAD_TOTALS', 'Has cambiado alg�n dato de env�o. �Quieres recalcular los totales del pedido y las tarifas de env�o?');
define('AJAX_CANNOT_CREATE_XMLHTTP', 'No se puede crear una instancia XMLHTTP');
define('AJAX_SUBMIT_COMMENT', 'Enviar nuevos comentarios y/o estado');
define('AJAX_NO_QUOTES', 'No hay formas de env�o para mostrar.');
define('AJAX_SELECTED_NO_SHIPPING', 'Has seleccionado una forma de env�o para este pedido pero parece que no hay ya una almacenada en la base de datos. �Te gustar�a a�adir este gasto de env�o al pedido?');
define('AJAX_RELOAD_TOTALS', 'El nuevo concepto de env�o ha sido almacenado en la base de datos pero no se han recalculado los totales todav�a. Pulsa ok ahora para recalcular los totales del pedido. Si tu conexi�n es lenta espera a que se carguen todos los datos antes de pulsar ok.');
define('AJAX_NEW_ORDER_EMAIL', '�Est�s seguro que quieres enviar un e-mail de nueva confirmaci�n para este pedido?');
define('AJAX_INPUT_NEW_EMAIL_COMMENTS', 'Introduce los comentarios. Se puede dejar esto en blanco si no quieres incluir ninguno. Por favor recuerda mientras escribas que pulsar la tecla "Enter" provocar� el env�o del comentario tal como est�. No es posible a�n introducir saltos de l�nea.');
define('AJAX_SUCCESS_EMAIL_SENT', '�Correcto! Se ha enviado un e-mail de nueva confirmaci�n de pedido a %s');
define('AJAX_WORKING', 'En proceso, por favor espera....');
?>