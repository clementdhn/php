<?php
include './maison.php';
//créer une instance d'un objet maison
$maison = new Maison('maison',60,40,4);

var_dump($maison);
echo '<p>la surface de l\'habitation :'.$maison->getNom().' est égale à '.$maison ->surface().'m²</p>';

?>