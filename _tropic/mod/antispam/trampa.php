<?php 

//Anti-SPAM
$Incluir_JS[] = '../_tropic/mod/antispam/trampa.js';
$Incluir_CSS[] = '../_tropic/mod/antispam/trampa.css';



if ($_POST) {
	
	if ($_POST['Secreto']!=1) {
		
		$Error = 1;
		$Respuesta_Array[] = 'Jodido robot!';
		
		// Rediregir
		$Pagina = '../_tropic/mod/antispam/blank.html';
		header("Location: $Pagina ");
		exit;

		
		
	}
	
}









?>
