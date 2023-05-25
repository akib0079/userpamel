<?php  
    //  Database connection code
    $dbName = "userportal";
    $dbUser = "root";
    $dbPass = "";
    $dbHost = "localhost";

    $db = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if($db){
        // echo"Database Connected";
    } 
    else{
        die("Connection Failed");
    }

?>