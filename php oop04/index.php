<?php

class Car
{
    private $num_telaio;

    protected function setCarTelaio($string)
    {
         return $this->num_telaio = $string;
    }

    protected function getCarTelaio(){

    return $this->num_telaio;
    }
    
}
class Fiat extends Car
{
    protected $licenze;

    protected $name;

    public function __construct($targa, $nome)
    {
        $this->licenze = $targa;

        $this->name = $nome;
    }
    public function setMyCarTelaio($string){

        return $this->setCarTelaio($string);
    }

    public function getMyCarTelaio(){

        return $this->getCarTelaio();
    }

    public function printMessage(){

        echo "La mia macchina e' una $this->name con targa $this->licenze e un numero di telaio " . $this->getMyCarTelaio() . " \n";

    }
}
$car = new Fiat('12345678', 'punto');
$car->setMyCarTelaio('987654321');
$car->printMessage();







