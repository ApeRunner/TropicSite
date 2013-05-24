<?php 

function color_rows() 
{
	global  $Conteo_Rows ;
	$Conteo_Rows ++ ;
	if ($Conteo_Rows==1) $Row_Class = 'data_row_1';
	else
	{ 
		$Row_Class = 'data_row_2';
		$Conteo_Rows = 0 ;
	}
	return $Row_Class ; 
}
/* USO: Poner esto despues de estraer el registro (row fetch)
$Row_Class = color_rows();    
<tr class="<?=$Row_Class?>" ....
*/



function ordernar_por($Campo) 
{
	global $Sort ;
	
	$Parte = explode(' ',$Sort);
	
	
	if ( $Campo == $Parte[0] )
	{
		$Sentido = $Parte[1] ;
		if ($Sentido=='ASC') { $Archivo = 'Sort_Arriba.png'; $Nuevo_Sentido = 'DESC';  }
		else { $Archivo = 'Sort_Abajo.png'; $Nuevo_Sentido = 'ASC'; }
		$Imagen = "<img src='../_global/graficos/icons/$Archivo' border='0' align='absmiddle' />";
	}
	else
	{
		$Nuevo_Sentido = 'ASC'; $Archivo = 'Sort_Arriba.png'; 
	}
	
	
	$HTML = "
	$Imagen
	<a href='?Sort=$Campo~$Nuevo_Sentido' style='color:white'>
	$Campo
	</a>
	";

	return $HTML ; 
}


?>