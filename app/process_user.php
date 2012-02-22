<?php
	session_start();
// ---- Dar nesukuria/neistraukai duomenų. Reikės perdaryti į ajax (o gal ir ne)


require_once 'class.User.php';
require_once 'class.DB_Interface.php';

$connection = new DB_Interface("localhost","root","","beauty_parlour");
$user = null;
$_SESSION['id'] = null;
	if(isset($_GET['action'])) {
		if($_GET['action'] == 'login') {
			$user = new User(null, null, null, $_POST['password-login'], $_POST['email-login'], null);
			$data = $user->login($connection);
			if(isset($data['user_id'])) {		
				$_SESSION['id'] = $data['user_id'];
				if(isset($_POST['remember-login'])) {
						
				}
			}
			header( 'Location: ../public/procedure_registration.php' );
		} else {
			$user = new User(null, $_POST['name'], $_POST['second-name'], $_POST['password-registration'], $_POST['e-mail-registration'], $_POST['phone']); 
			if(isset($_POST['remember-registration'])) {
			
			}
			$user->register($connection);
		}
	} else { 
		header( 'Location: ../public/login_register.html' );
	}

?>