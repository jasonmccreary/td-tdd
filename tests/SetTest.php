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
}
