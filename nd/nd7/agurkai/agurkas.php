<?php

class Agurkas
{
    private $id, $count;

    public function __get($propertyName)
    {
        return $this->$propertyName;
    }
    public function __set($propertyName, $value)
    {
        $this->$propertyName = $value; // pirmu atveju property name pasiims id o kitu count(del dolerio zenklo kreipiamasi i kintamojo kintamaji)
    }
    public function __serialize()
    {
    }
}
