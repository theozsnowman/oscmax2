<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
/*
  One Page Checkout, Version: 1.08

  I.T. Web Experts
  http://www.itwebexperts.com

  Copyright (c) 2009 I.T. Web Experts
*/

define('NAVBAR_TITLE', 'Finaliser votre achat');
define('NAVBAR_TITLE_1', 'Finaliser votre achat');

define('HEADING_TITLE', 'Finaliser votre achat');

define('TABLE_HEADING_SHIPPING_ADDRESS', 'Addresse de livraison');
define('TABLE_HEADING_BILLING_ADDRESS', 'Addresse de facturation');

define('TABLE_HEADING_PRODUCTS_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS_NAME', 'Nom de produits');
define('TABLE_HEADING_PRODUCTS_QTY', 'Quantit�');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Prix par piece');
define('TABLE_HEADING_PRODUCTS_FINAL_PRICE', 'Prix total');
define('TABLE_HEADING_PRODUCTS_REMOVE_ITEM', 'Supprimer article');

define('TABLE_HEADING_PRODUCTS', 'Panier');
define('TABLE_HEADING_TAX', 'TVA');
define('TABLE_HEADING_TOTAL', 'Total');

define('ENTRY_TELEPHONE', 'T�l�phone: ');

define('TEXT_CHOOSE_SHIPPING_DESTINATION', 'S\'il vous pla�t choisissez dans votre carnet l\'adresse de livraison.');
define('TEXT_SELECTED_BILLING_DESTINATION', 'S\'il vous pla�t choisissez dans votre carnet l\'adresse de facturation.');

define('TITLE_SHIPPING_ADDRESS', 'Adresse de livraison:');
define('TITLE_BILLING_ADDRESS', 'Adresse de facturation:');

define('TABLE_HEADING_SHIPPING_METHOD', 'Mode de livraison');
define('TABLE_HEADING_PAYMENT_METHOD', 'Moyent de payement');

define('TEXT_CHOOSE_SHIPPING_METHOD', 'S\'il vous pla�t s�lectionner le mode de livraison pr�f�rer pour votre commande.');
define('TEXT_SELECT_PAYMENT_METHOD', 'S\'il vous pla�t s�lectionner le moyen de payement pr�f�rer pour votre commande.');

define('TITLE_PLEASE_SELECT', 'S�lectioner s\'il vous pla�t');

define('TEXT_ENTER_SHIPPING_INFORMATION', 'C\'est actuellement le seul mode de livraison disponibles pour votre commande.');
define('TEXT_ENTER_PAYMENT_INFORMATION', 'C\'est actuellement le seul moyen de payement disponibles pour votre commande.');

define('TABLE_HEADING_COMMENTS', 'Ajouter des commentaires sur votre commande');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Continuer la proc�dure de votre commande');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', 'pour confirmer votre commande.');

define('TEXT_EDIT', 'Editer');

define('TEXT_SELECTED_SHIPPING_DESTINATION', 'Ceci est l\'adresse de livraison s�lectionn� o� les produits de votre commande seront livr�es.');
define('TABLE_HEADING_NEW_ADDRESS', 'Nouvelle addresse');
define('TABLE_HEADING_EDIT_ADDRESS', 'Editer l\'address');
define('TEXT_CREATE_NEW_SHIPPING_ADDRESS', 'S\'il vous pla�t utiliser le formulaire suivant pour cr�er une nouvelle adresse de livraison � utiliser pour cette commande.');
define('TABLE_HEADING_ADDRESS_BOOK_ENTRIES', 'Les adresse de votre carnet');

define('EMAIL_SUBJECT', 'Bien venu � ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Monsieur, %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Madame, %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Bonjour %s' . "\n\n");
define('EMAIL_WELCOME', 'Bien venu au <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Nous vous offrons <b>diff�rents services</b>. Certains de ces services incluent:' . "\n\n" . '<li><b>un panier permanent:</b> - Tout les produits ajout�s � votre panier en ligne  y restent jusqu\'� ce que vous les supprimiez, ou passer commande.' . "\n" . '<li><b>Carnet d\'adresses</b> - Nous pouvons maintenant livrer vos commande � une autre adresse que la v�tre! C\'est parfait pour envoyer des cadeaux d\'anniversaire par exemple, directement � vos proche.' . "\n" . '<li><b>Historique de commande</b> - Consulter l\'historique de vos achats que vous avez �fectu� chez nous.' . "\n" . '<li><b>Commentaire produit</b> - Partagez vos opinions sur les produits avec d\'autres clients.' . "\n\n");
define('EMAIL_CONTACT', 'Vous avez besoin d\'aider avec un de nos services en ligne, contacter nous par courriel, nous nous ferons un plaisir de vous r�pondre: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Note:</b> Cette adresse mail nous a �t� donn� par l\'un de nos clients. Si vous ne vous avez pas inscrire comme membre, envoyez nous un courriel � ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");

// Start - CREDIT CLASS Gift Voucher Contribution
define('EMAIL_GV_INCENTIVE_HEADER', "\n\n" .'Comme cadeau de bienvenu pour nos nouveaux client nous vous offrons un ch�que cadeaux de %s');
define('EMAIL_GV_REDEEM', 'Le code du ch�que cadeau est %s, vous pouvez encaisser votre ch�que cadeau � la finalisation de votre commande');
define('EMAIL_GV_LINK', 'ou en suivant ce lien ');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'F�licitations, pour votre premi�re visite � notre boutique en ligne, pour une exp�rience plus enrichissante nous vous faisons parvenir ce bon de r�duction.' . "\n" .
										' Voici les d�tails d� coupon de r�duction uniquement cr�� pour vous' . "\n");
