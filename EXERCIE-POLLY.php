<?php
include "Produit.php";
include "Textile.php";
include "Electromenager.php";

$electomenager = new Electromenager( "machinea laver", 750, "ref","150",6);
$textile= new Textile( "couton" , 100 , "ref" ,5 , "rouge" ,19 ) ;
$tabProduit=[$electomenager,$textile];
$electomenager->affichage();
echo "<br>" ;
$textile->affichage();
echo "<br>" ;
function Somme($tabProduit){
    $s=0 ;
    foreach ( $tabProduit as $value){
      $s+= $value->calculTotalPrix () ;
    }
    return $s ;
}

 echo "prix au pannier est " .Somme($tabProduit)  ;

