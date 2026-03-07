<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Powtorki</title>
</head>
<body>
    <h1>Cos tam cos tam</h1>
    <h2>
        <ul type="disc">
            <li>jeden</li>
            <li>dwa</li>
        </ul>
    </h2>
    <form action="index.php" method=post>
        podaj 1 liczbe: <input type="text" name="jeden" id="jeden"><br>
        podaj 2 liczbe: <input type="text" name="dwa" id="dwa"><br>
        <input type="submit" value="suma">
    </form>
    <?php
        if(isset($_POST['jeden']) && isset($_POST['dwa']))
        {
            $a = (float)$_POST['jeden'];
            $b = (float)$_POST['dwa'];
            $suma = $a + $b;
            echo "Suma liczb: $suma<br>";
        }
        $zmienna = 100;
        $a = $_REQUEST["x"] ?? "";
        $b = $_REQUEST["y"] ?? "";
        $a = intval($a);
        $b = intval($b);
        $suma = $a + $b;
        echo "suma = ".$suma;
        echo "<br>";
        echo "informuje ze \$zmienna = $zmienna";
        echo "<br>";
        //var_dump($_GET);
        //var_dump($_POST);
        //var_dump($_REQUEST);
    ?>
</body>
</html>