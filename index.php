<!DOCTYPE html>
<html lang="">
<?php include "head.php"; ?>

<body>
    
    <header>
        <h1>Úvodní strana</h1>
    </header>
    <main>
        <h2>Nadpis</h2>
        <p>
            Text. Text.Text. 
            Text.Text. Text.
            Text. Text.
        </p>
    </main>
    <?php
    
        include_once "footer.php";
        include "footer.php";
        include "footer.php";
        include "footer.php";
        include "footer.php";
    
    ?>
    
    <?php 
    
//        $jmeno = "Dominik";
//        $rokNarozeni = 2006;
//        
//        $rok_Narozeni = 2007;
//        $ROKNAROZENI = 2008;
//    
//        $job = "hacker";    //string
//        $mzda = 100000;     //number
//        $vyska = 185.5;     //float
//    
//        //concatenation - spojení
//        echo $jmeno." ".$rokNarozeni;
//            
//        //ukládání html tagů
//        $nadpis = "<h1>Nadpis</h1>";
//        echo $nadpis;
        
//        echo 20 + 15;
//        echo "<br>";
//        echo 20 - 15;
//        echo "<br>";
//        echo 20 * 10;
//        echo "<br>";
//        echo 10 / 3;
//        echo "<br>";
//        
//        echo 3 + 5 * 10;
//        echo "<br>";
//        echo (3 + 5) * 10;
//        echo "<br>";
//        
//        $cislo1 = 10;
//        $cislo2 = 16;
//        echo $cislo1 * $cislo2;
    
        //pole
        $zamestnanci = ["David", "Anna", "Marek", "Jana"];
        //$zamestnanci = array("David", "Anna", "Marek", "Jana"); dřívější zápis
        $mzdy = [20000, 30000, 15000, 30000];
        $mix = [20, "Daniel", "<h1>Nadpis</h1>"];
    
    
        //1.způsob vypsání
        echo $zamestnanci[0];
        echo "<br>";
        echo $zamestnanci[1];
        echo "<br>";
        echo $zamestnanci[2];
        echo "<br>";
        echo $zamestnanci[3];
        echo "<br>";
    
        //2.způsob vypsání
        print_r($zamestnanci);
        
    
    ?>


  <script src=""></script>
</body>
</html>
