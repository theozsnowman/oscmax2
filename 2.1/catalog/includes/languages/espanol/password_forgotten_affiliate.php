<?php
/*
$Id: password_forgotten.php 1268 2011-03-20 14:59:02Z cottonbarn $

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Iniciar sesi�n');
define('NAVBAR_TITLE_2', 'Contrase�a olvidada');

define('HEADING_TITLE', 'He olvidado mi contrase�a');

define('TEXT_MAIN', 'Si ha olvidado su contrase�a, introduzca su direcci�n de e-mail y le enviaremos un mensaje por e-mail con una contrase�a nueva.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Error: Ese e-mail no figura en nuestros datos, int�ntelo de nuevo.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nueva contrase�a');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Se ha solicitado una nueva contrase�a desde ' . isset($REMOTE_ADDR) . '.' . "\n\n" . 'Su nueva contrase�a para \'' . STORE_NAME . '\' es:' . "\n\n" . '   %s' . "\n\n");

define('SUCCESS_PASSWORD_SENT', '�xito: Se le ha enviado una nueva contrase�a a su e-mail');
?>
