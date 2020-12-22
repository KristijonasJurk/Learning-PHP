<!-- Sukurti puslapį panašų į 1 uždavinį, 
tiktai antro linko su perduodamu kintamuoju 
nedarykite, o vietoj to padarykite, URL eilutėje 
ranka įvedus GET kintamąjį color su RGB spalvos 
kodu (pvz color=ff1234) puslapio fono spalva 
pasidarytų tokios spalvos. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>juodas</title>
</head>

<?php

echo '<style>html{background:black;}</style>';
if (isset($_GET['color'])) {
    echo '<style>html{background:#' . $_GET['color'] . ';}</style>';
}
?>
<a href='?'>Nuoroda i save</a><br>