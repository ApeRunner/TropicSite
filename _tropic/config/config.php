<?php session_start();

// Variables Globales
$Mostrar_Debug = 0;
date_default_timezone_set("America/Los_Angeles");


// Config Sitio
$Site_Name = 'IRONMAN';
$Dominio = 'dev1.mexired.com'; // Dominio fijo o $_SESSION['Dominio']
$Admin_User = 'dev1';
$Admin_Pass = 'pass1237';


/*
// Verificar Servidor
if ( strpos('--'.$_SERVER["SERVER_NAME"], 'localhost') > 0 )  $Servidor_Actual = 'local'; 
else  $Servidor_Actual = 'remoto';
*/

$Servidor_Actual = 'remoto';

if ($Servidor_Actual == 'local')
{
	// Config Local
	$Ruta_Sitio = 'dev1.mexired.com'; // Ruta desde "localhost", SIN slash a las orillas.
	$DB_Host = 'localhost';
	$DB_User = 'root';
	$DB_Password = '';
	$DB_Database = 'inscripciones';
}


if ($Servidor_Actual == 'remoto')
{
	// Config Remota (WWW)
	$Ruta_Sitio = ''; // Ruta desde "public_html", SIN slash a las orillas.
	$DB_Host = 'www.mexired.com';
	$DB_User = 'lumbre_sergio';
	$DB_Password = 'pass1237';
	$DB_Database = 'lumbre_inscripciones';
}




// CONECTAR A BD
$DB_Conn = mysql_connect($DB_Host, $DB_User, $DB_Password);
if (!$DB_Conn)
{echo 'Error: Could not connect to database. Please try again later.'; exit; }
mysql_select_db($DB_Database);

echo mysql_error().mysql_info();




 $_SESSION['DB_Host'] = $DB_Host;
 $_SESSION['DB_User'] = $DB_User;
 $_SESSION['DB_Password'] = $DB_Password;
 $_SESSION['DB_Database'] = $DB_Database;
 
 
 $_SESSION['Dominio'] = $Dominio;



// DEBUG
//require "../_tropic/funciones/debug.php";


?>