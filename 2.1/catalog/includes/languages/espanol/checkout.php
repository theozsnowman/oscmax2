<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
/*
  One Page Checkout, Version: 1.08

  I.T. Web Experts
  http://www.itwebexperts.com

  Copyright (c) 2009 I.T. Web Experts
*/

define('NAVBAR_TITLE', 'Realizar pedido');
define('NAVBAR_TITLE_1', 'Realizar pedido');

define('HEADING_TITLE', 'Realizar pedido');

define('TABLE_HEADING_SHIPPING_ADDRESS', 'Direcci�n de entrega');
define('TABLE_HEADING_BILLING_ADDRESS', 'Direcci�n de facturaci�n');

define('TABLE_HEADING_PRODUCTS_MODEL', 'Modelo del producto');
define('TABLE_HEADING_PRODUCTS_NAME', 'Nombre del producto');
define('TABLE_HEADING_PRODUCTS_QTY', 'Cantidad');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Precio ud.');
define('TABLE_HEADING_PRODUCTS_FINAL_PRICE', 'Precio total');
define('TABLE_HEADING_PRODUCTS_REMOVE_ITEM', 'Quitar producto');

define('TABLE_HEADING_PRODUCTS', 'Carrito de la compra');
define('TABLE_HEADING_TAX', 'Impuestos');
define('TABLE_HEADING_TOTAL', 'Total');

define('ENTRY_TELEPHONE', 'Tel�fono: ');

define('TEXT_CHOOSE_SHIPPING_DESTINATION', 'Por favor, seleccione la direcci�n de su agenda de direcciones donde le gustar�a recibir el pedido.');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Por favor, seleccionede la direcci�n de su agenda de direcciones donde le gustar�a que le envi�ramos la factura.');

define('TITLE_SHIPPING_ADDRESS', 'Direcci�n de entrega:');
define('TITLE_BILLING_ADDRESS', 'Direcci�n de facturaci�n:');

define('TABLE_HEADING_SHIPPING_METHOD', 'Forma de env�o');
define('TABLE_HEADING_PAYMENT_METHOD', 'Forma de pago');

define('TEXT_CHOOSE_SHIPPING_METHOD', 'Por favor seleccione la forma de env�o preferido para este pedido.');
define('TEXT_SELECT_PAYMENT_METHOD', 'Por favor seleccione la forma de pago preferida para este pedido.');

define('TITLE_PLEASE_SELECT', 'Por favor seleccione');

define('TEXT_ENTER_SHIPPING_INFORMATION', 'Actualmente este es la �nica forma de env�o disponible para este pedido.');
define('TEXT_ENTER_PAYMENT_INFORMATION', 'Actualmente este es la �nica forma de pago disponible para este pedido.');

define('TABLE_HEADING_COMMENTS', 'Puede a�adir comentarios sobre su pedido');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Continuar con el proceso de compra');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', 'para confirmar este pedido.');

define('TEXT_EDIT', 'Modificar');

define('TEXT_SELECTED_SHIPPING_DESTINATION', 'Esta es la direcci�n de entrega actualmente seleccionada donde se le enviar� el pedido.');
define('TABLE_HEADING_NEW_ADDRESS', 'Nueva direcci�n');
define('TABLE_HEADING_EDIT_ADDRESS', 'Modificar direcci�n');
define('TEXT_CREATE_NEW_SHIPPING_ADDRESS', 'Por favor utilice el siguiente formulario para crear una nueva direcci�n de entrega para este pedido.');
define('TABLE_HEADING_ADDRESS_BOOK_ENTRIES', 'Entradas en la agenda de direcciones');

