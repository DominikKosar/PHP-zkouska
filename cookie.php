<?php

    $name = "MojeCookies";
    $value = 183;
    $expiration = time() + (60*60*24*7);   //týden

    setcookie($name, $value, $expiration);


    //echo time();    //od roku 1970

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
    <h1>Ucim se cookies</h1>

    <?php

    if(isset($_COOKIE["MojeCookies"])){
        $visitor = $_COOKIE["MojeCookies"];
        echo $_COOKIE["MojeCookies"];
    } else{
        $visitor = "";
    }


    ?>
</body>
</html>