<?php
// ES.1 PT.2
// Classe astratta che richiama la prima

require_once 'class.php';

class Post {
    private $titolo;
    private $categoria;
    private $tag;

    public function __construct($titolo, Categoria $categoria, $tag) {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function mostraArticolo() {
        echo "Titolo: " . $this->titolo . "\n";
        echo $this->categoria->getMyCategory() . "\n";
        echo "Tag: " . $this->tag . "\n";
    }
}

// Creazione delle istanze delle categorie
$attualita = new Attualita();
$sport = new Sport();
$gossip = new Gossip();
$storia = new Storia();

// Creazione delle istanze di Post
$post1 = new Post("Il mondo attuale", $attualita, "attualità, informazione");
$post2 = new Post("Le ultime notizie sul calcio", $sport, "sport, calcio");
$post3 = new Post("Le ultime curiosità sul gossip", $gossip, "gossip, celebrità");
$post4 = new Post("Storia antica", $storia, "storia, antichità");

// Visualizzazione degli articoli
$post1->mostraArticolo();
echo "\n";
$post2->mostraArticolo();
echo "\n";
$post3->mostraArticolo();
echo "\n";
$post4->mostraArticolo();
