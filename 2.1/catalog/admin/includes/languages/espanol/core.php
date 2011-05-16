<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

// BOF: MOD - Admin w/levels
// header text in includes/header.php
define('HEADER_TITLE_ACCOUNT', 'Mi cuenta/contrase�a');
define('HEADER_TITLE_LOGOFF', 'Cerrar sesi�n');

// Admin Account
define('BOX_HEADING_MY_ACCOUNT', 'Mi cuenta');

// configuration box text in includes/boxes/administrator.php
define('BOX_HEADING_ADMINISTRATOR', 'Administrador');
define('BOX_ADMINISTRATOR_MEMBERS', 'Miembros administraci�n');
define('BOX_ADMINISTRATOR_MEMBER', 'Miembros');
define('BOX_ADMINISTRATOR_BOXES', 'Acceso a archivos');
define('BOX_ADMIN_GROUPS', 'Grupos administraci�n');
define('BOX_MERCHANT_INFO', 'Aplicaci�n Merchant');
define('BOX_PAYPAL_INFO', 'Registro Paypal');

// Filename defines for Admin Group Permissions - when file permission needed but not menu item.
define('FILE_GC_DASHBOARD', '</b>Panel Google Checkout<b>');
define('FILE_COUPON_RESTRICT', '</b>Restringir vales<b>');
define('FILE_VALID_PRODUCTS', '</b>Productos v�lidos<b>');
define('FILE_VALID_CATEGORIES', '</b>Categor�as v�lidas<b>');
define('FILE_LIST_PRODUCTS', '</b>Listar productos<b>');
define('FILE_LIST_CATEGORIES', '</b>Listar categor�as<b>');
define('FILE_TREE_VIEW', '</b>Vista de �rbol<b>');
define('FILE_BANNER_STATISTICS', '</b>Fichero de estad�sticas de banners<b>');
define('FILE_STOCK', '</b>Fichero de existencias de productos<b>');
define('FILE_NEW_ATTRIBUTES_CONFIG', '</b>Variables de configuraci�n de atributos<b>'); 
define('FILE_COMMON_REPORTS', '</b>Fichero de informes<b>');
define('FILE_FEDEX', '</b>Fichero de Fedex<b>');
define('FILE_AFFILIATE', '</b>Fichero de afiliados<b>');
define('FILE_FEEDMACHINE', '</b>Fichero de Feedmachine<b>');
define('FILE_EASYPOPULATE', '</b>Fichero de Easypopulate<b>');
define('FILE_ATTRIBUTE', '</b>Fichero de atributos<b>');
define('FILE_DISCOUNT_CATEGORIES', '</b>Fichero de categor�as de descuento<b>');
define('FILE_CREATE_ACCOUNT', '</b>Fichero de crear cuenta<b>');
define('FILE_ORDER', '</b>Fichero de pedido<b>');
define('FILE_PAYPAL', '</b>Fichero de PayPal<b>');
define('FILE_INFORMATION', '</b>Fichero de p�ginas de informaci�n<b>');

// images
define('IMAGE_FILE_PERMISSION', 'Permisos de archivos');
define('IMAGE_GROUPS', 'Lista de grupos');
define('IMAGE_INSERT_FILE', 'Insertar archivos');
define('IMAGE_MEMBERS', 'Lista de miembros');
define('IMAGE_NEW_GROUP', 'Nuevo grupo');
define('IMAGE_NEW_MEMBER', 'Nuevo miembro');
define('IMAGE_NEXT', 'Siguiente');

// constants for use in tep_prev_next_display function
define('TEXT_DISPLAY_NUMBER_OF_FILENAMES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> nombres de archivos)');
define('TEXT_DISPLAY_NUMBER_OF_MEMBERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> miembros)');
// EOF: MOD - Admin w/levels

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'es_ES'
// on FreeBSD 4.0 I use 'es_ES.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'es_ES.ISO_8859-1');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y');  // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="es"');

