<?php

namespace Tdd;

class Set {
  private $size = 0;

  public function isEmpty() {
    return $this->size === 0;
  }

  public function add() {
    ++$this->size;
  }

  public function size() {
    return $this->size;
  }
}
