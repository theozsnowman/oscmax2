<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
  
*/
// EXAMPLE TO MAKE REQUIRED VISIBLE
// define('ENTRY_STREET_ADDRESS_TEXT', '&nbsp;<small><font color="#AABBDD">required</font></small>');

// ### END ORDER MAKER ###
// pull down default text
define('PULL_DOWN_DEFAULT', 'Por favor selecciona');
define('TYPE_BELOW', 'Escribe a continuaci�n');

define('JS_ERROR', '�Se han producido errores al procesar tu formulario!\nPor favor realiza las siguientes correcciones:\n\n');

define('JS_GENDER', '* Debe especificar el \'Sexo\'.\n');
define('JS_FIRST_NAME', '* El campo \'Nombre\' debe tener al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* El campo \'Apellidos\' debe tener al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* El campo \'Fecha de nacimiento\' debe tener el formato: xx/xx/xxxx (d�a/mes/a�o).\n');
define('JS_EMAIL_ADDRESS', '* El campo \'Direcci�n e-mail\' debe tener al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_ADDRESS', '* El campo \'Direcci�n\' debe tener al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* El campo \'C�digo postal\' debe tener al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* El campo \'Poblaci�n\' debe tener al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* Debe seleccionar \'Provincia\'.\n');
define('JS_STATE_SELECT', '-- Seleccionar arriba --');
define('JS_ZONE', '* Debe seleccionar \'Provincia\' de la lista de este pa�s.\n');
define('JS_COUNTRY', '* Debe seleccionar \'Pa�s\'.\n');
define('JS_TELEPHONE', '* El campo \'Tel�fono\' debe tener al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.\n');
define('JS_PASSWORD', '* Los campos \'Contrase�a\' y \'Confirmaci�n\' deben coincidir y tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.\n');

define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Direcci�n');
define('CATEGORY_CONTACT', 'Contacto');
define('CATEGORY_OPTIONS', 'Opciones');
define('CATEGORY_PASSWORD', 'Contrase�a');
define('CATEGORY_CORRECT', 'Si este es el cliente correcto, pulsa el bot�n Confirmar m�s abajo.');
define('ENTRY_CUSTOMERS_ID', 'ID:');
define('ENTRY_CUSTOMERS_ID_TEXT', '&nbsp;');
define('ENTRY_COMPANY', 'Empresa:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Sexo:');
define('ENTRY_GENDER_FEMALE', 'Mujer:');
define('ENTRY_GENDER_MALE', 'Hombre:');
define('ENTRY_GENDER_ERROR', '&nbsp;');
define('ENTRY_GENDER_TEXT', '&nbsp;');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<small><font color="#FF0000">m�n. ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres</font></small>');
define('ENTRY_FIRST_NAME_TEXT', '&nbsp;');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<small><font color="#FF0000">m�n. ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres</font></small>');
define('ENTRY_LAST_NAME_TEXT', '&nbsp;');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<small><font color="#FF0000">(p.ej. 21/05/1970)</font></small>');
define('ENTRY_DATE_OF_BIRTH_TEXT', '&nbsp;<small>(p.ej. 21/05/1970) ');
define('ENTRY_EMAIL_ADDRESS', 'Direcci�n e-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<small><font color="#FF0000">m�n. ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres</font></small>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<small><font color="#FF0000">�Esa direcci�n e-mail no parece ser v�lida!</font></small>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<small><font color="#FF0000">�Esta direcci�n e-mail ya existe!</font></small>');
define('ENTRY_EMAIL_ADDRESS_TEXT', '&nbsp;');
define('ENTRY_STREET_ADDRESS', 'Direcci�n:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<small><font color="#FF0000">m�n. ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres</font></small>');
define('ENTRY_STREET_ADDRESS_TEXT', '&nbsp;');
define('ENTRY_SUBURB', 'L�nea 2 de direcci�n:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'C�digo postal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<small><font color="#FF0000">m�n. ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres</font></small>');
define('ENTRY_POST_CODE_TEXT', '&nbsp;');
define('ENTRY_CITY', 'Poblaci�n:');
define('ENTRY_CITY_ERROR', '&nbsp;<small><font color="#FF0000">m�n. ' . ENTRY_CITY_MIN_LENGTH . ' caracteres</font></small>');
define('ENTRY_CITY_TEXT', '&nbsp;');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', '&nbsp;');
define('ENTRY_STATE_TEXT', '&nbsp;');
define('ENTRY_COUNTRY', 'Pa�s:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_COUNTRY_TEXT', '&nbsp;');
define('ENTRY_TELEPHONE_NUMBER', 'Tel�fono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<small><font color="#FF0000">m�n. ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres</font></small>');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '&nbsp;');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Bolet�n de noticias:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Suscrito');
define('ENTRY_NEWSLETTER_NO', 'No suscrito');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Contrase�a:');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmaci�n contrase�a:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '&nbsp;');
define('ENTRY_PASSWORD_ERROR', '&nbsp;<small><font color="#FF0000">m�n. ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres</font></small>');
define('ENTRY_PASSWORD_TEXT', '&nbsp;');
define('PASSWORD_HIDDEN', '--OCULTO--');
// ### END ORDER MAKER ###
define('CREATE_ORDER_TEXT_EXISTING_CUST', 'Cuenta de cliente existente');
define('CREATE_ORDER_TEXT_NEW_CUST', 'Nueva cuenta de cliente');
define('CREATE_ORDER_TEXT_NO_CUST', 'Sin cuenta de cliente');

define('HEADING_TITLE', 'Nuevo pedido');
define('TEXT_SELECT_CUST', '- Selecciona un cliente -'); 
 
define('TEXT_SELECT_CURRENCY', '- Selecciona una moneda -');
define('TEXT_SELECT_CURRENCY_TITLE', 'Selecciona una moneda');
define('BUTTON_TEXT_SELECT_CUST', 'Selecciona un cliente:'); 
define('TEXT_OR_BY', 'o selecci�nalo por ID cliente:'); 
define('TEXT_STEP_1', 'Elige un cliente para rellenar autom�ticamente el formulario o introduce los datos de tu elecci�n.');
define('TEXT_STEP_2', 'Paso 2 - Confirma los datos de cliente existente o introduce nuevos datos de cliente/env�o/facturaci�n.');
define('BUTTON_SUBMIT', 'Selecciona');
define('ENTRY_CURRENCY','Moneda: ');
define('ENTRY_ADMIN','Pedido introducido por:');
define('TEXT_CS','Servicio de atenci�n al cliente');

define('ACCOUNT_EXTRAS','Extras cuenta');
define('ENTRY_ACCOUNT_PASSWORD','Contrase�a');
define('ENTRY_NEWSLETTER_SUBSCRIBE','Bolet�n de noticias');
define('ENTRY_ACCOUNT_PASSWORD_TEXT','');
define('ENTRY_NEWSLETTER_SUBSCRIBE_TEXT','1 = suscrito, or 0 (cero) = no suscrito.');
define('CATEGORY_ORDER_DETAILS', 'Elige moneda:');
define('TEXT_CREATE_ORDER', 'Generar pedido');

define('IMAGE_BUTTON_CONFIRM', 'Confirmar');
?>