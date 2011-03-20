<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Cuenta de administrador');

define('TABLE_HEADING_ACCOUNT', 'Mi cuenta');

define('TEXT_INFO_FULLNAME', '<b>Nombre completo: </b>');
define('TEXT_INFO_USERNAME', '<b>Nombre de usuario: </b>');
define('TEXT_INFO_FIRSTNAME', '<b>Nombre: </b>');
define('TEXT_INFO_LASTNAME', '<b>Apellidos: </b>');
define('TEXT_INFO_EMAIL', '<b>Direcci�n e-mail: </b>');
define('TEXT_INFO_PASSWORD', '<b>Contrase�a: </b>');
define('TEXT_INFO_PASSWORD_HIDDEN', '-Oculto-');
define('TEXT_INFO_PASSWORD_CONFIRM', '<b>Confirmar contrase�a: </b>');
define('TEXT_INFO_CREATED', '<b>Cuenta creada: </b>');
define('TEXT_INFO_LOGDATE', '<b>�ltimo acceso: </b>');
define('TEXT_INFO_LOGNUM', '<b>N�mero de registro: </b>');
define('TEXT_INFO_GROUP', '<b>Nivel de grupo: </b>');
define('TEXT_INFO_ERROR', '�Esa direcci�n de e-mail ya est� siendo utilizada! Por favor int�ntalo de nuevo.');
define('TEXT_INFO_MODIFIED', 'Modificado: ');

define('TEXT_INFO_HEADING_DEFAULT', 'Modificar cuenta ');
define('TEXT_INFO_HEADING_CONFIRM_PASSWORD', 'Confirmaci�n de contrase�a ');
define('TEXT_INFO_INTRO_CONFIRM_PASSWORD', 'Contrase�a:');
define('TEXT_INFO_INTRO_CONFIRM_PASSWORD_ERROR', 'Contrase�a incorrecta');
define('TEXT_INFO_INTRO_DEFAULT', 'Pulsa <b>Editar</b> para hacer cambios en tu cuenta.');
define('TEXT_INFO_INTRO_DEFAULT_FIRST_TIME', '<b>%s</b>, hemos detectado que no has cambiado tu contrase�a desde la instalaci�n. Te recomendamos cambiar la contrase�a ahora.');
define('TEXT_INFO_INTRO_DEFAULT_FIRST', '<br><b>AVISO:</b><br>Hello <b>%s</b>, �te recomendamos que cambies tu e-mail (<font color="red">admin@localhost</font>) y tu contrase�a!');
define('TEXT_INFO_INTRO_EDIT_PROCESS', 'Todos los campos son obligatorios. Pulsa guardar para grabarlos.');

define('JS_ALERT_USERNAME',         '- Obligatorio: Nombre de usuario \n');
define('JS_ALERT_FIRSTNAME',        '- Obligatorio: Nombre \n');
define('JS_ALERT_LASTNAME',         '- Obligatorio: Apellidos \n');
define('JS_ALERT_EMAIL',            '- Obligatorio: Direcci�n e-mail \n');
define('JS_ALERT_PASSWORD',         '- Obligatorio: Contrase�a \n');
define('JS_ALERT_USERNAME_LENGTH',  '- Nombre de usuario debe ser m�s largo que ');
define('JS_ALERT_FIRSTNAME_LENGTH', '- Nombre debe ser m�s largo que ');
define('JS_ALERT_LASTNAME_LENGTH',  '- Apellidos debe ser m�s largo que ');
define('JS_ALERT_PASSWORD_LENGTH',  '- Password debe ser m�s largo que ');
define('JS_ALERT_EMAIL_FORMAT',     '- �Direcci�n e-mail no v�lido! \n');
define('JS_ALERT_EMAIL_USED',       '- �Direcci�n e-mail ya est� siendo utilizada! \n');
define('JS_ALERT_PASSWORD_CONFIRM', '- �Confirma tu Contrase�a! \n');

define('ADMIN_EMAIL_SUBJECT', 'Cambios en los datos personales');
define('ADMIN_EMAIL_TEXT', 'Hola %s,' . "\n\n" . 'Tus datos personales, tal vez incluso tu contrase�a, han sido modificados. Si esto se ha hecho sin tu conocimiento o consentimiento, por favor ponte en contacto con el administrador inmediatamente.' . "\n\n" . 'Sitio web : %s' . "\n" . 'Nombre de usuario: %s' . "\n" . 'Contrase�a: %s' . "\n\n" . '�Gracias!' . "\n" . '%s' . "\n\n" . 'Esto es un mensaje automatizado, por favor no contestes.');
?>