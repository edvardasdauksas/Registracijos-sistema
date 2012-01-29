<?php

require_once 'class.User.php';

$user = new User();  


    if($_GET['action'] == 'login') {
        $user->__construct(null, null, null, null, null, null);
    } else if($_GET['action'] == 'register') {
        $user->__construct(null, null, null, null, null, null);
    }


?>