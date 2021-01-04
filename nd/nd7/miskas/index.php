<?php echo 'Miskas';

include __DIR__ . '/miskas.php';
include __DIR__ . '/lape.php';
include __DIR__ . '/zuikis.php';
include __DIR__ . '/vilkas.php';

echo '<br>';

$animal1 = new Lape;
$animal2 = new Zuikis;
$animal3 = new Vilkas;

$animal1->garsas();
$animal2->garsas();
$animal3->garsas();