// LINE ADDED: MOD -Separate Pricing per Customer
define('ENTRY_CUSTOMERS_GROUP_NAME', 'Grupo de clientes:');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', PROJECT_VERSION);

// BOF: MOD - ORDER EDIT
// Create account & order
define('BOX_HEADING_MANUAL_ORDER', 'Pedidos manuales');
define('BOX_MANUAL_ORDER_CREATE_ACCOUNT', 'Crear cuenta');
define('BOX_MANUAL_ORDER_CREATE_ORDER', 'Generar pedido');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Selecciona por favor');
define('PULL_DOWN_DEFAULT_DOTS', 'Selecciona por favor...');
define('PULL_DOWN_NA', 'N/D');
define('TYPE_BELOW', 'Escriba a continuaci�n');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administraci�n');
define('HEADER_TITLE_SUPPORT_SITE', 'Foros osCmax');
define('HEADER_TITLE_ONLINE_CATALOG', 'Cat�logo');
define('HEADER_TITLE_ADMINISTRATION', 'Administraci�n');
define('HEADER_TITLE_OSCDOX', 'Manual de usuario osCmax');
define('HEADER_TITLE_AABOX', 'osCmax');

// text for gender
define('MALE', 'Hombre');
define('FEMALE', 'Mujer');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/aaaa');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuraci�n');
define('BOX_CONFIGURATION_GENERAL_SETTINGS', 'Par�metros generales');
define('BOX_CONFIGURATION_MYSTORE', 'Mi tienda');
define('BOX_CONFIGURATION_LOGGING', 'Registros');
define('BOX_CONFIGURATION_CACHE', 'Cach�');

// BOF: Added for super-friendly admin menu:
define('BOX_CONFIGURATION_MIN_VALUES', 'Valores m�nimos');
define('BOX_CONFIGURATION_MAX_VALUES', 'Valores m�ximos');
define('BOX_CONFIGURATION_IMAGES', 'Im�genes');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Datos de cliente');
define('BOX_CONFIGURATION_SHIPPING', 'Env�os/Paquetes');
define('BOX_CONFIGURATION_PAGE_CACHE', 'Configuraci�n cach� de p�gina');
define('BOX_CONFIGURATION_PRODUCT_SETTINGS', 'Productos');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Listado productos');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Informaci�n producto');
define('BOX_CONFIGURATION_PRODUCT_PRICE_BREAKS', 'Precios por volumen');
define('BOX_CONFIGURATION_EMAIL', 'Opciones e-mail');
define('BOX_CONFIGURATION_DOWNLOAD', 'Descargas');
define('BOX_CONFIGURATION_GZIP', 'Compresi�n GZip');
define('BOX_CONFIGURATION_SESSIONS', 'Sesiones');
define('BOX_CONFIGURATION_STOCK', 'Existencias');
define('BOX_CONFIGURATION_MC', 'Boletines MailChimp');
define('BOX_CONFIGURATION_WYSIWYG', 'Editor CK');
define('BOX_CONFIGURATION_TEMPLATES', 'Plantillas');
define('BOX_CONFIGURATION_TEMPLATE_SETUP', 'Configuraci�n plantilla');
define('BOX_CONFIGURATION_PAGE_MODULES', 'M�dulos de p�gina');
define('BOX_CONFIGURATION_INFO_PAGES', 'P�ginas de informaci�n');
define('BOX_CONFIGURATION_WELCOME', 'Mensaje de bienvenida');
define('BOX_CONFIGURATION_OFS', 'Destacados');
define('BOX_CONFIGURATION_AFFILIATE', 'Programa de afiliados');
define('BOX_CONFIGURATION_ACCOUNTS', 'Cuentas');
define('BOX_CONFIGURATION_MAINTENANCE', 'Mantenimiento sitio');
define('BOX_CONFIGURATION_MOPICS', 'MoPics din�micas');
define('BOX_CONFIGURATION_PRINT', 'Cat�logo imprimible');
define('BOX_CONFIGURATION_SEO', 'URLs SEO');
define('BOX_CONFIGURATION_SEO_URLS', 'URLs SEO');
define('BOX_CONFIGURATION_SEO_POPOUT', 'Men� pop out SEO');
define('BOX_CONFIGURATION_WISHLIST', 'Configuraci�n favoritos');
define('BOX_CONFIGURATION_EDITOR', 'Editor de pedidos');
define('BOX_CONFIGURATION_SEO_VALIDATION', 'Validaci�n URL SEO');
// EOF: Added for super-friendly admin menu:

define('BOX_CONFIGURATION_LOGGING_CACHE', 'Registros / Cach�');
define('BOX_CONFIGURATION_USEFUL', 'Enlaces �tiles');
define('BOX_CONFIGURATION_OPC', 'Pedido en una p�gina');
define('BOX_CONFIGURATION_CORNER_BANNERS', 'Banners de esquina');
define('BOX_CONFIGURATION_CONTACT', 'Formulario de contacto');
define('BOX_CONFIGURATION_RECAPTCHA', 'Formulario reCaptcha');
define('BOX_CONFIGURATION_NOTIFICATIONS', 'Notificaciones');
define('BOX_CONFIGURATION_SLIDESHOW', 'Presentaci�n diapositivas');
define('BOX_CONFIGURATION_SLIDESHOW_SETTINGS', 'Configuraci�n presentaci�n');

define('BOX_CONFIGURATION_GOOGLE', 'Google');
define('BOX_CONFIGURATION_GOOGLE_ANALYTICS', 'Google Analytics');
define('BOX_CONFIGURATION_GOOGLE_SITEMAP', 'Google SiteMaps');
define('BOX_CONFIGURATION_GOOGLE_MAPS', 'Google Maps');


// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'M�dulos');
define('BOX_MODULES_PAYMENT', 'Pago');
define('BOX_MODULES_SHIPPING', 'Env�o');
define('BOX_MODULES_ORDER_TOTAL', 'Totalizaci�n pedido');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Cat�logo');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categor�as/Productos');
// BOF QPBPP for SPPC
define('BOX_CATALOG_CATEGORIES_DISCOUNT_CATEGORIES', 'Grupos de descuento');
// EOF QPBPP for SPPC
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Atributos de productos');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricantes');
define('BOX_CATALOG_REVIEWS', 'Comentarios');
define('BOX_CATALOG_SPECIALS', 'Ofertas');
define('BOX_CATALOG_SPECIALS_BY_CAT', 'Ofertas por categor�a');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Disponibles pr�ximamente');
// 2 LINES ADDED - EasyPopulate and Attrib Manager
define('BOX_CATALOG_EASYPOPULATE', 'EasyPopulate');
define('BOX_CATALOG_ATTRIBUTE_MANAGER', 'Administrador de atributos');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_ORDERS', 'Pedidos');
// LINE ADDED - Edit customer order
define('BOX_CUSTOMERS_EDIT_ORDERS', 'Editar �rdenes');

