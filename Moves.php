<?php

class Moves
{
    public $attack;

    // $attack is een array van array's met eerst de naam van de attack en daarna de damage.
    public function __construct($attack)
    {
        $this->attack = $attack;
    }
}
