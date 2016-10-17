<?php
	$errors= array();
      	$file_name = $_FILES['webm']['name'];
      	$file_size = $_FILES['webm']['size'];
      	$file_tmp = $_FILES['webm']['tmp_name'];
      	$file_type = $_FILES['webm']['type'];	
      	$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
      
	$expensions= array("webm");
      
	if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a WebM file.";
      	}
      
      
	if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"webm/".$file_name);
	 header("Location: http://webmroulette.rf.gd/");
	 die();	
      	}else{
         print_r($errors);
      	}	
?>