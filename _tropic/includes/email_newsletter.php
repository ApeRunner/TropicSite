
<table width="100%" border="0" cellspacing="0" cellpadding="0">

<form id="TrampaForm" name="TrampaForm" method="post" action="">



    <tr>
      <td align="right" valign="top">
      



<?php

if ( isset($_POST['Newsletter']) and (strlen($_POST['Email'])>0)  ) 
{



$Email = trim($_POST['Email']) ;



// CHEKAR SI ES UN EMAIL VALIDO
if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $Email)) 
	{$Email_Valido = 'SI';} 
	else 
	{ $Respuesta_Newsletter.= 'Su Email no es v&aacute;lido!';	}




// CHEKAR SI EXISTE EMAIL
 $query = "SELECT Email FROM prospectos 
 			WHERE Email = '$Email' 
			";
$result = mysql_query($query);
$num_results = mysql_num_rows($result);		
if ($num_results>0) { 
	$Existe_Email = 'SI';
	$Respuesta_Newsletter .=  'Email ya ha sido registrado antes. ';
	}




// GRABAR EMAIL
if ( $Existe_Email!='SI' and $Email_Valido=='SI' ) {

 $query = " 
INSERT INTO prospectos SET

Origen	=	'{$_SESSION['Origen']}',
Email	=	'$Email',
Estatus = 	'Newletter'

" ;
if ( $result = mysql_query($query) )
	{ $Respuesta_Newsletter .=  'Email registrado. '; }
	else 
	{ $Respuesta_Newsletter .=   'Email NO registrado. ERROR: '.mysql_error(); }

}





// Mandar Email
$receptor = 'alberto@mexired.com, mafer@mexired.com';

$body = "

Una persona se susbribió al Newsletter.

Origen: {$_SESSION['Origen']}

Email: {$_POST['Email']}


";


// Headers Basicos
$headers .= "From: {$_POST['Email']} <{$_POST['Email']}>" . "\r\n";
$headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n";	


if ($Error != 1)  mail ($receptor, "Cursos.MXR: Newsletter", $body, $headers ); 





}			  
?>			  
			  

<span style="font-size:12px">
			  
<?php			  
if ($Respuesta_Newsletter) echo "<span style='color:#990000'>$Respuesta_Newsletter</span>" ;
else {
?>
Apunta tu email, para enviarte noticias<span class="Texto_Boletin">:</span>
              
<?php } ?>
              
</span>             
          
          
          
          
              
      <label>
        <input type="text" name="Email" id="Email" />
      </label>
      
      <label>
      <input type="submit" name="Newsletter" id="Newsletter" value="Enviar" />
      </label>
      
      
      
      
      
      
      
      
      
      </td>
  </tr>
  
  </form>
  
</table>

          
