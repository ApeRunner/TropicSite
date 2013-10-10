<?php

$homepage = $pages->get("/"); 
$children = $homepage->children;
$children->prepend($homepage); 



$x = 1;

foreach($children as $child) {
	
	if ($child->title == $page->title) $actual = ' actual';
	else $actual = '';
	
	if ($x>1) $espacio = 'style="margin-left:20px"';
	else '';
	
	echo "<a class='topnav$actual' href='{$child->url}' $espacio>{$child->title} </a>";
	$x++;
}




?>

<div style="margin-left:15px"></div>


