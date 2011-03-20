<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
// LINE ADDED: MOD - ORDER EDIT
define('TABLE_HEADING_EDIT_ORDERS', 'Para modificar el pedido');

define('HEADING_TITLE', 'Pedidos');
define('HEADING_TITLE_SEARCH', 'N� pedido:');
define('HEADING_TITLE_STATUS', 'Estado:');
//BOF: Orders search by customers info
define('HEADING_TITLE_SEARCH_ALL', 'Buscar (n� pedido, nombre de cliente o empresa):');
//EOF: Orders search by customers info
define('TABLE_HEADING_ORDER_NUM', 'N�');
define('TABLE_HEADING_COMMENTS', 'Comentarios');
define('TABLE_HEADING_NEW_COMMENTS', 'A�adir comentario nuevo');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_ORDER_TOTAL', 'Total pedido');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha de compra');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TABLE_HEADING_QUANTITY', 'Cant.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Referencia');
define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_TAX', 'Impuestos');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Precio (sin imp.)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Precio (imp. inc.)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (sin imp.)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (imp. inc.)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente notificado');
define('TABLE_HEADING_DATE_ADDED', 'A�adido el');

define('ENTRY_CUSTOMER', 'Cliente:');
define('ENTRY_SOLD_TO', 'VENDIDO A:');
define('ENTRY_DELIVERY_TO', 'Entregar a:');
define('ENTRY_SHIP_TO', 'ENVIAR A:');
define('ENTRY_SHIPPING_ADDRESS', 'Direcci�n de env�o:');
define('ENTRY_BILLING_ADDRESS', 'Direcci�n de facturaci�n:');
define('ENTRY_PAYMENT_METHOD', 'Forma de pago:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo tarjeta cr�dito:');
define('ENTRY_CREDIT_CARD_OWNER', 'Titular tarjeta cr�dito:');
define('ENTRY_CREDIT_CARD_NUMBER', 'N�mero tarjeta cr�dito:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Caducidad tarjeta cr�dito:');
define('ENTRY_SUB_TOTAL', 'Subtotal:');
define('ENTRY_TAX', 'Impuestos:');
define('ENTRY_SHIPPING', 'Gastos de env�o:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Fecha de compra:');
define('ENTRY_STATUS', 'Estado:');
define('ENTRY_DATE_LAST_UPDATED', '�ltima modificaci�n:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notificar cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'A�adir comentarios:');
define('ENTRY_PRINTABLE', 'Imprimir factura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Eliminar pedido');
define('TEXT_INFO_DELETE_INTRO', '�Seguro que quieres eliminar este pedido?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Devolver cantidades de producto al almac�n');
define('TEXT_DATE_ORDER_CREATED', 'Fecha de creaci�n:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', '�ltima modificaci�n:');
define('TEXT_INFO_PAYMENT_METHOD', 'Forma de pago:');

define('TEXT_ALL_ORDERS', 'Todos los pedidos');
define('TEXT_NO_ORDER_HISTORY', 'No hay historial de pedido');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Actualizaci�n del pedido');
define('EMAIL_TEXT_ORDER_NUMBER', 'N�mero de pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Detalles del pedido:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha del pedido:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Su pedido ha sido actualizado al siguiente estado.' . "\n\n" . 'Nuevo estado: %s' . "\n\n" . 'Por favor responda a este email si tiene alguna pregunta.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Los comentarios sobre su pedido son' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: No existe pedido.');
define('SUCCESS_ORDER_UPDATED', 'Correcto: Pedido actualizado correctamente.');
define('WARNING_ORDER_NOT_UPDATED', 'Advertencia: No se ha actualizado el pedido, no hab�a nada que actualizar.');

define('HEADING_CANNED_COMMENTS_HELP', 'Ayuda comentarios predefinidos');
define('TEXT_CANNED_COMMENTS_HELP', 'Para crear comentarios predefinidos nuevos tienes que ir al men� <b>Localizaci�n --> Comentarios predefinidos</b> y sequir las instrucciones. Si necesitas m�s ayuda puedes leer el <b>Wiki</b>.');

define('TABLE_HEADING_AUTHOR', 'Autor');
define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Comentarios del cliente');
define('TEXT_ACTIVE', 'Activo');
define('TABLE_HEADING_ORDER_COMMENTS', 'Comentarios del pedido');
define('TABLE_HEADING_NEW_ORDER_COMMENTS', 'A�adir nuevo comentario al pedido');
define('TEXT_ORDER_SUMMARY', 'Resumen pedido');

define('TEXT_ORDER_ID', 'N� pedido:');
define('TEXT_ORDER_DATE_TIME', 'Fecha y hora del pedido');

define('OPTION_SELECT_COMMENT', 'Selecciona un comentario ...');
define('OPTION_NAME_OF_CUSTOMER', 'Nombre cliente');
?>