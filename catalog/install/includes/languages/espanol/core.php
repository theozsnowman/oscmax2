<?php
/*
$Id:$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('TEXT_OSCMAX_WEBSITE', 'Web osCmax');
define('TEXT_FORUM', 'Soporte');
define('TEXT_DOCUMENTATION', 'Documentaci�n');
define('TEXT_WIKI', 'Wiki');
define('TEXT_FOOTER_DISCLAIMER', 'osCmax no ofrece ninguna garant�a y es redistribuible bajo la <a href="http://www.fsf.org/licenses/gpl.txt" target="_blank">GNU General Public License</a>');

define('TAB_START', 'Inicio');
define('TAB_DATABASE_SERVER', 'Servidor base datos');
define('TAB_WEB_SERVER', 'Servidor web');
define('TAB_STORE_SETTINGS', 'Configuraci�n tienda');
define('TAB_FINISHED', 'Finalizado');

define('TEXT_PHP_VERSION', 'Versi�n PHP');
define('TEXT_PHP_SETTINGS', 'Configuraci�n PHP');
define('TEXT_PHP_EXTENSIONS', 'Extensiones PHP');
define('TEXT_ON', 'On');
define('TEXT_OFF', 'Off');

define('IMAGE_CONTINUE', 'Continuar');
define('IMAGE_CANCEL', 'Cancelar');
define('IMGAE_RETRY', 'Reintentar');
define('IMAGE_ADMIN', 'Panel Administraci�n');
define('IMAGE_CATALOG', 'Cat�logo');

// Start Page
define('TEXT_WELCOME_TO_OSCMAX', 'Bienvenido a osCmax ');
define('TEXT_INDEX_MAIN_BLOCK', '<p>osCmax te permite vender productos en todo el mundo con tu propia tienda online. La parte de administraci�n gestiona los productos, clientes, pedidos, boletines, ofertas y mucho m�s para construir y prosperar con �xito en tu negocio online.</p>
  <p>osCmax est� basado en osCommerce Online Merchant 2.2 y su objetivo es hacer m�s r�pida y sencilla que nunca la implementaci�n de tu sitio web. osCmax es compatible hacia atr�s con osCommerce Online Merchant 2.2 y por lo tanto puedes aprovechar que tenga la comunidad m�s grande de una soluci�n de tienda online con carrito de la compra: m�s de 140.000 propietarios de tiendas registrados que se ayudan unos a otros y que han proporcionado m�s de 4.000 complementos que extienden las funciones, caracter�sticas y el potencial de tu tienda online.</p>
  <p>osCmax y sus complementos est�n disponibles de forma gratuita y libre bajo una licencia Open Source para ayudarte a vender online lo antes posible sin ninguna cuota por licencia o cualquier otra limitaci�n involucrada.</p><p>&nbsp;</p><p>&nbsp;</p><br />');
define('TEXT_REGISTER_GLOBALS_ERROR', 'A partir de PHP 4.3+ est� soportada la compatibilidad con register_globals. Este par�metro <u>debe estar habilitado</u> debido a que se est� usando una versi�n de PHP m�s antigua.');
define('TEXT_PERMISSIONS_ERROR', '<p>El servidor web no puede guardar los par�metros de la instalaci�n en sus ficheros de configuraci�n.</p><p>Es necesario que los siguientes ficheros tengan sus permisos configurados como escribibles por todos (chmod 777):</p><p></p>');
define('TEXT_CORRECT_ERROR', '<p class="messageStackAlert">Por favor corrige los errores  mostrados arriba y vuelve a intentar ejecutar el procedimiento de instalaci�n con los cambios aplicados.</p>
');
define('TEXT_RESTART_WEB_SERVER_ERROR', '<p class="messageStackAlert"><i>El cambio de los par�metros de configuraci�n del servidor web puede hacer necesario que se reinicie el servicio del servidor web para que los cambios hagan efecto.</i>');
define('TEXT_SERVER_SUCCESS', 'Se ha verificado el entorno del servidor web para para proceder con una correcta instalaci�n y configuraci�n de la tienda online.<br /><br />Por favor contin�a para comenzar el proceso de instalaci�n.');

// Step 1 - Database Server
define('TEXT_DATABASE_SERVER_BLOCK', '<p>El servidor de base de datos almacena el contenido de la tienda online, como por ejemplo la informaci�n de productos, clientes y pedidos que se hayan hecho.</p><p>Por favor consulta con tu administrador del servidor si todav�a no se conocen los par�metros del servidor de la base de datos.</p>');
define('TEXT_DATABASE_SERVER', 'Servidor de base de datos');
define('TEXT_DATABASE_SERVER_DESC', 'Direcci�n del servidor de base de datos en la forma de un nombre de host o una direcci�n IP.');
define('TEXT_DATABASE_USERNAME', 'Nombre de usuario');
define('TEXT_DATABASE_USERNAME_DESC', 'Nombre de usuario utilizado para conectarse al servidor de base de datos.');
define('TEXT_DATABASE_PASSWORD', 'Contrase�a');
define('TEXT_DATABASE_PASSWORD_DESC', 'Contrase�a utilizada junto con nombre de usuario para conectarse al servidor de base de datos.');
define('TEXT_DATABASE_NAME', 'Nombre de la base de datos');
define('TEXT_DATABASE_NAME_DESC', 'Nombre de la base de datos para almacenar la informaci�n.');
define('TEXT_DATABASE_SUCCESS', 'Bas de datos importada correctamente.');
define('TEXT_DATABASE_IMPORTING', 'En estos momentos se est� importando la estructura de la base de datos. Por favor ten un poco de paciencia mientras dura este proceso.');
define('TEXT_DATABASE_PROBLEM', 'Ha habido un problema al importar la base de datos. Ha ocurrido el siguiente error:<br><br>%s<br><br>Por favor comprueba los par�metros de conexi�n y vuelve a intentarlo.');
define('TEXT_DATBASE_CONNECTION_ERROR', 'Ha habido un problema al conectarse a la base de datos. Ha ocurrido el siguiente error:<br><br>%s<br><br>Por favor comprueba los par�metros de conexi�n y vuelve a intentarlo.');
define('TEXT_TESTING_DATABASE', 'Comprobando la conexi�n a la base de datos.');

// Step 2 - Web Server
define('TEXT_WEB_SERVER', '<p>El servidor web se ocupa de servir las p�gina de la tienda online a los visitantes y clientes. Los par�metros del servidor web hacen que los enlaces a las p�ginas apunten a los lugares correctos.</p>');
define('TEXT_WWW_ADDRESS', 'Direcci�n WWW');
define('TEXT_WEB_ADDRESS', 'Direcci�n web de la tienda online.');
define('TEXT_WEBSERVER_ROOT_DIR', 'Directorio ra�z del servidor web');
define('TEXT_WEBSERVER_DIRECTORY', 'Directorio donde est� instalada la tienda online en el servidor.');

// Step 3 - Store Setup
define('TEXT_STORE_SETUP', '<p>Aqu� puedes definir el nombre de la tienda online y los datos de contacto del propietario de la tienda.</p><p>El nombre de usuario y la contrse�a del administrador son usados para iniciar sesi�n en la secci�n protegida del panel de administraci�n.</p>');
define('TEXT_STORE_NAME', 'Nombre de la tienda');
define('TEXT_STORE_NAME_DESC', 'El nombre de la tienda online que se muestra al p�blico.');
define('TEXT_FIRST_NAME', 'Nombre del propietario de la tienda');
define('TEXT_FIRST_NAME_DESC', 'El nombre del propietario de la tienda que se muestra al p�blico.');
define('TEXT_LAST_NAME', 'Apellidos del propietario de la tienda');
define('TEXT_LAST_NAME_DESC', 'Los apellidos del propietario de la tienda que se muestran al p�blico.');
define('TEXT_EMAIL', 'Direcci�n e-mail del propietario de la tienda');
define('TEXT_EMAIL_DESC', 'La direcci�n de e-mail del propietario de la tienda que se muestra al p�blico.');
define('TEXT_USERNAME', 'Nombre de usuario del administrador');
define('TEXT_USERNAME_DESC', 'El nombre de usuario del administrador para utilizarlo en el panel de administraci�n.');
define('TEXT_PASSWORD', 'Contrase�a del administrador');
define('TEXT_PASSWORD_DESC', 'La contrase�a para utilizar con la cuenta de administrador.');
define('TEXT_ADMIN_FOLDER_NAME', 'Nombre de la carpeta de administraci�n');
define('TEXT_CHANGE_ADMIN_FOLDER', 'El nombre donde se mantienen los ficheros de administraci�n. Se <b>recomienda que lo cambies</b> en lugar de usar por defecto <b>admin</b> para mejorar la seguridad del sitio web. Si quieres leer m�s acerca de la seguridad, por favor <a href="http://wiki.oscdox.com/v2.5/setting_up_security" target="_blank">consulta el wiki</a>.');
define('TEXT_ADMIN_NO_PERMISSION', 'No se ha podido obtener el permiso de fichero adecuado para permitirte cambiar el nombre de la carpeta <b>admin/</b>. <br><br>Para obtener instrucciones acerca de c�mo resolver este problema, por favor <a href="http://wiki.oscdox.com/v2.5/installation_troubleshooting" target="_blank">consulta esta p�gina de ayuda</a>. <br><br>Deber�as cambiar el nombre de esta carpeta para mejorar la seguridad de la tienda. Para obtener instrucciones acerca de c�mo cambiar esto manualmente una vez que hayas corregido los par�metros del servidor, por favor <a href="http://wiki.oscdox.com/v2.5/setting_up_security" target="_blank">consulta el wiki</a>.');
define('TEXT_NO_CONFIG_PERMISSIONS', 'El instalador no puede crar tus ficheros configure.php. <br/> Los permisos son incorrectos en varios directorios.');
define('TEXT_NO_CONFIG_PERMISSIONS_DESC', ' Es necesario que cambies los permisos a 755 o 777 en los siguientes directorios. <br />Una vez hecho esto, carga de nuevo esta p�gina y podr�s continuar con la instalaci�n. Si todav�a ves este error tras cambiar los permisos y refrescar la p�gina, lee la documentaci�n para una <a href="http://wiki.oscdox.com/v2.5/installation_troubleshooting" target="_blank">Resoluci�n de problemas</a> en profundidad. <br><br>Cambia los permisos a 755 o 777 (consejo, prueba primero con 755. Si no funciona, prueba con 777) en los siguientes directorios:<br><br>');

// Finished
define('TEXT_FINISHED', '<h1>Instalaci�n completada</h1><p>�Enhorabuena por instalar y configurar osCmax como tu soluci�n de tienda online!</p><p>Te deseamos todo lo mejor para el �xito de tu tienda online y te damos la bienvenida para que te unas y participes en nuestra comunidad.</p><p align="right"><i><b>- El equipo de osCmax</b></i></p>');
define('TEXT_ADMIN_RENAMED_1', '�Felicidades! La carpeta admin se ha renombrado como ');
define('TEXT_ADMIN_RENAMED_2', '.<br><br>Si quieres leer m�s informaci�n sobre mayores medidas de seguridad puedes echarle un vistazo a la <a href="http://wiki.oscdox.com/v2.5/setting_up_security" target="_blank">documentaci�n en el Wiki.</a>');
define('TEXT_ADMIN_NOT_RENAMED', '�No le has cambiado el nombre a la carpeta <b>admin</b>!Para tiendas en producci�n te recomendamos encarecidamente que lo hagas, con el objetivo de aumentar la seguridad.  <br><br>Por favor, lee la <a href="http://wiki.oscdox.com/v2.5/setting_up_security" target="_blank">documentaci�n en el Wiki para obtener m�s informaci�n sobre c�mo tener una adecuada seguridad en tu sitio web.</a>');
define('TEXT_INSTALLATION_SUCCESSFUL', '�La instalaci�n y configuraci�n se realizaron correctamente!');
?>