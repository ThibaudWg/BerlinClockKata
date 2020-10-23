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
        $this->assertEquals(0, $actual);
    }

    function testSimpleMinute_Given1_Return1(){
        $actual =$this->berlinClock->getSimpleMinute(1);
        $this->assertEquals(1, $actual);
    }

    function testSimpleMinute_Given5_Return0(){
        $actual =$this->berlinClock->getSimpleMinute(5);
        $this->assertEquals(0, $actual);
    }

    function testFiveMinute_Given0_Return0(){
        $actual =$this->berlinClock->getFiveMinute(0);
        $this->assertEquals(0, $actual);
    }

    function testFiveMinute_Given1_Return1(){
        $actual =$this->berlinClock->getFiveMinute(1);
        $this->assertEquals(1, $actual);
    }

    function testFiveMinute_Given12_Return0(){
        $actual =$this->berlinClock->getFiveMinute(12);
        $this->assertEquals(0, $actual);
    }

    function testSimpleHour_Given0_Return0(){
        $actual =$this->berlinClock->getSimpleHour(0);
        $this->assertEquals(0, $actual);
    }

    function testSimpleHour_Given1_Return1(){
        $actual =$this->berlinClock->getSimpleHour(1);
        $this->assertEquals(1, $actual);
    }

    function testSimpleHour_Given5_Return0(){
        $actual =$this->berlinClock->getSimpleHour(5);
        $this->assertEquals(0, $actual);
    }

    function testFiveHour_Given0_Return0(){
        $actual =$this->berlinClock->getFiveHour(0);
        $this->assertEquals(0, $actual);
    }

    function testFiveHour_Given1_Return1(){
        $actual =$this->berlinClock->getFiveHour(1);
        $this->assertEquals(1, $actual);
    }

    function testFiveHour_Given5_Return0(){
        $actual =$this->berlinClock->getFiveHour(5);
        $this->assertEquals(0, $actual);
    }

    function testSecond_Given0_Return1(){
        $actual =$this->berlinClock->getSecond(0);
        $this->assertEquals(1, $actual);
    }

    function testSecond_Given1_Return0(){
        $actual =$this->berlinClock->getSecond(1);
        $this->assertEquals(0, $actual);
    }

    function testSecond_Given2_Return1(){
        $actual =$this->berlinClock->getSecond(2);
        $this->assertEquals(1, $actual);
    }

    function testClock_Given0_0_0_Return0_0_0_0_1(){
        $actual = $this->berlinClock->getClock(0,0,0);
        $this->assertEquals("seconde light : ON\nfive hours: OFF OFF OFF OFF \nsimple hours: OFF OFF OFF OFF \nfive minutes: OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF \nsimple minutes: OFF OFF OFF OFF ",$actual);
    }

    function testClock_Given0_0_1_Return0_0_0_0_0(){
        $actual = $this->berlinClock->getClock(0,0,1);
        $this->assertEquals("seconde light : OFF\nfive hours: OFF OFF OFF OFF \nsimple hours: OFF OFF OFF OFF \nfive minutes: OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF \nsimple minutes: OFF OFF OFF OFF ",$actual);
    }

    function testClock_Given0_1_0_Return0_0_0_1_1(){
        $actual = $this->berlinClock->getClock(0,1,0);
        $this->assertEquals("seconde light : ON\nfive hours: OFF OFF OFF OFF \nsimple hours: OFF OFF OFF OFF \nfive minutes: OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF \nsimple minutes: y OFF OFF OFF ",$actual);
    }

    function testClock_Given0_5_0_Return0_0_1_0_1(){
        $actual = $this->berlinClock->getClock(0,5,0);
        $this->assertEquals("seconde light : ON\nfive hours: OFF OFF OFF OFF \nsimple hours: OFF OFF OFF OFF \nfive minutes: y OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF \nsimple minutes: OFF OFF OFF OFF ",$actual);
    }

    function testClock_Given0_6_0_Return0_0_1_1_1(){
        $actual = $this->berlinClock->getClock(0,6,0);
        $this->assertEquals("seconde light : ON\nfive hours: OFF OFF OFF OFF \nsimple hours: OFF OFF OFF OFF \nfive minutes: y OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF \nsimple minutes: y OFF OFF OFF ",$actual);
    }

    function testClock_Given1_0_0_Return0_1_0_0_1(){
        $actual = $this->berlinClock->getClock(1,0,0);
        $this->assertEquals("seconde light : ON\nfive hours: OFF OFF OFF OFF \nsimple hours: r OFF OFF OFF \nfive minutes: OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF \nsimple minutes: OFF OFF OFF OFF ",$actual);
    }

    function testClock_Given5_0_0_Return1_0_0_0_1(){
        $actual = $this->berlinClock->getClock(5,0,0);
        $this->assertEquals("seconde light : ON\nfive hours: r OFF OFF OFF \nsimple hours: OFF OFF OFF OFF \nfive minutes: OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF \nsimple minutes: OFF OFF OFF OFF ",$actual);
    }

    function testClock_Given6_0_0_Return1_1_0_0_1(){
        $actual = $this->berlinClock->getClock(6,0,0);
        $this->assertEquals("seconde light : ON\nfive hours: r OFF OFF OFF \nsimple hours: r OFF OFF OFF \nfive minutes: OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF OFF \nsimple minutes: OFF OFF OFF OFF ",$actual);
    }

    function testClock_Given0_15_0_Return0_0_3_0_1(){
        $actual = $this->berlinClock->getClock(0,15,0);
        $this->assertEquals("seconde light : ON\nfive hours: OFF OFF OFF OFF \nsimple hours: OFF OFF OFF OFF \nfive minutes: y y r OFF OFF OFF OFF OFF OFF OFF OFF \nsimple minutes: OFF OFF OFF OFF ",$actual);
    }
}
