<?php

class Vertebrate{
    public function __construct()
    {
        $this->printVertebrate();
    }
    protected function printVertebrate(){
        echo "sono un animale vertrebrato \n";
    }
}
class WarmBlood extends Vertebrate{
    public function __construct()  
    {
    parent::__construct();
    $this->printWarmBlood();
    }  
    protected function printWarmBlood(){
        echo "Sono un animale a sangue caldo \n";
    }
}
class ColdBlood extends Vertebrate{
    public function __construct() 
    {
         parent::__construct();
         $this->printColdBlood();
    }
    protected function printColdBlood(){
        echo "Sono un animale a sangue freddo \n";
    }
}
class mammal extends WarmBlood{
     public function __construct()
     {
         parent::__construct();
         $this->printmammal();
     } 
     protected function printmammal(){
        echo "Sono un mammifero \n";
     }
}
class Bird extends WarmBlood{
     public function __construct()
     {
         parent::__construct();
         $this->printBird();
     }
      protected function printBird(){
        echo "Sono un uccello \n";
     }
}
class Fish extends ColdBlood
{
    public function __construct()  
    {
        parent::__construct();
        $this->printFish();
    }
    protected function printFish(){
        echo "Sono un pesce \n";
    }        
}
class Reptile extends ColdBlood{
   
    public function __construct() 
    {
        parent::__construct();
        $this->printReptile();
    }
    protected function printReptile(){
        echo "Sono un rettile \n";
    }
}
class Amphibian extends ColdBlood{

    public function __construct() 
    {
    parent::__construct();
     $this->printAmphibian();
    }
    protected function printAmphibian(){
        echo "Sono un anfibio \n";
    }

}
$Rana = new Amphibian();





