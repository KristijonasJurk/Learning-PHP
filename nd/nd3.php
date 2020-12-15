<link href="../nd3.css" rel="stylesheet" />
<?php
echo "1 uzduotis<br>";
$i = 0;
while ($i < 400) {
    if (!($i % 50)) {
        echo '<br>';
    }
    $i++;
    echo "*";
}
echo "<br>2 uzduotis<br>";
$j = 0;
$jk = array();
$index = 0;
while ($j < 300) {
    $j++;
    $numbr = rand(0, 300);
    if ($numbr > 150) {
        $index++;
    }
    array_push($jk, $numbr);
}
echo "greater than 150 - $index<br>";
foreach ($jk as $g) {
    if ($g > 275) {
        echo "<span style='color:red'>$g\r\n</span>";
        // echo "greater than 150 - $index, random numbrs:<span style='color:red'> '" . implode(" ", $jk) . "'</span><br>";
    } else {
        echo "<span>$g\r\n</span>";
    }
}
echo "<br>3 uzduotis<br>";
$qa = rand(3000, 4000);
$z = 1;
$br = array();
while ($z < $qa) {
    $z++;
    if ($z % 77 == 0) {
        array_push($br, $z);
    }
}
for ($d = 0; $d < count($br); $d++) {
    if ($d != count($br) - 1) {
        echo "$br[$d],";
    } else {
        echo $br[$d];
    }
    if ($d % 20 == 0 && $d != 0) {
        echo "<br>";
    }
}

echo "<br>4 uzduotis<br>";
// $kj = 1;
// while ($kj <= 100) {
//     echo "<b style='display:inline-block;width:13px;font-size:10px;'>*</b>";
//     if ($kj % 10 == 0 && $kj != 0) {
//         echo '<br>';
//     }
//     $kj++;
// }
$edges = 10;
for ($i = 0; $i < $edges; $i++) {
    for ($u = 0; $u < $edges; $u++) {
        if ($u == $i || $u == $edges - 1 - $i) {
            echo '<span style=\'color:red;\'>*</span>';
        } else {
            echo '<span>*</span>';
        }
    }
    echo '<br>';
}

echo "<br>6 uzduotis<br>";
//a variantas

$pl = 0;


// while ($pl < 100) {
//     $monet = rand(0, 1);
//     if ($monet == 0) {
//         echo "H";
//         break;
//     }
//     if ($monet == 1) {
//         echo "S";
//     }
//     $pl++;
// }

// b variantas

$indexas = 0;
while ($pl < 100) {
    $monet = rand(0, 1);
    if ($indexas == 3) {
        break 1;
    }
    if ($monet == 0) {
        $indexas = $indexas + 1;
        echo "H";
    }
    if ($monet == 1) {
        echo "S";
    }
    $pl++;
}

//c variantas
// $indexel = 0;
// while ($pl < 100) {
//     $monet = rand(0, 1);
//     if ($indexel == 6) {
//         break 1;
//     }
//     if ($monet == 0) {
//         $indexel += 1;
//         echo "H";
//     }
//     if ($monet == 1) {
//         $indexel = 0;
//         echo "S";
//     }
// }

echo "<br>7 uzduotis<br>";

$ktask = 0;
$ptask = 0;
$ccc = 0;
while ($ccc < 100) {
    $kazys = rand(10, 20);
    $petras = rand(5, 25);
    $ktask += $kazys;
    $ptask += $petras;
    echo "Kazio taskai: $ktask,   Petro taskai: $ptask<br>";
    if ($ktask > 222 && $ptask > 222) {
        echo 'Lygiosios?';
        break 1;
    }
    if ($ktask > 222) {
        echo 'Laimejo Kazys';
        break 1;
    }
    if ($ptask > 222) {
        echo 'Laimejo Petras';
        break 1;
    }
}

echo "<br>8 uzduotis<br>";

$r = rand(0, 255);
$g = rand(0, 255);
$b = rand(0, 255);

for ($i = 0; $i < 21 / 2; $i++) {
    echo str_repeat('&nbsp&nbsp', 10 - $i) . str_repeat("<span style=color:rgb($r,$g,$b);>*</span>", $i * 2 + 1);
    echo '<br>';
}
for ($i = 20 / 2; $i > 0; $i--) {
    echo str_repeat('&nbsp&nbsp', 11 - $i) . str_repeat("<span style=color:rgb($r,$g,$b);>*</span>", $i * 2 - 1);
    echo '<br>';
}
// $bnn = 409;
// $kkr = 10;
// $rr = 19;

// $daug = 1;
// $ooo = array();
// $lll = 0;
// $zz = 10;
// for ($lll;$lll<400;$lll++) {

// }

// while ($kkr < $bnn) {
//     $spalva = rand(0, 255);
//     $spalva1 = rand(0, 255);
//     $spalva2 = rand(0, 255);
//     if (($kkr - 1 + 10) % $rr == 0) {
//         echo '<br>';
//     }
//     if ($kkr < $rr + 10) {
//         if ($kkr == 20) {
//             echo "<span style='color:rgba($spalva,$spalva1,$spalva2)'>*</span>";
//         } else {
//             echo ".";
//         }
//     }
//     // if ($kkr < 2 * $rr + 10 && $kkr > $rr + 10) {
//     //     if ($kkr == 38 || $kkr == 39 || $kkr == 40) {
//     //         echo "<span style='color:rgba($spalva,$spalva1,$spalva2)'>*</span>";
//     //     } else {
//     //         echo ".";
//     //     }
//     } else {
//         echo "<span style='color:rgba($spalva,$spalva1,$spalva2)'>*</span>";
//     }
//     $kkr++;
// }

echo "<br>10 uzduotis<br>";

// $ilgis = 850;
// $ikalta = 0;
// $kiek = 0;
// $vinys = 0;
// do {
//     $kalam = rand(5, 20);
//     $ikalta += $kalam;
//     $kiek++;
//     if ($ikalta > $ilgis) {
//         $ikalta = 0;
//         $vinys++;
//     }
// } while (5 > $vinys);
// echo $kiek;

//b variantas

$ilgis = 850;
$ikalta = 0;
$kiek = 0;
$vinys = 0;
do {
    $tikimybe = rand(0, 1);
    $kalam = rand(20, 30);
    if ($tikimybe >= 1) {
        $ikalta += $kalam;
        $kiek++;
    } else {
        $ikalta += 0;
    }
    // echo "$ikalta<br>";
    if ($ikalta > $ilgis) {
        $ikalta = 0;
        $vinys++;
    }
} while (5 > $vinys);
echo $kiek;

echo "<br>11 uzduotis<br>";

$tt = 0;
$string = '';
$space = ' ';
$arej = array();
while ($tt < 50) {
    $a = rand(1, 200);
    if (strpos($string, $a) !== false) {
        continue;
    } else {
        array_push($arej, $a);
        $tt++;
    }
}
foreach ($arej as $arj) {
    echo "$arj ";
}
echo "<br>";
$cool = array();
foreach ($arej as $arj) {
    $ui = 0;
    for ($y = 2; $y <= $arj - 1; $y++) {
        if ($arj % $y == 0) {
            $ui++;
            continue;
        } else {
            continue;
        }
        if ($y == $arj - 1 && $ui == 0) {
            array_push($cool, $y);
        }
    }
}
foreach ($cool as $col) {
    echo "<br>$col ";
}
