<?php       


function borrar_de_array($str, &$array)
      {
        if (in_array($str,$array)==true) {
          foreach ($array as $key=>$value) {
            if ($value==$str) unset($array[$key]);
          }
        }
      } 
	  
	  
	   

?>