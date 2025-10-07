<?php
class Company{
    public $name;
    public $location;
    public $tot_employees;
    public static $avg_salary = 1500;
    public static $total = 0;
   
    public function __construct($nome, $sede, $dipendenti){
        $this->name = $nome;
        $this->location = $sede;
        $this->tot_employees = $dipendenti;
    }
    public function checkIfGreater($int1, $int2){
        if($int1 > $int2){
            return true;
        }
            return false;
    }
    public function printCheckEmployees($num = 0){
        if($this->checkIfGreater($this->tot_employees, $num)){
            echo"L'azzienda $this->name con sede in $this->location ha ben $this->tot_employees dipendenti. \n";
        }else{
            echo"L'azzienda $this->name con sede in $this->location non ha abbastanza dipendenti. \n";
        }
    }
    public function calculateAnnualCost ($int){
        return $this->tot_employees * (self::$avg_salary * $int);
    }
    public function printCalculateAnnualCost($month = 12){
        echo "-----$this->name-------\n";
        echo "Il costo annuale dell'ufficio $this->name è di " .$this->calculateAnnualCost($month) . " euro \n";
    }
    public function calculateProgressiveCost($month =12){
        return self::$total += $this->calculateAnnualCost($month);
    }
    public static function printCalculateFinalTotal(){
        echo "La holding ha una previsione di spesa pari a: " . self::$total . " \n";
    }
 }

$company1 = new Company('Aulab', 'Italia', 50);

$company1->printCheckEmployees();

//$company1->printCalculateAnnualCost();
$company2 = new Company('Nintendo', 'Giappone', 5);
$company2->printCheckEmployees();
$company2->calculateProgressiveCost();
$company1->calculateProgressiveCost();
company::printCalculateFinalTotal();