// BOF: MOD - Separate Pricing Per Customer
define('BOX_CUSTOMERS_GROUPS', 'Grupos de clientes');
// EOF: MOD - Separate Pricing Per Customer
// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Ubicaciones/Impuestos');
define('BOX_TAXES_COUNTRIES', 'Pa�ses');
define('BOX_TAXES_ZONES', 'Zonas/Provincias');
define('BOX_TAXES_GEO_ZONES', 'Zonas fiscales');
define('BOX_TAXES_TAX_CLASSES', 'Tipos de impuestos');
define('BOX_TAXES_TAX_RATES', 'Tasas de impuestos');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Informes');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Productos visualizados');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Productos comprados');
define('BOX_REPORTS_ORDERS_TOTAL', 'Total pedidos por cliente');
define('BOX_REPORTS_CREDITS', 'Informe cr�ditos cliente');
//++++ QT Pro: Begin Changed code
define('BOX_REPORTS_STATS_LOW_STOCK_ATTRIB', 'Informe de existencias');
//++++ QT Pro: End Changed Code
define('BOX_REPORTS_ADMIN_LOGGING', 'Registro de administradores');
define('BOX_REPORTS_CUST_LOGGING', 'Registro de clientes');
define('BOX_REPORTS_HTTP_ERROR', 'Registro de errores HTTP');
define('BOX_REPORTS_WISHLIST', 'Favoritos de clientes');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Herramientas');
define('BOX_TOOLS_BACKUP', 'Copia de seguridad');
define('BOX_TOOLS_BANNER_MANAGER', 'Administrador banners');
// LINE ADDED: MOD - Batch Print Center
define('BOX_TOOLS_BATCH_CENTER', 'Centro impresi�n por lotes');
define('BOX_TOOLS_CACHE', 'Control de cach�');
define('BOX_TOOLS_QTPRODOCTOR', 'Doctor QTPro');
define('BOX_TOOLS_MAIL', 'Enviar e-mail');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Administrador boletines');
define('BOX_TOOLS_SERVER_INFO', 'Informaci�n servidor');
define('BOX_TOOLS_WHOS_ONLINE', 'Usuarios conectados');
define('BOX_TOOLS_PACKAGING', 'Paquetes');
define('BOX_TOOLS_UPS_BOXES_USED', 'Cajas UPS usadas');
define('BOX_TOOLS_QUICK_LINKS', 'Enlaces r�pidos');
define('BOX_TOOLS_SLIDESHOW', 'Im�genes presentaci�n');
define('BOX_TOOLS_REGEN', 'Administrador im�genes');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Localizaci�n');
define('BOX_LOCALIZATION_CURRENCIES', 'Monedas');
define('BOX_LOCALIZATION_LANGUAGES', 'Idiomas');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Estados de pedidos');
define('BOX_PREMADE', 'Comentarios predefinidos');

// affiliates box text in includes/boxes/affiliate.php
define('BOX_HEADING_AFFILIATES', 'Afiliados');

// vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_VOUCHERS', 'Vales/cheques');

// ADDED 2 LINE- recover cart box text
define('BOX_REPORTS_RECOVER_CART_SALES', 'Ventas recuperaci�n carritos');
define('BOX_TOOLS_RECOVER_CART', 'Recuperaci�n carritos');

// LINE ADDED - Monthly Tax-Sales totals
define('BOX_REPORTS_MONTHLY_SALES', 'Ventas/Impuestos mensuales');

// LINE ADDED - InfoBox Admin in includes/boxes/info_boxes.php
define('BOX_HEADING_BOXES', 'Infoboxes');

// javascript messages
define('JS_ERROR', '�Se han producido errores al procesar tu formulario!\nPor favor realiza las siguientes correcciones:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* El atributo necesita un precio\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* El atributo necesita un prefijo para el precio\n');

define('JS_PRODUCTS_NAME', '* El producto necesita un nombre\n');
define('JS_PRODUCTS_DESCRIPTION', '* El producto necesita una descripci�n\n');
define('JS_PRODUCTS_PRICE', '* El producto necesita un precio\n');
define('JS_PRODUCTS_WEIGHT', '* El producto necesita un peso\n');
define('JS_PRODUCTS_QUANTITY', '* El producto necesita una cantidad\n');
define('JS_PRODUCTS_MODEL', '* El producto necesita una referencia\n');
define('JS_PRODUCTS_IMAGE', '* El producto necesita una imagen\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Debe especificar un nuevo precio para el producto\n');