define('EMAIL_SUBJECT', 'Bienvenido/a a ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Estimado Sr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Estimada Sra. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Estimado/a %s' . "\n\n");
define('EMAIL_WELCOME', 'Le damos la bienvenida a <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'A partir de ahora puede disfrutar de los <b>distintos servicios</b> que le ofrecemos. Algunos de estos servicios son:' . "\n\n" . '<li><b>Carrito permanente</b> - Cualquier producto a�adido a su carrito permanecer� ah� hasta que lo quite o realizce el pedido.' . "\n" . '<li><b>Agenda de direcciones</b> - Podemos enviarle los productos a otras direcciones aparte de la suya. Perfecto para enviar regalos directamente a la persona destinataria.' . "\n" . '<li><b>Historial de pedidos</b> - Vea la relaci�n de pedidos que ha realizado con nosotros.' . "\n" . '<li><b>Comentarios de productos</b> - Comparta su opini�n sobre los productos con otros clientes.' . "\n\n");
define('EMAIL_CONTACT', 'Para cualquier consulta sobre nuestros servicios, por favor escriba al propietario: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Nota:</b> Esta direcci�n fue suministrada por uno de nuestros clientes. Si usted no se ha inscrito como cliente, por favor comun�quelo a ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");

// Start - CREDIT CLASS Gift Voucher Contribution
define('EMAIL_GV_INCENTIVE_HEADER', "\n\n" .'Como parte de nuestra bienvenida a los nuevos clientes, le obsequiamos con un cheque regalos por valor de %s');
define('EMAIL_GV_REDEEM', 'El c�digo para canjear el cheque regalo es %s, podr� introducir este c�digo cuando realice una compra ');
define('EMAIL_GV_LINK', 'o pulsando en este enlace ');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Felicidades, para hacer de su primera visita a nuestra tienda online una experiencia m�s gratificante le obsequiamos con un vale descuento.' . "\n" .
										' Debajo se encuentran los detalles del vale descuento creado solamente para usted' . "\n");
define('EMAIL_COUPON_REDEEM', 'Para usar el vale debe introducir el c�digo %s durante la realizaci�n del pedido');
// End - CREDIT CLASS Gift Voucher Contribution

define('TEXT_AGREE_TO_TERMS', 'Acepto los T�rminos y Condiciones');

define('WINDOW_BUTTON_CANCEL', 'Cancelar');
define('WINDOW_BUTTON_CONTINUE', 'Continuar');
define('WINDOW_BUTTON_NEW_ADDRESS', 'Nueva direcci�n');
define('WINDOW_BUTTON_EDIT_ADDRESS', 'Modificar direcci�n');

define('TEXT_PLEASE_SELECT', 'Por favor seleccione');
define('TEXT_PASSWORD_FORGOTTEN', 'Olvid� su contrase�a? Pulse aqu�.');
define('IMAGE_UPDATE_CART', 'Actualizar carrito');
define('IMAGE_LOGIN', 'Inicio de sesi�n');
define('TEXT_PAYMENT_METHOD_UPDATE_ERROR', 'Por favor int�ntelo de nuevo y si contin�an los problemas, por favor pruebe con otra forma de pago.');
define('TEXT_HAVE_COUPON_CCGV', '�Dispone de alg�n vale descuento/cheque regalo?');
define('TEXT_HAVE_COUPON_KGT', '�Dispone de alg�n vale descuento/cheque regalo?');
define('TEXT_EXISTING_CUSTOMER_LOGIN', 'Ya dispone de una cuenta?');
define('TEXT_DIFFERENT_SHIPPING', 'Es diferente de la direcci�n de facturaci�n?');
define('TEXT_SHIPPING_NO_ADDRESS', 'Por favor rellene <b>al menos</b> la direcci�n de facturaci�n para ver los gastos de env�o.');
define('TEXT_CHECKOUT_UPDATE_VIEW_ORDER', 'para actualizar/ver su pedido.');
define('CHECKOUT_BAR_CONFIRMATION', 'confirmaci�n');
// Points/Rewards Module V2.1rc2a BOF
define('TABLE_HEADING_REDEEM_SYSTEM', 'Canjear puntos ');
define('TABLE_HEADING_REFERRAL', 'Programa de referencias');
define('TEXT_REDEEM_SYSTEM_START', 'Tiene un saldo de %s, le gustar�a utilizarlo para el pago en este pedido?<br />El total estimado de la compra es: %s .');
define('TEXT_REDEEM_SYSTEM_SPENDING', 'Marque aqu� para utilizar el m�ximo de puntos permitido para este pedido. (%s puntos %s)&nbsp;&nbsp;->');
define('TEXT_REDEEM_SYSTEM_NOTE', '<span class="pointWarning">El importe total de la compra es superior al m�ximo de puntos permitodo, tambi�n necesitar� seleccionar una forma de pago</span>');
define('TEXT_REFERRAL_REFERRED', 'Si un amigo le ha hablado de nosotros por favor indique aqu� su direcci�n de email. ');
// Points/Rewards Module V2.1rc2a EOF
define('TERMS_PART_1', 'Por favor confirme que ha le�do nuestros ');
define('TERMS_PART_2', '<b><u>T�rminos y Condiciones</u></b>');

define('TEXT_NO_JAVASCRIPT', 'Hemos detectado que Javascript est� deshabilitado en su navegador.');
define('TEXT_ENABLE_JAVSCRIPT_INSTRUCTIONS', '<p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold">Por favor siga las instrucciones para su navegador para completar su pedido:<br /><br />Internet Explorer</p>
 <ol style="font-family: Arial, Helvetica, sans-serif; font-size:12px;">
  <li>En el men�&nbsp;<strong>Herramientas</strong>, pulse&nbsp;<strong>Opciones de Internet</strong>, y despu�s pulse la pesta�a&nbsp;<strong>Seguridad</strong>.</li>
  <li>Pulse en la zona de&nbsp;<strong>Internet</strong>.</li>
  <li>Si no tiene que personalizar la configuraci�n de seguridad de Internet, pulse&nbsp;<strong>Nivel predeterminado</strong>. Despu�s siga el paso 4<blockquote>Si tiene que personalizar su configuraci�n de seguridad de Internet, siga estos pasos:<br />
	a. Pulse&nbsp;<strong>Nivel personalizado...</strong>.<br />
	b. En el cuadro de di�logo de&nbsp;<strong>Configuraci�n de seguridad &ndash; zona de Internet</strong>, pulse&nbsp;<strong>Habilitar</strong>&nbsp;en&nbsp;<strong>Active scripting</strong>&nbsp;en la secci�n de&nbsp;<strong>Automatizaci�n</strong>.</blockquote></li>
  <li>Pulse el bot�n&nbsp;<strong>Aceptar</strong>&nbsp;para volver a la p�gina anterior, y entonces pulse el bot�n&nbsp;<strong>Actualizar</strong>&nbsp;para ejecutar scripts.</li>
 </ol>
 <p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold"><br />Firefox</p>
 <ol style="font-family: Arial, Helvetica, sans-serif; font-size:12px;">
  <li>En el men�&nbsp;<strong>Herramientas</strong>, pulse&nbsp;<strong>Opciones</strong>.</li>
  <li>En la pesta�a&nbsp;<strong>Contenido</strong>, pulse en la casilla de &nbsp;<strong>Activar JavaScript</strong>&nbsp;para habilitarlo.</li>
  <li>Pulse el bot�n&nbsp;<strong>Aceptar</strong>&nbsp;para volver a la p�gina anterior, y entonces pulsa el bot�n&nbsp;<strong>Recargar esta p�gina</strong>&nbsp;para ejecutar scripts.</li>
 </ol>
 <p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold"><br />Safari</p>
 <ol style="font-family: Arial, Helvetica, sans-serif; font-size:12px;">
  <li>Pulsa el men� <strong>Safari</strong>.</li>
  <li>Selecciona <strong>Preferencias</strong>.</li>
  <li>Pulsa la pesta�a <strong>Seguridad</strong>.</li>
  <li>Selecciona la casilla <stong>Activar JavaScript</stong>.</li>
 </ol>
 <p>&nbsp;</p>');
 
 define('TEXT_CHECKOUT_CREATE_ACCOUNT', 'Si desea crear una cuenta, por favor introduzca una contrase�a a continuaci�n: ');
?>