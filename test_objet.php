<?php
include './maison.php';
//créer une instance d'un objet maison
$maison = new Maison('maison',60,40,4);

var_dump($maison);
echo $maison ->surface();

?>