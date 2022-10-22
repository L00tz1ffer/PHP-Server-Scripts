<?php
 
// Path to Zip File 
// (in this case its extracting a file in the same Dir with the name joomla.zip)
$file = "joomla.zip"; 
//instance a ZipArchive Class
$zip = new ZipArchive;
 
//open the file that you want to unzip. 
//NOTE: give the correct path. 
//In this example zip file is in the same folder
$zipped = $zip->open($file);
  
// get the absolute path to $file, where the files has to be unzipped
$path = pathinfo(realpath($file), PATHINFO_DIRNAME);
$path = $path."/../";
echo "Path: ".$path."<br>"; 
 
//check if it is actually a Zip file
if ($zipped) {
  
//if yes then extract it to the said folder
  $extract = $zip->extractTo($path);
 
  //if unzipped succesfully then show the success message
  if($extract){
    echo "Your file extracted to $folder_name";
  } else {
	echo $extract;
    echo "your file not extracted";
  }
 
  //close the zip
  $zip->close();  
}
?>
