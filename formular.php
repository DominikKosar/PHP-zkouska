<?php

    if (isset($_GET["submit"])){

        $name = ["David", "Marek", "Daniel", "Tereza"];
        $minimum = 3;
        $maximum = 10;
        $username = $_GET["username"];
        $password = $_GET["password"];

        echo "Ahoj " . $username;
        echo "<br>";
        echo "Tvé heslo je: " . $password;
        echo "<br>";

        if(strlen($username) <= $minimum){
            echo "Uživatelské jméno musí být delší než 3 znaky";
        }

        if(strlen($username) >= $maximum){
            echo "Uživatelské jméno musí být kratší než 10 znaků";
        }

    if (in_array($username, $name)) {
        echo "Jsi úspěšně přihlášený.";
    } else {
        echo "Omlouváme se, ale zadané údaje jsou špatně. Nemůžeme vás přihlásit.";
    }
    }

?>

