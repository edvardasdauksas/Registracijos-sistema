<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "beauty_parlour";
try {
  $pdo = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
  $pdo->exec("SET NAMES 'utf8' COLLATE 'utf8_bin'");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
  echo $err->getMessage();
}
try {
  $sth = $pdo->prepare('SELECT *
                        FROM `employee`');
  $sth->execute();
  while ($da = $sth->fetch(PDO::FETCH_ASSOC)) {
    echo "employee id: " . $da['employee_id'] . "<br />";
    echo "employee name: " . $da['name'] . "<br />";
    echo "employee last name: " . $da['last_name'] . "<br />";
    echo "employee tel: " . $da['tel_number'] . "<br />";
  }
} catch (PDOException $err) {
  echo $err->getMessage();
}