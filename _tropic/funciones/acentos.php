<?php


// Limpiar HTML

function formatear_html($s)
	{
	$s = ereg_replace("�", "&iexcl;", $s);
	$s = ereg_replace("�", "&iquest;", $s);
	$s = ereg_replace("�", "&aacute;", $s);
	$s = ereg_replace("�", "&Aacute;", $s);
	$s = ereg_replace("�", "&eacute;", $s);
	$s = ereg_replace("�", "&Eacute;", $s);
	$s = ereg_replace("�", "&iacute;", $s);
	$s = ereg_replace("�", "&Iacute;", $s);
	$s = ereg_replace("�", "&ntilde;", $s);
	$s = ereg_replace("�", "&Ntilde;", $s);
	$s = ereg_replace("�", "&oacute;", $s);
	$s = ereg_replace("�", "&Oacute;", $s);
	$s = ereg_replace("�", "&uacute;", $s);
	$s = ereg_replace("�", "&Uacute;", $s);
	$s = ereg_replace("�", "&uuml;", $s);
	$s = ereg_replace("�", "&Uuml;", $s);
	$s = ereg_replace("'", "&rsquo;", $s);
	$s = ereg_replace("�", "&euro;", $s);
	
	
	
	return $s;
	} 

?>