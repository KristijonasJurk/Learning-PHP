<!-- 9. Padarykite juodą puslapį, kuriame būtų
 POST forma, mygtukas ir atsitiktinis kiekis (3-10)
 checkbox su raidėm A,B,C… Padarykite taip, 
 kad paspaudus mygtuką, fono spalva pasikeistų į baltą, 
 forma išnyktų ir atsirastų skaičius, rodantis kiek buvo 
 pažymėta checkboksų (ne kurie, o kiek).  -->

<!-- 10. Pakartokite 9 uždavinį. Padarykite taip, kad 
 atsirastų du skaičiai. Vienas rodytų kiek buvo pažymėta, 
 o kitas kiek iš vis buvo jų sugeneruota. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pink</title>
</head>
<style>
    html {
        /* background: black; */
        color: red;
    }
</style>
<form action="" method="post">
    <button type="submit">push</button>
</form>

<?php

if (empty($_POST)) {
    echo '<style>html{background:black;color: #fff;}</style>
    <form method=\'POST\'>';
    for ($i = 0; $i < rand(3, 10); $i++) {
        $raides = range('A', 'Z')[$i];
        echo "<input type='checkbox' name='hello'><label for='$raides'>$raides</label>";
    }
    echo '<input type=\'submit\' value=\'Submit\'>;
    </form>';
} else {
    echo '<br>';
    echo count($_POST);
}
?>