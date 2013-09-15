<?php

 $sql = "Select {$Campo}, $Campo_ID AS ID From $Tabla order by {$Campo}";
$res = mysql_query($sql);
$arreglo_php = array();
if(mysql_num_rows($res)==0)
   array_push($arreglo_php, "No hay datos");
else{
  while($palabras = mysql_fetch_array($res)){
    array_push($arreglo_php, $palabras[$Campo]."-".$palabras['ID']);
  }
}

?>