<?php  


// Definir Acceso
if ( $_SESSION['Acceso']=='SI' )
	{}
	else
	{
	$pagina = '../index.php';
	header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/$pagina");
	exit();
	} 




?>
