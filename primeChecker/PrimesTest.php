<?php

require_once 'PHPUnit.php';
require_once 'primes.php';

class PrimesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Primes
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Primes;
    }

    /**
     * @covers Primes::validation
     */
    public function testValidation()
    {
        $this->assertFalse($this->object->validation(''));
        $this->assertFalse($this->object->validation('a'));
        $this->assertFalse($this->object->validation('-'));
        $this->assertTrue($this->object->validation(1));
    }

    /**
     * @covers Primes::primeCheck
     */
    public function testPrimeCheck()
    {
        $this->assertFalse($this->object->primeCheck(-1));
        $this->assertFalse($this->object->primeCheck(0));
        $this->assertFalse($this->object->primeCheck(1));
        $this->assertFalse($this->object->primeCheck(4));
        $this->assertTrue($this->object->primeCheck(2));
        $this->assertTrue($this->object->primeCheck(3));
        $this->assertTrue($this->object->primeCheck(5));
    }
}
