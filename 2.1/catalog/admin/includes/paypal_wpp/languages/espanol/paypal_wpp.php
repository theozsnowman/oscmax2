<?php
/*
$Id: paypal_wpp.php 1287 2011-03-26 09:12:50Z cottonbarn $

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
// Copyright 2008 Brian Burton

  include(DIR_FS_CATALOG_LANGUAGES . $language . '/paypal_wpp.php');
  define('TABLE_HEADING_TRANSACTION_INFO', 'Detalles de transacci�n');
  define('WPP_ERROR_NO_TRANS_ID', 'No se ha encontrado un ID de transacci�n v�lida.');
  define('WPP_ERROR_BAD_CURRENCY', 'No se ha introducido una moneda v�lida.');
  define('WPP_ERROR_SELECT_REFUND_TYPE', 'Selecciona un tipo de reembolseo: completo o parcial.');
  define('WPP_ERROR_FULL_MISSING_AMOUNT', 'Para realizar un reembolso completo, introduce el total de todo el pedido.');
  define('WPP_ERROR_INVALID_REFUND_AMOUNT', 'Introduce un importe v�lido para reembolsar.');
  define('WPP_ERROR_REFUND_FAILED_BECAUSE', 'Ha fallado el reembolso a causa de los siguientes motivos:');
  define('WPP_SUCCESS_REFUND', '�Se ha reembolsado al cliente correctamente!');
  define('WPP_ERROR_INVALID_CHARGE_AMOUNT', 'Introduce un importe v�lido para realizar un cargo.');
  define('WPP_ERROR_INCOMPLETE_CARDHOLDER_NAME', 'Introduce el nombre completo del titular de la tarjeta tal y como aparece en la tarjeta.');
  define('WPP_ERROR_CHARGE_FAILED_BECAUSE', 'No se ha podido completar el cargo a causa de los siguientes motivos:');
  define('WPP_SUCCESS_CHARGE', '�La transacci�n se ha completado correctamente!');
  define('WPP_SUCCESS_CAPTURE', '�La transacci�n se ha capturado correctamente!');
  define('WPP_CHARGE_NAME', 'Cuota de servicio al cliente');
  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'La fecha de validez de la tarjeta introducida no es v�lida. Por favor, comprueba los datos e int�ntalo de nuevo.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'El n�mero de tarjeta introducido no es v�lido. Por favor, comprueba el n�mero e int�ntalo de nuevo.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Los primeros cuatro d�gitos del n�mero introducido son: %s. Si ese n�mero es correcto, No aceptamos ese tipo de tarjeta de cr�dito. Si es incorrecto, int�ntalo de nuevo.');
  define('WPP_TRANSACTION', 'Transacci�n:');
  define('WPP_REFUND_TYPE', 'Tipo de reembolso:');
  define('WPP_AMOUNT_OPTIONAL', '(s�lo se requiere para importes parciales)');
  define('WPP_REFUND_ISSUED', 'reembolso emitido por importe de');
  define('WPP_FULL_REFUND_ISSUED', 'reembolso emitido');
  define('WPP_CHARGE_ISSUED', 'Cargo emitido por importe de');
  define('WPP_CAPTURE_ISSUED', 'Captura emitida por importe de');
  define('WPP_AMOUNT_TO_CHARGE', 'Importe a cargar:');
  define('WPP_FIRST_NAME', 'Nombre en tarjeta:');
  define('WPP_LAST_NAME', 'Apellido en tarjeta:');
  define('WPP_CC_TYPE', 'Tipo tarjeta:');
  define('WPP_CC_NUMBER', 'N�mero tarjeta:');
  define('WPP_CC_EXPIRATION_DATE', 'Fecha validez:');
  define('WPP_CC_CVV2', 'N�mero CVV2:');
  define('WPP_COMMENTS', 'Comentarios: (opcional)');
  define('WPP_CHARGE_SUBMIT', 'Cargar a tarjeta');
  define('WPP_REFUND_PARTIAL', 'Parcial');
  define('WPP_REFUND_FULL', 'Completo');
  define('WPP_REFUND_AMOUNT', 'Importe reembolso:');
  define('WPP_CAPTURE_AMOUNT', 'Importe captura:');
  define('WPP_CHARGE_AMOUNT', 'Importe cargo:');
  define('WPP_SUBMIT_REFUND', 'Reembolsar');
  define('WPP_SUBMIT_CAPTURE', 'Capturar');
  define('WPP_REFUND_TITLE', 'PayPal Pro - Emitir reembolso');
  define('WPP_CHARGE_TITLE', 'PayPal Pro - A�adir cargo');
  define('WPP_CANCEL', 'Cancelar');
  define('WPP_ORDER_STATUS', 'Estado pedido:');
  define('WPP_CAPTURE_TITLE', 'PayPal Pro - Capturar fondos');
  define('WPP_ERROR_NO_SSL', 'Debes acceder a la secci�n de administraci�n a trav�s de HTTPS antes de que puedas utilizar las caracter�sticas avanzadas de PayPal Pro.');
  define('WPP_ERROR_COUNTRY_NOT_FOUND', 'No se ha podido determinar el pa�s del usuario. La operaci�n ha fallado.');
?>