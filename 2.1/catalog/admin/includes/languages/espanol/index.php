<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Seleccione una opci�n..');

define('BOX_TITLE_ORDERS', 'Pedidos');
define('BOX_TITLE_STATISTICS', 'Estadisticas');

define('BOX_ENTRY_SUPPORT_SITE', 'Web de soporte');
define('BOX_ENTRY_SUPPORT_FORUMS', 'Foros de soporte');
define('BOX_ENTRY_MAILING_LISTS', 'Listas de correo');
define('BOX_ENTRY_BUG_REPORTS', 'Informes de fallos');
define('BOX_ENTRY_FAQ', 'FAQ');
define('BOX_ENTRY_LIVE_DISCUSSIONS', 'Debates en directo');
define('BOX_ENTRY_CVS_REPOSITORY', 'Repositorio CVS');
define('BOX_ENTRY_INFORMATION_PORTAL', 'Portal de informaci�n');
define('BOX_ENTRY_OSCDOX', 'osCDox.com');
define('BOX_ENTRY_TEMPLATE_STORE', 'Plantillas osCmax');

define('BOX_ENTRY_AABOX', 'Hosting osCmax<br>$12.99/mes');
define('BOX_ENTRY_PAYPAL', 'Registrase en Paypal');
define('BOX_ENTRY_MERCHANT', 'Obtner una cuenta Merchant');
define('BOX_ENTRY_DOMAINS', 'Comprar dominios');
define('BOX_ENTRY_SSL', 'Comprar certificado SSL');

define('BOX_ENTRY_CUSTOMERS', 'Clientes:');
define('BOX_ENTRY_PRODUCTS', 'Productos:');
define('BOX_ENTRY_REVIEWS', 'Comentarios:');

define('BOX_CONNECTION_PROTECTED', 'Est�s protegido por una conexi�n segura SSL %s.');
define('BOX_CONNECTION_UNPROTECTED', '<font color="#ff0000">No</font> est�s protegido por una conexi�n segura SSL.');
define('BOX_CONNECTION_UNKNOWN', 'desconocido');

define('CATALOG_CONTENTS', 'Contenidos');

define('REPORTS_PRODUCTS', 'Productos');
define('REPORTS_ORDERS', 'Pedidos');

define('TOOLS_BACKUP', 'Copias de seguridad');
define('TOOLS_BANNERS', 'Banners');
define('TOOLS_FILES', 'Ficheros');

define('TEXT_TAB1', 'Ventas');
define('TEXT_TAB2', 'Productos');
define('TEXT_TAB3', 'Registro de administradores');
define('TEXT_TAB4', 'Registro de clientes');
define('TEXT_TAB5', 'Registro de errores HTTP');
define('TEXT_TAB6', 'Sistema');

define('VIEW_COMPLETE_REPORT', 'Ver informe completo');

define('DASHBOARD_IP', 'Direcci�n IP');
define('DASHBOARD_NO', 'N�');
define('DASHBOARD_TIME', 'Fecha y hora');
define('DASHBOARD_USER', 'ID usuario');
define('DASHBOARD_EVENT', 'Tipo evento');
define('DASHBOARD_RANK', 'Clasificaci�n');
define('DASHBOARD_PRODUCT', 'Producto');
define('DASHBOARD_QUANTITY', 'Cant.');
define('DASHBOARD_VIEWED', 'Productos visualizados');

define('DASHBOARD_TOP_TEN', 'Top 10 clientes ');
define('DASHBOARD_TOP_TEN_CUSTOMER', 'Nombre cliente');
define('DASHBOARD_TOP_TEN_TOTAL', 'Total');

define('DASHBOARD_ORDERS', 'Pedidos');
define('DASHBOARD_ORDERS_STATUS', 'Estado pedido');

define('DASHBOARD_DATABASE', 'Base de datos');
define('DASHBOARD_DATABASE_CUST', 'N�mero de clientes:');
define('DASHBOARD_DATABASE_PROD', 'N�mero de productos:');
define('DASHBOARD_DATABASE_SPEC', 'Ofertas especiales:');


define('DASHBOARD_PRODUCTS_V', 'Productos visualizados');
define('DASHBOARD_PRODUCTS_V_VIEWS', 'Visualizaciones');

define('DASHBOARD_PRODUCTS_P', 'Productos comprados');
define('DASHBOARD_PRODUCTS_P_PURCHASED', 'Compras');

define('DASHBOARD_HTTP_URL', 'URL');
define('DASHBOARD_HTTP_BROWSER', 'Navegador');
define('DASHBOARD_HTTP_REFER', 'Origen');
define('DASHBOARD_HTTP_ERROR', 'Tipo error');


define('DASHBOARD_SYSTEM_CONFIG', 'Configuraci�n del sistema');
define('DASHBOARD_SYSTEM_SETUP', 'Instalaci�n del sistema');
define('DASHBOARD_PERMISSIONS', 'Permisos y seguridad'); 

define('DASHBOARD_NO_ERRORS_DETECTED_CONFIG', 'No se han detectado errores en la configuraci�n del sistema.');
define('DASHBOARD_ALERT_ERRORS_DETECTED_CONFIG', ' error(es) en la configuraci�n del sistema;');
define('DASHBOARD_ALERT_WARNINGS_DETECTED_CONFIG', ' advertencia(s) en la configuraci�n del sistema;');

