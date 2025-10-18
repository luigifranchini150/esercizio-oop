<?php

trait Calculator{

    public function sum($a, $b) {

        return $a + $b;
    }

    public function sub($a, $b) {

        return $a - $b;
    }
        public function mul($a, $b) {

        return $a * $b;
    }

public function div($a, $b) {

        return $a / $b;
    }

    public function sqr($a){

        return sqrt($a);
    }
}


    class Rectangle{

       use Calculator;

       public $base;

       public $height;

    public function  __construct($b,$h)
    {
        $this->base = $b;

        $this->height = $h;
    }

        public function getSurfaceArea(){

          return $this->mul($this->base, $this->height);
        }
        public function getPerimeter(){

          $sum = $this->sum($this->base, $this->height);

          $result = $this->mul($sum, 2);

          return $result;
        }
        public function getDiagonal(){

            $baseSquare = $this->base**2;

            $heightSquare = $this->height**2;

            $sum = $this->sum($baseSquare, $heightSquare);

            $result = $this->sqr($sum);

            return $result;
        }
    }
            $rettangolo = new Rectangle(5,2);

            echo $rettangolo->getSurfaceArea() . "\n";

            echo $rettangolo->getPerimeter() . "\n";

            echo $rettangolo->getDiagonal() . "\n";
           













