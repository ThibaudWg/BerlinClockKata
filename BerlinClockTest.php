<?php

use PHPUnit\Framework\TestCase;
require "BerlinClock.php";

class BerlinClockTest extends TestCase
{
    function testMinute_Given0_Return0(){
        $berlinClock = new BerlinClock();
        $actual =$berlinClock->getMinute(0);
        $this->assertEquals("0", $actual);
    }

}
