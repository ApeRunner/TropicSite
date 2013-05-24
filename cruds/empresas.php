<?php 

// ---------------------------------------   BASICOS:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//


// Elemento CRUD
$Tabla = 'empresas';
$Campo_ID = 'ID_Empresa';
$Label_Singular = 'Empresa'; // ej: Producto
$Label_Plural = 'Empresas'; // ej: Productos


// Padre
$Parent_Field = ''; // vacío si no hay padre
$Parent_Value = '';
$Parent_File = '';
$Parent_Label = '';


// ---------------------------------------   LISTADO:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

$Sort_Default = 'ID_Empresa ASC'; // ej: Campo ASC

// Custom SQL (sin ORDER BY)
$List_Custom_SQL = "SELECT  ID_Empresa, Nombre, Nombre_Persona, Email, Telefonos 
FROM empresas";


// Botones (hijos):  ej: array('Label', 'url'); 
$Boton[] = array('Alumnos', 'alumnos.php?ID_Empresa={$row[\'ID_Empresa\']}'); 


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
$Editar_Campos[] = array('Nombre_Persona', 'text', 'Contacto'); 
$Editar_Campos[] = array('Email', 'text', 'Email'); 
$Editar_Campos[] = array('Telefonos', 'text', 'Teléfonos');
$Editar_Campos[] = array('Direccion', 'textarea', 'Direccion'); 
$Editar_Campos[] = array('RFC', 'text', 'RFC'); 
$Editar_Campos[] = array('Domicilio_Fiscal', 'textarea', 'Domicilio_Fiscal');  
$Editar_Campos[] = array('Referido', 'text', 'Referido'); 
$Editar_Campos[] = array('Creado', 'date', 'Fecha de Registro');






// ---------------------------------------   BORRAR   ---------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//



$Campo_Titulo = 'Nombre';  // Campo para mostrar cuando borrar.

// Tablas depedientes: array(NombreTabla, Campo_FK)
//$Tabla_Hijos[] = array('inscripciones', 'Cod_Fecha'); 










///  RENDER ///
include '../_tropic/crud/render.php';


?>














