<?php 

// ---------------------------------------   BASICOS:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

// Elemento CRUD
$Tabla = 'ciudades';
$Campo_ID = 'ID_Ciudad';
$Label_Singular = 'Ciudad'; // ej: Producto
$Label_Plural = 'Ciudades'; // ej: Productos





// ---------------------------------------   LISTADO:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

$Sort_Default = 'Nombre ASC'; 

// Custom SQL (sin ORDER BY)
$List_Custom_SQL = "SELECT * FROM ciudades";



// Botones (hijos):  ej: array('Label', 'url'); 
$Boton[] = array('Salas', 'salas.php?ID_Ciudad={$row[\'ID_Ciudad\']}'); 



// Formatear Campos -- Sólo comillas simples y escaparlas '\''
$Formatear_Campo['Nombre'] = '
<strong>
{$row[$Campo]}
</strong>
';





// ---------------------------------------   EDITAR   ---------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//
// $Editar_Campos[] = array(Field, InputType, Label)
// InputTypes: text, textarea, timestamp, select, checkbox, date, relation

$Editar_Campos[] = array('Nombre', 'text', 'Nombre'); 
$Editar_Campos[] = array('IVA', 'text', 'IVA'); 





// ---------------------------------------   BORRAR   ---------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//



$Campo_Titulo = 'Nombre';  // Campo para mostrar cuando borrar.

// Tablas depedientes: array(NombreTabla, Campo_FK_Padre)
$Tabla_Hijos[] = array('salas', 'Cod_Ciudad'); 








///  RENDER ///
include '../_tropic/crud/render.php';


?>




