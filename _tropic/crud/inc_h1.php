



<table style="width:100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="33%" align="left" valign="middle">
    
        Listado <?php /*?>Total: <strong><?=$Total_Rows?></strong><?php */?>
    
    </td>
    <td width="34%" align="center" valign="middle">
    
    
        
        
        <h2><?=$Label_Plural?></h2>
        
    
    </td>
    <td width="33%" align="right" valign="middle">
    
        <div style="color:#999">
        <?php
        echo $pager->renderPrev().'&nbsp;&nbsp;&nbsp;';
        echo $pager->renderNav().'&nbsp;&nbsp;&nbsp;';
        echo $pager->renderNext();
        ?>
        </div>                
        
    </td>
  </tr>
</table>