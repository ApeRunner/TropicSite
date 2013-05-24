<?php 


function debug_info() 
{
	global $_SESSION ;
	global $_POST;
	global $_GET;
	global $Debug_Msg;

	// Eliminar Basura
	if ( array_key_exists('spaw_configs', $_SESSION ) ) unset($_SESSION['spaw_configs']);


	
	echo '<div align="left" style="padding: 10px; background-color: #FF9;">';
	
		echo '<div style="float:left">';
			echo '<div align="center" style="background-color:black; color:white; padding:2px; font-weight:bold">SESSION</div>';
			print_nice($_SESSION);
		echo '</div>';
	
		echo '<div style="float:left; margin-left:20px">';
			echo '<div align="center" style="background-color:black; color:white; padding:2px; font-weight:bold">GET</div>';
			echo '<div>';  print_nice($_GET);  echo '</div>';
		echo '</div>';
			
		echo '<div style="float:left; margin-left:20px">';
			echo '<div align="center" style="background-color:black; color:white; padding:2px; font-weight:bold">POST</div>';
			echo '<div>';  print_nice($_POST);  echo '</div>';
		echo '</div>';
			
		echo '<div style="float:left; margin-left:20px">';
			echo '<div align="center" style="background-color:black; color:white; padding:2px; font-weight:bold">MySQL</div>';
			echo '<div>';  mysql_error().mysql_info();  echo '</div>';
		echo '</div>';
		
		// Mensajes para Debugging
		echo '<div style="float:left; margin-left:20px">';
			echo '<div align="center" style="background-color:black; color:white; padding:2px; font-weight:bold">Debug Msg:</div>';
			
			if ($Debug_Msg) 
				{
				echo '<ul>';
					foreach ($Debug_Msg as $key => $value) {
						echo "<li> $value </li>";
					}
				echo '</ul>';
				}
		
		echo '</div>';
		
		// Utilidades
		echo '<div style="float:left; margin-left:20px">';
			echo '<div align="center" style="background-color:black; color:white; padding:2px; font-weight:bold">Utils</div>';
			echo '<div><a href="../plantilla/utils/kill_session.php">Kill Session</a><br /></div>';
		echo '</div>';
		
		
		
		
		
		
	echo '<div style="clear:left"></div>';
	
	echo '</div>';
	
	
	
}






function print_nice($elem,$max_level=10,$print_nice_stack=array()){
    if(is_array($elem) || is_object($elem)){
        if(in_array(&$elem,$print_nice_stack,true)){
            echo "<font color=red>RECURSION</font>";
            return;
        }
        $print_nice_stack[]=&$elem;
        if($max_level<1){
            echo "<font color=red>nivel maximo alcanzado</font>";
            return;
        }
        $max_level--;
        echo "<table border=1 cellspacing=0 cellpadding=3 >";
        if(is_array($elem)){
            //echo '<tr><td colspan=2 style="background-color:#333333;"><strong><font color=white>ARRAY</font></strong></td></tr>';
        }else{
            echo '<tr><td colspan=2 style="background-color:#333333;"><strong>';
            echo '<font color=white>OBJECT Type: '.get_class($elem).'</font></strong></td></tr>';
        }
        $color=0;
        foreach($elem as $k => $v){
            if($max_level%2){
                $rgb=($color++%2)?"#888888":"#BBBBBB";
            }else{
                $rgb=($color++%2)?"#8888BB":"#BBBBFF";
            }
            echo '<tr><td valign="top" style="width:40px;background-color:'.$rgb.';">';
            echo '<strong style="color:white">'.$k."</strong></td>";
			echo '<td style="background-color:white">';
            print_nice($v,$max_level,$print_nice_stack);
            echo "</td></tr>";
        }
        echo "</table>";
        return;
    }
    if($elem === null){
        echo "<font color=green>NULL</font>";
    }elseif($elem === 0){
        echo "0";
    }elseif($elem === true){
        echo "<font color=green>TRUE</font>";
    }elseif($elem === false){
        echo "<font color=green>FALSE</font>";
    }elseif($elem === ""){
        echo "<font color=green>EMPTY STRING</font>";

		
		
    }else{
       echo str_replace("\n","<strong><font color=red>*</font></strong><br>\n",$elem);
    }
} 








  
  
?>
