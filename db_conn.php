<?php

$sName = "localhost";
$uName = "root";
$pass = "Test#123";
$db_name = "online_book_store_db";

// $sName = "mysql1006.mochahost.com";
// $uName = "lanandan_will_notification";
// $pass = "2{}A(90f_%F5";
// $db_name = "lanandan_will_notification";


try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",$uName,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Connection failed : ". $e->getMessage();
}



?>