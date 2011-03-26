<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/


// Global entries for the <html> tag
define('HTML_PARAMS','dir="LTR" lang="es"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', STORE_NAME);

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Crear cuenta');
define('HEADER_TITLE_MY_ACCOUNT', 'Mi cuenta');
define('HEADER_TITLE_CONTACT_US', 'Contacto');
define('HEADER_TITLE_CART_CONTENTS', 'Ver carrito');
define('HEADER_TITLE_BASKET_CONTENTS', 'Ver cesta');
define('HEADER_TITLE_CHECKOUT', 'Realizar pedido');
define('HEADER_TITLE_WISHLIST', 'Favoritos');
define('HEADER_TITLE_TOP', 'Inicio');
define('HEADER_TITLE_CATALOG', 'Cat�logo');
define('HEADER_TITLE_LOGOFF', 'Cerrar sesi�n');
define('HEADER_TITLE_LOGIN', 'Iniciar sesi�n');

// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'peticiones desde');

// text for gender
define('MALE', 'Hombre');
define('FEMALE', 'Mujer');
define('MALE_ADDRESS', 'Sr.');
define('FEMALE_ADDRESS', 'Sra.');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/aaaa');

// categories box text in includes/boxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Categor�as');

// manufacturers box text in includes/boxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Fabricantes');

// whats_new box text in includes/boxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Novedades');

// quick_find box text in includes/boxes/quick_find.php
define('BOX_HEADING_SEARCH', 'B�squeda r�pida');
define('BOX_SEARCH_TEXT', 'Use palabras clave para encontrar el producto que busca.');
define('BOX_SEARCH_ADVANCED_SEARCH', 'B�squeda avanzada');

// specials box text in includes/boxes/specials.php
define('BOX_HEADING_SPECIALS', 'Ofertas');

// reviews box text in includes/boxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Comentarios');
define('BOX_REVIEWS_WRITE_REVIEW', 'Escriba un comentario para este producto');
define('BOX_REVIEWS_NO_REVIEWS', 'Actualmente no hay ningun comentario');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s de 5 estrellas');

// shopping_cart box text in includes/boxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', 'Carrito');
define('BOX_HEADING_SHOPPING_BASKET', 'Cesta');
define('BOX_SHOPPING_CART_EMPTY', '0 productos');

// BOF: MOD - Wishlist 3.5
//wishlist box text in includes/boxes/wishlist.php 
define('BOX_HEADING_CUSTOMER_WISHLIST', 'Mis favoritos'); 
define('TEXT_WISHLIST_COUNT', 'Actualmente tiene %s productos en favoritos.');
define('BOX_TEXT_REMOVE', 'Quitar');
define('BOX_TEXT_PRICE', 'Precio');
define('BOX_TEXT_PRODUCT', 'Nombre del producto');
define('BOX_TEXT_IMAGE', 'Imagen');
define('BOX_TEXT_SELECT', 'Seleccionar');
define('BOX_TEXT_VIEW', 'Mostrar');
define('BOX_TEXT_HELP', 'Ayuda');
define('BOX_WISHLIST_EMPTY', '0 productos');
define('BOX_TEXT_NO_ITEMS', 'No tiene productos en favoritos. <br /><br /><b><a href="' . tep_href_link(FILENAME_WISHLIST_HELP) . '"><u>Pulse aqu�</u></a> para leer la ayuda sobre los favoritos</b>');
// EOF: MOD - Wishlist 3.5

// order_history box text in includes/boxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'Mis pedidos');

// best_sellers box text in includes/boxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Los m�s vendidos');
define('BOX_HEADING_BESTSELLERS_IN', 'Los m�s vendidos en <br>&nbsp;&nbsp;');

// notifications box text in includes/boxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Avisos');
define('BOX_NOTIFICATIONS_NOTIFY', 'Av�seme de cambios de <b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'No me avise de cambios de <b>%s</b>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Fabricante');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'P�gina de %s');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Otros productos');

// languages box text in includes/boxes/languages.php
define('BOX_HEADING_LANGUAGES', 'Idiomas');

// currencies box text in includes/boxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Monedas');

