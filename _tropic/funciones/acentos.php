<?php


// Limpiar HTML

function formatear_html($s)
	{
	$s = ereg_replace("¡", "&iexcl;", $s);
	$s = ereg_replace("¿", "&iquest;", $s);
	$s = ereg_replace("á", "&aacute;", $s);
	$s = ereg_replace("Á", "&Aacute;", $s);
	$s = ereg_replace("é", "&eacute;", $s);
	$s = ereg_replace("É", "&Eacute;", $s);
	$s = ereg_replace("í", "&iacute;", $s);
	$s = ereg_replace("Í", "&Iacute;", $s);
	$s = ereg_replace("ñ", "&ntilde;", $s);
	$s = ereg_replace("Ñ", "&Ntilde;", $s);
	$s = ereg_replace("ó", "&oacute;", $s);
	$s = ereg_replace("Ó", "&Oacute;", $s);
	$s = ereg_replace("ú", "&uacute;", $s);
	$s = ereg_replace("Ú", "&Uacute;", $s);
	$s = ereg_replace("ü", "&uuml;", $s);
	$s = ereg_replace("Ü", "&Uuml;", $s);
	$s = ereg_replace("'", "&rsquo;", $s);
	$s = ereg_replace("€", "&euro;", $s);
	
	
	
	return $s;
	} 

?>