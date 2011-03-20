<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_WISHLIST','Mis favoritos');
define('NAVBAR_TITLE_1','Favoritos');
define('HEADING_TITLE','Mis favoritos:');
define('HEADING_TITLE2', ' tiene como favoritos:');

define('TEXT_NAME','Nombre:');
define('TEXT_EMAIL','Correo electr�nico:');
define('TEXT_YOUR_NAME','Su nombre:');
define('TEXT_YOUR_EMAIL','Su correo electr�nico:');
define('TEXT_MESSAGE','Mensaje:');
define('TEXT_ITEM_IN_CART','Art�culo en el carrito');
define('TEXT_ITEM_NOT_AVAILABLE','El art�culo ya no est� disponible');
define('TEXT_DISPLAY_NUMBER_OF_WISHLIST','Mostrando <b>%d</b> a <b>%d</b> (<b>%d</b> elementos de sus favoritos.)');
define('WISHLIST_EMAIL_TEXT','Si desea enviar por correo sus favoritos a varios amigos o familiares, simplemente introduzca sus nombres y los correos electr�nicos en cada fila. No tiene que rellenar cada campo, s�lo las filas necesarias seg�n las personas a las que desee enviar los favoritos. Despu�s introduzca un breve mensaje que le gustar�a incluir en su email. Este mensaje ser� a�adido a todos los correos electr�nicos que env�e.');
define('WISHLIST_EMAIL_TEXT_GUEST','Si desea enviar por correo sus favoritos a varios amigos o familiares, por favor, introduzca sus nombre y los correos electr�nicos en cada fila. No tiene que rellenar cada campo, s�lo las filas necesarias seg�n las personas a las que desee enviar los favoritos. Despu�s introduzca un breve mensaje que le gustar�a incluir en su email. Este mensaje ser� a�adido a todos los correos electr�nicos que env�e.');
define('WISHLIST_EMAIL_SUBJECT','le ha enviado sus favoritos de ' . STORE_NAME);  //Customers name will be automatically added to the beginning of this.
define('WISHLIST_SENT','Se han enviado sus favoritos.');
define('WISHLIST_EMAIL_LINK', '

$from_name\'s public Wish List is located here:
$link

Thank you,
' . STORE_NAME); //$from_name = Customers name  $link = public wishlist link

define('WISHLIST_EMAIL_GUEST', 'Thank you,
' . STORE_NAME);

define('ERROR_YOUR_NAME','Por favor, introduzca su nombre.');
define('ERROR_YOUR_EMAIL','Por favor, introduzca su correo electr�nico.');
define('ERROR_VALID_EMAIL','Por favor, introduzca una direcci�n de correo electr�nico v�lida.');
define('ERROR_ONE_EMAIL','Debe incluir al menos un nombre y correo electr�nico.');
define('ERROR_ENTER_EMAIL','Por favor, introduzca una direcci�n de correo electr�nico.');
define('ERROR_ENTER_NAME','Por favor, introduzca el nombre del destinatario del correo electr�nico.');
define('ERROR_MESSAGE','Por favor, incluya un mensaje breve.');

define('WISHLIST_SECURITY_CHECK','Por favor complete esta comprobaci�n de seguridad:');
define('WISHLIST_SECURITY_CHECK_ERROR','No ha escrito correctamente el c�digo de comprobaci�n de seguridad. Int�ntelo de nuevo.');
define('CLEAR_WISHLIST','�Est� seguro que desea quitar todos los favoritos de la lista?');
?>