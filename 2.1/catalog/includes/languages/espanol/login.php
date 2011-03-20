<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

// PWA BOF
define('TEXT_GUEST_INTRODUCTION','<b>�Quiere ir directamente a realizar el pedido?</b> <br><br> �Le gustar�a realizar su pedido sin crear una cuenta de cliente? Tenga en cuenta que todos nuestros servicios no estar�n disponibles para los clientes que no desean crear una cuenta. Adem�s, no podr� ver el estado de su pedido, y cada vez que compre con nosotros tendr� que volver a introducir todos sus datos. <br><br> Crear una cuenta es gratuito. Si todav�a desea pasar a realizar un pedido por favor pulse el bot�n de \'Realizar pedido\'.');
// PWA BOF
define('NAVBAR_TITLE', 'Inicio de sesi�n');
define('HEADING_TITLE', 'Bienvenido, por favor reg�strese o inicie su sesi�n');

define('HEADING_NEW_CUSTOMER', 'Nuevo cliente');
define('TEXT_NEW_CUSTOMER', 'Soy un nuevo cliente.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Al crear una cuenta en ' . STORE_NAME . ' podr� realizar sus compras r�pidamente, revisar el estado de sus pedidos y llevar un seguimiento de sus pedidos anteriores.');

define('HEADING_RETURNING_CUSTOMER', 'Ya soy cliente');
define('TEXT_RETURNING_CUSTOMER', 'He comprado otras veces.');

define('TEXT_PASSWORD_FORGOTTEN', '�Ha olvidado su contrase�a? Siga este enlace y se la enviamos.');

define('TEXT_LOGIN_ERROR', 'Error: \'E-mail\' y/o \'Contrase�a\' no coinciden con nuestros datos.');
define('TEXT_VISITORS_CART', '<font color="#ff0000"><b>NOTA:</b></font> Cuando inicie su sesi�n los contenidos de su carrito parmanecer�n en el carrito.');

// LINE ADDED: MOD - Separate Pricing Per Customer
// define the email address that can change customer_group_id on login
define('SPPC_TOGGLE_LOGIN_PASSWORD', 'root@localhost');
define('PWA_FAIL_ACCOUNT_EXISTS','Ya existe una cuenta con esta direcci�n de e-mail {EMAIL_ADDRESS}. Debe iniciar sesi�n con la contrase�a de esa cuenta antes de pasar a realizar el pedido.');

define('HEADING_CHECKOUT','<font size="2">Pasar directamente a realizar el pedido</font>');

define('TEXT_CHECKOUT_INTRODUCTION','Pasar a realizar el pedido sin crear una cuenta. Al elegir esta opci�n no guardaremos ninguna informaci�n suya en nuestros registros, pero no podr� revisar el estado de sus pedidos ni llevar un seguimiento de sus pedidos anteriores.');

define('PROCEED_TO_CHECKOUT','Pasar a realizar el pedido sin registrarse');

define('TEXT_GV_LOGIN_NEEDED', 'Necesita haber iniciado sesi�n para canjear su cheque. Por favor cree una nueva cuenta o inicie su sesi�n debajo.');

?>