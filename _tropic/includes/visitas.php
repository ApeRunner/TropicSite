<?php 


if ( isset($_SESSION['Origen'])  and  $_SESSION['Visita_Contada']!=1   )
{
	
	
// Guardar Venta
$query = "INSERT INTO visitas SET
			Origen = '{$_SESSION['Origen']}',
			IP = '{$_SERVER['REMOTE_ADDR']}'
		";
mysql_query($query);
	
	$_SESSION['Visita_Contada'] = 1 ;
	
}



 ?>