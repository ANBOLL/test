<?php
    $host = 'localhost';
    $dbname = 'news';
    $dbuser = 'root';
    $dbpassword = 'root';
    $ser = "privet";
    $sddder = "privet";
    try 
        {
            $dbs = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $dbuser, $dbpassword);
            #echo "Connected to $dbname at $host successfully.";
        } 
    catch (PDOException $pe) 
        {
            die("Could not connect to the database $dbname :" . $pe->getMessage());
        }
?>