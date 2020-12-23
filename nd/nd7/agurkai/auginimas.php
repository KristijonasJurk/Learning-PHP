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
    header('Location: http://localhost/bla/agurkai/auginimas.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auginimas</title>
</head>
<a href="?pagrindinis">atgal į pagrindinį</a>

<body>
    <h1>Agurkų sodas</h1>
    <h3>Auginimas</h3>
    <form action="" method="post">
        <?php foreach ($_SESSION['a'] as $agurkas) : ?>
            <div>
                <?php $kiekis = rand(2, 9) ?>
                <h1 style="display:inline;"><?= $agurkas['agurkai'] ?></h1>
                <h3 style="display:inline;color:red;">+<?= $kiekis ?></h3>
                <input type="hidden" name="kiekis[<?= $agurkas['id'] ?>]" value="<?= $kiekis ?>">
                Agurkas Nr. <?= $agurkas['id'] ?>
            </div>
        <?php endforeach ?>
        <button type="submit" name="auginti">Auginti</button>
    </form>
</body>

</html>

<?php

if (isset($_GET['pagrindinis'])) {
    header('Location: http://localhost/nd/nd7/agurkai/pagrindinis.php');
    die;
}

?>