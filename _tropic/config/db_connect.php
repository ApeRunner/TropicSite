<?php






// CONECTAR A BD
$DB_Conn = mysql_connect($DB_Host, $DB_User, $DB_Password);
if (!$DB_Conn)
{echo 'Error: Could not connect to database. Please try again later.'; exit; }
mysql_select_db($DB_Database);

echo mysql_error().mysql_info();

?>