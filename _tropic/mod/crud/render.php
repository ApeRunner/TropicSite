<?php 



$Incluir_JS[]= '../_tropic/javascript/float.js';


// Nombre de archivo actual
$filepath = $_SERVER['PHP_SELF'];
$filename = basename($filepath);

// Variables Parent GET
if ( strlen($Parent_Field)>0 ) $VarsParent = $Parent_Field."=".$Parent_Value ;	






// Funciones
include '../_tropic/mod/crud/func/ordenar.php';



// Cargar PHP indicado
if ( $_GET['a']=='list' or empty($_GET['a']) ) include '../_tropic/mod/crud/list.php';
if ( $_GET['a']=='edit' ) include '../_tropic/mod/crud/edit.php';
if ( $_GET['a']=='delete' ) include '../_tropic/mod/crud/delete.php';








?>