// information box text in includes/boxes/information.php
define('BOX_HEADING_INFORMATION', 'Informaci�n');
define('BOX_INFORMATION_PRIVACY', 'Pol�tica de privacidad');
define('BOX_INFORMATION_CONDITIONS', 'Condiciones de uso');
define('BOX_INFORMATION_SHIPPING', 'Env�os/Devoluciones');
define('BOX_INFORMATION_CONTACT', 'Contacte con nosotros');
// LINE ADDED: SITE MAP
define('BOX_INFORMATION_SITEMAP', 'Mapa web');

// tell a friend box text in includes/boxes/tell_a_friend.php
define('BOX_HEADING_TELL_A_FRIEND', 'Cu�ntaselo a un amigo');
define('BOX_TELL_A_FRIEND_TEXT', 'Cu�ntale a un amigo que conoces este producto.');

//MailChimp
define('BOX_HEADING_MAILCHIMP', 'Bolet�n');
define('MAILCHIMP_INTRO_TEXT', 'Si desea suscribirse a nuestro bolet�n, por favor introduzca aqu� su email:');
define('MAILCHIMP_INTRO_TEXT_SUBSCRIBED', 'Actualmente se encuentra suscrito a nuestro bolet�n');
define('MAILCHIMP_INTRO_TEXT_UNSUBSCRIBED', 'Si desea suscribirse a nuestro bolet�n, por favor introduzca aqu� su email:');
define('MAILCHIMP_HTML', 'HTML');
define('MAILCHIMP_TEXT', 'Texto');
define('MAILCHIMP_MISSING_INTRO', 'La informaci�n en la configuraci�n de Mailchimp no est� completa. <br><br><b>Faltan los par�metros:</b>');
define('MAILCHIMP_NEED_ENABLING', '<b>Por favor habilite el m�dulo</b>');
define('MAILCHIMP_MISSING_API', 'API Key');
define('MAILCHIMP_MISSING_ID', 'List ID');
define('MAILCHIMP_MISSING_URL', 'List URL');
define('MAILCHIMP_MISSING_U', 'U value');

// LINE ADDED: MOD - allprods modification
define('BOX_INFORMATION_ALLPRODS', 'Vea todos los productos');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Datos de entrega');
define('CHECKOUT_BAR_PAYMENT', 'Datos de pago');
define('CHECKOUT_BAR_CONFIRMATION', 'Confirmaci�n');
define('CHECKOUT_BAR_FINISHED', '�Finalizado!');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Seleccione');
define('PULL_DOWN_DEFAULT_DOTS', 'Selecciona por favor...');
define('PULL_DOWN_NA', 'N/D');
define('TYPE_BELOW', 'Escriba a continuaci�n');

// javascript messages
define('JS_ERROR', 'Se han producido errores al procesar su formulario. Por favor, realice las siguientes correciones:');

define('JS_REVIEW_TEXT', '* Su \'Comentario\' debe tener al menos ' . REVIEW_TEXT_MIN_LENGTH . ' letras.\n');
define('JS_REVIEW_RATING', '* Debe valorar el producto sobre el que opina.\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Por favor seleccione una forma de pago para su pedido.\n');

define('JS_ERROR_SUBMITTED', 'Ya se ha enviado el formulario. Pulse Aceptar y espere a que termine el proceso.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Por favor seleccione una forma de pago para su pedido.');

define('CATEGORY_COMPANY', 'Datos de la empresa');
define('CATEGORY_PERSONAL', 'Datos personales');
define('CATEGORY_ADDRESS', 'Direcci�n');
define('CATEGORY_CONTACT', 'Informaci�n de contacto');
define('CATEGORY_OPTIONS', 'Opciones');
define('CATEGORY_PASSWORD', 'Contrase�a');

