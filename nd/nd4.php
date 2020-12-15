<?php
echo '1 uzduotis<br>';
$qq = array();
$qqq = 0;
while ($qqq < 30) {
    $q = rand(5, 25);
    array_push($qq, $q);
    $qqq++;
}
foreach ($qq as $qq1) {
    echo " $qq1 ";
}
/////////////////////////
echo '<br>2 uzduotis<br>';
$q10 = 0;
foreach ($qq as $qq1) {
    if ($qq1 > 10) {
        $q10++;
    }
}
echo "a)$q10<br>";
////////////
echo 'b)';
echo max($qq);
////////////
$wwsuma = 0;
for ($w = 0; $w < count($qq); $w++) {
    $wwsuma += $qq[$w];
}
echo "<br>c)$wwsuma<br>";
///////////
$ee = array();
for ($w = 0; $w < count($qq); $w++) {
    array_push($ee, $qq[$w] - $w);
}
echo 'd)';
foreach ($ee as $eee) {
    echo " $eee ";
}
///////////
$ww = 0;
while ($ww < 10) {
    $q = rand(5, 25);
    array_push($ee, $q);
    $ww++;
}
echo "<br>e)";
foreach ($ee as $eee) {
    echo " $eee ";
}
/////////////
echo "<br>f)";
$poriniai = array();
$neporiniai = array();
foreach ($ee as $eee) {
    if ($eee % 2 == 0) {
        array_push($poriniai, $eee);
    } else {
        array_push($neporiniai, $eee);
    }
}
foreach ($poriniai as $poriniai1) {
    echo "$poriniai1 ";
}
echo '<br>';
foreach ($neporiniai as $neporiniai1) {
    echo "$neporiniai1 ";
}
/////////////
echo '<br>g)';
for ($w = 0; $w < count($poriniai); $w++) {
    if ($poriniai[$w] > 15) {
        $poriniai[$w] = 0;
    }
}
foreach ($poriniai as $poriniai2) {
    echo "$poriniai2 ";
}
////////////
echo '<br>h)';
for ($w = 0; $w < count($poriniai); $w++) {
    if ($poriniai[$w] > 10) {
        echo $poriniai[$w];
        break;
    }
}
///////////
echo '<br>i)';
for ($w = 0; $w < count($ee); $w++) {
    if ($w % 2 == 0) {
        unset($ee[$w]);
    }
}
foreach ($ee as $eeee) {
    echo "$eeee ";
}
////////////////////
echo '<br>3 uzduotis<br>';
$rr = array();
$abcd = array('A', 'B', 'C', 'D');
for ($w = 0; $w < 200; $w++) {
    $random = rand(0, 3);
    array_push($rr, $abcd[$random]);
}
foreach ($rr as $rrr) {
    echo "$rrr";
}
echo '<br>';
$uza = 0;
$uzb = 0;
$uzc = 0;
$uzd = 0;
for ($w = 0; $w < count($rr); $w++) {
    if ($rr[$w] == 'A') {
        $uza++;
    }
    if ($rr[$w] == 'B') {
        $uzb++;
    }
    if ($rr[$w] == 'C') {
        $uzc++;
    }
    if ($rr[$w] == 'D') {
        $uzd++;
    }
}
echo "A raidziu - $uza, B raidziu - $uzb, C raidziu - $uzc, D raidziu = $uzd";
///////////////////////
echo '<br>4 uzduotis<br>';
sort($rr);
foreach ($rr as $rrr) {
    echo "$rrr";
}
/////////////////////////
echo '<br>5 uzduotis<br>';
$pp = array();
$pp1 = array();
$pp2 = array();
$abcd = array('A', 'B', 'C', 'D');
for ($w = 0; $w < 200; $w++) {
    $random = rand(0, 3);
    array_push($pp, $abcd[$random]);
}
for ($w = 0; $w < 200; $w++) {
    $random = rand(0, 3);
    array_push($pp1, $abcd[$random]);
}
for ($w = 0; $w < 200; $w++) {
    $random = rand(0, 3);
    array_push($pp2, $abcd[$random]);
}
$newpp = array_merge($pp, $pp1, $pp2);
foreach ($newpp as $newppp) {
    echo $newppp;
}
echo '<br>';
echo count($newpp);
///////////////////////////
echo '<br>6 uzduotis<br>';
$skaiciai1 = array();
$skaiciai2 = array();
for ($i = 0; $i < 999; $i++) {
    $random = rand(100, 999);
    if (count($skaiciai1) == 100) {
        break;
    } elseif (in_array($random, $skaiciai1)) {
        continue;
    } else {
        array_push($skaiciai1, $random);
    }
    // for ($j = 0; $j < count($skaiciai1); $j++) {
    //     if ($skaiciai1[$j] =) 
    // }
}
foreach ($skaiciai1 as $skaiciai11) {
    echo "$skaiciai11 ";
}
echo '<br>';
for ($i = 0; $i < 999; $i++) {
    $random = rand(100, 999);
    if (count($skaiciai2) == 100) {
        break;
    } elseif (in_array($random, $skaiciai2)) {
        continue;
    } else {
        array_push($skaiciai2, $random);
    }
    // for ($j = 0; $j < count($skaiciai1); $j++) {
    //     if ($skaiciai1[$j] =) 
    // }
}
foreach ($skaiciai2 as $skaiciai22) {
    echo "$skaiciai22 ";
}
echo '<br>7 uzduotis<br>';
$difference = array_diff($skaiciai1, $skaiciai2);
foreach ($difference as $difference2) {
    echo "$difference2 ";
}
echo '<br>8 uzduotis<br>';
$intersextion = array_intersect($skaiciai1, $skaiciai2);
foreach ($intersextion as $intersextion2) {
    echo "$intersextion2 ";
}
echo '<br>9 uzduotis<br>';
$kazkas = array();
foreach ($skaiciai1 as $value) {
    array_push($kazkas, $value);
}
foreach ($kazkas as &$value) {
    foreach ($skaiciai2 as $value1) {
        if ($value1 == $value) {
            continue;
        } else {
            $value = $value1;
        }
    }
}
print_r($kazkas);

echo '<br>10 uzduotis<br>';
$hello = array();
for ($i = 0; $i < 10; $i++) {
    if ($i < 2) {
        array_push($hello, rand(5, 25));
    } else {
        array_push($hello, ($hello[$i - 1] + $hello[$i - 2]));
    }
}
foreach ($hello as $hi) {
    echo "$hi ";
}
echo '<br>11 uzduotis<br>';
$masyvas = array();
for ($i = 0; $i < 101; $i++) {
    array_push($masyvas, rand(0, 300));
}
for ($i = 0; $i < count($masyvas); $i++) {
    if (in_array($masyvas[$i], array_unique($masyvas))) {
        continue;
    } else {
        array_push($masyvas, rand(0, 300));
    }
}
max($masyvas) == $masyvas[51];
foreach ($masyvas as $masyv) {
    echo "$masyv ";
}
