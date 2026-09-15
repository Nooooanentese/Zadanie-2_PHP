<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>

    <?php
    $a = 1;
    $b = 2;
    if($x = $a / $b) {
    echo "Wynik z dzielenia a przez b wynosi: " . $x;
    }
    else {
        echo "Nie można obliczyć wyniku.";
    }

    echo "<br>";

    $c = 3;
    $d = 4;

    if($x = ($a / $b) + ($c / $d)) {
        echo "Wynik po dodaniu ilorazów a przez b i c przez d wynosi: " . $x;
        }
        else {
            echo "Nie można obliczyć wyniku.";
        }

    echo "<br>";

    if($x = ($a + 6) / ($b - 4)) {
         echo "Wynik z a + 6 przez b - 4 wynosi: " . $x;
        }
         else {
         echo "Nie można obliczyć wyniku.";
        }

    echo "<br>";

    if($a%2==0) {
        echo "Zmienna a jest parzysta.";
        }
        else {
            echo "Zmienna a jest nieparzysta.";
        }

    echo "<br>";

    if($b%$c==0) {
        echo "Zmienna b jest podzielna przez zmienna c.";
        }
        else {
            echo "Zmienna b nie jest podzielna przez zmienna c.";
        }

    echo "<br>";

    if($a > 0) {
        echo "Zmienna a jest dodatnia.";
        }
        elseif($a == 0) {
            echo "Zmienna a jest rowna 0.";
        }
        else {
            echo "Zmienna a jest ujemna.";
        }

    echo "<br>";

    if($a > $b && $a > $c) {
        echo "Zmienna a jest najwieksza.";
        }
        elseif ($b > $a && $b > $c) {
            echo "Zmienna b jest najwieksza.";
        }
        else {
            echo "Zmienna c jest najwieksza.";
        }

    echo "<br>";

    if($a > $b && $a > $c && $b > $c) {
        echo "Zmienne w kolejnosci rosnacej: " . $c . $b . $a;
        }
        elseif ($b > $a && $b > $c && $a > $c) {
            echo "Zmienne w kolejnosci rosnacej: " . $c . $a . $b;
        }
        elseif ($c > $a && $c > $b && $b > $a) {
            echo "Zmienne w kolejnosci rosnacej: " . $a . $b . $c;
        }
        elseif ($c > $a && $c > $b && $a > $b) {
            echo "Zmienne w kolejnosci rosnacej: " . $b . $a . $c;
        }

    ?>
</body>
</html>