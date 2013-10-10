<?php 

/**
 * Home template
 *
 */
 
include './global/config/config.php';


//HTML

$Head_Title = $page->title .' | '. $Tropic_Empresa;


include("./global/header.php"); 
?>


<h2><?=$page->headline ?> </h2>



<?=$page->body ?> 




<?php include './global/processwire/child_pages.php'; ?>



<?php include("./global/footer.php");  ?>

