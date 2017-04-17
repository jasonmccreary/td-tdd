<?php

use PHPUnit\Framework\TestCase;
use Tdd\Set;

class SetTest extends TestCase
{
    public function testIsEmpty()
    {
        $emptySet = new Set();
        $this->assertTrue($emptySet->isEmpty());

        $oneSet = new Set();
        $oneSet->add('something');
        $this->assertFalse($oneSet->isEmpty());
    }

    public function testSize()
    {
      $emptySet = new Set();
      $this->assertSame(0, $emptySet->size());

      $oneSet = new Set();
      $oneSet->add('something');
      $this->assertSame(1, $oneSet->size());

      $manySet = new Set();
      $manySet->add('one');
      $manySet->add(2);
      $manySet->add('3');
      $this->assertSame(3, $manySet->size());
    }
}
