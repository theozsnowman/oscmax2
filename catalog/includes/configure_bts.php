<?php
// BTSv1.5d
unset($javascript,$content,$content_template,$boxLink,$box_id,$box_base_name);
// css_page_width is a sort of easter egg, it allows you to change the page with in pixels for the CSS template through the url
if (isset ($_GET['css_page_width'])) $css_page_width = strip_tags($_GET['css_page_width']);

$bts_debug = FALSE;

if(!defined('DIR_WS_TEMPLATES_DEFAULT')) define ('DIR_WS_TEMPLATES_DEFAULT',TEMPLATE_NAME_DEFAULT); // for JTS sql compatibity
define ('DIR_WS_TEMPLATES_BASE','templates/');

$tplDir = bts_template_switch();

  define('DIR_WS_CONTENT', DIR_WS_TEMPLATES . 'content/');
  define('DIR_WS_JAVASCRIPT', DIR_WS_INCLUDES . 'javascript/');
  define('DIR_WS_BOX_TEMPLATES', DIR_WS_TEMPLATES . 'boxes/');
// define the templatenames used in the project
  define('TEMPLATENAME_BOX', 'box.tpl.php');
  define('TEMPLATENAME_MAIN_PAGE', 'main_page.tpl.php');
  define('TEMPLATENAME_POPUP', 'popup.tpl.php');
  define('TEMPLATENAME_STATIC', 'static.tpl.php');
  define('TEMPLATENAME_SHIPPING', 'shipping.tpl.php');
  define('TEMPLATENAME_CONDITIONS', 'conditions.tpl.php');
  define('TEMPLATENAME_PRIVACY', 'privacy.tpl.php');

  /* BTSv1.4 */
  define('DIR_WS_TEMPLATES_FALLBACK', 'templates/fallback/');
  define('DIR_WS_BOX_TEMPLATES_FALLBACK', DIR_WS_TEMPLATES_FALLBACK . 'boxes/');
  define('DIR_WS_CONTENT_FALLBACK', DIR_WS_TEMPLATES_FALLBACK . 'content/');

  // STS: ADD
  if (is_file(DIR_WS_INCLUDES . 'configure_sts.php')) include(DIR_WS_INCLUDES . 'configure_sts.php');
  // STS: EOADD

