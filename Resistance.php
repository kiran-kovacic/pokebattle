<?php

class Resistance
{
  public $name;
  public $reduce;

  public function __construct($name, $reduce)
  {
    $this->name = $name;
    $this->reduce = $reduce;
  }
}
