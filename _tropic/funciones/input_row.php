<?php 



// text
function input_row_text($Campo, $Estilo='width:300px') 
{
	global  $row ;
	 $Valor = $row[$Campo];
	echo "<input name='$Campo' id='$Campo' type='text' value='$Valor' style='$Estilo'>";
}


// float
function input_row_float($Campo, $Estilo='width:300px') 
{
	global  $row ;
	 $Valor = floatval($row[$Campo]);
	echo "<input id=$Campo class='input_float' name='$Campo'  type='text' value='$Valor' onchange='myFunction()' style='$Estilo'>";
}






// textarea
function input_row_textarea($Campo, $Estilo='width:300px; height:100px') 
{
	global  $row ;
	$Valor = $row[$Campo];
	echo "<textarea name='$Campo' id='$Campo' style='$Estilo'>$Valor</textarea>";
}



// select
function input_row_select($Campo, $Opciones, $Estilo=NULL) 
{
	global  $row ;
	if (isset($Estilo)) $style = "style='$Estilo'";
	echo "<select name='$Campo' id='$Campo' $style> \n ";
	reset($Opciones); // Point to the beginning
	$Valor = current($Opciones);
	while ($Valor) 
	{
		if ( $row[$Campo] == $Valor) $Selected = 'selected="selected" '; 
		else $Selected = ''; 
		echo "<option value='$Valor' $Selected>$Valor </option> \n ";
		$Valor = next($Opciones);
	}
	echo "</select> \n ";
}



// checkbox
function input_row_checkbox($Campo, $Estilo=NULL) 
{
	global $row ;
	
	if ($row[$Campo]==1) $checked = " checked='checked' ";
	
	echo "<input name='$Campo' id='$Campo' type='checkbox' value='1' $checked  />";
}




// timestamp
function input_row_timestamp($Campo, $Estilo='width:300px') 
{
	global  $row ;
	 $Valor = $row[$Campo];
	echo "<input name='$Campo' id='$Campo' type='text' value='$Valor' class='Timestamp' style='$Estilo'>";
	
	
}










// Relation | $Datos = array($tabla, $Campo_ID, $Campo_Nombre)
function input_row_relation($Campo, $Datos, $Estilo=NULL) 
{
	global  $row ;
	global  $Tabla;
	
	
	
	$id=$row[$Campo];
	
	$tblname = $Datos[0];
	$fldvalue = $Datos[1];
	$fldname = $Datos[2];
	
	
	$activar = $Datos[3]; // mostrar input = 1, mostrar texto = 0
	

	

	
	if (isset($Estilo)) $style = "style='$Estilo'";
	
	if ($activar == 1){

	$sql="SELECT * FROM $tblname"; // query
	
	$result = mysql_query($sql); //array with the result of the query
	
	$dropdown = "<select name='".$Campo."'>"; //creates a dropdown option select menu
	
	while($row_foraneo = mysql_fetch_assoc($result)) {
		
		if ($id == $row_foraneo[$fldvalue]) {
			$dropdown .= "\r\n<option selected value='{$row_foraneo[$fldvalue]}'>{$row_foraneo[$fldname]}</option>"; // "\r\n<option value='{fldvalue']}'>{fldName}</option>"
			
		} else {
		$dropdown .= "\r\n<option value='{$row_foraneo[$fldvalue]}'>{$row_foraneo[$fldname]}</option>"; // "\r\n<option value='{fldvalue']}'>{fldName}</option>"
		
		}
		
		}

	$dropdown .= "\r\n</select>";
	
	echo $dropdown;
	
	} elseif ($activar == 0){
	
	
	
	
	
	$valor_url = $_GET[$fldvalue];
		
		$sql = "SELECT $fldname FROM $tblname WHERE $fldvalue = '$valor_url'";
		
		$result = mysql_query($sql); 
		$row_foraneo = mysql_fetch_array($result);
		
		echo "<select name='".$Campo."'>";
		echo "<option value='".$valor_url."'>".$row_foraneo[0]."</option>";
		echo "</select>";

		
	}
	
	

}








// date()
function input_row_date($Campo, $Estilo='width:200px') 
{
	global $row ;
	
	
	
	echo "<div class='input-control text datepicker' data-param-init-date='{$row[$Campo]}'>";
	echo "<input type='text' name='".$Campo."' value='".$row[$Campo]."'></input>";
	echo "<button class='btn-date'></button>";
	echo "</div>";
}


  


  

?>