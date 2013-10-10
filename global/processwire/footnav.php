<?php
$homepage = $pages->get("/"); 
$children = $homepage->children;
$children->prepend($homepage); 


// Ver cual es el uútlimo valor
$total_pags = count($children);
$x = 1;
		
//loop		
foreach($children as $child) {
	//$class = $child === $page->rootParent ? " class='on'" : '';
	echo "<a style='color:#FFF; text-decoration:underline;' href='{$child->url}'>{$child->title}</a> ";
	if ($x!=$total_pags) echo '|';
	

	$x++;
}
?>
