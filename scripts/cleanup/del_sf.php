<?php
/* 
REMOTELY Deletes Files from the Directory the file is executed from
Filenames are stored in the Array beyond*/


$files = [
	"joomla.zip",
	"unpack.php",
	"delete.php",
];



foreach ($files as $file) {
	if (is_dir($file)){
		echo $file."<br>";
		rmdir($file);
	}

	elseif (is_file){
		echo $file."<br>";
		unlink($file);
	}

}
?>
