<?php 
    session_start();
    
    if(isset($_COOKIE['btyprlusr']) && isset($_COOKIE['btyprlpsw']) && !isset($_SESSION['id'])) {
	require_once 'class.User.php';
        $user = new User();
        $user->__construct($_COOKIE['btyprlusr'], null, null, $_COOKIE['btyprlpsw'], null, null);
        $_SESSION['id'] = $user->getId();
    }
?>

<html>
    <head>
	<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<link type="text/css" rel="stylesheet" href="css/styles.css" />
    </head>
    <body>
	<div class="main">
            <header></header>
            <div class="content">
                <div id="stylist">

                </div>
                <div id="procedure">

                </div>
            </div>
        </div>
    </body>
</html>