define('ENTRY_COMPANY', 'Nombre de la empresa:');
define('ENTRY_COMPANY_ERROR', 'Por favor introduzca el nombre de su empresea');
define('ENTRY_COMPANY_TEXT', '*');
define('ENTRY_COMPANY_TAX_ID', 'NIF empresa:');
define('ENTRY_COMPANY_TAX_ID_ERROR', 'Por favor introduzca el NIF de su empresa');
define('ENTRY_COMPANY_TAX_ID_TEXT', '*');
define('ENTRY_GENDER', 'Sexo:');
define('ENTRY_GENDER_ERROR', 'Por favor seleccione una opci�n.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', 'Su nombre debe tener al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' letras.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', 'Sus apellidos deben tener al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' letras.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Su fecha de nacimiento debe tener este formato: DD/MM/AAAA (p.ej. 21/05/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (p.ej. 21/05/1970)');
define('ENTRY_EMAIL_ADDRESS', 'Direcci�n e-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Su direcci�n de e-mail debe tener al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' letras.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Su direcci�n de e-mail no parece v�lida - por favor haga los cambios necesarios.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Su direcci�n de e-mail ya figura entre nuestros clientes - puede entrar a su cuenta con esta direcci�n o crear una cuenta nueva con una direcci�n diferente.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Direcci�n:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Su direcci�n debe tener al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' letras.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'L�nea 2 de direcci�n');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'C�digo postal:');
define('ENTRY_POST_CODE_ERROR', 'Su c�digo postal debe tener al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' letras.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Poblaci�n:');
define('ENTRY_CITY_ERROR', 'Su poblaci�n debe tener al menos ' . ENTRY_CITY_MIN_LENGTH . ' letras.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', 'Su provincia debe tener al menos ' . ENTRY_STATE_MIN_LENGTH . ' letras.');
define('ENTRY_STATE_ERROR_SELECT', 'Por favor seleccione de la lista desplegable.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Pa�s:');
define('ENTRY_COUNTRY_ERROR', 'Debe seleccionar un pa�s de la lista desplegable.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Tel�fono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Su n�mero de tel�fono debe tener al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' letras.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', 'Por favor introduzca su n�mero de fax');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Bolet�n de noticias:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'suscribirse');
define('ENTRY_NEWSLETTER_NO', 'no suscribirse');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Contrase�a:');
define('ENTRY_PASSWORD_ERROR', 'Su contrase�a debe tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' letras.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'La confirmaci�n de la contrase�a debe ser igual a la contrase�a.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirme contrase�a:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Contrase�a actual:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Su contrase�a debe tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' letras.');
define('ENTRY_PASSWORD_NEW', 'Nueva contrase�a:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Su contrase�a nueva debe tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' letras.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'La confirmaci�n de su contrase�a debe coincidir con su contrase�a nueva.');
define('PASSWORD_HIDDEN', '--OCULTO--');

define('FORM_REQUIRED_INFORMATION', '* Dato obligatorio');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'P�ginas de resultados:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> comentarios)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos nuevos)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando del<b>%d</b> al <b>%d</b> (de <b>%d</b> ofertas)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Primera p�gina');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'P�gina anterior');
define('PREVNEXT_TITLE_NEXT_PAGE', 'P�gina siguiente');
define('PREVNEXT_TITLE_LAST_PAGE', '�ltima p�gina');
define('PREVNEXT_TITLE_PAGE_NO', 'P�gina %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Anteriores %d p�ginas');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Siguientes %d p�ginas');
define('PREVNEXT_BUTTON_FIRST', 'Primera');
define('PREVNEXT_BUTTON_PREV', 'Anterior');
define('PREVNEXT_BUTTON_NEXT', 'Siguiente');
define('PREVNEXT_BUTTON_LAST', '�ltima');

define('IMAGE_BUTTON_ADD_ADDRESS', 'A�adir direcci�n');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Agenda de direcciones');
define('IMAGE_BUTTON_BACK', 'Volver');
define('IMAGE_BUTTON_BUY_NOW', 'Compre ahora');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Cambiar direcci�n');
define('IMAGE_BUTTON_CHECKOUT', 'Realizar pedido');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Confirmar pedido');
define('IMAGE_BUTTON_CONTINUE', 'Continuar');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Seguir comprando');
define('IMAGE_BUTTON_DELETE', 'Eliminar');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Modificar cuenta');
define('IMAGE_BUTTON_HISTORY', 'Historial de pedidos');
define('IMAGE_BUTTON_LOGIN', 'Inicio de sesi�n');
define('IMAGE_BUTTON_IN_CART', 'A�adir al carrito');
define('IMAGE_BUTTON_IN_BASKET', 'A�adir a la cesta');
define('IMAGE_OUT_OF_STOCK', 'Agotado');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Avisos');
define('IMAGE_BUTTON_QUICK_FIND', 'B�squeda r�pida');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Quitar avisos');
define('IMAGE_BUTTON_REVIEWS', 'Comentarios');
define('IMAGE_BUTTON_SEARCH', 'Buscar');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Opciones de env�o');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Cu�ntaselo a un amigo');
define('IMAGE_BUTTON_UPDATE', 'Actualizar');
define('IMAGE_BUTTON_UPDATE_CART', 'Actualizar carrito');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Escribir comentario');
define('IMAGE_BUTTON_CFP', 'Consultar precio');
define('IMAGE_BUTTON_AAQ', 'Preg�ntenos sobre este producto');
define('IMAGE_BUTTON_MORE_INFO', 'M�s informaci�n');
define('IMAGE_BUTTON_REMOVE_PRODUCT', 'Quitar producto');
define('IMAGE_BUTTON_SEND', 'Enviar');
define('IMAGE_BUTTON_WISHLIST_HELP', 'Ayuda de favoritos');
define('IMAGE_BUTTON_WISHLIST', 'A�adir a favoritos');

define('SMALL_IMAGE_BUTTON_DELETE', 'Eliminar');
define('SMALL_IMAGE_BUTTON_EDIT', 'Modificar');
define('SMALL_IMAGE_BUTTON_VIEW', 'Ver');

define('ICON_ARROW_RIGHT', 'm�s');
define('ICON_CART', 'En carrito');
define('ICON_ERROR', 'Error');
define('ICON_SUCCESS', 'Correcto');
define('ICON_WARNING', 'Advertencia');

// BOF: MOD - CATALOG_PRODUCTS_WITH_IMAGES_mod
define('BOX_CATALOG_PRODUCTS_WITH_IMAGES', 'Cat�logo imprimible');
define('IMAGE_BUTTON_UPSORT', 'Orden ascendente');
define('IMAGE_BUTTON_DOWNSORT', 'Orden descendente');
// EOF: MOD - CATALOG_PRODUCTS_WITH_IMAGES_mod

//2 LINES ADDED: MOD - Down For Maintenance
define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'NOTA: Este sitio web estar� cerrado por mantenimiento el: ');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'NOTA: El sitio web est� actualmente cerrado por mantenimiento');

