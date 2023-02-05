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
    <form action="formular.php" method="post">

        <input type="text" name="username" placeholder="Uživatelské jméno"><br>
        <input type="password" name="password" placeholder="Heslo"><br>
        <input type="submit" name="submit" value="Odeslat">

    </form>

    <?php       
//dat typy
////        $jmeno = "Dominik";
////        $rokNarozeni = 2006;
////        
////        $rok_Narozeni = 2007;
////        $ROKNAROZENI = 2008;
////    
////        $job = "hacker";    //string
////        $mzda = 100000;     //number
////        $vyska = 185.5;     //float
////    
////        //concatenation - spojení
////        echo $jmeno." ".$rokNarozeni;
////            
////        //ukládání html tagů
////        $nadpis = "<h1>Nadpis</h1>";
////        echo $nadpis;
//        
////        echo 20 + 15;
////        echo "<br>";
////        echo 20 - 15;
////        echo "<br>";
////        echo 20 * 10;
////        echo "<br>";
////        echo 10 / 3;
////        echo "<br>";
////        
////        echo 3 + 5 * 10;
////        echo "<br>";
////        echo (3 + 5) * 10;
////        echo "<br>";
////        
////        $cislo1 = 10;
////        $cislo2 = 16;
////        echo $cislo1 * $cislo2;
//    
//        //pole
//        $zamestnanci = ["David", "Anna", "Marek", "Jana"];
//        //$zamestnanci = array("David", "Anna", "Marek", "Jana"); dřívější zápis
//        $mzdy = [20000, 30000, 15000, 30000];
//        $mix = [20, "Daniel", "<h1>Nadpis</h1>"];
//    
//    
//        //1.způsob vypsání
//        echo $zamestnanci[0];
//        echo "<br>";
//        echo $zamestnanci[1];
//        echo "<br>";
//        echo $zamestnanci[2];
//        echo "<br>";
//        echo $zamestnanci[3];
//        echo "<br>";
//    
//        //2.způsob vypsání
//        print_r($zamestnanci);
    
//procvičování
//        $number1 = 5;
//        $number2 = 10;
//        echo $number1 * $number2;
//        $poleBezne = [1, 3, 4, 5];
//        $poleAsoc = ["prvni" => "Ahoj", "druhy" => "Babi", "treti" => "a", "ctvrty" => "Dedo"];
//        
//        echo "mezera";
//        echo $poleBezne[0];
//        echo $poleAsoc["druhy"];
    
//podmínky  
//    if (-5 <= 0){
//        echo "Ano je to pravda ";
//    } else {
//        echo "Není to pravda";   
//    }
//    echo "<br>";
//    $heslo = "123"; //zadal uživatel
//    
//    if ($heslo == "123a"){
//        echo "Vítej, úspěšně jste se přihlásili";
//    } else {
//        echo "Zadali jste špatný heslo";
//    }
    
//    //programátor, designer, hacker
//    $pozice = "sekretarka";
//    
//    if ($pozice == "programator"){
//        echo "Jaké znáš programovací jazyky";
//    } elseif ($pozice == "designer") {
//        echo "Jaké znáš nástroje pro práci s designem";
//    } elseif ($pozice == "hacker") {
//        echo "Jaké znáš typy útoků";
//    } else {
//        echo "Chyba, tuto pozici neznám";
//    }
//    
//  
//    if (5 !== "5"){
//        echo "Je to pravda";
//    }
//logické operátory + procvičování
//    $age = 17;
//    
//    if ($age > 18 && $age < 30){
//        echo "Je to true";
//    } else {
//        echo "Je to false";
//    }
//    
//    echo "<br>";
//    
//    $name = "Dom";
//    
//    if ($name === "Dom" || $age > 18){
//        echo "Je to pravda";
//    } else {
//        echo "Je to nepravda";
//    }
    
    
//    //switch
//    $job = "ucetni";
//    
//    switch($job){
//        case "hacker":
//            echo "Jaké znáte typy útoků";
//            break;
//        case "programator":
//            echo "Jaké znáte programovací jazyky";
//            break;
//        case "sekretarka":
//            echo "Jaké funkce znáte v excelu";
//            break;
//        default:
//            echo "Pro tuto pozic nemáme žádnou otázku";
//            break;
//    }
//    
//    echo "<br>";
//    echo "Pokračuji za switchem";
    
//    cyklus while
//    
//    $pocitadlo = 0;
//    
//    while ($pocitadlo < 10){
//        echo "Ahoj";
//        echo "<br>";
//        $pocitadlo++;
//    }
    
//    //cyklus for
//    for ($i = 0; $i <= 10; $i++){
//        echo $i;
//        echo "<br>";
//    }
//    
//    echo "<br>";
//    echo "<br>";
//    
//    for ($j = 10; $j >= 0; $j--){
//        echo $j;
//        echo "<br>";
//    }
    
