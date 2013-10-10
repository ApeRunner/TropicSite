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


<div id="cont_2_columnas" style="margin-bottom:30px">
    
  	<div id='col_left' align="left" style="float:left; width:660px; ">
       <?=$page->body ?>
       
       <?php include './global/processwire/child_pages.php'; ?>
        
    </div>


  	<div id='col_right' align="left" style="float:right; width:280px; margin-left:20px; "> 
  
    
    	<?=$page->sidebar ?> 
        
    </div>


    <div style="clear:both"></div>

</div>









<?php include("./global/footer.php");  ?>

