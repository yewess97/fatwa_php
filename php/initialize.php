<?php

Define('DOMAINNAME', "http://" . $_SERVER['HTTP_HOST'] . "/php_day7/");

function at_public()
{

    return DOMAINNAME . "public/";
}

function at_root()
{

    return DOMAINNAME;
}


function redirect_to($path)
{
	header("Location:".DOMAINNAME.$path);
}


	
	// function  upload_file($image,$path_from,$path_main)
	// {
		// //var_dump($image);
		// $target_dir = $path_from;
		// $target_file = $target_dir .strtotime(1). basename($image["name"]);
		// if (!move_uploaded_file($image["tmp_name"], $target_file)) 
		// {
			// return ( "Sorry, there was an error uploading your file.");
		// }
		// return "http://".$_SERVER['HTTP_HOST']."/php_day7/".$path_main.strtotime(1). basename($image["name"]);
		
	// }
?>