//    //cyklus foreach
//    $jmena = ["David", "Jane", "Markus", "Anna"];
//    
//    foreach ($jmena as $zamestnanec){
//        echo $zamestnanec;
//        echo "<br>";
//    }
//    //procvičování-cyklu, podmínky, switche
//    $mujJazyk = "Python";
//    if ($mujJazyk === "PHP"){
//        echo "Učím se php";
//    } elseif ($mujJazyk === "JS"){
//        echo "Učím se " . $mujJazyk;
//    } else {
//        echo "Učim se jazyk, ale nevím, jak se jmenuje";
//    }
//    
//    echo "<br>";
//    
//    for ($i = 0; $i <= 10; $i++){
//        echo $i;
//        echo "<br>";
//    }
//    
//    $jazyk = "HTML";
//    switch ($jazyk){
//        case "PHP":
//            echo "Mám rád PHP";
//            break;
//        case "JS":
//            echo "Mám rád " . $jazyk;
//            break;
//        case "HTML":
//            echo "Mám rád " . $jazyk;
//            break;
//        default:
//            echo "Chyba";
//            break;
//    }
    
    //funkce
    
    /*function pozdrav(){
        echo "Ahoj hráči";
        echo "<br>";
    };
    
    function skore(){
        echo "Tvoje skóre je: " . (20 + 30);
    }
    
    function init(){
        pozdrav();
        skore();
    }
    
    init();*/

    //funkce s parametrem
    /*function pozdrav($jmeno){
        echo "Ahoj ".$jmeno;
        echo "<br>";
    }

    pozdrav("David");
    pozdrav("Petr");
    pozdrav("Robert");
    pozdrav("Pavel");
    pozdrav("Lukáš");
    function calculator($n1, $n2){
        $vysledek = $n1 * $n2;
        echo $vysledek;
        echo "<br>";
    }

    calculator(10, 30);
    calculator(100, 40);
    calculator(510, 80);*/

    //funkce a return
    /*function pozdrav(){
        echo "Ahoj, já jsem David";
    }

    pozdrav();
    echo "<br>";

    function vek($rokNarozeni){
        return 2023 - $rokNarozeni;
    }

    $vysledek = vek(2000);

    if ($vysledek >= 18) {
        echo "Je dospělý/á";
    } else {
        echo "Není dospělý/á";
    }*/

    //global scope a local scope
    /*$x = "venku"; //global scope - globální prostředí

    function zmenaX(){
        global $x;
        $x = "uvnitř";  //local scope - lokální prostředí
    }

    echo $x;
    echo "<br>";

    zmenaX();
    echo $x;*/

    //Konstanty
    /*$vek = 30;
    $vek = 20;

    echo $vek;
    echo "<br>";

    define("rokNarozeni", 1986);    //první způsob zapsání
    echo rokNarozeni;

    echo "<br>";

    const mojeKonstanta = "David";  //druhý způsob zapsání
    echo mojeKonstanta;*/

    //procvičování
    /*function rozdil(){
        return 5 - 3;
    }

    $vysledek1 = rozdil();
    echo $vysledek1;
    echo "<br>";
    $vysledek2 = rozdil();
    echo $vysledek2;
    echo "<br>";
    $vysledek3 = rozdil();
    echo $vysledek3;
    echo "<br>";

    function soucet($num1, $num2){
        echo $num1 + $num2;
        echo "<br>";
    }

    soucet(5, 8);
    soucet(10, 15);
    soucet(100, 200);*/

    //matematické funkce
    /*echo pow(2, 4); //2 na 4
    echo "<br>";

    echo rand(); //náhodné číslo
    echo "<br>";

    echo rand(90, 100); //náhodné od 90 do 100
    echo "<br>";

    echo sqrt(25); //druhá odmocnina
    echo "<br>";

    echo ceil(4.1); //zaokrouhlení nahoru
    echo "<br>";

    echo floor(3.8);   //zaokrouhlení dolů
    echo "<br>";

    echo round(2.4);    //zaokrouhlení běžné*/

    //string funkce
    /*$string = "Ahoj";

    echo strlen($string);
    echo "<br>";

    echo strtoupper($string);
    echo "<br>";

    echo strtolower($string);
    echo "<br>";*/

    //pole funkce
    /*$seznam = [200, 100, 900, 632, 111, 52];

    echo max($seznam);
    echo "<br>";

    echo min($seznam);
    echo "<br>";

    sort ($seznam);
    print_r ($seznam);*/

    //procvičování
    /*echo pow(2, 4);
    echo "<br>";
    echo sqrt(169);
    echo "<br>";

    echo strtolower("AHOJ");
    echo "<br>";
    echo strtoupper("ahoj");
    echo "<br>";

    $pole = [5, 6, 8, 10, 15, 6];
    echo sort($pole);
    echo "<br>";

    print_r($pole);
    echo "<br>";
    
    for ($i = 0; $i < 6; $i++){
        echo $pole[$i];
        echo "<br>";
    }*/

    //formulář v externím souboru v html
    




    
    ?>


    <script src=""></script>
</body>

</html>