<?php

use PHPUnit\Framework\TestCase;
require "BerlinClock.php";

class BerlinClockTest extends TestCase
{
    private $berlinClock;
    function setUp(): void
    {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }

    function testSimpleMinute_Given0_Return0(){

        $actual =$this->berlinClock->getSimpleMinute(0);
        $this->assertEquals("0", $actual);
    }

    function testSimpleMinute_Given1_Return1(){

        $actual =$this->berlinClock->getSimpleMinute(1);
        $this->assertEquals("1", $actual);
    }

    function testSimpleMinute_Given5_Return0(){

        $actual =$this->berlinClock->getSimpleMinute(5);
        $this->assertEquals("0", $actual);
    }

}