define('TEXT_SORT_PRODUCTS', 'Ordenar productos ');
define('TEXT_DESCENDINGLY', 'descendentemente');
define('TEXT_ASCENDINGLY', 'ascendentemente');
define('TEXT_BY', ' por ');

define('TEXT_REVIEW_BY', 'por %s');
define('TEXT_REVIEW_WORD_COUNT', '%s palabras');
define('TEXT_REVIEW_RATING', 'Valoraci�n: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Fecha de publicaci�n: %s');
define('TEXT_NO_REVIEWS', 'Actualmente no hay ningun comentario.');

define('TEXT_NO_NEW_PRODUCTS', 'En este momento no hay novedades.');

define('TEXT_UNKNOWN_TAX_RATE', 'Impuesto desconocido');

define('TEXT_REQUIRED', '<span class="errorText">Obligatorio</span>');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>Error:</small> No he podido enviar el email con el servidor SMTP especificado. Revisa la configuraci�n del archivo php.ini y corrija el servidor SMTP si es necesario.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Advertencia: El directorio de instalaci�n existe en: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/install. Por razones de seguridad, elimine este directorio completamente.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Advertencia: Se puede escribir en el fichero de configuraci�n: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php. En determinadas circunstancias esto puede suponer un riesgo de seguridad - por favor corrija los permisos de este fichero.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio para guardar datos de sesi�n no existe: ' . tep_session_save_path() . '. Las sesiones no funcionar�n hasta que no se cree el directorio.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Avertencia: No puedo escribir en el directorio para datos de sesi�n: ' . tep_session_save_path() . '. Las sesiones no funcionar�n hasta que no se establezcan correctamente los permisos del directorio.');
define('WARNING_SEO_PHP_VERSION_LOW', 'Avertencia: Tu servidor web est� funcionando con la versi�n de PHP ' . PHP_VERSION . ' que no es suficiente para el funcionamiento de SEO URLs. Por favor deshabilita este m�dulo hasta que hayas actualizado la versi�n de PHP.');
define('WARNING_SESSION_AUTO_START', 'Advertencia: session.auto_start esta activado - desactiva esta caracter�stica en el fichero php.ini y reinicia el servidor web.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Advertencia: El directorio para productos descargables no existe: ' . DIR_FS_DOWNLOAD . '. Los productos descargables no funcionar�n hasta que este directorio exista y sea v�lido.');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'La fecha de caducidad de la tarjeta de cr�dito es incorrecta. Compruebe la fecha e int�ntelo de nuevo.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'El n�mero de la tarjeta de cr�dito es incorrecto. Compruebe el n�mero e int�ntelo de nuevo.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Los primeros cuatro digitos de su tarjeta son: %s. Si este n�mero es correcto, no aceptamos este tipo de tarjetas. Si es incorrecto, int�ntelo de nuevo.');
define('WARNING_JAVASCRIPT_DISABLED', 'Alerta: Se ha detectado que tiene Javascript desactivado. Para conseguir una mejor experiencia deber�a activarlo. Si necesita ayuda con esto por favor <b>pulse aqu�.</b>');
define('WARNING_IE6_DETECTED', 'Advertencia: Se ha detectado que est� usando Internet Explorer 6, cuya tecnolog�a es obsoleta. Le recomendamos fervientemente que <b>actualice su navegador</b>. Pruebe con los navegadores m�s populares como <a href="http://www.microsoft.com/spain/windows/internet-explorer/default.aspx"><b>Internet Explorer</b></a>, <a href="http://www.mozilla-europe.org/es/firefox/"><b>Firefox</b></a> � <a href="http://www.google.com/chrome?hl=es"><b>Chrome</b></a>');

