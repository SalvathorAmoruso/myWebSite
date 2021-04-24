<?php

function OpenCon()
{
    /*$dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "my_progettoamoruso";*/

    $dbhost = "localhost";
    $dbuser = "progettoamoruso@localhost";
    $dbpass = "";
    $db = "my_progettoamoruso";

    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

    return $conn;
}

function CloseCon($conn)
{
    $conn -> close();
}


if($conn = OpenCon()){
    $sql = "INSERT INTO log (descrizione) VALUES ('new log')";
    $result = $conn->query($sql);
}

?>
