<?php
include __DIR__ . '/darzove.php';
include __DIR__ . '/agurkas.php';
include __DIR__ . '/pomidoras.php';
session_start();

if (!isset($_SESSION['a'])) {
    // $_SESSION['a'] = [];
    $_SESSION['obj'] = []; // agurko objektai
    $_SESSION['agurku ID'] = 0;
}

// SODINIMO SCENARIJUS
if (isset($_POST['sodinti'])) {
    $kiekis = (int) $_POST['kiekis'];

    if (0 > $kiekis || 4 < $kiekis) { // <--- validacija
        if (0 > $kiekis) {
            $_SESSION['err'] = 1; // <-- neigiamas agurku kiekis
        } elseif (4 < $kiekis) {
            $_SESSION['err'] = 2; // <-- per daug
        }

        header('Location: http://localhost/bla/agurkai/sodinimas.php');
        exit;
    }

    foreach (range(1, $kiekis) as $_) {

        $agurkasObj = new Agurkas($_SESSION['agurku ID']);
        // $agurkasObj->id = $_SESSION['agurku ID'] + 1;
        // $agurkasObj->count = 0;

        $_SESSION['obj'][] = serialize($agurkasObj);
        $_SESSION['agurku ID']++;
        // var_dump($agurkasObj);
        // die;

        // $_SESSION['a'][] = [
        //     'id' => ++$_SESSION['agurku ID'],
        //     'agurkai' => 0
        // ];
    }

    header('Location: http://localhost/nd/nd7/agurkai/sodinimas.php');
    exit;
}
// ISROVIMO SCENARIJUS
if (isset($_POST['rauti'])) {
    // foreach ($_SESSION['a'] as $index => $agurkas) {
    //     if ($_POST['rauti'] == $agurkas['id']) {
    //         unset($_SESSION['a'][$index], $_SESSION['obj'][$index]);
    //         --$_SESSION['agurku ID'];
    //         header('Location: http://localhost/nd/nd7/agurkai/sodinimas.php');
    //         exit;
    //     }
    // }
    foreach ($_SESSION['obj'] as $index => $agurkas) {
        $agurkas = unserialize($agurkas);
        if ($_POST['rauti'] == $agurkas->id) {
            unset($_SESSION['obj'][$index]);
            header('Location: http://localhost/nd/nd7/agurkai/sodinimas.php');
            exit;
        }
    }
}
?>


<!DOCTYPE html>
<html style="background: url('./img/cucumbers10.jpg');" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sodinimas</title>
</head>
<a href="?pagrindinis">atgal į pagrindinį</a>

<body style="background: white; border: 1px solid black;">
    <h1 style="text-align: center;">Agurkų sodas</h1>
    <h3 style="text-align: center; color:limegreen; font-size: 22px;">Sodinimas</h3>
    <form style="display:flex; align-items:center; flex-direction:column;" action="" method="post">
        <?php foreach ($_SESSION['obj'] as $agurkas) : ?>
            <?php $agurkas = unserialize($agurkas) ?>
            <?php $randomPhoto = rand(1, 11); ?>
            <div style="display: flex; align-items:center; margin:0 0 30px 20px; font-size:32px;">
                <img style="width: 100px;" src="img/cucumbers<?php echo $randomPhoto ?>.jpg" alt="">
                Agurkas nr. <?= $agurkas->id ?>
                Agurkų: <?= $agurkas->count ?>
                <button style="margin-left:30px; width:100px; height:35px; font-size:24px; background-color:lightgreen;" type="submit" name="rauti" value="<?= $agurkas->id ?>">Išrauti</button>
            </div>

        <?php endforeach ?>
        <input type="text" name="kiekis">
        <button style=" margin:15px;background-color:green; color:white; width: 160px; height:35px; font-size:18px; color:white;" type="submit" name="sodinti">SODINTI</button>
    </form>
</body>

</html>

<?php

if (isset($_GET['pagrindinis'])) {
    header('Location: http://localhost/nd/nd7/agurkai/pagrindinis.php');
    die;
}

?>