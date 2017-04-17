<?php

namespace Tdd;

class Set {
  private $items = [];

  public function isEmpty() {
    return $this->size() === 0;
  }

  public function add($item) {
      if (!$this->contains($item)) {
          $this->items[] = $item;
      }
  }

  public function size() {
    return count($this->items);
  }

  public function contains($item) {
    return in_array($item, $this->items, true);
  }
}
