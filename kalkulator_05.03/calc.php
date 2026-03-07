<?php
    //1. pobrac parametry
    $a = $_REQUEST["x"] ?? "";
    $b = $_REQUEST["y"] ?? "";

    //2. walidacja
    $error = "";
    if(!is_numeric($a) || !is_numeric($b)){
        $error = "prosze podac poprawne liczby";
    }

    //3. zadanie
    if($error == ""){
        $a = intval($a);
        $b = intval($b);

        $wynik = $a + $b;
    }


    include "calc_view.php";
    //echo "suma = ".$suma."<br>"; // nie moze byc zadnego echo
    //var_dump($_GET);
    //var_dump($_POST);
    //var_dump($_REQUEST);

    //zrobic gita i mu na teams wysalc 
    // zrobic kalkulator kredytowy, podac 3 dane kwota kredytu, okres i oprocentowanie k 100k o 2% l 2 2*2%*100k = 4k k = 100k+4k rata = 104k/24m
?>