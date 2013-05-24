<?php 

// Registrar el Origen de la Visita
// 
// Revisar si existe la variable GET "origen"

if ( ! $_SESSION['Origen']  ) {


	if ( isset($_SERVER['HTTP_REFERER']) ) {
		
		 $_SESSION['Origen'] = $_SERVER['HTTP_REFERER'] ;
		 
		// Checar si Origen incluye Dominio
		$mystring = $_SESSION['Origen'];
		$findme   = $Dominio ;
		
		if (strpos($mystring, $findme)) {
			
			// Borrar es URL local
			 $pos = strpos($mystring, $findme);
			if ( $pos <= 12 ) $_SESSION['Origen'] = '' ;
		}
		
	} 	
	
	
	
	if ( isset($_GET['origen']) ) {
		
		 $_SESSION['Origen'] = $_GET['origen'] ;
		 
	} 	
	
	
	

}






?>