define('JS_GENDER', '* Debe especificar el \'Sexo\'.\n');
define('JS_FIRST_NAME', '* El campo \'Nombre\' debe tener al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* El campo \'Apellidos\' debe tener al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* El campo \'Fecha de nacimiento\' debe tener el formato: xx/xx/xxxx (d�a/mes/a�o).\n');
define('JS_EMAIL_ADDRESS', '* El campo \'Direcci�n e-mail\' debe tener al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_ADDRESS', '* El campo \'Direcci�n\' debe tener al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* El campo \'C�digo postal\' debe tener al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* El campo \'Poblaci�n\' debe tener al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* Debe seleccionar \'Provincia\'.\n');
define('JS_STATE_SELECT', '-- Seleccionar arriba --');
define('JS_ZONE', '* Debe seleccionar \'Provincia\' de la lista de este pa�s.\n');
define('JS_COUNTRY', '* Debe seleccionar \'Pa�s\'.\n');
define('JS_TELEPHONE', '* El campo \'Tel�fono\' debe tener al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.\n');
define('JS_PASSWORD', '* Los campos \'Contrase�a\' y \'Confirmaci�n\' deben coincidir y tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.\n');

define('JS_ORDER_DOES_NOT_EXIST', '�El n�mero de pedido %s no existe!');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Direcci�n');
define('CATEGORY_CONTACT', 'Contacto');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Opciones');
define('CATEGORY_PASSWORD', 'Contrase�a');

