<?php 




function input_post_text($Campo, $Estilo='width:300px') 
{
	global  $_POST ;
	echo "<input name='$Campo' id='$Campo' type='text' value='{$_POST[$Campo]}' style='$Estilo'>";
}




function input_post_textarea($Campo, $Estilo='width:300px; height:100px') 
{
	global  $_POST ;
	echo "<textarea name='$Campo' id='$Campo' style='$Estilo'>{$_POST[$Campo]}</textarea>";
}




function input_post_select($Campo, $Opciones, $Estilo=NULL) 
{
	global  $_POST ;
	if (isset($Estilo)) $style = "style='$Estilo'";
	echo "<select name='$Campo' id='$Campo' $style> \n ";
	reset($Opciones); // Point to the beginning
	$Valor = current($Opciones);
	while ($Valor) 
	{
		if ( $_POST[$Campo] == $Valor) $Selected = 'selected="selected" '; 
		else $Selected = ''; 
		echo "<option value='$Valor' $Selected>$Valor </option> \n ";
		$Valor = next($Opciones);
	}
	echo "</select> \n ";
}




function input_post_ratio($Campo, $Valor, $Estilo=NULL) 
{
	global $_POST ;
	if ( $_POST[$Campo] == $Valor) $Checked = 'checked="checked"'; 
	else $Checked = '';
	echo "<input type='radio' name='$Campo' id='$Campo:$Valor' value='$Valor' $Checked />";
	echo "<label for='$Campo:$Valor'>$Valor</label>";
}


function input_post_checkbox($Campo, $Label=NULL, $Estilo=NULL) 
{
	global $_POST ;
	if ($Label==NULL) $Label = $Campo;
	if ( $_POST[$Campo] == 1) $Checked = 'checked="checked"'; else $Checked = '';
	echo "<input type='checkbox' name='$Campo' id='$Campo' value='1'  $Checked />";
	echo "<label for='$Campo'>$Label</label>";
}

                        



// input_row_fecha




 ?>