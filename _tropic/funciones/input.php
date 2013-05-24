<?php 
// ----------------------------------------------------------------------------
// NUEVAS FUNCIONES:   "INPUT "


function input_text($Campo, $Default, $Estilo='width:300px') 
{
	echo "<input name='$Campo' id='$Campo' type='text' value='$Default' style='$Estilo'>";
}




function input_textarea($Campo, $Default, $Estilo='width:300px; height:100px') 
{
	echo "<textarea name='$Campo' id='$Campo' style='$Estilo'>$Default</textarea>";
}




// RATIO -- **modificar DEFAULT !!
function input_ratio($Metodo, $Campo, $Label, $Valor, $Estilo=NULL) 
{
	if ($Metodo=='post') { global $_POST ; $Default = $_POST[$Campo];  }
	if ($Metodo=='row') { global $row ; $Default = $row[$Campo];  }
	
	if ( $Default == $Valor) $Checked = 'checked="checked"'; 
	else $Checked = '';
	
	echo "<input type='radio' name='$Campo' id='$Campo:$Valor' value='$Valor' $Checked />";
	echo "<label for='$Campo:$Valor'>$Label</label>";
}





function input_select($Campo, $Default, $Opciones, $Estilo=NULL) 
{
	if (isset($Estilo)) $style = "style='$Estilo'";
	echo "<select name='$Campo' id='$Campo' $style> \n ";
	reset($Opciones); // Point to the beginning
	$Valor = current($Opciones);
	while ($Valor) 
	{
		if ( $Default == $Valor) $Selected = 'selected="selected" '; 
		else $Selected = ''; 
		echo "<option value='$Valor' $Selected>$Valor </option> \n ";
		$Valor = next($Opciones);
	}
	echo "</select> \n ";
}



















 ?>