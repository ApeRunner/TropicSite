<?php

// redirect permanente 301 -- CANONICAL


$server = 'http://'. $_SERVER['HTTP_HOST'] ;

$Hay_www = strpos($server, 'www.') ;


if ( !$Hay_www ) {
	

	header("HTTP/1.1 301 Moved Permanently");
	header("Location: http://www.$Tropic_Domain".$_SERVER['REQUEST_URI']);
	exit();

	
	
}





?>