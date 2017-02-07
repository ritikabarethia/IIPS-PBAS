<?php
    function readTextFiles($filePath){
		if (file_exists($filePath))   
		{  
			$file = fopen($filePath, "r");  
		 	while (!feof($file))   
 			{  
 			 	$display = fgets($file, filesize($filePath));  
  				echo $display . "  ";  
 			}  
 			fclose($file);  
		}   
		else {  
 		 	echo "Error occured ! ! ! Try again or report it to us";  
		} 
	}
?>
