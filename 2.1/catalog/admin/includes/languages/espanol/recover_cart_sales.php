<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('MESSAGE_STACK_CUSTOMER_ID', 'Carrito de cliente ID ');
define('MESSAGE_STACK_DELETE_SUCCESS', ' borrado correctamente');
define('HEADING_TITLE', 'Recover Cart Sales v2.22');
define('HEADING_EMAIL_SENT', 'Informe e-mail enviado');
define('EMAIL_TEXT_LOGIN', 'Inicie sesi�n aqu�:');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Pregunta de '.  STORE_NAME );
define('EMAIL_TEXT_SALUTATION', 'Estimado/a ' );
define('EMAIL_TEXT_NEWCUST_INTRO', "\n\n" . 'Gracias por visitar ' . STORE_NAME .
                                   ' y pensar en nosotros para sus compras. ');
define('EMAIL_TEXT_CURCUST_INTRO', "\n\n" . 'Nos gustar�a darle las gracias por haber hecho compras en ' .
                                   STORE_NAME . ' en el pasado. ');
define('EMAIL_TEXT_BODY_HEADER',
	'Hemos detectado que durante una visita en nuestra tienda a�adi� ' .
	'los siguientes productos en su carrito de la compra, pero ' .
	'no pudo finalizar el pedido.' . "\n\n" .
	'Contenido del carrito:' . "\n\n"
	);
	
define('EMAIL_TEXT_BODY_FOOTER',
	'Estamos adem�s interesados en saber qu� es lo que ocurri� ' .
	'y si hubo una raz�n por la cual decidi�n no comprar en ' . STORE_NAME .
	' esta vez. Ser�a muy amable de su parte hacernos saber ' .
	'si tuvo cualquier problema o preocupaci�n, lo apreciar�amos enormemente. ' .
	'Esperamos comentarios tanto de usted como de otros para que sepamos c�mo ' .
	'podemos ayudar a mejorar su experiencia en '. STORE_NAME . '.'."\n\n".
	'POR FAVOR TENGA EN CUENTA:'."\n".'Si cree que complet� su compra y se est� ' .
	'preguntando por qu� no le fue entregada, este e-mail indica que ' .
	'su pedido NO se complet�, y por lo tanto NO se le ha cobrado. ' .
	'Por favor vuelva a la tienda para completar su pedido.'."\n\n".
	'Por favor acepte nuestras disculpas si ya complet� su compra, ' .
	'intentamos no enviar estos mensajes en esos casos, pero a veces es ' .
	'complicado para nosotros dependiendo de circunstancias particulares.'."\n\n".
	'De nuevo, graicas por su tiempo y consideraci�n por ayudarnos a ' .
	'mejorar el sitio web ' . STORE_NAME .  ".\n\nAtentamente,\n\n"
	);

define('DAYS_FIELD_PREFIX', 'Mostrar los �ltimos ');
define('DAYS_FIELD_POSTFIX', ' dias ');
define('DAYS_FIELD_BUTTON', 'Ir');
define('TABLE_HEADING_DATE', 'FECHA');
define('TABLE_HEADING_CONTACT', 'CONTACTADO');
define('TABLE_HEADING_CUSTOMER', 'NOMBRE CLIENTE');
define('TABLE_HEADING_EMAIL', 'E-MAIL');
define('TABLE_HEADING_PHONE', 'TEL�FONO');
define('TABLE_HEADING_MODEL', 'ART�CULO');
define('TABLE_HEADING_DESCRIPTION', 'DESCRIPCI�N');
define('TABLE_HEADING_QUANTY', 'CANT.');
define('TABLE_HEADING_PRICE', 'PRECIO');
define('TABLE_HEADING_TOTAL', 'TOTAL');
define('TABLE_GRAND_TOTAL', 'Gran total: ');
define('TABLE_CART_TOTAL', 'Total carrito: ');
define('TEXT_CURRENT_CUSTOMER', 'CLIENTE');
define('TEXT_SEND_EMAIL', 'Enviar e-mail');
define('TEXT_RETURN', '[Pulsa aqu� para volver]');
define('TEXT_NOT_CONTACTED', 'No avisado');
define('PSMSG', 'Mensaje de P.D. adicional: ');
?>