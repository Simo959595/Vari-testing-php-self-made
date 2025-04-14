<?php

//CREO LA CLASSE PRINCIPALE E LA CHIAMO PERSON
abstract class Person
{
    public $name;
    public $surname;
    public $Age;

//CREO TRE ELEMENTI PER LA CLASSE PERSON
    public function __construct($a, $b, $c)
    {

        // ASSOCIO OGNUNO DEI TRE ELEMENTI 
        // (name, surname, age)
        // A TRE VARIABILI AD CAZZUM 
        // (a, b, c) CHE DOVRO' RIUTILIZZARE ANCHE IN //SEGUITO OVVIAMENTE
        $this->name = $a;
        $this->surname = $b;
        $this->age = $c;
    }

    abstract public function sayHello();

    // public function sayHello(){
    //     echo "ciao a tutti, sono $this->name! \n";
    
}

// CREO UNA NUOVA PERSON 
$lorenzo = new Person("Lorenzo", 'Lesage', 25 );
$lorenzo->sayHello();
var_dump($lorenzo);

//CREO UNA SOTTOCLASSE DI PERSON E LA CHIAMO TEACHER
class Teacher extends Person
{
    public $subject;
    
    public function __construct($a, $b, $c, $materia)
    {
        parent::__construct($a, $b, $c);;
        $this->subject = $materia;
    }
    public function sayHello(){
        echo "ciao sono $this->name, ho $this->age anni e insegno $this->subject \n";
    }
}

class PrimaryTeacher extends Teacher{
    public $sostegno;
    
    public function sayHello(){
    echo "ciao sono $this->name, ho $this->age, insegno $this->subject e anche $this->sostegno \n";
}
}

// CREO UN NUOVO TEACHER
$matteo = new Teacher('Matteo', 'Sisto', '35', 'frontend');
var_dump($matteo);
$matteo->sayHello();