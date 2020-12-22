<!-- 6. Padarykite puslapį su dviem mygtukais. 
Mygtukus įdėkite į dvi skairtingas formas- 
vieną GET ir kitą POST. Nenaudodami jokių 
konkrečių $_GET ar $_POST reikšmių, o tik 
tikrindami pačius masyvus, nuspalvinkite foną 
žaliai, kai paspaustas mygtukas iš GET formos 
ir geltonai- kai iš POST. -->

<!-- 7. Pakartokite 6 uždavinį. Papildykite jį kodu, 
kuris naršyklę po POST metodo peradresuotų tuo 
pačiu adresu (t.y. į patį save) jau GET metodu. -->
<?php

print_r($_GET);
print_r($_POST);
if (isset($_GET['one'])) {
    echo '<style>body { background:green; }';
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<style>body { background:green; }';
    header('refresh:1;url=?GET=GET');
}
// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     echo '<style>body { background:yellow; }';
//     header('refresh:1;url=?GET=GET');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="" method="get">
    <input type="text" name="one">
    <button type="submit">GET</button>
    <br><br>
</form>
<form action="" method="post">
    <input type="text" name="two">
    <button type="submit">POST</button>
</form>