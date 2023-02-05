<?php

    if (isset($_POST["submit"])){

        $minimum = 3;
        $maximum = 10;
        $username = $_POST["username"];
        $password = $_POST["password"];

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
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formular.php" method="post">

        <input type="text" name="username" placeholder="Uživatelské jméno"><br>
        <input type="password" name="password" placeholder="Heslo"><br>
        <input type="submit" name="submit" value="Odeslat">

    </form>
</body>
</html>