define('EMAIL_COUPON_REDEEM', 'Pour utiliser votre coupon entr� votre code cde r�duction %s pendant la finalistion de votre achat');
// End - CREDIT CLASS Gift Voucher Contribution

define('TEXT_AGREE_TO_TERMS', 'J\'accepte les termes et conditions');

define('WINDOW_BUTTON_CANCEL', 'Annuler');
define('WINDOW_BUTTON_CONTINUE', 'Continuer');
define('WINDOW_BUTTON_NEW_ADDRESS', 'Nouvelle address');
define('WINDOW_BUTTON_EDIT_ADDRESS', 'Editer l\'address');

define('TEXT_PLEASE_SELECT', 'Selectioner s\'il vous plait ');
define('TEXT_PASSWORD_FORGOTTEN', 'Mot de pass p�rdu? Clicez ici.');
define('IMAGE_UPDATE_CART', 'Mise � jour du panier');
define('IMAGE_LOGIN', 'Connectez-vous');
define('TEXT_PAYMENT_METHOD_UPDATE_ERROR', 'S\'il vous pla�t essayer � nouveau et si des probl�mes persistent, essayer une autre mode de paiement.');
define('TEXT_HAVE_COUPON_CCGV', 'Aimeriez-vous �changer un bon de r�duction?');
define('TEXT_HAVE_COUPON_KGT', 'Aimeriez-vous �changer un bon de r�duction?');
define('TEXT_EXISTING_CUSTOMER_LOGIN', 'Vous avez d�j� un compte?');
define('TEXT_DIFFERENT_SHIPPING', 'Adresse de facturation diff�rente?');
define('TEXT_SHIPPING_NO_ADDRESS', 'S\'il vous pla�t remplissez <b>au moins</b> votre adresse de facturation pour obtenir un devis du prix du transport.');
define('TEXT_CHECKOUT_UPDATE_VIEW_ORDER', 'de mettre � jour / visualiser votre commande.');
define('CHECKOUT_BAR_CONFIRMATION', 'Finaliser votre commande');
// Points/Rewards Module V2.1rc2a BOF
define('TABLE_HEADING_REDEEM_SYSTEM', 'Ecaisser vos point de fid�lit� ');
define('TABLE_HEADING_REFERRAL', 'Transf�rer des points de fid�lit�');
define('TEXT_REDEEM_SYSTEM_START', 'Vous avez un solde cr�diteur de %s ,souhaitez-vous l\'utiliser pour payer cette commande?<br />Le total estim� de votre achat est: %s .');
define('TEXT_REDEEM_SYSTEM_SPENDING', 'Cochez ici pour utiliser le maximum points autoris� pour cette commande. (%s points %s)&nbsp;&nbsp;->');
define('TEXT_REDEEM_SYSTEM_NOTE', '<span class="pointWarning">La total de votre achat est sup�rieur au maximum de points autoris�, vous devrez �galement choisir une mode de paiement</span>');
define('TEXT_REFERRAL_REFERRED', 'Si un de vos ami nous � recommander, s\'il vous pla�t entrer son adresse e-mail ici. ');
// Points/Rewards Module V2.1rc2a EOF
define('TERMS_PART_1', 'S\'il vous pla�t confirmer que vous avez lu nos ');
define('TERMS_PART_2', '<b><u>Termes et Conditions</u></b>');

