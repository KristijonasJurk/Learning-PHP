<?php

class Miskas
{
    protected $plotas = 1000;
    protected $animals = 0;
    public $name = 'gyvunas';

    public function __construct()
    {
        echo '<h3>MISKO KONSTRUKTORIUS</h3>';
    }
    public function garsas()
    {
        echo '<h1>' . $this->voice . '</h1>';
    }
    public function plotas()
    {
        return $this->plotas;
    }
}
