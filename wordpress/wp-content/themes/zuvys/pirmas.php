<?php
/*
 * Template Name: Pirmas
 */

get_header();
?>

<h1><?php the_field('title') ?></h1>

<?php $picture = get_field('img') ?>
<img src="<?= $picture['url'] ?>">

<?php
get_footer();
