<?php  
	session_start();
	
	$_SESSION['stylist'];
	$_SESSION['procedure'];
	
	if(isset($_GET['stylist'])) {
	
	} else if (isset($_GET['procedure'])) {
	
	} else {
		echo "wtf";
	}
	
?>