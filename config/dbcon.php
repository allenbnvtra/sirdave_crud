<?php 
    define("DB_name", "localhost");
    define("DB_username", "root");
    define("DB_password", "");
    define("DB_database", "bsit2dolclass");

    $conn = mysqli_connect(DB_name, DB_username, DB_password, DB_database);

    if(!$conn){
        die("Connection Error" . mysqli_error());
        exit(0);
    }
?>