<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

if ($_GET['gID']) {
  define('HEADING_TITLE', 'Grupos de administraci�n');
} elseif ($_GET['gPath']) {
  define('HEADING_TITLE', 'Definir permisos de grupos');
} else {
  define('HEADING_TITLE', 'Miembros de administraci�n');
}

define('TEXT_COUNT_GROUPS', 'Grupos: ');

define('TABLE_HEADING_USERNAME', 'Nombre de usuario');
define('TABLE_HEADING_NAME', 'Nombre completo');
define('TABLE_HEADING_EMAIL', 'Direcci�n e-mail');
define('TABLE_HEADING_PASSWORD', 'Contrase�a');
define('TABLE_HEADING_CONFIRM', 'Confirmar contrase�a');
define('TABLE_HEADING_GROUPS', 'Grupo');
define('TABLE_HEADING_CREATED', 'Cuenta creada');
define('TABLE_HEADING_MODIFIED', 'Cuenta modificada');
define('TABLE_HEADING_LOGDATE', '�ltimo Acceso');
define('TABLE_HEADING_LOGNUM', 'N� ses.');
define('TABLE_HEADING_LOG_NUM', 'N�mero sesi�n');
define('TABLE_HEADING_ACTION', 'Acci�n');

define('TABLE_HEADING_GROUPS_NAME', 'Nombre del grupo');
define('TABLE_HEADING_GROUPS_DEFINE', 'Selecci�n de men�s y ficheros');
define('TABLE_HEADING_GROUPS_GROUP', 'Nivel');
define('TABLE_HEADING_GROUPS_CATEGORIES', 'Permisos de categor�as');


define('TEXT_INFO_HEADING_DEFAULT', 'Miembro de administraci�n ');
define('TEXT_INFO_HEADING_DELETE', 'Eliminar miembro ');
define('TEXT_INFO_HEADING_EDIT', 'Editar miembro de administraci�n');
define('TEXT_INFO_HEADING_NEW', 'Nuevo miembro de administraci�n ');

define('TEXT_INFO_DEFAULT_INTRO', 'Grupo de miembro');
define('TEXT_INFO_DELETE_INTRO', '�Quitar a <b>%s</b> de Miembros de administraci�n?');
define('TEXT_INFO_DELETE_INTRO_NOT', '�No puedes eliminar el grupo %s!');
define('TEXT_INFO_EDIT_INTRO', 'Configura nivel de permisos aqu�: ');

define('TEXT_INFO_USERNAME', 'Nombre de usuario: ');
define('TEXT_INFO_FULLNAME', 'Nombre completo: ');
define('TEXT_INFO_FIRSTNAME', 'Nombre: ');
define('TEXT_INFO_LASTNAME', 'Apellidos: ');
define('TEXT_INFO_EMAIL', 'Direcci�n e-mail: ');
define('TEXT_INFO_PASSWORD', 'Contrase�a: ');
define('TEXT_INFO_CONFIRM', 'Confirmar contrse�a: ');
define('TEXT_INFO_CREATED', 'Cuenta creada: ');
define('TEXT_INFO_MODIFIED', 'Cuenta modificada: ');
define('TEXT_INFO_LOGDATE', 'Ultimo acceso: ');
define('TEXT_INFO_LOGNUM', 'N�mero de registro: ');
define('TEXT_INFO_GROUP', 'Grupo: ');
define('TEXT_INFO_ERROR', 'Esa direcci�n de e-mail ya est� siendo utilizada.<br>Por favor int�ntalo de nuevo.');

define('JS_ALERT_USERNAME', '- Obligatorio: Nombre de usuario \n');
define('JS_ALERT_FIRSTNAME', '- Obligatorio: Nombre \n');
define('JS_ALERT_LASTNAME', '- Obligatorio: Apellidos \n');
define('JS_ALERT_EMAIL', '- Obligatorio: Direcci�n e-mail \n');
define('JS_ALERT_EMAIL_FORMAT', '- �El formato de la direcci�n e-mail no es v�lido! \n');
define('JS_ALERT_EMAIL_USED', '- �Direcci�n e-mail ya est� siendo utilizada! \n');
define('JS_ALERT_LEVEL', '- Obligatorio: Grupo \n');

