2020-12-09 ND

<?php
echo '<br>1 uzduotis<br>';
$mylimiausioVardas = 'Tomas';
$mylimiausioPavarde = 'Hanksas';
if (strlen($mylimiausioVardas) < strlen($mylimiausioPavarde)) {
    echo "trumpesnis stringas $mylimiausioVardas";
} else {
    echo "trumpesnis stringas $mylimiausioPavarde";
}

echo '<br><br>2 uzduotis<br>';
$vardelis = "zuviukas";
$pavardelis = "Nemo";
echo "Oskara laimejo <span style='text-transform:uppercase;'>$vardelis<span>
<span style='text-transform:lowercase;'>$pavardelis<span>!!!";

echo '<br><br>3 uzduotis<br>';
$aktorius1 = 'Saulius Siparis';
$aktorius2 = 'Paris Hilton';
$inicialai = substr($aktorius1, 0, 1) . substr($aktorius1, 8, -6) . substr($aktorius2, 0, 1) . substr($aktorius2, 6, -5);
echo "$inicialai";

echo '<br><br>4 uzduotis<br>';
$actor1 = 'Shrekas Shrekijus';
$actor2 = 'Jackis Chanas';
$inicials = substr($actor1, 4, 3) . substr($actor1, -3, 3) . substr($actor2, 3, 3) . substr($actor2, -3, 3);
echo "$inicials";

echo '<br><br>5 uzduotis<br>';
$text = 'An american in Paris';
$noa = str_replace('a', '*', $text);
$noA = str_replace('A', '*', $noa);
echo "$noA";

echo '<br><br>6 uzduotis<br>';
$countA = str_replace('A', '', $text, $count1);
$counta = str_replace('a', '', $text, $count2);
$count3 = $count1 + $count2;
echo "how many a letters? $count3";

echo '<br><br>7 uzduotis<br>';
$text2 = "Breakfast at Tiffany's";
$text3 = "2001: A Space Odyssey";
$text4 = "It's a Wonderful Life";
$vowels = array("a", "e", "y", "u", "i", "o");
$vowelS = array("A", "E", "Y", "U", "I", "O");
$deletev = str_replace($vowels, '', $text2);
$deleteV = str_replace($vowelS, '', $deletev);
echo "no vowels - $deleteV";

echo '<br><br>8 uzduotis<br>';
echo $starwars = 'Star Wars: Episode ' . str_repeat(' ', rand(0, 5)) . rand(1, 9) . ' - A New Hope' . "<br>";
echo 'Epizodo numeris: ' . $starwarsEpsiode = preg_replace('/[^0-9]/', '', $starwars);

echo '<br><br>9 uzduotis<br>';
$long = 'Dont Be a Menace to South Central While Drinking Your Juice in the Hood';
$ilgas = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$words = explode(' ', $ilgas);
$indexas = 0;
foreach ($words as $word) {
    if (mb_strlen($word) >= 5) {
        $indexas++;
    }
}
echo "$indexas";

echo '<br><br>10 uzduotis<br>';
$abc = 'QWERTYUIOPASDFGHJKLZXCVBNM123456789qwertyuiopasdfghjklzxcvbnm';
$randomabc = '';
for ($i = 0; $i < 3; $i++) {
    $randomabc .= $abc[rand(0, strlen($abc) - 1)];
}
echo "random word - $randomabc";

echo '<br><br>11 uzduotis<br>';
$fraze = 'Dont Be a Menace to South Central While Drinking Your Juice in the Hood';
$fraze2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$zodziai2 = explode(' ', $fraze2);
$empty = array();
foreach ($zodziai2 as $zodis2) {
    array_push($empty, $zodis2);
    // $empty[rand(0, count($empty))] = $zodis2;
}
echo "$emptyy";
