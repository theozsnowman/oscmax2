<?php
/*
$Id: affiliate_password_forgotten.php 14 2006-07-28 17:42:07Z user $

  OSC-Affiliate

  Contribution based on:

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright 2006 osCMax

  Released under the GNU General Public License
*/
define('NAVBAR_TITLE', 'Affiliate Password Forgotten');
define('NAVBAR_TITLE_1', 'Entrar');
define('NAVBAR_TITLE_2', 'Affiliate Constrase�a Olvidada');
define('HEADING_TITLE', 'He olvidado mi Contrase�a!');
define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<font color="#ff0000"><b>NOTA:</b></font> Ese E-Mail no figura en nuestros datos, intentelo de nuevo.');
define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nueva Contrase�a');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Ha solicitado una Nueva Contrase�a desde ' . $REMOTE_ADDR . '.' . "\n\n" . 'Su nueva contrase�a para \'' . STORE_NAME . '\' es:' . "\n\n" . '   %s' . "\n\n");
define('TEXT_PASSWORD_SENT', 'Se Ha Enviado Una Nueva Contrase�a A Tu Email');
?>