define('DASHBOARD_NO_ERRORS_DETECTED_SETUP', 'No se han detectado errores en la instalaci�n del sistema.');
define('DASHBOARD_ALERT_ERRORS_DETECTED_SETUP', ' error(es) en la instalaci�n del sistema; ');
define('DASHBOARD_ALERT_WARNINGS_DETECTED_SETUP', ' advertencia(s) en la instalaci�n del sistema; ');

define('DASHBOARD_NO_ERRORS_DETECTED_PERMISSION', 'No se han detectado errores en los permisos.');
define('DASHBOARD_ALERT_ERRORS_DETECTED_PERMISSION', ' error(es) en permisos');
define('DASHBOARD_ALERT_WARNINGS_DETECTED_PERMISSION', ' advertencia(s) en permisos; ');

define('DASHBOARD_PWA_OPC_ERROR', 'Advertencia: Est�n habilitados <u><a href="' . tep_href_link(FILENAME_CONFIGURATION, 'gID=7575&amp;cID=3069', 'NONSSL') . '">Pedido en una p�gina</a></u> y <u><a href="' . tep_href_link(FILENAME_CONFIGURATION, 'gID=5&amp;cID=1449', 'NONSSL') . '">Comprar sin cuenta</a></u>.  Por favor deshabilita uno de estos m�dulos.');
define('DASHBOARD_OPC_EMAIL_ERROR', 'Advertencia: Est� habilitado Pedido en una p�gina pero no est� configurada todav�a la <u><a href="' . tep_href_link(FILENAME_CONFIGURATION, 'gID=7575&amp;cID=3079', 'NONSSL') . '">direcci�n de e-mail para depuraci�n de errores</a></u>.');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Error: Existe el directorio de instalaci�n en: ' . (DIR_FS_CATALOG . 'install/') . '. Por favor elimina este directorio por motivos de seguridad.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Error: se puede escribir en el fichero de configuraci�n: ' . (DIR_FS_CATALOG) . 'includes/configure.php. Esto es un riesgo potencial de seguridad - por favor establece los permisos de usuario adecuados para este fichero.');
define('WARNING_ADMIN_CONFIG_FILE_WRITEABLE', 'Error: se puede escribir en el fichero de configuraci�n: ' . (DIR_FS_ADMIN) . 'includes/configure.php. Esto es un riesgo potencial de seguridad - por favor establece los permisos de usuario adecuados para este fichero.');

define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Error: El directorio de sesiones no existe: ' . tep_session_save_path() . '. Las sesiones no funcionar�n hasta que se haya creado este directorio.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Advertencia: No se puede escribir en el directorio de sesiones: ' . tep_session_save_path() . '. Las sesiones no funcionar�n hasta que se hayan establecido los permisos de usuario adecuados.');
define('WARNING_SEO_PHP_VERSION_LOW', 'Error: El servidor web est� ejecutando ' . PHP_VERSION . ' la cual no es suficiente para ejecutar SEO URLs. Por favor deshabilita este m�dulo hasta que se haya actualizado la versi�n de PHP.');
define('WARNING_SESSION_AUTO_START', 'Advertencia: Est� habilitado session.auto_start - por favor deshabilita este par�metro de PHP php.ini y reinicia el servidor web.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio de productos descargables no existe: ' . dirname(DIR_FS_CATALOG) . '/download. Los productos descargables no funcionar�n hasta que este directorio sea v�lido.');
define('WARNING_ADMIN_NOT_RENAMED', 'Advertencia: No se ha renombrado la carpeta admin. Esto es un riesgo potencial de seguridad <u><a href="http://wiki.oscdox.com/v2.5/setting_up_security" target="_blank">por favor lee en el wiki c�mo hacer esto</a></u>.');
define('WARNING_PHP_FILES_IN_BIGIMAGES', 'Advertencia: Hay ficheros en ' . DIR_FS_CATALOG . DYNAMIC_MOPICS_BIGIMAGES_DIR . ' que <b>no</b> son im�genes. Esto puede ser una indicaci�n de que en tu servidor hay software malicioso.');
define('WARNING_PHP_FILES_IN_PRODUCTS', 'Advertencia: Hay ficheros en ' . DIR_FS_CATALOG . DYNAMIC_MOPICS_PRODUCTS_DIR . ' que <b>no</b> son im�genes.  Esto puede ser una indicaci�n de que en tu servidor hay software malicioso.');
define('WARNING_PHP_FILES_IN_THUMBS', 'Advertencia: Hay ficheros en ' . DIR_FS_CATALOG . DYNAMIC_MOPICS_THUMBS_DIR . ' que <b>no</b> son im�genes.  Esto puede ser una indicaci�n de que en tu servidor hay software malicioso.');
define('DASHBOARD_AFFILIATE_EMAIL_ERROR', 'Infobox de afiliados est� activa en la tienda pero no se ha cambiado la direcci�n e-mail predefinida. Por favor <u><a href="' . tep_href_link(FILENAME_INFOBOX_CONFIGURATION, 'gID=1&amp;cID=28', 'NONSSL') . '">deshabilita el m�dulo</a></u> o <u><a href="' . tep_href_link(FILENAME_CONFIGURATION, 'gID=35&amp;cID=1204&amp;action=edit', 'NONSSL') . '"> actualiza la direcci�n e-mail</a></u>.');
?>