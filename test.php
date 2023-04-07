<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- SQL injection -->
    <?php
    /*
    echo 'O\'Reilly';
    echo "<a href=\"#odkaz\">Text odkazu</a>";*/

    //Hashování hesel
    //https://www.php.net/manual/en/function.crypt.php --> odkaz na hashování hesel
    $password = "123456";

    $hashFormat = "$2y$10$";     //použij bloufish a projeď ho 10krát
    //$salt = "blaznivafunkcenahesla9";       //22 znaků musí být
    $salt = "u9YPT1kh13fEPGlMmkWrID";
    $hashFormat_salt = $hashFormat.$salt;   //spojení mezi $hashFormat a $salt

    $password = crypt($password, $hashFormat_salt);
    echo $password;

    ?>
    
</body>
</html>