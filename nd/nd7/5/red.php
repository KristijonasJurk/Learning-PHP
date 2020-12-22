<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N. D. 7 WEB mechanika </title>
</head>

<style>
    html {
        background: #440707;
    }
</style>
<?php

if (isset($_GET['p'])) {
    header('Location: ./blue.php');
}
echo '<a href=\'?p\'>Nuoroda i save</a><br>';
