<?php 
// function that returns an associative array of data for the satistic page
function get_statistiques (){
  return [
    [
      "Indicateur" => "Taux d'emprunt", 
      "Valeur"=> "1.15",
      "Variation"=> "+0.05"
    ],
    [
      "Indicateur" => "CAC40",
      "Valeur" => "5000",
      "Variation"=> "-1.5%"
    ],
    [
      "Indicateur" => "Croissance",
      "Valeur" => "/",
      "Variation"=> "-2.5%"
    ],
    [
      "Indicateur" =>"Dette Publique",
      "Valeur" => "94% PIB",
      "Variation" => "+1.75"
    ],
  ];
}

?>