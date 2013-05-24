<?php 
if ($_GET['Respuesta']) $Respuesta_Array[] = $_GET['Respuesta'] ;
if ( count($Respuesta_Array)>0 ) {
?>

<div id="respuesta" align="center">

<div style="display:inline-block; " align="left">
        <strong>Atención: </strong>
            
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
