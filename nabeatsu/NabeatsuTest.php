<?php

require_once 'PHPUnit.php';
require_once 'nabeatsu.php';

class NabeatsuTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Nabeatsu
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Nabeatsu;
    }

    /**
     * @covers Nabeatsu::multiple
     */
    public function testMultiple()
    {
        $this->assertTrue($this->object->multiple(9, 3));
        $this->assertFalse($this->object->multiple(9, 4));
        $this->assertFalse($this->object->multiple(3, 9));
    }

    /**
     * @covers Nabeatsu::fizzbuzz
     */
    public function testFizzbuzz()
    {
        $this->assertEquals('FIZZ', $this->object->fizzbuzz(3));
        $this->assertEquals('FIZZ', $this->object->fizzbuzz(9));
        $this->assertEquals('BUZZ', $this->object->fizzbuzz(5));
        $this->assertEquals('BUZZ', $this->object->fizzbuzz(10));
        $this->assertEquals('FIZZBUZZ', $this->object->fizzbuzz(15));
        $this->assertEquals('FIZZBUZZ', $this->object->fizzbuzz(30));
        $this->assertEquals(2, $this->object->fizzbuzz(2));
    }
}
