<?php
// ES.1 PT.1
// Classe astratta base

abstract class Categoria {
    abstract public function getMyCategory();
}

class Attualita extends Categoria {
    public function getMyCategory() {
        return "Categoria Attualità";
    }
}

class Sport extends Categoria {
    public function getMyCategory() {
        return "Categoria Sport";
    }
}

class Gossip extends Categoria {
    public function getMyCategory() {
        return "Categoria Gossip";
    }
}

class Storia extends Categoria {
    public function getMyCategory() {
        return "Categoria Storia";
    }
}