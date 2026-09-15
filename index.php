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

    echo "<br>";

    $dzien = 15;
    $miesiac = 9;
    $rok = 2008;

    $dzisiaj_dzien = 15;
    $dzisiaj_miesiac = 9;
    $dzisiaj_rok = 2026;

    if($dzisiaj_rok - $rok > 18) {
        echo "Osoba jest pelnoletnia.";
    }
    elseif($dzisiaj_rok - $rok < 18) {
        echo "Osoba nie jest pelnoletnia.";
    }
    elseif($dzisiaj_rok - $rok == 18 && $dzisiaj_miesiac > $miesiac) {
        echo "Osoba jest pelnoletnia.";
    }
    elseif($dzisiaj_rok - $rok == 18 && $dzisiaj_miesiac == $miesiac && $dzisiaj_dzien >= $dzien) {
        echo "Osoba jest pelnoletnia.";
    }
    else {
        echo "Osoba nie jest pelnoletnia.";
    }

    echo "<br>";

    $znak = "A";

    if($znak >= "A" && $znak <= "Z") {
        echo "Znak jest duza litera.";
    }
    elseif($znak >= "a" && $znak <= "z") {
        echo "Znak jest mala litera.";
    }
    elseif($znak >= "0" && $znak <= "9") {
        echo "Znak jest cyfra.";
    }
    else {
        echo "Znak jest innym znakiem.";
    }

    echo "<br>";

    $liczba = 121;

    $setki = floor($liczba / 100);
    $jednosci = $liczba % 10;

    if($setki == $jednosci) {
        echo "Liczba " . $liczba . " jest palindromem.";
    }
    else {
        echo "Liczba " . $liczba . " nie jest palindromem.";
    }

    echo "<br>";

    $liczba = 22;

    if($liczba >= 0 && $liczba <= 99) {

        if($liczba < 10) {
            $cyfra1 = $liczba;
            $cyfra2 = 0;
        }
        else {
            $cyfra1 = floor($liczba / 10);
            $cyfra2 = $liczba % 10;
        }

        if($cyfra1 % 2 == 0 && $cyfra2 % 2 == 0) {
            echo "Poszczegolne cyfry liczby " . $liczba . " sa parzyste.";
        }
        elseif($cyfra1 + $cyfra2 == 4) {
            echo "Suma cyfr liczby " . $liczba . " jest rowna 4.";
        }
        else {
            echo "Cyfry liczby " . $liczba . " nie sa parzyste i ich suma nie jest rowna 4.";
        }

    }
    else {
        echo "Podana liczba nie jest maksymalnie dwucyfrowa.";
    }

    ?>

</body>
</html>