define('TEXT_NO_JAVASCRIPT', 'Nous avons d�tect� que vous avez d�sactiv� JavaScript.');
define('TEXT_ENABLE_JAVSCRIPT_INSTRUCTIONS', '<p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold">S\'il vous pla�t suivez les instructions pour votre navigateur Web afin de compl�ter votre commande:<br /><br />Internet Explorer</p>
<ol style="font-family: Arial, Helvetica, sans-serif; font-size:12px;">
  <li>Dans les&nbsp;<strong>Outiles</strong>&nbsp;cliquez&nbsp;<strong>Options Internet</strong>,  puis cliquez sur l\'onglet&nbsp;<strong>Securit�</strong>.</li>
  <li>Cliquez sur&nbsp;<strong>Internet</strong>.</li>
  <li>Si vous n\'avez pas � personnaliser vos param�tres de s�curit� d\'Internet Exporer, cliquez simplement sur&nbsp;<strong>R�tablir toutes les zones au niveau par d�faut</strong>. Ensuite, passer l\'�tape 4<blockquote>Si vous avez de personnaliser vos param�tres de s�curit�, proc�dez comme suit:<br />
	a. Cliquez&nbsp;<strong>Personaliser le niveau</strong>.<br />
	b. Dans la boite de dialogue &nbsp;<strong>Parametre de s�curit� &ndash; Internet Zone</strong>&nbsp;cliquez&nbsp;<strong>Activez</strong>&nbsp;pour&nbsp;<strong>Skripting</strong>&nbsp;dans la section&nbsp;<strong>Scripting</strong>.</blockquote></li>
  <li><span id="result_box" lang="fr"><span title="Zur Anzeige alternativer �bersetzungen klicken">Cliquez sur le bouton</span></span>&nbsp;<strong>Retour</strong>&nbsp;<span id="result_box2" lang="fr"><span title="Zur Anzeige alternativer �bersetzungen klicken">pour revenir �</span> <span title="Zur Anzeige alternativer �bersetzungen klicken">la page pr�c�dente</span><span title="Zur Anzeige alternativer �bersetzungen klicken">, puis cliquez sur</span> <span title="Zur Anzeige alternativer �bersetzungen klicken">le bouton</span></span>&nbsp;<span id="result_box3" lang="fr"><span title="Zur Anzeige alternativer �bersetzungen klicken"><strong>Actualise</strong>r</span></span>&nbsp;<span id="result_box4" lang="fr"><span title="Zur Anzeige alternativer �bersetzungen klicken">pour</span> <span title="Zur Anzeige alternativer �bersetzungen klicken">ex�cuter les scripts</span></span>.</li>
 </ol>
<p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold"><br />Firefox</p>
 <ol style="font-family: Arial, Helvetica, sans-serif; font-size:12px;">
  <li><span id="result_box5" lang="fr"><span title="Zur Anzeige alternativer �bersetzungen klicken">Dans le menu <strong>Outils</strong>, cliquez sur <strong>Options</strong>.</span></span>.</li>
  <li><span id="result_box6" lang="fr"><span title="Zur Anzeige alternativer �bersetzungen klicken">Dans l\'onglet</span> <span title="Zur Anzeige alternativer �bersetzungen klicken"><strong>Contenu</strong>, cliquez sur</span> <span title="Zur Anzeige alternativer �bersetzungen klicken">pour s�lectionner la case</span> <span title="Zur Anzeige alternativer �bersetzungen klicken">� cocher <strong>Activer</strong></span> <strong><span title="Zur Anzeige alternativer �bersetzungen klicken">Javascript</span></strong><span title="Zur Anzeige alternativer �bersetzungen klicken">.</span></span></li>
  <li><span id="result_box7" lang="fr"><span title="Zur Anzeige alternativer �bersetzungen klicken">Cliquez sur le</span> <span title="Zur Anzeige alternativer �bersetzungen klicken">bouton Retour</span> <span title="Zur Anzeige alternativer �bersetzungen klicken">de la </span> <span title="Zur Anzeige alternativer �bersetzungen klicken">page pour retourner �</span> <span title="Zur Anzeige alternativer �bersetzungen klicken">la page pr�c�dente</span><span title="Zur Anzeige alternativer �bersetzungen klicken">, puis cliquez sur</span> <span title="Zur Anzeige alternativer �bersetzungen klicken">le bouton</span> <strong><span title="Zur Anzeige alternativer �bersetzungen klicken">Recharger la page</span> <span title="Zur Anzeige alternativer �bersetzungen klicken">actuelle</span></strong> <span title="Zur Anzeige alternativer �bersetzungen klicken">pour ex�cuter des scripts.</span></span></li>
 </ol>
<p style="font-family: Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold"><br />Safari</p>
 <ol style="font-family: Arial, Helvetica, sans-serif; font-size:12px;">
  <li><span id="result_box8" lang="fr"><span title="Zur Anzeige alternativer �bersetzungen klicken">Cliquez sur le menu</span> <span title="Zur Anzeige alternativer �bersetzungen klicken"><strong>Safari</strong>.</span></span></li>
  <li>Selectionez <strong>Preferences</strong>.</li>
  <li><span id="result_box9" lang="fr"><span title="Zur Anzeige alternativer �bersetzungen klicken">Cliquez sur l\'onglet <strong>S�curit�</strong>.</span></span></li>
  <li><span id="result_box10" lang="fr"><span title="Zur Anzeige alternativer �bersetzungen klicken">Cochez la case</span> <span title="Zur Anzeige alternativer �bersetzungen klicken"><strong>Activer JavaScript</strong>.</span></span></li>
 </ol>
 <p>&nbsp;</p>');

 define('TEXT_CHECKOUT_CREATE_ACCOUNT', 'Si vous voulez cr�er un compte s\'il vous pla�t entrer un mot de passe ci-dessous: ');
?>