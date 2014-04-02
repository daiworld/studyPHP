<?php

require_once 'PHPUnit.php';
require_once 'leapYear.php';

class LeapYearTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var LeapYear
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new LeapYear;
    }

    /**
     * @covers LeapYear::leapYearCheck
     */
    public function testLeapYearCheck()
    {
        $this->assertTrue($this->object->leapYearCheck(2000));
        $this->assertTrue($this->object->leapYearCheck(2012));
        $this->assertFalse($this->object->leapYearCheck(1900));
        $this->assertFalse($this->object->leapYearCheck(2013));
    }
}
