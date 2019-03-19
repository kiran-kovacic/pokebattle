<?php

class Resistance
{
  public $resistance;
  public $reduce;

  public function __construct($resistance, $reduce)
  {
    $this->resistance = $resistance;
    $this->reduce = $reduce;
  }
}
