<?php 

// ---------------------------------------   BASICOS:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

// Elemento CRUD
$Tabla = 'cursos';
$Campo_ID = 'ID_Curso';
$Label_Singular = 'Curso'; // ej: Producto
$Label_Plural = 'Cursos'; // ej: Productos





// ---------------------------------------   LISTADO:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

$Sort_Default = 'ID_Curso ASC'; 

// Custom SQL (sin ORDER BY)
$List_Custom_SQL = "SELECT * FROM cursos";




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
$Editar_Campos[] = array('Horas', 'text', 'Duracion en horas'); 
$Editar_Campos[] = array('Precio', 'text', 'Precio');
$Editar_Campos[] = array('Descripcion', 'textarea', 'Descripción');



// ---------------------------------------   BORRAR   ---------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//



$Campo_Titulo = 'Nombre';  // Campo para mostrar cuando borrar.








///  RENDER ///
include '../_tropic/crud/render.php';


?>




