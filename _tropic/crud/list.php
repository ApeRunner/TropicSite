<?php
require '../_tropic/config/config.php';
require "../_tropic/funciones/arrays.php";
require "../_tropic/funciones/listado.php";
require '../_tropic/funciones/ps_pagination/ps_pagination.php';





/*
// Contar TOTAL de REGISTROS
 $query = "SELECT COUNT(*) FROM  $Tabla  $SQL_Where  ";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$Total_Rows = $row['COUNT(*)'];
*/





// "ORDENAR POR"
if ( strlen($_GET['Sort'])>0 ) {
	$Sort = $_GET['Sort'] ;
	$Sort = eregi_replace('~', ' ', $Sort ) ;
	$_SESSION['Listado_Sort'] = $Sort ;
	$_SESSION['Listado_Tabla'] = $Tabla ;
	
} elseif ( $_SESSION['Listado_Tabla'] == $Tabla ) {
	
	$Sort = $_SESSION['Listado_Sort'] ;
	
} else { 

	$Sort = $Sort_Default ; 

}




/*
// Recordar Paginado (Después de SORT)
if ($_GET['page']) $_SESSION['page'] = $_GET['page'];
elseif ($_SESSION['page'])
{
	$Pagina = "?page={$_SESSION['page']}";
	header ("Location:  $Pagina ");
	exit();
}
*/




//echo $List_Custom_SQL;

// Array Campos
$result = mysql_query($List_Custom_SQL.' LIMIT 1');
while ($i < mysql_num_fields($result)) { 

	$meta = mysql_fetch_field($result, $i);
	$Campos_Array[] = $meta->name ;
	$i = $i + 1; 
} 




// QUERY BUENA
 $Query_Listado = $List_Custom_SQL . " ORDER BY $Sort";

 
// Paginado
$pager = new PS_Pagination($DB_Conn, $Query_Listado ,20,10); // Conn, Query, Rows, Paginas
$Result_Set = $pager->paginate();


// HEADER HTML
include '../global/header.php' ;
include '../_tropic/crud/inc_submenu.php'; 
include '../_tropic/crud/inc_h1.php'; 
?>

        
        
        
        
<table cellpadding="5" cellspacing="0" class="striped hovered bordered" style="background-color:#FFFFFF" >



<!-- Title Row -->
<tr style="color:white; background-color:#565656" >

    <?php // Titulo de Campo
    foreach ( $Campos_Array as $Campo ) {  ?>
    
        <td align="left" valign="middle" >
        <?=ordernar_por($Campo)?>
        </td>
    
    <?php } ?>  
    
    
        <?php  // Botones...
		if (!empty($Boton)) {
			foreach ($Boton as $key => $value) {
				echo "<td ></td>";
			}
		}
		?>

     
    
        <td >Editar</td>
        <td >Borrar</td>
        
</tr>

    
    
    
<!-- Loop Renglones -->
<?php 
while( $row = mysql_fetch_assoc($Result_Set) ) {
?>

<tr>
  
    <!-- Valores SQL -->
    <?php foreach ( $Campos_Array as $Campo ) {  ?>
    
        <td align="left" valign="middle">
        <?php
        if (isset($Formatear_Campo[$Campo])) eval(' echo " '.$Formatear_Campo[$Campo].' "; ');
        else echo $row[$Campo];
        ?>
        </td>
    
    <?php } ?>  
     
  
  
  <!-- Boton CUSTOM -->
  <?php 
  if (!empty($Boton)) {
  foreach ($Boton as $key => $value) { ?>
      
      <td align="center" valign="middle">
          <a style="display:inline-block; width:100%" href="<?php eval(' echo " '.$value[1].' "; '); ?>">
              <?= $value[0]?>
          </a>
      </td>
     
  <?php } } ?>
  




  
  <!-- Boton Editar -->
  <td align="center" valign="middle">
      <a style="display:inline-block; width:100%" href="<?=$filename?>?a=edit&<?=$Campo_ID?>=<?=$row[$Campo_ID]?>&<?=$VarsParent?>">
      <i class="icon-pencil"></i> 
      </a>
  </td>
  
  
  
  <!-- Boton Borrar -->
  <td align="center" valign="middle">
      <a style="display:inline-block; width:100%" href="<?=$filename?>?a=delete&<?=$Campo_ID?>=<?=$row[$Campo_ID]?>&<?=$VarsParent?>">
      <i class="icon-cancel-2"></i> 
      </a>
  </td>

    
    
  
</tr>

<?php } ?>

    
    
    
    
    
</table>









<div style="color:#999; margin-top:30px;">
<?php echo $pager->renderFullNav(); ?>
</div>                


<?php include '../global/footer.php' ; ?>
  
  

