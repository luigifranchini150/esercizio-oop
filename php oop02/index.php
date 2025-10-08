<?php


class Continent{
    public $nameContinent;

    public function __construct($continent) {
            $this->nameContinent = $continent;
    }
}
class Country extends Continent{
    public $nameCountry;

    public function __construct($continent, $country){

        parent::__construct($continent);

        $this->nameCountry = $country;
    }
    
}
class Region extends Country{

    public $nameRegion;

    public function __construct($continent,$cauntry,$region)
    {
        parent::__construct($continent,$cauntry);

        $this->nameRegion = $region;
    }

}
class Province extends Region{

    public $nameProvince;

    public function __construct($continent,$cauntry,$region,$province){

        parent::__construct($continent,$cauntry,$region);

        $this->nameProvince = $province;
    }
}
class City extends province{

    public $nameCity;

    public function __construct($continent, $cauntry, $region, $province, $city)
{
        parent::__construct($continent, $cauntry, $region, $province);

        $this->nameCity = $city;
}
}
class Street extends City{

    public $nameStreet;

    public function __construct($continent, $cauntry, $region, $province, $city, $street)
{
    parent::__construct($continent, $cauntry, $region, $province, $city);

    $this->nameStreet = $street;
}
public function getMyCurrentLocation(){

    echo "mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet \n";
}
}
$myLocation = new Street('Europa', 'Italia', 'Lazio', 'Roma', 'Roma', 'Via Appia');

$myLocation->getMyCurrentLocation();




