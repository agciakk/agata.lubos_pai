<?php
// 1. pobranie danych
$kwota = $_REQUEST["kwota"] ?? "";
$oprocentowanie = $_REQUEST["oprocentowanie"] ?? "";
$lata = $_REQUEST["lata"] ?? "";

// 2. walidacja
$error = "";
if(!is_numeric($kwota) || !is_numeric($oprocentowanie) || !is_numeric($lata)){
    $error = "Proszę podać poprawne liczby";
}

// 3. obliczenia
if($error == ""){
    $kwota = floatval($kwota);
    $oprocentowanie = floatval($oprocentowanie) / 100;
    $lata = intval($lata);

    $odsetki = $lata * $oprocentowanie * $kwota;
    $calosc = $kwota + $odsetki;
    $miesiecy = $lata * 12;
    $rata = $calosc / $miesiecy;

    $wynik = [
        "odsetki" => number_format($odsetki,2),
        "calosc" => number_format($calosc,2),
        "rata" => number_format($rata,2)
    ];
}

// 4. załadowanie widoku
include "calc_view.php";