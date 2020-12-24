<?php
session_start();

if (!isset($_SESSION['a'])) {
    $_SESSION['a'] = [];
    $_SESSION['agurku ID'] = 0;
}

// SODINIMO SCENARIJUS
if (isset($_POST['sodinti'])) {

    $_SESSION['a'][] = [
        'id' => ++$_SESSION['agurku ID'],
        'agurkai' => 0
    ];
    header('Location: http://localhost/nd/nd7/agurkai/sodinimas.php');
    exit;
}
// ISROVIMO SCENARIJUS
if (isset($_POST['rauti'])) {
    foreach ($_SESSION['a'] as $index => $agurkas) {
        if ($_POST['rauti'] == $agurkas['id']) {
            unset($_SESSION['a'][$index]);
            header('Location: http://localhost/nd/nd7/agurkai/sodinimas.php');
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sodinimas</title>
</head>
<a href="?pagrindinis">atgal į pagrindinį</a>

<body>
    <h1>Agurkų sodas</h1>
    <h3>Sodinimas</h3>
    <form action="" method="post">
        <?php foreach ($_SESSION['a'] as $agurkas) : ?>
            <?php $randomPhoto = rand(1, 5); ?>
            <div style="display: flex; align-items:center; margin-bottom:30px; font-size:32px;">
                <img style="width: 100px;" src="img/cucumbers<?php echo $randomPhoto ?>.jpg" alt="">
                Agurkas nr. <?= $agurkas['id'] ?>
                Agurkų: <?= $agurkas['agurkai'] ?>
                <button style="margin-left:30px; width:100px; height:35px; font-size:24px; background-color:lightgreen;" type="submit" name="rauti" value="<?= $agurkas['id'] ?>">Išrauti</button>
            </div>

        <?php endforeach ?>
        <button type="submit" name="sodinti">SODINTI</button>
    </form>
</body>

</html>

<?php

if (isset($_GET['pagrindinis'])) {
    header('Location: http://localhost/nd/nd7/agurkai/pagrindinis.php');
    die;
}

?>