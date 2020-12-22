<?php

if (isset($_POST['go'])) {
    header('refresh:1;url=rose.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pink</title>
</head>
<style>
    html {
        background: pink;
    }
</style>

<form action="" method="post">
    <input type="tel" name="go" id="">
    <button type="submit">go to rose</button>
</form>