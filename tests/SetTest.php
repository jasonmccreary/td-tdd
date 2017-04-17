<?php

use PHPUnit\Framework\TestCase;
use Tdd\Set;

class SetTest extends TestCase
{
    private $emptySet;
    private $oneSet;
    private $manySet;

    public function setUp()
    {
        $this->emptySet = new Set();

        $this->oneSet = new Set();
        $this->oneSet->add('something');

        $this->manySet = new Set();
        $this->manySet->add('one');
        $this->manySet->add(2);
        $this->manySet->add('3');
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->emptySet->isEmpty());
        $this->assertFalse($this->oneSet->isEmpty());
    }

    public function testSize()
    {
        $this->assertSame(0, $this->emptySet->size());
        $this->assertSame(1, $this->oneSet->size());
        $this->assertSame(3, $this->manySet->size());
    }

    public function testContains()
    {
        $this->assertTrue($this->oneSet->contains('something'));
        $this->assertTrue($this->manySet->contains('one'));
        $this->assertTrue($this->manySet->contains(2));
        $this->assertTrue($this->manySet->contains('3'));

        $this->assertFalse($this->emptySet->contains('something'));
        $this->assertFalse($this->oneSet->contains('nothing'));
        $this->assertFalse($this->manySet->contains('2'));
    }

    public function testAdd()
    {
        $set = new Set();

        $this->assertTrue($set->isEmpty());

        $set->add('item');
        $this->assertSame(1, $set->size());
        $this->assertTrue($set->contains('item'));

        $set->add('item');
        $this->assertSame(1, $set->size());
    }

    public function testRemove()
    {
        $set = new Set();
        $set->add('item 1');
        $set->add('item 2');

        $set->remove('item 2');
        $this->assertSame(1, $set->size());
        $this->assertTrue($set->contains('item 1'));

        $set->remove('non-existent item');
        $this->assertSame(1, $set->size());
        $this->assertTrue($set->contains('item 1'));
    }
}
