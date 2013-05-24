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




?>