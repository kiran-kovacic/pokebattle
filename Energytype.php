<?php

class Energytype
{
    public $type;
    public const FIRE = "fire";
    public const LIGHTNING = "lightning";

    // $type is een enkele variabel.
    public function __construct($type)
    {
        $this->type = $type;
    }
}
