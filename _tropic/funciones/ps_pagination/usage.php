<?php
	//Include the PS_Pagination class
	include('ps_pagination.php');
	
	//Connect to mysql db
	$conn = mysql_connect('localhost','jatinder','deemon');
	mysql_select_db('housingcom',$conn);
	$sql = 'SELECT title FROM hc_pages';
	
	//Create a PS_Pagination object
	$pager = new PS_Pagination($conn,$sql,8,3); // Conexion, Query, # Productos, # Paginas
	
	//The paginate() function returns a mysql result set 
	$rs = $pager->paginate();
	while($row = mysql_fetch_assoc($rs)) {
		echo $row['title'],"<br />\n";
	}
	
	//Display the full navigation in one go
	echo $pager->renderFullNav();
	
	//Or you can display the inidividual links
	echo "<br />";
	
	//Display the link to first page: First
	echo $pager->renderFirst();
	
	//Display the link to previous page: <<
	echo $pager->renderPrev();
	
	//Display page links: 1 2 3
	echo $pager->renderNav();
	
	//Display the link to next page: >>
	echo $pager->renderNext();
	
	//Display the link to last page: Last
	echo $pager->renderLast();
?>