<?php
    //připojení do databáze
    $connection = mysqli_connect("localhost", "root", "", "loginapplication");

    if ($connection) {
        echo "Jsme propojeni s databází";
    } else {
        die("Ou, něco se pokazilo");
    }
?>