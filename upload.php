<?php
	$name     = $_FILES['file']['name'];
	$tmpName  = $_FILES['file']['tmp_name'];
	$targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'photos' . DIRECTORY_SEPARATOR. $name;
	move_uploaded_file($tmpName,$targetPath); 
	header( 'Location: index.php' ) ;
	exit;
?>