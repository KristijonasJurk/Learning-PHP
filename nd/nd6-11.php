<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./nd6-11.css" rel="Stylesheet" />
</head>

<?php

// Sugeneruokite masyvą, kurio ilgis atsitiktinai kinta
// nuo 10 iki 100. Masyvo reikšmes sudaro atsitiktiniai skaičiai
// 0-100 ir masyvai Santykis skaičiuojamas atsitiktinai, bet taip,
// kad skaičiai sudarytų didesnę dalį nei masyvai. Reikšmių masyvų
// gylis nuo 1 iki 5, o reikšmės analogiškos
// (nuo 50% iki 100% atsitiktiniai skaičiai 0-100, o likusios masyvai)
// ir t.t. kol visos galutinės reikšmės bus skaičiai ne masyvai.
// Suskaičiuoti kiek elementų turi masyvas.
// Suskaičiuoti masyvo elementų (tie kurie ne masyvai) sumą.
// Suskaičiuoti maksimalų masyvo gylį. Atvaizduokite masyvą grafiškai.
// Masyvą pavazduokite kaip div elementą, kuris yra display:flex, 
//kurio viduje yra skaičiai. Kiekvienas div elementas turi savo
// unikalų id ir unikalią background spalvą (spalva pvz nepavaizduota).
// pvz: <div id=”M1”>10, 46, 67, <div id=”M2”> 89, 45, 89, 34, 90,
// <div id=”M3”> 84, 97 </div> 90, 56 </div> </div>

$masyvas = array();
for ($i = 0; $i < rand(10, 100); $i++) {
    $masyvas[] = [];
    $gylis = 0;
    gaminimas($masyvas, $gylis);
}
function gaminimas(&$masyvas, $gylis)
{
    $random = rand(1, 5);
    foreach ($masyvas as $numeris => $reiksme) {
        $tikimybe = ceil($random / 2);
        for ($j = 0; $j < $random; $j++) {
            if ($j < $random - $tikimybe) {
                if ($gylis < 5) {
                    $gylis++;
                    $masyvas[$numeris][] = [gaminimas($masyvas, $gylis)];
                }
            } else {
                $masyvas[$numeris][] = rand(1, 100);
            }
        }
    }
    echo '<pre>';
    print_r($masyvas);
}
// add styles
function style($masyvas, $gylis)
{
    $final = '';
    foreach ($masyvas as $elementas) {
        if (gettype($elementas) == 'array') {
            $r = rand(0, 255);
            $g = rand(0, 255);
            $b = rand(0, 255);
            $final .= "<div class='flex' style='background:rgb($r,$g,$b);'>" . style($elementas, $gylis + 1) . "</div>";
        } else {
            $final .= $elementas;
        }
    }
    return $final;
}
// echo "<div class='flex'>";
// echo style($masyvas, 0);
// echo '</div>';

echo '<pre>';
// print_r($masyvas);
echo '<pre>';
