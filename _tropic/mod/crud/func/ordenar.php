<?php 

/*
function ordernar_por($Campo) 
{
	global $Sort ;
	global $VarsParent;
	
	$Parte = explode(' ',$Sort);
	
	
	if ( $Campo == $Parte[0] )
	{
		$Sentido = $Parte[1] ;
		if ($Sentido=='ASC') { $Archivo = 'Sort_Arriba.png'; $Nuevo_Sentido = 'DESC';  }
		else { $Archivo = 'Sort_Abajo.png'; $Nuevo_Sentido = 'ASC'; }
		$Imagen = "<img src='../_tropic/graficos/icons/$Archivo' border='0' align='absmiddle' />";
	}
	else
	{
		$Nuevo_Sentido = 'ASC'; $Archivo = 'Sort_Arriba.png'; 
	}
	
	if (isset($VarsParent)) $Inc_Parent ='&'.$VarsParent ;
	
	
	$HTML = "
	$Imagen
	<a href='?Sort=$Campo~$Nuevo_Sentido$Inc_Parent' style='color:white'>
	$Campo
	</a>
	";

	return $HTML ; 
}
*/
?>