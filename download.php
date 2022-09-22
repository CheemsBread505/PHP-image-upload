<?php
// Enter the name of directory
$pathdir = "uploads/"; 
  
// Enter the name to creating zipped directory
$zipcreated = "images.zip";
  
// Create new zip class
$zip = new ZipArchive;
   
if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) {
      
    // Store the path into the variable
    $dir = opendir($pathdir);
       
    while($file = readdir($dir)) {
        if(is_file($pathdir.$file)) {
            $zip -> addFile($pathdir.$file, $file);
        }
    }
    $zip ->close();
}



// Define file name and path 
$fileName = 'images.zip'; 
$filePath = ''.$fileName; 
 
if(!empty($fileName) && file_exists($filePath)){ 
    // Define headers 
    header("Cache-Control: public"); 
    header("Content-Description: File Transfer"); 
    header("Content-Disposition: attachment; filename=$fileName"); 
    header("Content-Type: application/zip"); 
    header("Content-Transfer-Encoding: binary"); 
     
    // Read the file 
    readfile($filePath); 
    exit; 
}else{ 
    echo 'The file does not exist.'; 
}
?>