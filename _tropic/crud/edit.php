<?php

// Includes
include '../_tropic/config/config.php';
include "../_tropic/funciones/input_row.php";

$Incluir_JS[]= '../global/css/Metro-UI/javascript/calendar.js';
$Incluir_JS[]= '../global/css/Metro-UI/javascript/input-control.js';
$Incluir_JS[]= '../_tropic/javascript/moment.min.js';



/*

// DateTime picker
$Incluir_JS[]= '../_global/jquery/jquery-ui-timepicker-addon.js';
$Incluir_JS[]= '../_global/jquery/jquery-ui-timepicker.js';
$Incluir_JS[]= '../_global/javascript/datetime-picker/correr.js';


*/




// Insertar o Actualizar	
if (isset($_POST['Submit']))  { 

	// Insertar
	if ( !isset($_GET[$Campo_ID]) )  { 
		$action = "INSERT INTO $Tabla SET $Campo_ID = '{$_GET[$Campo_ID]}', ";  
		$where = '';
	}
	// Actualizar
	if (isset($_GET[$Campo_ID]))  {
		$action = "UPDATE $Tabla SET";  
		$where = "WHERE $Campo_ID = '{$_GET[$Campo_ID]}'";
	}
	

	// Editar Campos Selectos
	foreach ($Editar_Campos as $key => $value) {
		$Campos_Array[]= $value[0];
	}
	
	
	// Integrar Campos a Query
	$Total_Campos = count($Campos_Array);
	$i=1;
	foreach ($Campos_Array as $Campo ) 	{	
		$Valor = mysql_real_escape_string($_POST[$Campo]);
		$Campos_Query .= " $Campo = '$Valor' " ;
		if ($i != $Total_Campos) $Campos_Query .= ", " ;
		$i++;
	}

	
	// SQL Quqery
	 $query = " $action  $Campos_Query  $where " ;
	
	if ( $result = mysql_query($query) ) $Respuesta.= 'Registo guardado.'; 
	else $Respuesta.= 'Registro NO guardado. ERROR: '.mysql_error(); 

	
	// Redirigir
	$pagina = $filename .'?'. $Parent_Field."=".$Parent_Value . '&Respuesta=' . $Respuesta;
	$Respuesta = html_entity_decode($Respuesta);
	header ("Location:  $pagina");
	exit();
	
} 








// HTML header
include '../global/header.php' ;  
include '../_tropic/crud/inc_submenu.php'; 
?>
   
   
   



<br />
<h2> Editar <?=$Label_Singular?> </h2><br />
   
    


<form id="form1" name="form1" method="post" action="">
    
    
 
<?php  
// Extraer Registro
if (!$_POST['Submit']) {
	if ($_GET[$Campo_ID])	{
	  $query = "SELECT * FROM $Tabla 
				WHERE $Campo_ID = '$_GET[$Campo_ID]'
				";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	}
}
?> 


    
    




<?php // MOSTRAR CAMPOS SELECTOS
if ($Editar_Todos==0) { ?>
    <table  border="0" cellspacing="10" cellpadding="0">
    <?php 	foreach ($Editar_Campos as $key) {    ?>
        <tr>
        <td align="right" valign="middle"> 
        <strong><?=$key[2]?></strong> 
        </td>
        <td align="left" valign="middle"> 
        <?php
        if($key[1]=='text') input_row_text($key[0]) ;
        if($key[1]=='textarea') input_row_textarea($key[0]) ;
        if($key[1]=='timestamp') input_row_timestamp($key[0]) ;
        if($key[1]=='select') input_row_select($key[0], $Opciones[$key[0]]) ;
        if($key[1]=='checkbox')  input_row_checkbox($key[0]) ;
		
		
        if($key[1]=='relation')  input_row_relation($key[0], $Relation[$key[0]]) ; // por hacer
		
        if($key[1]=='date') input_row_date($key[0]) ; // por hacer
		
		?> 
        </td>
        </tr>
    <?php } ?>
    </table>
<?php } ?>










    
<br /><br />










    <input type="submit" name="Submit" id="Submit" value="Save" />
    
    
</form>






<?php include '../global/footer.php' ; ?>