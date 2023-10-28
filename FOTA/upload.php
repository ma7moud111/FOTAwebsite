<?php

// Code by: Mahmoud Sayed

	// initialize file counter
	$filecount = 0;

if(isset($_FILES['image']))
{
    $file_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $location = "uploads/";
    $b = move_uploaded_file($tmp_name, $location.$file_name);
    if($b == 1)
    {
        echo "File uploaded successfully <br>";
    }
    else
    {
        echo "Failed uploading <br>";
    }
	
	// set the current working directory 
	$directory = getcwd()."/";
	
	
	$files2 = glob($directory."*");
	$filecount = count($files2);
	$counter = $filecount + 1;
	
	echo $counter . " are the total files uploaded";
	
}



?>