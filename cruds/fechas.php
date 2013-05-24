<?php 

// ---------------------------------------   BASICOS:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

// Elemento CRUD
$Tabla = 'fechas';
$Campo_ID = 'ID_Fecha';
$Label_Singular = 'Fecha'; // ej: Producto
$Label_Plural = 'Fechas'; // ej: Productos


// Padre
$Parent_Field = 'ID_Viaje'; // vacío si no hay padre
$Parent_Value = $_GET['ID_Viaje'];
$Parent_File = 'viajes.php';
$Parent_Label = 'Viajes';




// ---------------------------------------   LISTADO:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

$Sort_Default = 'ID_Fecha ASC'; 

// Custom SQL (sin ORDER BY)
$List_Custom_SQL = "

SELECT  fechas.ID_Fecha, cursos.Nombre AS Curso, viajes.Nombre AS Viaje, fechas.Fecha

FROM fechas, cursos, viajes

WHERE fechas.Cod_Curso = cursos.ID_Curso 

AND viajes.ID_Viaje = {$_GET['ID_Viaje']}

AND fechas.Cod_Viaje = viajes.ID_Viaje

";





// Formatear Campos -- Sólo comillas simples y escaparlas '\''
$Formatear_Campo['Nombre'] = '
<strong>
{$row[$Campo]}
</strong>
';


$Boton[] = array('Reporte', '../reportes/fecha.php?ID_Fecha={$row[\'ID_Fecha\']}'); 


// ---------------------------------------   EDITAR   ---------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//
// $Editar_Campos[] = array(Field, InputType, Label)
// InputTypes: text, textarea, timestamp, select, checkbox, date, relation


$Editar_Campos[] = array('Fecha', 'date', 'Fecha'); 

$Editar_Campos[] = array('Cod_Curso', 'relation', 'Curso'); 

$Editar_Campos[] = array('Cod_Viaje', 'relation', 'Viaje'); 




// Datos para campos "relation" ($tabla, $Campo_ID, $Campo_Nombre, $Activar)
$Relation['Cod_Curso'] = array('cursos', 'ID_Curso', 'Nombre', 1); // 1 = input select activado
$Relation['Cod_Viaje'] = array('viajes', 'ID_Viaje', 'Nombre', 0); // 0 = input select desactivado







// ---------------------------------------   BORRAR   ---------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//



$Campo_Titulo = 'Fecha';  // Campo para mostrar cuando borrar.

// Hablas depedientes: array(NombreTabla, Campo_FK)
$Tabla_Hijos[] = array('orderline', 'Cod_Fecha'); 






///  RENDER ///
include '../_tropic/crud/render.php';


?>




