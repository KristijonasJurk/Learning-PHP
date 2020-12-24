<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agurkai</title>
</head>
<h1 style="text-align: center; margin: 200px;">
    <a style="color: white;" href="?sodinimas">sodinimas</a>
    <a style="margin: 110px;color: white;" href="?auginimas">auginimas</a>
    <a style="color: white;" href="?skynimas">skynimas</a>
</h1>
<style>
    html {
        background-image: url('./img/cucumbers1.jpg');
    }
</style>

<?php

if (isset($_GET['sodinimas'])) {
    header('Location: http://localhost/nd/nd7/agurkai/sodinimas.php');
    die;
}
if (isset($_GET['auginimas'])) {
    header('Location: http://localhost/nd/nd7/agurkai/auginimas.php');
    die;
}
if (isset($_GET['skynimas'])) {
    header('Location: http://localhost/nd/nd7/agurkai/skynimas.php');
    die;
}

?>