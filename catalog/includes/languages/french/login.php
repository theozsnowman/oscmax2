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
define('TEXT_VISITORS_CART', '<span class="notice"><b>REMARQUE:</b></span> Le contenu de votre &quot;panier visiteurs&quot; sera ajout&eacute; &agrave; celui de votre &quot;panier membres&quot; d&egrave;s que vous aurez ouvert une session.');

//BOF - Checkout Without Account v0.70 changes
define('PWA_FAIL_ACCOUNT_EXISTS', 'Un compte existe d&eacute;j� pour cette adresse e-mail <i>{EMAIL_ADDRESS}</i>.  Vous devez vous identifier avant de proc&eacute;der � la commande.');
define('HEADING_CHECKOUT', '<font size="2">Passez directement vote commande.</font>');
define('TEXT_CHECKOUT_INTRODUCTION', 'Commandez sans cr&eacute;er un compte.  En choisissant cette option aucune de vos informations d\'utilisateur ne sera gard&eacute;e en enregistrement, et vous ne pourrez pas consulter l\'historique de vos commande.');
define('PROCEED_TO_CHECKOUT', 'Proc&eacute;dez � la commande sans enregistrement.');
// EOF - Checkout Without Account changes

// BOF Separate Pricing Per Customer
// define the email address that can change customer_group_id on login
define('SPPC_TOGGLE_LOGIN_PASSWORD','root@localhost');
// EOF Separate Pricing Per Customer
define('TEXT_GUEST_INTRODUCTION','<b>Voulez-vous d\'aller directement � la proc&eacute;dure de paiement?</b> <br><br> Souhaitez-vous commander sans cr&eacute;er un compte client? S\'il vous pla�t noter que l\'ensemble de nos services ne seront pas disponibles pour les clients qui ne souhaitent pas cr&eacute;er un compte. En outre, vous ne pouvez pas afficher l\'&eacute;tat de votre commande, et chaque fois que vous magasinez avec nous, vous devrez entrer de nouveau toutes vos donn&eacute;es. <br><br> Cr&eacute;ation d\'un compte est gratuite. Si vous souhaitez encore passer � la caisse s\'il vous pla�t cliquer sur le bouton de "Continuer" sur votre droite.');

define('TEXT_GV_LOGIN_NEEDED', 'Vous devez �tre connect&eacute; pour &eacute;changer votre bon. S\'il vous pla�t cr&eacute;er un nouveau compte ou se connecter ci-dessous');

?>
