<?php
    $DB_DSN = "127.0.0.1";
    $DB_USER = "root";
    $DB_PASSWORD = "123456";
    $dataname = "matcha";

    try
    {
        $conec = new PDO("mysql:host=$DB_DSN" , $DB_USER, $DB_PASSWORD);
        $conec->query("USE $dataname");
        $conec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "Connection Failed: " . $e->getMessage();
    }

?>