define('ENTRY_GENDER', 'Sexo:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_GENDER_TEXT', '&nbsp;&nbsp;<span class="errorText">*</span>');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">m�n. ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_FIRST_NAME_TEXT', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">m�n. ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_LAST_NAME_TEXT', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(p.ej. 21/05/1970)</span>');
define('ENTRY_DATE_OF_BIRTH_TEXT', '&nbsp;<span class="errorText">*</span><small> (p.ej. 05/21/1970)</small>');
define('ENTRY_EMAIL_ADDRESS', 'Direcci�n e-mail:');
define('ENTRY_EMAIL_ADDRESS_TEXT', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">m�n. ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">�Esa direcci�n e-mail no parece ser v�lida!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">�Esta direcci�n e-mail ya existe!</span>');
define('ENTRY_COMPANY', 'Empresa:');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_COMPANY_ERROR', '&nbsp;<span class="errorText">m�n. ' . ENTRY_COMPANY_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_STREET_ADDRESS', 'Direcci�n:');
define('ENTRY_STREET_ADDRESS_TEXT', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">m�n. ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_SUBURB', 'L�nea 2 de direcci�n:');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'C�digo postal:');
define('ENTRY_POST_CODE_TEXT', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">m�n. ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_CITY', 'Poblaci�n:');
define('ENTRY_CITY_TEXT', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">m�n. ' . ENTRY_CITY_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_TEXT', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">obligatorio</span>');
define('ENTRY_COUNTRY', 'Pa�s:');
define('ENTRY_COUNTRY_TEXT', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Tel�fono:');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">m�n. ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Bolet�n de noticias:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Suscrito');
define('ENTRY_NEWSLETTER_NO', 'No suscrito');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Contrase�a:');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmaci�n contrase�a:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '&nbsp;<span class="errorText">*</span>');
define('ENTRY_PASSWORD_ERROR', '&nbsp;<span class="errorText">m�n. ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_PASSWORD_TEXT', '&nbsp;<span class="errorText">*</span>');
define('PASSWORD_HIDDEN', '--OCULTO--');
// EOF: MOD - ORDER EDIT


// BOF: MOD - Separate Pricing Per Customer
define('ENTRY_COMPANY_TAX_ID', 'NIF de la empresa:');
define('ENTRY_COMPANY_TAX_ID_ERROR', '');
define('ENTRY_CUSTOMERS_GROUP_REQUEST_AUTHENTICATION', 'Alerta de autentificaci�n:');
define('ENTRY_CUSTOMERS_GROUP_RA_NO', 'Desactivada');
define('ENTRY_CUSTOMERS_GROUP_RA_YES', 'Activada');
define('ENTRY_CUSTOMERS_GROUP_RA_ERROR', '');
// EOF: MOD - Separate Pricing Per Customer



// images
define('IMAGE_ANI_SEND_EMAIL', 'Enviando e-mail');
define('IMAGE_BACK', 'Volver');
define('IMAGE_BACKUP', 'Copiar');
define('IMAGE_CANCEL', 'Cancelar');
define('IMAGE_CONFIRM', 'Confirmar');
define('IMAGE_COPY', 'Copiar');
define('IMAGE_COPY_TO', 'Copiar a');
define('IMAGE_DETAILS', 'Detalles');
define('IMAGE_DELETE', 'Eliminar');
define('IMAGE_EDIT', 'Editar');
define('IMAGE_EMAIL', 'E-mail');
define('IMAGE_FILE_MANAGER', 'Administrador archivos');
define('IMAGE_ICON_STATUS_GREEN', 'Activado');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Activar');
define('IMAGE_ICON_STATUS_RED', 'Desactivado');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Desactivar');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Insertar');
define('IMAGE_LOCK', 'Bloquear');
define('IMAGE_MODULE_INSTALL', 'Instalar M�dulo');
define('IMAGE_MODULE_REMOVE', 'Quitar M�dulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Nuevo banner');
define('IMAGE_NEW_CATEGORY', 'Nueva categoria');
define('IMAGE_NEW_COUNTRY', 'Nuevo pa�s');
define('IMAGE_NEW_CURRENCY', 'Nueva moneda');
define('IMAGE_NEW_FILE', 'Nuevo fichero');
define('IMAGE_NEW_FOLDER', 'Nueva carpeta');
define('IMAGE_NEW_LANGUAGE', 'Nuevo idioma');
define('IMAGE_NEW_NEWSLETTER', 'Nuevo bolet�n');
define('IMAGE_NEW_PRODUCT', 'Nuevo producto');
define('IMAGE_NEW_TAX_CLASS', 'Nuevo tipo de impuesto');
define('IMAGE_NEW_TAX_RATE', 'Nueva tasa de impuesto');
define('IMAGE_NEW_TAX_ZONE', 'Nueva zona fiscal');
define('IMAGE_NEW_ZONE', 'Nueva zona');
define('IMAGE_ORDERS', 'Pedidos');
define('IMAGE_ORDERS_INVOICE', 'Factura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Albar�n');
define('IMAGE_PREVIEW', 'Vista previa');
define('IMAGE_RESTORE', 'Restaurar');
define('IMAGE_RESET', 'Restablecer');
define('IMAGE_SAVE', 'Guardar');
define('IMAGE_SEARCH', 'Buscar');
define('IMAGE_SELECT', 'Seleccionar');
define('IMAGE_SEND', 'Enviar');
define('IMAGE_SEND_EMAIL', 'Enviar e-mail');
define('IMAGE_UNLOCK', 'Desbloquear');
define('IMAGE_UPDATE', 'Actualizar');
define('IMAGE_UPDATE_CURRENCIES', 'Actualizar cambio monetario');
define('IMAGE_UPLOAD', 'Subir');
define('IMAGE_PREV_ORDER', 'Pedido anterior');
define('IMAGE_NEXT_ORDER', 'Pedido siguiente');
// BOF QPBPP for SPPC
define('IMAGE_SHOW_PRODUCTS', 'Mostrar productos');
// EOF QPBPP for SPPC
// BOF Open Featured Sets
define('IMAGE_PICK_COLOR', 'Elegir color');
// EOF Open Featured Sets
define('IMAGE_SETTINGS', 'Configuraci�n');
define('IMAGE_SUMMARY', 'Resumen');
define('IMAGE_BROWSE', 'Examinar');
define('IMAGE_MISSING', 'Perdidas');
define('IMAGE_ORPHANS', 'Hu�rfanas');
define('IMAGE_REGENERATE_ALL', 'Regenerar todas las im�genes de este producto');
define('IMAGE_REGENERATE_EVERYTHING', 'Regenerar todas las im�genes');
define('IMAGE_MC_SYNC', 'Sincronizar con MailChimp');
define('IMAGE_HELP', 'Ayuda');
define('IMAGE_LOGOFF', 'Cerrar sesi�n');
define('IMAGE_MANAGE_ACCOUNT', 'Gestionar cuenta');
define('IMAGE_BUTTON_UNSUBSCRIBE', 'Cancelar suscripci�n');
define('IMAGE_BULK_SET_STATUS', 'Configurar todos');
define('IMAGE_ACTIVATE_ALL', 'Activar todos');
define('IMAGE_DEACTIVATE_ALL', 'Desactivar todos');

define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Carpeta actual');
define('ICON_DELETE', 'Eliminar');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Fichero');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Carpeta');
define('ICON_LOCKED', 'Bloqueado');
define('ICON_PREVIOUS_LEVEL', 'Nivel anterior');
define('ICON_PREVIEW', 'Vista previa');
define('ICON_STATISTICS', 'Estad�sticas');
define('ICON_SUCCESS', '�xito');
define('ICON_TICK', 'Cierto');
define('ICON_UNLOCKED', 'Desbloqueado');
define('ICON_WARNING', 'Advertencia');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'P�gina %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> pa�ses)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostrando de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> monedas)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> boletines)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> estados de pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos esperados)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> comentarios)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> ofertas)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> tipos de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Mostrando de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> zonas fiscales)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Mostrando de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> tasas de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrando de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> zonas)');
define('TEXT_DISPLAY_NUMBER_OF_SHIPMENTS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> env�os)');
define('TEXT_DISPLAY_NUMBER_OF_QUICK_LINKS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> enlaces r�pidos)');
define('TEXT_DISPLAY_NUMBER_OF_PM_CONFIGURATION', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> m�dulos)');
define('TEXT_DISPLAY_NUMBER_OF_SLIDESHOW', 'Mostrando de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> diapositivas)');
define('TEXT_DISPLAY_NUMBER_OF_IMAGES', 'Mostrando de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> im�genes)');

