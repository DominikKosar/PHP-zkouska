<?php
    // načtení funkcí a napojení na databázi
    include("mysql/db.php");
    Connection();

    //výběr všech dat z databáze
    Selectfunction();

    
    /*kontrola zda byl formulář 
    odeslán a pokud ano, tak 
    podle údajů z formuláře 
    vymazat příslušné id*/
    
    if(isset($_POST["submit"])){
        DeleteFunction();
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
    <form action="delete.php" method="post">
        <input type="text" name="username" placeholder="Uživatelské jméno">
        <br>
        <input type="password" name="password" placeholder="heslo">
        <br>
        <select name="id" id="">
            <?php
            while($row = mysqli_fetch_assoc($result)){
                $id = $row["id"];
                echo "<option value='$id'>$id</option>";
            }
            ?>

        </select>

        <input type="submit" name="submit" value="Odeslat">    
    </form>
</body>
</html>