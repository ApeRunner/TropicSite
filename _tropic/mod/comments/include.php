<A NAME="Comentarios"></A>
<?php
include '../_tropic/funciones/input.php';
include '../_tropic/funciones/validar.php';
include('inputfilter.php');

global $Error;


$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Comentario = $_POST['Comentario'];
$page = $_SERVER['REQUEST_URI']; // SACA EL PATH DE LA URL



//SI SE HACE CLICK EN EL BOTON

if ($_POST['Submit']) { 
	
	// Validar
	validar_email( 'Email' ) ;
	validar_llenado( 'Nombre',  '3',  'Falta su Nombre.<br/>' ) ;	
	validar_llenado( 'Comentario',  '3',  'Falta su Comentario.<br/>' ) ;
	
	//SANITIZAR
	$filter = new InputFilter();
	$_POST = $filter->process($_POST);
	
		
	//SI ERROR ES DIFERENTE DE 1 -> INSERTAR A BASE DE DATOS
	if ($Error!=1) 			{ 
		
		include 'mail-send-cliente.php';
		
		// INSERTAR A BASE DE DATOS
		
		 $query_insert = "INSERT INTO comentarios (Nombre, Email, Comentario, Page, Creado) VALUES ('$Nombre', '$Email', '$Comentario', '$page', NOW())";
		
		$result_insert = mysql_query($query_insert);
		
		
		$_POST['Nombre'] = "";
		$_POST['Email'] = "";
		$_POST['Comentario'] = "";
		
			
								}	
						
}


	
	 

//SE CREA EL FORMULARIO PARA DAR DE ALTA COMENTARIOS	 
?>
<br/>
<br/>
<br/>
<left> 	
<table  border="0" cellpadding="0" cellspacing="10" 
    style="background-color:#E6E6E6; border:#CCC solid 1px;" >
    
      <form name="Comentarios" id="Form_Contacto" method="post" action="#Comentarios">	  
      
      <tr>
          <td align="right" valign="top"><span style="color: #F00">*</span>Comentario:</td>
          <td align="right"><?=input_textarea('Comentario', $_POST['Comentario'])?></td>
        </tr>

	    <tr>
          <td align="right" valign="top"><span style="color: #F00">*</span>Nombre:</td>
          <td align="right"><?=input_text('Nombre', $_POST['Nombre'])?></td>
        </tr>
 <tr>
          <td align="right" valign="top"><span style="color: #F00">*</span>Email:</td>
          <td align="right"><?=input_text('Email', $_POST['Email'])?></td>
        </tr>
        <tr>
   <td ><button name="Submit" value="SI" type="submit"> <strong>Enviar</strong> </button></td>
        </tr>
      </form>
</table>
</left>	<?php // FIN DEL FORMULARIO ?>




<?php





//QUERY PARA EXTRACCION DE COMENTARIOS
 $query_comentario = "SELECT ID_Comentario, Nombre, Comentario, DATE_FORMAT(Creado,'%d-%m-%Y %h:%i:%s') AS Creado FROM comentarios WHERE Page = '$page' ORDER BY ID_Comentario DESC LIMIT 10";
 
 $res = mysql_query($query_comentario);
 while ($row = mysql_fetch_array($res)){
 $ID_Comentario = $row['ID_Comentario'];
 }
 
?>
<br/>
<?php if($ID_Comentario > 0){ ?>
<h3>Comentarios:</h3>
<br/>
	<table border="1" cellpadding="0" cellspacing="2">
<?php
$result_comentario = mysql_query($query_comentario);
	while ($row_comentarios = mysql_fetch_array($result_comentario))
	
		{
	//SE CREA LA TABLA CON LOS COMENTARIOS LIGADOS A ESTA PAGE
	
	
	?>
	
  <tr>
    <td><strong><?=$row_comentarios['Nombre']?></strong></td>
  </tr>
  <tr>
    <td><?=$row_comentarios['Creado']?> <br/><?=$row_comentarios['Comentario']?></td>
  </tr>

	
	<?php
	
		}
		
		?>
		
		</table>
	<br/>
<?php } ?>	
