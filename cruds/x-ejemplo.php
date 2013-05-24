<?php 

// ---------------------------------------   BASICOS:  --------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//

// Elemento CRUD
$Tabla = 'empresas';
$Campo_ID = 'ID_Empresa';
$Label_Singular = 'Empresa'; // ej: Producto
$Label_Plural = 'Empresas'; // ej: Productos


// Padre
$Parent_Field = 'ID_Ciudad'; // ej: ID_Categoria (vacío si no hay padre)
$Parent_Value = $_GET['ID_Ciudad'];
$Parent_File = 'ciudades.php';
$Parent_Label = 'Ciudades';




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
$Editar_Campos[] = array('Direccion', 'textarea', 'Direccion'); 
$Editar_Campos[] = array('Telefonos', 'text', 'Teléfonos');
$Editar_Campos[] = array('RFC', 'text', 'RFC'); 
$Editar_Campos[] = array('Domicilio_Fiscal', 'textarea', 'Domicilio_Fiscal');  
$Editar_Campos[] = array('Referido', 'text', 'Referido'); 


// Datos para campos "relation" ($tabla, $Campo_ID, $Campo_Nombre, $Activar)
$Relation['Cod_Ciudad'] = array('ciudad', 'ID_Ciudad', 'Nombre', 0); // 1 = input select activado






// ---------------------------------------   BORRAR   ---------------------------------------------------//
// ------------------------------------------------------------------------------------------------------//



$Campo_Titulo = 'Nombre';  // Campo para mostrar cuando borrar.

// Tablas depedientes: array(NombreTabla, Campo_FK_Padre)
$Tabla_Hijos[] = array('alumnos', 'Cod_Empresa'); 








///  RENDER ///
include '../_tropic/crud/render.php';


?>




