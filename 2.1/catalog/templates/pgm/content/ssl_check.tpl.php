    <table border="0" width="100%" cellspacing="0" cellpadding="0">
      <tr>
        <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td class="pageHeading"><?php echo HEADING_TITLE; ?></td>
            <td class="pageHeading" align="right"><?php echo tep_draw_separator('pixel_trans.gif', '1', '27'); ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      <tr>
        <td class="main"><table border="0" width="40%" cellspacing="0" cellpadding="0" align="right">
          <tr>
            <td><?php new InfoBoxHeading(array(array('text' => BOX_INFORMATION_HEADING))); ?></td>
          </tr>
          <tr>
            <td><?php new infoBox(array(array('text' => BOX_INFORMATION))); ?></td>
          </tr>
        </table><?php echo TEXT_INFORMATION; ?></td>
      </tr>
      <tr>
        <td><?php echo tep_draw_separator('pixel_trans.gif', '100%', '10'); ?></td>
      </tr>
      <tr>
        <td align="right" class="main"><?php echo '<a href="' . tep_href_link(FILENAME_LOGIN) . '">' . tep_image_button('button_continue.gif', IMAGE_BUTTON_CONTINUE) . '</a>'; ?></td>
      </tr>
    </table>

