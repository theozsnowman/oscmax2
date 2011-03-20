<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Resumen Ventas/Impuestos mensuales');
define('HEADING_TITLE_STATUS','Estado');
define('HEADING_TITLE_REPORTED','Generado');
//Added line
define('TEXT_DETAIL','Detalles');
define('TEXT_ALL_ORDERS', 'Todos los pedidos');
define('TEXT_NOTHING_FOUND', 'No hay ingresos para esta selecci�n de fecha/estado');
//Added 2 lines
define('TEXT_BUTTON_REPORT_BACK','Volver');
define('TEXT_BUTTON_REPORT_INVERT','Invertir');
define('TEXT_BUTTON_REPORT_PRINT','Imprimir');
define('TEXT_BUTTON_REPORT_SAVE','Guardar CSV');
define('TEXT_BUTTON_REPORT_HELP','Ayuda');
//Added 2 lines
define('TEXT_BUTTON_REPORT_BACK_DESC', 'Volver al resumen por meses');
define('TEXT_BUTTON_REPORT_INVERT_DESC', 'Invertir filas de arriba a abajo');
define('TEXT_BUTTON_REPORT_PRINT_DESC', 'Mostrar informe en una ventana para imprimir');
define('TEXT_BUTTON_REPORT_HELP_DESC', 'Acerca de este informe y c�mo utilizar sus caracter�sticas');
//Added line
define('TEXT_BUTTON_REPORT_GET_DETAIL', 'Pulsa para obtener un resumen diario para de este mes');
define('TEXT_REPORT_DATE_FORMAT', 'j M Y -   g:i a'); // date format string
//  as specified in php manual here: http://www.php.net/manual/en/function.date.php
define('TABLE_HEADING_YEAR','A�o');
define('TABLE_HEADING_MONTH', 'Mes');
define('TABLE_HEADING_DAY', 'D�a');
define('TABLE_HEADING_INCOME', 'Ingresos<br> brutos');
define('TABLE_HEADING_SALES', 'Ventas<br> productos');
define('TABLE_HEADING_NONTAXED', 'Ventas libres <br> de impuestos');
define('TABLE_HEADING_TAXED', 'Ventas sujetas<br> a impuestos');
define('TABLE_HEADING_TAX_COLL', 'Impuestos<br> cobrados');
define('TABLE_HEADING_SHIPHNDL', 'Env�o y<br> manipulaci�n');
define('TABLE_HEADING_LOWORDER', 'Cargos por<br> pedido m�nimo');
define('TABLE_HEADING_OTHER', 'Cheques<br> regalo');  // could be any other extra class value
define('TABLE_FOOTER_YTD','YTD');
define('TABLE_FOOTER_YEAR','A�O');
//Added define
define('TEXT_HELP', '<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<title>Informe Ventas/Impuestos mensuales</title>
<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
<link rel="stylesheet" type="text/css" href="includes/javascript/jquery-ui-1.8.2.custom.css">
</head>
<body>
<center>
<table width="95%"><tr><td>
<p class="main" align="center">
<b>C�mo visualizar y utilizar el informe resumen de ingresos</b>
<p class="main" align="justify">
<b>Presentar la actividad mensual</b>
<p class="smallText" align="justify">
Cuando se selecciona inicialmente desde el men� de Informes, este informe muestra un resumen financiero de todos los pedidos almacenados en la base de datos, por meses. Cada mes del historial de la tienda se resume en una fila, mostrando los ingresos de la tienda y sus componentes, y listando los importes de impuestos, cargos por env�o y manipulaci�n, cargos por pedido m�nimo y cheques regalo (si no se tienen habilitados los cargos por pedido m�nimo o los cheques regalo, estas columnas no se muestran). La actividad se genera en la fecha de la compra.
<p class="smallText" align="justify">
En la fila superior est� el mes actual, y las filas debajo de esa resumen cada mes del historial de pedidos. Bajo las filas de cada a�o de calendario hay una l�nea, resumiendo los totales de ese a�o en cada columna del informe. 
<p class="smallText" align="justify">
Para invertir el orden de las columnas, pulsa en el bot�n de "Invertir".
<p class="main" align="justify">
<b>Presentar el resumen mensual por d�as</b>
<p class="smallText" align="justify">
El resumen de la actividad diaria dentro de cualquier mes puede ser mostrada al pulsar sobre el nombre del mes, a la izquierda de la fila. Para volver del resumen diario al resumen mensual, pulsa el bot�n "Volver" en la visualizaci�n diaria.
<p class="main" align="justify">
<b>Qu� representan las columnas (explicaci�n de las cabeceras)</b>
<p class="smallText" align="justify">
A la izquierda se presentan el mes y el a�o de la fila. El resto de columnas son, de izquierda a derecha:
<ul><li class="smallText"><b>Ingresos brutos</b> - el total de todos los pedido  
<li class="smallText"><b>Ventas productos</b> - las ventas totales de los productos comprados por los clientes durante el mes
<br>Entonces, las ventas de productos se dividen en dos categor�as:
<li class="smallText"><b>Ventas libres de impuestos</b> - el subtotal de las ventas a las que no se les aplicaron impuestos, y 
<li class="smallText"><b>Ventas sujetas a impuestos</b> - el subtotal de las ventas a las que s� se les aplicaron impuestos
<li class="smallText"><b>Impuestos cobrados</b> - el importe cobrada a los clientes en concepto de impuestos
<li class="smallText"><b>Env�o y manipulaci�n</b> - el total de cargos cobrados en concepto de env�o y manipulaci�n  
<li class="smallText"><b>Cargos por pedido m�nimo</b> y <b>Cheques regalo</b> - si est�n habilitados los cargos por pedido m�nimo y/o los cheques regalo, se muestran estos totales en columnas separadas
</ul>
<p class="main" align="justify">
<b>Seleccionar informe resumen por estado</b>
<p class="smallText" align="justify">
Para mostrar la informaci�n del resumen mensual o diario para un s�lo estado de pedido, selecciona el estado correspondiente en la lista desplegable en la parte de arriba a la derecha de la pantalla del informe. Dependiendo de la configuraci�n de la tienda para esos valores, puede haber estados para "Pendiente" o "Entregado" por ejemplo. Si cambias este estado el informe ser� recalculado y mostrado en pantalla de nuevo. 
<p class="main" align="justify">
<b>Mostrar los detalles de los impuestos</b>
<p class="smallText" align="justify">
El importe de los impuestos en cualquier fila del informe es un enlace a una ventana emergente, que muestra el nombre de los tipos de impuestos aplicados y los importes individuales.
<p class="main" align="justify">
<b>Imprimir el informe the report</b>
<p class="smallText" align="justify">
Para presentar el informe en una ventana formateado para luego imprimirlo, pulsa en el bot�n de "Imprimir", despu�s utiliza el comando Imprimir de tu navegador en el men� Fichero. El nombre de la tienda y las cabeceras se a�aden para mostrar qu� pedidos se seleccionaron, y la fecha y hora de generaci�n del informe. 
<p class="main" align="justify">
<b>Guardar los valores del informe en un fichero</b>
<p class="smallText" align="justify">
Para almacenar los valores del informe a un fichero en tu equipo, pulsa en el bot�n "Guardar CSV" en la parte inferior del informe. Los valores del informe se enviar�n a tu navegador como un fichero de texto, y se te presentar� una men� de di�logo de Guardar archivo para que elijas d�nde quieres almacenar el fichero. Los conenidos del fichero est�n en formato Comma Separated Value (CSV) - Valores Separados por Comas, con una l�nea por cada fila del informe empezando por la l�nea de cabeceras, y cada valor de la fila est� separado por comas. Este fichero puede ser importado con precisi�n y a conveniencia por herramientas estad�sticas y financieras comunes, tales como Excel y QuattroPro. El fichero es proporcionado al navegador con un nombre que consiste en el nombre del informe, el estado seleccionado, y la fecha y hora. <br><br>
<p class="smallText">v 2.1.1
</td></tr>
</table>
</body>
</html>');
?>