define('FOOTER_TEXT_BODY', 'Todo el contenido e im�genes Copyright &copy; ' . date('Y') . ' <a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a><br> Copyright &copy; 2000 - ' . date("Y") .  '<a href="http://oscmax.com"> osCmax</a><br>Powered by <a href="http://www.oscmax.com" target="_blank">' . PROJECT_VERSION . '</a>');


// BOF: MOD - Checkout Without Account
define('IMAGE_BUTTON_CREATE_ACCOUNT', 'Crear cuenta');
define('NAV_ORDER_INFO', 'Informaci�n del pedido');
// EOF: MOD - Checkout Without Account

// BOF: MOD - Article Manager
define('BOX_HEADING_ARTICLES', 'Noticias');
define('BOX_ALL_ARTICLES', 'Todas las noticias');
define('BOX_NEW_ARTICLES', '�ltimas noticias');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES', 'Mostrando de <b>%d</b> a <b>%d</b> (de <b>%d</b> noticias)');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES_NEW', 'Mostrando de <b>%d</b> a <b>%d</b> (de <b>%d</b> �ltimas noticias)');
define('TABLE_HEADING_AUTHOR', 'Autor');
define('TABLE_HEADING_ABSTRACT', 'Extracto');
define('BOX_HEADING_AUTHORS', 'Noticias por autor');
define('NAVBAR_TITLE_DEFAULT', 'Noticias');
// EOF: MOD - Article Manager

// BOF: MOD - Login Box My Account
define('BOX_HEADING_LOGIN_BOX', 'Iniciar sesi�n');
define('BOX_LOGINBOX_EMAIL', 'Direcci�n e-mail:');
define('BOX_LOGINBOX_PASSWORD', 'Contrase�a:');
define('BOX_LOGINBOX_TEXT_NEW', 'Crear una cuenta');
define('BOX_LOGINBOX_NEW', 'crear una cuenta');
define('BOX_LOGINBOX_FORGOT_PASSWORD', '�Olvid� su contrase�a?');
define('BOX_HEADING_LOGIN_BOX_MY_ACCOUNT','Mi cuenta');
define('LOGIN_BOX_ACCOUNT_EDIT','Modificar datos');
define('LOGIN_BOX_ACCOUNT_HISTORY','Historial de pedidos');
define('LOGIN_BOX_ADDRESS_BOOK','Agenda de direcciones');
define('LOGIN_BOX_PRODUCT_NOTIFICATIONS','Avisos de productos');
define('LOGIN_BOX_MY_ACCOUNT','Datos de mi cuenta');
define('LOGIN_BOX_LOGOFF','Cerrar sesi�n');
define('LOGIN_BOX_PRODUCTS_NEW','Novedades');
define('LOGIN_BOX_SPECIALS', 'Ofertas');
define('LOGIN_BOX_WISHLIST', 'Mis favoritos');
define('LOGIN_BOX_NEWSLETTERS', 'Boletines');
// EOF: MOD - Login Box My Account

