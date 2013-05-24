<?php 

// ---------------------------------------   BASICOS:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//


// Elemento CRUD
$Tabla = 'alumnos';
$Campo_ID = 'ID_Alumno';
$Label_Singular = 'Alumno'; // ej: Producto
$Label_Plural = 'Alumnos'; // ej: Productos


// Padre
$Parent_Field = 'ID_Empresa'; // vacío si no hay padre
$Parent_Value = $_GET['ID_Empresa'];
$Parent_File = 'empresas.php';
$Parent_Label = 'Empresas';


// ---------------------------------------   LISTADO:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

$Sort_Default = 'ID_Alumno ASC'; 

// Custom SQL (sin ORDER BY):
$List_Custom_SQL = "

SELECT alumnos.ID_Alumno, alumnos.Nombre, alumnos.Apellidos, alumnos.Celular, alumnos.Email, empresas.Nombre AS Empresa
FROM alumnos , empresas
WHERE 
alumnos.Cod_Empresa = empresas.ID_Empresa
AND
alumnos.Cod_Empresa = '{$_GET['ID_Empresa']}'

";


// Botones (hijos):  ej: array('Label', 'url'); 
//$Boton[] = array('Alumnos', 'alumnos.php?ID_Empresa={$row[\'ID_Empresa\']}'); 


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
$Editar_Campos[] = array('Apellidos', 'text', 'Apellidos');
$Editar_Campos[] = array('Celular', 'text', 'Celular');
$Editar_Campos[] = array('Email', 'text', 'Email');
$Editar_Campos[] = array('Cod_Empresa', 'relation', 'Empresa'); 

// Datos para campos "relation" ($tabla, $Campo_ID, $Campo_Nombre, $Activar)
$Relation['Cod_Empresa'] = array('empresas', 'ID_Empresa', 'Nombre', 0); // 1 = input select activado




// ---------------------------------------   BORRAR   ---------------------------------------------------//

$Campo_Titulo = 'Nombre';  // Campo para mostrar cuando borrar.

// Tablas depedientes: array(NombreTabla, Campo_FK)
//$Tabla_Hijos[] = array('inscripciones', 'Cod_Fecha'); 





///  RENDER ///
include '../_tropic/crud/render.php';
?>



















