<?php
/*
$Id: articles.php 3 2009-11-14 19:38:07Z user $

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright 2009 osCMax, 2006 osCMax ,2005 osCMax, 2002 osCommerce

  Released under the GNU General Public License
*/

?>
<!-- articles //-->
<?php
  $contents = '';
  $contents = ( 				  tep_admin_jqmenu(FILENAME_ARTICLES, BOX_TOPICS_ARTICLES) .
								  tep_admin_jqmenu(FILENAME_ARTICLES_CONFIG, BOX_ARTICLES_CONFIG) .
								  tep_admin_jqmenu(FILENAME_AUTHORS, BOX_ARTICLES_AUTHORS) .
								  tep_admin_jqmenu(FILENAME_ARTICLE_REVIEWS, BOX_ARTICLES_REVIEWS) .
								  tep_admin_jqmenu(FILENAME_ARTICLES_XSELL, BOX_ARTICLES_XSELL));
  print_r($contents);
?>
<!-- articles_eof //-->