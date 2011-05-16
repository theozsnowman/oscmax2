<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('BOX_INFORMATION_AFFILIATE', 'Programa de afiliados');
define('BOX_HEADING_AFFILIATE', 'Programa de afiliados');
define('BOX_HEADING_AFFILIATE_NEWS', 'Noticias de afiliado');
define('BOX_AFFILIATE_CENTRE','Centro de afiliados');
define('BOX_AFFILIATE_BANNER_CENTRE','Enlaces de afiliado');
define('BOX_AFFILIATE_REPORT_CENTRE','Informes de afiliado');
define('BOX_AFFILIATE_INFO', 'Informaci�n de afiliado');
define('BOX_AFFILIATE_SUMMARY', 'Resumen de afiliado');
define('BOX_AFFILIATE_PASSWORD','Cambiar contrase�a');
define('BOX_AFFILIATE_NEWS','Noticias de afiliados');
define('BOX_AFFILIATE_NEWSLETTER','Bolet�n');
define('BOX_AFFILIATE_ACCOUNT', 'Editar cuenta de afiliado');
define('BOX_AFFILIATE_REPORTS','Informes de afiliado');
define('BOX_AFFILIATE_CLICKRATE', 'Informe de clics');
define('BOX_AFFILIATE_PAYMENT', 'Informe de pagos');
define('BOX_AFFILIATE_SALES', 'Informe de ventas');
define('BOX_AFFILIATE_BANNERS', 'Banners de afiliado');
define('BOX_AFFILIATE_BANNERS_BANNERS','Banners de sitio web');
define('BOX_AFFILIATE_BANNERS_BUILD_CAT','Crear enlace de categor�a');
define('BOX_AFFILIATE_BANNERS_BUILD','Crear enlace de producto');
define('BOX_AFFILIATE_BANNERS_PRODUCT','Banners de producto');
define('BOX_AFFILIATE_BANNERS_CATEGORY','Banners de categor�a');
define('BOX_AFFILIATE_BANNERS_TEXT','Enlaces s�lo de texto');
define('BOX_AFFILIATE_BUILD_YOUR_OWN', 'Cree sus propios enlaces');
define('TEXT_PAYMENT_ID','Muestra el n�mero de identificaci�n, de los pagos.');
define('TEXT_SALES_PAYMENT_DATE','Muestra la fecha, de los pagos.');
define('TEXT_SALES_PAYMENT_Ammount','Las ganancias de afiliado representan la comisi�n por la venta');
define('TEXT_PAYMENT_STATUS','Estado de la venta representa el estado de la venta.');
define('BOX_AFFILIATE_CONTACT', 'Cont�ctenos');
define('BOX_AFFILIATE_FAQ', 'FAQ del programa de afiliados');
define('BOX_AFFILIATE_LOGIN', 'Iniciar sesi�n de afiliado');
define('BOX_AFFILIATE_LOGOUT', 'Cerrar sesi�n de afiliado');
define('BOX_AFFILIATE_YOUR_ACCOUNT', 'Cuenta de afiliado');
define('TEXT_AFFILIATE_CONTACT_TEXT', 'Consulta%20de%20afiliado%0D%0A%0D%0AMensaje:%20');
define('TEXT_AFFILIATE_TEXT_VERSION', 'Versi�n texto: ');

define('ENTRY_AFFILIATE_PAYMENT_DETAILS', 'Pagadero a:');
define('ENTRY_AFFILIATE_ACCEPT_AGB', 'Marque aqu� para confirmar que ha le�do y est� de acuerdo con los <a target="_new" href="' . tep_href_link(FILENAME_AFFILIATE_TERMS, '', 'SSL') . '">T�rminos y Condiciones del Programa de afiliados</a>.');
define('ENTRY_AFFILIATE_ACCEPT_AGB_TEXT','T�rminos y Condiciones del Programa de afiliados');
define('ENTRY_AFFILIATE_AGB_ERROR', '�&nbsp;<small><font color="#FF0000">Debe aceptar nuestros T�rminos y Condiciones del Programa de afiliados</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_CHECK', 'Beneficiario de cheques:');
define('ENTRY_AFFILIATE_PAYMENT_CHECK_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_CHECK_ERROR', '&nbsp;<small><font color="#FF0000">requerido</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_PAYPAL', 'E-mail de cuenta PayPal:');
define('ENTRY_AFFILIATE_PAYMENT_PAYPAL_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_PAYPAL_ERROR', '&nbsp;<small><font color="#FF0000">requerido</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_BANK_NAME', 'Nombre del banco:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_NAME_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_BANK_NAME_ERROR', '&nbsp;<small><font color="#FF0000">requerido</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NAME', 'Titular de la cuenta:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NAME_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NAME_ERROR', '&nbsp;<small><font color="#FF0000">requerido</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NUMBER', 'N�mero de cuenta:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NUMBER_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NUMBER_ERROR', '&nbsp;<small><font color="#FF0000">requerido</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_BANK_BRANCH_NUMBER', 'N�mero de sucursal:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_BRANCH_NUMBER_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_BANK_BRANCH_NUMBER_ERROR', '&nbsp;<small><font color="#FF0000">requerido</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_BANK_SWIFT_CODE', 'C�digo SWIFT:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_SWIFT_CODE_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_BANK_SWIFT_CODE_ERROR', '&nbsp;<small><font color="#FF0000">requerido</font></small>');
define('ENTRY_AFFILIATE_COMPANY', 'Compa��a');
define('ENTRY_AFFILIATE_COMPANY_TEXT', '');
define('ENTRY_AFFILIATE_COMPANY_ERROR', '&nbsp;<small><font color="#FF0000">requerido</font></small>');
define('ENTRY_AFFILIATE_COMPANY_TAXID', 'NIF:');
define('ENTRY_AFFILIATE_COMPANY_TAXID_TEXT', '');
define('ENTRY_AFFILIATE_COMPANY_TAXID_ERROR', '&nbsp;<small><font color="#FF0000">requerido</font></small>');
define('ENTRY_AFFILIATE_HOMEPAGE', 'P�gina web');
define('ENTRY_AFFILIATE_HOMEPAGE_TEXT', '&nbsp;<small><font color="#AABBDD">requerido (http://)</font></small>');
define('ENTRY_AFFILIATE_HOMEPAGE_ERROR', '&nbsp;<small><font color="#FF0000">requerido (http://)</font></small>');
define('ENTRY_AFFILIATE_NEWSLETTER','Bolet�n de afiliado');
define('ENTRY_AFFILIATE_NEWSLETTER_TEXT','');
define('ENTRY_AFFILIATE_NEWSLETTER_ERROR','&nbsp;<small><font color="#FF0000">requerido</font></small>');

define('CATEGORY_PAYMENT_DETAILS', 'Se le realizan los pagos mediante:');
?>