<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Kalkulator kredytowy</title>
</head>
<body>
    <div id="tlo">
    <h1>Kalkulator kredytowy</h1>
<form action="calc.php" method="post">
        Kwota kredytu: <br>
        <input type="text" name="kwota" value="<?php echo $kwota ?? ''; ?>"><br>
        Oprocentowanie (% rocznie): <br>
        <input type="text" name="oprocentowanie" value="<?php echo $oprocentowanie ?? ''; ?>"><br>
        Okres (lata): <br>
        <input type="text" name="lata" value="<?php echo $lata ?? ''; ?>"><br>

        <input type="submit" value="Oblicz">
    </form>

    <h3>
        <?php
        if(isset($wynik)){
            echo "Odsetki: ".$wynik['odsetki']." zł<br>";
            echo "Kwota do spłaty: ".$wynik['calosc']." zł<br>";
            echo "Rata miesięczna: ".$wynik['rata']." zł<br>";
        }
        ?>
    </h3>

    <h3 style="color:blue">
        <?php
        if(isset($error) && $error != ""){
            echo "Błąd: ".$error;
        }
        ?>
    </h3>
    </div>
</body>
</html>