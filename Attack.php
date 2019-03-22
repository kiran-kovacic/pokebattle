<?php

class Moves
{
    public $attack;
    public $damage;

    public function __construct($attack, $damage)
    {
        $this->attack = $attack;
        $this->damage = $damage;
    }
}
