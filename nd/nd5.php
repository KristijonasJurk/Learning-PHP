<?php

echo '1 uzduotis<br>';
// $elementas1 = array();
// $elementas2 = array();
// $rand = rand(5, 25);
// for ($i = 0; $i < 5; $i++) {
//     $elementas2[] = rand(5, 25);
// }
// for ($i = 0; $i < 10; $i++) {
//     $elementas1[] = $elementas2;
// }
foreach (range(0, 10) as $index => $value) {
    foreach (range(0, 5) as $value) {
        $elementas1[$index][$value] = rand(5, 25);
    }
}
echo '<pre>';
print_r($elementas1);
///////////////////////////
echo '<br>2 uzduotis<br>';
$elemNumb = 0;
foreach ($elementas1 as $elementas) {
    $didziausias = max($elementas);
    foreach ($elementas as $elementa) {
        if ($elementa > 10) {
            $elemNumb++;
        }
    }
}
echo "a)$elemNumb<br>";
//////
echo "b)$didziausias<br>";
//////
$sum0 = 0;
$sum1 = 0;
$sum2 = 0;
$sum3 = 0;
$sum4 = 0;
// foreach ($elementas1 as $elementas) {
//     foreach ($elementas2 as $index => $value) {
//         for ($i = 0; $i < 5; $i++) {
//             if ($index == $index0) {
//                 $index0 += $value;
//             }
//             if ($index == $index1) {
//                 $index1 += $value;
//             }
//             if ($index == $index2) {
//                 $index2 += $value;
//             }
//             if ($index == $index3) {
//                 $index3 += $value;
//             }
//             if ($index == $index4) {
//                 $index4 += $value;
//             }
//         }
//     }
// }
// $index1 -= 1;
// $index2 -= 2;
// $index3 -= 3;
// $index4 -= 4;
// foreach($elementas1 as $key=> $value) {​​
//     foreach ($elementas1[$key] as $index=>$number) {​​
//         ${​​"sum$index"}​​=array_sum(array_column($arr,$index));
//     }​​}​​
// foreach ($elemenas1 as $key => $value) {
//     foreach ($elementas1[$key] as $index) {
//         ${"sum$index"} = array_sum(array_column($elementas1, $index));
//     }
// }
// echo "c)1)$sum0 2)$sum1 1)$sum2 2)$sum3 1)$sum4<br>";
// foreach($arr as $key=>$value) {​​

//     foreach ($arr[$key] as $index=>$number) {​​

//         ${​​"sum$index"}​​=array_sum(array_column($arr,$index));

//     }​​

//             }​​

// 2
$suma = array();
foreach ($elementas1 as $value) {
    foreach ($value as $key => $elementas) {
        $suma[$key] += $elementas;
    }
}
// foreach ($masyvas as $value) {​​

//     foreach ($value as $key => $elementas) {​​

//         $suma[$key] += $elementas;

//     }​​

// }​​
print_r($suma);
//////
for ($i = 0; $i < 2; $i++) {
    $elementas2[] = rand(5, 25);
}
echo '<pre>d)';
print_r($elementas2);
echo '<br>';
///////
// $elem = array();
// $indexelis = 0;
// foreach ($elementas1 as $elementas) {
//     $indexelis++;
//     foreach ($elementas as $element) {
//         for ($i = 0; $i < count($elementas1); $i++) {
//             if ($indexelis == $i + 1) {
//                 @$elem[$i] += $element;
//             } else {
//                 continue;
//             }
//         }
//     }
// }
foreach ($elementas1 as $value => $index) {
    foreach (range(1, 1) as $value) {
        $sum_array[] = array_sum($index);
    }
}

// foreach ($elemenas1 as $value => $index ) {​​

//     foreach (range(1, 1) as $value){​​

//         $sum_array[] = array_sum($index);

//     }​​
// }​​
echo 'e)';
print_r($sum_array);

//////////////////////////
echo '<br>3 uzduotis<br>';
$masyvas = array();
$masyvas2 = array();
$random = rand(2, 20);
for ($i = 0; $i < $random; $i++) {
    $masyvas2[] = chr(rand(97, 122));;
}
for ($i = 0; $i < 10; $i++) {
    $masyvas[] = $masyvas2;
}
echo '<pre>';
print_r($masyvas);

// $range = range('A', 'Z');

// $kitasmasyvas = [];

// $surusiuotas = [];

// $elementasRandom = 0;

// foreach (range(1, 10) as $value) {​​

//     $elementasRandom = rand(2, 20);

//     foreach (range(1, $elementasRandom) as $value1) {​​

//         $reiksme = array_rand($range);

//         $kitasmasyvas[$value][$value1] = $range[$reiksme];

//     }​​

// }​​
///////////////////////////
echo '<br>5 uzduotis<br>';
// $kazkas = array();
// $kazkazzz = array();
// for ($i = 0; $i < 30; $i++) {
//     $user_id = rand(1, 1000000);
//     $user_in_row = rand(1, 100);
//     $kazkazzz[] += $user_id;
//     $kazkazzz[] +=  $user_in_row;
//     $kazkas[] = $kazkazzz;
// }
// foreach ($kazkas as $elementas) {
//     foreach ($elementas as $element) {
//         echo "$element ";
//     }
// }
$arr = [];

foreach (range(0, 29) as $value) {​​

    $randUser = rand(1, 1000000);

    (in_array($randUser, $arr) == true) ?: $arr[] = [

        'user_id' => $randUser, 

        'place_in_row' => rand(0, 100)];

}​​

print_r($arr);
/////////////////////////////
echo '<br>8 uzduotis<br>';
$main = array();
for ($i = 0; $i < 10; $i++) {
    $main[$i] = [];
    $random = rand(0, 5);
    for ($j = 0; $j < $random; $j++) {
        $rnd = rand(0, 10);
        $main[$i][$j] = $rnd;
    }
    if ($random == 0) {
        $rnd = rand(0, 10);
        $main[$i][] = $rnd;
    }
}
foreach ($main as $elementas) {
    foreach ($elementas as $element) {
        echo "$element ";
    }
}
//////////////////////////////
echo '<br>9 uzduotis<br>';
$suma = 0;
foreach ($main as $elementas) {
    foreach ($elementas as $element) {
        $suma += $element;
    }
}
echo "suma - $suma";
for ($i = 0; $i < count($main); $i++) {
    sort($main);
    for ($j = 0; $j < count($main[$i]); $j++) {
        $masyvosuma = 0;
        if ($j == count($main[$i]) - 1) {
            for ($k = 0; $k < count($main[$i + 1]); $k++) {
                $masyvosuma1 = 0;
                if ($k == count($main[$i]) - 1) {
                    if ($masyvosuma >= $masyvosuma1) {
                        $main[$i] == $masyvosuma1;
                    } else {
                        $main[$i] == $masyvosuma;
                    }
                } else {
                    $masyvosuma += $main[$i][$j];
                }
            }
        } else {
            $masyvosuma += $main[$i][$j];
        }
    }
    if ($random == 0) {
        $rnd = rand(0, 10);
        $main[$i][] = $rnd;
    }
}
foreach ($main as $elementas) {
    foreach ($elementas as $element) {
        echo "$element ";
    }
}
//////////////////////////////
echo '<br>10 uzduotis<br>';