//BOF: MOD - Catagories Discriptions
define('TEXT_EDIT_CATEGORIES_HEADING_TITLE', 'T�tulo de categor�a:');
define('TEXT_EDIT_CATEGORIES_DESCRIPTION', 'Descripci�n de categor�a:');
//EOF: MOD - Catagories Discriptions

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'predeterminado/a');
define('TEXT_SET_DEFAULT', 'Establecer como predeterminado/a');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obligatorio</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: No hay una moneda predeterminada. Por favor establece una en: Administraci�n->Localizaci�n->Monedas');

define('TEXT_CACHE_CATEGORIES', 'Categor�as');
define('TEXT_CACHE_MANUFACTURERS', 'Fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'M�dulo de tambi�n compraron');

define('TEXT_NONE', 'Ninguno');
define('TEXT_TOP', 'Inicio');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: No existe el destino .');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: No se puede escribir en el destino.');
define('ERROR_FILE_NOT_SAVED', 'Error: El archivo subido no se ha guardado.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: Extensi�n de fichero no permitida.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Correcto: Fichero guardado correctamente.');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia: No se ha subido ning�n archivo.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Advertencia: Se ha desactivado la subida de archivos en el fichero de configuraci�n php.ini.');

// LINE ADDED - XSell
define('BOX_CATALOG_XSELL_PRODUCTS', 'Productos relacionados'); // X-Sell

// BOF: MOD - Article Manager
define('BOX_HEADING_ARTICLES', 'Noticias');
define('BOX_TOPICS_ARTICLES', 'Secciones/Noticias');
define('BOX_ARTICLES_CONFIG', 'Configuraci�n noticias');
define('BOX_ARTICLES_AUTHORS', 'Autores');
define('BOX_ARTICLES_REVIEWS', 'Comentarios');
define('BOX_ARTICLES_XSELL', 'Relacionar con productos');
define('IMAGE_NEW_TOPIC', 'Nueva secci�n');
define('IMAGE_NEW_ARTICLE', 'Nueva noticia');
define('TEXT_DISPLAY_NUMBER_OF_AUTHORS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> autores)');
// EOF: MOD - Article Manager

