<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('TOP_BAR_TITLE', 'Estad�sticas');
define('HEADING_TITLE', 'Vales descuento');
define('HEADING_TITLE_STATUS', 'Estado : ');
define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_COUPON', 'Nombre del vale');
define('TEXT_COUPON_ALL', 'Todos los vales');
define('TEXT_COUPON_ACTIVE', 'Vales activos');
define('TEXT_COUPON_INACTIVE', 'Vales inactivos');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_FROM', 'De:');
define('TEXT_FREE_SHIPPING', 'Gastos de env�o gratuitos');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_SELECT_CUSTOMER', 'Seleecciona cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Para todos los suscritos al bolet�n');
define('TEXT_CONFIRM_DELETE', '�Est�s seguro que quieres eliminar este vale?');

define('TEXT_TO_REDEEM', 'Puede canjar este vale durante la realizaci�n del pedido. Simplemente introduzca el c�digo en el campo que se mostrar�, y pulse el bot�n canjear.');
define('TEXT_IN_CASE', ' en el caso que tenga alg�n problema. ');
define('TEXT_VOUCHER_IS', 'El c�digo del vale es ');
define('TEXT_REMEMBER', 'No pierda el c�digo del vale, aseg�rese de mantenerlo seguro para que pueda beneficiarse de esta promoci�n especial.');
define('TEXT_VISIT', 'cuando visite ' . HTTP_SERVER . DIR_WS_CATALOG);
define('TEXT_ENTER_CODE', ' e introduzca el c�digo ');

define('TABLE_HEADING_ACTION', 'Acci�n');



define('NOTICE_EMAIL_SENT_TO', 'Nota: E-mail enviado a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No se ha seleccionado ning�n cliente.');
define('COUPON_NAME', 'Nombre del vale');
//define('COUPON_VALUE', 'Coupon Value');
define('COUPON_AMOUNT', 'Importe del vale');
define('COUPON_CODE', 'C�digo del vale');
define('COUPON_STARTDATE', 'Fecha de inicio');
define('COUPON_FINISHDATE', 'Fecha de final');
define('COUPON_FREE_SHIP', 'Gastos de env�o gratuitos');
define('COUPON_DESC', 'Descripci�n del vale');
define('COUPON_MIN_ORDER', 'Pedido m�nimo');
define('COUPON_USES_COUPON', 'Usos por vale');
define('COUPON_USES_USER', 'Usos por cliente');
define('COUPON_PRODUCTS', 'Productos v�lidos');
define('COUPON_CATEGORIES', 'Categor�as v�lidas');
define('VOUCHER_NUMBER_USED', 'N�mero veces usado');
define('DATE_CREATED', 'Fecha creaci�n');
define('DATE_MODIFIED', 'Fecha modificaci�n');
define('TEXT_HEADING_NEW_COUPON', 'Crear nuevo vale');
define('TEXT_NEW_INTRO', 'Por favor rellena la siguiente informaci�n para el nuevo vale.<br>');


define('COUPON_NAME_HELP', 'Un nombre corto para el vale');
define('COUPON_AMOUNT_HELP', 'El importe de descuento del vale, ya sea un valor fijo o a�adiendo % al final para representar un porcentaje de descuento.');
define('COUPON_CODE_HELP', 'Puedes introducir aqu� tu propio c�digo, o dejarlo en blanco para asignarle uno generado autom�ticamente.');
define('COUPON_STARTDATE_HELP', 'La fecha a partir de la cual el vale ser� v�lido');
define('COUPON_FINISHDATE_HELP', 'La fecha en la que caduca el vale');
define('COUPON_FREE_SHIP_HELP', 'El vale otorga gastos de env�o gratuitos en un pedido. Nota: esto anula el valor \'Importe del vale\' pero respeta el valor de pedido m�nimo');
define('COUPON_DESC_HELP', 'Una descripci�n del vale para el cliente');
define('COUPON_MIN_ORDER_HELP', 'El importe m�nimo de un pedido para que se pueda usar el vale');
define('COUPON_USES_COUPON_HELP', 'El m�ximo n�mero de veces que un vale puede ser usado, d�jalo en blanco si quieres que no haya l�mite.');
define('COUPON_USES_USER_HELP', 'N�mero de veces que un usuario puede utilizar el vlae, d�jalo en blanco si quieres que no haya l�mite.');
define('COUPON_PRODUCTS_HELP', 'Una lista separada por comas de ids de producto(product_ids) con los que se puede usar este vale. D�jalo en blanco si quieres que se pueda utilizar para todos los productos.');
define('COUPON_CATEGORIES_HELP', 'Una lista separada por comas de las categor�as(cpaths) en las que se puede usar este vale, D�jalo en blanco si quieres que se pueda utilizar en todas las categor�as.');
?>