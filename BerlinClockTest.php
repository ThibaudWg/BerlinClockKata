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

    function testFiveMinute_Given0_Return0(){
        $actual =$this->berlinClock->getFiveMinute(0);
        $this->assertEquals("0", $actual);
    }

    function testFiveMinute_Given1_Return1(){
        $actual =$this->berlinClock->getFiveMinute(1);
        $this->assertEquals("1", $actual);
    }

    function testFiveMinute_Given12_Return0(){
        $actual =$this->berlinClock->getFiveMinute(12);
        $this->assertEquals("0", $actual);
    }

    function testSimpleHour_Given0_Return0(){
        $actual =$this->berlinClock->getSimpleHour(0);
        $this->assertEquals("0", $actual);
    }

    function testSimpleHour_Given1_Return1(){
        $actual =$this->berlinClock->getSimpleHour(1);
        $this->assertEquals("1", $actual);
    }

    function testSimpleHour_Given5_Return0(){
        $actual =$this->berlinClock->getSimpleHour(5);
        $this->assertEquals("0", $actual);
    }

    function testFiveHour_Given0_Return0(){
        $actual =$this->berlinClock->getFiveHour(0);
        $this->assertEquals("0", $actual);
    }

    function testFiveHour_Given1_Return1(){
        $actual =$this->berlinClock->getFiveHour(1);
        $this->assertEquals("1", $actual);
    }

    function testFiveHour_Given5_Return0(){
        $actual =$this->berlinClock->getFiveHour(5);
        $this->assertEquals("0", $actual);
    }

    function testSecond_Given0_Return0(){
        $actual =$this->berlinClock->getSecond(0);
        $this->assertEquals("0", $actual);
    }
}