define('ADMIN_EMAIL_SUBJECT', 'Nuevo miembro de administraci�n');
define('ADMIN_EMAIL_TEXT', 'Hola %s,' . "\n\n" . 'Puedes acceder al Panel de administraci�n con la siguiente contrase�a. Una vez que hayas entrado, �cambia tu contrase�a!' . "\n\n" . 'Sitio web : %s' . "\n" . 'Nombre de usuario: %s' . "\n" . 'Contrase�a: %s' . "\n\n" . '�Gracias!' . "\n" . '%s' . "\n\n" . 'Esto es un mensaje automatizado, por favor no contestes.');
define('ADMIN_EMAIL_EDIT_SUBJECT', 'Perfil de miembro de administraci�n modificado');
define('ADMIN_EMAIL_EDIT_TEXT', 'Hola %s,' . "\n\n" . 'Tus datos personales han sido modificados por un administrador.' . "\n\n" . 'Sitio web : %s' . "\n" . 'Nombre de usuario: %s' . "\n" . 'Contrase�a: %s' . "\n\n" . '�Gracias!' . "\n" . '%s' . "\n\n" . 'Esto es un mensaje automatizado, por favor no contestes.');

define('TEXT_INFO_HEADING_DEFAULT_GROUPS', 'Grupo de administraci�n ');
define('TEXT_INFO_HEADING_DELETE_GROUPS', 'Eliminar grupo ');

define('TEXT_INFO_DEFAULT_GROUPS_INTRO', '<b>NOTA:</b><li><b>nuevos permisos:</b> definir/editar el acceso a los ficheros.</li><li><b>modificar:</b> modificar el nombre del grupo.</li><li><b>eliminar:</b> eliminar el grupo.</li>');
define('TEXT_INFO_DELETE_GROUPS_INTRO', 'Esto eliminar� tambi�n los miembros del grupo. �Quieres eliminar el grupo <b>%s</b>?');
define('TEXT_INFO_DELETE_GROUPS_INTRO_NOT', '�No puedes eliminar este grupo!');
define('TEXT_INFO_GROUPS_INTRO', 'Elige un nombre de grupo �nico. Pulsa <b>Guardar</b> para crearlo.');
define('TEXT_INFO_EDIT_GROUPS_INTRO', 'Elige un nombre de grupo �nico. Pulsa <b>Guardar</b> para modificarlo.');

define('TEXT_INFO_HEADING_EDIT_GROUP', 'Grupo de administraci�n');
define('TEXT_INFO_HEADING_GROUPS', 'Nuevo grupo');
define('TEXT_INFO_GROUPS_NAME', ' <b>Nombre de grupo:</b><br>Elige un nombre de grupo �nico. Pulsa <b>Guardar</b> para crearlo.<br>');
define('TEXT_INFO_GROUPS_NAME_FALSE', '<font color="red"><b>ERROR:</b> �El nombre de grupo tiene que tener al menos 5 caracteres!</font>');
define('TEXT_INFO_GROUPS_NAME_USED', '<font color="red"><b>ERROR:</b> �El nombre de grupo ya est� siendo utilizado!</font>');
define('TEXT_INFO_GROUPS_LEVEL', 'Nivel grupo: ');
define('TEXT_INFO_GROUPS_BOXES', '<b>Permiso de men�s:</b><br>Se da acceso a los men�s seleccionados.');
define('TEXT_INFO_GROUPS_BOXES_INCLUDE', 'Incluye file guardados en: ');

define('TEXT_INFO_HEADING_DEFINE', 'Definir permisos de grupo');
if ($_GET['gPath'] == 1) {
  define('TEXT_INFO_DEFINE_INTRO', '<b>%s :</b><br>No puedes cambiar los permisos para este grupo.<br><br>');
} else {
  define('TEXT_INFO_DEFINE_INTRO', '<b>%s :</b><br>Cambia los permisos para este grupo seleccionando o deseleccionando los men�s y los ficheros. Pulsa <b>Guardar</b> para guardar los cambios.<br><br>');
}
?>