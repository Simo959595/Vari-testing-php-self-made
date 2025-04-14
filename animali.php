

//CREO UNA CLASSE E LA CHIAMO Animal
class Animal
{
public $species;
public $age;
public $name;


// AGGIUNGO ATTRIBUTO CHE FA RIFERIMENTO ALLA CLASSE STESSA (IN QUESTO CASO UN CONTATORE)
public status $counter = 0;


//DEFINISCO QUALI CARATTERISTICHE COMPRENDE LA CLASSE Animal
public function __construct($specie, $età, $nome)
{
$this->species = $specie;
$this->age = $età;
$this->name = $nome;


//RICHIAMO ATTRIBUTI STATICI [IN QUESTO CASO IL CONTATORE CREATO PRIMA (PER POTER CONTARE GLI ANIMALI), (SELF FA RIFERIMENTO ALLA CLASSE STESSA, CIOE' Animal)]
self::$counter++;
}


//CREO LA FUNZIONE PER AVERE INFORMAZIONI SUGLI OGGETTI
public function info(){
    echo "E' un $this->species di nome $this->name e ha $this->age anni \n";
}

}


//CREO UN NUOVO ANIMALE
$sirbiss = new Animal("serpente", 35, "SirBiss");


// AGGIUNGO NUOVO NOME DOPO IL NOME DEL MIO OGGETTO (SirBiss)
$sirbiss->name = 'Ciccio'; 


//STAMPO TUTTE LE INFORMAZIONI DEL MIO OGGETTO
$sirbiss = info();