// BOF: MOD - FedEx
define('IMAGE_ORDERS_SHIP', 'Enviar paquete');
define('IMAGE_ORDERS_FEDEX_LABEL','Ver o imprimir etiqueta de env�o FedEx');
define('IMAGE_ORDERS_TRACK','Seguimiento de env�o FedEx');
define('IMAGE_ORDERS_CANCEL_SHIPMENT','Cancelar env�o FedEx');
define('BOX_SHIPPING_MANIFEST','Lista de carga env�o FedEx');
// EOF: MOD - FedEx

// BOF: PHONE ORDER
define('BOX_PHONE_ORDER', 'Pedido telef�nico');
// EOF: PHONE ORDER

// BOF: EXPORT CUSTOMERS TO CSV
define('BOX_CUSTOMERS_EXPORT', 'Exportar clientes');
// EOF: EXPORT CUSTOMERS TO CSV

// BOF: Customers with purchases report
define('BOX_REPORTS_STATS_REGISTER_CUSTOMER_NO_PURCHASE', 'Clientes sin compras');
// EOF: Customers with purchases report

// BOF: Quicker Product Edit
define('IMAGE_ICON_EDIT', 'Edici�n r�pida');
// EOF: Quicker Product Edit

// BOF: Feed Machine
define('BOX_CATALOG_FEEDMACHINE', 'Feedmachine');
// EOF: Feed Machine

// BOF: Extra Product Fields
define('TEXT_NOT_APPLY', 'Ninguno');
define('BOX_CATALOG_PRODUCTS_EXTRA_FIELDS', 'Campos extra de producto');
define('BOX_CATALOG_PRODUCTS_EXTRA_VALUES', 'Valores de campos extra');
// EOF: Extra Product Fields

// BOF: MSRP
define('TEXT_PRODUCTS_MSRP', '&nbsp;PVR:&nbsp;');
define('TEXT_PRODUCTS_OUR_PRICE', '&nbsp;Nuestro&nbsp;precio:&nbsp;');
define('TEXT_PRODUCTS_SALE', '&nbsp;Precio&nbsp;oferta:&nbsp;');
define('TEXT_PRODUCTS_SAVINGS', '&nbsp;Se&nbsp;ahorra:&nbsp;');
define('TEXT_PRODUCTS_PRICE_MSRP', 'Precio Venta Recomendado (PVR):');
// EOF: MSRP

define('TEXT_YYYY_MM_DD', '(AAAA-MM-DD)');

define('TEXT_RATING', 'Valoraci�n: ');
define('TEXT_POOR', 'Regular');
define('TEXT_FAIR', 'Aceptable');
define('TEXT_AVERAGE', 'Bueno');
define('TEXT_GOOD', 'Muy bueno');
define('TEXT_EXCELLENT', 'Excelente');

define('BOX_HEADING_SECURITY', 'Seguridad');
define('TEXT_PRODUCTS', 'Productos');
define('TEXT_SEARCH', 'Buscar: ');
define('TEXT_WELCOME', ' Bienvenido, ');

define('TEXT_WRONG_PASSWORD', 'Contrase�a err�nea');
define('TEXT_WRONG_USERNAME', 'Nombre de usuario err�neo');
define('TEXT_LOGGED_IN', 'Inicio de sesi�n');
define('TEXT_LOGGED_OUT', 'Cierre de sesi�n');
define('TEXT_CONFIG_CHANGE', 'Cambio configuraci�n: ');

// Footer defines
define('TEXT_POWERED_BY', 'Desarrollado con ');
define('TEXT_SECURITY', 'Seguridad: ');
define('TEXT_REPORT_BUGS', 'Informar acerca de errores');
define('TEXT_FORUM', 'Foros');
define('TEXT_WIKI', 'Wiki de documentaci�n de ayuda');
define('TEXT_COPYRIGHT', 'Copyright');


?>