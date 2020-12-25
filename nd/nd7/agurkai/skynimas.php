<?php
session_start();

if (!isset($_SESSION['a'])) {
    $_SESSION['a'] = [];
    $_SESSION['agurku ID'] = 0;
}

// AUGINIMO SCENARIJUS
if (isset($_POST['auginti'])) {
    foreach ($_SESSION['a'] as $index => &$agurkas) {
        $agurkas['agurkai'] += $_POST['kiekis'][$agurkas['id']];
    }
    // _d($_POST['kiekis']);
    header('Location: http://localhost/nd/nd7/agurkai/auginimas.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skynimas</title>
</head>
<a href="?pagrindinis">atgal į pagrindinį</a>

<body style="border: 1px solid black;">
    <h1 style="text-align: center;">Agurkų sodas</h1>
    <h3 style="text-align: center; color:green">Auginimas</h3>
    <form style="display:flex; align-items:center; flex-direction:column;" action="" method="post">
        <?php foreach ($_SESSION['a'] as $agurkas) : ?>
            <?php $randomPhoto = rand(1, 11); ?>
            <div style="font-size:20px;">
                <?php $kiekis = rand(2, 9) ?>
                <img style="width: 50px;" src="img/cucumbers<?php echo $randomPhoto ?>.jpg" alt="">
                <h1 style="display:inline;"><?= $agurkas['agurkai'] ?></h1>
                <h3 style="display:inline;color:green;font-size:18px;">+<?= $kiekis ?></h3>
                <input type="hidden" name="kiekis[<?= $agurkas['id'] ?>]" value="<?= $kiekis ?>">
                Agurkas Nr. <?= $agurkas['id'] ?>
            </div>
        <?php endforeach ?>
        <button style="margin:20px 0  10px 30px; width:100px; height:35px; font-size:24px; background-color:lightgreen;" type="submit" name="auginti">Auginti</button>
    </form>
</body>

</html>

<?php

if (isset($_GET['pagrindinis'])) {
    header('Location: http://localhost/nd/nd7/agurkai/pagrindinis.php');
    die;
}

?>