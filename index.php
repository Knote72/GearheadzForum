<?php
try{
	
}
catch (PDOException $e) {
	$error_message = $e->getMessage();
	include('Errors/db_errors.php');
	exit();
}
?>