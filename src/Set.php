<?php

namespace Tdd;

class Set {
  private $isEmpty = true;

  public function isEmpty() {
    return $this->isEmpty;
  }

  public function add() {
    $this->isEmpty = false;
  }
}
