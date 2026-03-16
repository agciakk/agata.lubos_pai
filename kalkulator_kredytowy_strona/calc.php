<?php
// 1. pobranie danych
$kwota = $_POST["kwota"] ?? "";
$oprocentowanie = $_POST["oprocentowanie"] ?? "";
$lata = $_POST["lata"] ?? "";

// 2. walidacja danych
$errors = [];
$wynik = null;

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // puste pola
    if(empty($kwota)) {
        $errors['kwota'] = "Pole 'Kwota kredytu' jest wymagane!";
    }
    if(empty($oprocentowanie)) {
        $errors['oprocentowanie'] = "Pole 'Oprocentowanie' jest wymagane!";
    }
    if(empty($lata)) {
        $errors['lata'] = "Pole 'Okres (lata)' jest wymagany!";
    }

    // czy sa liczbami
    if(!empty($kwota) && !is_numeric($kwota)) {
        $errors['kwota'] = "Pole 'Kwota kredytu' musi być liczbą!";
    }
    if(!empty($oprocentowanie) && !is_numeric($oprocentowanie)) {
        $errors['oprocentowanie'] = "Pole 'Oprocentowanie' musi być liczbą!";
    }
    if(!empty($lata) && !is_numeric($lata)) {
        $errors['lata'] = "Pole 'Okres (lata)' musi być liczbą!";
    }

    // > 0
    if(is_numeric($kwota) && floatval($kwota) <= 0) {
        $errors['kwota'] = "Pole 'Kwota kredytu' musi być większe od zera!";
    }
    if(is_numeric($oprocentowanie) && floatval($oprocentowanie) <= 0) {
        $errors['oprocentowanie'] = "Pole 'Oprocentowanie' musi być większe od zera!";
    }
    if(is_numeric($lata) && intval($lata) <= 0) {
        $errors['lata'] = "Pole 'Okres (lata)' musi być większy od zera!";
    }

    // obliczenia jesli nie ma bledow
    if(empty($errors)) {
        $kwota_val = floatval($kwota);
        $oprocentowanie_val = floatval($oprocentowanie) / 100;
        $lata_val = intval($lata);

        // obliczenia
        $odsetki = $lata_val * $oprocentowanie_val * $kwota_val;
        $calosc = $kwota_val + $odsetki;
        $miesiecy = $lata_val * 12;
        $rata = $calosc / $miesiecy;

        // wyniki
        $wynik = [
            "kwota" => number_format($kwota_val, 2, ',', ' '),
            "oprocentowanie" => $oprocentowanie,
            "lata" => $lata_val,
            "odsetki" => number_format($odsetki, 2, ',', ' '),
            "calosc" => number_format($calosc, 2, ',', ' '),
            "rata" => number_format($rata, 2, ',', ' ')
        ];
    }
}

include "calc_view.php";