<?php


class BerlinClock
{
    public function getSimpleMinute($int){
        return $int%5;
    }

    public function getFiveMinute($int){
        return $int%12;
    }

    public function getSimpleHour($int){
        return $int%5;
    }

    public function getFiveHour($int){
        return $int%5;
    }

    public function getSecond($int){
        return 1-$int%2;
    }

    public function getClock($hours,$minutes,$secondes){
        return $this->getFiveHour(floor($hours/5))
            .":".$this->getSimpleHour($hours%5)
            .":".$this->getFiveMinute(floor($minutes/5))
            .":".$this->getSimpleMinute($minutes%5)
            .":".$this->getSecond($secondes);
    }

}