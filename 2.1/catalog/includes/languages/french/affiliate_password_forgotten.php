<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
define('NAVBAR_TITLE', 'Mot de passe affili� perdu');
define('NAVBAR_TITLE_1', 'Connexion');
define('NAVBAR_TITLE_2', 'Mot de passe affili� perdu');
define('HEADING_TITLE', 'J\'ai perdu mon mot de passe affili� !');
define('TEXT_NO_EMAIL_ADDRESS_FOUND', '<font color="#ff0000"><b>NOTE:</b></font> L\'adresse e-mail n\'a pas �t� trouv� dans nos bases. Veuillez renouveler votre demande s\'il vous plait.');
define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Mot de passe Nouvel Affili�');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Une demande de nouveau mot de passe a �t� demand�e de la part de ' . $REMOTE_ADDR . '.' . "\n\n" . 'Votre nouveau mot de passe pour \'' . STORE_NAME . '\' est :' . "\n\n" . '   %s' . "\n\n");
define('TEXT_PASSWORD_SENT', 'Un nouveau mot de passe a �t� envoy� sur votre e-mail');
?>