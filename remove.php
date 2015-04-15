<?php
	$fileName = $_GET['name'];
	$filePath = 'photos/'.$fileName;
	if ( file_exists($filePath) ) {
		unlink($filePath);
		header('Location:index.php');
	}
?>