<?php


class BerlinClock
{
    public function getSimpleMinute($int){
        return strval($int%5);
    }

    public function getFiveMinute($int){
        return strval($int%12);
    }

}