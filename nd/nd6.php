<?php
echo '1 uzduotis<br>';
// Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;


function hashvienas($kazkas)
{
    echo "<h1>$kazkas</h1>";
}
hashvienas('tekstas');
/////////////////////////////////////////
echo '<br>2 uzduotis<br>';
// Parašykite funkciją su dviem argumentais, 
// pirmas argumentas tekstas, įterpiamas į h tagą, 
// o antrasis tago numeris (1-6). 
// Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

function hashdu($kazkas, $skaicius)
{
    echo "<h$skaicius>$kazkas</h$skaicius>";
}
hashdu('tekstas', 5);
//////////////////////////////////////////
echo '<br>3 uzduotis<br>';
// Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
// Visus skaitmenis stringe įdėkite į h1 tagą. 
// Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu 
// (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) 
// Keitimui naudokite pirmo uždavinio funkciją;
$string = md5(time());
$texts = '';
echo "stringas - $string";
for ($i = 0; $i < strlen($string) - 1; $i++) {
    if (is_numeric($string[$i])) {
        $texts .= $string[$i];
        if (is_numeric($string[$i + 1]) & isset($string[$i + 1]) || !isset($string[$i + 1])) {
            echo "<h1>$texts</h1>";
            $texts = '';
        }
    }
}
///////////////////////////////////////////
echo '<br>4 uzduotis<br>';
// Parašykite funkciją, kuri skaičiuotų, 
// iš kiek sveikų skaičių jos argumentas dalijasi be liekanos 
// (išskyrus vienetą ir patį save) Argumentą užrašykite taip, 
// kad būtų galima įvesti tik sveiką skaičių;

function sveikas($skaicius)
{
    $skaiciai = 0;
    for ($i = 2; $i <= $skaicius; $i++) {
        if ($skaicius % $i == 0) {
            $skaiciai++;
        }
    }
    return $skaiciai;
}
$dalinasiis = rand(1, 999);
$uzduotis4 = sveikas($dalinasiis);
echo "$dalinasiis dalinasi is $uzduotis4 skaiciu";

///////////////////////////////////////////
echo '<br>5 uzduotis<br>';
// Sugeneruokite masyvą iš 100 elementų, kurio reikšmės 
// atsitiktiniai skaičiai nuo 33 iki 77. 
// Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, 
// panaudodami ketvirto uždavinio funkciją.
$newrray = array();
for ($i = 1; $i < 100; $i++) {
    $newarray[] = rand(33, 77);
}
usort($newarray, function ($a, $b) {
    return sveikas($a) <=> sveikas($b);
});
echo '<pre>';
print_r($newarray);
///////////////////////////////////////////
echo '<br>6 uzduotis<br>';
// Sugeneruokite masyvą iš 100 elementų, 
// kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. 
// Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
$masyvas = array();

for ($i = 0; $i < 100; $i++) {
    $masyvas[] = rand(333, 777);
}
foreach ($masyvas as $key => $item) {
    if (!sveikas($item)) {
        unset($array[$key]);
    }
}
print_r($masyvas);
///////////////////////////////////////////
echo '<br>7 uzduotis<br>';
// Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, 
// kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai 
// skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas 
// pagal tokią pat salygą kaip ir pirmasis masyvas. 
// Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. 
// Paskutinio masyvo paskutinis elementas yra lygus 0;
function renderLast($random1)
{
    $random1 = rand(10, 20);
    $paskutinis = array();
    for ($i = 0; $i < $random1; $i++) {
        if ($i == $random1 - 1) {
            $paskutinis[] = 0;
        } else {
            $paskutinis[] = rand(0, 10);
        }
    }
    return $paskutinis;
}
$random1 = rand(10, 20);
$pirmas = array();
for ($i = 0; $i < $random1; $i++) {
    if ($i == $random1 - 1) {
        $pirmas[] = renderArray(rand(10, 30));
    } else {
        $pirmas[] = rand(0, 10);
    }
}
function renderArray($times)
{
    $random1 = rand(10, 20);
    $random2 = rand(0, 10);
    $newarray = array();
    for ($i = 0; $i < $random2; $i++) {
        if ($i == $random2 - 1) {
            if ($times == 0) {
                $newarray[] = renderLast($random1);
            }
            $newarray[] = renderArray($times - 1);
        } else {
            $newarray[] = rand(0, 10);
        }
    }
    return $newarray;
}

print_r($pirmas);
///////////////////////////////////////////
echo '<br>8 uzduotis<br>';
// Suskaičiuokite septinto uždavinio elementų, 
// kurie nėra masyvai, sumą.
function getsum($pirmas)
{
    $suma = 0;
    foreach ($pirmas as $value) {
        if (is_numeric($value)) {
            $suma += $value;
        } elseif (is_array($value)) {
            $next = getsum($value);
            $suma += $next['suma'];
        }
    }
    return ['suma' => $suma];
}
print_r(getsum($pirmas));
///////////////////////////////////////////
echo '<br>9 uzduotis<br>';
// Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai 
// skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų 
// yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar 
// vieną elementą- atsitiktinį skaičių nuo 1 iki 33. 
// Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite 
// dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento. 
$massive = array();
for ($i = 0; $i < 3; $i++) {
    $massive[] = rand(1, 33);
}
function tikrinam($massive)
{
    for ($i = count($massive) - 3; $i < count($massive); $i++) {
        if (sveikas($massive[$i]) !== 1) {
            $massive[] = rand(1, 33);
            tikrinam($massive);
            break;
        } else {
            if ($i == count($massive) - 1) {
                print_r($massive);
            } else {
                continue;
            }
        }
    }
    // return $massive;
}
tikrinam($massive);
///////////////////////////////////////////
echo '<br>10 uzduotis<br>';
// Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, 
// kurie yra atsitiktiniai skaičiai nuo 1 iki 100. 
// Jeigu tokio masyvo pirminių skaičių vidurkis mažesnis už 70, 
// suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo 
// pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį 
// ir jeigu mažesnis nei 70 viską kartokite. 
$eilute = array();
for ($i = 0; $i < 10; $i++) {
    $eilute[] = [];
    for ($j = 0; $j < 10; $j++) {
        $eilute[$i][] = rand(1, 100);
    }
}
function pirminiai($eilute)
{
    $suma = 0;
    $kiekis = 0;
    foreach ($eilute as $value) {
        foreach ($value as $number) {
            if (sveikas($number) == 1) {
                $kiekis++;
                $suma += $number;
            } else {
                continue;
            }
        }
    }
    ziurim($suma, $kiekis, $eilute);
    // return [$suma, $kiekis];
}
// function ziurim($suma, $kiekis, $eilute)
// {
//     $maziausias = 0;
//     $numeris = 0;
//     if ($suma / $kiekis < 70) {
//         // echo $suma / $kiekis;
//         foreach ($eilute as $key => $value) {
//             // min($value) == min($value) + 3;
//             if ($value > $maziausias) {
//                 $maziausias == $value;
//                 $numeris == $key;
//             }
//         }
//         min($eilute[$key]) == min($eilute[$key]) + 3;
//         pirminiai($eilute);
//     } else {
//         print_r($eilute);
//         echo '<br>';
//         echo $suma / $kiekis;
//     }
// }
print_r(pirminiai($eilute));
