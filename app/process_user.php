<?php

// ---- Dar nesukuria/neistraukai duomenų. Reikės perdaryti į ajax (o gal ir ne)


require_once 'class.User.php'; 

$user = null;

	if(!isset($_SESSION['id'])) {
		if(isset($_GET['action'])) {
			if($_GET['action'] == 'login') {
				$user = new User(null, null, null, $_POST['password-login'], $_POST['email-login'], null);
				if(isset($_POST['remember-login'])) {
				
				}
			} else {
				$user = new User(null, $_POST['name'], $_POST['second-name'], $_POST['password-registration'], $_POST['e-mail-registration'], $_POST['phone']); 
				if(isset($_POST['remember-registration'])) {
				
				}
			}
		} else { 
			header( 'Location: ../public/login_register.html' );
		}
	} else {
		header( 'Location: ../public/procedure_registration.html' );
	}


?>