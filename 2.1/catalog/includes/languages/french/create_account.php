<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Cr�er un compte');

define('HEADING_TITLE', 'Cr�er un compte');

define('TEXT_ORIGIN_LOGIN', '<font color="#000000">Ouvrir un compte sur '.STORE_NAME.' est absolument gratuit !<br><br>Toutes les informations que vous nous donnerez resteront bien �videmment strictement priv�es et r�serv�es. � aucun moment vos informations ne seront divulgu�es &agrave; d\'autres parties pour aucune action ou propos commercial. Toutes ces informations ne servent � '.STORE_NAME.' que pour mieux vous suivre et vous servir...<br><br> Vous pourrez � tout moment voir, mettre � jour ou supprimer les informations que vous nous aurez donn�es. Il vous suffira pour cela de vous identifier sur notre site et de cliquer sur le lien "Mon compte" Vous gardez ainsi � tout moment le plein contr�le sur les informations que vous nous avez transmises...</font><br><br>');

define('EMAIL_ACCOUNT_DETAILS', 'Account Details:');
define('EMAIL_ACCOUNT_USERNAME', 'Username:');
define('ACCOUNT_PASSWORD', 'Password:');
define('EMAIL_SUBJECT', 'Bienvenue sur ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Cher Mr. ' . stripslashes($_POST['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_MS', 'Ch�re Ms. ' . stripslashes($_POST['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_NONE', 'Cher ' . stripslashes($_POST['firstname']) . ',' . "\n\n");
define('EMAIL_WELCOME', 'Nous vous souhaitons la bienvenue sur <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Vous pouvez d�sormais acc�der � nos services :' . "\n\n" . '<li><b>Un panier permanent</b>' . "\n" . '----------------' . "\n\n" . '     Tous les articles resteront dans votre panier jusqu\'� ce que vous conformiez votre commande. Vous pouvez � tout moment supprimer les articles de votre choix.' . "\n\n" . '<li><b>Carnet d\'adresses</b>' . "\n" . '-----------------' . "\n\n" . '     Vous pouvez cr�er votre carnet d\'adresse, et nous demander la livraison � toute adresse de votre choix.' . "\n\n" . '<li><b>Historique des commandes</b>' . "\n" . '------------------------' . "\n\n" . '     Vous avez acc�s � l\'historique de vos commandes sur votre compte.' . "\n\n" . '<li><b>Vos suggestions</b>' . "\n" . '---------------' . "\n\n" . '     N\'h�sitez pas � exprimer vos opinions sur le site '.STORE_NAME.'.' . "\n\n\n");
define('EMAIL_CONTACT', 'Pour toute aide sur les services, merci de contacter : ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', 'Nous vous remercions pour la confiance que vous nous t�moigniez en vous enregistrant comme nouveau client sur le site ' . HTTP_COOKIE_DOMAIN . "\n\n" . '<b>Observation :</b> ' . HTTP_COOKIE_DOMAIN . ' ne saurait en aucun cas �tre responsable des utilisations qui pourraient �tre effectu�es sur une bo�te email d\'une tierce personne.');
// BOF - MOD: CREDIT CLASS Gift Voucher Contribution
define('EMAIL_GV_INCENTIVE_HEADER', "\n\n" .'Pour votre bienvenue comme nouveau client, nous vous avons envoy� un ch�que cadeaux d\'une valeur de %s');
define('EMAIL_GV_REDEEM', 'Le code de ce ch�que cadeau est : %s, vous pouvez entrer ce code au moment de votre commande');
define('EMAIL_GV_LINK', 'ou en suivant ce lien ');
define('EMAIL_COUPON_INCENTIVE_HEADER', "\n\n" .'F�licitations, pour votre premi�re visite � notre magasin en ligne, pour vous remercier nous vous envoyons une remise par coupon.' . "\n" .
                                        ' Ci-dessous les d�tails du Coupon de Remise cr�� juste pour vous.' . "\n");
define('EMAIL_COUPON_REDEEM', 'Utiliser le coupon %s au moment de votre commande');
// EOF - MOD: CREDIT CLASS Gift Voucher Contribution
?>