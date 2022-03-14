<?php

/*
REPLACE $username with your username on the Server to avoid Dataloss
*/
$username = ".";



			
			
/* 
Leave this if you want to operate this Script from the directory your in!
*/
$pathext = "";



/*Script logic for recrusive deletion */
recurse(__DIR__, $username, $nodel, $pathext);



function recurse($dir, $username, $nodel, $pathext){
	
	echo "<br>"."Starte im Verzeichnis: ".$dir."<br>";
	rmfiles($dir."".$pathext, $username, $nodel);
 
}

function rmfiles ($dir, $root, $nodel){
	// PHP program to delete all
	// file from a folder
	    
	// Folder path to be flushed
	$folder_path = $dir;
	   
	echo "<br><br><br><br>________________<br>Zielverzeichnis: ".$folder_path."<br><br>";
	// List of name of files inside
	// specified folder
	$files = glob($folder_path.'/*'); 
	// Deleting all the files in the list
	foreach($files as $file) {
		if (strpos($file, $root) !== false){	 
			

			 
			if(is_dir($file)){ 
				rmfiles($file, $root, $nodel); 
			}
		   
			if(is_file($file)){
					$isselected = 0;
					foreach ($nodel as $nodeli){
						
						if($file === $nodeli){
							$isselected = $isselected + 1;
						}
					}  
					if ($isselected === 0){
						 	echo "deleting file: ".$file."<br>";   
							// Delete the given file
							unlink($file);
					}
					else {
						echo "".$file." seems to be selected for exclusion ! - - - Isselected has a Value of ".$isselected."<br>";
						echo "for comparisson: <br>";
						foreach ($nodel as $nodeli){
							echo $dir.$nodeli."<br>";
						} 

					}
				echo "<br>";
			}
			if(is_dir($file)){
				rmdir($file);
			}
		}
		else{
			echo "test<br>";
		}
	}
}

?>
