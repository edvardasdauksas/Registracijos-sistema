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
    echo($db->insertUser($name, $lastName, $password, $email, $tel_number));
    echo " < sukurem vartotoja <br/>";
    //$id = 8;
    //istrinti vartotoja
    //istraukiam userio duomenis array formatu pagal tai kaip pavadinta duombazeje
    if($result = $db->getUserData($email, $password)) {
      print_r($result);
      echo " < vartotojo duomenys <br/>";
    } else {
      echo "neturim";
    }
    if($db->getUserData($email, "random")) { //jeigu duomenu nera grazina false !!!!!<<<<
      echo "turim";
    } else {
      echo "neturim vartotojo su password random <br/>";
    }
    echo($db->deleteUser($result['user_id']));
    echo " < istrynem vartotoja <br/>";
    //sunaikina X (objekta?)
    $db->__destructor();
    