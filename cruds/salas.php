<?php 

// ---------------------------------------   BASICOS:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

// Elemento CRUD
$Tabla = 'salas';
$Campo_ID = 'ID_Sala';
$Label_Singular = 'Sala'; // ej: Producto
$Label_Plural = 'Salas'; // ej: Productos


// Padre
$Parent_Field = 'ID_Ciudad'; // ej: ID_Categoria (vacío si no hay padre)
$Parent_Value = $_GET['ID_Ciudad'];
$Parent_File = 'ciudades.php';
$Parent_Label = 'Ciudades';




// ---------------------------------------   LISTADO:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

$Sort_Default = 'Nombre ASC'; 

// Custom SQL (sin ORDER BY)
$List_Custom_SQL = "

SELECT  salas.ID_Sala, salas.Nombre , ciudades.Nombre AS Ciudad, salas.Capacidad

FROM salas, ciudades

WHERE salas.Cod_Ciudad = ciudades.ID_Ciudad
AND ciudades.ID_Ciudad = {$_GET['ID_Ciudad']}

";





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
$Editar_Campos[] = array('Cod_Ciudad', 'relation', 'Cod. Ciudad'); 
$Editar_Campos[] = array('Capacidad', 'text', 'Capacidad'); 
$Editar_Campos[] = array('Direccion', 'textarea', 'Dirección'); 


// Datos para campos "relation" ($tabla, $Campo_ID, $Campo_Nombre)
$Relation['Cod_Ciudad'] = array('ciudades', 'ID_Ciudad', 'Nombre',0);







// ---------------------------------------   BORRAR   ---------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//



$Campo_Titulo = 'Nombre';  // Campo para mostrar cuando borrar.









///  RENDER ///
include '../_tropic/crud/render.php';


?>




