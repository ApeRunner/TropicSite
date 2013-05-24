<?php if ( count($Respuesta_Array)>0 ) { ?>
<br />

<div id="Respuesta" align='center' style='margin-left: 50px; margin-right: 50px; color:#CE0000; background-color:#FFE8E8; border-color:#FF0000; border-style:solid; padding:10px; border-width: thin; vertical-align: top;'>
        
    <div align="left" style="display:inline-block; "> 
    
          <strong>Atenci&oacute;n: </strong>
            
        <ul style="margin:0px">
          <?php 
		foreach ($Respuesta_Array as $key => $value) {
			echo "<li>$value</li>";
		}
		?>
        </ul>
        
        </div>
</div>

<?php } ?>
