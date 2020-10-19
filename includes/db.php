<?php

    $server = "sql207.epizy.com";
    $username = "epiz_26767494	";
    $password = "vnWIdJc13Q5czgv";
    $dbname = "epiz_26767494_ginnyscorner";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn) {
        die("Connection Failed:".mysqli_connect_erro());
    }

?>
