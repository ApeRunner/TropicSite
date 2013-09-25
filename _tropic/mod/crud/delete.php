<?php






global $Label_Singular;

// Extraer Elemento	


if (!isset($_POST['Submit']))
{
	 $query = "SELECT $Campo_ID, $Campo_Titulo FROM $Tabla 
				WHERE  $Campo_ID = '{$_GET[$Campo_ID]}' ";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
}



// Verificar si tiene Hijos
if ( empty($Tabla_Hijos) ) {

		//echo "no contiene hijos";
	
	} else {
	
	// Si tiene hijos...
	$size = sizeof($Tabla_Hijos);
	$i=1;
	
	if ($size > $i ) {
		
		  while ($i<=$size) {
		  
			  $tbl = $Tabla_Hijos[$i][0];
			  $fk = $Tabla_Hijos[$i][1];
			  $i++;
			  echo sizeof($Tabla_Hijos);
			
			  $query = "SELECT COUNT($fk) FROM $tbl WHERE $fk = '{$_GET[$Campo_ID]}' ";
			  
			  $resultado = mysql_query($query);
			  $fila = mysql_fetch_array($resultado);
			  $Total_Filas = $fila['COUNT($fk)'];
		  }
	
	} else {
		
		$tbl = $Tabla_Hijos[0][0];
		$fk = $Tabla_Hijos[0][1];
		$i++;
		
		
		$query = "SELECT COUNT($fk) FROM $tbl WHERE $fk = '{$_GET[$Campo_ID]}' ";
		
		$resultado = mysql_query($query);
		$fila = mysql_fetch_array($resultado);
		$Total_Filas = $fila['COUNT('.$fk.')'];
	  
	}

}








// Borrar Elemento
if (isset($_POST['Submit']))
{
	 $query = "DELETE FROM $Tabla 
			WHERE  $Campo_ID = '{$_GET[$Campo_ID]}' ";
			
	if ( mysql_query($query) ) $Respuesta.= "$Label_Singular \"{$_POST['Campo_Titulo']}\" fue borrado."; 
	else $Respuesta.= 'Registro NO borrado. ERROR: '.mysql_error(); 
	
	// Redirigir
	$pagina = $filename .'?'. $Parent_Field."=".$Parent_Value . '&Respuesta=' . $Respuesta;
	$Respuesta = html_entity_decode($Respuesta);
	header ("Location:  $pagina");
	exit();
	
} 
	
	
	
	
	
	
	
	
	
	
// HTML header	
include '../global/header.php' ; 
include '../_tropic/mod/crud/inc_submenu.php'; 
?>




<form name="form1" method="post" action="">
        
  
  
  
<h2>¿Estás seguro que deseas borrar este <?=$Label_Singular?>?</h2>
    
    

<?php   if (!empty($Tabla_Hijos)) { ?>
<div>
    <p>Esta &quot;<?php echo $Label_Singular; ?>&quot; tiene los siguientes registros dependientes: </p>
    <p><strong><?php echo "".$tbl.": "; echo $Total_Filas; ?> </strong></p>
    <p>&nbsp;</p>
    <p>Todos estos datos dependientes también serán eliminados.</p>
</div>
<?php } ?>
    
    

    
<div style="border:#666666 solid 3px; padding:20px; min-width:400px;; display:inline-block">    
    
    <div align="right">
        
        <div style="float:left">
        <img src="../_tropic/graficos/icons/warning.gif" width="18" height="18" />
        </div>
        
        <?=$Campo_ID?>: <?=$row[$Campo_ID]?>
    
    </div>

    
    <div align="center" style="margin-top:30px;"> 
     
        <h2><?=$row[$Campo_Titulo]?></h2><br />

        
        <input name="Campo_Titulo" type="hidden" id="Campo_Titulo" value="<?=$row[$Campo_Titulo]?>" />
        
        <input type="submit" name="Submit" value="Borrar" />
    
    </div>    
    

</div>


    
    
        
        
        
        
        
        
        
        
</form>   
             
<br /> 
<div align="center">
                
  ( Si no lo quieres borrar, haz <a href="javascript: history.go(-1)">click aqu&iacute; </a>) 
                
</div>
  


<?php include '../global/footer.php' ; ?>


