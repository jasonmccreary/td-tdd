<?php

namespace Tdd;

class Set {
  private $size = 0;
  private $items = [];

  public function isEmpty() {
    return $this->size === 0;
  }

  public function add($item) {
    ++$this->size;
    $this->items[] = $item;
  }

  public function size() {
    return $this->size;
  }

  public function contains($item) {
    return in_array($item, $this->items, true);
  }
}
