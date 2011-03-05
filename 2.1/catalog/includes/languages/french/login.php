<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Ouverture de session');
define('HEADING_TITLE', 'Bienvenue, veuillez ouvrir une session');

define('HEADING_NEW_CUSTOMER', 'Nouveau client');
define('TEXT_NEW_CUSTOMER', 'Je suis un nouveau client.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'En cr&eacute;ant votre compte sur ' . STORE_NAME . ' vous pourrez faire vos achats plus rapidements, garder votre panier d\'une visite &agrave; l\'autre et suivre vos commandes.');

define('HEADING_RETURNING_CUSTOMER', 'Client enregistr&eacute;');
define('TEXT_RETURNING_CUSTOMER', 'J\'ai d&eacute;j&agrave; command&eacute;.');

define('TEXT_PASSWORD_FORGOTTEN', 'Vous avez oubli&eacute; votre mot de passe? Cliquez ici.');

define('TEXT_LOGIN_ERROR', 'Erreur: aucun r&eacute;sultat &agrave; cette adresse &eacute;lectronique et/ou mot de passe.');
define('TEXT_VISITORS_CART', '<font color="#ff0000"><b>REMARQUE:</b></font> Le contenu de votre &quot;panier visiteurs&quot; sera ajout&eacute; &agrave; celui de votre &quot;panier membres&quot; d&egrave;s que vous aurez ouvert une session.');

//BOF - Checkout Without Account v0.70 changes
define('PWA_FAIL_ACCOUNT_EXISTS', 'Un compte existe d�j� pour cette adresse e-mail <i>{EMAIL_ADDRESS}</i>.  Vous devez vous identifier avant de proc�der � la commande.');
define('HEADING_CHECKOUT', '<font size="2">Passez directement vote commande.</font>');
define('TEXT_CHECKOUT_INTRODUCTION', 'Commandez sans cr�er un compte.  En choisissant cette option aucune de vos informations d\'utilisateur ne sera gard�e en enregistrement, et vous ne pourrez pas consulter l\'historique de vos commande.');
define('PROCEED_TO_CHECKOUT', 'Proc�dez � la commande sans enregistrement.');
// EOF - Checkout Without Account changes

// BOF Separate Pricing Per Customer
// define the email address that can change customer_group_id on login
define('SPPC_TOGGLE_LOGIN_PASSWORD','root@localhost');
// EOF Separate Pricing Per Customer
define('TEXT_GUEST_INTRODUCTION','<b>Voulez-vous d\'aller directement � la proc�dure de paiement?</b> <br><br> Souhaitez-vous commander sans cr�er un compte client? S\'il vous pla�t noter que l\'ensemble de nos services ne seront pas disponibles pour les clients qui ne souhaitent pas cr�er un compte. En outre, vous ne pouvez pas afficher l\'�tat de votre commande, et chaque fois que vous magasinez avec nous, vous devrez entrer de nouveau toutes vos donn�es. <br><br> Cr�ation d\'un compte est gratuite. Si vous souhaitez encore passer � la caisse s\'il vous pla�t cliquer sur le bouton de commande sur votre droite.');

define('TEXT_GV_LOGIN_NEEDED', 'Vous devez �tre connect� pour �changer votre bon. S\'il vous pla�t cr�er un nouveau compte ou se connecter ci-dessous');

?>
