<?php
/*
$Id: indvship.php 3 2006-05-27 04:59:07Z user $
  by D. M. Gremlin

  osCMax Power E-Commerce
  http://oscdox.com

  Copyright 2006 osCMax

  Released under the GNU General Public License
*/

  class indvship {
    var $code, $title, $description, $icon, $enabled;

// class constructor
    function indvship() {
      global $order;
      $this->code = 'indvship';
      $this->title = MODULE_SHIPPING_INDVSHIP_TEXT_TITLE;
      $this->description = MODULE_SHIPPING_INDVSHIP_TEXT_DESCRIPTION;
      $this->sort_order = MODULE_SHIPPING_INDVSHIP_SORT_ORDER;
      $this->icon = '';
      $this->tax_class = MODULE_SHIPPING_INDVSHIP_TAX_CLASS;
      $this->enabled = ((MODULE_SHIPPING_INDVSHIP_STATUS == 'True') ? true : false);

// Enable Individual Shipping Module
      $this->enabled = MODULE_SHIPPING_INDVSHIP_STATUS;
      if ( ($this->enabled == true) && ((int)MODULE_SHIPPING_INDVSHIP_ZONE > 0) ) {
        $check_flag = false;
        $check_query = tep_db_query("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . " where geo_zone_id = '" . MODULE_SHIPPING_INDVSHIP_ZONE . "' and zone_country_id = '" . $order->delivery['country']['id'] . "' order by zone_id");
        while ($check = tep_db_fetch_array($check_query)) {
          if ($check['zone_id'] < 1) {
            $check_flag = true;
            break;
          } elseif ($check['zone_id'] == $order->delivery['zone_id']) {
            $check_flag = true;
            break;
          }
        }

        if ($check_flag == false) {
          $this->enabled = false;
        }
      }
    }

// class methods

   function quote($method = '') {
      global $order, $cart;
   $shiptotal = $cart->get_shiptotal();

      $this->quotes = array('id' => $this->code,
                            'module' => MODULE_SHIPPING_INDVSHIP_TEXT_TITLE,
                            'methods' => array(array('id' => $this->code,
                                                     'title' => MODULE_SHIPPING_INDVSHIP_TEXT_WAY,
                                                     'cost' => $shiptotal)));

      if ($this->tax_class > 0) {
        $this->quotes['tax'] = tep_get_tax_rate($this->tax_class, $order->delivery['country']['id'], $order->delivery['zone_id']);
      }

      if (tep_not_null($this->icon)) $this->quotes['icon'] = tep_image($this->icon, $this->title);

      return $this->quotes;
    }
    
  

    function check() {
      if (!isset($this->_check)) {
        $check_query = tep_db_query("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_INDVSHIP_STATUS'");
        $this->_check = tep_db_num_rows($check_query);
      }
      return $this->_check;
    }

    function install() {
     tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Individual Shipping Prices', 'MODULE_SHIPPING_INDVSHIP_STATUS', 'True', 'Do you want to offer individual shipping prices?', '6', '0', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
     tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Tax Class', 'MODULE_SHIPPING_INDVSHIP_TAX_CLASS', '0', 'Use the following tax class on the shipping fee.', '6', '0', 'tep_get_tax_class_title', 'tep_cfg_pull_down_tax_classes(', now())");
     tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Shipping Zone', 'MODULE_SHIPPING_INDVSHIP_ZONE', '0', 'If a zone is selected, only enable this shipping method for that zone.', '6', '0', 'tep_get_zone_class_title', 'tep_cfg_pull_down_zone_classes(', now())");
     tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_SHIPPING_INDVSHIP_SORT_ORDER', '0', 'Sort order of display.', '6', '0', now())");
    }

    function remove() {
      
      tep_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_SHIPPING_INDVSHIP_STATUS', 'MODULE_SHIPPING_INDVSHIP_TAX_CLASS', 'MODULE_SHIPPING_INDVSHIP_ZONE', 'MODULE_SHIPPING_INDVSHIP_SORT_ORDER');
    }
  }
?>