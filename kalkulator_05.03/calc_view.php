<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
</head>
<body>
    <h2>Kalkulator</h2>
    <form action="calc.php" method="post">
        x <input type="text" name="x" value="
            <?php 
                echo $a ?? '';
            ?>"><br>
        y <input type="text" name="y" value="
            <?php 
                echo $b ?? '';
            ?>"><br>
        <input type="submit">
    </form>
    <h1>
        <?php
            if(isset($wynik)){
                echo "wynik: ".$wynik;
            }
        ?>
    </h1>
    <h2>
        <?php
            if(isset($error) && $error != ""){
                echo "blad: ".$error;
            }
        ?>
    </h2>
</body>
</html>