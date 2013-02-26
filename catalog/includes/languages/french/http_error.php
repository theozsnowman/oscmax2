<?php
/*
$Id: http_error.php 982 2011-01-06 02:53:12Z michael.oscmax@gmail.com $

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
define('NAVBAR_TITLE', 'Erreur HTTP');
define('HEADING_TITLE', 'Erreur %s');
define('TEXT_INFORMATION', 'Nous sommes d&eacute;sol&eacute;s mais la page que vous avez demand&eacute; a rencontr&eacute; l\'erreur suivante:
<br><br><b>%s</b><br><br>S\'il vous pla&icirc;t n\'h&eacute;sitez pas &agrave; parcourir le reste de notre boutique en ligne. Vous pouvez &eacute;galement utiliser la fonction \'Recherche avanc&eacute;e\' ci-dessous pour trouver le produit que vous recherchez. Nous nous excusons pour les d&eacute;sagr&eacute;ments.');

define('EMAIL_BODY', 
'------------------------------------------------------' . "\n" .
'Site: %s.' . "\n" .
'Error Code: %s - %s' . "\n" .
'Occurred: %s' . "\n" .
'Requested URL: %s' . "\n" .
'User Address: %s' . "\n" .
'User Agent: %s' . "\n" .
'Referer: %s' . "\n" .
'------------------------------------------------------'
);

define('EMAIL_TEXT_SUBJECT', 'Un client a eu une erreur HTTP');

//Client Error Codes 
define('ERROR_400_DESC', 'La syntaxe de la requ�te est erron�e 400');
define('ERROR_401_DESC', 'Une authentification est n�cessaire pour acc�der � la ressource 401');
define('ERROR_403_DESC', 'L�authentification est refus�e. Contrairement � l�erreur 401, aucune demande d�authentification ne sera faite 403');
define('ERROR_404_DESC', 'Document non trouv� 404');
define('ERROR_405_DESC', 'M�thode de requ�te non autoris�e 405');
define('ERROR_408_DESC', 'emps d�attente d�une r�ponse du serveur �coul� 408.');
define('ERROR_415_DESC', 'Le contenu de la demande a �t� pr�sent�e avec le type de m�dia non valide ou non autoris� 415.');
define('ERROR_416_DESC', 'La ressource demand�e est invalide ou d\'une partie n\'est pas disponible sur le serveur 416.');
define('ERROR_417_DESC', '&Comportement attendu et d�fini dans l�en-t�te de la requ�te insatisfaisable 417');

//Server Error Codes
define('ERROR_500_DESC', 'Erreur interne du serveur 500');
define('ERROR_501_DESC', 'Fonctionnalit� r�clam�e non support�e par le serveur 501');
define('ERROR_502_DESC', 'Mauvaise r�ponse envoy�e � un serveur interm�diaire par un autre serveur 502.');
define('ERROR_503_DESC', 'Service temporairement indisponible ou en maintenance 503');
define('ERROR_504_DESC', 'Temps d�attente d�une r�ponse d�un serveur � un serveur interm�diaire �coul� 504');
define('ERROR_505_DESC', 'Version HTTP non g�r�e par le serveur 505');
define('UNKNOWN_ERROR_DESC', 'Erreur ind&eacute;finni');
?>