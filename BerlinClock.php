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
        $clock=$this->getSecond($secondes)==1?"seconde light : ON":"seconde light : OFF";
        $clock.=$this->generateLine("five hours: ",$this->getFiveHour(floor($hours/5)),4,"r ");
        $clock.=$this->generateLine("simple hours: ",$this->getSimpleHour($hours%5),4,"r ");
        $clock.=$this->generateLine("five minutes: ",$this->getFiveMinute(floor($minutes/5)),11,"y ","r ",3);
        $clock.=$this->generateLine("simple minutes: ", $this->getSimpleMinute($minutes%5),4,"y ");
        return $clock;
    }

    public function generateLine($prefix,$n,$max,$color,$colorBis=null,$cdt=null){
        $str="\n".$prefix;
        $i = 0;
        while($i<$n) {
            if ($cdt != null && $i % $cdt == 0) {
                $str .= $colorBis;
            } else
                $str .= $color;
            $i++;
        }
        while ($i<$max){
            $str.="OFF ";
            $i++;
        }

        return $str;
    }

}