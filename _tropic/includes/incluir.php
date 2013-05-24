<?php 


print_r($Incluir_PHP);

// Incluir archivos JavaScript dentro de tag <head>
if ($Incluir_JS) 
  {
  foreach ($Incluir_JS as $key => $value) 
	{
	echo '<script type="text/javascript" src="' . $value . '"></script>'."\n";
	}
  }
  
  
  
// Incluir archivos CSS dentro de tag <head>
if ($Incluir_CSS) 
  {
  foreach ($Incluir_CSS as $key => $value) 
	{
	echo "<link rel='stylesheet' type='text/css' href='$value'/>  \n";
	}
  }
  
  
  
  
// Incluir Scripts PHP dentro de <head>
if ($Incluir_PHP) 
  {
  foreach ($Incluir_PHP as $key => $value) 
	{
	include $value;
	}
  }
  
  
// Incluir HTML dentro de <head>
if ($Incluir_HTML) 
  {
  foreach ($Incluir_HTML as $key => $value) 
	{
	echo $value;
	}
  }
  
  
  
  
  
?>
