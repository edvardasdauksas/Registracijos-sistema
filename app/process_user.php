<?php

require_once 'class.User.php';

$user = new User();  

	if(!isset($_SESSION['id'])) {
		if(isset($_GET['action'])) {
		
		} else { 
			header( 'Location: ../public/user.html' );
		}
	} else {
		header( 'Location: ../public/procedure_registration.html' );
	}


?>