// BOF: QPBPP for SPPC
define('MINIMUM_ORDER_NOTICE', 'El pedido m�nimo de %s es de %d unidades. El contenido del carrito se ha modificado en consecuencia.');
define('QUANTITY_BLOCKS_NOTICE', '%s s�lo se puede pedir como un m�ltiplo de %d. El contenido del carrito se ha modificado en consecuencia.');
// EOF: QPBPP for SPPC

// BOF: Customer Comments contrib
define('SUCCESS_ORDER_UPDATED', 'Correcto: El pedido se a actualizado correctamente.');
define('WARNING_ORDER_NOT_UPDATED', 'Advertencia: No hay cambios. El pedido no ha cambiado.');
// EOF: Customer Comments contrib

// BOF: Open Featured Sets
define('OPEN_FEATURED_BOX_HEADING', 'Productos destacados');
define('OPEN_FEATURED_BOX_CATEGORY_HEADING', 'Categor�as destacadas');
define('OPEN_FEATURED_BOX_MANUFACTURERS_HEADING', 'Destacamos');
define('OPEN_FEATURED_BOX_MANUFACTURER_HEADING', 'Destacamos');
define('OPEN_FEATURED_TABLE_HEADING_PRICE', ''); //Price: 
define('TEXT_MORE_INFO', 'm�s...');
// EOF: Open Featured Sets

// BOF: Extra Product Fields
define('TEXT_ANY_VALUE', 'Cualquier valor');
define('TEXT_RESTRICT_TO', 'Restringir <b>%s</b> a: %s y sus subvalores (si tiene).');
// EOF: Extra Product Fields

// LINE ADDED: MOD - EASY CALL FOR PRICE v1.4
define('TEXT_CALL_FOR_PRICE', '�Consultar precio!');

// BOF: MSRP
define('TEXT_PRODUCTS_OUR_PRICE', '&nbsp;Nuestro&nbsp;precio:&nbsp;');
define('TEXT_PRODUCTS_SALE', '&nbsp;era:&nbsp;');
define('TEXT_PRODUCTS_SAVINGS', '&nbsp;Se&nbsp;ahorra:&nbsp;');
define('TEXT_PRODUCTS_PRICENOW', '&nbsp;ahora:&nbsp;');
define('TEXT_PRODUCTS_USUALPRICE', '&nbsp;Precio habitual:&nbsp;');
// EOF: MSRP

define('TEXT_LATEST_PRODUCTS', '�ltimos productos');
define('TEXT_SPECIALS', 'Ofertas');
define('TEXT_READ_MORE', ' ... leer m�s ... ');

define('TEXT_MISSING_IMAGE','Lo sentimos, la imagen del producto no est� disponible');
define('TEXT_PAGE', 'P�gina: ');

// Review Ratings
define('TEXT_RATING', 'Valoraci�n: ');
define('TEXT_POOR', 'Regular');
define('TEXT_FAIR', 'Aceptable');
define('TEXT_AVERAGE', 'Bueno');
define('TEXT_GOOD', 'Muy bueno');
define('TEXT_EXCELLENT', 'Excelente');

// Password Text
define('PW_TOO_WEAK', 'Muy d�bil');
define('PW_WEAK', 'Contrase�a d�bil');
define('PW_NORMAL', 'Fortaleza normal');
define('PW_STRONG', 'Contrase�a fuerte');
define('PW_VERY_STRONG', 'Contrase�a muy fuerte');

// Product listing
define('TEXT_PRODUCT_NAME_AZ', 'Nombre producto (A-Z)');
define('TEXT_PRODUCT_NAME_ZA', 'Nombre producto (Z-A)');
define('TEXT_PRICE_LOW_HIGH', 'Precio (Menor - Mayor)');
define('TEXT_PRICE_HIGH_LOW', 'Precio (Mayor - Menor)');
define('TEXT_SHOW_ALL', 'Mostrar todos');
define('TEXT_VIEW_AS_LIST', 'Mostrar como lista');
define('TEXT_VIEW_AS_GRID', 'Mostrar en cuadr�cula');
define('TEXT_RESULTS_PAGE', 'Resultados/p�gina: ');
define('TEXT_SORT_ORDER', 'Orden: ');

?>