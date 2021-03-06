<?php
/*
$Id$

  osCmax e-Commerce
  http://www.oscmax.com

  Copyright 2000 - 2011 osCmax

  Released under the GNU General Public License
*/
?>
<!-- START STATS LOGGING -->
<table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
	<tr>
    	<td valign="top">
        <table border="0" cellspacing="0" cellpadding="2" align="center" width="100%">
			<tr class="dataTableHeadingRow">
               	<td class="dataTableHeadingContent"><?php echo DASHBOARD_NO; ?></td>
               	<td class="dataTableHeadingContent"><?php echo DASHBOARD_TIME; ?></td>
               	<td class="dataTableHeadingContent"><?php echo DASHBOARD_IP; ?></td>
               	<td class="dataTableHeadingContent"><?php echo DASHBOARD_USER; ?></td>
                <td></td>
               	<td class="dataTableHeadingContent"><?php echo DASHBOARD_EVENT; ?></td>
        	</tr>
<?php

  include('includes/languages/' . $language . '/configuration.php');

  $admin_logging_query_raw = "select l.login_number, l.user_name, l.ip_address, l.type, l.login_time from " . TABLE_ADMIN_LOG . " l order by l.login_number DESC limit 20";

  $admin_logging_query = tep_db_query($admin_logging_query_raw);
  while ($admin_logging = tep_db_fetch_array($admin_logging_query)) {

  $Message = $admin_logging['type'];
  $style = '';

//Set format for row  
  if ($Message == 'Wrong Username') { $style = 'Alert';}
  if ($Message == 'Wrong Password') { $style = 'Warning';}

  		echo '<tr class="dataTableRow' . $style . '" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)">';
  
?>
				<td class="dataTableContent"><?php echo $admin_logging['login_number']; ?></td>
				<td class="dataTableContent"><?php echo tep_datetime_short($admin_logging['login_time']); ?></td>
				<td class="dataTableContent"><?php echo $admin_logging['ip_address']; ?></td>
				<td class="dataTableContent"><?php echo $admin_logging['user_name']; ?></td>
                <?php
				switch($admin_logging['type']) {
		          case 'Wrong Password':
                    echo '<td></td><td class="dataTableContent">' . TEXT_WRONG_PASSWORD . '</td>';
                  break;
				  
		          case 'Wrong Username':
                    echo '<td></td><td class="dataTableContent">' . TEXT_WRONG_USERNAME . '</td>';
                  break;
				  
		          case 'Logged In':
                    echo '<td></td><td class="dataTableContent">' . TEXT_LOGGED_IN . '</td>';
                  break;
				  
		          case 'Logged Out':
                    echo '<td></td><td class="dataTableContent">' . TEXT_LOGGED_OUT . '</td>';
                  break;
				} // end switch
				?>
				<?php
			    $pos = strrpos($admin_logging['type'], "Config Change:");
                if ($pos !== false) { 
			      $config_id = str_replace("Config Change: ", "", $admin_logging['type']);
			      $cfg_group_query = tep_db_query("select configuration_title, configuration_description, configuration_group_id from " . TABLE_CONFIGURATION . " where configuration_id = '" . (int)$config_id . "'");
                  $cfg_group = tep_db_fetch_array($cfg_group_query);
			      
				  if (constant($cfg_group['configuration_title'])) {
				    $title = constant($cfg_group['configuration_title']);
				  } else {
				    $title = $cfg_group['configuration_title'];
				  }
				  
				  if (constant($cfg_group['configuration_description'])) {
				    $description = constant($cfg_group['configuration_description']);
				  } else {
				    $description = $cfg_group['configuration_description'];
				  }
				  
			      ?>
                  <td align="right"><?php echo '<a href="' . tep_href_link(FILENAME_CONFIGURATION, 'gID=' . $cfg_group['configuration_group_id']) . '&amp;cID=' . (int)$config_id . '">' . tep_image(DIR_WS_ICONS . 'page_white_edit.png', ''); ?></a></td>
				  <td class="dataTableContent"><?php echo '<span title="' . $title . '|' . strip_tags($description, '<p><br><b>') . '">' . TEXT_CONFIG_CHANGE . $config_id; ?></span></td>
                <?php 
				} // end if
			    ?>
			</tr>

<?php
}
?>
		</table>
        </td>
	</tr>
    <tr>
    	<td><?php echo '<a href="' . FILENAME_STATS_ADMIN_LOGGING . '">'; ?><?php echo VIEW_COMPLETE_REPORT; ?></a></td>
    </tr>
</table>
<!-- END STATS LOGGING -->