<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Secciones / Noticias');
define('HEADING_TITLE_SEARCH', 'Buscar:');
define('HEADING_TITLE_GOTO', 'Ir a:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_TOPICS_ARTICLES', 'Secciones / Noticias');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TABLE_HEADING_STATUS', 'Estado');

define('TEXT_ARTICLES_CURRENT', 'Seleccionado:');

define('TEXT_NEW_ARTICLE', 'Nueva noticia en &quot;%s&quot;');
define('TEXT_TOPICS', 'Secciones:');
define('TEXT_SUBTOPICS', 'Subsecciones:');
define('TEXT_ARTICLES', 'Noticias:');
define('TEXT_ARTICLES_AVERAGE_RATING', 'Valoraci�n media:');
define('TEXT_ARTICLES_HEAD_TITLE_TAG', 'T�tulo de la p�gina HTML:');
define('TEXT_ARTICLES_HEAD_DESC_TAG', 'Meta Description:<br><small>(Extracto noticia =<br>primeros %s caracteres)</small>');
define('TEXT_ARTICLES_HEAD_KEYWORDS_TAG', 'Meta Keywords:');
define('TEXT_DATE_ADDED', 'Fecha de creaci�n:');
define('TEXT_DATE_AVAILABLE', 'Fecha de publicaci�n:');
define('TEXT_LAST_MODIFIED', '�ltima modificaci�n:');
define('TEXT_NO_CHILD_TOPICS_OR_ARTICLES', 'Por favor introduce una nueva secci�n o noticia en este nivel.');
define('TEXT_ARTICLE_MORE_INFORMATION', 'Para m�s informaci�n, visita la <a href="http://%s" target="blank"><u>p�gina</u></a> de esta noticia.');
define('TEXT_ARTICLE_DATE_ADDED', 'Esta noticia fue publicada en nuestra web el %s.');
define('TEXT_ARTICLE_DATE_AVAILABLE', 'Esta noticia ser� publicada el %s.');

define('TEXT_EDIT_INTRO', 'Por favor, haz los cambios necesarios');
define('TEXT_EDIT_TOPICS_ID', 'ID de secci�n:');
define('TEXT_EDIT_TOPICS_NAME', 'Nombre de secci�n:');
define('TEXT_EDIT_SORT_ORDER', 'Orden:');

define('TEXT_INFO_COPY_TO_INTRO', 'Por favor escoge una nueva secci�n para copiar esta noticia');
define('TEXT_INFO_CURRENT_TOPICS', 'Secciones diponibles:');

define('TEXT_INFO_HEADING_NEW_TOPIC', 'Nueva secci�n');
define('TEXT_INFO_HEADING_EDIT_TOPIC', 'Editar secci�n');
define('TEXT_INFO_HEADING_DELETE_TOPIC', 'Borrar secci�n');
define('TEXT_INFO_HEADING_MOVE_TOPIC', 'Mover secci�n');
define('TEXT_INFO_HEADING_DELETE_ARTICLE', 'Borrar noticia');
define('TEXT_INFO_HEADING_MOVE_ARTICLE', 'Mover noticia');
define('TEXT_INFO_HEADING_COPY_TO', 'Copiar a');

define('TEXT_DELETE_TOPIC_INTRO', '�Estas seguro de que quieres borrar esta secci�n?');
define('TEXT_DELETE_ARTICLE_INTRO', '�Estas seguro de que quieres borrar de forma permanente esta noticia?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>ADVERTENCIA:</b> �Hay %s subsecciones vinculadas a esta secci�n!');
define('TEXT_DELETE_WARNING_ARTICLES', '<b>ADVERTENCIA:</b> �Hay %s noticias vinculadas a esta secci�n!');

define('TEXT_MOVE_ARTICLES_INTRO', 'Por favor selecciona una secci�n de destino para <b>%s</b>');
define('TEXT_MOVE_TOPICS_INTRO', 'Por favor selecciona una secci�n de destino para <b>%s</b>');
define('TEXT_MOVE', 'Mover <b>%s</b> a:');

define('TEXT_NEW_TOPIC_INTRO', 'Por favor rellena la siguiente informaci�n para la nueva secci�n');
define('TEXT_TOPICS_NAME', 'Nombre de secci�n:');
define('TEXT_SORT_ORDER', 'Orden:');

define('TEXT_EDIT_TOPICS_HEADING_TITLE', 'T�tulo de cabecera de la secci�n:');
define('TEXT_EDIT_TOPICS_DESCRIPTION', 'Descripci�n de la secci�n:');

define('TEXT_ARTICLES_STATUS', 'Estado de la noticia:');
define('TEXT_ARTICLES_DATE_AVAILABLE', 'Fecha en que se publicar�:');
define('TEXT_ARTICLE_AVAILABLE', 'Publicada');
define('TEXT_ARTICLE_NOT_AVAILABLE', 'Borrador');
define('TEXT_ARTICLES_AUTHOR', 'Autor:');
define('TEXT_ARTICLES_NAME', 'Nombre de la noticia:');
define('TEXT_ARTICLES_DESCRIPTION', 'Contenido de la noticia:');
define('TEXT_ARTICLES_URL', 'URL de la noticia:');
define('TEXT_ARTICLES_URL_WITHOUT_HTTP', '<small>(sin http://)</small>');

define('EMPTY_TOPIC', 'Secci�n vac�a');

define('TEXT_HOW_TO_COPY', 'M�todo de copia:');
define('TEXT_COPY_AS_LINK', 'Vincular noticia');
define('TEXT_COPY_AS_DUPLICATE', 'Duplicar noticia');

define('ERROR_CANNOT_LINK_TO_SAME_TOPIC', 'Error: No es posible vincular noticias en la misma secci�n.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de imagenes no tiene permisos de escritura: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de im�genes no existe: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_TOPIC_TO_PARENT', 'Error: Una secci�n no puede moverse a una subsecci�n.');

define('TEXT_ARTICLES_SHOW_ON_INDEX','Mostrar este art�culo en la p�gina de inicio?');
define('DO_SHOW_ON_INDEX','S�');
define('DO_NOT_SHOW_ON_INDEX','No');
define('IMAGE_SHOW_ON_INDEX','Este art�culo se muestra en la p�gina de inicio.');
?>