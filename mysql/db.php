<?php

    function Connection(){
        global $connection;
            //připojení do databáze
    $connection = mysqli_connect("localhost", "root", "", "loginapplication");

    if ($connection) {
        echo "Jsme propojeni s databází";
    } else {
        die("Ou, něco se pokazilo");
    }
    }
    function UpdateFunction(){
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];

        $query2 = "UPDATE users SET username = '$username', 
        password = '$password' WHERE id = '$id' ";

        $result2 = mysqli_query($connection, $query2);
        
        if(!$result2){
            die("Query selhalo".mysqli_connect_error());
        }
    }
    function DeleteFunction(){
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];

        $query2 = "DELETE FROM  users WHERE
         id = '$id'";

         $result2 = mysqli_query($connection, $query2);

         if(!$result2){
            die("Query selhalo".mysqli_connect_error());
         }
    }

?>