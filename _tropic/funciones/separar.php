<?php

$contenido = $_GET[$Campo_ID];
$separar = explode('-', $contenido);

$ID = $separar[1];

$WHERE = "WHERE $Campo_ID = $ID";
?>