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

    function Addfunction(){
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);


        $query = "INSERT INTO 
        users(username,password) 
        VALUE('$username','
        $password')";

        $result = mysqli_query(
            $connection,$query);

        if(!$result){
            die("Nepodařilo se data
            zapsta do databáze");
        }

    }

    function Selectfunction(){
        global $connection;
        global $result;
        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die("Nepodařilo se 
            vybrat data z 
            databáze");
        }

    }

    function UpdateFunction(){
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        $id = mysqli_real_escape_string($connection, $id);

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

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        $id = mysqli_real_escape_string($connection, $id);

        $query2 = "DELETE FROM  users WHERE
         id = '$id'";

         $result2 = mysqli_query($connection, $query2);

         if(!$result2){
            die("Query selhalo".mysqli_connect_error());
         }
    }

?>