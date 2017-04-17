<?php

namespace Tdd;

class Set {
  private $isEmpty = true;
  private $size = 0;

  public function isEmpty() {
    return $this->isEmpty;
  }

  public function add() {
    $this->isEmpty = false;
    ++$this->size;
  }

  public function size() {
    return $this->size;
  }
}
