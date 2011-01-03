<?php
/*
$Id: login.php 3 2006-05-27 04:59:07Z user $

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright 2006 osCMax

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Entrar');
define('HEADING_TITLE', 'Dejame Entrar!');

define('HEADING_NEW_CUSTOMER', 'Nuevo Cliente');
define('TEXT_NEW_CUSTOMER', 'Soy un nuevo cliente.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Al crear una cuenta en ' . STORE_NAME . ' podr� realizar sus compras r�pidamente, revisar el estado de sus pedidos y consultar sus operaciones anteriores.');

define('HEADING_RETURNING_CUSTOMER', 'Ya Soy Cliente');
define('TEXT_RETURNING_CUSTOMER', 'He comprado otras veces.');

define('TEXT_PASSWORD_FORGOTTEN', '�Ha olvidado su contrase�a? Siga este enlace y se la enviamos.');

define('TEXT_LOGIN_ERROR', '<font color="#ff0000"><b>ERROR:</b></font> El \'E-Mail\' y/o \'Contrase�a\' no figuran en nuestros datos.');
define('TEXT_VISITORS_CART', '<font color="#ff0000"><b>NOTA:</b></font> El contenido de su &quot;Cesta de Visitante&quot; ser� a�adido a su &quot;Cesta de Asociado&quot; una vez que haya entrado. <a href="javascript:session_win();">[M�s informaci�n]</a>');

// BOF: MOD - Checkout Without Account v0.70 changes
define('PWA_FAIL_ACCOUNT_EXISTS', 'Una cuenta ya existe para la direcci�n correo electr�nico <i>{EMAIL_ADDRESS}</i>.  Usted debe la entrada aqu� con la contrase�a para esa cuenta antes avanzar para comprobar.');
define('HEADING_CHECKOUT', '<font size="2">Avance para Comprobar Directamente</font>');
define('TEXT_CHECKOUT_INTRODUCTION', 'Avance para Comprobar sin crear una cuenta. Escogiendo esta opci�n ninguna de su informaci�n de usuario se mantendr� en nuestros registros, y en usted no ser� capaz de revisar su posici�n de la orden, ni seguir sus �rdenes previas.');
define('PROCEED_TO_CHECKOUT', 'Avance para Comprobar sin Registrar');
// EOF: MOD - Checkout Without Account changes

// LINE ADDED: MOD - Separate Pricing Per Customer
// define the email address that can change customer_group_id on login
define('SPPC_TOGGLE_LOGIN_PASSWORD', 'root@localhost');
?>