<?php
// ES. CALCOLI GEOMETRICI 
Trait Calculator
 {
    public function sum($a, $b) {
        return $a + $b;
    }

    public function subtraction($a, $b) {
        return $a - $b;
    }

    public function multiplication($a, $b) {
        return $a * $b;
    }

    public function division($a, $b) {
        if ($b == 0) {
            throw new Exception("NON SI PUO' DIVIDERE PER ZERO!");
        }
        return $a / $b;
    }

    public function sqr($a) {
        return sqrt($a);
    }
}


### Classe Rettangolo
class Rettangolo {
    use Calculator; // Include il trait Calculator

    private $b; // Base
    private $h; // Altezza

    public function __construct($b, $h) {
        $this->b = $b;
        $this->h = $h;
    }

    // Metodo per calcolare l'area
    public function area() {
        return $this->multiplication($this->b, $this->h); // b * h
    }

    // Metodo per calcolare il perimetro
    public function perimetro() {
        return $this->sum($this->sum($this->b, $this->b), $this->sum($this->h, $this->h)); // 2 * b + 2 * h
    }

    // Metodo per calcolare la diagonale
    public function diagonale() {
        return $this->sqr($this->sum($this->sqr($this->b), $this->sqr($this->h))); // √(b² + h²)
    }
}


### Utilizzo della Classe Rettangolo
$rettangolo = new Rettangolo(4, 3);

echo "Area: " . $rettangolo->area() . "\n";
echo "Perimetro: " . $rettangolo->perimetro() . "\n";
echo "Diagonale: " . $rettangolo->diagonale() . "\n";

