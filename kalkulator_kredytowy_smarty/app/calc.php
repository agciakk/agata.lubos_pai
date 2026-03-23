<?php
// KONTROLER strony kalkulatora kredytowego
require_once dirname(__FILE__).'/../config.php';
// zaladuj Smarty
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';

// pobranie parametrow
function getParams(&$form){
    $form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $form['oprocentowanie'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
    $form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;    
}

// walidacja parametrow
function validate(&$form, &$infos, &$msgs){

    // czy parametry zostaly przekazane
    if ( ! (isset($form['kwota']) && isset($form['oprocentowanie']) && isset($form['lata']) )) {
        return false;
    }
    
    // 1. czy pola nie sa puste
    if ($form['kwota'] == "") {
        $msgs [] = 'Kwota kredytu jest wymagana!';
    }
    
    if ($form['oprocentowanie'] == "") {
        $msgs [] = 'Oprocentowanie jest wymagane!';
    }
    
    if ($form['lata'] == "") {
        $msgs [] = 'Okres kredytu (lata) jest wymagany!';
    }
    
    // 2. czy sa liczbami (tylko dla pol ktore nie sa puste)
    if ($form['kwota'] != "" && !is_numeric($form['kwota'])) {
        $msgs [] = 'Kwota kredytu musi być liczbą!';
    }
    
    if ($form['oprocentowanie'] != "" && !is_numeric($form['oprocentowanie'])) {
        $msgs [] = 'Oprocentowanie musi być liczbą!';
    }
    
    if ($form['lata'] != "" && !is_numeric($form['lata'])) {
        $msgs [] = 'Okres kredytu (lata) musi być liczbą!';
    }
    
    // 3. czy wartosci sa wieksze od zera (tylko dla pol ktore sa liczbami)
    if (is_numeric($form['kwota']) && floatval($form['kwota']) <= 0) {
        $msgs [] = 'Kwota kredytu musi być większa od zera!';
    }
    
    if (is_numeric($form['oprocentowanie']) && floatval($form['oprocentowanie']) <= 0) {
        $msgs [] = 'Oprocentowanie musi być większe od zera!';
    }
    
    if (is_numeric($form['lata']) && intval($form['lata']) <= 0) {
        $msgs [] = 'Okres kredytu (lata) musi być większy od zera!';
    }
    
    // jesli sa jakies bledy, zwroc false
    if (count($msgs) > 0) {
        return false;
    }
    
    // jesli nie ma bledow, dodaj informacje o przekazaniu parametrow
    $infos [] = 'Przekazano parametry. Wykonuję obliczenia.';
    
    return true;
}
    
// obliczenia
function process(&$form, &$infos, &$msgs, &$wynik){
    
    // konwersja parametrow
    $kwota_val = floatval($form['kwota']);
    $oprocentowanie_val = floatval($form['oprocentowanie']) / 100;
    $lata_val = intval($form['lata']);
    
    // obliczenia
    $odsetki = $lata_val * $oprocentowanie_val * $kwota_val;
    $calosc = $kwota_val + $odsetki;
    $miesiecy = $lata_val * 12;
    $rata = $calosc / $miesiecy;
    
    $wynik = [
        "kwota" => number_format($kwota_val, 2, ',', ' '),
        "oprocentowanie" => $form['oprocentowanie'],
        "lata" => $lata_val,
        "odsetki" => number_format($odsetki, 2, ',', ' '),
        "calosc" => number_format($calosc, 2, ',', ' '),
        "rata" => number_format($rata, 2, ',', ' ')
    ];
}

// inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$wynik = null;
    
getParams($form);
if ( validate($form, $infos, $messages) ){
    process($form, $infos, $messages, $wynik);
}

// 4. przygotowanie danych dla szablonu

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty\Smarty();
$smarty->setTemplateDir([
    _ROOT_PATH.'/templates',
    _ROOT_PATH.'/app'
]);
$smarty->setCompileDir(_ROOT_PATH.'/templates_c');

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
//$smarty->assign('page_title','Kalkulator kredytowy');
//$smarty->assign('page_description','Oblicz raty swojego kredytu szybko i wygodnie');
//$smarty->assign('page_header','Kalkulator kredytowy');

$smarty->assign('form',$form);
$smarty->assign('wynik',$wynik);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. wywolanie szablonu
$smarty->display('calc.html');