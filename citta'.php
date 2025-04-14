<?php

// ESERCIZIO 1
//CREO LA CLASSE PRINCIPALE E LA CHIAMO CONTINENT
class Continent
{
    public $nameContinent;
    
    
    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }
}

//CREO IL FIGLIO E LO CHIAMO COUNTRY
class Country extends Continent{
    public $nameCountry;
    
    public function __construct($Continent, $Country){
        
        parent::__construct($Continent);
        
        $this->nameCountry = $Country;
    }
}


//CREO IL FIGLIO E LO CHIAMO REGION
class Region extends Country{
    public $nameRegion;
    
    public function __construct($Continent, $Country, $Region){
        
        parent::__construct($Continent, $Country);
        
        $this->nameRegion = $Region;
    }
}


//CREO IL FIGLIO E LO CHIAMO PROVINCE
class Province extends Region{
    public $nameProvince;
    
    public function __construct($Continent, $Country, $Region, $Province){
        
    parent::__construct($Continent, $Country, $Region);
    
    $this->nameProvince = $Province;
    }
}


//CREO IL FIGLIO E LO CHIAMO CITY
class City extends Province{
    public $nameCity;
    
    public function __construct($Continent, $Country, $Region, $Province, $City){
        
        parent::__construct($Continent, $Country, $Region, $Province);
        
        $this->nameCity = $City;
    }
}


//CREO IL FIGLIO E LO CHIAMO STREET
class Street extends City{
    public $nameStreet;
    
    public function __construct($Continent, $Country, $Region, $Province, $City, $Street){
        
    parent::__construct($Continent, $Country, $Region, $Province, $City);
    
    $this->nameStreet = $Street;
}


//OTTENGO POSIZIONE
public function getMyCurrentLocation()
{
    echo "Al momento mi trovo in {$this->nameContinent}, {$this->nameCountry}, {$this->nameRegion}, {$this->nameProvince}, {$this->nameCity}, {$this->nameStreet} \n";
}
}


//CREAZIONE INDIRIZZI
$myLocation1 = new Street(
       "Europa", 
       "Italia", 
       "Puglia", 
       "Ba",     
       "Bari",   
       "Strada San Giorgio Martire 2D" 
    );
    $myLocation1->getMyCurrentLocation();
    
    
    $myLocation2 = new Street(
        "Nord-America", 
        "New York State", 
        "NY", 
        "New York City",     
        "",   
        "2nd Street, 140" 
    );
    $myLocation2->getMyCurrentLocation();
    
    
    //OPPURE
    
    
    // echo $address1->nameContinent . "\n";
    // echo $address1->nameCountry . "\n";
    // echo $address1->nameRegion . "\n";
// echo $address1->nameProvince . "\n";
// echo $address1->nameCity . "\n";
// echo $address1->nameStreet . "\n";

// echo "\n";

// echo $address2->nameContinent . "\n";
// echo $address2->nameCountry;
// echo $address2->nameRegion . "\n";
// echo $address2->nameProvince . "\n";
// echo $address2->nameCity . "\n";
// echo $address2->nameStreet;



// ESERCIZIO 2

class Animali
{
    public function __construct()
    {
        $this->stampa(); 
    }

    protected function stampa()
    {
        echo "Sono un animale Vertebrato\n";
    }
}

class Vertebrati extends Animali
{
    protected function stampa()
    {
        parent::stampa(); 
        echo "Sono un animale a Sangue Freddo\n";
    }
}

class Fish extends Vertebrati
{
    protected function stampa()
    {
        parent::stampa(); 
        echo "Splash!\n";
    }
}

$magikarp = new Fish();



// ESERCIZIO 3