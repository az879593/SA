<?php

$db_user = "root";
$db_pass = "";
$db_name = "useraccount";


try{
    $dsn = "mysql:host=localhost:3307;dbname=$db_name; charset = utf-8";
    $db = new PDO($dsn, $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "連接失敗: " . $e->getMessage();
}

?>


