<!-- Sukurkite du puslapius lemon.php ir orange.php.
 Jų fonus nuspalvinkite atitinkamom spalvom. 
 Į lemon.php puslapį įdėkite kodą, kuris 
 naršyklę visada peradresuotų į puslapį orange.php. 
 Pademonstruokite veikimą. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>juodas</title>
</head>
<style>
    html {
        background: yellow;
    }
</style>
<?php

header('refresh:5;url=orange.php');
