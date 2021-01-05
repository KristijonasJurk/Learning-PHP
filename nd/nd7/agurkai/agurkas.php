<?php

class Agurkas
{
    private $id, $count;

    public static function nuimtiDerliu($visiAgurkai) // <----- $visiAgurkai = $_SESSION['obj']
    {
        foreach ($visiAgurkai as $index => $agurkas) { // <---- serializuotas stringas
            $agurkas = unserialize($agurkas); // <----- agurko objektas
            $agurkas->nuskintiVisus();
            $agurkas = serialize($agurkas); // <------ vel stringas
            $visiAgurkai[$index] = $agurkas; // <----- uzsaugom agurkus
        }
        return $visiAgurkai;
    }
    public function __construct($lastId)
    {
        $this->id = $lastId + 1;
        $this->count = 0;

        // $agurkoObj->id = $_SESSION['agurku ID'] + 1;
        // $agurkoObj->count = 0;
    }


    public function __get($propertyName)
    {
        return $this->$propertyName;
    }

    public function __set($propertyName, $value)
    {
        $this->$propertyName = $value;
    }


    public function addAgurkas($agurkai)
    {
        $this->count = $this->count + $agurkai;
    }

    public function nuskintiVisus()
    {
        $this->count = 0;
    }
}
