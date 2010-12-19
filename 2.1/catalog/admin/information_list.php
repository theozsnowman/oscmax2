<?php
  /*
  Module: Information Pages Unlimited
          File date: 2007/02/17
          Based on the FAQ script of adgrafics
          Adjusted by Joeri Stegeman (joeri210 at yahoo.com), The Netherlands

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Released under the GNU General Public License
  */
?>
<tr class=pageHeading>
  <td><?php echo $title ?></td>
</tr>
<tr>
  <td>
    <table border="0" width="100%"  cellpadding="2" cellspacing="0" bgcolor="#ffffff">
      <tr class="dataTableHeadingRow">
	    <td align="center" class="dataTableHeadingContent"><?php echo ID_INFORMATION;?></td>
	    <td align="left" class="dataTableHeadingContent"><?php echo ENTRY_TITLE;?></td>
	    <td align="left" class="dataTableHeadingContent"><?php echo ENTRY_PARENT_PAGE;?></td>
	    <td align="center" class="dataTableHeadingContent"><?php if ($_GET['gID'] == '1') { echo PUBLIC_INFORMATION; } else { echo PUBLIC_INFORMATION_2; }?></td>
	    <td align="center" class="dataTableHeadingContent"><?php echo ENTRY_SORT_ORDER; ?></td>
	    <td align="center" class="dataTableHeadingContent" colspan=2><?php echo ACTION_INFORMATION;?></td>
      </tr>
<?php
$no=1;
if (sizeof($data) > 0) {
	while (list($key, $val) = each($data)) {

      echo '<tr class="dataTableRow" onmouseover="rowOverEffect(this)" onmouseout="rowOutEffect(this)" onclick="document.location.href=\'' . tep_href_link(FILENAME_INFORMATION_MANAGER, "gID=$gID&amp;information_action=Edit&amp;information_id=$val[information_id]", 'NONSSL') . '\'">'; ?>
        <td align="center" class="dataTableContent"><?php echo $val['information_id']; ?></td>
        <td width="40%" class="dataTableContent"><?php echo $val['information_title'];?></td>
        <td class="dataTableContent"><?php echo ((!empty($val['parent_id'])) ? $val['parent_id'] : null);?></td>
        <td nowrap  align="center" class="dataTableContent">
<?php
		if ($val['visible'] == 1) {
			echo tep_image(DIR_WS_ICONS . 'icon_status_green.gif', IMAGE_ICON_STATUS_GREEN, 10, 10) . '&nbsp;&nbsp;';
			echo ( (!strstr($info_group['locked'], 'visible')) ? '<a href="' . tep_href_link(FILENAME_INFORMATION_MANAGER, "gID=$gID&amp;information_action=Visible&amp;information_id=$val[information_id]&amp;visible=0") . '">' : null);
			echo tep_image(DIR_WS_ICONS . 'icon_status_red_light.gif', DEACTIVATION_ID_INFORMATION . " $val[information_title]", 10, 10);
			echo ( (!strstr($info_group['locked'], 'visible')) ? '</a>' : null);
		}
		else {
			echo ( (!strstr($info_group['locked'], 'visible')) ? '<a href="' . tep_href_link(FILENAME_INFORMATION_MANAGER, "gID=$gID&amp;information_action=Visible&amp;information_id=$val[information_id]&amp;visible=1") . '">' : null);
			echo tep_image(DIR_WS_ICONS . 'icon_status_green_light.gif', ACTIVATION_ID_INFORMATION . " $val[information_title]", 10, 10);
			echo ( (!strstr($info_group['locked'], 'visible')) ? '</a>' : null);
			echo '&nbsp;&nbsp;' . tep_image(DIR_WS_ICONS . 'icon_status_red.gif', IMAGE_ICON_STATUS_RED, 10, 10);
		}
?></td>
	    <td width="10%" align="center" class="dataTableContent"><?php echo $val['sort_order'];?></td>
        <td align=center class="dataTableContent">
		<?php echo '<a href="' . tep_href_link(FILENAME_INFORMATION_MANAGER, "gID=$gID&amp;information_action=Edit&amp;information_id=$val[information_id]", 'NONSSL') . '">' . tep_image(DIR_WS_ICONS . 'page_white_edit.png', EDIT_ID_INFORMATION . " $val[information_title]") . '</a>'; ?></td>
		<?php echo ( empty($info_group['locked']) ? '<td align=center class="dataTableContent"><a href="' . tep_href_link(FILENAME_INFORMATION_MANAGER, "gID=$gID&amp;information_action=Delete&amp;information_id=$val[information_id]", 'NONSSL') . '">' . tep_image(DIR_WS_ICONS . 'delete.gif', DELETE_ID_INFORMATION . " $val[information_title]") . '</a></td>' : null); ?>
      </tr>
<?php
		$no++;
	}
} else {
?>
      <tr bgcolor="#DEE4E8">
        <td colspan=7 class="dataTableContent"><?php echo ALERT_INFORMATION;?></td>
      </tr>
<?php
}
?>
    </table>
  </td>
</tr>
<tr>
  <td align=right>
<?php 
	if( empty($info_group['locked']) ) {
		echo '<a href="' . tep_href_link(FILENAME_INFORMATION_MANAGER, "gID=$gID&amp;information_action=Added", 'NONSSL') . '">' . tep_image_button('button_new.gif', ADD_INFORMATION) . '</a> ';
	}
	echo '<a href="' . tep_href_link(FILENAME_INFORMATION_MANAGER, "gID=$gID", 'NONSSL') . '">' . tep_image_button('button_cancel.gif', IMAGE_CANCEL) . '</a>'; 
?>
  </td>
</tr>