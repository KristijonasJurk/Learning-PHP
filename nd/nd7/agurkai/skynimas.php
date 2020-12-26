<?php
session_start();

if (!isset($_SESSION['a'])) {
    $_SESSION['a'] = [];
    $_SESSION['agurku ID'] = 0;
}


// SKINTI VISISKAI VISUS SCENARIJUS
if (isset($_POST['visiskai'])) {
    foreach ($_SESSION['a'] as $index => &$agurkas) {
        $agurkas['agurkai'] = 0;
    }
    // _d($_POST['kiekis']);
    header('Location: http://localhost/nd/nd7/agurkai/skynimas.php');
    exit;
}
// SKINTI VISUS SCENARIJUS
if (isset($_POST['visus'])) {
    foreach ($_SESSION['a'] as $index => &$agurkas) {
        if ($_POST['visus'] == $agurkas['id']) {
            $agurkas['agurkai'] = 0;
            header('Location: http://localhost/nd/nd7/agurkai/skynimas.php');
            exit;
        }
    }
}
// SKINTI VIENA SCENARIJUS
if (isset($_POST['viena'])) {
    foreach ($_SESSION['a'] as $index => &$agurkas) {
        if ($_POST['viena'] == $agurkas['id']) {
            $agurkas['agurkai'] -= 1;
            header('Location: http://localhost/nd/nd7/agurkai/skynimas.php');
            exit;
        }
    }
}

// ISROVIMO SCENARIJUS
if (isset($_POST['rauti'])) {
    foreach ($_SESSION['a'] as $index => $agurkas) {
        if ($_POST['rauti'] == $agurkas['id']) {
            unset($_SESSION['a'][$index]);
            --$_SESSION['agurku ID'];
            header('Location: http://localhost/nd/nd7/agurkai/skynimas.php');
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html style="background: url('./img/cucumbers8.jpg');" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sodinimas</title>
</head>
<a href="?pagrindinis">atgal į pagrindinį</a>

<body style="background: white; border: 1px solid black;">
    <h1 style="text-align: center;">Agurkų sodas</h1>
    <h3 style="text-align: center; color:limegreen; font-size: 22px;">Skynimas</h3>
    <form style="display:flex; align-items:center; flex-direction:column;" action="" method="post">
        <?php foreach ($_SESSION['a'] as $agurkas) : ?>
            <?php $randomPhoto = rand(1, 11); ?>
            <div style="display: flex; align-items:center; margin:0 0 30px 20px; font-size:32px;">
                <img style="width: 100px;" src="img/cucumbers<?php echo $randomPhoto ?>.jpg" alt="">
                Galima skinti agurkų: <?= $agurkas['agurkai'] ?>
                <button style="margin-left:30px; width:100px; height:35px; font-size:24px; background-color:yellow;" type="submit" name="viena" value="<?= $agurkas['id'] ?>">Skinti</button>
                <button style="margin-left:30px; width:150px; height:35px; font-size:24px; background-color:orange;" type="submit" name="visus" value="<?= $agurkas['id'] ?>">Skinti visus</button>
            </div>

        <?php endforeach ?>
        <button style=" margin:15px;background-color:red; width: 250px; height:35px; font-size:18px; color:white;" type="submit" name="visiskai">SKINTI VISIŠKAI VISUS</button>
    </form>
</body>

</html>

<?php

if (isset($_GET['pagrindinis'])) {
    header('Location: http://localhost/nd/nd7/agurkai/pagrindinis.php');
    die;
}

?>