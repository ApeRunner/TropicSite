<?php 

// ---------------------------------------   BASICOS:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

// Elemento CRUD
$Tabla = 'viajes';
$Campo_ID = 'ID_Viaje';
$Label_Singular = 'Viaje'; // ej: Producto
$Label_Plural = 'Viajes'; // ej: Productos





// ---------------------------------------   LISTADO:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

$Sort_Default = 'Fecha ASC'; 

// Custom SQL (sin ORDER BY)
$List_Custom_SQL = "
SELECT viajes.ID_Viaje, salas.Nombre AS Sala, viajes.Fecha, viajes.Nombre
 FROM viajes, salas 
 WHERE viajes.Cod_Sala = salas.ID_Sala ";



// Botones (hijos):  ej: array('Label', 'url'); 
$Boton[] = array('Inscripciones', '../reportes/viaje.php?ID_Viaje={$row[\'ID_Viaje\']}'); 
$Boton[] = array('Fechas', 'fechas.php?ID_Viaje={$row[\'ID_Viaje\']}'); 






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
$Editar_Campos[] = array('Cod_Sala', 'relation', 'Sala'); 
$Editar_Campos[] = array('Fecha', 'date', 'Fecha'); 





// Datos para campos "relation" ($tabla, $Campo_ID, $Campo_Nombre)
$Relation['Cod_Sala'] = array('salas', 'ID_Sala', 'Nombre',1);





// ---------------------------------------   BORRAR   ---------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//



$Campo_Titulo = 'Nombre';  // Campo para mostrar cuando borrar.

// Tablas depedientes: array(NombreTabla, Campo_FK_Padre)
$Tabla_Hijos[] = array('fechas', 'Cod_Viaje'); 








///  RENDER ///
include '../_tropic/crud/render.php';






?>




