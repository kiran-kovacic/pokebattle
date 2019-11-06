<?php

class Moves
{
    public $attack;
    public $damage;

    // $attack is een array van array's met eerst de naam van de attack en daarna de damage.
    public function __construct($attack, $damage)
    {
        $this->attack = $attack;
        $this->damage = $damage;
    }
}
