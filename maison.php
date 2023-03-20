<?php
class Maison {
    public $nom;
    public $longueur;
    public $largeur;
    public $nbrEtage;

public function __construct($name,$length,$width,$etages){
    $this->nom = $name;
    $this->longueur = $length;
    $this->largeur = $width;
    $this->nbrEtage = $etages;
}
public function getNom(){
    return $this->nom;
}
public function getLargeur(){
    return $this->largeur;
}
public function getLongueur(){
    return $this->longueur;
}
public function getnbrEtage(){
    return $this->nbrEtage;
}

public function surface(){
    return ($this->longueur)*($this->largeur)*($this->nbrEtage);
}
}

?>