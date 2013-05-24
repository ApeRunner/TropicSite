<?php 
 
// validar_email()
function validar_email($Campo) 
{	
	global $Respuesta_Array ;
	global $Error ;
	global $_POST ;
	$Email = trim($_POST[$Campo]) ;
	if (strlen($Email) > 0) {		
		// CHEKAR SI ES UN EMAIL VALIDO
		if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $Email)){
			$valido = 'si';
		} 
		else {$valido = 'no'; }
		
		if ( $valido == 'no' )
		{
		$Error = 1; 
		$Respuesta_Array[] = 'Tu Email no es v&aacute;lido; rev&iacute;salo.';	
		}
	} 
	else 
	{ 	
		// ESTA VACIO
		$Error = 1;
		$Respuesta_Array[] = 'Falta escribir tu Email.';
	}	
}





// validar_llenado()
function validar_llenado($Campo, $Minimo=0, $Respuesta) {	

	global $Respuesta_Array ;
	global $Error ;
	global $_POST;
	
	$Input = trim($_POST[$Campo]) ;
	 
	if ( strlen($Input) <= $Minimo ) 	{
		
		 $Error = 1; 
		$Respuesta_Array[] = $Respuesta;
	}
	
	
}

function validar_tel1($Campo, $Minimo=0) {	

	//global $Respuesta_Array ;
	global $Error_tel ;
	global $_POST;
	
	$Input = trim($_POST[$Campo]) ;
	 
	if ( strlen($Input) <= $Minimo ) 	{
		
		 $Error_tel = 1; 
		$Respuesta_Array[] = $Respuesta;
	} elseif($Error_tel == 1){
		$Error_tel = 0;
	}
		
	
	
}

function validar_tel2($Campo, $Minimo=0, $Respuesta) {	

	global $Respuesta_Array ;
	global $Error_tel ;
	global $_POST;
	
	$Input = trim($_POST[$Campo]) ;
	 
	if ( strlen($Input) <= $Minimo ) 	{
		
		 $Error_tel = 1; 
		$Respuesta_Array[] = $Respuesta;
	} elseif($Error_tel == 1){
		$Error_tel = 0;
	}
		
	
	
}





 
?>