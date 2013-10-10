<?php 

// Output navigation for any children below the bodycopy.
// This navigation cycles through the page's children and prints
// a link and summary: 

if($page->numChildren) {

?>
    
<hr style="margin-top:20px; margin-bottom:20px" />

    
    
<?php
	
	echo "<ul>";

	foreach($page->children as $child) {
		echo "
		<li>
				<a href='{$child->url}'>{$child->title}</a> <br />
				<span>{$child->summary}</span>
		</li>
		"; 
	}

	echo "</ul>";
}

?>
