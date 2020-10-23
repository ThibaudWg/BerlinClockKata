<?php


class BerlinClock
{
    public function getSimpleMinute($int){
        return strval($int%5);
    }

}