function bts_select($template_type, $filename = '') {
  // $content_template ??
  global $content_template, $content, $box_base_name, $language;

  switch ($template_type) {

    case 'main':
    // default or main_page
      if(is_file(DIR_WS_TEMPLATES . TEMPLATENAME_MAIN_PAGE)) {
	      $path = (DIR_WS_TEMPLATES . TEMPLATENAME_MAIN_PAGE);
      } else {
	      $path = (DIR_WS_TEMPLATES_FALLBACK . TEMPLATENAME_MAIN_PAGE);
      }
    break;

    case 'content':
    // pages or content (middle area)
    // extra security: added basename()
      if (isset($content_template)) {
        if(is_file(DIR_WS_CONTENT . basename($content_template))) { $path = (DIR_WS_CONTENT . basename($content_template)); } elseif (is_file(DIR_WS_CONTENT_FALLBACK . basename($content_template))) { $path = (DIR_WS_CONTENT_FALLBACK . basename($content_template)); }
        } else {
          if(is_file(DIR_WS_CONTENT . basename($content . '.tpl.php'))) { $path = (DIR_WS_CONTENT . basename($content . '.tpl.php')); } else { $path = (DIR_WS_CONTENT_FALLBACK . $content . '.tpl.php'); }
        }
    break;

    case 'boxes':
    // small sideboxes
      if(is_file(DIR_WS_BOX_TEMPLATES . $box_base_name . '.tpl.php')) {
        // if exists, load unique box template for this box from templates/boxes/
        $path = (DIR_WS_BOX_TEMPLATES . $box_base_name . '.tpl.php');
      } elseif(is_file(DIR_WS_BOX_TEMPLATES_FALLBACK . $box_base_name . '.tpl.php')) {
        // if exists, load unique box template for this box from templates/boxes/
        $path = (DIR_WS_BOX_TEMPLATES_FALLBACK . $box_base_name . '.tpl.php');
      } elseif(is_file(DIR_WS_BOX_TEMPLATES . TEMPLATENAME_BOX)) {
        // if exists, load unique box template for this box from templates/boxes/
	      $path = (DIR_WS_BOX_TEMPLATES . TEMPLATENAME_BOX);
      } else {
        $path = (DIR_WS_BOX_TEMPLATES_FALLBACK . TEMPLATENAME_BOX);
      }
    break;

    case 'popup':
    // popup main page (images/advanced search)
      if(is_file(DIR_WS_TEMPLATES . TEMPLATENAME_POPUP)) {
	      $path = (DIR_WS_TEMPLATES . TEMPLATENAME_POPUP);
      } else {
	      $path = (DIR_WS_TEMPLATES_FALLBACK . TEMPLATENAME_POPUP);
      }
    break;

    case 'content_popup':
    // popup pages or content (images/advanced search)
      if(is_file(DIR_WS_CONTENT . basename($content) . '.tpl.php')) {
	      $path = (DIR_WS_CONTENT . basename($content) . '.tpl.php');
      } else {
	      $path = (DIR_WS_CONTENT_FALLBACK . basename($content) . '.tpl.php');
      }
    break;

    case 'javascript':
       // Load different javascript files per page
      if(is_file(DIR_WS_TEMPLATES . 'javascript/' . basename($filename, '.php') . '.js.php')) {
        $path = DIR_WS_TEMPLATES . 'javascript/' . basename($filename, '.php') . '.js.php';
      } elseif (is_file(DIR_WS_TEMPLATES_FALLBACK . 'javascript/' . basename($filename, '.php') . '.js.php')) {
        $path = DIR_WS_TEMPLATES_FALLBACK . 'javascript/' . basename($filename, '.php') . '.js.php';
      } else {
        return (FALSE);
      }
    break;

    case 'stylesheet':
      // $path = DIR_WS_TEMPLATE_FILES . $filename;
      if(is_file(DIR_WS_TEMPLATES . $filename)) {
        $path = DIR_WS_TEMPLATES . $filename;
      } else {
        $path = DIR_WS_TEMPLATES_FALLBACK . $filename;
      }
    break;

    case 'stylesheets':
      // for example to load different stylesheets per page :: new
      if(is_file(DIR_WS_TEMPLATES . 'stylesheets/' . basename($filename, '.php') . '.css')) {
        $path = DIR_WS_TEMPLATES . 'stylesheets/' . basename($filename, '.php') . '.css';
      } elseif (is_file(DIR_WS_TEMPLATES_FALLBACK . 'stylesheets/' . basename($filename, '.php') . '.css')) {
        $path = DIR_WS_TEMPLATES_FALLBACK . 'stylesheets/' . basename($filename, '.php') . '.css';
      } else {
        return (FALSE);
      }
    break;

    case 'column':
      // enables different columns per template function, falls back to (to fallback/ and then to) stock osC columns (inludes/) if no column templates are found
      if(is_file(DIR_WS_TEMPLATES . $filename)) {
        $path = DIR_WS_TEMPLATES . $filename;
      } elseif (is_file(DIR_WS_TEMPLATES_FALLBACK . $filename)) {
        $path = DIR_WS_TEMPLATES_FALLBACK . $filename;
      } else {
        $path = DIR_WS_INCLUDES . $filename;
      }
    break;

    case 'images':
     // added for loading images directly from your templates directory (w.o. the tep_image() function)
       if (is_file(DIR_WS_TEMPLATES . 'images/' . $filename)) {
	       $path = DIR_WS_TEMPLATES . 'images/' . $filename;
       } else {
	       $path = DIR_WS_TEMPLATES_FALLBACK . 'images/' . $filename;
       }
    break;

    case 'icons':
     // added for loading images directly from your templates directory (w.o. the tep_image() function)
       if (is_file(DIR_WS_TEMPLATES . 'images/icons/' . $filename)) {
	       $path = DIR_WS_TEMPLATES . 'images/icons/' . $filename;
       } else {
	       $path = DIR_WS_TEMPLATES_FALLBACK . 'images/icons/' . $filename;
       }
    break;

    case 'common':
    if (is_file(DIR_WS_TEMPLATES_BASE . $filename)) {
	    $path = (DIR_WS_TEMPLATES_BASE . $filename);
    } else {
      return (FALSE);
    }
    break;
	
	case 'language':
	if (is_file(DIR_WS_TEMPLATES . 'includes/languages/' . $language . '/' . $filename)) {
	    $path = DIR_WS_TEMPLATES . 'includes/languages/' . $language . '/' . $filename;
	} else {
        $path = DIR_WS_INCLUDES . 'languages/' . $language . '/' . $filename;
    }
	break;
	
	case 'include':
	if (is_file(DIR_WS_TEMPLATES . 'includes/' . $filename)) {
	    $path = DIR_WS_TEMPLATES . 'includes/' . $filename;
	} else {
        $path = DIR_WS_INCLUDES . '/' . $filename;
    }
	break;
	
    default:
    // exit ('Error bts_select()! No template selected for template type: ');
    echo ('Error: bts_select()! No template selected for template type: ' . $template_type);
    break;

  }
  return ($path);
}

function bts_template_switch() {
  if ((TEMPLATE_SWITCHING_ALLOWED == 'true') && (isset($_GET['tplDir'])) && is_dir(DIR_WS_TEMPLATES_BASE . basename($_GET['tplDir'])) ) {
    $tplDir = basename($_GET['tplDir']);
    tep_session_register('tplDir');
  } else {
	if ((tep_session_is_registered('tplDir')) && (TEMPLATE_SWITCHING_ALLOWED == 'true') && is_dir(DIR_WS_TEMPLATES_BASE . basename($_SESSION['tplDir']))){
	  $tplDir = basename($_SESSION['tplDir']);
    }else{
      $tplDir = DIR_WS_TEMPLATES_DEFAULT;
    }
  }

  if ((preg_match('{^[[:alnum:]|_|-]+$}', $tplDir)) && (is_dir (DIR_WS_TEMPLATES_BASE . $tplDir))){
    // 'Input Validated' only allow alfanumeric characters and underscores in template name
    define('DIR_WS_TEMPLATES', DIR_WS_TEMPLATES_BASE . $tplDir . '/' );
  } else {
    if ($bts_debug === TRUE) { $illegal_directory = '<b>' . strip_tags($tplDir) . '</b> '; }
    exit('<table width="100%" style="font-family: Verdana, Arial, sans-serif; font-size: 11px; line-height:1.5; background-color: #ffe6e6; border:solid 1px #ff8e90; padding:5px;"><tr><td align="center">Your template directory ' . $illegal_directory . 'can not be found.  Please login to your admin panel and go to the <b>Default Template Directory</b> under <b>Templates</b> in the <b>Configuration</b> menu.</td></tr></table>');
  }

  return $tplDir;
}
?>