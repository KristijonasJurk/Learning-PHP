<?php

$vardas = 'Kristijonas';
$pavarde = 'Jurksas';
$gimimoMetai = 1996;
$metai = 2020;
$amzius = $metai - $gimimoMetai;
echo "<h1>1UZDUOTIS</h1>";
echo "As esu $vardas $pavarde. Man yra $amzius metai <br>";

// $skaicius1 = rand(0, 4);
// $skaicius2 = rand(0, 4);
// if ($skaiciu1 = 0 || $skaiciu2 = 0) {
//     $rezultatas= 0;
// } if ($skaiciu2 = 0) {
//     $rezultatas = 0;
// } else if ($skaicius1 > $skaicius2) {
//     $rezultatas = $skaicius1 / $skaicius2;
// } else {
//     $rezultatas = $skaicius2 / $skaicius1;
// }
// echo "<h1>2UZDUOTIS</h1>";
// echo round($rezultatas, 2);
echo "<h1>3UZDUOTIS</h1>";
$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);
if ($pirmas > $antras && $pirmas < $trecias) {
    echo $antras;
}
if ($trecias > $antras && $pirmas < $pirmas) {
    echo $antras;
}
if ($antras > $trecias && $antras < $pirmas) {
    echo $antras;
}
if ($pirmas > $trecias && $antras < $antras) {
    echo $antras;
}
if ($pirmas > $pirmas && $trecias < $antras) {
    echo $antras;
}
if ($antras > $pirmas && $trecias < $pirmas) {
    echo $antras;
}
// echo "<h1>4UZDUOTIS</h1>";

// $a = rand(1,10);
// $b = rand(1,10);
// $c = rand(1,10);

// $sudetis1 = pow($a,2) + pow($b,2);
// if ($sudetis1 === pow($c,2)) {
//     echo 'galima';
// }
//     $sudetis2 = pow($c,2) + pow($b,2);
// if ($sudetis2 === pow($a,2)) {
//     echo 'galima';
// }
// $sudetis3 = pow($c,2) + pow($a,2);
// if ($sudetis2 === pow($b,2)) {
//     echo 'galima';
// } else {
//     echo 'negalima';
// }
echo "<h1>5UZDUOTIS</h1>";

$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);
$dvejetai = 0;
$vienetai = 0;
$nuliai = 0;

if ($a == $nuliai) {
    $nuliai++;
}
if ($b == $nuliai) {
    $nuliai++;
}
if ($c == $nuliai) {
    $nuliai++;
}
if ($d == $nuliai) {
    $nuliai++;
}
if ($a == $vienetai) {
    $vienetai++;
}
if ($b == $vienetai) {
    $vienetai++;
}
if ($c == $vienetai) {
    $vienetai++;
}
if ($d == $vienetai) {
    $vienetai++;
}
if ($a == $dvejetai) {
    $dvejetai++;
}
if ($b == $dvejetai) {
    $dvejetai++;
}
if ($c == $dvejetai) {
    $dvejetai++;
}
if ($d == $dvejetai) {
    $dvejetai++;
}
echo "nuliai $nuliai <br> dvejetai $dvejetai <br> vienetai $vienetai";

echo "<h1>6UZDUOTIS</h1>";

$j = rand(1, 6);

echo "<h$j>$j</h$j>";

echo "<h1>7UZDUOTIS</h1>";
$k = rand(-10, 10);
$l = rand(-10, 10);
$p = rand(-10, 10);

if ($k > 0) {
    echo "<div style='color:blue' >$k</div>";
}
if ($l > 0) {
    echo "<div style='color:blue' >$l</div>";
}
if ($p > 0) {
    echo "<div style='color:blue' >$p</div>";
}
if ($k < 0) {
    echo "<div style='color:green' >$k</div>";
}
if ($l < 0) {
    echo "<div style='color:green' >$l</div>";
}
if ($p < 0) {
    echo "<div style='color:green' >$p</div>";
}
if ($k === 0) {
    echo "<div style='color:red' >$k</div>";
}
if ($l === 0) {
    echo "<div style='color:red' >$l</div>";
}
if ($p === 0) {
    echo "<div style='color:red' >$p</div>";
}

echo "<h1>8UZDUOTIS</h1>";

$zvakiuKiekis = 2100;
$zvakiuKainaPradine = 1 * $zvakiuKiekis;

if ($zvakiuKiekis > 1000 && $zvakiuKiekis > 2000) {
    $zvakiuNuolaida = ($zvakiuKainaPradine * 3) / 100;
    $zvakiuKaina = $zvakiuKainaPradine - $zvakiuNuolaida;
    echo "zvakiu kiekis- $zvakiuKiekis <br> zvakiu kaina- $zvakiuKaina";
}
if ($zvakiuKiekis > 2000) {
    $zvakiuNuolaida = ($zvakiuKainaPradine * 3) / 100;
    $zvakiuKaina = $zvakiuKainaPradine - $zvakiuNuolaida;
    echo "zvakiu kiekis- $zvakiuKiekis <br> zvakiu kaina- $zvakiuKaina";
}
if ($zvakiuKiekis < 1000) {
    echo "zvakiu kiekis- $zvakiuKiekis <br> zvakiu kaina- $zvakiuKainaPradine";
}

echo "<h1>9UZDUOTIS</h1>";

$uno = rand(0, 100);
$dos = rand(0, 100);
$tres = rand(0, 100);
$index = 0;
$medium2 = 0;
$medium = ($uno + $dos + $tres) / 3;
if ($uno > 90 || $uno > 10) {
    $medium2 += $uno;
    $index++;
}
if ($dos > 90 || $dos > 10) {
    $medium2 += $dos;
    $index++;
}
if ($tres > 90 || $tres > 10) {
    $medium2 += $tres;
    $index++;
}
$mediumFinal = $medium2 / $index;
echo "$medium <br> $mediumFinal";

echo "<h1>10UZDUOTIS</h1>";

$seconds = rand(0, 59);
$minutes = rand(0, 59);
$hours = rand(0, 23);
echo "second -$seconds <br>minutes- $minutes <br>hours- $hours <br>";
$random = rand(0, 300);
$leftoverMin = 0;
$leftoverSec = 0;
if ($random > 60) {
    $leftoverSec = round($random % 60, 0);
    if ($random < 120) {
        $leftoverMin = 1;
    } elseif ($random < 180) {
        $leftoverMin = 2;
    } elseif ($random < 240) {
        $leftoverMin = 3;
    } else {
        $leftoverMin = 4;
    }
} else {
    $leftoverMin = 0;
    $leftoverSec = $random;
}
echo "random minutes- $leftoverMin<br>random seconds- $leftoverSec<br>";

$seconds += $leftoverSec;
$minutes += $leftoverMin;
if ($seconds > 60) {
    $seconds -= 60;
    $minutes++;
}
if ($minutes > 60) {
    $minutes -= 60;
    $hours++;
}
echo "final seconds-$seconds<br>final minutes- $minutes<br>final hours-$hours";

echo "<h1>11UZDUOTIS</h1>";

$eins = rand(1000, 9999);
$zwei = rand(1000, 9999);
$drei = rand(1000, 9999);
$vier = rand(1000, 9999);
$funf = rand(1000, 9999);
$sechs = rand(1000, 9999);
