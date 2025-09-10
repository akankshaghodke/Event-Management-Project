<?php

    $database= new mysqli("localhost","root","","medart1");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>