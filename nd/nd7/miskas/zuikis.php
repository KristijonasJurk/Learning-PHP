<?php

class Zuikis extends Miskas
{
    public $vardas = 'Zuikis';
    private $tipas = 'grauzikas';
    protected $balsas = 'cyp cyp';

    public function __construct()
    {
        parent::__construct(); // tevo konstruktoriu paleis
        echo '<h3> zuikio konstruktorius </h3>';
    }
}
