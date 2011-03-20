<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

	define('HEADING_TITLE','Opciones para env�o por FedEx');
	define('IMAGE_SUBMIT','Enviar');
	define('ORDER_HISTORY_DELIVERED','Env�o programado, n�mero de seguimiento ');
	define('ORDER_HISTORY_CANCELLED','Env�o cancelado');
	define('NO_ORDER_NUMBER_ERROR','�No se ha especificado un n�mero de pedido!');
	define('ERROR_FEDEX_QUOTES_NOT_INSTALLED','No se ha podido encontrar un n�mero de cuenta FedEx. �Est� instalado y configurado FedEx RealTime Quotes?');
	define('SHIPMENT_REQUEST_DATA','Informaci�n solicitud env�o, n�mero de paquete ');
	define('MANIFEST_DATA','Informaci�n lista de carga, n�mero de paquete ');
	define('RUNNING_IN_DEBUG','Ejecut�ndose en modo depuraci�n de errores, no se ha hecho solicitud de env�o');
	define('ERROR_NO_ORDER_SPECIFIED','ERROR: �No se ha especificado un pedido!');
	define('ORDER_NUMBER','N�mero de pedido ');
	define('COULD_NOT_DELETE_ENTRIES','No se ha podido eliminar entradas de la lista de carga.');
	define('ERROR','ERROR: ');
	define('ENTER_PACKAGE_WEIGHT','Se debe especificar el peso del paquete.');
	define('ENTER_NUMBER_PACKAGES','Se debe especificar el n�mero de paquetes.');

	define('EMAIL_SEPARATOR', '------------------------------------------------------');
    define('EMAIL_TEXT_SUBJECT', 'Actualizaci�n del pedido');
    define('EMAIL_TEXT_ORDER_NUMBER', 'N�mero de pedido:');
    define('EMAIL_TEXT_INVOICE_URL', 'Detalles del pedido:');
    define('EMAIL_TEXT_DATE_ORDERED', 'Fecha del pedido:');
    define('EMAIL_TEXT_STATUS_UPDATE', 'El estado de su pedido es ' . '%s' . "\n\n" . 'Por favor conteste a este e-mail si tiene alguna pregunta.' . "\n");
    define('EMAIL_TEXT_COMMENTS_UPDATE', 'Comentarios: ' . "%s\n");
    define('EMAIL_TEXT_TRACKING_NUMBER', 'Puede hacer un seguimiento de su paquete pulsando el enlace a continuaci�n.');
    define('URL_TO_TRACK1', 'http://www.fedex.com/cgi-bin/tracking?action=track&tracknumbers=');
		
// form field titles
	define('NUMBER_OF_PACKAGES','N�mero de paquetes:');
	define('OVERSIZED','�Se ha pasado de tama�o?');
	define('PACKAGING_TYPE','Tipo de paquete ("other" para env�os por tierra):');
	define('TYPE_OF_SERVICE','Tipo de servicio:');
	define('PAYMENT_TYPE','Tipo de pago:');
	define('DROPOFF_TYPE','Tipo de entrega:');
	define('PICKUP_DATE','Fecha de recogida (yyyymmdd):');

	define('TOTAL_WEIGHT','Peso total de todos los paquetes:');
	define('PACKAGE_WEIGHT','Peso del paquete:');
	
?>