<?php
    require_once('..\app\class.DB_Interface.php');
    //reiktu config file'o su visu situo brudu
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "beauty_parlour";
    //sukurimas
    $db = new DB_Interface($host, $username, $password, $db_name);
    $id = null;
    $name = "Petras";
    $password = "asdfsafsdfsDF";
    $lastName = null;
    $email = "petras@gmail.com";
    $tel_number = 12345678;
    //user irasymas
    //grazina rows affected (turetu grazinti 1 siuo atveju) arba errora
    //echo($db->insertUser($name, $lastName, $password, $email, $tel_number));
    //$id = 8;
    //istrinti vartotoja
    //echo($db->deleteUser($id));
    //sunaikina X (objekta?)
    $db->__destructor();
    