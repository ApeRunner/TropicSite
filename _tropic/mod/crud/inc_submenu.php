
<div align="center">

	<!-- Custom Return -->
	
	<?php
		if ($Custom_Return == 1){
		?>
		<a class="<?=$BTN_CSS?>" href="<?=$Custom_URL?>">
        <i class="icon-arrow-left-3"></i> <?=$Custom_Label?>
        </a>
		
	
	
	<!-- Padre -->
    <?php } elseif ( strlen($Parent_Field)>0 ) { 
	?>
        <a class="<?=$BTN_CSS?>" href="<?=$Parent_File?>?a=list">
        <i class="icon-arrow-left-3"></i> <?=$Parent_Label?>
        </a>
	<?php } ?>
    
    
    

	<!-- Lista Elemento -->
    <a class="<?=$BTN_CSS?>" href="<?=$filename?>?a=list&<?=$VarsParent?>">
    <i class="icon-list"></i> Listar <?=$Label_Plural?> 
    </a>
    
	<!-- Editar Elemento -->
    <a class="<?=$BTN_CSS?>" href="<?=$filename?>?a=edit&<?=$VarsParent?>">
    <i class="icon-plus"></i> Crear  <?=$Label_Singular?> 
    </a>
  

</div>





