<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function showForm()
    {
        return view('kalkulator');
    }

    public function calculate(Request $request)
    {
        // pobranie danych
        $kwota = $request->input('kwota');
        $oprocentowanie = $request->input('oprocentowanie');
        $lata = $request->input('lata');
        
        $messages = [];
        $infos = [];
        $wynik = null;
        
        // sprawdzenie czy parametry zostaly przekazane
        if ($request->isMethod('post')) {
            
            // walidacja wszystkich pol na raz
            if ($kwota == "") {
                $messages[] = 'Kwota kredytu jest wymagana!';
            }
            
            if ($oprocentowanie == "") {
                $messages[] = 'Oprocentowanie jest wymagane!';
            }
            
            if ($lata == "") {
                $messages[] = 'Okres kredytu (lata) jest wymagany!';
            }
            
            // sprawdzenie czy sa liczbami
            if ($kwota != "" && !is_numeric($kwota)) {
                $messages[] = 'Kwota kredytu musi byc liczba!';
            }
            
            if ($oprocentowanie != "" && !is_numeric($oprocentowanie)) {
                $messages[] = 'Oprocentowanie musi byc liczba!';
            }
            
            if ($lata != "" && !is_numeric($lata)) {
                $messages[] = 'Okres kredytu (lata) musi byc liczba!';
            }
            
            // sprawdzenie czy wartosci sa wieksze od zera
            if (is_numeric($kwota) && floatval($kwota) <= 0) {
                $messages[] = 'Kwota kredytu musi byc wieksza od zera!';
            }
            
            if (is_numeric($oprocentowanie) && floatval($oprocentowanie) <= 0) {
                $messages[] = 'Oprocentowanie musi byc wieksze od zera!';
            }
            
            if (is_numeric($lata) && intval($lata) <= 0) {
                $messages[] = 'Okres kredytu (lata) musi byc wiekszy od zera!';
            }
            
            // sprawdzenie czy lata sa liczba calkowita
            if (is_numeric($lata) && $lata != "" && intval($lata) != floatval($lata)) {
                $messages[] = 'Okres kredytu (lata) musi byc liczba calkowita!';
            }
            
            // jesli nie ma bledow, wykonaj obliczenia
            if (count($messages) == 0) {
                $infos[] = 'Przekazano parametry. Wykonuje obliczenia.';
                
                $kwota_val = floatval($kwota);
                $oprocentowanie_val = floatval($oprocentowanie) / 100;
                $lata_val = intval($lata);
                
                // obliczenia (oprocentowanie proste)
                $odsetki = $lata_val * $oprocentowanie_val * $kwota_val;
                $calosc = $kwota_val + $odsetki;
                $miesiecy = $lata_val * 12;
                $rata = $calosc / $miesiecy;
                
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
        
        return view('kalkulator', [
            'kwota' => $kwota,
            'oprocentowanie' => $oprocentowanie,
            'lata' => $lata,
            'messages' => $messages,
            'infos' => $infos,
            'wynik' => $wynik
        ]);
    }
}