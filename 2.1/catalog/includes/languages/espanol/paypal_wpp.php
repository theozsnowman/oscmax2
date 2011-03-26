<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
// Copyright 2008 Brian Burton

  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_TITLE', 'Pago directo PayPal');
  define('MODULE_PAYMENT_PAYPAL_EC_TEXT_TITLE', 'Pago expr�s PayPal');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_DESCRIPTION', '<center><b><h2>PayPal Pro para osCommerce 2.2MS2+</h2>Direct Payment & Express Checkout<br><br><i>Desarrollado y mantenido por:</i><br><a href="http://forums.oscommerce.com/index.php?showuser=80233">Brian Burton (dynamoeffects)</a></b></center>');
  define('MODULE_PAYMENT_PAYPAL_DP_ERROR_HEADING', 'Lo sentimos, pero no se pudo procesar la informaci�n de su tarjeta de cr�dito.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CARD_ERROR', 'Los datos de la tarjeta de cr�dito introducidos contienen un error. Por favor rev�selos y pruebe de nuevo.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_FIRSTNAME', 'Nombre en tarjeta de cr�dito:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_LASTNAME', 'Apellidos en tarjeta de cr�dito:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_TYPE', 'Tipo de tarjeta:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_NUMBER', 'N�mero de tarjeta:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_EXPIRES', 'Fecha validez tarjeta:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_CHECKNUMBER', 'C�digo de seguridad de tarjeta:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '�Qu� es esto?');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_START_MONTH', 'Mes inicio Solo/Maestro:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_START_YEAR', 'A�o inicio Solo/Maestro:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_ISSUE_NUMBER', 'C�digo seguridad (issue number) Solo/Maestro:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_CREDIT_CARD_SWITCHSOLO_ONLY', '(necesario s�lo para tarjetas Maestro/Solo)');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_DECLINED', 'Su tarjeta ha sido rechazada. Por favor pruebe con otra tarjeta o contacte con su banco para obtener m�s informaci�n.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_DP_INVALID_RESPONSE', 'Paypal ha devuelto informaci�n no v�lida o incompleta para realizar el pedido. Por favor pruebe de nuevo o seleccione una forma de pago distinta.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_GEN_ERROR', 'Se ha producido un error mientras intent�bamos contactar con los servidores de Paypal.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_ERROR', 'Se ha producido un error mientras intent�bamos procesar la informaci�n de su tarjeta de cr�dito.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_UNVERIFIED', 'Para mantener un alto nivel de seguridad, los clientes que utilizan Pago expr�s deben ser clientes con cuenta en Paypal verificada. Por favor verifique su cuenta en Paypal o elija otra forma de pago.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_BAD_CARD', 'Acepte nuestras disculpas por el inconveniente, pero Paypal s�lo acepta Visa, Master Card, Discover y American Express. Por favor utilice una tarjeta de cr�dito distinta.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_BAD_LOGIN', 'Ha habido un problema validando su cuenta. Por favor pruebe de nuevo.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_JS_CC_OWNER', '* El titular de la tarjeta debe ser de al menos ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_JS_CC_NUMBER', '* El n�mero de tarjeta debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_JS_CC_CVV2', '* Debe introducir el c�digo CVV2 de su tarjeta.\n');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_EC_HEADER', 'Pago r�pido y seguro con PayPal:');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_BUTTON_TEXT', 'Ahorre tiempo. Pague con seguridad.<br>Pague sin compartir sus datos financieros.');
  define('MODULE_PAYMENT_PAYPAL_DP_TEXT_STATE_ERROR', 'La provincia asignada a su cuenta no es v�lida. Por favor vaya a la configuraci�n de su cuenta y c�mbiela.');
  define('MODULE_PAYMENT_PAYPAL_DP_MISSING_XML', '�Instalaci�n de PayPal WPP incompleta! �Deber�a haber un fichero XML en ' . DIR_FS_CATALOG . DIR_WS_INCLUDES . 'paypal_wpp/xml/ !');
  define('MODULE_PAYMENT_PAYPAL_DP_CURL_NOT_INSTALLED', 'cURL, que es requerido por el m�dulo PayPal Website Payments Pro, no est� presente. Por favor p�ngase en contacto con el administrador del alojamiento de su web y p�dale que est� instalado.');
  define('MODULE_PAYMENT_PAYPAL_DP_CERT_NOT_INSTALLED', 'No se ha podido encontrar su certificado de API de Website Payments Pro. Por favor compruebe su localizaci�n en la secci�n de administraci�n.');
  define('MODULE_PAYMENT_PAYPAL_DP_GEN_ERROR', '�Pago no procesado!');
  define('MODULE_PAYMENT_PAYPAL_EC_ALTERNATIVE', '<hr /><p align="center">o puede utilizar</p><hr />');
  define('MODULE_PAYMENT_PAYPAL_DP_BUG_1629', 'La tienda tiene un error en checkout_process.php que impide funcionar a este m�dulo. Por favor consulte la secci�n Troubleshooting en READ_ME.htm que ven�a con el m�dulo para m�s informaci�n.');
  define('MODULE_PAYMENT_PAYPAL_EC_TEXT_DECLINED', 'Se ha rechazado su transacci�n PayPal. Por favor selecciona otra forma de pago.<br><br>');
?>